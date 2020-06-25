@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')

<h1>เพิ่มเอกสารมคอ3.</h1><br>

     <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data">
        @csrf

        <p>
            <label>ชื่อเอกสาร</label>
            <input name='name' class="form-control" type="text" />
        </p>

        <p>
            <label>ปีการศึกษา</label>
            <select name="year">
                <option value="" disabled selected>เลือกปีการศึกษา</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
            </select>
        </p>

        <p>
            <label>ภาคเรียนการศึกษา</label>
            <select name="term" >
                <option value="" disabled selected>เลือกภาคเรียนการศึกษา</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="ซัมเมอร์">ซัมเมอร์</option>
            </select>
        </p>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                <option value="" disabled selected>เลือกรายวิชา</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subjectid}}</option>
                    @endforeach
            </select>
        </div>
        
         @if ($errors->any())
            <div> 
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <input type="hidden" name="tqf3121" value="ไม่มี"/>
        <input type="hidden" name="tqf3131" value="ไม่มี"/>
        <input type="hidden" name="tqf3132" value="ไม่มี"/>
        <input type="hidden" name="tqf3133" value="ไม่มี"/>
        <input type="hidden" name="tqf3141" value="ไม่มี"/>
        <input type="hidden" name="tqf3151" value="ไม่มี"/>
        <input type="hidden" name="tqf3152" value="ไม่มี"/>
        <input type="hidden" name="tqf3161" value="ไม่มี"/>
        <input type="hidden" name="tqf3171" value="ไม่มี"/>
        <input type="hidden" name="tqf3181" value="ไม่มี"/>
        <input type="hidden" name="tqf3182" value="ไม่มี"/>
        <input type="hidden" name="tqf3183" value="ไม่มี"/>
        <input type="hidden" name="tqf3191" value="ไม่มี"/>
        <input type="hidden" name="tqf3211" value="ไม่มี"/>
        <input type="hidden" name="tqf3221" value="ไม่มี"/>
        <input type="hidden" name="tqf3311" value="ไม่มี"/>
        <input type="hidden" name="tqf3321" value="ไม่มี"/>
        <input type="hidden" name="tqf3322" value="ไม่มี"/>
        <input type="hidden" name="tqf3323" value="ไม่มี"/>
        <input type="hidden" name="tqf3324" value="ไม่มี"/>
        <input type="hidden" name="tqf3331" value="ไม่มี"/>
        <input type="hidden" name="tqf3341" value="ไม่มี"/>
        <input type="hidden" name="tqf3412" value="ไม่มี"/>
        <input type="hidden" name="tqf3413" value="ไม่มี"/>
        <input type="hidden" name="tqf3422" value="ไม่มี"/>
        <input type="hidden" name="tqf3423" value="ไม่มี"/>
        <input type="hidden" name="tqf3432" value="ไม่มี"/>
        <input type="hidden" name="tqf3433" value="ไม่มี"/>
        <input type="hidden" name="tqf3442" value="ไม่มี"/>
        <input type="hidden" name="tqf3443" value="ไม่มี"/>
        <input type="hidden" name="tqf3452" value="ไม่มี"/>
        <input type="hidden" name="tqf3453" value="ไม่มี"/>
        <input type="hidden" name="tqf3521" value="ไม่มี"/>
        <input type="hidden" name="tqf3522" value="ไม่มี"/>
        <input type="hidden" name="tqf3610" value="ไม่มี"/>
        <input type="hidden" name="tqf3620" value="ไม่มี"/>
        <input type="hidden" name="tqf3630" value="ไม่มี"/>
        <input type="hidden" name="tqf3710" value="ไม่มี"/>
        <input type="hidden" name="tqf3720" value="ไม่มี"/>
        <input type="hidden" name="tqf3730" value="ไม่มี"/>
        <input type="hidden" name="tqf3740" value="ไม่มี"/>
        <input type="hidden" name="tqf3750" value="ไม่มี"/> 

        <li><h4> กรุณาตรวจสอบการทำรายการอีกครั้งก่อนกด สร้าง!!! </h4></li><br>
        <button type="submit" class="btn btn-primary btn-block">สร้าง!</button>
    </form>

@endsection