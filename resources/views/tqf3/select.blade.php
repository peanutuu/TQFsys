@extends('layout')
@section('title','สร้างมคอ.3')
@section('content')

<h1>เลือกรายวิชาทำรายการ</h1>

<form method="POST" action="{{route('tqf3.create')}}" enctype="multipart/form-data">
    @csrf 
    @method('GET')

    <div class="form-group">
        <label>เลือกรายวิชาสำหรับทำเอกสารมคอ.3</label>
        <select class="form-control" name="subject">
            <option value="" disabled selected>เลือกรายวิชา</option>
                @foreach($subjects as $subject)
                    <option value="[{{$subject->subjectid}} {{$subject->subjectnameth}} {{$subject->subjectnameen}}]">
                        {{$subject->subjectid}} {{$subject->subjectnameth}} {{$subject->subjectnameen}}
                    </option>
                @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>เลือกรายวิชาสำหรับทำเอกสารมคอ.3</label>
    </div>



    <button type="submit" class="btn btn-primary btn-block">ตกลง</button>
</form>
<a href="{{ route('tqf3.create') }}" class="btn btn-primary"> เพิ่มมคอ.3 </a>
@endsection