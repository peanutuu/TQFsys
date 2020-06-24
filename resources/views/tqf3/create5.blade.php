@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
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

<br><br><a href="{{ route('tqf3.index') }}" class="btn btn-danger"> ย้อนกลับ </a><br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf3.update5',['tqf3' => $tqf3->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf3->name}}"/>
        <input type="hidden" name="year" value="{{$tqf3->year}}"/>
        <input type="hidden" name="term" value="{{$tqf3->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf3->subject_id}}"/>

        <h1>หมวดที่ 5 แผนการสอนและการประเมินผล</h1>
        <p>
            <label>1.แผนการสอน</label><br>

            <a href="{{ route('tqf3.lessonplan',['tqf3' => $tqf3->id]) }}" class="btn btn-danger"> สร้างแผนการสอน </a><br><br>

            {{-- @foreach ($tqf3->dynamicfields as $dynamicfield)

            {{ $dynamicfield->tqf3511 }} {{ $dynamicfield->tqf3512 }} {{ $dynamicfield->tqf3513 }} 
            {{ $dynamicfield->tqf3514 }} {{ $dynamicfield->tqf3515 }} {{ $dynamicfield->tqf3516 }} {{ $dynamicfield->tqf3517 }} <br>

            @endforeach --}}

            {{-- <input name='tqf3511' type="text" /> --}}
            {{-- <button type="button" name="add1" id="add1" class="btn btn-success">Add1</button>
            <button type="button" name="add3" id="add3" class="btn btn-success">Add3</button> --}}
            
            <div class="table-responsive">
                <form method="post" id="dynamic_form">
                    <span id="result"></span>
                        @if($tqf3->dynamicfields->count()>0)
                            <table class="table table-bordered table-striped" id="user_table">
                                <thead>
                                    <tr>
                                        <th width="5%"  rowspan="2"> สัปดาห์ที่ </th>
                                        <th width="20%" rowspan="2"> หัวข้อ/รายละเอียด </th>
                                        <th width="10%" colspan="2"> จำนวนชั่วโมง </th>
                                        <th width="10%" rowspan="2"> กิจกรรมการเรียนการสอน </th>
                                        <th width="10%" rowspan="2"> สื่อการสอน </th>
                                        <th width="10%" rowspan="2"> อาจารย์ผู้สอน </th>
                                        {{-- <th width="5%"  colspan="2"> เพื่มจำนวนเแถว
                                            <button type="button" name="add1" id="add1" class="btn btn-success">Add1</button>
                                            <button type="button" name="add3" id="add3" class="btn btn-success">Add3</button>
                                        </th> --}}
                
                                    </tr>
                                    <tr>
                                        <td >ทฤษฎี</td>
                                        <td >ปฏิบัติ</td>
                                        {{-- <td width="10%" rowspan="2"><button type="button" name="add1" id="add1" class="btn btn-success">Add1</button>
                                            <button type="button" name="add3" id="add3" class="btn btn-success">Add3</button></td> --}}
                                    </tr>
                                </thead>
                                    <tbody id="t1">
                                        
                                            @foreach ($tqf3->dynamicfields as $dynamicfield)
                                            <tr>
                                            <td>{{ $dynamicfield->tqf3511 }} </td>
                                            <td>{{ $dynamicfield->tqf3512 }}</td>
                                            <td>{{ $dynamicfield->tqf3513 }}</td>
                                            <td>{{ $dynamicfield->tqf3514 }}</td>
                                            <td>{{ $dynamicfield->tqf3515 }}</td>
                                            <td>{{ $dynamicfield->tqf3516 }}</td>
                                            <td>{{ $dynamicfield->tqf3517 }}</td>

                                            {{-- {{ $dynamicfield->tqf3511 }} {{ $dynamicfield->tqf3512 }} {{ $dynamicfield->tqf3513 }} 
                                            {{ $dynamicfield->tqf3514 }} {{ $dynamicfield->tqf3515 }} {{ $dynamicfield->tqf3516 }} {{ $dynamicfield->tqf3517 }} <br> --}}
                        
                                            </tr>
                                            @endforeach
        
                                    </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <td colspan="2" align="right">&nbsp;</td>
                                        <td>
                                            @csrf
                                            <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                </tfoot> --}}
                            </table> 
                    @else
                        <br><br><h3 class="text text-center">ยังไม่ได้สร้างแผนการสอน</h3>
                    @endif
                </form>
            </div>

            {{-- <input type="text" id="tb1" />
            <button type="button" onclick='createTable()'>Click Me!</button>
            <table id="table" class="order-table table" name="table1" required>
            </table> --}}

        </p>
        

        <p>
            <label>2.แผนการประเมินผลการเรียนรู้</label><br>
            <label>2.1 วิธีการ</label><br>
            <label>1.แผนการสอน</label><br>

            {{-- <button type="button" name="add2" id="add2" class="btn btn-success">Add</button> --}}
            {{-- <input name='tqf3511' type="text" /> --}}
            {{-- <div class="table-responsive">
                <form method="post" id="dynamic_form2">
                    <span id="result"></span>
                        <table class="table table-bordered table-striped" id="user_table2">
                            <thead>
                                <tr>
                                    <th width="25%" > ผลการเรียนรู้ </th>
                                    <th width="25%" > วิธีการประเมิน </th>
                                    <th width="25%" > สัปดารห์ที่ประเมิน</th>
                                    <th width="25%" > สัดส่วนของการประเมิน </th>
                                    <th width="10%" rowspan="2"><button type="button" name="add2" id="add2" class="btn btn-success">Add</button></td>
                                </tr>
                            </thead>
                            <tbody id="t2">
                                
                            </tbody>
                            
                            <tfoot>
                                <tr>
                                    <td colspan="2" align="right">&nbsp;</td>
                                    <td>
                                        @csrf
                                        <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                                    </td>
                                </tr>
                                <tr>
                                    
                                </tr>
                            </tfoot>
                        </table>
                </form>
            </div> --}}

            <label>2.2 เกณฑ์ผ่านรายวิชา ผู้ที่จะผ่านรายวิชานี้จะต้อง</label><br>
            {{-- <input name='tqf3521' type="text" /><br> --}}
            <textarea name='tqf3521' rows="5" cols="4" class="form-control">{{ old('tqf3521', $tqf3->tqf3521 ?? null) }}</textarea><br>

            <label>2.3 เกณฑ์ค่าระดับคะแนน</label><br>
            {{-- <input name='tqf3522' type="text" /> --}}
            <textarea name='tqf3522' rows="5" cols="4" class="form-control">{{ old('tqf3522', $tqf3->tqf3522 ?? null) }}</textarea><br>
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