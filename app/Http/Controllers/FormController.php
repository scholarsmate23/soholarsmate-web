<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormSubmission;
use Illuminate\Support\Str;
use PDF;
use App\Models\TadFeedback;

class FormController extends Controller
{
    public function manageForm()
    {
        $forms = Form::all();

        return view('auth/manage-form', compact('forms'));
    }

    public function createForm()
    {
        return view('auth/create-forms');
    }
    public function saveForm(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'form_name' => 'required|string|max:255',
            'field_name' => 'required|array|min:1',
            'field_name.*' => 'required|string|max:255',
            'field_type' => 'required|array|min:1',
            'field_type.*' => 'required|string|in:text,number,textarea,select',
            'field_options' => 'nullable|array',
            'field_options.*' => 'nullable|string',
        ]);

        // Create new form instance
        $form = new Form();
        $form->form_name = $request->input('form_name');
        $form->form_slug = Str::slug($request->input('form_name'));  // Create slug from form name
        // Prepare form structure as an array
        $formStructure = [];
        foreach ($request->input('field_name') as $key => $fieldName) {
            $fieldLabel = $request->input('field_label')[$key];
            $fieldType = $request->input('field_type')[$key];
            $fieldOptions = ($fieldType === 'select') ? explode(',', $request->input('field_options')[$key]) : null;

            // Push each field data to the form structure array
            $formStructure[] = [
                'label' => $fieldLabel,
                'name' => $fieldName,
                'type' => $fieldType,
                'options' => $fieldOptions,
            ];
        }

        // Save form structure as JSON in the 'form_structure' column
        $form->form_structure = json_encode($formStructure);
        $form->save();

        // Redirect back to the form creation page with a success message
        return redirect()->route('manage.form')->with('success', 'Form created successfully!');
    }

    public function showForm($slug)
    {
        $form = Form::where('form_slug', $slug)->firstOrFail();
        $formStructure = json_decode($form->form_structure, true);

        return view('pages.view-forms', compact('form', 'formStructure'));
    }

    public function submitForm(Request $request, $formId)
    {
        $form = Form::findOrFail($formId);

        // Get form structure to validate fields
        $formStructure = json_decode($form->form_structure, true);
        $formName = $form->form_name;

        // Collect the submitted data
        $submittedData = [];
        foreach ($formStructure as $field) {
            $fieldName = str_replace(' ', '_', strtolower($field['name']));
            $submittedData[$fieldName] = $request->input($fieldName);
        }

        // Save the submission
        FormSubmission::create([
            'form_id' => $formId,
            'form_name' => $formName,
            'submission_data' => json_encode($submittedData),
        ]);

        return response()->json(['success' => true,  'message' => 'Data submitted successfully']);
    }


    public function showData($slug)
    {
        $form = Form::where('form_slug', $slug)->firstOrFail();
        $submissions = FormSubmission::where('form_id', $form->id)->get();

        return view('form.submissions', compact('form', 'submissions'));
    }

    public function destroy($id)
    {
        // Find the form by its ID
        $form = Form::findOrFail($id);

        // Delete the form and its submissions if any
        $form->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Form deleted successfully.');
    }

    public function showSubmissions()
    {
        // Retrieve all forms
        $forms = Form::with('submissions')->orderBy('id', 'desc')->get();

        $groupedSubmissions = $forms->mapWithKeys(function ($form) {
            return [$form->form_name => $form->submissions];
        });

        // Retrieve feedback ordered by created_at in ascending order
        $feedback = TadFeedback::orderBy('created_at', 'asc')->get();
        return view('auth.manage-form-applicants', [
            'groupedSubmissions' => $groupedSubmissions,
            'feedback' => $feedback
        ]);
    }

    public function updateFormStatus(Request $request)
    {
        $form = Form::find($request->id);

        if ($form) {
            $form->status = $request->status;
            $form->save();

            return response()->json(['success' => true, 'message' => 'Status updated successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Career not found']);
    }
    public function downloadPDF($formName)
    {
        // Fetch data for the specific form
        $submissions = FormSubmission::where('form_name', $formName)->get();

        // Format submissions for the PDF
        $formattedSubmissions = [];
        foreach ($submissions as $submission) {
            $submittedData = json_decode($submission->submission_data, true);
            $formattedSubmissions[] = array_merge($submittedData, [
                'submitted_on' => \Carbon\Carbon::parse($submission->created_at)->format('d-m-Y H:i:s'),
            ]);
        }

        $data = [
            'formName' => $formName,
            'submissions' => $formattedSubmissions,
        ];

        // Load the view and set PDF orientation to landscape
        $pdf = PDF::loadView('pdf.submissions', $data)->setPaper('a4', 'landscape');

        return $pdf->download("Submissions_for_{$formName}.pdf");
    }

    public function viewFormApplicants($formName)
    {
        $submissions = FormSubmission::where('form_name', $formName)->get();
        return view('auth.view-form-applicants', compact('formName', 'submissions'));
    }

    public function exportFeedbackToPDF()
    {
        $feedback = TadFeedback::orderBy('created_at', 'asc')->get();
        $pdf = PDF::loadView('auth.feedback-pdf', compact('feedback'))->setPaper('a4', 'landscape');
        return $pdf->download('feedback.pdf');
    }
}
