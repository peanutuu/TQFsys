@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')

{{-- <br><br><a href="{{ route('tqf3.create') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br> --}}
<br><form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="ยกเลิกสร้างเอกสาร" class="btn btn-danger"/>
</form>
<br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf3.update1',['tqf3' => $tqf3->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf3->name}}"/>
        <input type="hidden" name="year" value="{{$tqf3->year}}"/>
        <input type="hidden" name="term" value="{{$tqf3->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf3->subject_id}}"/>

        
        <h1><label>หมวดที่ 1 ข้อมูลโดยทั่วไป</label></h1>
        <hr> <br>
        <p>
            <label>1. รหัสวิชาและชื่อรายวิชา</label>
            <input type="text" class="form-control" value=" {{ $tqf3->subject->subjectid }}"      />
            <input type="text" class="form-control" value=" {{ $tqf3->subject->subjectnameth }}"  />
            <input type="text" class="form-control" value=" {{ $tqf3->subject->subjectnameen }}"  />
        </p> <br> <hr> <br>

        <p>
            <label>2. จำนวนหน่วยกิต</label>
            <input name='tqf3121' type="text" class="form-control" value=" {{ $tqf3->subject->credit }}" />
        </p>

        <p>
            <label>3. หลักสูตรและประเภทวิชา</label><br>
            <label>หลักสูตร</label>
            <input name='tqf3131' type="text" class="form-control" value="@foreach ($tqf3->subject->sics as $sic){{  $sic->course->coursename }} @endforeach"/><br>

            <label>สาขาวิชา</label>
            <input name='tqf3132' type="text" class="form-control" value="@foreach ($tqf3->subject->sics as $sic){{ $sic->course->coursename }} @endforeach"/><br>

            <label>ประเภทกลุ่มรายวิชา</label>
            <input name='tqf3133' type="text" class="form-control" value="@foreach ($tqf3->subject->sics as $sic){{  $sic->tag }} @endforeach"/>
        </p>

        <p>
            <label>4. อาจารย์ผู้ประสานรายวิชา</label>
            <select class="form-control" name="tqf3141">
                <option>เลือกอาจารย์ผู้ประสานงานวิชา</option>
                @foreach($users as $user)
                    @if($user->role == "teacher")
                        <option value="{{$user->name}}">{{$user->name}}</option>
                    @endif
                @endforeach
            </select>
        </p>

        <p>
            <label>5. ภาคการศึกษาที่</label>
            <input name='tqf3151' type="text" value="{{ $tqf3->term }}/{{ $tqf3->year }}" readonly/>

            <label>ชั้นปีที่</label>
            <select name="tqf3152">
                <option>เลือกชั้นปี</option>
                <option value="ปี 1">ปี 1</option>
                <option value="ปี 2">ปี 2</option>
                <option value="ปี 3">ปี 3</option>
                <option value="ปี 4">ปี 4</option>
                <option value="สูงกว่าปี 4">สูงกว่าปี 4</option>
            </select>
        </p>

        <p>
            <label>6. รายวิชาที่ต้องเรียนมาก่อน (Pre-requisite) (ถ้ามี) {{$tqf3->tqf3121}}</label>
            <input name='tqf3161' type="text" class="form-control" value=" {{ $tqf3->subject->subjectbefore }}"/>
        </p>

        <p>
            <label>7. รายวิชาที่ต้องเรียนพร้อมกัน (Co-requisite) (ถ้ามี) {{$tqf3->tqf3121}}</label>
            <input name='tqf3171' type="text" class="form-control" value="{{  $tqf3->tqf3171 }}"/>
        </p>

        <p>
            <label>8. สถาที่เรียน คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม</label> <br>

            <label>ห้อง</label>
            <select name="tqf3181">
                <option>เลือกห้องเรียน</option>
                <option value="IT-401">IT-401</option>
                <option value="IT-402">IT-402</option>
                <option value="IT-403">IT-403</option>
                <option value="IT-404">IT-404</option>
                <option value="IT-405">IT-405</option>
                <option value="IT-406">IT-406</option>
                <option value="IT-407">IT-407</option>
                <option value="IT-408">IT-408</option>
            </select>

            <label>วัน</label>
            <select name="tqf3182">
                        <option>เลือกวัน</option>
                        <option value="อาทิตย์"  >อาทิตย์</option>
                        <option value="จันทร์"  >จันทร์</option>
                        <option value="อังคาร"  >อังคาร</option>
                        <option value="พุธ"  >พุธ</option>
                        <option value="พฤหัส"  >พฤหัส</option>
                        <option value="ศุกร์"  >ศุกร์</option>
                        <option value="เสาร์"  >เสาร์</option>
            </select>

            <label>เวลา</label>
            <select name="tqf3183">
                <option>เลือกเวลา</option>
                <option value="06.00"  >06.00 น.</option>
                <option value="07.00"  >07.00 น.</option>
                <option value="08.00"  >08.00 น.</option>
                <option value="09.00"  >09.00 น.</option>
                <option value="10.00"  >10.00 น.</option>
                <option value="11.00"  >11.00 น.</option>
                <option value="12.00"  >12.00 น.</option>
                <option value="13.00"  >13.00 น.</option>
                <option value="14.00"  >14.00 น.</option>
                <option value="15.00"  >15.00 น.</option>
                <option value="16.00"  >16.00 น.</option>
                <option value="17.00"  >17.00 น.</option>
                <option value="18.00"  >18.00 น.</option>
                <option value="19.00"  >19.00 น.</option>
                <option value="20.00"  >20.00 น.</option>
                <option value="21.00"  >21.00 น.</option>
                <option value="22.00"  >22.00 น.</option>
            </select>
        </p>

        <p>
            <label>9. วันที่จัดทำหรือปรับปรุงรายละเอียดของวิชาครั้งล่าสุด</label> <br>
            <label>วันที่</label>
            <input name='tqf3191' type="date" value=" "/>
        </p>

        <input type="hidden" name="tqf3211" value="{{$tqf3->tqf3211}}"/>
        <input type="hidden" name="tqf3221" value="{{$tqf3->tqf3221}}"/>
        <input type="hidden" name="tqf3311" value="{{$tqf3->tqf3311}}"/>
        <input type="hidden" name="tqf3321" value="{{$tqf3->tqf3321}}"/>
        <input type="hidden" name="tqf3322" value="{{$tqf3->tqf3322}}"/>
        <input type="hidden" name="tqf3323" value="{{$tqf3->tqf3323}}"/>
        <input type="hidden" name="tqf3324" value="{{$tqf3->tqf3324}}"/>
        <input type="hidden" name="tqf3331" value="{{$tqf3->tqf3331}}"/>
        <input type="hidden" name="tqf3341" value="{{$tqf3->tqf3341}}"/>
        <input type="hidden" name="tqf3412" value="{{$tqf3->tqf3412}}"/>
        <input type="hidden" name="tqf3413" value="{{$tqf3->tqf3413}}"/>
        <input type="hidden" name="tqf3422" value="{{$tqf3->tqf3422}}"/>
        <input type="hidden" name="tqf3423" value="{{$tqf3->tqf3423}}"/>
        <input type="hidden" name="tqf3432" value="{{$tqf3->tqf3432}}"/>
        <input type="hidden" name="tqf3433" value="{{$tqf3->tqf3433}}"/>
        <input type="hidden" name="tqf3442" value="{{$tqf3->tqf3442}}"/>
        <input type="hidden" name="tqf3443" value="{{$tqf3->tqf3443}}"/>
        <input type="hidden" name="tqf3452" value="{{$tqf3->tqf3452}}"/>
        <input type="hidden" name="tqf3453" value="{{$tqf3->tqf3453}}"/>
        <input type="hidden" name="tqf3521" value="{{$tqf3->tqf3521}}"/>
        <input type="hidden" name="tqf3522" value="{{$tqf3->tqf3522}}"/>
        <input type="hidden" name="tqf3610" value="{{$tqf3->tqf3610}}"/>
        <input type="hidden" name="tqf3620" value="{{$tqf3->tqf3620}}"/>
        <input type="hidden" name="tqf3630" value="{{$tqf3->tqf3630}}"/>
        <input type="hidden" name="tqf3710" value="{{$tqf3->tqf3710}}"/>
        <input type="hidden" name="tqf3720" value="{{$tqf3->tqf3720}}"/>
        <input type="hidden" name="tqf3730" value="{{$tqf3->tqf3730}}"/>
        <input type="hidden" name="tqf3740" value="{{$tqf3->tqf3740}}"/>
        <input type="hidden" name="tqf3750" value="{{$tqf3->tqf3750}}"/> 

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <li><h4> กรุณาตรวจสอบการทำรายการอีกครั้งก่อนกด ทำรายการต่อไป!!! </h4></li><br>
        <button type="submit" class="btn btn-primary btn-block">ทำรายการต่อไป</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
            $(document).ready(function(){
                  $('.fm-inline').on('submit',function(){
                        if(confirm("คุณต้องการยกเลิกการสร้างเอกสารหรือไม่")){
                              return true;
                        }else{
                              return false;
                        }

                  });
            });
    </script>
@endsection

