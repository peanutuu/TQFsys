@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')

<div>
    <form method="POST" action="{{ route('course.store')}}">
        @csrf

        {{-- @include('posts._form') --}}

        <p>
            <label>รหัสหลักสูตร</label>
            <input type="text" name="courseid" /> z
        </p>

        <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="coursename" />
        </p>

        <p>
            <label>คณะ</label>
            <input type="text" name="coursefac" />
        </p>

        <p>
            <label>อักษรย่อ</label>
            <input type="text" name="coursefac2" /> z
        </p> 
        
        <p>
            <label>ระดับการศึกษา</label>
            <input type="text" name="courselv" /> z
        </p>

        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="coursecredit" /> z
        </p>

        <p>
            <label>ปีการศึกษา</label>
            <input type="text" name="courseyear" /> z
        </p>

        <p>
            <label>เกรดต่ำสุด</label>
            <input type="text" name="courselowcredit" /> z
        </p>

        <p>
            <label>1. หมวดวิชาศึกษาทั่วไป</label>
            <input type="text" name="course1" /> z
            {{-- <input type="text" name="course2_1" placeholder="ระบบพิเศษ"/> --}}
        </p>      

        <p>
            <label>2. หมวดวิชาศึกษาเฉพาะ</label>
            <input type="text" name="course2" />z <br>
            {{-- <input type="text" name="course2_2" placeholder="ระบบพิเศษ"/> --}}

            <label>2.1 วิชาแกน</label>
            <input type="text" name="course21" />z <br>

            <label>2.2 วิชาเฉพาะด้าน</label>
            <input type="text" name="course22" />z <br>

                <label>2.2.1 กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ</label>
                <input type="text" name="course221" />z <br>

                <label>2.2.2 กลุ่มเทคโนโลยีเพื่องานประยุกต์</label>
                <input type="text" name="course222" />z <br>

                <label>2.2.3 กลุ่มเทคโนโลยีและวิธีการทางซอฟท์แวร์</label>
                <input type="text" name="course223" />z <br>

                <label>2.2.4 กลุ่มโครงสร้างพื้นฐานของระบบ</label>
                <input type="text" name="course224" />z <br>

                <label>2.2.5 กลุ่มภาษาสำหรับเทคโนโลยีสารสนเทศ</label>
                <input type="text" name="course225" />z
        </p>   

        <p>
            <label>3. หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course3" />z
            {{-- <input type="text" name="course2_3" placeholder="ระบบพิเศษ"/> --}}
        </p>

        <p>
            <label>4. หมวดวิชาเลือกเสรี</label>
            <input type="text" name="course4" />z
            {{-- <input type="text" name="course2_4" placeholder="ระบบพิเศษ"/> --}}
        </p>

        <p>
            <label>5. หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course5" />z
            {{-- <input type="text" name="course2_4" placeholder="ระบบพิเศษ"/> --}}
        </p>

        <p>
            <label>รวม</label>
            <input type="text" name="coursesum"/>z
            {{-- <input type="text" name="course2_5" placeholder="ระบบพิเศษ"/> --}}
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

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
</div>
@endsection