@extends('layout')

@section('content')

    {{-- <h1> {{ $tqf3->id }} </h1> --}}
    <h1>ชื่อเอกสาร {{ $tqf3->name }} </h1>
    <h1>เอกสารเป็นของรายวิชา <a href="{{ route('subject.show', ['subject' => $tqf3->subject->id]) }}">{{ $tqf3->subject->subjectid }}</a></h1>
    <h1>ปีการศึกษา {{ $tqf3->year }} / {{ $tqf3->term }}</h1>

    {{-- <h1> {{ $subject->subjectnameen }} </h1>
    <h1> {{ $subject->subjectnameth }} </h1>
    <h1> {{ $subject->subjectfac }} </h1>
    <h1> {{ $subject->credit }} </h1>
    <h1> {{ $subject->avalible }} </h1> --}}

    <p>Added {{ $tqf3->created_at->diffForHumans() }}</p>

    {{-- {{ (new Carbon\Carbon())->diffInMinutes($post->created_at) }} --}}

     @if ((new Carbon\Carbon())->diffInMinutes($tqf3->created_at) <5)
        <strong> New Post!!! </strong>
    @endif

@endsection