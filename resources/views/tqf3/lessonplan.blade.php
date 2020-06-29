<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>สร้างตารางแผนการสอน มคอ.3</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
     
  <div >
     <br />
     <h3 align="center">สร้างตารางแผนการสอน มคอ.3 ของ {{$tqf3->subject->subjectid}} </h3>
     <br />
     <div class="table-responsive">
        <form method="post" id="dynamic_form">
            <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
                    <thead>
                        <tr>
                            <th width="5%"  rowspan="2"> สัปดาห์ที่ </th>
                            <th width="20%" rowspan="2"> หัวข้อ/รายละเอียด </th>
                            <th width="15%" colspan="2"> จำนวนชั่วโมง </th>
                            <th width="20%" rowspan="2"> กิจกรรมการเรียนการสอน </th>
                            <th width="20%" rowspan="2"> สื่อการสอน </th>
                            <th width="25%" rowspan="2"> อาจารย์ผู้สอน </th>
                        </tr>
                        <tr>
                            <td >ทฤษฎี</td>
                            <td >ปฏิบัติ</td>
                        </tr>
                    </thead>
                        <tbody id="t1">
                            
                        </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="{{ route('tqf3.create5',['tqf3' => $tqf3->id]) }}" class="btn btn-danger"> กลับไปหน้าก่อน </a></td>
                            <td colspan="6" align="right">&nbsp;</td>
                            <td>
                                @csrf
                                <input type="submit" name="save" id="save" class="btn btn-primary" value="บันทึก" />
                            </td>
                        </tr>
                        <tr>
                            
                        </tr>
                    </tfoot>
                </table>
        </form>
    </div>
  </div>

  {{-- <a href="{{ route('tqf3.create5',['tqf3' => $tqf3->id]) }}" class="btn btn-danger"> กลับไปหน้าก่อน </a><br><br> --}}

  {{-- @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}


 </body>
</html>

<script>
$(document).ready(function()
    {
    
        var count = 1;

        dynamic_field(count);

        function dynamic_field(number)
        {
        html = '<tr>';
            html += '<td><input type="text" name="tqf3511[]" class="form-control" /></td>';
            html += '<td><textarea name="tqf3512[]" rows="5" cols="7" class="form-control" ></textarea></td>';
            html += '<td><input type="text" name="tqf3513[]" class="form-control" /></td>';
            html += '<td><input type="text" name="tqf3514[]" class="form-control" /></td>';
            html += '<td><textarea name="tqf3515[]" rows="5" cols="4" class="form-control" ></textarea></td>';
            html += '<td><textarea name="tqf3516[]" rows="5" cols="4" class="form-control" ></textarea></td>';
            // html += '<td><input type="text" name="tqf3517[]" class="form-control" /></td>';
            html += '<td><select class="form-control" name="tqf3517[]"><option>เลือกอาจารย์</option>@foreach($users as $user)@if($user->role == "teacher")<option value="{{$user->name}}">{{$user->name}}</option> @endif @endforeach</select></td>';
            html += '<input type="hidden" name="tqf3_id[]" value="{{$tqf3->id}}"/>';
            // html += '<td><input type="text" name="tqf3_id[]" class="form-control" value="{{$tqf3->id}}"/></td>';
            if(number > 1)
            {
                html += '<td width="2%"><button type="button" name="remove" id="" class="btn btn-danger remove">ลบตาราง</button></td></tr>';
                $( document.getElementById('t1')).append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add" class="btn btn-success">เพิ่มตาราง</button></td></tr>';
                $(document.getElementById('t1')).html(html);
        }
    }
    
    $(document).on('click', '#add', function(){
        count++;
        dynamic_field(count);
    });

    $(document).on('click', '.remove', function(){
        count--;
        $(this).closest("tr").remove();
    });

    $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("lessonplan.insert") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },

            success:function(data)
            
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
    });
    
    });


//     $(document).ready(function()
//     {
    
//         var count = 1;

//         dynamic_field2(count);

//         function dynamic_field2(number)
//         {
//         html = '<tr>';
//             html += '<td><input type="text" name="tqf3511[]" class="form-control" /></td>';
//             html += '<td><textarea name="tqf3512[]" rows="5" cols="4" class="form-control" /></td>';
//             html += '<td><input type="text" name="tqf3513[]" class="form-control" /></td>';
//             html += '<td><input type="text" name="tqf3514[]" class="form-control" /></td>';
//             if(number > 1)
//             {
//                 html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
//                 $( document.getElementById('t2')).append(html);
//             }
//             else
//             {   
//                 // html += '<td><button type="button" name="add2" id="add2" class="btn btn-success">Add</button></td></tr>';
//                 $(document.getElementById('t2')).html(html);
//             }
//         }
    
//     $(document).on('click', '#add2', function(){
//         count++;
//         dynamic_field2(count);
//     });

//     $(document).on('click', '.remove', function(){
//         count--;
//         $(this).closest("tr").remove();
//     });

// });

// $(document).ready(function()
//     {
    
//         var count = 1;

//         dynamic_field(count);

//         function dynamic_field(number)
//         {
//         html = '<tr>';
//             html += '<td><input type="text" name="tqf3511[]" class="form-control" /></td>';
//             html += '<td colspan="6"><input type name="tqf3512[]" rows="5" cols="7" class="form-control" /></td>';
//             if(number > 1)
//             {
//                 html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
//                 $( document.getElementById('t1')).append(html);
//             }
//             // else
//             // {   
//             //     html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
//             //     $(document.getElementById('t1')).html(html);
//             // }
//         }
    
//     $(document).on('click', '#add3', function(){
//         count++;
//         dynamic_field(count);
//     });

//     $(document).on('click', '.remove', function(){
//         count--;
//         $(this).closest("tr").remove();
//     });

// });





</script>