@extends('layout')
@section('title','รายวิชา')
@section('content')

    <h1>รายวิชาในระบบ</h1><br>

    <a href="{{ route('home') }}" class="btn btn-danger"> ย้อนกลับ </a>
    <a href="{{ route('subject.create') }}" class="btn btn-primary"> เพิ่มรายวิชา </a>
    
    {{-- @forelse ($subjects ?? '' as $subject) --}}
    
        {{-- <p>
            <h3>
                <a href="{{ route('subject.show', ['subject' => $subject->id]) }}"> {{ $subject->subjectid }} </a>
            </h3>
                <a href="{{ route('subject.edit', ['subject' => $subject->id]) }}" class="btn btn-primary"> edit </a>
            <form method="POST" class="fm-inline" action="{{ route('subject.destroy',['subject' => $subject->id])}}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-primary"/>
            </form>
        </p> --}}

        <div>
            <br><table class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">รหัสวิชา</th>
                    <th scope="col">ชื่อรายวิชา</th>
                    <th scope="col">อาจารย์ผู้สอน</th>
                    <th scope="col">หน่วยกิต</th>
                    <th scope="col">สถานะรายวิชา</th>
                    {{-- <th scope="col">รหัสหลักสูตร</th> --}}
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($subjects as $subject)
                  <tr>
                    <th scope="row"><a href="{{ route('subject.show', ['subject' => $subject->id]) }}">{{$subject->subjectid}}</a></th>
                    <th scope="row"><a href="{{ route('subject.show', ['subject' => $subject->id]) }}">{{$subject->subjectnameen}}<br>{{$subject->subjectnameth}}</a></th>
                    <th scope="row">admin</th>
                    <td>{{$subject->credit}}</td>
                    <td>{{$subject->avalible }}</td>
                    {{-- <td><a href="{{ route('course.show', ['course' => $subject->course->id]) }}" >{{$subject->course->coursename}}</a></td> --}}
                    <td><a href="{{ route('subject.edit', ['subject' => $subject->id]) }}" class="btn btn-primary"> edit </a></td>
                    <td>
                        <form method="POST" class="fm-inline" action="{{ route('subject.destroy',['subject' => $subject->id])}}">
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
        ไม่มีรายวิชาในระบบตอนนี้
    @endforelse  --}}

@endsection