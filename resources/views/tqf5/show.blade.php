@extends('layout')

@section('content')

    <br><br><a href="{{ route('tqf5.index') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br>
    {{-- <h1> {{ $tqf5->id }} </h1> --}}
    <h1>ชื่อเอกสาร {{ $tqf5->name }} </h1>
    <h1>เอกสารเป็นของรายวิชา <a href="{{ route('subject.show', ['subject' => $tqf5->subject->id]) }}">{{ $tqf5->subject->subjectid }}</a> <br>{{ $tqf5->subject->subjectnameen }} <br> {{ $tqf5->subject->subjectnameth }}</h1>
    <h1>ปีการศึกษา {{ $tqf5->year }} / {{ $tqf5->term }}</h1> <br> <br>

    {{-- <p>Added {{ $tqf5->created_at->diffForHumans() }}</p> --}}

    {{-- {{ (new Carbon\Carbon())->diffInMinutes($post->created_at) }} --}}

    {{-- @if ((new Carbon\Carbon())->diffInMinutes($tqf5->created_at) <5)
        <strong> New Post!!! </strong>
    @endif --}}

        <div>
            <div>
                <h1><center>รายงานผลการดำเนินการของรายวิชา</center></h1> <br>
            </div>

        <div>
        <h5>ชื่อสถาบันอุดมศึกษา มหาวิทยาลัยมหาสารคาม <br>
        คณะ/ภาควิชา คณะวิทยาการสารสนเทศ ภาควิชาเทคโนโลยีสารสนเทศ</h5> <br>
        </div>

        <div>
            <h2><center>หมวดที่ 1 ข้อมูลทั่วไป</center></h2>

            1. รหัสและชื่อรายวิชา <br>
                {{ $tqf5->subject->subjectid }} {{ $tqf5->subject->subjectnameen }} {{ $tqf5->subject->subjectnameth }} <br> <br>

            2. รายวิชาที่ต้องเรียนก่อนรายวิชานี้ (ถ้ามี) <br>
                {{ $tqf5->subject->subjectbefore }}




        </div>


        </div>



@endsection