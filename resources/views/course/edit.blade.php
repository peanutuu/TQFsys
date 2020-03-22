@extends('layout')

@section('content')
    <form method="POST" action="{{ route('course.update',['course' => $course->id])}}">
        @csrf
        @method('PUT')

        <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="coursename" value="{{ old('coursename', $course->coursename) }}" />
        </p>
        <p>
            <label>คณะ</label>
            <input type="text" name="coursefac" value="{{ old('coursefac', $course->coursefac) }}" />
        </p>
        <p>
            <label>ระบบปกติ</label><br>
            <label>ก.หมวดวิชาเฉพาะ</label>
            <input type="text" name="course1_1" value="{{ old('course1_1', $course->course1_1) }}" />
        </p>
        <p>
            <label>ข.หมวดวิชาศึกษาเฉพาะ</label>
            <input type="text" name="course1_2" value="{{ old('course1_2', $course->course1_2) }}" />
        </p>
        <p>
            <label>ค.หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course1_3" value="{{ old('course1_3', $course->course1_3) }}" />
        </p>
        <p>
            <label>ง.หมวดวิชาเลือกเสรี</label>
            <input type="text" name="course1_4" value="{{ old('course1_4', $course->course1_4) }}" />
        </p>
        <p>
            <label>รวม</label>
            <input type="text" name="course1_5" value="{{ old('course1_5', $course->course1_5) }}" />
        </p>
            <label>ระบบสหกิจศึกษา</label><br>
            <label>ก.หมวดวิชาเฉพาะ</label>
            <input type="text" name="course2_1" value="{{ old('course2_1', $course->course2_1) }}" />
        </p>
        <p>
            <label>ข.หมวดวิชาศึกษาเฉพาะ</label>
            <input type="text" name="course2_2" value="{{ old('course2_2', $course->course2_2) }}" />
        </p>
        <p>
            <label>ค.หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course2_3" value="{{ old('course2_3', $course->course2_3) }}" />
        </p>
        <p>
            <label>ง.หมวดวิชาเลือกเสรี</label>
            <input type="text" name="course2_4" value="{{ old('course2_4', $course->course2_4) }}" />
        </p>
        <p>
            <label>รวม</label>
            <input type="text" name="course2_5" value="{{ old('course2_5', $course->course2_5) }}" />
        </p>


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