<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonPlanController extends Controller
{
    //
    function index(){
        return view('lessonplans.index');
    }
}
