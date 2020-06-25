@extends('layout')
@section('title','เพิ่มเอกสารมคอ.5')
@section('content')

<br><form method="POST" class="fm-inline" action="{{ route('tqf5.destroy',['tqf5' => $tqf5->id])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="ยกเลิกสร้างเอกสาร" class="btn btn-danger"/>
</form>
<br><br>

<h1>เพิ่มเอกสารมคอ5.</h1><br>

    <form method="POST" action="{{ route('tqf5.update1',['tqf5' => $tqf5->id])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf5->name}}"/>
        <input type="hidden" name="year" value="{{$tqf5->year}}"/>
        <input type="hidden" name="term" value="{{$tqf5->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf5->subject_id}}"/>

        <h1><label>หมวดที่ 1 ข้อมูลโดยทั่วไป</label></h1>
        <hr> <br>
        <p>
            <label>1. รหัสวิชาและชื่อรายวิชา</label>
            <input type="text" class="form-control" value=" {{ $tqf5->subject->subjectid }}"      />
            <input type="text" class="form-control" value=" {{ $tqf5->subject->subjectnameth }}"  />
            <input type="text" class="form-control" value=" {{ $tqf5->subject->subjectnameen }}"  />
        </p>

        <p>
            <label>2. รายวิชาที่ต้องเรียนก่อนรายวิชานี้  (ถ้ามี)</label>
            <input name='tqf5121' type="text" class="form-control" value="{{ $tqf5->subject->subjectbefore }}" />
        </p>

        <p>
            <label>3. อาจารย์ผู้รับผิดชอบ อาจารย์ผู้สอนและกลุ่มเรียน  (Section)</label><br>
            กลุ่มเรียนที่
            <input name='tqf5131' type="text"/>

            อาจารย์ผู้สอน
            <select  name="tqf5132">
            <option>เลือกอาจารย์ผู้สอน</option>
                @foreach($users as $user)
                    @if($user->role == "teacher")
                        <option value="{{$user->name}}">{{$user->name}}</option>
                    @endif
                @endforeach
            </select>
        </p>

        <p>
            <label>4. ภาคการศึกษา/ปีการศึกษาที่เปิดสอนรายวิชา</label> <br>

            สำหรับนิสิตระดับ 
            <select name="tqf5141">
                <option>เลือกระดับ</option>
                <option value="ปริญญาตรี">ปริญญาตรี</option>
                <option value="ปริญญาเอก">ปริญญาเอก</option>
                <option value="ปริญญาโท">ปริญญาโท</option>
            </select>

            ชั้นปีที 
            <select name="tqf5142">
                <option>เลือกระดับ</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            
            ภาคการศึกษา <input name='tqf5143' type="text" value="{{$tqf5->term}}/{{$tqf5->year}}"/>
        </p>

        <p>
            <label>5. สถานที่เรียน</label>
            <label>ห้อง</label>
            <select name="tqf5151">
                <option>เลือกห้องเรียน</option>
                <option value="IT-401">IT-401</option>
                <option value="IT-402">IT-402</option>
                <option value="IT-403">IT-403</option>
                <option value="IT-404">IT-404</option>
                <option value="IT-405">IT-405</option>
                <option value="IT-406">IT-406</option>
                <option value="IT-407">IT-407</option>
                <option value="IT-408">IT-408</option>
            </select>
 
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <input type="hidden" name="tqf5241" value="{{$tqf5->tqf5241}}"/>

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