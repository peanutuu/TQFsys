<?php

namespace App\Http\Controllers;

use App\Course;
use App\Subject;
use App\SIC;
use App\Http\Requests\StoreSIC;
use Illuminate\Http\Request;

class SICController extends Controller
{
    public function create()
    {

        $courses = Course::all();
        $subjects = Subject::all();
        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);
        return view('course.subincouse.create',compact('courses','subjects'));
        // return view('subject.index',['subjects' => Subject::all()]);

        // return view('course.subincouse.create')->with('subjects',Subject::all());
        
    }

    public function store(StoreSIC $request)
    {

        $validatedData = $request->validated();
        $sic = SIC::create($validatedData);
        $request->session()->flash('status','Subject was created!');
        return redirect()->route('course.show',['course'=> $sic->course_id]);

    }

    public function edit($id)
    {
        $course = Course::all();
        $subjects = Subject::all();
        $sic = SIC::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('course.subincouse.edit', compact('course','subjects','sic'));
    }

    public function update(StoreSIC $request, $id)
    {
        $sic = SIC::findOrFail($id);
        $validatedData = $request->validated();
        $sic->fill($validatedData);
        $sic->save();
        $request->session()->flash('status','Subject was updated!');
        return redirect()->route('course.show',['course'=> $sic->course_id]);
    }

    public function destroy(Request $request, $id)
    {
        $sic = SIC::findOrFail($id);
        $sic->delete();
        $request->session()->flash('status','Blog post was deleted!');
        return redirect()->route('course.show',['course'=> $sic->course_id]);
    }

    // public function add($id)
    // {
    //     $courses = Course::findOrFail($id);
    //     $subjects = Subject::all();
    //     // $sic = sic::findOrFail($id);

    //     // return view('subject.edit',['subject' => $subject]);
        
    //     return view('course.subincouse.add', compact('courses','subjects'));
    // }

}
