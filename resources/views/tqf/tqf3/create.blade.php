@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')

<h1>เพิ่มเอกสารมคอ3.</h1><br>
     <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data">
        @csrf 

        {{-- @include('posts._form') --}}
        
         <p>
            <label>ชื่อเอกสาร</label>
            <input type="text" name="name" />
        </p>

        <p>
            <label>ปีการศึกษา</label>
            <select name="year">
                <option value="" disabled selected>เลือกปีการศึกษา</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
            </select>
        </p>

        <p>
            <label>ภาคเรียนการศึกษา</label>
            <select name="term" >
                <option value="" disabled selected>เลือกภาคเรียนการศึกษา</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="ซัมเมอร์">ซัมเมอร์</option>
            </select>
        </p>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                <option value="" disabled selected>เลือกรายวิชา</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subjectid}}</option>
                    @endforeach
            </select>
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

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>

@endsection