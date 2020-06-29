@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')

    <form method="POST" action="{{ route('subincourse.store')}}" enctype="multipart/form-data" >
        @csrf

        <br> <br>
        <h1>เพิ่มรายวิชาลงในหลักสูตร</h1> <hr> <br>

        {{-- <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id">
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->coursename}}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id" required>
                @foreach($courses as $course)
                    <option value="{{$course->id}}">{{$course->coursename}}</option>
                @endforeach
            </select>
        </div>

        {{-- <div class="form-group">
            <label>หลักสูตร</label>
            <select class="form-control" name="course_id" disabled="true">
                    @foreach($course as $course)
                        <option value="{{ old('course_id', $course->id) }}"
                            @if($course->id == $sic->course_id)
                            selected
                            @endif    
                        >{{ old('course_id', $course->coursename) }}</option>
                    @endforeach
            </select>
            <input type="hidden" name="course_id" value="{{ old('course_id', $sic->course_id) }}"/>
        </div> --}}

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id" required>
                @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->subjectnameth}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>หมวดหมู่</label>
            <select class="form-control" name="tag" required>
                <option value="">เลือกหมวดหมู่วิชา</option>
                <option value="วิชาแกน">วิชาแกน</option>
                <option value="กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ">กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ</option>
                <option value="กลุ่มเทคโนโลยีเพื่องานประยุกต์">กลุ่มเทคโนโลยีเพื่องานประยุกต์</option>
                <option value="กลุ่มเทคโนโลยีและวิธีการทางซอฟท์แวร์">กลุ่มเทคโนโลยีและวิธีการทางซอฟท์แวร์</option>
                <option value="กลุ่มภาษาสำหรับเทคโนโลยีสารสนเทศ">กลุ่มภาษาสำหรับเทคโนโลยีสารสนเทศ</option>
                <option value="วิชาเลือก">วิชาเลือก</option>
                <option value="ประสบการณ์วิชาชีพ">ประสบการณ์วิชาชีพ</option>
                <option value="วิชาเลือกเสรี">วิชาเลือกเสรี</option>
                <option value="วิชาประสบการณ์วิชาชีพ">วิชาประสบการณ์วิชาชีพ</option>
            </select>
        </div>

        <div>
            <br><hr>
            <br> <h5> 1. คุณธรรม จริยธรรม </h5><br>

            <div id="resp11" class="form-group"> 
                <h5>1.1 ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสระ และซื่อสัตว์สุจริต</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp12" class="form-group"> 
                <h5>1.2 มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp13" class="form-group"> 
                <h5>1.3 มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp14" class="form-group"> 
                <h5>1.4 เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp15" class="form-group"> 
                <h5>1.5 เคารพกฎระเบียบและข้อบังคับต่าง ๆ ขององค์กรและสังคม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp16" class="form-group"> 
                <h5>1.6 สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคลองค์กรและสังคม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp17" class="form-group"> 
                <h5>1.7 มีจรรยาบรรณทางวิชาการและวิชาชีพ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <hr>
            <br> <h4> 2. ความรู้ </h4><br>

            <div id="resp21" class="form-group"> 
                <h5>2.1 มีความรู้และความเช้าใจเกี่ยวกับหลักการและทฤษฏีที่สำคัญในเนื้อหาที่สาขาวิชาเทคโนโลยีสารสนเทศ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp22" class="form-group"> 
                <h5>2.2 สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทางคอมพิวเตอร์ รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกับการแก้ไขปัญหา</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp23" class="form-group"> 
                <h5>2.3 สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุงและ/หรือประเมินระบบองค์ประกอบต่างๆของระบบเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp24" class="form-group"> 
                <h5>2.4 สามารถติดตามความก้าวหน้าทางวิชาการและวิวัฒนาการคอมพิวเตอร์</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="3"  checked> ไม่มี</h5></label>
            </div> 

            <div id="resp25" class="form-group"> 
                <h5>2.5 รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเคอร์อย่างต่อเนื่อง</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp26" class="form-group"> 
                <h5>2.6 มีความรู้ในแนวกว้างของสาขาวิชาที่ศึกษาเพื่อให้เล็งเห็นการเปลี่ยนแปลง และเข้าใจผลกระทบของเทคโนโลยีใหม่ๆ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp27" class="form-group"> 
                <h5>2.7 มีประสบการณ์ในการพัฒนาและ/หรือประยุกต์ซอฟด์แวร์ที่ใช้งานได้จริง</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp28" class="form-group"> 
                <h5>2.8 สามารภบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="3"  checked> ไม่มี</h5></label>
            </div>

            <hr>
            <br> <h4> 3. ทักษะทางปัญญา </h4><br>

            <div id="resp31" class="form-group"> 
                <h5>3.1 คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp32" class="form-group"> 
                <h5>3.2 สามารถสือค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp33" class="form-group"> 
                <h5>3.3 สามารถรวบรวม ศึกษา วิเตาระห์ และสรุปประเด็นปัญหาและความต้องการ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp34" class="form-group"> 
                <h5>3.4 สามารถประยุกต์ความรู้และทักษาะกับการแก้ไขทางคอมพิวเตอร์ได้อย่างเหมาะสม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="3"  checked> ไม่มี</h5></label>
            </div>

            <hr>
            <br> <h4> 4. ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ </h4><br>

            <div id="resp41" class="form-group"> 
                <h5>4.1 สามาถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp42" class="form-group"> 
                <h5>4.2 สามารถให้ความช่วยเหลือและอำนวยความสะดวกในการแก้ปัญหาสภานการณ์ต่าง ๆ ทั้งในบทบาทผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp43" class="form-group"> 
                <h5>4.3 สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp44" class="form-group"> 
                <h5>4.4 มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp45" class="form-group"> 
                <h5>4.5 สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและของกลุ่ม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp46" class="form-group"> 
                <h5>4.6 มีความรับผิดชอบการพัฒนาการเรียนรู้ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="3"  checked> ไม่มี</h5></label>
            </div>
            
            <hr>
            <br> <h4> 5. ทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ </h4><br>
            <div id="resp51" class="form-group"> 
                <h5>5.1 มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp52" class="form-group"> 
                <h5>5.2 สามารถแนะนำประเด็นการแก้ไขโดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp53" class="form-group"> 
                <h5>5.3 สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียน พร้อมทั้งลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="3"  checked> ไม่มี</h5></label>
            </div>

            <div id="resp54" class="form-group"> 
                <h5>5.4 สามารภใช้เทคโนโลยีสารสนเทศได้อย่างเหมาะสม</h5>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="1"> ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="2"> ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="3"  checked> ไม่มี</h5></label>
            </div> <br> <hr>

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}

        <br><button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection