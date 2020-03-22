<?php

namespace App\Http\Controllers;

use App\Tqf3;
use App\Subject;
use App\Http\Requests\StoreTqf3;
use Illuminate\Http\Request;

class TQF3Controller extends Controller
{
    
    public function create()
    {
        return view('tqf.tqf3.create')->with('subjects',Subject::all());
    }

    public function store(StoreTqf3 $request)
    {
        $validatedData = $request->validated();
        $tqf3 = Tqf3::create($validatedData);
        $request->session()->flash('status','Course was created!');
        return redirect()->route('tqf.index');
    }

    public function show($id)
    {
        $subject = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);
        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('tqf.tqf3.show', compact('subject','tqf3'));
    }

    public function edit($id)
    {
        $subjects = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('tqf.tqf3.edit', compact('subjects','tqf3'));
    }

    public function update(StoreTqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();
        $request->session()->flash('status','TQF3 was updated!');
        return redirect()->route('tqf.index');
    }

    public function destroy(Request $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $tqf3->delete();
        $request->session()->flash('status','TQF3 was deleted!');
        return redirect()->route('tqf.index');
    }

    public function copy($id)
    {
        $subjects = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);

        // return view('subject.edit',['subject' => $subject]);
        
        return view('tqf.tqf3.copy', compact('subjects','tqf3'));
    }

}
