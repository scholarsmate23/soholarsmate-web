<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('result', compact('title'));
    }

    public function viewCareer(){
        $title= "CAREER";
        return view('career', compact('title'));
    }

    
}
