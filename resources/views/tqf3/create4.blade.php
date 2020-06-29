@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')
   
<br><a href="{{ route('tqf3.create3',['tqf3' => $tqf3->id])}}" class="btn btn-danger"> ย้อนกลับไปก่อนหน้า </a><br>
<br><form method="POST" class="fm-inline" action="{{ route('tqf3.destroy',['tqf3' => $tqf3->id])}}">
    @csrf
    @method('DELETE')
    <input type="submit" value="ยกเลิกสร้างเอกสาร" class="btn btn-danger"/>
</form>
<br><br>

<h1>เพิ่มเอกสารมคอ3.</h1><br>

    <form method="POST" action="{{ route('tqf3.update4',['tqf3' => $tqf3->id])}}" enctype="multipart/form-data">
    {{-- <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data"> --}}
        @csrf
        @method('PUT')
 
        <input type="hidden" name="name" value="{{$tqf3->name}}"/>
        <input type="hidden" name="year" value="{{$tqf3->year}}"/>
        <input type="hidden" name="term" value="{{$tqf3->term}}"/>
        <input type="hidden" name="subject_id" value="{{$tqf3->subject_id}}"/>

        <h1>หมวดที่ 4 การพัฒนาการเรียนรู้ของนิสิต</h1>
        <p>
            <label>1.คุณธรรม จริยธรรม</label><br>
            <label>1.1 คุณธรรม จริยธรรมที่ต้องพัฒนา</label><br>

            <label> 
                @foreach ($tqf3->subject->sics as $sic)
                    @if ($sic->resp11 == 1)
                    1.1) คระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสละ และซื่อสัตย์สุจริต <br>  
                    {{-- @elseif ($sic->resp11 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp12 == 1)
                    1.2) มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม <br>
                    {{-- @elseif ($sic->resp12 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp13 == 1)
                    1.3) มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ<br>
                    {{-- @elseif ($sic->resp13 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp14 == 1)
                    1.4) เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์<br>
                    {{-- @elseif ($sic->resp14 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp15 == 1)
                    1.5) เคารพกฎระเบียบและข้อบังคับต่าง ๆ ขององค์กรและสังคม<br>
                    {{-- @elseif ($sic->resp15 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp16 == 1)
                    1.6) สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคลองค์กรและสังคม<br>
                    {{-- @elseif ($sic->resp16 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp17 == 1)
                    1.7) มีจรรยาบรรณทางวิชาการและวิชาชีพ<br>
                    {{-- @elseif ($sic->resp17 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                @endforeach
                {{-- {{ $tqf3->subject->sics as sic}} --}}
            </label><br>


            <label>1.2 วิธีการสอน</label><br>
            <textarea name='tqf3412' rows="5" cols="4" class="form-control" required></textarea><br>

            <label>1.3 วิธีการประเมินผล</label><br>
            <textarea name='tqf3413' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>2.ความรู้</label><br>
            <label>2.1 ความรู้ต้องพัฒนา </label><br>
            <label> 
                @foreach ($tqf3->subject->sics as $sic)
                    @if ($sic->resp21 == 1)
                    2.1) มีความรู้และความเช้าใจเกี่ยวกับหลักการและทฤษฏีที่สำคัญในเนื้อหาที่สาขาวิชาเทคโนโลยีสารสนเทศ<br>
                    {{-- @elseif ($sic->resp21 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp22 == 1)
                    2.2) สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทางคอมพิวเตอร์ รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกับการแก้ไขปัญหา<br>
                    {{-- @elseif ($sic->resp22 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp23 == 1)
                    2.3) สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุงและ/หรือประเมินระบบองค์ประกอบต่างๆของระบบเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด<br>
                    {{-- @elseif ($sic->resp23 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp24 == 1)
                    2.4) สามารถติดตามความก้าวหน้าทางวิชาการและวิวัฒนาการคอมพิวเตอร์<br>
                    {{-- @elseif ($sic->resp24 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp25 == 1)
                    2.5) รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเคอร์อย่างต่อเนื่อง<br>
                    {{-- @elseif ($sic->resp25 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp26 == 1)
                    2.6) มีความรู้ในแนวกว้างของสาขาวิชาที่ศึกษาเพื่อให้เล็งเห็นการเปลี่ยนแปลง และเข้าใจผลกระทบของเทคโนโลยีใหม่ๆ<br>
                    {{-- @elseif ($sic->resp26 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp27 == 1)
                    2.7) มีประสบการณ์ในการพัฒนาและ/หรือประยุกต์ซอฟด์แวร์ที่ใช้งานได้จริง<br>
                    {{-- @elseif ($sic->resp27 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp28 == 1)
                    2.8) สามารภบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง<br>
                    {{-- @elseif ($sic->resp28 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif
                    
                @endforeach
            </label><br>

            <label>2.2 วิธีการสอน</label><br>
            {{-- <input name='tqf3422' type="text" /><br> --}}
            <textarea name='tqf3422' rows="5" cols="4" class="form-control" required></textarea><br>

            <label>2.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3423' type="text" /> --}}
            <textarea name='tqf3423' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>3.ทักษะทางปัญญา</label><br>
            <label>3.1 ทักษะทางปัญญาที่ต้องพัฒนา</label><br>

            <label> 
                @foreach ($tqf3->subject->sics as $sic)
                    @if ($sic->resp31 == 1)
                    3.1) คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ<br>
                    {{-- @elseif ($sic->resp31 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp32 == 1)
                    3.2) สามารถสือค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์<br>
                    {{-- @elseif ($sic->resp32 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp33 == 1)
                    3.3) สามารถรวบรวม ศึกษา วิเตาระห์ และสรุปประเด็นปัญหาและความต้องการ<br>
                    {{-- @elseif ($sic->resp33 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp34 == 1)
                    3.4) สามารถประยุกต์ความรู้และทักษาะกับการแก้ไขทางคอมพิวเตอร์ได้อย่างเหมาะสม<br>
                    {{-- @elseif ($sic->resp34 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif
                    
                @endforeach
            </label><br>


            <label>3.2 วิธีการสอน</label><br>
            {{-- <input name='tqf3432' type="text" /><br> --}}
            <textarea name='tqf3432' rows="5" cols="4" class="form-control" required></textarea><br>

            <label>3.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3433' type="text" /> --}}
            <textarea name='tqf3433' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>4.ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</label><br>
            <label>4.1 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา</label><br>
            <label> 
                @foreach ($tqf3->subject->sics as $sic)
                    @if ($sic->resp41 == 1)
                    4.1) สามาถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ<br>
                    {{-- @elseif ($sic->resp41 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp42 == 1)
                    4.2) สามารถให้ความช่วยเหลือและอำนวยความสะดวกในการแก้ปัญหาสภานการณ์ต่าง ๆ ทั้งในบทบาทผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน<br>
                    {{-- @elseif ($sic->resp42 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp43 == 1)
                    4.3) สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม<br>
                    {{-- @elseif ($sic->resp43 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp44 == 1)
                    4.4) มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม<br>
                    {{-- @elseif ($sic->resp44 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp45 == 1)
                    4.5) สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและของกลุ่ม<br>
                    {{-- @elseif ($sic->resp45 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp46 == 1)
                    4.6) มีความรับผิดชอบการพัฒนาการเรียนรู้ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง<br>
                    {{-- @elseif ($sic->resp46 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif
                    
                @endforeach
            </label><br>
            


            <label>4.2 วิธีการสอน</label><br>
            {{-- <input name='tqf3442' type="text" /><br> --}}
            <textarea name='tqf3442' rows="5" cols="4" class="form-control" required></textarea><br>

            <label>4.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3443' type="text" /> --}}
            <textarea name='tqf3443' rows="5" cols="4" class="form-control" required></textarea><br>
        </p>

        <p>
            <label>5.ทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา</label><br>
            <label>5.1 ทักษะการสื่อสารและการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา</label><br>

            <label> 
                @foreach ($tqf3->subject->sics as $sic)
                    @if ($sic->resp51 == 1)
                    5.1) มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์<br>
                    {{-- @elseif ($sic->resp51 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp52 == 1)
                    5.2) สามารถแนะนำประเด็นการแก้ไขโดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์<br>
                    {{-- @elseif ($sic->resp52 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp53 == 1)
                    5.3) สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียน พร้อมทั้งลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม<br>
                    {{-- @elseif ($sic->resp53 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif

                    @if ($sic->resp54 == 1)
                    5.4) สามารภใช้เทคโนโลยีสารสนเทศได้อย่างเหมาะสม<br>
                    {{-- @elseif ($sic->resp54 == 2)
                        ความรับผิดชอบรอง
                    @else
                        ไม่มี --}}
                    @endif
                    
                @endforeach
            </label><br>

            <label>5.2 วิธีการสอน</label><br>
            {{-- <input name='tqf3452' type="text" /><br> --}}
            <textarea name='tqf3452' rows="5" cols="4" class="form-control" required></textarea><br>

            <label>5.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3453' type="text" /> --}}
            <textarea name='tqf3453' rows="5" cols="4" class="form-control" required></textarea><br>
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
        

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}

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