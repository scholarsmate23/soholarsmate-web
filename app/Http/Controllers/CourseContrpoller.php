<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseContrpoller extends Controller
{
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
    public function viewPrayashJee(){
        $title = "PRAYASH JEE-2024";
        return view('test-series/prayash-jee', compact('title'));
    }
    public function viewPrayashNeet(){
        $title = "PRAYASH NEET-2024";
        return view('test-series/prayash-neet', compact('title'));
    }

    public function viewUdgoshJee(){
        $title = "उद्घोष-JEE (Foundation Course)";
        return view('courses/udgosh-jee', compact('title'));
    }

    public function viewSafalJee(){
        $title = "सफल -JEE (Target Course)";
        return view('courses/safal-jee', compact('title'));
    }

    public function viewUdgoshNeet(){
        $title = "उद्घोष-NEET (Foundation Course)";
        return view('courses/udgosh-jee', compact('title'));
    }

    public function viewSafalNeet(){
        $title = "सफल-NEET (Target Course)";
        return view('courses/safal-jee', compact('title'));
    }

    public function viewEklavyaTenth(){
        $title = "एकलव्य -Tenth";
        return view('courses/eklavya-tenth', compact('title'));
    }

    public function viewEklavyaNinth(){
        $title = "एकलव्य - Ninth";
        return view('courses/eklavya-ninth', compact('title'));
    }

    public function viewEklavyaEight(){
        $title = "एकलव्य - Eighth";
        return view('courses/eklavya-eight', compact('title'));
    }

    public function viewTarunMath(){
        $title = "तरूण - Maths";
        return view('courses/tarun-math', compact('title'));
    }

    public function viewTarunBio(){
        $title = "तरूण - Biology";
        return view('courses/tarun-biology', compact('title'));
    }
    
}
