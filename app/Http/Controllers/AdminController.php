<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Results;
use App\Models\Contact;
use App\Models\NewApplicants;
use App\Models\Pdf;
use App\Models\Career;
use App\Models\News;
use App\Models\Event;
use App\Models\Teacher;
use Illuminate\Support\Facades\Storage;
use DB;

class AdminController extends Controller
{
    public function manageCourse()
    {
        return view('auth/manage-course');
    }

    public function manageContacts()
    {
        $data = Contact::orderBy('created_at', 'desc')->get();
        return view('auth/manage-contacts', compact('data'));
    }


    public function manageApplicants()
    {
        $data = NewApplicants::orderBy('created_at', 'desc')->get();
        return view('auth/manage-applicants', compact('data'));
    }

    public function manageResults()
    {
        $data = Results::get();
        return view('auth/manage-result', compact('data'));
    }

    public function manageSyllabus()
    {
        $data = Pdf::get();
        return view('auth/manage-syllabus', compact('data'));
    }


    public function manageCareer()
    {
        $data = Career::get();
        return view('auth/manage-career', compact('data'));
    }

    public function manageNews()
    {
        $data = News::get();
        return view('auth/manage-news', compact('data'));
    }


    public function manageJobApplicants()
    {
        $applications = DB::table('applications')
            ->join('career_page', 'applications.career_id', '=', 'career_page.id')
            ->select(
                'applications.id as application_id',
                'applications.name as applicant_name',
                'applications.email',
                'applications.phone',
                'applications.address',
                'applications.resume',
                'applications.availability',
                'applications.salary',
                'career_page.position as career_position',
                'career_page.location as career_location',
                'applications.created_at'
            )
            ->orderBy('applications.created_at', 'desc')
            ->get();
        return view('auth/job-applicants', compact('applications'));
    }

    public function manageEvents()
    {
        $data = Event::get();
        return view('auth/manage-events', compact('data'));
    }

    public function manageTeacher()
    {
        $data = Teacher::get();
        return view('auth/manage-teacher', compact('data'));
    }

    public function addSyllabus(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = time() . '_' . $pdfFile->getClientOriginalName();

            $path = $pdfFile->storeAs('public/syllabus', $filename);

            // Save the file name in the database
            Pdf::create([
                'name' => $request->title,
                'course_type' => $request->type,
                'filename' => $filename,
            ]);
            return response()->json(['message' => 'Syllabus Added successfully'], 200);
        } else {
            return response()->json(['message' => 'Something Went Wrong'], 200);
        }
    }

    public function deleteSyllabus(Request $request)
    {
        $image = Pdf::findOrFail($request->id);
        Storage::delete('public/syllabus' . $image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }

    public function addNews(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
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

    public function deleteNews(Request $request)
    {
        $image = News::findOrFail($request->id);
        Storage::delete('public/news' . $image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }


    public function addCareer(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = time() . '_' . $pdfFile->getClientOriginalName();

            $path = $pdfFile->storeAs('public/career', $filename);

            // Save the file name in the database
            Career::create([
                'position' => $request->title,
                'location' => $request->location,
                'description_file' => $filename,
            ]);
            return response()->json(['message' => 'Career Added successfully'], 200);
        } else {
            return response()->json(['message' => 'Something Went Wrong'], 200);
        }
    }

    public function deletCareer(Request $request)
    {
        $image = Career::findOrFail($request->id);
        Storage::delete('public/career' . $image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }


    public function addResult(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfFile = $request->file('pdf');
            $filename = time() . '_' . $pdfFile->getClientOriginalName();

            $path = $pdfFile->storeAs('public/result', $filename);

            // Save the file name in the database
            Results::create([
                'exam' => $request->exam,
                'file_name' => $filename,
            ]);
            return response()->json(['message' => 'Career Added successfully'], 200);
        } else {
            return response()->json(['message' => 'Something Went Wrong'], 200);
        }
    }

    public function deletResult(Request $request)
    {
        $image = Results::findOrFail($request->id);
        Storage::delete('public/result' . $image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Career deleted successfully.');
    }

    public function addEvents(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/events', $imageName);

            // Save the file name in the database
            Event::create([
                'title' => $request->title,
                'event_on' => $request->event_on,
                'location' => $request->location,
                'filename' => $imageName,
            ]);
        }
        return response()->json(['message' => 'Events uploaded successfully'], 200);
    }

    public function deleteEvents(Request $request)
    {
        $image = Event::findOrFail($request->id);
        Storage::delete('public/events' . $image->filename);

        $image->delete();
        return redirect()->back()->with('success', 'Events deleted successfully.');
    }


    public function addTeacher(Request $request)
    {

        // Validate incoming data
        // $validated = $request->validate([
        //     'name' => 'required|string|max:45',
        //     'qualification' => 'required|string|max:45',
        //     'details' => 'nullable|string|max:100',
        //     'experience_year' => 'nullable|integer',
        //     'prev_exp' => 'nullable|array',
        //     'profile_img' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        //     'instagram_url' => 'nullable|url|max:100',
        //     'facebook_url' => 'nullable|url|max:100',
        //     'video_url' => 'nullable|url|max:255', // New column for demo video URL
        // ]);
        // Handle file upload for profile image with custom filename logic
        if ($request->hasFile('profile_img')) {
            $image = $request->file('profile_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/teacher', $imageName);


            // Store data in the database
            Teacher::create([
                'name' => $request['name'],
                'qualification' => $request['qualification'],
                'details' => $request['details'],
                'experience_year' => $request['experience_year'],
                'prev_exp' => json_encode($request['prev_exp']),
                'profile_img' => $imageName,
                'instagram_url' => $request['instagram_url'],
                'facebook_url' => $request['facebook_url'],
                'video_url' => $request['video_url'], // Save demo video URL
            ]);
        }
        return redirect()->back()->with('success', 'Teacher added successfully!');
    }

    public function updateStatus(Request $request)
    {
        $career = Career::find($request->id);

        if ($career) {
            $career->status = $request->status;
            $career->save();

            return response()->json(['success' => true, 'message' => 'Status updated successfully']);
        }

        return response()->json(['success' => false, 'message' => 'Career not found']);
    }
}
