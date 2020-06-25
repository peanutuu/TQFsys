<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Tqf5;
use App\Dynamic5Field;
use Validator;

class Dynamic5FieldController extends Controller
{
    function index($id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $subject = Subject::all();
        return view('tqf5.createtqf523', compact('tqf5','subject'));
    }

    function insert(Request $request)
    {
        if($request->ajax())
        {
        $rules = array(
            'tqf5231.*'  => 'required',
            'tqf5232.*'  => 'required',
            'tqf5233.*'  => 'required',
            'tqf5234.*'  => 'required',
            'tqf5_id'    => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $tqf5231 = $request->tqf5231;
        $tqf5232 = $request->tqf5232;
        $tqf5233 = $request->tqf5233;
        $tqf5234 = $request->tqf5234;
        $tqf5_id = $request->tqf5_id;

        for($count = 0; $count < count($tqf5231); $count++)
        {
        $data = array(
            'tqf5231' => $tqf5231[$count],
            'tqf5232' => $tqf5232[$count],
            'tqf5233' => $tqf5233[$count],
            'tqf5234' => $tqf5234[$count],
            'tqf5_id' => $tqf5_id[$count]
        );

        $insert_data[] = $data; 

        }

        Dynamic2Field::insert($insert_data);

        return response()->json(['success'  => 'สร้างตารางเสร็จเรียบร้อยสามารถกลับไปหน้าก่อนเพื่อดูข้อมูลได้']);

        }
    }
}
