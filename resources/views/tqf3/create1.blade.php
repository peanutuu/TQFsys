@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')

<br><br><a href="{{ route('tqf3.index') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br>

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
        <p>
            <label>1. รหัสวิชาและชื่อรายวิชา</label>
            <input type="text" class="form-control" value=" {{ old('name', $tqf3->subject->subjectid) }}"      />
            <input type="text" class="form-control" value=" {{ old('name', $tqf3->subject->subjectnameth) }}"  />
            <input type="text" class="form-control" value=" {{ old('name', $tqf3->subject->subjectnameen) }}"  />
        </p>

        <p>
            <label>2. จำนวนหน่วยกิต</label>
            <input name='tqf3121' type="text" class="form-control" value=" {{ old('name', $tqf3->subject->credit) }}" />
        </p>

        <p>
            <label>3. หลักสูตรและประเภทวิชา</label><br>
            <label>หลักสูตร</label>
            <input name='tqf3131' type="text" class="form-control" value="@foreach ($tqf3->subject->sics as $sic){{ old('tqf3131',  $sic->course->coursename) }} @endforeach"/><br>

            <label>สาขาวิชา</label>
            <input name='tqf3132' type="text" class="form-control" value="@foreach ($tqf3->subject->sics as $sic){{ old('tqf3131',  $sic->course->coursename) }} @endforeach"/><br>

            <label>ประเภทกลุ่มรายวิชา</label>
            <input name='tqf3133' type="text" class="form-control" value="@foreach ($tqf3->subject->sics as $sic){{ old('tqf3131',  $sic->tag) }} @endforeach"/>
        </p>

        <p>
            <label>4. อาจารย์ผู้ประสานรายวิชา</label> option
            {{-- <input name='tqf3141' type="text" /> --}}
            <textarea name='tqf3141' rows="5" cols="4" class="form-control" class="form-control">{{ old('tqf3141', $tqf3->tqf3141 ?? null) }}</textarea><br>

            {{-- <label>สถานที่ติดต่ออาจารย์ ห้อง IT-302 โทร</label>
            <input name='tqf3142' type="text" />
            
            <label>E-mail</label>
            <input name='tqf3143' type="text" /> --}}
        </p>

        <p>
            <label>5. ภาคการศึกษาที่</label>
            <input name='tqf3151' type="text" value="{{ old('term', $tqf3->term) }}/{{ old('year', $tqf3->year) }}" readonly/>

            <label>ชั้นปีที่</label>
            <input name='tqf3152' type="text" value=" "/>
        </p>

        <p>
            <label>6. รายวิชาที่ต้องเรียนมาก่อน (Pre-requisite) (ถ้ามี) {{$tqf3->tqf3121}}</label>
            <input name='tqf3161' type="text" class="form-control" value=" {{ old('name', $tqf3->subject->subjectbefore) }}"/>
        </p>

        <p>
            <label>7. รายวิชาที่ต้องเรียนพร้อมกัน (Co-requisite) (ถ้ามี) {{$tqf3->tqf3121}}</label>
            <input name='tqf3171' type="text" class="form-control" value="{{ old('tqf3171', $tqf3->tqf3171 ?? null) }}"/>
        </p>

        <p>
            <label>8. สถาที่เรียน คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม</label> option

            <label>ห้อง</label>
            <input name='tqf3181' type="text" value="{{ old('tqf3181', $tqf3->tqf3181 ?? null) }}"/>

            <label>วัน</label>
            <input name='tqf3182' type="text" value="{{ old('tqf3182', $tqf3->tqf3182 ?? null) }}"/>

            <label>เวลา</label>
            <input name='tqf3183' type="text" value="{{ old('tqf3183', $tqf3->tqf3183 ?? null) }}"/>
        </p>

        <p>
            <label>9. วันที่จัดทำหรือปรับปรุงรายละเอียดของวิชาครั้งล่าสุด</label>
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

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>

@endsection