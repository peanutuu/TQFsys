@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')
   
<br><a href="{{ route('tqf3.create5',['tqf3' => $tqf3->id])}}" class="btn btn-danger"> ย้อนกลับไปก่อนหน้า </a><br>
<br><form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="ยกเลิกสร้างเอกสาร" class="btn btn-danger"/>
</form>
<br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf3.update6',['tqf3' => $tqf3->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf3->name}}"/>
        <input type="hidden" name="year" value="{{$tqf3->year}}"/>
        <input type="hidden" name="term" value="{{$tqf3->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf3->subject_id}}"/>

        <h1>หมวดที่ 6 ทรัพยากรประกอบการเรียนการสอน</h1>
        <p>
            <label>1.เอกสารและตำราหลัก</label><br>
            {{-- <input name='tqf3610' type="text" placeholder="ระบุตำราและเอกสารหลักที่ใช้ในการเรียนการสอน" size="150"/> --}}
            <textarea name='tqf3610' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>2.เอกสารและข้อมูลสำคัญ</label><br>
            {{-- <input name='tqf3620' type="text" placeholder="ระบุหนังสือ วารสาร รายงาน สื่ออิเล็กทรอนิกส์ เว็บไซต์ กฎระเบียบต่างๆ โปรแกรมคอมพิวเตอร์และแหล่งอ้างอิงที่สำคัญอื่นๆ ซึ่งนักศึกษาจำเป็นต้องศึกษาเพิ่มเติม" size="150"/> --}}
            <textarea name='tqf3620' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>3.เอกสารและข้อมูลแนะนำ</label><br>
            {{-- <input name='tqf3630' type="text" placeholder="ระบุหนังสือ วารสาร รายงาน สื่ออิเล็กทรอนิกส์ เว็บไซต์ กฎระเบียบต่างๆ โปรแกรมคอมพิวเตอร์และแหล่งอ้างอิงที่สำคัญอื่นๆ ซึ่งนักศึกษาควรศึกษาเพิ่มเติม" size="150"/> --}}
            <textarea name='tqf3630' rows="5" cols="4" class="form-control" required></textarea><br>
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

        <input type="hidden" name="tqf3710" value="{{$tqf3->tqf3710}}"/>
        <input type="hidden" name="tqf3720" value="{{$tqf3->tqf3720}}"/>
        <input type="hidden" name="tqf3730" value="{{$tqf3->tqf3730}}"/>
        <input type="hidden" name="tqf3740" value="{{$tqf3->tqf3740}}"/>
        <input type="hidden" name="tqf3750" value="{{$tqf3->tqf3750}}"/>
        

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}

        <li><h4> กรุณาตรวจสอบการทำรายการอีกครั้งก่อนกด ทำรายการต่อไป!!! </h4></li><br>

        <button type="submit" class="btn btn-primary btn-block">ทำรายการต่อไป</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                  $('.fm-inline').on('submit',function(){
                        if(confirm("คุณต้องการยกเลิกการสร้างเอกสารหรือไม่")){
                              return true;
                        }else{
                              return false;
                        }

                  });
            });
    </script>
@endsection