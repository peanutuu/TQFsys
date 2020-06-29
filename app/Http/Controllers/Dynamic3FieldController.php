<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Tqf5;
use App\Dynamic3Field;
use Validator;

class Dynamic3FieldController extends Controller
{
    function index($id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $subject = Subject::all();
        return view('tqf5.createtqf521', compact('tqf5','subject'));
    }

    function insert(Request $request)
    {
        if($request->ajax())
        {
        $rules = array(
            'tqf5211.*'  => 'required',
            'tqf5212.*'  => 'required',
            'tqf5213.*'  => 'required',
            'tqf5214.*'  => 'required',
            'tqf5_id'    => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $tqf5211 = $request->tqf5211;
        $tqf5212 = $request->tqf5212;
        $tqf5213 = $request->tqf5213;
        $tqf5214 = $request->tqf5214;
        $tqf5_id = $request->tqf5_id;

        for($count = 0; $count < count($tqf5211); $count++)
        {
        $data = array(
            'tqf5211' => $tqf5211[$count],
            'tqf5212' => $tqf5212[$count],
            'tqf5213' => $tqf5213[$count],
            'tqf5214' => $tqf5214[$count],
            'tqf5_id' => $tqf5_id[$count]
        );

        $insert_data[] = $data; 

        }

        Dynamic3Field::insert($insert_data);

        return response()->json(['success'  => 'สร้างตารางเสร็จเรียบร้อยสามารถกลับไปหน้าก่อนเพื่อดูข้อมูลได้']);

        }
    }

}
