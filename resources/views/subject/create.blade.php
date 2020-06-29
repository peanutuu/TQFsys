@extends('layout')
@section('title','เพิ่มรายวิชา')
@section('content')

    <form method="POST" action="{{ route('subject.store')}}" enctype="multipart/form-data">
        @csrf
        <br> <br>
        <h1>เพิ่มรายวิชา</h1> <hr>

        {{-- @include('posts._form') --}}
        <br>
        <p>
            <label>รหัสรายวิชา</label>
            <input type="text" name="subjectid" class="form-control" required/>
        </p>

        <p>
            <label>ชื่อรายวิชา(อังกฤษ)</label>
            <input type="text" name="subjectnameen" class="form-control" required/>
        </p>
        
        <p>
            <label>ชื่อรายวิชา(ไทย)</label>
            <input type="text" name="subjectnameth" class="form-control" required/>
        </p>        

        <p>
            <label>สังกัด</label>
            {{-- <input type="text" name="subjectfac" class="form-control" /> --}}
            <select class="form-control" name="subjectfac" required>
                <option>เลือกคณะ</option>
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
            </select>
        </p>   

        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="credit" class="form-control" required/> 
        </p>

        <p>
            <label>เงื่อนไขรายวิชา</label>
            {{-- <input type="text" name="subjectbefore" class="form-control" required/>  --}}
            <label>รายวิชาที่ต้องเรียนมาก่อน</label>
            <select class="form-control" name="subjectbefore" required>
                    <option value="" disabled selected>เลือกรายวิชา</option>
                    <option value="ไม่มี">ไม่มี</option>
                @foreach($subjects as $subject)
                    <option value="{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}">{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}</option>
                @endforeach
            </select>
            <label>รายวิชาที่เรียนพร้อมกัน</label>
            <select class="form-control" name="subjectwith" required>
                <option value="" disabled selected>เลือกรายวิชา</option>
                <option value="ไม่มี">ไม่มี</option>
            @foreach($subjects as $subject)
                <option value="{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}">{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}</option>
            @endforeach
            </select>
        </p>

        <p>
            <label>คำอธิบายรายวิชา(ไทย)</label>
            {{-- <input type="text" name="descriptionth" /> --}}
            <textarea name='descriptionth' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>คำอธิบายรายวิชา(อังกฤษ)</label>
            {{-- <input type="text" name="descriptionen" /> --}}
            <textarea name='descriptionen' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>จุดมุ่งหมายรายของวิชา</label>
            {{-- <input type="text" name="descriptionen" /> --}}
            <textarea name='pointofsubject' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <div class="form-group">
            <label>สถานะรายวิชา</label>
            <select class="form-control" name="avalible" required>
                <option value="ใช้งาน">ใช้งาน</option>
                <option value="ไม่ใช้งาน">ไม่ใช้งาน</option>
            </select>
        </div>
        
        {{-- <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id">
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->coursename}}</option>
                    @endforeach
            </select>
        </div> --}}
        
        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection