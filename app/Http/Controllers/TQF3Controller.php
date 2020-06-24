<?php

namespace App\Http\Controllers;

use App\Tqf3;
use App\Subject;
use App\Course;
use App\SIC;
use App\DynamicField;
use App\Dynamic2Field;
use App\Http\Requests\StoreSubject;
use App\Http\Requests\StoreSIC;
use App\Http\Requests\StoreTqf3;
use App\Http\Requests\Store2Tqf3;
use Illuminate\Http\Request;
use PDF;

class TQF3Controller extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        // $catagorytqfs = Catagorytqf::all();

        $search=request()->query('search');
        if($search){
            $tqf3s = Tqf3::where('name','LIKE',"%{$search}%")->get();
        }else{
            $tqf3s = Tqf3::orderBy('year','asc')->get();
        }
        
        // $subject = Subject::with(Courses)->orderby('id','desc')->paginate(5);
        return view('tqf3.index',compact('tqf3s','subjects'));
        // return view('subject.index',['subjects' => Subject::all()]);
    }

    // public function create(Request $request)
    public function create()
    {
        return view('tqf3.create')->with('subjects',Subject::all());

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
        // $validatedData = $request->validated();
        // $tqf3 = Tqf3::create($validatedData);

        $tqf3 = Tqf3::create([
            'name'=>$request->name,
            'year'=>$request->year,
            'term'=>$request->term,
            'subject_id'=>$request->subject_id,
            'user_id'=>auth()->user()->id,
            'tqf3121' => $request->tqf3121,
            'tqf3131' => $request->tqf3131,
            'tqf3132' => $request->tqf3132,
            'tqf3133' => $request->tqf3133,
            'tqf3141' => $request->tqf3141,
            'tqf3151' => $request->tqf3151,
            'tqf3152' => $request->tqf3152,
            'tqf3161' => $request->tqf3161,
            'tqf3171' => $request->tqf3171,
            'tqf3181' => $request->tqf3181,
            'tqf3182' => $request->tqf3182,
            'tqf3183' => $request->tqf3183,
            'tqf3191' => $request->tqf3191,
            'tqf3211' => $request->tqf3211,
            'tqf3221' => $request->tqf3221,
            'tqf3311' => $request->tqf3311,
            'tqf3321' => $request->tqf3321,
            'tqf3322' => $request->tqf3322,
            'tqf3323' => $request->tqf3323,
            'tqf3324' => $request->tqf3324,
            'tqf3331' => $request->tqf3331,
            'tqf3341' => $request->tqf3341,
            'tqf3412' => $request->tqf3412,
            'tqf3413' => $request->tqf3413,
            'tqf3422' => $request->tqf3422,
            'tqf3423' => $request->tqf3423,
            'tqf3432' => $request->tqf3432,
            'tqf3433' => $request->tqf3433,
            'tqf3442' => $request->tqf3442,
            'tqf3443' => $request->tqf3443,
            'tqf3452' => $request->tqf3452,
            'tqf3453' => $request->tqf3453,
            'tqf3521' => $request->tqf3521,
            'tqf3522' => $request->tqf3522,
            'tqf3610' => $request->tqf3610,
            'tqf3620' => $request->tqf3620,
            'tqf3630' => $request->tqf3630,
            'tqf3710' => $request->tqf3710,
            'tqf3720' => $request->tqf3720,
            'tqf3730' => $request->tqf3730,
            'tqf3740' => $request->tqf3740,
            'tqf3750' => $request->tqf3750, 
        ]);


        // session()->flash('status','Tqf3 was created!');
        // return redirect()->route('tqf.index');
        return redirect()->route('tqf3.create1', compact('tqf3'));
    }

    // public function storeTwo(Store2Tqf3 $request, $id)
    // {
    //     $tqf3 = Tqf3::findOrFail($id);
    //     $validatedData = $request->validated();
    //     $tqf3->fill($validatedData);
    //     $tqf3->save();

    //     $request->session()->flash('status','TQF3 was updated!');
    //     return redirect()->route('tqf3.index');
    // }

    public function show($id)
    {
        $subjects = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);

        // return view('subject.show',['subject' => Subject::findOrFail($id)]);
        return view('tqf3.show', compact('subjects','tqf3'));
    }

    public function edit($id)
    {
        $subjects = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);

        // return view('subject.edit',['subject' => $subject]);
        return view('tqf3.edit', compact('subjects','tqf3'));
    }

    // public function edit2($id)
    // {
    //     $subjects = Subject::all();
    //     $tqf3 = Tqf3::findOrFail($id);

    //     // return view('subject.edit',['subject' => $subject]);
    //     return view('tqf3.edit2', compact('subjects','tqf3'));
    // }

    public function update(StoreTqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        return redirect()->route('tqf3.index');
    }

    public function update1(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        // return redirect()->route('tqf3.create2');
        return redirect()->route('tqf3.create2', compact('tqf3'));
    }

    public function update2(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        // return redirect()->route('tqf3.index');
        return redirect()->route('tqf3.create3', compact('tqf3'));
    }

    public function update3(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        session()->flash('status','TQF3 was สร้าง!');
        // return redirect()->route('tqf3.index');
        return redirect()->route('tqf3.create4', compact('tqf3'));
    }

    public function update4(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        // return redirect()->route('tqf3.index');
        return redirect()->route('tqf3.create5', compact('tqf3'));
    }

    public function update5(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        // return redirect()->route('tqf3.index');
        return redirect()->route('tqf3.create6', compact('tqf3'));
    }

    public function update6(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        // return redirect()->route('tqf3.index');
        return redirect()->route('tqf3.create7', compact('tqf3'));
    }

    public function update7(Store2Tqf3 $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $validatedData = $request->validated();
        $tqf3->fill($validatedData);
        $tqf3->save();

        // $request->session()->flash('status','TQF3 was updated!');
        // return redirect()->route('tqf3.index');
        return redirect()->route('tqf3.show', compact('tqf3'));
    }

    public function destroy(Request $request, $id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $tqf3->delete();

        session()->flash('success','TQF3 was deleted!');
        return redirect()->route('tqf3.index');
    }

    public function copy($id)
    {
        $subjects = Subject::all();
        $tqf3 = Tqf3::findOrFail($id);
        // return view('subject.edit',['subject' => $subject]);
        return view('tqf3.copy', compact('subjects','tqf3'));
    }

    // public function select()
    // {
    //     $subjects = Subject::all();
    //     return view('tqf.tqf3.select', compact('subjects'));
    // }

    public function create1($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf3.create1', compact('subjects','sics','tqf3'));
        
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


    public function create2($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf3.create2', compact('subjects','sics','tqf3'));
        
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

    public function create3($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf3.create3', compact('subjects','sics','tqf3'));
        
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

    public function create4($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf3.create4', compact('subjects','sics','tqf3'));
        
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

    public function create5($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $dynamicfields = DynamicField::all();
        $dynamic2fields = Dynamic2Field::all();
        $tqf3 = Tqf3::findOrFail($id);

        return view('tqf3.create5', compact('subjects','sics','dynamicfields','dynamic2fields','tqf3'));
        
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

    public function create6($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf3.create6', compact('subjects','sics','tqf3'));
        
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

    public function create7($id)
    {
        $subjects = Subject::all();
        $sics = SIC::all();
        $tqf3 = Tqf3::findOrFail($id);
        return view('tqf3.create7', compact('subjects','sics','tqf3'));
    }

    public function downloadPDF($id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $view = \View::make('tqf3.pdf', \compact('tqf3'));
        $html = $view->render();
        $pdf = new PDF();
        $pdf::SetTitle('Testreport');
        $pdf::AddPage();
        $pdf::SetFont('freeserif');
        $pdf::WriteHTML($html,true,false,true,false);
        $pdf::Output('report.pdf');
    }


}
