<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 5.8 - DataTables Server Side Processing using Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">    
     <br />
     <h3 align="center">Dynamically Add / Remove tqf3 ของ {{$tqf3->id}} in Laravel 5.8 using Ajax jQuery</h3>
     <br />
     <div class="table-responsive">
        <form method="post" action="{{ route('tqf3.updatelessonplan',['tqf3' => $tqf3->id])}}">
            <span id="result"></span>
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
                                    <td><input type="text" name="tqf3511[]" class="form-control" value="{{ $dynamicfield->tqf3511 }}"/></td>
                                    <td><textarea name="tqf3512[]" rows="5" cols="4" class="form-control" >{{ $dynamicfield->tqf3512 }}</textarea></td>
                                    <td><input type="text" name="tqf3513[]" class="form-control" value="{{ $dynamicfield->tqf3513 }}"/></td>
                                    <td><input type="text" name="tqf3514[]" class="form-control" value="{{ $dynamicfield->tqf3514 }}"/></td>
                                    <td><textarea name="tqf3515[]" rows="5" cols="4" class="form-control" >{{ $dynamicfield->tqf3515 }}</textarea></td>
                                    <td><textarea name="tqf3516[]" rows="5" cols="4" class="form-control" >{{ $dynamicfield->tqf3516 }}</textarea></td>
                                    <td><input type="text" name="tqf3517[]" class="form-control" value="{{ $dynamicfield->tqf3517 }}"/></td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>

                                <tr>
                                    <td><a href="{{ route('tqf3.create5',['tqf3' => $tqf3->id]) }}" class="btn btn-danger"> กลับไปหน้าก่อน </a><br><br>
                                    </td>
                                    <td colspan="5" align="right">&nbsp;</td>
                                    <td>
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary btn-block">Update!</button>
                                    </td>
                                </tr>

                            </tfoot>
                    </table> 
        </form>
    </div>

  {{-- <a href="{{ route('tqf3.create5',['tqf3' => $tqf3->id]) }}" class="btn btn-danger"> กลับไปหน้าก่อน </a><br><br> --}}

</body>
</html>