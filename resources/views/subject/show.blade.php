@extends('layout')
@section('title','แสดงข้อมูลรายวิชา')
@section('content')

    <br><br>
    <a href="{{ route('subject.index') }}" class="btn btn-danger"> back </a> <br><br>

    <div>

        <h4>{{ $subject->subjectid }}  {{ $subject->subjectnameen }}</h4>

        <div>
        {{ $subject->subjectnameth }} <br>
        สังกัด {{ $subject->subjectfac }} <br>
        หน่วยกิต {{ $subject->credit }} <br>
        สถานะรายวิชา {{ $subject->avalible }} <br>
        <hr>
        เงื่อนไขรายวิชา <br>
        รายวิชาที่ต้องเรียนมาก่อน {{ $subject->subjectbefore }} <br>
        รายวิชาที่ต้องเรียนพร้อมกัน {{ $subject->subjectwith }} <br>
        </div>
        
        <hr>
        <h4> คำอธิบายรายวิชา </h4>
        {{ $subject->descriptionth }} <br>
        <hr>
        {{ $subject->descriptionen }}
        <hr>

        <h4> จุดมุ่งหมายของรายวิชา </h4>
        {{ $subject->pointofsubject }}
        <hr>


        {{-- <h1>รหัสรายวิชา = {{ $subject->subjectid }} </h1>
        <h1>ชื่อรายวิชา(อังกฤษ) = {{ $subject->subjectnameen }} </h1>
        <h1>ชื่อรายวิชา(ไทย) = {{ $subject->subjectnameth }} </h1>
        <h1>คณะ = {{ $subject->subjectfac }} </h1>
        <h1>หน่วยกิต = {{ $subject->credit }} หน่วย </h1>
        <h1>สถานะรายวิชา = {{ $subject->avalible }} </h1>

        <h1>สร้างโดย = {{ $subject->user->name }}</h1> --}}

        {{-- <h1>อยู่ในหลักสูตร = </h1><br> --}}
        {{-- <h1> {{ $subject->course->coursename }} </h1> --}}

        {{-- <div>
            <h1>อยู่ในหลักสูตร
            @if ($subject->sics->count() > 0)
            @foreach ($subject->sics as $sic)
                ชื่อหลักสูตร = {{ $sic->course->coursename }} <br>
                ประเภทวิชา = {{$sic->tag}}
            @endforeach
            @else
                ยังไม่ได้อยู่ในหลักสูตรใดๆ
            @endif
            </h1>
        </div> --}}
    </div>

    <div> 
        <h4>เอกสารที่เกี่ยวข้อง</h4>
        <div>
            <h5>มคอ3</h5>
            @foreach ($subject->tqf3s as $tqf3)
                <li><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}">{{$tqf3->name}}</a> {{$tqf3->year}}/{{$tqf3->term}} มคอ.3</li>
            @endforeach
            <hr>
        </div>
        
        <div>
            <h5>มคอ5</h5>
            @foreach ($subject->tqf5s as $tqf5)
                <li><a href="{{ route('tqf5.show', ['tqf5' => $tqf5->id]) }}">{{$tqf5->name}}</a> {{$tqf5->year}}/{{$tqf5->term}} มคอ.5</li>
            @endforeach
            <hr>
        </div>
    </div>

    <br><p>สร้างขึ้นเมื่อ {{ $subject->created_at->diffForHumans() }}</p>
    @if ((new Carbon\Carbon())->diffInMinutes($subject->created_at) <5)
        <strong> New Post!!! </strong>
    @endif



@endsection