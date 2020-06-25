@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')

<br><br><a href="{{ route('tqf3.index') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf3.update3',['tqf3' => $tqf3->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf3->name}}"/>
        <input type="hidden" name="year" value="{{$tqf3->year}}"/>
        <input type="hidden" name="term" value="{{$tqf3->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf3->subject_id}}"/>

        <h1><label>หมวดที่ 3 ลักษณะและการดำเนินการ</label></h1>
        <p>
            <label>1.คำอธิบายรายวิชา</label>
            <textarea name='tqf3311' rows="5" cols="4" class="form-control">{{ old('tqf3311', $tqf3->subject->descriptionth) }}</textarea><br>
        </p>

        <p>
            <label>2.จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา</label><br>
            <label>บรรยาย</label>
            <input name='tqf3321' type="text" value="{{ old('tqf3321', $tqf3->tqf3321 ?? null) }}"/>

            <label>สอนเสริม</label>
            <input name='tqf3322' type="text" value="{{ old('tqf3322', $tqf3->tqf3322 ?? null) }}"/>

            <label>การฝึกปฏิบัติ</label>
            <input name='tqf3323' type="text" value="{{ old('tqf3323', $tqf3->tqf3323 ?? null) }}"/>

            <label>การศึกษาด้วยตนเอง</label>
            <input name='tqf3324' type="text" value="{{ old('tqf3324', $tqf3->tqf3324 ?? null) }}"/>
        </p>

        <p>
            <label>3.จำนวนชั่วโมงต่อสัปดาร์ที่อาจารย์ให้คำปรึกษาแนะนำทางวิชาการแก่นิสิตเป็นรายงานบุคคล</label>
            {{-- <input name='tqf3331' type="text" placeholder="ระบุจำนวนชั่วโมงต่อสัปดาห์ที่จะให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษานอกชั้นเรียนและระบุวิธีการสื่อสารให้นักศึกษาได้ทราบกำหนดเวลาล่วงหน้า"  
            size="150"/> --}}
            <textarea name='tqf3331' rows="5" cols="4" class="form-control" >{{ old('tqf3331', $tqf3->tqf3331 ?? null) }}</textarea><br>
        </p>

        <p>
            <label>4.การบูรณาการเรียนการสอนกับงานวิจัย / งานบริการวิชาการ / ทำนุบำรุงศิลปะ (ถ้ามี)</label>
            {{-- <input name='tqf3341' type="text" /> --}}
            <textarea name='tqf3341' rows="5" cols="4" class="form-control">{{ old('tqf3341', $tqf3->tqf3341 ?? null) }}</textarea><br>

        </p>

        <input type="hidden" name="tqf3121" value="{{$tqf3->tqf3121}}"/>
        <input type="hidden" name="tqf3131" value="{{$tqf3->tqf3131}}"/>
        <input type="hidden" name="tqf3132" value="{{$tqf3->tqf3132}}"/>
        <input type="hidden" name="tqf3133" value="{{$tqf3->tqf3133}}"/>
        <input type="hidden" name="tqf3141" value="{{$tqf3->tqf3141}}"/>
        <input type="hidden" name="tqf3151" value="{{$tqf3->tqf3151}}"/>
        <input type="hidden" name="tqf3152" value="{{$tqf3->tqf3152}}"/>
        <input type="hidden" name="tqf3161" value="{{$tqf3->tqf3161}}"/>
        <input type="hidden" name="tqf3171" value="{{$tqf3->tqf3171}}"/>
        <input type="hidden" name="tqf3181" value="{{$tqf3->tqf3181}}"/>
        <input type="hidden" name="tqf3182" value="{{$tqf3->tqf3182}}"/>
        <input type="hidden" name="tqf3183" value="{{$tqf3->tqf3183}}"/>
        <input type="hidden" name="tqf3191" value="{{$tqf3->tqf3191}}"/>
        <input type="hidden" name="tqf3211" value="{{$tqf3->tqf3211}}"/>
        <input type="hidden" name="tqf3221" value="{{$tqf3->tqf3221}}"/>

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