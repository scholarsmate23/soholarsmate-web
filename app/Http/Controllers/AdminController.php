<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Results;
use App\Models\Contact;
use App\Models\NewApplicants;
use App\Models\Pdf;
use App\Models\Career;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function manageCourse(){
        return view('auth/manage-course');
    }

    public function manageContacts(){
        $data = Contact::orderBy('created_at', 'desc')->get();
        return view('auth/manage-contacts', compact('data'));
    }
    

    public function manageApplicants(){
        $data = NewApplicants::orderBy('created_at', 'desc')->get();
        return view('auth/manage-applicants', compact('data'));
    }
    
    public function manageResults(){
        $data = Results::get();
        return view('auth/manage-result', compact('data'));
    }
    
    public function manageSyllabus(){
        $data = Pdf::get();
        return view('auth/manage-syllabus', compact('data'));
    }


    public function manageCareer(){
        $data = Career::get();
        return view('auth/manage-career', compact('data'));
    }

    public function manageNews(){
        $data = News::get();
        return view('auth/manage-news', compact('data'));
    }


    public function manageJobApplicants(){
        return view('auth/job-applicants');

    }


    public function addSyllabus(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = time().'_'.$pdfFile->getClientOriginalName();
    
            $path = $pdfFile->storeAs('public/syllabus', $filename);

            // Save the file name in the database
            Pdf::create([
                'name' => $request->title,
                'course_type' => $request->type,
                'filename' => $filename,
            ]);
            return response()->json(['message' => 'Syllabus Added successfully'], 200);
        }else {
            return response()->json(['message' => 'Something Went Wrong'], 200);

        }
    }

    public function deleteSyllabus(Request $request){
        $image = Pdf::findOrFail($request->id);
        Storage::delete('public/syllabus'.$image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function addNews(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $path = $image->storeAs('public/news', $imageName);

            // Save the file name in the database
            News::create([
                'title' => $request->title,
                'description' => $request->discription,
                'image' => $imageName,
            ]);
        }
        return response()->json(['message' => 'News uploaded successfully'], 200);
    }

    public function deleteNews(Request $request){
        $image = News::findOrFail($request->id);
        Storage::delete('public/news'.$image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }


    public function addCareer(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = time().'_'.$pdfFile->getClientOriginalName();
    
            $path = $pdfFile->storeAs('public/career', $filename);

            // Save the file name in the database
            Career::create([
                'position' => $request->title,
                'location' => $request->location,
                'description_file' => $filename,
            ]);
            return response()->json(['message' => 'Career Added successfully'], 200);
        }else {
            return response()->json(['message' => 'Something Went Wrong'], 200);

        }
    }

    public function deletCareer(Request $request){
        $image = Career::findOrFail($request->id);
        Storage::delete('public/career'.$image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }


    public function addResult(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = time().'_'.$pdfFile->getClientOriginalName();
    
            $path = $pdfFile->storeAs('public/result', $filename);

            // Save the file name in the database
            Results::create([
                'exam' => $request->exam,
                'file_name' => $filename,
            ]);
            return response()->json(['message' => 'Career Added successfully'], 200);
        }else {
            return response()->json(['message' => 'Something Went Wrong'], 200);

        }
    }

    public function deletResult(Request $request){
        $image = Results::findOrFail($request->id);
        Storage::delete('public/result'.$image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Career deleted successfully.');
    }


}
