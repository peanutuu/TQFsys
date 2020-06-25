<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subject;
use App\Tqf3;
use App\DynamicField;
// use App\Http\Requests\StoreDynamic;
use Validator;
// use TQF3Controller;

class DynamicFieldController extends Controller
{
    function index($id)
    {
        $tqf3 = Tqf3::findOrFail($id);
        $subject = Subject::all();
        $users = User::all();
        return view('tqf3.lessonplan', compact('tqf3','subject','users'));
    }

    function insert(Request $request)
    {
        if($request->ajax())
        {
        $rules = array(
            'tqf3511.*'  => 'required',
            'tqf3512.*'  => 'required',
            'tqf3513.*'  => 'required',
            'tqf3514.*'  => 'required',
            'tqf3515.*'  => 'required',
            'tqf3516.*'  => 'required',
            'tqf3517.*'  => 'required',
            'tqf3_id'    => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $tqf3511 = $request->tqf3511;
        $tqf3512 = $request->tqf3512;
        $tqf3513 = $request->tqf3513;
        $tqf3514 = $request->tqf3514;
        $tqf3515 = $request->tqf3515;
        $tqf3516 = $request->tqf3516;
        $tqf3517 = $request->tqf3517;
        $tqf3_id = $request->tqf3_id;

        for($count = 0; $count < count($tqf3511); $count++)
        {
        $data = array(
            'tqf3511' => $tqf3511[$count],
            'tqf3512' => $tqf3512[$count],
            'tqf3513' => $tqf3513[$count],
            'tqf3514' => $tqf3514[$count],
            'tqf3515' => $tqf3515[$count],
            'tqf3516' => $tqf3516[$count],
            'tqf3517' => $tqf3517[$count],
            'tqf3_id' => $tqf3_id[$count]
        );

        $insert_data[] = $data; 

        }

        DynamicField::insert($insert_data);

        return response()->json(['success'  => 'สร้างตารางเสร็จเรียบร้อยสามารถกลับไปหน้าก่อนเพื่อดูข้อมูลได้']);

        }
    }

}
