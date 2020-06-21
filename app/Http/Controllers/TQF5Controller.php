<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Tqf5;
use App\Http\Requests\StoreTqf5;
use Illuminate\Http\Request;

class TQF5Controller extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        // $catagorytqfs = Catagorytqf::all();

        $search=request()->query('search');
        if($search){
            $tqf5s = Tqf5::where('name','LIKE',"%{$search}%")->get();
        }else{
            $tqf5s = Tqf5::orderBy('year','asc')->get();
        }
        
        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);
        return view('tqf5.index',compact('tqf5s','subjects'));
        // return view('subject.index',['subjects' => Subject::all()]);
    }

    public function create()
    {
        return view('tqf5.create')->with('subjects',Subject::all());
    }
   
    public function store(StoreTqf5 $request)
    {

        // $validatedData = $request->validated();
        // $tqf5 = Tqf5::create($validatedData);
        $tqf5 = Tqf5::create([
            'name'=>$request->name,
            'year'=>$request->year,
            'term'=>$request->term,
            'subject_id'=>$request->subject_id,
            'user_id'=>auth()->user()->id
        ]);


        $request->session()->flash('status','Course was created!');
        return redirect()->route('tqf5.index');
 
    }

    public function show($id)
    {
        $subject = Subject::all();
        $tqf5 = Tqf5::findOrFail($id);
        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('tqf5.show', compact('subject','tqf5'));
    }

    public function edit($id)
    {
        $subjects = Subject::all();
        $tqf5 = Tqf5::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('tqf5.edit', compact('subjects','tqf5'));
    }

    public function update(StoreTqf5 $request, $id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();
        $request->session()->flash('status','TQF5 was updated!');
        return redirect()->route('tqf5.index');
    }

    public function destroy(Request $request, $id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $tqf5->delete();
        $request->session()->flash('status','TQF5 was deleted!');
        return redirect()->route('tqf5.index');
    }

    public function copy($id)
    {
        $subjects = Subject::all();
        $tqf5 = Tqf5::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('tqf5.copy', compact('subjects','tqf5'));
    }

}
