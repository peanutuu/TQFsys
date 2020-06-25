<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Tqf5;
use App\Dynamic4Field;
use Validator;

class Dynamic4FieldController extends Controller
{
    function index($id)
    {
        $tqf5 = Tqf5::findOrFail($id);
        $subject = Subject::all();
        return view('tqf5.createtqf522', compact('tqf5','subject'));
    }

    function insert(Request $request)
    {
        if($request->ajax())
        {
        $rules = array(
            'tqf5221.*'  => 'required',
            'tqf5222.*'  => 'required',
            'tqf5223.*'  => 'required',
            'tqf5_id'    => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $tqf5221 = $request->tqf5221;
        $tqf5222 = $request->tqf5222;
        $tqf5223 = $request->tqf5223;

        $tqf5_id = $request->tqf5_id;

        for($count = 0; $count < count($tqf5221); $count++)
        {
        $data = array(
            'tqf5221' => $tqf5221[$count],
            'tqf5222' => $tqf5222[$count],
            'tqf5223' => $tqf5223[$count],
            'tqf5_id' => $tqf5_id[$count]
        );

        $insert_data[] = $data; 

        }

        Dynamic2Field::insert($insert_data);

        return response()->json(['success'  => 'สร้างตารางเสร็จเรียบร้อยสามารถกลับไปหน้าก่อนเพื่อดูข้อมูลได้']);

        }
    }
}
