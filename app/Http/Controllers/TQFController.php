<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Tqf;
use App\Tqf5;
use App\Tqf3;
use App\Catagorytqf;
use Illuminate\Http\Request;

class TQFController extends Controller
{
    
    public function index()
    {
        $tqfs = Tqf::all();
        $tqf3s = Tqf3::all();
        $tqf5s = Tqf5::all();
        $subjects = Subject::all();
        // $catagorytqfs = Catagorytqf::all();

        $search=request()->query('search');
        //กระบวนการค้นหา
        if($search){
            $tqf3s = Tqf3::where('name','LIKE',"%{$search}%")->get();
        }else{
            $tqf3s = Tqf3::orderBy('year','asc')->get();
        }

        if($search){
            $tqf5s = Tqf5::where('name','LIKE',"%{$search}%")->get();
        }else{
            $tqf5s = Tqf5::orderBy('year','asc')->get();
        }
        
        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);
        return view('tqf.index',compact('tqfs','tqf3s','tqf5s','subjects'));
        // return view('subject.index',['subjects' => Subject::all()]);
    }

    // public function show($id)
    // {

    //     return view('course.show',['course' => Course::findOrFail($id)]);

    //     return view('course.index',['courses' => Course::all()]);
        
    //     $subjects = Subject::all();
    //     $courses = Course::findOrFail($id);
    //     return view('course.show', compact('courses','subjects'));

    // }

}
