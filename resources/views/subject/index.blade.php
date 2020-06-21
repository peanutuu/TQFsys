@extends('layouts.app')
@section('title','รายวิชา')
@section('content')

    <h1>รายวิชาในระบบ</h1><br>

    {{-- <a href="{{ route('home') }}" class="btn btn-danger"> ย้อนกลับ </a> --}}
    <a href="{{ route('subject.create') }}" class="btn btn-primary"> เพิ่มรายวิชา </a><br>
    
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

        {{-- <div class="col-md-4">
            <form action="/search" method="get">
                <div class="form-group">
                    <input type="search" name="search" class="form-control">
                    <span class="form-group-btn">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div> --}}
        
        <br>
        <form class="input-group" action="{{route('subject.index')}}" method="GET">
            <input type="text" class="form-control" name="search" placeholder="รหัสวิชา" value="{{request()->query('search')}}">

            {{-- <div class="input-group-addon">
                <span class="input-group-text">test<i class="ti-search"></i></span>
            </div> --}}
            
            <button class="btn btn-primary"> ค้นหา </button>
        </form>

        @if($subjects->count()>0)
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
                @forelse($subjects as $subject)
                    <tr>
                    <th scope="row"><a href="{{ route('subject.show', ['subject' => $subject->id]) }}">{{$subject->subjectid}}</a></th>
                    <th scope="row"><a href="{{ route('subject.show', ['subject' => $subject->id]) }}">{{$subject->subjectnameen}}<br>{{$subject->subjectnameth}}</a></th>

                    <th scope="row">{{ $subject->user->name  }}</th>

                    <td>{{$subject->credit}}</td>
                    <td>{{$subject->avalible }}</td>

                    {{-- <td><a href="{{ route('course.show', ['course' => $subject->course->id]) }}" >{{$subject->course->coursename}}</a></td> --}}

                    @if (Auth::user()->id == $subject->user_id)
                            <td><a href="{{ route('subject.edit', ['subject' => $subject->id]) }}" class="btn btn-primary"> edit </a></td>
                        <td>
                            <form method="POST" class="fm-inline" action="{{ route('subject.destroy',['subject' => $subject->id])}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger"/>
                            </form>
                        </td>  
                    @else
                        
                    @endif   
                    </tr>
                @empty
                    <p>No Result : {{request()->query('search')}}</p>
                @endforelse
                </tbody>
              </table>
        </div>

        @else
        <br><br><h3 class="text text-center">ไม่มีรายวิชาในระบบตอนนี้</h3>
        @endif

        {{-- {{$subjects->appends(['search'=>request()->query('search')])->links()}} --}}

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

    {{-- @empty
        ไม่มีรายวิชาในระบบตอนนี้
    @endforelse  --}}

@endsection