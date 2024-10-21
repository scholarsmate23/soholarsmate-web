<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormSubmission;
use Illuminate\Support\Str;

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
        \Log::info('formName' . json_encode($formName));

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

        return redirect()->route('home')->with('success', 'Form submitted successfully!');
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
}
