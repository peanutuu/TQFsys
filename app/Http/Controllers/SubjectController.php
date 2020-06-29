<?php

namespace App\Http\Controllers;

// use DB;
use App\Tqf3;
use App\Tqf5;
use App\Course;
use App\Subject;
use App\SIC;
use App\User;
use App\Http\Requests\StoreSubject;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

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
        $users = User::all();

        // $subjects = Subject::orderBy('subjectid','asc')->get();
        
        // $search=request()->query('search');
        // //กระบวนการค้นหา
        // if($search){
        //     $subjects = Subject::where('subjectid','LIKE',"%{$search}%")->get();
        // }else{
        //     $subjects = Subject::orderBy('subjectid','asc')->get();
        // }

        $search=request()->query('search');
        if($search){
            $subjects=Subject::where('subjectid','LIKE',"%{$search}%")->paginate(10);
        }else{
            $subjects=Subject::orderBy('subjectid','asc')->paginate(10);
        }

        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);

        return view('subject.index',compact('courses','subjects','users'));

        // return view('subject.index',['subjects' => Subject::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $courses = Course::all();

        $subjects = Subject::all();

        // return view('subject.create')->with('courses',Course::all());

        return view('subject.create',compact('courses','subjects'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubject $request)
    {
        // $validatedData = $request->validated();
        // $subject = Subject::create($validatedData);
        $subject = Subject::create([
            'subjectid'=>$request->subjectid,
            'subjectnameen'=>$request->subjectnameen,
            'subjectnameth'=>$request->subjectnameth,
            'subjectfac'=>$request->subjectfac,
            'credit'=>$request->credit,
            'avalible'=>$request->avalible,
            'subjectbefore'=>$request->subjectbefore,
            'descriptionth'=>$request->descriptionth,
            'descriptionen'=>$request->descriptionen,
            'pointofsubject'=>$request->pointofsubject,
            'subjectwith'=>$request->subjectwith,
            'user_id'=>auth()->user()->id
        ]);

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
        $sics = SIC::all();
        $tqf3s = Tqf3::all();
        $tqf5s = Tqf5::all();
        $users = User::all();
        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('subject.show', compact('course','subject','sics','tqf3s','tqf5s','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subject::all();
        $courses = Course::all();
        $subject = Subject::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('subject.edit', compact('courses','subject','subjects'));
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

    // public function search(Request $request)
    // {
    //     $search = $request->get('search');

    //     $subjects = DB::table('subjects')->where('subjectid' , 'like' , '%'.$search.'%' );

    //     // $subjects = Subject::orderBy('subjectid','asc')->get();

    //     return view('subject.index',['subjects' => $subjects]);
    // }

}
