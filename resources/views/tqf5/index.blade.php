@extends('layouts.app')
@section('title','มคอ')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            <h3>เอกสาร มคอ.5 ในระบบ</h3> 
        </div>
        <div class="card-body">
            {{-- <a href="{{ route('home') }}" class="btn btn-danger"> ย้อนกลับ </a> --}}
            {{-- <a href="#" class="btn btn-primary"> เพิ่มมคอ.2 </a> --}}
            <a href="{{ route('tqf5.create') }}" class="btn btn-primary"> เพิ่มมคอ.5 </a>
            
            <br><br>
            <form class="input-group" action="{{route('tqf5.index')}}" method="GET">
                <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
                {{-- <div class="input-group-addon">
                    <span class="input-group-text">test<i class="ti-search"></i></span>
                </div> --}}
                <button class="btn btn-primary"> ค้นหา </button>
            </form>

            @if($tqf5s->count()>0)
            <div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <br>
                    <tr>
                        {{-- <th scope="col">เลขที่</th> --}}
                        <th scope="col">ชื่อเอกสาร</th>
                        <th scope="col">รายวิชา</th>
                        <th scope="col">ปีการศึกษา/ภาคเรียน</th>
                        <th scope="col">ผู้จัดทำเอกสาร</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">ลบ</th>
                        <th scope="col">คัดลอก</th>
                        <th scope="col">PDF</th>
                    </tr>
                    </thead>
                    <tbody>
            @foreach ($tqf5s as $tqf5)
                <tr>
                {{-- <td><a href="{{ route('tqf5.show', ['tqf5' => $tqf5->id]) }}"> {{ $tqf5->id }} </a></td> --}}
                <td><a href="{{ route('tqf5.show', ['tqf5' => $tqf5->id]) }}"> {{ $tqf5->name }} </a></td>
                <td><a href="{{ route('subject.show', ['subject' => $tqf5->subject->id]) }}"> {{$tqf5->subject->subjectid}} </a></td>
                <td> {{ $tqf5->year }}/{{ $tqf5->term }} </td>
                    <td>{{ $tqf5->user->name}}</td>

                @if (Auth::user()->id == $tqf5->user_id || auth()->user()->isAdmin())
                <td><a href="{{ route('tqf5.edit', ['tqf5' => $tqf5->id]) }}" class="btn btn-warning"> edit </a></td>
                <td>
                    <form method="POST" class="fm-inline" action="{{ route('tqf5.destroy',['tqf5' => $tqf5->id])}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger"/>
                    </form>
                </td>
                @else
                    <td><a href=""></a></td>
                    <td>
                        <form method="POST" class="fm-inline" action="">
                        </form>
                    </td>
                @endif

                <td><a href="{{ route('tqf5.copy', ['tqf5' => $tqf5->id]) }}" class="btn btn-primary"> copy </a></td>

                <td><a href="#" class="btn btn-primary"> PDF </a></td>
                </tr>   
            @endforeach
            </div>
            @else
                <br><br><h3 class="text text-center">ไม่มีเอกสาร มคอ.5 ในตอนนี้</h3>
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
    
@endsection