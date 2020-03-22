@extends('layout')

@section('content')
    <form method="POST" action="{{ route('subincourse.update',['subincourse' => $sic->id])}}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id" disabled="true">
                    @foreach($course as $course)
                        <option value="{{ old('course_id', $course->id) }}"
                            @if($course->id == $sic->course_id)
                            selected
                            @endif    
                        >{{ old('course_id', $course->coursename) }}</option>
                    @endforeach
            </select>
            <input type="hidden" name="course_id" value="{{ old('course_id', $sic->course_id) }}"/>
        </div>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                    @foreach($subjects as $subject)
                        <option value="{{ old('subject_id', $subject->id) }}"
                            @if($subject->id == $sic->subject_id)
                            selected
                            @endif          
                        >{{$subject->subjectnameth}}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>หมวดหมู่</label>
            <select class="form-control" name="tag">
                <option value="{{ old('tag', $sic->tag) }}">{{ old('tag', $sic->tag) }}</option>
                <option>---------</option>
                <option value="วิชาแกน">วิชาแกน</option>
                <option value="วิชาเฉพาะด้าน">วิชาเฉพาะด้าน</option>
                <option value="วิชาเอกเลือก">วิชาเอกเลือก</option>
                <option value="วิชาประสบการณ์วิชาชีพ">วิชาประสบการณ์วิชาชีพ</option>
            </select>
        </div>

        {{-- <p>
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id">
                    @foreach($courses as $course)
                        <option value="{{ old('course_id', $course->id) }}"
                            @if($course->id == $subject->category_id)
                            selected
                            @endif
                            >{{ old('course_id', $course->coursename) }}</option>
                    @endforeach
            </select>
        </p> --}}


        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
@endsection