@extends('layout')
@section('title','เพิ่มเอกสารมคอ.5')
@section('content')
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    .tg .tg-0lax{text-align:left;vertical-align:top}
</style>

<br><a href="{{ route('tqf5.create1',['tqf5' => $tqf5->id])}}" class="btn btn-danger"> ย้อนกลับไปก่อนหน้า </a><br>
<br><form method="POST" class="fm-inline" action="{{ route('tqf5.destroy',['tqf5' => $tqf5->id])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="ยกเลิกสร้างเอกสาร" class="btn btn-danger"/>
</form>
<br><br>

<h1>เพิ่มเอกสารมคอ5.</h1><br>

    <form method="POST" action="{{ route('tqf5.update2',['tqf5' => $tqf5->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf5.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf5->name}}"/>
        <input type="hidden" name="year" value="{{$tqf5->year}}"/>
        <input type="hidden" name="term" value="{{$tqf5->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf5->subject_id}}"/>

        <h1><label>หมวดที่ 2 การจัดการเรียนการสอนที่เปรียบเทียบกับแผนการสอน</label></h1>
        
            <label>1. รายงานชั่วโมงการสอนจริงเทียบกับแผนการสอน</label><br>
            <a href="{{ route('tqf5.createtqf521',['tqf5' => $tqf5->id]) }}" 
                class="btn btn-primary"> สร้างรายงานชั่วโมงการสอน </a><br><br>

                <div class="table-responsive">
                    <form >
                            {{-- @if($tqf5->dynamic3fields->count()>0) --}}
                                {{-- <table class="table table-bordered table-striped" id="user_table">
                                    <thead>
                                        <tr>
                                            <th width="25%" rowspan="2"> หัวข้อ </th>
                                            <th width="25%" rowspan="2"> จำนวนชั่วโมงตามแผนการสอน </th>
                                            <th width="25%" rowspan="2"> จำนวนชั่วโมงที่สอนจริง </th>
                                            <th width="25%" rowspan="2"> ระบุสาเหตุที่การสอนจริงต่างจากแผนการสอนหากมีความแตกต่าง </th>
                                        </tr>
                                    </thead>
                                        <tbody> --}}
                                                {{-- @foreach ($tqf5->dynamicfields as $dynamicfield) --}}
                                                {{-- <tr>

                                                </tr> --}}
                                                {{-- @endforeach --}}
                                        {{-- </tbody>
                                </table>  --}}
                            {{-- @else --}}
                                <h3 class="text text-center">ยังไม่ได้สร้างแผนการสอน</h3>
                            {{-- @endif --}}
                </div> <br>

            <label>2. หัวข้อที่สอนไม่ครอบคลุมตามแผน</label><br>
            <a href="{{ route('tqf5.createtqf522',['tqf5' => $tqf5->id]) }}" 
                class="btn btn-primary"> สร้างตารางหัวข้อที่สอน </a><br><br>

                <div class="table-responsive">
                    <form >
                            {{-- @if($tqf5->dynamic3fields->count()>0) --}}
                                {{-- <table class="table table-bordered table-striped" id="user_table">
                                    <thead>
                                        <tr>
                                            <th width="33%" rowspan="2"> หัวข้อที่สอนไม่ครอบคลุมตามแผน (ถ้ามี) </th>
                                            <th width="34%" rowspan="2"> นัยสำคัญของหัวข้อที่สอนไม่ครอบคลุมตามแผน </th>
                                            <th width="33%" rowspan="2"> แนวทางชดเชย </th>
                                        </tr>
                                    </thead>
                                        <tbody> --}}
                                                {{-- @foreach ($tqf5->dynamicfields as $dynamicfield) --}}
                                                {{-- <tr>

                                                </tr> --}}
                                                {{-- @endforeach --}}
                                        {{-- </tbody>
                                </table>  --}}
                            {{-- @else --}}
                                <h3 class="text text-center">ยังไม่ได้สร้างแผนการสอน</h3>
                            {{-- @endif --}}
                </div> <br>

            <label>3. ประสิทธิผลของวิธีสอนที่ทำให้เกิดผลการเรียนรู้ตามที่ระบุในรายละเอียดของรายวิชา</label><br>
            <a href="{{ route('tqf5.createtqf523',['tqf5' => $tqf5->id]) }}" 
            class="btn btn-primary"> สร้างตารางประสิทธิผลของวิธีสอน </a><br><br>

            <div class="table-responsive">
                <form >
                        {{-- @if($tqf5->dynamic3fields->count()>0) --}}
                            {{-- <table class="table table-bordered table-striped" id="user_table">
                                <thead>
                                    <tr>
                                        <th width="30%" rowspan="2"> ผลการเรียนรู้ </th>
                                        <th width="30%" rowspan="2"> วิธีสอนที่ระบุในรายละเอียด รายวิชา </th>
                                        <th width="10%" colspan="2"> ประสิทธิผล </th>
                                        <th width="30%" rowspan="2"> ปัญหาของการใช้วิธีสอน (ถ้ามี) พร้อมข้อเสนอแนะในการแก้ไข</th>
                                    </tr>
                                    <tr>
                                        <td >มี</td>
                                        <td >ไม่มี</td>
                                    </tr>
                                </thead>
                                    <tbody> --}}
                                            {{-- @foreach ($tqf5->dynamicfields as $dynamicfield) --}}
                                            {{-- <tr>

                                            </tr> --}}
                                            {{-- @endforeach --}}
                                    {{-- </tbody>
                            </table>  --}}
                        {{-- @else --}}
                            <h3 class="text text-center">ยังไม่ได้สร้างแผนการสอน</h3>
                        {{-- @endif --}}
            </div> <br>

            <label>4. ข้อเสนอการดำเนินการเพื่อปรับปรุงวิธีสอน</label><br>
            <textarea name='tqf5241' rows="5" cols="4" 
            class="form-control"></textarea><br>
        

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <input type="hidden" name="tqf5121" value="{{$tqf5->tqf5121}}"/>
        <input type="hidden" name="tqf5131" value="{{$tqf5->tqf5131}}"/>
        <input type="hidden" name="tqf5132" value="{{$tqf5->tqf5132}}"/>
        <input type="hidden" name="tqf5141" value="{{$tqf5->tqf5141}}"/>
        <input type="hidden" name="tqf5142" value="{{$tqf5->tqf5142}}"/>
        <input type="hidden" name="tqf5143" value="{{$tqf5->tqf5143}}"/>
        <input type="hidden" name="tqf5151" value="{{$tqf5->tqf5151}}"/>

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