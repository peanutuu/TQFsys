@extends('layout')
@section('title','พิมพ์มคอ.5')
@section('content')

    {{-- <h1>ชื่อเอกสาร {{ $tqf3->name }} </h1>
    <h1>เอกสารเป็นของรายวิชา {{ $tqf3->subject->subjectid }}</h1>
    <h1>ปีการศึกษา {{ $tqf3->year }} / {{ $tqf3->term }}</h1> --}}

    <h1 align="center">รายละเอียดของรายวิชา</h1>
    <table style="width:100%" class="table table-striped">
        <tr>
            <th colspan="1"> ชื่อสถาบันอุดมศึกษา</th>
            <td> มหาวิทยาลัยมหาสารคาม </td>
        </tr>
        <tr>
            <th colspan="1"> คณะ / สาขาวิชา </th>
            <td> วิทยาการสารสนเทศ คณะวิทยาการสารสนเทศ </td>
        </tr>
        <tr>
            <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 1 ข้อมูลโดยทั่วไป </td>
        </tr>
        <tr>
            <th colspan="4"> 1. รหัสวิชาและชื่อรายวิชา </th>
        </tr>
        <tr>
            <td> {{$tqf3->subject->subjectid}} </td>
            <td> {{$tqf3->subject->subjectnameth}} <br> {{$tqf3->subject->subjectnameen}} </td>
        </tr>
        <tr>
            <th colspan="1"> 2. จำนวนหน่วยกิต </th>
            <td colspan="2"> {{$tqf3->subject->credit}} หน่วย </td>
        </tr>
        <tr>
            <th colspan="4"> 3. หลักสูตรและประเภทรายวิชา </th>
        </tr>
        <tr>
            <th colspan="4"> หลักสูตร {{$tqf3->tqf3131}} </th>
        </tr>
        <tr>
            <th colspan="4"> สาขาวิชา {{$tqf3->tqf3132}}</th>
        </tr>
        <tr>
            <th colspan="4"> ประเภทกลุ่มรายวิชา {{$tqf3->tqf3133}} </th>
        </tr>
        <tr>
            <th colspan="4"> 4. อาจารย์ผู้รับผิดชอบรายวิชา <br> {{$tqf3->tqf3141}} </th>
        </tr>
        <tr>
            <th colspan="1"> 5. ภาคการศึกษาที่ {{$tqf3->tqf3151}} </th>
            <th> ชั้นปีที่ {{$tqf3->tqf3152}} </th>
        </tr>
        <tr>
            <th colspan="4"> 6. รายวิชาที่ต้องเรียนมาก่อน (Pre-requisite) {{$tqf3->tqf3161}} </th>
        </tr>
        <tr>
            <th colspan="4"> 7. รายวิชาที่ต้องเรียนพร้อมกัน (Co-requisite) {{$tqf3->tqf3171}} </th>
        </tr>
        <tr>
            <th colspan="4"> 8. สถาที่เรียน คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม <br> ห้อง {{$tqf3->tqf3171}} วัน {{$tqf3->tqf3182}} เวลา {{$tqf3->tqf3183}}  </th>
        </tr>
        <tr>
            <th colspan="4"> 9. วันที่จัดทำหรือปรับปรุงรายละเอียดของวิชาครั้งล่าสุด <br> {{$tqf3->tqf3191}} </th>
        </tr>
        <tr>
          <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์ </td>
        </tr>
        <tr>
          <th colspan="4"> 1.จุดมุ่งหมายของรายวิชา <br> {{$tqf3->tqf3211}}

          </th>
        </tr>
        <tr>
            <th colspan="4"> 2.วัตถุประสงค์ในการพัฒนาปรับปรุงรายวิชา <br> {{$tqf3->tqf3221}}

            </th>
        </tr>
        <tr>
          <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 3 ลักษณะและการดำเนินการ </td>
      </tr>
      <tr>
        <th colspan="4"> 1.คำอธิบายรายวิชา <br> {{$tqf3->tqf3311}}

        </th>
      </tr>
      
      {{-- <tr>
        <th colspan="4"> 2.จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา <br>
            <table>
                <tr>
                    <th scope="col">บรรยาย</th>
                    <th scope="col">สอนเสริม</th>
                    <th scope="col">การฝึกปฏิบัติ</th>
                    <th scope="col">การศึกษาด้วยตนเอง</th>
                </tr>
            <tbody>
                <tr>
                    <td> 1</td>
                    <td> 1</td>
                    <td> 1</td>
                    <td> 1</td>
                </tr>
            </tbody>
        </th>
    </tr> --}}
      
      <tr>
          <th colspan="4"> 3.จำนวนชั่วโมงต่อสัปดาร์ที่อาจารย์ให้คำปรึกษาแนะนำทางวิชาการแก่นิสิตเป็นรายงานบุคคล <br> {{$tqf3->tqf3331}}

          </th>
      </tr>
      <tr>
          <th colspan="4"> 4.การบูรณาการเรียนการสอนกับงานวิจัย / งานบริการวิชาการ / ทำนุบำรุงศิลปะ (ถ้ามี) <br> {{$tqf3->tqf3341}}

          </th>
      </tr>
      <tr>
        <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 4 การพัฒนาการเรียนรู้ของนิสิต </td>
      </tr>
      <tr>
        <td colspan="4"> 1.คุณธรรม จริยธรรม </td>
    </tr>
    <tr>
        <th colspan="4"> 1.1 คุณธรรม จริยธรรมที่ต้องพัฒนา <br>
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
            </label><br>
        </th>
    </tr><br><br>
    <tr>
        <th colspan="4"> 1.2 วิธีการสอน <br> {{$tqf3->tqf3412}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 1.3 วิธีการประเมินผล <br> {{$tqf3->tqf3413}}

        </th>
    </tr>
    <tr>
        <td colspan="4"> 2.ความรู้ </td>
    </tr>
    <tr>
        <th colspan="4"> 2.1 ความรู้ต้องพัฒนา <br>
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
        </th>
    </tr>
    <tr>
        <th colspan="4"> 2.2 วิธีการสอน <br> {{$tqf3->tqf3422}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 2.3 วิธีการประเมินผล <br> {{$tqf3->tqf3423}}

        </th>
    </tr>
    <tr>
        <td colspan="4"> 3.ทักษะทางปัญญา </td>
    </tr>
    <tr>
        <th colspan="4"> 3.1 ทักษะทางปัญญาที่ต้องพัฒนา <br>
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
        </th>
    </tr>
    <tr>
        <th colspan="4"> 3.2 วิธีการสอน <br> {{$tqf3->tqf3432}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 3.3 วิธีการประเมินผล <br> {{$tqf3->tqf3433}}

        </th>
    </tr>
    <tr>
        <td colspan="4"> 4.ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ </td>
    </tr>
    <tr>
        <th colspan="4"> 4.1 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา <br>
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
        </th>
    </tr>
    <tr>
        <th colspan="4"> 4.2 วิธีการสอน <br> {{$tqf3->tqf3442}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 4.3 วิธีการประเมินผล <br> {{$tqf3->tqf3443}}

        </th>
    </tr>
    <tr>
        <td colspan="4"> 5.ทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา </td>
    </tr>
    <tr>
        <th colspan="4"> 5.1 ทักษะการสื่อสารและการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา <br>
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
        </th>
    </tr>
    <tr>
        <th colspan="4"> 5.2 วิธีการสอน <br> {{$tqf3->tqf3452}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 5.3 วิธีการประเมินผล <br> {{$tqf3->tqf3453}}

        </th>
    </tr>
    <tr>
      <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 5 แผนการสอนและการประเมินผล </td>
    </tr>
    <tr>
      <th colspan="4"> 1.แผนการสอน <br>
        <table class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th width="10%"  rowspan="2"> สัปดาห์ที่ </th>
                    <th width="20%" rowspan="2"> หัวข้อ/รายละเอียด </th>
                    <th width="10%" colspan="2"> จำนวนชั่วโมง </th>
                    <th width="20%" rowspan="2"> กิจกรรมการเรียนการสอน </th>
                    <th width="20%" rowspan="2"> สื่อการสอน </th>
                    <th width="20%" rowspan="2"> อาจารย์ผู้สอน </th>
                  
                </tr>
                <tr>
                    <td >ทฤษฎี</td>
                    <td >ปฏิบัติ</td>
                </tr>
            </thead>
                <tbody>
                        @foreach ($tqf3->dynamicfields as $dynamicfield)
                        <tr>
                        <td>{{ $dynamicfield->tqf3511 }} </td>
                        <td>{{ $dynamicfield->tqf3512 }}</td>
                        <td>{{ $dynamicfield->tqf3513 }}</td>
                        <td>{{ $dynamicfield->tqf3514 }}</td>
                        <td>{{ $dynamicfield->tqf3515 }}</td>
                        <td>{{ $dynamicfield->tqf3516 }}</td>
                        <td>{{ $dynamicfield->tqf3517 }}</td>
                        </tr>
                        @endforeach
                </tbody>
        </table> 
      </th>
    </tr>
    <tr>
        <th colspan="4"> 2.แผนการประเมินผลการเรียนรู้ <br>

        </th>
    </tr>
    <tr>
        <th colspan="4"> 2.1 วิธีการ <br>
            <table class="table table-bordered table-striped" >
                <thead>
                    <tr>
                        <th width="25%" rowspan="2"> ผมการเรียนรู้ </th>
                        <th width="25%" rowspan="2"> วิธีการประเมิน </th>
                        <th width="25%" rowspan="2"> สัปดาร์ที่ประเมิน </th>
                        <th width="25%" rowspan="2"> สัดส่วนของการประเมิน </th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($tqf3->dynamic2fields as $dynamic2field)
                        <tr>
                        <td>{{ $dynamic2field->tqf3521 }} </td>
                        <td>{{ $dynamic2field->tqf3522 }}</td>
                        <td>{{ $dynamic2field->tqf3523 }}</td>
                        <td>{{ $dynamic2field->tqf3524 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </th>
    </tr>
    <tr>
        <th colspan="4"> 2.2 เกณฑ์ผ่านรายวิชา ผู้ที่จะผ่านรายวิชานี้จะต้อง <br> {{$tqf3->tqf3521}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 2.3 เกณฑ์ค่าระดับคะแนน <br> {{$tqf3->tqf3522}}

        </th>
    </tr>
    <tr>
      <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 6 ทรัพยากรประกอบการเรียนการสอน </td>
    </tr>
    <tr>
      <th colspan="4"> 1.เอกสารและตำราหลัก <br> {{$tqf3->tqf3610}}

      </th>
    </tr>
    <tr>
        <th colspan="4"> 2.เอกสารและข้อมูลสำคัญ <br> {{$tqf3->tqf3620}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 3.เอกสารและข้อมูลแนะนำ <br> {{$tqf3->tqf3630}}

        </th>
    </tr>
    <tr>
      <td colspan="4" align="center" bgcolor="grey"> หมวดที่ 7 การประเมินและปรับปรุงการดำเนินการของรายวิชา </td>
    </tr>
    <tr>
      <th colspan="4"> 1.กลยุทธ์การประเมินประสิทธิผลของรายวิชาโดยนิสิต <br> {{$tqf3->tqf3710}}

      </th>
    </tr>
    <tr>
        <th colspan="4"> 2.กลยุทธ์การประเมินการสอน <br> {{$tqf3->tqf3720}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 3.การปรับปรุงการสอน <br> {{$tqf3->tqf3730}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 4.การทวนสอบมาตรฐานผลสัมฤทธิ์ของนิสิตในรายวิชา <br> {{$tqf3->tqf3740}}

        </th>
    </tr>
    <tr>
        <th colspan="4"> 5.การดำเนินการทบทวนและการวางแผนปรับปรุงประสิทธิผลของรายวิชา <br> {{$tqf3->tqf3750}}

        </th>
    </tr>
























    </table>
      




    
@endsection