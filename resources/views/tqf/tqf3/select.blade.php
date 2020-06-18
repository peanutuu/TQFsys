@extends('layout')
@section('title','สร้างมคอ.3')
@section('content')

<h1>เลือกรายวิชาทำรายการ</h1>

<form method="POST" action="{{route('tqf3.create')}}" enctype="multipart/form-data">
    @csrf 
    @method('GET')

    <div class="form-group">
        <label>เลือกรายวิชาสำหรับทำเอกสารมคอ.3</label>
        <select class="form-control" name="subject">
            <option value="" disabled selected>เลือกรายวิชา</option>
                @foreach($subjects as $subject)
                    <option value="[{{$subject->subjectid}} {{$subject->subjectnameth}} {{$subject->subjectnameen}}]">
                        {{$subject->subjectid}} {{$subject->subjectnameth}} {{$subject->subjectnameen}}
                    </option>
                @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>เลือกรายวิชาสำหรับทำเอกสารมคอ.3</label>
    </div>



    <button type="submit" class="btn btn-primary btn-block">ตกลง</button>
</form>
<a href="{{ route('tqf3.create') }}" class="btn btn-primary"> เพิ่มมคอ.3 </a>
@endsection

{{-- <div class="form-group">
<label class="radio-inline"><h4><b><ins>ไซส์ผู้ใหญ่ (Unisex ใส่ได้ทั่งชายและหญิง) </ins></b></h4></label>
<div id="showshirtsizeman" class="form-group"> 
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ 4S" required> ไซส์ผู้ใหญ่  4S  (รอบอก 30 นิ้ว ความยาว 23 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ 3S" > ไซส์ผู้ใหญ่  3S  (รอบอก 32 นิ้ว ความยาว 24 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ 2S" > ไซส์ผู้ใหญ่  2S  (รอบอก 34 นิ้ว ความยาว 25 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ S" > ไซส์ผู้ใหญ่   S  (รอบอก 36 นิ้ว ความยาว 26 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ M" > ไซส์ผู้ใหญ่   M  (รอบอก 38 นิ้ว ความยาว 27 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ L" > ไซส์ผู้ใหญ่   L  (รอบอก 40 นิ้ว ความยาว 28 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ XL" > ไซส์ผู้ใหญ่   XL (รอบอก 42 นิ้ว ความยาว 29 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ 2XL" > ไซส์ผู้ใหญ่  2XL (รอบอก 44 นิ้ว ความยาว 30 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ 3XL" > ไซส์ผู้ใหญ่  3XL (รอบอก 46 นิ้ว ความยาว 31 นิ้ว)</h5></label>
    <label class="radio-inline"><h5><input type="radio" name="shirt_size2" id="shirt_man" value="ไซส์ผู้ใหญ่ 4XL" > ไซส์ผู้ใหญ่  4XL (รอบอก 48 นิ้ว ความยาว 32 นิ้ว)</h5></label>
</div> --}}