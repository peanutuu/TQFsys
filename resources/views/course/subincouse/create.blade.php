@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')

    <form method="POST" action="{{ route('subincourse.store')}}" enctype="multipart/form-data" >
        @csrf

        {{-- @include('posts._form') --}}

        {{-- <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="course_id" value=" " 
            readonly="readonly" />
        </p> --}}

        <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id">
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->coursename}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->subjectnameth}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>หมวดหมู่</label>
            <select class="form-control" name="tag">
                <option value="วิชาแกน">วิชาแกน</option>
                <option value="วิชาเฉพาะด้าน">วิชาเฉพาะด้าน</option>
                <option value="วิชาเอกเลือก">วิชาเอกเลือก</option>
                <option value="วิชาประสบการณ์วิชาชีพ">วิชาประสบการณ์วิชาชีพ</option>
            </select>
        </div>


        {{-- <div id="showshirtsizeman" class="form-group"> 
            <label class="radio-inline"><h5><input type="radio" name="11" id="11" value="1"> ไความรับผิดชอบหลัก</h5></label>
            <label class="radio-inline"><h5><input type="radio" name="11" id="11" value="2" > ความรับผิดชอบรอง</h5></label>
            <label class="radio-inline"><h5><input type="radio" name="11" id="11" value="0" > ไม่มี</h5></label>
        </div> --}}


        <div>

            <br> <h5> 1. คุณธรรม จริยธรรม </h5>

            <div id="resp11" class="form-group"> 
                1.1 ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสระ และซื่อสัตว์สุจริต<br>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp12" class="form-group"> 
                1.2 มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp13" class="form-group"> 
                1.3 มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp14" class="form-group"> 
                1.4 เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp15" class="form-group"> 
                1.5 เคารพกฎระเบียบและข้อบังคับต่าง ๆ ขององค์กรและสังคม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp16" class="form-group"> 
                1.6 สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคลองค์กรและสังคม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp17" class="form-group"> 
                1.7 มีจรรยาบรรณทางวิชาการและวิชาชีพ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="3"> ไม่มี</h5></label>
            </div> 

            <br> <h5> 2. ความรู้ </h5>

            <div id="resp21" class="form-group"> 
                2.1 มีความรู้และความเช้าใจเกี่ยวกับหลักการและทฤษฏีที่สำคัญในเนื้อหาที่สาขาวิชาเทคโนโลยีสารสนเทศ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp22" class="form-group"> 
                2.2 สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทางคอมพิวเตอร์ รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกับการแก้ไขปัญหา<br>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp23" class="form-group"> 
                2.3 สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุงและ/หรือประเมินระบบองค์ประกอบต่างๆของระบบเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด<br>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp24" class="form-group"> 
                2.4 สามารถติดตามความก้าวหน้าทางวิชาการและวิวัฒนาการคอมพิวเตอร์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="3"> ไม่มี</h5></label>
            </div> 

            <div id="resp25" class="form-group"> 
                2.5 รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเคอร์อย่างต่อเนื่อง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp26" class="form-group"> 
                2.6 มีความรู้ในแนวกว้างของสาขาวิชาที่ศึกษาเพื่อให้เล็งเห็นการเปลี่ยนแปลง และเข้าใจผลกระทบของเทคโนโลยีใหม่ๆ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp27" class="form-group"> 
                2.7 มีประสบการณ์ในการพัฒนาและ/หรือประยุกต์ซอฟด์แวร์ที่ใช้งานได้จริง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp28" class="form-group"> 
                2.8 สามารภบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="3"> ไม่มี</h5></label>
            </div>

            <br> <h3> 3. ทักษะทางปัญญา </h3>

            <div id="resp31" class="form-group"> 
                3.1 คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp32" class="form-group"> 
                3.2 สามารถสือค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp33" class="form-group"> 
                3.3 สามารถรวบรวม ศึกษา วิเตาระห์ และสรุปประเด็นปัญหาและความต้องการ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp34" class="form-group"> 
                3.4 สามารถประยุกต์ความรู้และทักษาะกับการแก้ไขทางคอมพิวเตอร์ได้อย่างเหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="3"> ไม่มี</h5></label>
            </div>

            <br> <h3> 4. ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ </h3>

            <div id="resp41" class="form-group"> 
                4.1 สามาถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp42" class="form-group"> 
                4.2 สามารถให้ความช่วยเหลือและอำนวยความสะดวกในการแก้ปัญหาสภานการณ์ต่าง ๆ ทั้งในบทบาทผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน<br>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp43" class="form-group"> 
                4.3 สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp44" class="form-group"> 
                4.4 มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp45" class="form-group"> 
                4.5 สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและของกลุ่ม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp46" class="form-group"> 
                4.6 มีความรับผิดชอบการพัฒนาการเรียนรู้ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="3"> ไม่มี</h5></label>
            </div>

            <br> <h3> 5. ทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ </h3>

            <div id="resp51" class="form-group"> 
                5.1 มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp52" class="form-group"> 
                5.2 สามารถแนะนำประเด็นการแก้ไขโดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp53" class="form-group"> 
                5.3 สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียน พร้อมทั้งลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="3"> ไม่มี</h5></label>
            </div>

            <div id="resp54" class="form-group"> 
                5.4 สามารภใช้เทคโนโลยีสารสนเทศได้อย่างเหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="3"> ไม่มี</h5></label>
            </div>

            {{-- <div>
                2
                <input type="radio" name="12" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="12" value="2">ความรับผิดชอบรอง
                <input type="radio" name="12" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="13" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="13" value="2">ความรับผิดชอบรอง
                <input type="radio" name="13" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="14" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="14" value="2">ความรับผิดชอบรอง
                <input type="radio" name="14" value="0">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="15" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="15" value="2">ความรับผิดชอบรอง
                <input type="radio" name="15" value="0">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="16" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="16" value="2">ความรับผิดชอบรอง
                <input type="radio" name="16" value="0">ไม่มี
            </div>
            <div>
                7
                <input type="radio" name="17" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="17" value="2">ความรับผิดชอบรอง
                <input type="radio" name="17" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        2. ความรู้
            <div>
                1
                <input type="radio" name="21" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="21" value="2">ความรับผิดชอบรอง
                <input type="radio" name="21" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="22" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="22" value="2">ความรับผิดชอบรอง
                <input type="radio" name="22" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="23" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="23" value="2">ความรับผิดชอบรอง
                <input type="radio" name="23" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="24" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="24" value="2">ความรับผิดชอบรอง
                <input type="radio" name="24" value="0">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="25" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="25" value="2">ความรับผิดชอบรอง
                <input type="radio" name="25" value="0">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="26" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="26" value="2">ความรับผิดชอบรอง
                <input type="radio" name="26" value="0">ไม่มี
            </div>
            <div>
                7
                <input type="radio" name="27" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="27" value="2">ความรับผิดชอบรอง
                <input type="radio" name="27" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        3. ทักษะทางปัญญา
            <div>
                1
                <input type="radio" name="31" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="31" value="2">ความรับผิดชอบรอง
                <input type="radio" name="31" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="32" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="32" value="2">ความรับผิดชอบรอง
                <input type="radio" name="32" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="33" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="33" value="2">ความรับผิดชอบรอง
                <input type="radio" name="33" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="34" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="34" value="2">ความรับผิดชอบรอง
                <input type="radio" name="34" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        4. ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ
            <div>
                1
                <input type="radio" name="41" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="41" value="2">ความรับผิดชอบรอง
                <input type="radio" name="41" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="42" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="42" value="2">ความรับผิดชอบรอง
                <input type="radio" name="42" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="43" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="43" value="2">ความรับผิดชอบรอง
                <input type="radio" name="43" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="44" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="44" value="2">ความรับผิดชอบรอง
                <input type="radio" name="44" value="0">ไม่มี
            </div>
            <div>
                5
                <input type="radio" name="45" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="45" value="2">ความรับผิดชอบรอง
                <input type="radio" name="45" value="0">ไม่มี
            </div>
            <div>
                6
                <input type="radio" name="46" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="46" value="2">ความรับผิดชอบรอง
                <input type="radio" name="46" value="0">ไม่มี
            </div>
        </div>
        <br><div>
        5. ทักษะการวิเคราะห์เชิงตัวเลขการสื่อสารและการใช้เทคโนโลยีสารสนเทศ 
            <div>
                1
                <input type="radio" name="51" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="51" value="2">ความรับผิดชอบรอง
                <input type="radio" name="51" value="0">ไม่มี
            </div>
            <div>
                2
                <input type="radio" name="52" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="52" value="2">ความรับผิดชอบรอง
                <input type="radio" name="52" value="0">ไม่มี
            </div>
            <div>
                3
                <input type="radio" name="52" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="52" value="2">ความรับผิดชอบรอง
                <input type="radio" name="52" value="0">ไม่มี
            </div>
            <div>
                4
                <input type="radio" name="52" value="1">ความรับผิดชอบหลัก
                <input type="radio" name="52" value="2">ความรับผิดชอบรอง
                <input type="radio" name="52" value="0">ไม่มี
            </div>
        </div> --}}

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <br><button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection