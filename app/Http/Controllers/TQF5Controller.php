<?php

namespace App\Http\Controllers;

use App\Tqf5;
use App\Subject;
use App\Course;
use App\SIC;
use App\Dynamic3Field;
use App\Dynamic4Field;
use App\Dynamic5Field;
use App\User;
use App\Http\Requests\StoreSubject;
use App\Http\Requests\StoreSIC;
use App\Http\Requests\StoreTqf5;
use App\Http\Requests\Store2Tqf5;
use Illuminate\Http\Request;
use PDF;

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
            $tqf5s = Tqf5::orderBy('id','desc')->get();
        }
        
        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);
        return view('tqf5.index',compact('tqf5s','subjects'));
        // return view('subject.index',['subjects' => Subject::all()]);
    }

    public function create()
    {
        return view('tqf5.create')->with('subjects',Subject::all());
    }

    public function create1($id)
    {
        $users = User::all();
        $courses = Course::all();
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf5 = Tqf5::findOrFail($id);
        return view('tqf5.create1', compact('users','courses','subjects','sics','tqf5'));
    }

    public function create2($id)
    {
        $users = User::all();
        $courses = Course::all();
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf5 = Tqf5::findOrFail($id);
        return view('tqf5.create2', compact('users','courses','subjects','sics','tqf5'));
    }

    public function create3($id)
    {
        $users = User::all();
        $courses = Course::all();
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf5 = Tqf5::findOrFail($id);
        return view('tqf5.create3', compact('users','courses','subjects','sics','tqf5'));
    }

    public function create4($id)
    {
        $users = User::all();
        $courses = Course::all();
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf5 = Tqf5::findOrFail($id);
        return view('tqf5.create4', compact('users','courses','subjects','sics','tqf5'));
    }

    public function create5($id)
    {
        $users = User::all();
        $courses = Course::all();
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf5 = Tqf5::findOrFail($id);
        return view('tqf5.create5', compact('users','courses','subjects','sics','tqf5'));
    }

    public function create6($id)
    {
        $users = User::all();
        $courses = Course::all();
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf5 = Tqf5::findOrFail($id);
        return view('tqf5.create6', compact('users','courses','subjects','sics','tqf5'));
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
            'user_id'=>auth()->user()->id,
            'tqf5121' => $request->tqf5121,
            'tqf5131' => $request->tqf5131,
            'tqf5132' => $request->tqf5132,
            'tqf5141' => $request->tqf5141,
            'tqf5142' => $request->tqf5142,
            'tqf5143' => $request->tqf5143,
            'tqf5151' => $request->tqf5151,
            'tqf5241' => $request->tqf5241,
            
        ]);


        $request->session()->flash('status','Course was created!');
        return redirect()->route('tqf5.create1', compact('tqf5'));
 
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

    // public function update(StoreTqf5 $request, $id)
    public function update(StoreTqf5 $request, $id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();
        $request->session()->flash('status','TQF5 was updated!');
        return redirect()->route('tqf5.index');
    }

    public function update1(Store2tqf5 $request, $id)
    // public function update1($id)
    {
        $tqf5 = tqf5::findOrFail($id);
        // $validatedData = $request->validated();
        // $tqf5->fill($validatedData);
        // $tqf5->save();

        // $request->session()->flash('status','tqf5 was updated!');
        // return redirect()->route('tqf5.create2');
        return redirect()->route('tqf5.create2', compact('tqf5'));
    }

    public function update2(Store2tqf5 $request, $id)
    // public function update2($id)
    {
        $tqf5 = tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();

        // $request->session()->flash('status','tqf5 was updated!');
        return redirect()->route('tqf5.index');
        // return redirect()->route('tqf5.create3', compact('tqf5'));
    }

    // public function update3(Store2tqf5 $request, $id)
    public function update3($id)
    {
        $tqf5 = tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();

        session()->flash('status','tqf5 was สร้าง!');
        // return redirect()->route('tqf5.index');
        return redirect()->route('tqf5.create4', compact('tqf5'));
    }

    // public function update4(Store2tqf5 $request, $id)
    public function update4($id)
    {
        $tqf5 = tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();

        // $request->session()->flash('status','tqf5 was updated!');
        // return redirect()->route('tqf5.index');
        return redirect()->route('tqf5.create5', compact('tqf5'));
    }

    // public function update5(Store2tqf5 $request, $id)
    public function update5($id)
    {
        $tqf5 = tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();

        // $request->session()->flash('status','tqf5 was updated!');
        // return redirect()->route('tqf5.index');
        return redirect()->route('tqf5.create6', compact('tqf5'));
    }

    // public function update6(Store2tqf5 $request, $id)
    public function update6($id)
    {
        $tqf5 = tqf5::findOrFail($id);
        $validatedData = $request->validated();
        $tqf5->fill($validatedData);
        $tqf5->save();

        // $request->session()->flash('status','tqf5 was updated!');
        // return redirect()->route('tqf5.index');
        return redirect()->route('tqf5.show', compact('tqf5'));
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
