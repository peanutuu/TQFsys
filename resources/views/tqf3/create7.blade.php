@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')
   
<br><br><a href="{{ route('tqf3.index') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf3.update7',['tqf3' => $tqf3->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf3->name}}"/>
        <input type="hidden" name="year" value="{{$tqf3->year}}"/>
        <input type="hidden" name="term" value="{{$tqf3->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf3->subject_id}}"/>

        <h1>หมวดที่ 7 การประเมินและปรับปรุงการดำเนินการของรายวิชา</h1>
        <p>
            <label>1.กลยุทธ์การประเมินประสิทธิผลของรายวิชาโดยนิสิต</label><br>
            {{-- <input name='tqf3710' type="text" /> --}}
            <textarea name='tqf3710' rows="5" cols="4" class="form-control">{{ old('tqf3710', $tqf3->tqf3710 ?? null) }}</textarea><br>
        </p>

        <p>
            <label>2.กลยุทธ์การประเมินการสอน</label><br>
            {{-- <input name='tqf3720' type="text" placeholder="ระบุวิธีการประเมินที่จะได้ข้อมูลการสอน เช่น จากผู้สังเกตการณ์ หรือทีมผู้สอน หรือผลการเรียนของนักศึกษา เป็นต้น" size="150" /> --}}
            <textarea name='tqf3720' rows="5" cols="4" class="form-control" >{{ old('tqf3720', $tqf3->tqf3720 ?? null) }}</textarea><br>
        </p>

        <p>
            <label>3.การปรับปรุงการสอน</label><br>
            {{-- <input name='tqf3730' type="text" placeholder="อธิบายการปรับปรุงการสอน เช่น การวิจัยในชั้นเรียน การประชุมเชิงปฏิบัติการเพื่อพัฒนาการเรียนการสอน เป็นต้น" size="150" /> --}}
            <textarea name='tqf3730' rows="5" cols="4" class="form-control" >{{ old('tqf3730', $tqf3->tqf3730 ?? null) }}</textarea><br>
        </p>

        <p>
            <label>4.การทวนสอบมาตรฐานผลสัมฤทธิ์ของนิสิตในรายวิชา</label><br>
            {{-- <input name='tqf3740' type="text" placeholder="อธิบายกระบวนการที่ใช้ในการทวนสอบมาตรฐานผลสัมฤทธิ์ของนักศึกษาตามมาตรฐานผลการเรียนรู้ของรายวิชา เช่น ทวนสอบจากคะแนนข้อสอบ หรืองานที่มอบหมาย กระบวนการอาจแตกต่างกันไปสำหรับรายวิชาที่แตกต่างกัน หรือสำหรับมาตรฐานผลการเรียนรู้แต่ละด้าน" size="200" /> --}}
            <textarea name='tqf3740' rows="5" cols="4" class="form-control" >{{ old('tqf3740', $tqf3->tqf3740 ?? null) }}</textarea><br>
        </p>

        <p>
            <label>5.การดำเนินการทบทวนและการวางแผนปรับปรุงประสิทธิผลของรายวิชา</label><br>
            {{-- <input name='tqf3750' type="text" placeholder="อธิบายกระบวนการในการนำข้อมูลที่ได้จากการประเมินจากข้อ 1 และ 2 มาวางแผนเพื่อปรับปรุงคุณภาพ" size="100"/> --}}
            <textarea name='tqf3750' rows="5" cols="4" class="form-control" >{{ old('tqf3750', $tqf3->tqf3750 ?? null) }}</textarea><br>
        </p>

        <input type="hidden" name="tqf3121" value="{{$tqf3->tqf3121}}"/>
        <input type="hidden" name="tqf3131" value="{{$tqf3->tqf3131}}"/>
        <input type="hidden" name="tqf3132" value="{{$tqf3->tqf3132}}"/>
        <input type="hidden" name="tqf3133" value="{{$tqf3->tqf3133}}"/>
        <input type="hidden" name="tqf3141" value="{{$tqf3->tqf3141}}"/>
        <input type="hidden" name="tqf3151" value="{{$tqf3->tqf3151}}"/>
        <input type="hidden" name="tqf3152" value="{{$tqf3->tqf3152}}"/>
        <input type="hidden" name="tqf3161" value="{{$tqf3->tqf3161}}"/>
        <input type="hidden" name="tqf3171" value="{{$tqf3->tqf3171}}"/>
        <input type="hidden" name="tqf3181" value="{{$tqf3->tqf3181}}"/>
        <input type="hidden" name="tqf3182" value="{{$tqf3->tqf3182}}"/>
        <input type="hidden" name="tqf3183" value="{{$tqf3->tqf3183}}"/>
        <input type="hidden" name="tqf3191" value="{{$tqf3->tqf3191}}"/>
        <input type="hidden" name="tqf3211" value="{{$tqf3->tqf3211}}"/>
        <input type="hidden" name="tqf3221" value="{{$tqf3->tqf3221}}"/>
        <input type="hidden" name="tqf3311" value="{{$tqf3->tqf3311}}"/>
        <input type="hidden" name="tqf3321" value="{{$tqf3->tqf3321}}"/>
        <input type="hidden" name="tqf3322" value="{{$tqf3->tqf3322}}"/>
        <input type="hidden" name="tqf3323" value="{{$tqf3->tqf3323}}"/>
        <input type="hidden" name="tqf3324" value="{{$tqf3->tqf3324}}"/>
        <input type="hidden" name="tqf3331" value="{{$tqf3->tqf3331}}"/>
        <input type="hidden" name="tqf3341" value="{{$tqf3->tqf3341}}"/>
        <input type="hidden" name="tqf3412" value="{{$tqf3->tqf3412}}"/>
        <input type="hidden" name="tqf3413" value="{{$tqf3->tqf3413}}"/>
        <input type="hidden" name="tqf3422" value="{{$tqf3->tqf3422}}"/>
        <input type="hidden" name="tqf3423" value="{{$tqf3->tqf3423}}"/>
        <input type="hidden" name="tqf3432" value="{{$tqf3->tqf3432}}"/>
        <input type="hidden" name="tqf3433" value="{{$tqf3->tqf3433}}"/>
        <input type="hidden" name="tqf3442" value="{{$tqf3->tqf3442}}"/>
        <input type="hidden" name="tqf3443" value="{{$tqf3->tqf3443}}"/>
        <input type="hidden" name="tqf3452" value="{{$tqf3->tqf3452}}"/>
        <input type="hidden" name="tqf3453" value="{{$tqf3->tqf3453}}"/>
        <input type="hidden" name="tqf3521" value="{{$tqf3->tqf3521}}"/>
        <input type="hidden" name="tqf3522" value="{{$tqf3->tqf3522}}"/>
        <input type="hidden" name="tqf3610" value="{{$tqf3->tqf3610}}"/>
        <input type="hidden" name="tqf3620" value="{{$tqf3->tqf3620}}"/>
        <input type="hidden" name="tqf3630" value="{{$tqf3->tqf3630}}"/>

        

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>

@endsection