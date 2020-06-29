@extends('layout')

@section('content')
    <form method="POST" action="{{ route('course.update',['course' => $course->id])}}">
        @csrf
        @method('PUT')
        <br> <br>
        <h1>แก้ไขหลักสูตร</h1> <hr> <br>

        <p>
            <label>รหัสหลักสูตร</label>
            <input type="text" name="courseid" class="form-control" value="{{ old('courseid', $course->courseid) }}" /> 
        </p>

        <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="coursename" class="form-control" value="{{ old('coursename', $course->coursename) }}" />
        </p>

        <p>
            <label>คณะ</label>
            {{-- <input type="text" name="coursefac" class="form-control" value="{{ old('coursefac', $course->coursefac) }}" /> --}}
            <select class="form-control" name="coursefac" >
                <option value="{{ old('coursefac', $course->coursefac) }}" selected>{{ old('coursefac', $course->coursefac) }}</option>
                @if($course->coursefac == "คณะวิทยาการสารสนเทศ")
                    <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                    <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                    <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                    <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                    <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                    <option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                    <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                    <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
                    <option value="คณะการบัญชีและการจัดการ">คณะการบัญชีและการจัดการ</option>
                    <option value="คณะการท่องเที่ยวและการโรงแรม">คณะการท่องเที่ยวและการโรงแรม</option>
                    <option value="คณะสถาปัตยกรรมศาสตร์ ผังเมืองและนฤมิตศิลป์">คณะสถาปัตยกรรมศาสตร์ ผังเมืองและนฤมิตศิลป์</option>
                    {{-- <option value="คณะวิทยาการสารสนเทศ">คณะวิทยาการสารสนเทศ</option> --}}
                    <option value="วิทยาลัยการเมืองการปกครอง">วิทยาลัยการเมืองการปกครอง</option>
                    <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
                    <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                    <option value="คณะสิ่งแวดล้อมและทรัพยากรศาสตร์">คณะสิ่งแวดล้อมและทรัพยากรศาสตร์</option>
                    <option value="คณะสัตวแพทยศาสตร์และสัตวศาสตร์">คณะสัตวแพทยศาสตร์และสัตวศาสตร์</option>
                    <option value="วิทยาลัยดุริยางคศิลป์">วิทยาลัยดุริยางคศิลป์</option>
                    <option value="คณะวัฒนธรรมศาสตร์">คณะวัฒนธรรมศาสตร์</option>                  
                @else
                    <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                    <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                    <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                    <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                    <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                    <option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                    <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                    <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
                    <option value="คณะการบัญชีและการจัดการ">คณะการบัญชีและการจัดการ</option>
                    <option value="คณะการท่องเที่ยวและการโรงแรม">คณะการท่องเที่ยวและการโรงแรม</option>
                    <option value="คณะสถาปัตยกรรมศาสตร์ ผังเมืองและนฤมิตศิลป์">คณะสถาปัตยกรรมศาสตร์ ผังเมืองและนฤมิตศิลป์</option>
                    <option value="คณะวิทยาการสารสนเทศ">คณะวิทยาการสารสนเทศ</option>
                    <option value="วิทยาลัยการเมืองการปกครอง">วิทยาลัยการเมืองการปกครอง</option>
                    <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
                    <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                    <option value="คณะสิ่งแวดล้อมและทรัพยากรศาสตร์">คณะสิ่งแวดล้อมและทรัพยากรศาสตร์</option>
                    <option value="คณะสัตวแพทยศาสตร์และสัตวศาสตร์">คณะสัตวแพทยศาสตร์และสัตวศาสตร์</option>
                    <option value="วิทยาลัยดุริยางคศิลป์">วิทยาลัยดุริยางคศิลป์</option>
                    <option value="คณะวัฒนธรรมศาสตร์">คณะวัฒนธรรมศาสตร์</option>
                @endif
            </select>
        </p>

        {{-- <div class="form-group">
            <label>สถานะรายวิชา</label>
            <select class="form-control" name="avalible">
                <option value="{{ old('avalible', $subject->avalible) }}"     
                    selected   
                >{{ old('avalible', $subject->avalible) }}</option>
                @if($subject->avalible == "ใช้งาน")
                    <option value="ไม่ใช้งาน">ไม่ใช้งาน</option>
                @else
                     <option value="ใช้งาน">ใช้งาน</option>
                @endif
            </select>
        </div> --}}

        <p>
            <label>อักษรย่อ</label>
            <input type="text" name="coursefac2" class="form-control" value="{{ old('coursefac2', $course->coursefac2) }}" /> 
        </p> 
        
        <p>
            <label>ระดับการศึกษา</label>
            {{-- <input type="text" name="courselv" class="form-control" value="{{ old('courselv', $course->courselv) }}" />  --}}
            <select class="form-control" name="courselv" >
                <option value="{{ old('courselv', $course->courselv) }}" selected>{{ old('courselv', $course->courselv) }}</option>
                @if($course->courselv == "ปริญญาตรี ระบบปกติ")
                    {{-- <option value="ปริญญาตรี ระบบปกติ">ปริญญาตรี ระบบปกติ</option> --}}
                    <option value="ปริญญาตรี ระบบพิเศษ">ปริญญาตรี ระบบพิเศษ</option>
                    <option value="ปริญญาตรีต่อเนื่อง ระบบปกติ">ปริญญาตรีต่อเนื่อง ระบบปกติ</option>
                    <option value="ปริญญาตรีต่อเนื่อง ระบบพิเศษ">ปริญญาตรีต่อเนื่อง ระบบพิเศษ</option>
                    <option value="ปริญญาตรี (เทียบเข้า) ระบบพิเศษ">ปริญญาตรี (เทียบเข้า) ระบบพิเศษ</option>
                    <option value="ปริญญาโท ระบบในเวลาราชการ">ปริญญาโท ระบบในเวลาราชการ</option>
                    <option value="ปริญญาโท ระบบนอกเวลาราชการ">ปริญญาโท ระบบนอกเวลาราชการ</option>
                    <option value="ปริญญาเอก ระบบในเวลาราชการ">ปริญญาเอก ระบบในเวลาราชการ</option>
                    <option value="ปริญญาเอก ระบบนอกเวลาราชการ">ปริญญาเอก ระบบนอกเวลาราชการ</option>
                @else
                    <option value="ปริญญาตรี ระบบปกติ">ปริญญาตรี ระบบปกติ</option>
                    <option value="ปริญญาตรี ระบบพิเศษ">ปริญญาตรี ระบบพิเศษ</option>
                    <option value="ปริญญาตรีต่อเนื่อง ระบบปกติ">ปริญญาตรีต่อเนื่อง ระบบปกติ</option>
                    <option value="ปริญญาตรีต่อเนื่อง ระบบพิเศษ">ปริญญาตรีต่อเนื่อง ระบบพิเศษ</option>
                    <option value="ปริญญาตรี (เทียบเข้า) ระบบพิเศษ">ปริญญาตรี (เทียบเข้า) ระบบพิเศษ</option>
                    <option value="ปริญญาโท ระบบในเวลาราชการ">ปริญญาโท ระบบในเวลาราชการ</option>
                    <option value="ปริญญาโท ระบบนอกเวลาราชการ">ปริญญาโท ระบบนอกเวลาราชการ</option>
                    <option value="ปริญญาเอก ระบบในเวลาราชการ">ปริญญาเอก ระบบในเวลาราชการ</option>
                    <option value="ปริญญาเอก ระบบนอกเวลาราชการ">ปริญญาเอก ระบบนอกเวลาราชการ</option>
                @endif
            </select>
        </p>

        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="coursecredit" class="form-control" value="{{ old('coursecredit', $course->coursecredit) }}" /> 
        </p>

        <p>
            <label>ปีการศึกษา</label>
            {{-- <input type="text" name="courseyear" class="form-control" value="{{ old('courseyear', $course->courseyear) }}" />  --}}
            <select class="form-control" name="courseyear" >
                <option value="{{ old('courseyear', $course->courseyear) }}" selected>{{ old('courseyear', $course->courseyear) }}</option>
                @if($course->courselv == "4")
                    <option value="3">3</option>
                    {{-- <option value="4">4</option> --}}
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                @else
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                @endif
            </select>
        </p>

        <p>
            <label>เกรดต่ำสุด</label>
            <input type="text" name="courselowcredit" class="form-control" value="{{ old('courselowcredit', $course->courselowcredit) }}" /> 
        </p>

        <p>
            <label>1. หมวดวิชาศึกษาทั่วไป</label>
            <input type="text" name="course1" class="form-control" value="{{ old('course1', $course->course1) }}" /> 
        </p>      

        <p>
            <label>2. หมวดวิชาศึกษาเฉพาะ</label>
            <input type="text" name="course2" class="form-control" value="{{ old('course2', $course->course2) }}" /> <br>

            <label>2.1 วิชาแกน</label>
            <input type="text" name="course21" class="form-control" value="{{ old('course21', $course->course21) }}" /> <br>

            <label>2.2 วิชาเฉพาะด้าน</label>
            <input type="text" name="course22" class="form-control" value="{{ old('course22', $course->course22) }}" /> <br>

                <label>2.2.1 กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ</label>
                <input type="text" name="course221" class="form-control" value="{{ old('course221', $course->course221) }}" /> <br>

                <label>2.2.2 กลุ่มเทคโนโลยีเพื่องานประยุกต์</label>
                <input type="text" name="course222" class="form-control" class="form-control" value="{{ old('course222', $course->course222) }}" /> <br>

                <label>2.2.3 กลุ่มเทคโนโลยีและวิธีการทางซอฟท์แวร์</label>
                <input type="text" name="course223" class="form-control" value="{{ old('course223', $course->course223) }}" /> <br>

                <label>2.2.4 กลุ่มโครงสร้างพื้นฐานของระบบ</label>
                <input type="text" name="course224" class="form-control" value="{{ old('course224', $course->course224) }}" />z <br>

                <label>2.2.5 กลุ่มภาษาสำหรับเทคโนโลยีสารสนเทศ</label>
                <input type="text" name="course225" class="form-control" value="{{ old('course225', $course->course225) }}" />
        </p>   

        <p>
            <label>3. หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course3" class="form-control" value="{{ old('course3', $course->course3) }}" />
        </p>

        <p>
            <label>4. หมวดวิชาเลือกเสรี</label>
            <input type="text" name="course4" class="form-control" value="{{ old('course4', $course->course4) }}" />
        </p>

        <p>
            <label>5. หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course5" class="form-control" value="{{ old('course5', $course->course5) }}" />
        </p>

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
@endsection