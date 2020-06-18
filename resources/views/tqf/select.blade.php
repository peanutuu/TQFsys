@extends('layout')
@section('title','สร้างมคอ.3')
@section('content')

<h1>เลือกรายวิชาทำรายการ</h1>

<form method="POST" action="{{ route('tqf3.create')}}" enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    
    <div class="form-group">
        <label>เลือกรายวิชาสำหรับทำเอกสารมคอ.3</label>
        <select class="form-control" name="subject_id">
            <option value="" disabled selected>เลือกรายวิชา</option>
                @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->subjectid}}</option>
                @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary btn-block">ตกลง</button>

</form>


@endsection