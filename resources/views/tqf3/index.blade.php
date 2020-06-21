@extends('layouts.app')
@section('title','มคอ')
@section('content')

    <div class="card card-default">
        <div class="card-header">
            <h3>เอกสาร มคอ.3 ในระบบ</h3> 
        </div>
        <div class="card-body">
            <a href="{{ route('tqf3.create') }}" class="btn btn-primary"> เพิ่มมคอ.3 </a>
  
            <br><br>
            <form class="input-group" action="{{route('tqf3.index')}}" method="GET">
                <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
                <button class="btn btn-primary"> ค้นหา </button>
            </form>
        
            @if($tqf3s->count()>0)
            <div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <br>
                      <tr>
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
            @foreach ($tqf3s as $tqf3)
                <tr>
                    <td><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}"> {{ $tqf3->name }} </a></td>
                    <td><a href="{{ route('subject.show', ['subject' => $tqf3->subject->id]) }}"> {{$tqf3->subject->subjectid}} </a></td>
                    <td> {{ $tqf3->year }}/{{ $tqf3->term }} </td>
                    <td> {{ $tqf3->user->name  }} </td>
                    @if (Auth::user()->id == $tqf3->user_id)
                        <td><a href="{{ route('tqf3.edit', ['tqf3' => $tqf3->id]) }}" class="btn btn-warning"> edit </a></td>
                        <td>
                            <form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger"/>
                            </form>
                        </td>
                    @else
                        <td><a href=""></a></td>
                        <td>
                            <form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
                            </form>
                        </td>
                    @endif
                    
                    <td><a href="{{ route('tqf3.copy', ['tqf3' => $tqf3->id]) }}" class="btn btn-primary"> copy </a></td>
                    <td><a href="{{ route('tqf3.pdf', ['tqf3' => $tqf3->id]) }}" class="btn btn-primary"> PDF </a></td>
                </tr>
            @endforeach
            </div>       
            @else
                <br><br><h3 class="text text-center">ไม่มีเอกสาร มคอ.3 ในตอนนี้</h3>
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


    {{-- <h1>เอกสาร มคอ. ในระบบ</h1><br>

    <a href="{{ route('tqf3.create') }}" class="btn btn-primary"> เพิ่มมคอ.3 </a>
  
    <br><br>
    <form class="input-group" action="{{route('tqf3.index')}}" method="GET">
        <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
        <button class="btn btn-primary"> ค้นหา </button>
    </form>

    @if($tqf3s->count()>0)
    <div>
        <table class="table table-striped">
            <thead class="thead-dark">
            <br>TQF3
              <tr> --}}
                {{-- <th scope="col">เลขที่</th> --}}
                {{-- <th scope="col">ชื่อเอกสาร</th>
                <th scope="col">รายวิชา</th>
                <th scope="col">ปีการศึกษา/ภาคเรียน</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                <th scope="col">คัดลอก</th>
                <th scope="col">PDF</th>
              </tr>
            </thead>
        <tbody>
    @foreach ($tqf3s as $tqf3)
        <tr> --}}
            {{-- <td><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}"> {{ $tqf3->id }} </a></td>  --}}
            {{-- <td><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}"> {{ $tqf3->name }} </a></td>
            <td><a href="{{ route('subject.show', ['subject' => $tqf3->subject->id]) }}"> {{$tqf3->subject->subjectid}} </a></td>
            <td> {{ $tqf3->year }}/{{ $tqf3->term }} </td>

            @if (Auth::user()->id == $tqf3->user_id)
                <td><a href="{{ route('tqf3.edit', ['tqf3' => $tqf3->id]) }}" class="btn btn-warning"> edit </a></td>
                <td>
                    <form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger"/>
                    </form>
                </td>
            @else
                <td><a href=""></a></td>
                <td>
                    <form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
                    </form>
                </td>
            @endif
            
            <td><a href="{{ route('tqf3.copy', ['tqf3' => $tqf3->id]) }}" class="btn btn-primary"> copy </a></td>
            <td><a href="{{ route('tqf3.pdf', ['tqf3' => $tqf3->id]) }}" class="btn btn-primary"> PDF </a></td>
        </tr> --}}

        {{-- <a href="{{ route('subject.edit', ['subject' => $subject->id]) }}" class="btn btn-primary"> edit </a> --}}
        {{-- {{ $tqf3->catagorytqf_id }} --}}
        {{-- <form method="POST" class="fm-inline" action="{{ route('subject.destroy',['subject' => $subject->id])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-primary"/>
        </form> --}}
        {{-- @foreach ($tqf5s as $tqf5)
            <h3>
                <a href="#"> {{ $tqf5->id }}|{{ $tqf5->name }} </a>
            </h3>
        @endforeach --}}  
    {{-- @endforeach
    </div>       
    @else
        <br><br><h3 class="text text-center">ไม่มีเอกสาร มคอ.3 ในตอนนี้</h3>
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
    </script> --}}
    
@endsection