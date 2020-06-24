@extends('layout')
@section('title','แสดงข้อมูลหลักสูตร')
@section('content')

    {{-- <a href="{{ route('sic.add', ['course' => $course->id]) }}" class="btn btn-primary"> เพิ่มรายวิชา </a> --}}
    <br><br><a href="{{ route('course.index') }}" class="btn btn-primary"> กลับ </a><br><br>

    หลักสูตร <br><br>

    ระดับการศึกษา  :  {{$course->courselv}} <br>
    คณะ         : {{$course->coursefac}} <br>
    หลักสูตร : {{$course->coursename}} <br><br><br>

    1. รายวิชาศึกษาทั่วไป   หน่วยกิตต่ำสุด : {{$course->course1}} <br><br>
    2. หมวดวิชาศึกษาเฉพาะ หน่วยกิตต่ำสุด : {{$course->course2}} <br>
    2.1 วิชาแกน หน่วยกิตต่ำสุด : {{$course->course21}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    2.2 วิชาเฉพาะด้าน หน่วยกิตต่ำสุด : {{$course->course22}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    2.2.1 กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ หน่วยกิตต่ำสุด : {{$course->course221}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    2.2.2 กลุ่มเทคโนโลยีเพื่องานประยุกต์ หน่วยกิตต่ำสุด : {{$course->course222}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    2.2.3 กลุ่มเทคโนโลยีและวิธีการทางซอฟท์แวร์ หน่วยกิตต่ำสุด : {{$course->course223}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    2.2.4 กลุ่มโครงสร้างพื้นฐานของระบบ หน่วยกิตต่ำสุด : {{$course->course224}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    2.2.5 กลุ่มภาษาสำหรับเทคโนโลยีสารสนเทศ หน่วยกิตต่ำสุด : {{$course->course225}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    3. หมวดวิชาเลือกเสรี หน่วยกิตต่ำสุด : {{$course->course3}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    4. หมวดประสบการณ์วิชาชีพ หน่วยกิตต่ำสุด : {{$course->course4}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>

    5. หมวดประสบการณ์วิชาชีพ หน่วยกิตต่ำสุด : {{$course->course5}} <br>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10%" >รหัสวิชา</th>
                <th width="25%" colspan="2">รายวิชา</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td width="10%" >test</td>
                <td width="25%" colspan="2">test</td>
            </tr>
            </tbody>
        </table>
    </div><br><br>
    
 
    {{-- <h3>ชื่อรหัสหลักสูตร {{ $course->coursename }} </h3>
    <h3>คณะ {{ $course->coursefac }} </h3>
    <br><h1>โปรแกรมปกติ</h1><br>
    <h3>หมวดวิชาศึกษาทั่วไป {{ $course->course1_1 }} หน่วยกิต</h3>
    <h3>หมวดวิชาศึกษาเฉพาะ {{ $course->course1_2 }} หน่วยกิต</h3>
    <h3>หมวดประสบการณ์วิชาชีพ {{ $course->course1_3 }} หน่วยกิต</h3>
    <h3>หมวดวิชาเลือกเสรี {{ $course->course1_4 }} หน่วยกิต</h3>
    <h3>รวม {{ $course->course1_5 }} หน่วยกิต</h3>
    <br><h1>โปรแกรมสหกิจศึกษา</h1><br>
    <h3>หมวดวิชาศึกษาทั่วไป {{ $course->course2_1 }} หน่วยกิต</h3>
    <h3>หมวดวิชาศึกษาเฉพาะ {{ $course->course2_2 }} หน่วยกิต</h3>
    <h3>หมวดประสบการณ์วิชาชีพ {{ $course->course2_3 }} หน่วยกิต</h3>
    <h3>หมวดวิชาเลือกเสรี {{ $course->course2_4 }} หน่วยกิต</h3>
    <h3>รวม  {{ $course->course2_5 }} หน่วยกิต</h3>

    <div>
        <br><h1>วิชาในหลักสูตร {{ $course->coursename }}</h1><br>
        @foreach ($course->sics as $sic)
            <h3><a href="{{ route('subject.show', ['subject' => $sic->subject_id]) }}">
                รหัสวิชา {{$sic->subject->subjectid}}
                | ชื่อวิชา {{$sic->subject->subjectnameen}} 
                | ชื่อวิชา {{$sic->subject->subjectnameth}} 
                | หน่วยกิต {{$sic->subject->credit}} 
                | {{$sic->tag}}
                </a>
                <a href="{{ route('subincourse.edit', ['subincourse' => $sic->id]) }}" class="btn btn-primary"> edit </a>
                <form method="POST" class="fm-inline" action="{{ route('subincourse.destroy',['subincourse' => $sic->id])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-primary"/>
                </form>
            </h3>
            <a href="{{ route('subject.show', ['subject' => $subject->id]) }}">{{$subject->subjectid}}</a>
        @endforeach
        
    </div> --}}

    {{-- <br><p>Added {{ $course->created_at->diffForHumans() }}</p>
     @if ((new Carbon\Carbon())->diffInMinutes($course->created_at) <5)
        <strong> New Post!!! </strong>
    @endif --}}

@endsection