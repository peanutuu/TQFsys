<?php

namespace App\Http\Controllers;

use App\Subject;
use App\Tqf5;
use App\Http\Requests\StoreTqf5;
use Illuminate\Http\Request;

class TQF5Controller extends Controller
{

    public function create()
    {
        return view('tqf.tqf5.create')->with('subjects',Subject::all());
    }
   
    public function store(StoreTqf5 $request)
    {

        $validatedData = $request->validated();
        $tqf5 = Tqf5::create($validatedData);
        $request->session()->flash('status','Course was created!');
        return redirect()->route('tqf.index');
 
    }

    public function show($id)
    {
        $subject = Subject::all();
        $tqf5 = Tqf5::findOrFail($id);
        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('tqf.tqf5.show', compact('subject','tqf5'));
    }

    public function edit($id)
    {
        $subjects = Subject::all();
        $tqf5 = Tqf5::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('tqf.tqf5.edit', compact('subjects','tqf5'));
    }

    public function update(StoreTqf5 $request, $id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();
        $request->session()->flash('status','TQF5 was updated!');
        return redirect()->route('tqf.index');
    }

    public function destroy(Request $request, $id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $tqf5->delete();
        $request->session()->flash('status','TQF5 was deleted!');
        return redirect()->route('tqf.index');
    }

    public function copy($id)
    {
        $subjects = Subject::all();
        $tqf5 = Tqf5::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('tqf.tqf5.copy', compact('subjects','tqf5'));
    }

}
