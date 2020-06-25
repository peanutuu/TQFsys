@extends('layout')
@section('title','เพิ่มเอกสารมคอ.5')
@section('content')

<br><a href="{{ route('tqf5.create2',['tqf5' => $tqf5->id])}}" class="btn btn-danger"> ย้อนกลับไปก่อนหน้า </a><br>
<br><form method="POST" class="fm-inline" action="{{ route('tqf5.destroy',['tqf5' => $tqf5->id])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="ยกเลิกสร้างเอกสาร" class="btn btn-danger"/>
</form>
<br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf5.update3',['tqf5' => $tqf5->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf5.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf5->name}}"/>
        <input type="hidden" name="year" value="{{$tqf5->year}}"/>
        <input type="hidden" name="term" value="{{$tqf5->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf5->subject_id}}"/>

        <h1><label>หมวดที่ 3 สรุปผลการจัดการเรียนการสอนของรายวิชา</label></h1>
        <p>
            <label>1. จำนวนนิสิตที่ลงทะเบียนเรียน </label>
            <textarea name='tqf5311' rows="5" cols="4" class="form-control">{{ old('tqf5311', $tqf5->subject->descriptionth) }}</textarea><br>
        </p>

        <p>
            <label>2. จำนวนนิสิตที่คงอยู่เมื่อสิ้นสุดภาคการศึกษา</label><br>
 
        </p>

        <p>
            <label>3. จำนวนนิสิตที่ถอน (W)</label>
           

        </p>

        <p>
            <label>4. การกระจายของระดับคะแนน (เกรด)</label>
            

        </p>

        <p>
            <label>5. ปัจจัยที่ทำให้ระดับคะแนนผิดปกติ (ถ้ามี) </label>
            

        </p>

        <p>
            <label>6. ความคลาดเคลื่อนจากแผนการประเมินที่กำหนดไว้ในรายละเอียดรายวิชา</label>
            

            <p>
                <label>6.1 ความคลาดเคลื่อนด้านกำหนดเวลาการประเมิน</label>

            </p>

            <p>
                <label>6.2 ความคลาดเคลื่อนด้านกำหนดเวลาการประเมิน</label>
                
            </p>

        </p>

        <p>
            <label>7. การทวนสอบผลสัมฤทธิ์ของนักศึกษา</label>

        </p>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

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