<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Pdf;
use App\Models\Results;
use App\Models\GalleryImage;
use App\Models\NewApplicants;
use App\Models\Contact;
use App\Models\SliderImg;
use App\Models\News;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;
use App\Models\Teacher;
use App\Models\Application;
use App\Mail\ApplicationReceived;
use App\Models\Form;

class UserController extends Controller
{

    public function viewWelcome()
    {
        $data = SliderImg::orderBy('created_at', 'desc')->get();
        $news = News::orderBy('created_at', 'desc')->get();
        $forms = Form::where('status', 'active')->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('data', 'news', 'forms'));
    }

    public function viewCourse()
    {
        $title = "COURSES";
        return view('courses', compact('title'));
    }

    public function viewAbout()
    {
        $title = "ABOUT";
        return view('about-page', compact('title'));
    }

    public function viewContact()
    {
        $title = "CONTACTS";
        return view('contact', compact('title'));
    }

    public function viewScholarship()
    {
        $title = "ACADEMICS";
        return view('scholarship', compact('title'));
    }

    public function viewEvents()
    {
        $data = Event::get();
        return view('events-page', compact('data'));
    }

    public function viewResult()
    {
        $results = Results::get();
        return view('pages/result', compact('results'));
    }

    public function viewCareer()
    {
        $careers = Career::where('status', 'active')->get();
        return view('pages/career', compact('careers'));
    }

    public function viewGallery()
    {
        $title = "Gallery";
        $images = GalleryImage::all();
        return view('pages/gallery', compact('images', 'title'));
    }

    public function viewStudentZone()
    {
        $title = "STUDENT-ZONE";
        return view('pages/student-zone', compact('title'));
    }

    public function viewEngineering()
    {
        $title = "Engineering Division (IITJEE-Main/Adv)";
        return view('pages/engineering', compact('title'));
    }

    public function viewSyllabus()
    {
        $syllabus = Pdf::all();
        return view('pages/syllabus', compact('syllabus'));
    }

    public function viewFoundation()
    {
        $title = "PRE - FOUNDATION";
        return view('pages/pre-foundation', compact('title'));
    }

    public function viewMedical()
    {
        $title = "Medical Division (NEET)";
        return view('pages/medical', compact('title'));
    }

    public function viewBoards()
    {
        $title = "BOARDS";
        return view('pages/boards', compact('title'));
    }

    public function viewFaculty()
    {
        $data = Teacher::all();
        $title = "MEET OUR FACULTY MEMBERS";
        return view('pages/faculty', compact('title', 'data'));
    }

    public function downloadPdf($id)
    {
        $pdf = Pdf::findOrFail($id);

        // Path to the PDF file (assuming it's stored in the public folder)
        $filePath = public_path('storage/syllabus/' . $pdf->filename);

        // Return the file as a download response
        return Response::download($filePath);
    }

    public function showViewer($id)
    {
        $pdf = Results::findOrFail($id);
        $filename = $pdf->exam;
        $path = asset('storage/result/' . $pdf->file_name);
        if (!file_exists($path)) {
            return view('pages/pdf-viewer', ['pdfPath' => $path, 'filename' => $filename]);
        } else {
            return view('pages/pdf-viewer', ['pdfPath' => $path, 'filename' => $filename]);
        }
    }

    public function discriptionViewer($id)
    {
        $pdf = Career::findOrFail($id);
        $filename = $pdf->position;
        $path = asset('storage/career/' . $pdf->description_file);
        if (!file_exists($path)) {
            return view('pages/pdf-viewer', ['pdfPath' => $path, 'filename' => $filename]);
        } else {
            return view('pages/pdf-viewer', ['pdfPath' => $path, 'filename' => $filename]);
        }
    }

    public function newsViewer($id)
    {
        $pdf = News::findOrFail($id);
        $filename = $pdf->title;
        $path = asset('storage/news/' . $pdf->image);
        if (!file_exists($path)) {
            return view('blocks/news-detail', ['pdfPath' => $path, 'filename' => $filename]);
        } else {
            return view('blocks/news-detail', ['pdfPath' => $path, 'filename' => $filename]);
        }
    }



    public function viewCalender()
    {
        $title = "ACADEMIC CALENDER";
        return view('pages/calender', compact('title'));
    }

    public function viewApplication()
    {
        $title = "Apply for Admission";
        return view('pages/apply-form', compact('title'));
    }

    public function submitData(Request $request)
    {
        $applicant = new NewApplicants();

        // Fill the model with data from the request
        $applicant->name = $request->name;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->father_name = $request->father_name;
        $applicant->father_occupation = $request->father_occupation;
        $applicant->mobile = $request->mobile;
        $applicant->mother_name = $request->mother_name;
        $applicant->mother_occupation = $request->mother_occupation;
        $applicant->dob = $request->dob;
        $applicant->blood_group = $request->blood_group;
        $applicant->category = $request->category;
        $applicant->nationality = $request->nationality;
        $applicant->address = $request->area . ', ' . $request->city . ', ' . $request->state;
        $applicant->school_name = $request->school_name;
        $applicant->school_address = $request->school_address;
        $applicant->boards = $request->boards;
        $applicant->grade = $request->grade;
        $applicant->course = $request->course;
        $applicant->save();

        Mail::to($applicant->email)->send(new ApplicationSubmitted($applicant));

        return response()->json(['status' => true,  'message' => 'Data submitted successfully'], 200);
    }

    public function saveContact(Request $request)
    {
        // Validate the incoming request
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'mail' => 'required|email|max:255',
        //     'mobile' => 'required|string|max:255',
        //     'message' => 'required|string',
        // ]);

        // Create a new Contact instance
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->mail;
        $contact->mobile = $request->mobile;
        $contact->message = $request->message;

        // Save the contact details
        $contact->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function eventViewer($id)
    {
        $pdf = Event::findOrFail($id);
        $filename = $pdf->title;
        $path = asset('storage/events/' . $pdf->filename);
        if (!file_exists($path)) {
            return view('blocks/event-details', ['pdfPath' => $path, 'filename' => $filename]);
        } else {
            return view('blocks/event-details', ['pdfPath' => $path, 'filename' => $filename]);
        }
    }

    public function careerApply(Request $request)
    {
        $request->validate([
            'career_id' => 'required|exists:career_page,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'availability' => 'required|date',
            'salary' => 'required|string|max:255',
        ]);

        // Store the uploaded resume
        $pdfFile = $request->file('resume');
        $filename = time() . '.' . $pdfFile->getClientOriginalExtension();
        $path = $pdfFile->storeAs('public/application', $filename);

        // Save application data
        $application = Application::create([
            'career_id' => $request->career_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'resume' => $filename,
            'availability' => $request->availability,
            'salary' => $request->salary,
        ]);

        // Attach career details for email
        $application->career = $application->career()->first();

        // Send email with the application details and attached resume
        Mail::to($request->email)->send(new ApplicationReceived($application, $path));

        return response()->json(['success' => true, 'message' => 'Application Sent successfully, We Will Contact You Soon!']);
    }

    public function showApplicationForm($id)
    {
        $career = Career::findOrFail($id);
        return view('pages.job-apply', compact('career'));
    }
}
