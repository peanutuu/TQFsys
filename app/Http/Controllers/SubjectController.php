<?php

namespace App\Http\Controllers;

use App\Tqf3;
use App\Tqf5;
use App\Course;
use App\Subject;
use App\Http\Requests\StoreSubject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $subjects = Subject::all();
        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);
        return view('subject.index',compact('courses','subjects'));
        // return view('subject.index',['subjects' => Subject::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.create')->with('courses',Course::all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubject $request)
    {
        $validatedData = $request->validated();
        $subject = Subject::create($validatedData);
        $request->session()->flash('status','Subject was created!');
        return redirect()->route('subject.show',['subject'=> $subject->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        $course = Course::all();
        $tqf3s = Tqf3::all();
        $tqf5s = Tqf5::all();
        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('subject.show', compact('course','subject','tqf3s','tqf5s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::all();
        $subject = Subject::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('subject.edit', compact('courses','subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSubject $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $validatedData = $request->validated();
        $subject->fill($validatedData);
        $subject->save();
        $request->session()->flash('status','Subject was updated!');
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        $request->session()->flash('status','Blog post was deleted!');
        return redirect()->route('subject.index');
    }

}
