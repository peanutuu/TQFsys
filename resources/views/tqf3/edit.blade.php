@extends('layout')

@section('content')
    <form method="POST" action="{{ route('tqf3.update',['tqf3' => $tqf3->id])}}">
        @csrf
        @method('PUT')

        <p>
            <label>ชื่อเอกสาร</label>
            <input type="text" name="name" value="{{ old('name', $tqf3->name) }}" />
        </p>

        <p>
            <label>ปีการศึกษา</label>
            <select name="year">
                <option value="{{ old('year', $tqf3->year) }}">{{ old('year', $tqf3->year) }}</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
            </select>
        </p>

        <p>
            <label>ภาคเรียนการศึกษา</label>
            <select name="term" >
                <option value="{{ old('term', $tqf3->term) }}">{{ old('term', $tqf3->term) }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="ซัมเมอร์">ซัมเมอร์</option>
            </select>
        </p>

        <p>
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                    @foreach($subjects as $subject)
                        <option value="{{ old('subject_id', $subject->id) }}"
                            @if($subject->id == $tqf3->subject_id)
                            selected
                            @endif
                            >{{ old('subject_id', $subject->subjectid) }}</option>
                    @endforeach
            </select>
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