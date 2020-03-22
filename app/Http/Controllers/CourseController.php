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
        $validatedData = $request->validated();
        $course = Course::create($validatedData);
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
