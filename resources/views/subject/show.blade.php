@extends('layout')
@section('title','แสดงข้อมูลรายวิชา')
@section('content')

    <a href="{{ route('subject.index') }}" class="btn btn-danger"> back </a>

    <div>
        <h1>รหัสรายวิชา = {{ $subject->subjectid }} </h1>
        <h1>ชื่อรายวิชา(อังกฤษ) = {{ $subject->subjectnameen }} </h1>
        <h1>ชื่อรายวิชา(ไทย) = {{ $subject->subjectnameth }} </h1>
        <h1>คณะ = {{ $subject->subjectfac }} </h1>
        <h1>หน่วยกิต = {{ $subject->credit }} หน่วย </h1>
        <h1>สถานะรายวิชา = {{ $subject->avalible }} </h1>

        <h1>สร้างโดย = {{ $subject->user->name }}</h1>

        {{-- <h1>อยู่ในหลักสูตร = </h1><br> --}}
        {{-- <h1> {{ $subject->course->coursename }} </h1> --}}
        <div>
            <h1>อยู่ในหลักสูตร
            @if ($subject->sics->count() > 0)
            @foreach ($subject->sics as $sic)
                ชื่อหลักสูตร = {{ $sic->course->coursename }} <br>
                ประเภทวิชา = {{$sic->tag}}
                {{-- <li> {{$sic->tag}} </li> --}}
            @endforeach
            @else
                ยังไม่ได้อยู่ในหลักสูตรใดๆ
            @endif
            </h1>
        </div>
    </div>

    <div>
    <br>เอกสารที่เกี่ยวข้อง
        <div>
            <br><h3>มคอ3</h3>
            @foreach ($subject->tqf3s as $tqf3)
                <li><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}">{{$tqf3->name}}</a> {{$tqf3->year}}/{{$tqf3->term}} มคอ.3</li>
            @endforeach
        </div>
        
        <div>
            <br><h3>มคอ5</h3>
            @foreach ($subject->tqf5s as $tqf5)
                <li><a href="{{ route('tqf5.show', ['tqf5' => $tqf5->id]) }}">{{$tqf5->name}}</a> {{$tqf5->year}}/{{$tqf5->term}} มคอ.5</li>
            @endforeach
        </div>
    </div>

    <br><p>Added {{ $subject->created_at->diffForHumans() }}</p>
     @if ((new Carbon\Carbon())->diffInMinutes($subject->created_at) <5)
        <strong> New Post!!! </strong>
    @endif



@endsection