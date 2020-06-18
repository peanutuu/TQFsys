@extends('layout')
@section('title','แสดงข้อมูลหลักสูตร')
@section('content')

    {{-- <a href="{{ route('sic.add', ['course' => $course->id]) }}" class="btn btn-primary"> เพิ่มรายวิชา </a> --}}
    <a href="{{ route('course.index') }}" class="btn btn-primary"> กลับ </a>

    <h3>ชื่อรหัสหลักสูตร {{ $course->coursename }} </h3>
    <h3>คณะ {{ $course->coursefac }} </h3>
    <br><h1>โปรแกรมปกติ</h1><br>
    <h3>หมวดวิชาศึกษาทั่วไป {{ $course->course1_1 }} หน่วยกิต</h3>
    <h3>หมวดวิชาศึกษาเฉพาะ {{ $course->course1_2 }} หน่วยกิต</h3>
    <h3>หมวดประสบการณ์วิชาชีพ {{ $course->course1_3 }} หน่วยกิต</h3>
    <h3>หมวดวิชาเลือกเสรี {{ $course->course1_4 }} หน่วยกิต</h3>
    <h3>รวม {{ $course->course1_5 }} หน่วยกิต</h3>
    <br><h1>โปรแกรมสหกิจศึกษา</h1><br>
    <h3>หมวดวิชาศึกษาทั่วไป {{ $course->course2_1 }} หน่วยกิต</h3>
    <h3>หมวดวิชาศึกษาเฉพาะ {{ $course->course2_2 }} หน่วยกิต</h3>
    <h3>หมวดประสบการณ์วิชาชีพ {{ $course->course2_3 }} หน่วยกิต</h3>
    <h3>หมวดวิชาเลือกเสรี {{ $course->course2_4 }} หน่วยกิต</h3>
    <h3>รวม  {{ $course->course2_5 }} หน่วยกิต</h3>

    {{-- <h1> {{ $course->subjects->id }}</h1> --}}

    {{-- <div>
        @foreach ($subjects as $subject)
        <li> {{ $subject->subjectnameth }} </li>
        @endforeach
    </div> --}}

    {{-- <div>
    @foreach ($courses->subjects as $subject)
        <h1>{{$subject->subjectnameth}}</h1>
    @endforeach
    </div> --}}

    <div>
        <br><h1>วิชาในหลักสูตร {{ $course->coursename }}</h1><br>
        @foreach ($course->sics as $sic)
            <h3><a href="{{ route('subject.show', ['subject' => $sic->subject_id]) }}">
                รหัสวิชา {{$sic->subject->subjectid}}
                | ชื่อวิชา {{$sic->subject->subjectnameen}} 
                | ชื่อวิชา {{$sic->subject->subjectnameth}} 
                | หน่วยกิต {{$sic->subject->credit}} 
                | {{$sic->tag}}
                </a>
                <a href="{{ route('subincourse.edit', ['subincourse' => $sic->id]) }}" class="btn btn-primary"> edit </a>
                <form method="POST" class="fm-inline" action="{{ route('subincourse.destroy',['subincourse' => $sic->id])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-primary"/>
                </form>
            </h3>
            {{-- <a href="{{ route('subject.show', ['subject' => $subject->id]) }}">{{$subject->subjectid}}</a> --}}
        @endforeach
    </div>

    <br><p>Added {{ $course->created_at->diffForHumans() }}</p>
     @if ((new Carbon\Carbon())->diffInMinutes($course->created_at) <5)
        <strong> New Post!!! </strong>
    @endif

@endsection