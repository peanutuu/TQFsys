@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')
    <form method="POST" action="{{ route('subincourse.store')}}" enctype="multipart/form-data" >
        @csrf

        {{-- @include('posts._form') --}}

        {{-- <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="course_id" value=" " 
            readonly="readonly" />
        </p> --}}

        <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->coursename}}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subjectnameth}}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>หมวดหมู่</label>
            <select class="form-control" name="tag">
                <option value="วิชาแกน">วิชาแกน</option>
                <option value="วิชาเฉพาะด้าน">วิชาเฉพาะด้าน</option>
                <option value="วิชาเอกเลือก">วิชาเอกเลือก</option>
                <option value="วิชาประสบการณ์วิชาชีพ">วิชาประสบการณ์วิชาชีพ</option>
            </select>
        </div>


        {{-- <div id="showshirtsizeman" class="form-group"> 
            <label class="radio-inline"><h5><input type="radio" name="11" id="11" value="1"> ไความรับผิดชอบหลัก</h5></label>
            <label class="radio-inline"><h5><input type="radio" name="11" id="11" value="2" > ความรับผิดชอบรอง</h5></label>
            <label class="radio-inline"><h5><input type="radio" name="11" id="11" value="0" > ไม่มี</h5></label>
        </div> --}}


        <div>
            1. คุณธรรม จริยธรรม

            {{-- <div id="11" class="form-group">
                1
                <input type="radio" name="11" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="11" value="2">ความรับผิดชอบรอง
                <input type="radio" name="11" value="0">ไม่มี
            </div> --}}

            <div id="t" class="form-group"> 
                1
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="3"> ไม่มี</h5></label>
            </div> 

            {{-- <div>
                2
                <input type="radio" name="12" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="12" value="2">ความรับผิดชอบรอง
                <input type="radio" name="12" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="13" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="13" value="2">ความรับผิดชอบรอง
                <input type="radio" name="13" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="14" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="14" value="2">ความรับผิดชอบรอง
                <input type="radio" name="14" value="0">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="15" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="15" value="2">ความรับผิดชอบรอง
                <input type="radio" name="15" value="0">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="16" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="16" value="2">ความรับผิดชอบรอง
                <input type="radio" name="16" value="0">ไม่มี
            </div>
            <div>
                7
                <input type="radio" name="17" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="17" value="2">ความรับผิดชอบรอง
                <input type="radio" name="17" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        2. ความรู้
            <div>
                1
                <input type="radio" name="21" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="21" value="2">ความรับผิดชอบรอง
                <input type="radio" name="21" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="22" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="22" value="2">ความรับผิดชอบรอง
                <input type="radio" name="22" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="23" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="23" value="2">ความรับผิดชอบรอง
                <input type="radio" name="23" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="24" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="24" value="2">ความรับผิดชอบรอง
                <input type="radio" name="24" value="0">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="25" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="25" value="2">ความรับผิดชอบรอง
                <input type="radio" name="25" value="0">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="26" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="26" value="2">ความรับผิดชอบรอง
                <input type="radio" name="26" value="0">ไม่มี
            </div>
            <div>
                7
                <input type="radio" name="27" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="27" value="2">ความรับผิดชอบรอง
                <input type="radio" name="27" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        3. ทักษะทางปัญญา
            <div>
                1
                <input type="radio" name="31" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="31" value="2">ความรับผิดชอบรอง
                <input type="radio" name="31" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="32" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="32" value="2">ความรับผิดชอบรอง
                <input type="radio" name="32" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="33" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="33" value="2">ความรับผิดชอบรอง
                <input type="radio" name="33" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="34" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="34" value="2">ความรับผิดชอบรอง
                <input type="radio" name="34" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        4. ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ
            <div>
                1
                <input type="radio" name="41" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="41" value="2">ความรับผิดชอบรอง
                <input type="radio" name="41" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="42" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="42" value="2">ความรับผิดชอบรอง
                <input type="radio" name="42" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="43" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="43" value="2">ความรับผิดชอบรอง
                <input type="radio" name="43" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="44" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="44" value="2">ความรับผิดชอบรอง
                <input type="radio" name="44" value="0">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="45" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="45" value="2">ความรับผิดชอบรอง
                <input type="radio" name="45" value="0">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="46" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="46" value="2">ความรับผิดชอบรอง
                <input type="radio" name="46" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        5. ทักษะการวิเคราะห์เชิงตัวเลขการสื่อสารและการใช้เทคโนโลยีสารสนเทศ 
            <div>
                1
                <input type="radio" name="51" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="51" value="2">ความรับผิดชอบรอง
                <input type="radio" name="51" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="52" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="52" value="2">ความรับผิดชอบรอง
                <input type="radio" name="52" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="52" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="52" value="2">ความรับผิดชอบรอง
                <input type="radio" name="52" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="52" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="52" value="2">ความรับผิดชอบรอง
                <input type="radio" name="52" value="0">ไม่มี
            </div>
        </div> --}}

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <br><button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection