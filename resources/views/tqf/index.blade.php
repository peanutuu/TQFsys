@extends('layout')
@section('title','มคอ')
@section('content')

    <h1>เอกสาร มคอ. ในระบบ</h1><br>

    <a href="{{ route('home') }}" class="btn btn-danger"> ย้อนกลับ </a>
    {{-- <a href="#" class="btn btn-primary"> เพิ่มมคอ.2 </a> --}}
    <a href="{{ route('tqf3.create') }}" class="btn btn-primary"> เพิ่มมคอ.3 </a>
    <a href="{{ route('tqf5.create') }}" class="btn btn-primary"> เพิ่มมคอ.5 </a>
    
    {{-- <div>
        <table class="table table-striped">
            <thead class="thead-dark">
            <br>TQF2
              <tr>
                <th scope="col">เลขที่</th>
                <th scope="col">ชื่อเอกสาร</th>
                <th scope="col">รายวิชา</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                <th scope="col">คัดลอก</th>
              </tr>
            </thead>
        <tbody>
        <tr>
            <th>no</th>
            <th>name</th>
            <th>course</th>
            <td><a href="#" class="btn btn-primary"> edit </a></td>
            <td>
                <form method="POST" class="fm-inline" action="#">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger"/>
                </form>
            </td>
            <td><a href="#" class="btn btn-primary"> copy </a></td>
        </tr>   
    </div> --}}

    <div>
        <table class="table table-striped">
            <thead class="thead-dark">
            <br>TQF3
              <tr>
                <th scope="col">เลขที่</th>
                <th scope="col">ชื่อเอกสาร</th>
                <th scope="col">รายวิชา</th>
                <th scope="col">ปีการศึกษา/ภาคเรียน</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                <th scope="col">คัดลอก</th>
              </tr>
            </thead>
        <tbody>
    @foreach ($tqf3s as $tqf3)
        <tr>
            <td><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}"> {{ $tqf3->id }} </a></td> 
            <td><a href="{{ route('tqf3.show', ['tqf3' => $tqf3->id]) }}"> {{ $tqf3->name }} </a></td>
            <td><a href="{{ route('subject.show', ['subject' => $tqf3->subject->id]) }}"> {{$tqf3->subject->subjectid}} </a></td>
            <td> {{ $tqf3->year }}/{{ $tqf3->term }} </td>
            <td><a href="{{ route('tqf3.edit', ['tqf3' => $tqf3->id]) }}" class="btn btn-primary"> edit </a></td>
            <td>
                <form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger"/>
                </form>
            </td>
            <td><a href="{{ route('tqf3.copy', ['tqf3' => $tqf3->id]) }}" class="btn btn-primary"> copy </a></td>
        </tr>

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
    @endforeach
    </div>

    <div>
        <table class="table table-striped">
            <thead class="thead-dark">
            <br>TQF5
              <tr>
                <th scope="col">เลขที่</th>
                <th scope="col">ชื่อเอกสาร</th>
                <th scope="col">รายวิชา</th>
                <th scope="col">ปีการศึกษา/ภาคเรียน</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
                <th scope="col">คัดลอก</th>
              </tr>
            </thead>
            <tbody>
    @foreach ($tqf5s as $tqf5)
        <tr>
        <td><a href="{{ route('tqf5.show', ['tqf5' => $tqf5->id]) }}"> {{ $tqf5->id }} </a></td>
        <td><a href="{{ route('tqf5.show', ['tqf5' => $tqf5->id]) }}"> {{ $tqf5->name }} </a></td>
        <td><a href="{{ route('subject.show', ['subject' => $tqf5->subject->id]) }}"> {{$tqf5->subject->subjectid}} </a></td>
        <td> {{ $tqf5->year }}/{{ $tqf5->term }} </td>
        <td><a href="{{ route('tqf5.edit', ['tqf5' => $tqf5->id]) }}" class="btn btn-primary"> edit </a></td>
        <td>
            <form method="POST" class="fm-inline" action="{{ route('tqf5.destroy',['tqf5' => $tqf5->id])}}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger"/>
            </form>
        </td>
        <td><a href="{{ route('tqf5.copy', ['tqf5' => $tqf5->id]) }}" class="btn btn-primary"> copy </a></td>
        </tr>   
    @endforeach
    </div>
    {{-- @forelse ($tqf5s as $tqf5)
    <p>
        <h3>
            <a href="#"> {{ $tqf5->id }}|{{ $tqf5->name }} </a>
        </h3>
        {{ $tqf3->catagorytqf_id }} 
             <a href="#" class="btn btn-primary"> edit </a>
        <form method="POST" class="fm-inline" action="{{ route('subject.destroy',['subject' => $subject->id])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-primary"/>
        </form> 
    </p>
    @empty
        <p>ไม่มีเอกสารมคอในระบบตอนนี้</p>
    @endforelse  --}}

@endsection