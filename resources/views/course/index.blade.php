@extends('layouts.app')
@section('title','หลักสูตร')
@section('content')

<div class="card card-default">
    <div class="card-header">
        <h3>หลักสูตรในระบบ</h3> 
    </div>
    <div class="card-body">
      
    @if(auth()->user()->isAdmin())    
        <a href="{{ route('course.create') }}" class="btn btn-primary"> เพิ่่มหลักสูตร </a>
        <a href="{{ route('subincourse.create') }}" class="btn btn-primary"> เพิ่มรายวิชาลงในหลักสูตร </a>
    @endif

    <br><br>
    <form class="input-group" action="{{route('course.index')}}" method="GET">
        <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
        <button class="btn btn-primary"> ค้นหา </button>
    </form>    

    @if($courses->count()>0)
    <div>
        <br><table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                {{-- <th scope="col">เลขที่</th> --}}
                <th scope="col">รหัสหลักสูตร</th>
                <th scope="col">ชื่อหลักสูตร</th>
                <th scope="col">หน่วยกิต</th>
                <th scope="col">คณะ</th>
                @if(auth()->user()->isAdmin()) 
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($courses as $course)
            <tr>
                {{-- <th scope="row"><a href="{{ route('course.show', ['course' => $course->id]) }}">{{$course->id}}</a></th> --}}
                <td scope="row"><a href="{{ route('course.show', ['course' => $course->id]) }}">{{$course->courseid}}</a></td>
                <td scope="row"><a href="{{ route('course.show', ['course' => $course->id]) }}">{{$course->coursename}}</a></td>
                <td scope="row">{{ $course->coursecredit }}</td>
                <td scope="row">{{$course->coursefac}}</td>

                @if(auth()->user()->isAdmin()) 
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
                @endif
                
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @else
        <br><br><h3 class="text text-center"> ไม่มีเอกสารหลักสูตรในระบบตอนนี้ </h3>
    @endif
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                $('.fm-inline').on('submit',function(){
                        if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
                            return true;
                        }else{
                            return false;
                        }

                });
            });
    </script>
    </div>
  </div>
      
    {{-- @empty
        ไม่มีหลักสูตรในระบบตอนนี้
    @endforelse  --}}

@endsection