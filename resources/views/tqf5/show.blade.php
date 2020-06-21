@extends('layout')

@section('content')

    <br><br><a href="{{ route('tqf5.index') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br>
    {{-- <h1> {{ $tqf5->id }} </h1> --}}
    <h1>ชื่อเอกสาร {{ $tqf5->name }} </h1>
    <h1>เอกสารเป็นของรายวิชา <a href="{{ route('subject.show', ['subject' => $tqf5->subject->id]) }}">{{ $tqf5->subject->subjectid }}</a></h1>
    <h1>ปีการศึกษา {{ $tqf5->year }} / {{ $tqf5->term }}</h1>

    <p>Added {{ $tqf5->created_at->diffForHumans() }}</p>

    {{-- {{ (new Carbon\Carbon())->diffInMinutes($post->created_at) }} --}}

     @if ((new Carbon\Carbon())->diffInMinutes($tqf5->created_at) <5)
        <strong> New Post!!! </strong>
    @endif

@endsection