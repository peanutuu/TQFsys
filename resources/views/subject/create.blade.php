@extends('layout')
@section('title','เพิ่มรายวิชา')
@section('content')

    <form method="POST" action="{{ route('subject.store')}}" enctype="multipart/form-data">
        @csrf

        {{-- @include('posts._form') --}}
         <p>
            <label>รหัสรายวิชา</label>
            <input type="text" name="subjectid" />
        </p>
        <p>
            <label>ชื่อรายวิชา(อังกฤษ)</label>
            <input type="text" name="subjectnameen" />
        </p>
        <p>
            <label>ชื่อรายวิชา(ไทย)</label>
            <input type="text" name="subjectnameth" />
        </p>        
        <p>
            <label>คณะ</label>
            <input type="text" name="subjectfac" />
        </p>        
        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="credit" />
        </p>

        <div class="form-group">
            <label>สถานะรายวิชา</label>
            <select class="form-control" name="avalible">
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