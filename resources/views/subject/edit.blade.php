@extends('layout')

@section('content')
    <form method="POST" action="{{ route('subject.update',['subject' => $subject->id])}}">
        @csrf
        @method('PUT')

        <p>
            <label>รหัสวิชา</label>
            <input type="text" name="subjectid" value="{{ old('subjectid', $subject->subjectid) }}" />
        </p>
        <p>
            <label>ชื่อรายวิชา(อังกฤษ)</label>
            <input type="text" name="subjectnameen" value="{{ old('subjectnameen', $subject->subjectnameen) }}" />
        </p>
        <p>
            <label>ชื่อรายวิชา(ไทย)</label>
            <input type="text" name="subjectnameth" value="{{ old('subjectnameth', $subject->subjectnameth) }}" />
        </p>
        <p>
            <label>คณะ</label>
            <input type="text" name="subjectfac" value="{{ old('subjectfac', $subject->subjectfac) }}" />
        </p>
        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="credit" value="{{ old('credit', $subject->credit) }}" />
        </p>
        <p>
            <label>สถานะรายวิชา</label>
            <select type="text" name="avalible">
                <option value="{{ old('avalible', $subject->avalible) }}">{{ old('avalible', $subject->avalible) }}</option>
                <option >---------</option>
                <option value="ใช้งาน">ใช้งาน</option>
                <option value="ไม่ใช้งาน">ไม่ใช้งาน</option>
            </select>
        </p>
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