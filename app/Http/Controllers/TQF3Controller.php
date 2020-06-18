<?php

namespace App\Http\Controllers;

use App\Tqf3;
use App\Subject;
use App\Course;
use App\SIC;
use App\Http\Requests\StoreSubject;
use App\Http\Requests\StoreSIC;
use App\Http\Requests\StoreTqf3;
use App\Http\Requests\Store2Tqf3;
use Illuminate\Http\Request;
use PDF;

class TQF3Controller extends Controller
{
    
    // public function create(Request $request)
    public function create()
    {
        return view('tqf.tqf3.create')->with('subjects',Subject::all());

        // $subjects = Subject::all();
        // $subjects = Subject::findOrFail($id);
        
        // return $request->all();
        // $req = $request->all();

        // $col = $request->all();
        // $cool = '{{ subject_id }}';

        // return view('tqf.tqf3.create')->with($request->all(),'subjects',Subject::all());
        // return view('tqf.tqf3.create', compact('subjects','req'));
    }

    public function store(StoreTqf3 $request)
    {
        $validatedData = $request->validated();
        $tqf3 = Tqf3::create($validatedData);
        // $request->session()->flash('status','Tqf3 was created!');
        // return redirect()->route('tqf.index');
        return redirect()->route('tqf3.create2', compact('tqf3'));
    }

    public function storeTwo(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();
        $request->session()->flash('status','TQF3 was updated!');
        return redirect()->route('tqf.index');
    }

    public function show($id)
    {
        $subjects = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);
        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('tqf.tqf3.show', compact('subjects','tqf3'));
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
        // $request->session()->flash('status','TQF3 was updated!');
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

    // public function select()
    // {
    //     $subjects = Subject::all();
    //     return view('tqf.tqf3.select', compact('subjects'));
    // }

    public function create2($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf.tqf3.create2', compact('subjects','sics','tqf3'));
        
        // ->with('subjects',Subject::all());

        // $subjects = Subject::all();
        // $subjects = Subject::findOrFail($id);
        
        // return $request->all();
        // $req = $request->all();

        // $col = $request->all();
        // $cool = '{{ subject_id }}';

        // return view('tqf.tqf3.create')->with($request->all(),'subjects',Subject::all());
        // return view('tqf.tqf3.create', compact('subjects','req'));
    }

    public function downloadPDF($id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $view = \View::make('tqf.tqf3.pdf', \compact('tqf3'));
        $html = $view->render();
        $pdf = new PDF();
        $pdf::SetTitle('Testreport');
        $pdf::AddPage();
        $pdf::SetFont('freeserif');
        $pdf::WriteHTML($html,true,false,true,false);
        $pdf::Output('report.pdf');
    }


}
