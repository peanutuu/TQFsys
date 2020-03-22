@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')
    <form method="POST" action="{{ route('subincourse.store')}}">
        @csrf

        {{-- @include('posts._form') --}}

        {{-- <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="course_id" value="{{ old('cousename', $courses->name) }}" readonly="readonly" />
        </p> --}}

        <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id">
                    @foreach($courses as $course)
                        <option value="{{ old('course_id', $course->id) }}"
                            @if($course->id == $sic->course_id)
                            selected
                            @endif    
                        >{{ old('course_id', $course->coursename) }}</option>
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

        <div>
            1. คุณธรรม จริยธรรม
            <div>
                1
                <input type="radio" name="11" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="11" value="male">ความรับผิดชอบรอง
                <input type="radio" name="11" value="other">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="12" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="12" value="male">ความรับผิดชอบรอง
                <input type="radio" name="12" value="other">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="13" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="13" value="male">ความรับผิดชอบรอง
                <input type="radio" name="13" value="other">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="14" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="14" value="male">ความรับผิดชอบรอง
                <input type="radio" name="14" value="other">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="15" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="15" value="male">ความรับผิดชอบรอง
                <input type="radio" name="15" value="other">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="16" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="16" value="male">ความรับผิดชอบรอง
                <input type="radio" name="16" value="other">ไม่มี
            </div>
            <div>
                7
                <input type="radio" name="17" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="17" value="male">ความรับผิดชอบรอง
                <input type="radio" name="17" value="other">ไม่มี
            </div>
        </div>
        <br><div>
        2. ความรู้
            <div>
                1
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                7
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
        </div>
        <br><div>
        3. ทักษะทางปัญญา
            <div>
                1
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
        </div>
        <br><div>
        4. ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ
            <div>
                1
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
        </div>
        <br><div>
        5. ทักษะการวิเคราะห์เชิงตัวเลขการสื่อสารและการใช้เทคโนโลยีสารสนเทศ 
            <div>
                1
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="gender" value="female">ความรับผิดชอบหลัก
                <input type="radio" name="gender" value="male">ความรับผิดชอบรอง
                <input type="radio" name="gender" value="other">ไม่มี
            </div>
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

        <br><button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection