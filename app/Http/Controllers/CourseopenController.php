<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use App\courseopen;
use Illuminate\Http\Request;

class CourseopenController extends Controller
{
    public function index()
    {
        // return view('course.courseopen.index',['courses' => Course::all()]);
        $subjects = Subject::all();
        $courses = Course::all();
        return view('course.courseopen.index', compact('courses','subjects'));
    }
}
