<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseContrpoller extends Controller
{
    public function viewFoundation(){
        $title = "ABOUT";
        return view('courses/pre-foundation', compact('title'));
    }

    public function viewAaklan(){
        $title = "AAKALAN TEST SERIES";
        return view('test-series/aakalan', compact('title'));
    }

    public function viewTadCbse(){
        $title = "TAD CBSE-2024";
        return view('test-series/tad-cbse', compact('title'));
    }

    public function viewTadIcse(){
        $title = "TAD ICSE-2024";
        return view('test-series/tad-icse', compact('title'));
    }
}
