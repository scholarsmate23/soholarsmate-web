<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Pdf;
use App\Models\Results;
use App\Models\GalleryImage;
use App\Models\NewApplicants;

class UserController extends Controller
{
    public function viewCourse(){
        $title = "COURSES";
        return view('courses', compact('title'));
    }

    public function viewAbout(){
        $title = "ABOUT";
        return view('about-page', compact('title'));
    }

    public function viewContact(){
        $title = "CONTACTS";
        return view('contact', compact('title'));
    }

    public function viewScholarship(){
        $title = "ACADEMICS";
        return view('scholarship', compact('title'));
    }
    
    public function viewEvents(){
        $title = "EVENTS";
        return view('events-page', compact('title'));
    }

    public function viewResult(){
        $title = "RESULTS";
        return view('pages/result', compact('title'));
    }

    public function viewCareer(){
        $title= "CAREER";
        return view('pages/career', compact('title'));
    }

    public function viewGallery()
    {
        $title= "Gallery";
        $images = GalleryImage::all();
        return view('pages/gallery', compact('images', 'title'));
    }

    public function viewStudentZone(){
        $title= "STUDENT-ZONE";
        return view('pages/student-zone', compact('title'));
    }

    public function viewEngineering(){
        $title= "Engineering Division (IITJEE-Main/Adv)";
        return view('pages/engineering', compact('title'));
    }
    
    public function viewSyllabus(){
        $title= "SYLLABUS";
        return view('pages/syllabus', compact('title'));
    }

    public function viewFoundation(){
        $title= "PRE - FOUNDATION";
        return view('pages/pre-foundation', compact('title'));
    }

    public function viewMedical(){
        $title= "Medical Division (NEET)";
        return view('pages/medical', compact('title'));
    }

    public function viewBoards(){
        $title= "BOARDS";
        return view('pages/boards', compact('title'));
    }

    public function downloadPdf($id)
    {
        $pdf = Pdf::findOrFail($id);

        // Path to the PDF file (assuming it's stored in the public folder)
        $filePath = public_path('assets/storage/pdfs/' . $pdf->filename . '.pdf');

        // Return the file as a download response
        return Response::download($filePath);
    }

    public function showViewer($id)
    {   

        // Fetch the PDF record from the database based on the ID
        $pdf = Results::findOrFail($id);

        // Construct the path to the PDF file
        $path = public_path('assets/storage/results/' . $pdf->file_name . '.pdf');

        // Check if the file exists
        if (!file_exists($path)) {
            return view('pdf-viewer', ['pdfPath' => $path, 'data' => $pdf]);
        }else{
            return view('pages/pdf-viewer', ['pdfPath' => $path, 'data' => $pdf]);

        }

        // Pass the PDF path to the view along with the PDF filename
    }

    public function viewCalender(){
        $title= "ACADEMIC CALENDER";
        return view('pages/calender', compact('title'));
    }

    public function viewApplication(){
        $title= "Apply for Admission";
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

        return response()->json(['status' => true,  'message' => 'Data submitted successfully'], 200);
    }

}
