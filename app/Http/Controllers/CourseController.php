<?php

namespace App\Http\Controllers;

use App\SIC;
use App\Subject;
use App\Course;
use App\Http\Requests\StoreCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('course.index',['courses' => Course::all()]);
        $subjects = Subject::all();
        $courses = Course::all();

        $search=request()->query('search');
        //กระบวนการค้นหา
        if($search){
            $courses = Course::where('coursename','LIKE',"%{$search}%")->get();
        }else{
            $courses = Course::orderBy('coursefac','asc')->get();
        }

        return view('course.index', compact('courses','subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourse $request)
    {
        // $validatedData = $request->validated();
        // $course = Course::create($validatedData);
        $course = Course::create([
            'courseid'=>$request->courseid,
            'coursename'=>$request->coursename,
            'coursefac'=>$request->coursefac,
            'coursefac2'=>$request->coursefac2,
            'courselv'=>$request->courselv,
            'coursecredit'=>$request->coursecredit,
            'courseyear'=>$request->courseyear,
            'courselowcredit'=>$request->courselowcredit,
            'course1'=>$request->course1,
            'course2'=>$request->course2,
            'course21'=>$request->course21,
            'course22'=>$request->course22,
            'course221'=>$request->course221,
            'course222'=>$request->course222,
            'course223'=>$request->course223,
            'course224'=>$request->course224,
            'course225'=>$request->course225,
            'course3'=>$request->course3,
            'course4'=>$request->course4,
            'course5'=>$request->course5,
            'coursesum'=>$request->coursesum,
            'user_id'=>auth()->user()->id
        ]);

        $request->session()->flash('status','Course was created!');
        return redirect()->route('course.index');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('course.show',['course' => Course::findOrFail($id)]);

        // return view('course.index',['courses' => Course::all()]);
        
        $sics = SIC::all();
        $subjects = Subject::all();
        $course = Course::findOrFail($id);
        return view('course.show', compact('course','subjects','sics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit',['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourse $request, $id)
    {
        $course = Course::findOrFail($id);
        $validatedData = $request->validated();
        $course->fill($validatedData);
        $course->save();
        $request->session()->flash('status','Course was updated!');
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        $request->session()->flash('status','Course post was deleted!');
        return redirect()->route('course.index');
    }
}
