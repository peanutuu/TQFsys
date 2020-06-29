<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>สร้างตารางรายงานชั่วโมงการสอนจริงเทียบกับแผนการสอน</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
 <body>
  <div>    

    <br />
    <h3 align="center">สร้างตารางรายงานชั่วโมงการสอนจริงเทียบกับแผนการสอน มคอ.5ของรายวิชา {{$tqf5->subject->subjectid}}</h3>
    <br />
    <div class="table-responsive">
    <form method="post" id="dynamic_form">
        <span id="result"></span>
            <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="25%" rowspan="2"> หัวข้อ </th>
                        <th width="25%" rowspan="2"> จำนวนชั่วโมงตามแผนการสอน </th>
                        <th width="25%" rowspan="2"> จำนวนชั่วโมงที่สอนจริง </th>
                        <th width="25%" rowspan="2"> ระบุสาเหตุที่การสอนจริงต่างจากแผนการสอนหากมีความแตกต่าง </th>
                    </tr>
                </thead>
                    <tbody id="t1">
                        
                    </tbody>
                <tfoot>
                    <tr>
                        <td> <a href="{{ route('tqf5.create2',['tqf5' => $tqf5->id]) }}" class="btn btn-danger"> กลับไปหน้าก่อน </a></td>
                        <td colspan="3" align="right">&nbsp;</td>
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
            html += '<td><textarea name="tqf5211[]" rows="5" cols="4" class="form-control" ></textarea></td>';
            html += '<td><textarea name="tqf5212[]" rows="5" cols="4" class="form-control" ></textarea></td>';
            html += '<td><textarea name="tqf5213[]" rows="5" cols="4" class="form-control" ></textarea></td>';
            html += '<td><textarea name="tqf5214[]" rows="5" cols="4" class="form-control" ></textarea></td>';
            html += '<input type="hidden" name="tqf5_id[]" value="{{$tqf5->id}}"/>';
            // html += '<td><input type="text" name="tqf5_id[]" class="form-control" value="{{$tqf5->id}}"/></td>';
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">ลบตาราง</button></td></tr>';
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
            url:'{{ route("createtqf521.insert") }}',
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
//             html += '<td><input type="text" name="tqf5511[]" class="form-control" /></td>';
//             html += '<td><textarea name="tqf5512[]" rows="5" cols="4" class="form-control" /></td>';
//             html += '<td><input type="text" name="tqf5513[]" class="form-control" /></td>';
//             html += '<td><input type="text" name="tqf5514[]" class="form-control" /></td>';
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
//             html += '<td><input type="text" name="tqf5511[]" class="form-control" /></td>';
//             html += '<td colspan="6"><input type name="tqf5512[]" rows="5" cols="7" class="form-control" /></td>';
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