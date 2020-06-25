@extends('layout')
@section('title','เพิ่มรายวิชา')
@section('content')

    <form method="POST" action="{{ route('subject.store')}}" enctype="multipart/form-data">
        @csrf

        {{-- @include('posts._form') --}}
        <br><br>
        <p>
            <label>รหัสรายวิชา</label>
            <input type="text" name="subjectid" class="form-control" />
        </p>

        <p>
            <label>ชื่อรายวิชา(อังกฤษ)</label>
            <input type="text" name="subjectnameen" class="form-control" />
        </p>
        
        <p>
            <label>ชื่อรายวิชา(ไทย)</label>
            <input type="text" name="subjectnameth" class="form-control" />
        </p>        

        <p>
            <label>สังกัด</label>
            <input type="text" name="subjectfac" class="form-control" />
        </p>   

        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="credit" class="form-control" /> 
        </p>

        <p>
            <label>เงื่อนไขรายวิชา</label>
            <input type="text" name="subjectbefore" class="form-control" /> z
        </p>

        <p>
            <label>คำอธิบายรายวิชา(ไทย)</label>
            {{-- <input type="text" name="descriptionth" /> --}}
            <textarea name='descriptionth' rows="5" cols="4" class="form-control"></textarea><br>
        </p>

        <p>
            <label>คำอธิบายรายวิชา(อังกฤษ)</label>
            {{-- <input type="text" name="descriptionen" /> --}}
            <textarea name='descriptionen' rows="5" cols="4" class="form-control"></textarea><br>
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