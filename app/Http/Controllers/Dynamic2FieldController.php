<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tqf3;
use App\Dynamic2Field;
use Validator;

class Dynamic2FieldController extends Controller
{
    function index($id)
    {
        $tqf3 = Tqf3::findOrFail($id);

        return view('tqf3.createtqf352', compact('tqf3'));
    }

    
    function insert(Request $request)
    {
        if($request->ajax())
        {
        $rules = array(
            'tqf3521.*'  => 'required',
            'tqf3522.*'  => 'required',
            'tqf3523.*'  => 'required',
            'tqf3524.*'  => 'required',
            'tqf3_id'    => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $tqf3521 = $request->tqf3521;
        $tqf3522 = $request->tqf3522;
        $tqf3523 = $request->tqf3523;
        $tqf3524 = $request->tqf3524;
        $tqf3_id = $request->tqf3_id;

        for($count = 0; $count < count($tqf3521); $count++)
        {
        $data = array(
            'tqf3521' => $tqf3521[$count],
            'tqf3522' => $tqf3522[$count],
            'tqf3523' => $tqf3523[$count],
            'tqf3524' => $tqf3524[$count],
            'tqf3_id' => $tqf3_id[$count]
        );

        $insert_data[] = $data; 

        }

        Dynamic2Field::insert($insert_data);

        return response()->json(['success'  => 'Data Added successfully.']);

        }
    }
}
