@extends('layout')
@section('title','หลักสูตร')
@section('content')

    <h1>หลักสูตรในระบบ</h1><br>

    <a href="{{ route('home') }}" class="btn btn-danger"> ย้อนกลับ </a>
    <a href="{{ route('course.create') }}" class="btn btn-primary"> เพิ่่มหลักสูตร </a>
    <a href="{{ route('subincourse.create') }}" class="btn btn-primary"> เพิ่มรายวิชาลงในหลักสูตร </a>
    {{-- <a href="{{ route('courseopen.index') }}" class="btn btn-primary"> เพิ่มรายวิชา </a> --}}
    
    {{-- @forelse ($courses as $course)

        <p>
            <h3><a href="{{ route('course.show', ['course' => $course->id]) }}"> {{ $course->coursename }} </a></h3>
            <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-primary"> edit </a>
            <form method="POST" class="fm-inline" action="{{ route('course.destroy',['course' => $course->id])}}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-primary"/>
            </form>
        </p> --}}

    <div>
        <br><table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                {{-- <th scope="col">เลขที่</th> --}}
                <th scope="col">รหัสหลักสูตร</th>
                <th scope="col">ผู้จัดทำ</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
              </tr>
            </thead>
            <tbody>
              @foreach($courses as $course)
              <tr>
                {{-- <th scope="row"><a href="{{ route('course.show', ['course' => $course->id]) }}">{{$course->id}}</a></th> --}}
                <td scope="row"><a href="{{ route('course.show', ['course' => $course->id]) }}">{{$course->coursename}}</a></td>
                <td scope="row">admin</td>
                <td>
                    <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-primary"> edit </a>
                </td>
                <td>
                    <form method="POST" class="fm-inline" action="{{ route('course.destroy',['course' => $course->id])}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger"/>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

    {{-- @empty
        ไม่มีหลักสูตรในระบบตอนนี้
    @endforelse  --}}

@endsection