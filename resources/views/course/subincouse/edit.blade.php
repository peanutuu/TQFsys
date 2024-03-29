@extends('layout')

@section('content')
    <form method="POST" action="{{ route('subincourse.update',['subincourse' => $sic->id])}}">
        @csrf
        @method('PUT')
        
        <br> <br>
        <h1>แก้ไขการเพิ่มรายวิชาในหลักสูตร</h1> <hr> <br>

        <div class="form-group">
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
        </div>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id" disabled="">
                    @foreach($subjects as $subject)
                        <option value="{{ old('subject_id', $subject->id) }}"
                            @if($subject->id == $sic->subject_id)
                            selected
                            @endif          
                        >{{ old('subject_id', $subject->subjectnameth) }}</option>
                    @endforeach
            </select>
            <input type="hidden" name="subject_id" value="{{ old('subject_id', $sic->subject_id) }}"/>
        </div>

        <div class="form-group">
            <label>หมวดหมู่</label>
            <select class="form-control" name="tag">
                {{-- <option value="{{ old('tag', $sic->tag) }}">{{ old('tag', $sic->tag) }}</option>
                <option>---------</option> --}}
                <option value="วิชาแกน" 
                    @if ($sic->tag == "วิชาแกน")
                        selected
                    @endif
                >วิชาแกน</option>
                <option value="วิชาเฉพาะด้าน" 
                    @if ($sic->tag == "วิชาเฉพาะด้าน")
                        selected
                    @endif
                >วิชาเฉพาะด้าน</option>
                <option value="วิชาเอกเลือก" 
                    @if ($sic->tag == "วิชาเอกเลือก")
                        selected
                    @endif
                >วิชาเอกเลือก</option>
                <option value="วิชาประสบการณ์วิชาชีพ" 
                    @if ($sic->tag == "วิชาประสบการณ์วิชาชีพ")
                        selected
                    @endif
                >วิชาประสบการณ์วิชาชีพ</option>
            </select>
        </div>

        <div>
            <br> <h5> 1. คุณธรรม จริยธรรม </h5>
            <div id="resp11" class="form-group"> 
                1.1 ตระหนักในคุณค่าและคุณธรรม จริยธรรม เสียสระ และซื่อสัตว์สุจริต<br>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="1"
                    @if ($sic->resp11 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="2"
                    @if ($sic->resp11 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp11" value="3"
                    @if ($sic->resp11 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp12" class="form-group"> 
                1.2 มีวินัย ตรงต่อเวลา และความรับผิดชอบต่อตนเองและสังคม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="1"
                    @if ($sic->resp12 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="2"
                    @if ($sic->resp12 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp12" value="3"
                    @if ($sic->resp12 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp13" class="form-group"> 
                1.3 มีภาวะความเป็นผู้นำและผู้ตาม สามารถทำงานเป็นทีมและสามารถแก้ไขข้อขัดแย้งและลำดับความสำคัญ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="1"
                    @if ($sic->resp13 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="2"
                    @if ($sic->resp13 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp13" value="3"
                    @if ($sic->resp13 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp14" class="form-group"> 
                1.4 เคารพสิทธิและรับฟังความคิดเห็นของผู้อื่น รวมทั้งเคารพในคุณค่าและศักดิ์ศรีของความเป็นมนุษย์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="1"
                    @if ($sic->resp14 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="2"
                    @if ($sic->resp14 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp14" value="3"
                    @if ($sic->resp14 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp15" class="form-group"> 
                1.5 เคารพกฎระเบียบและข้อบังคับต่าง ๆ ขององค์กรและสังคม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="1"
                    @if ($sic->resp15 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="2"
                    @if ($sic->resp15 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp15" value="3"
                    @if ($sic->resp15 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp16" class="form-group"> 
                1.6 สามารถวิเคราะห์ผลกระทบจากการใช้คอมพิวเตอร์ต่อบุคคลองค์กรและสังคม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="1"
                    @if ($sic->resp16 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="2"
                    @if ($sic->resp16 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp16" value="3"
                    @if ($sic->resp16 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp17" class="form-group"> 
                1.7 มีจรรยาบรรณทางวิชาการและวิชาชีพ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="1"
                    @if ($sic->resp17 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="2"
                    @if ($sic->resp17 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp17" value="3"
                    @if ($sic->resp17 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <br> <h5> 2. ความรู้ </h5>

            <div id="resp21" class="form-group"> 
                2.1 มีความรู้และความเช้าใจเกี่ยวกับหลักการและทฤษฏีที่สำคัญในเนื้อหาที่สาขาวิชาเทคโนโลยีสารสนเทศ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="1"
                    @if ($sic->resp21 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="2"
                    @if ($sic->resp21 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp21" value="3"
                    @if ($sic->resp21 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp22" class="form-group"> 
                2.2 สามารถวิเคราะห์ปัญหา เข้าใจและอธิบายความต้องการทางคอมพิวเตอร์ รวมทั้งประยุกต์ความรู้ ทักษะ และการใช้เครื่องมือที่เหมาะสมกับการแก้ไขปัญหา<br>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="1"
                    @if ($sic->resp22 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="2"
                    @if ($sic->resp22 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp22" value="3"
                    @if ($sic->resp22 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp23" class="form-group"> 
                2.3 สามารถวิเคราะห์ ออกแบบ ติดตั้ง ปรับปรุงและ/หรือประเมินระบบองค์ประกอบต่างๆของระบบเทคโนโลยีสารสนเทศให้ตรงตามข้อกำหนด<br>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="1"
                    @if ($sic->resp23 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="2"
                    @if ($sic->resp23 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp23" value="3"
                    @if ($sic->resp23 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp24" class="form-group"> 
                2.4 สามารถติดตามความก้าวหน้าทางวิชาการและวิวัฒนาการคอมพิวเตอร์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="1"
                    @if ($sic->resp24 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="2"
                    @if ($sic->resp24 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp24" value="3"
                    @if ($sic->resp24 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div> 

            <div id="resp25" class="form-group"> 
                2.5 รู้ เข้าใจและสนใจพัฒนาความรู้ ความชำนาญทางคอมพิวเคอร์อย่างต่อเนื่อง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="1"
                    @if ($sic->resp25 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="2"
                    @if ($sic->resp25 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp25" value="3"
                    @if ($sic->resp25 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp26" class="form-group"> 
                2.6 มีความรู้ในแนวกว้างของสาขาวิชาที่ศึกษาเพื่อให้เล็งเห็นการเปลี่ยนแปลง และเข้าใจผลกระทบของเทคโนโลยีใหม่ๆ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="1"
                    @if ($sic->resp26 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="2"
                    @if ($sic->resp26 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp26" value="3"
                    @if ($sic->resp26 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp27" class="form-group"> 
                2.7 มีประสบการณ์ในการพัฒนาและ/หรือประยุกต์ซอฟด์แวร์ที่ใช้งานได้จริง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="1"
                    @if ($sic->resp27 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="2"
                    @if ($sic->resp27 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp27" value="3"
                    @if ($sic->resp27 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp28" class="form-group"> 
                2.8 สามารภบูรณาการความรู้ในสาขาวิชาเทคโนโลยีสารสนเทศกับความรู้ในศาสตร์อื่น ๆ ที่เกี่ยวข้อง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="1"
                    @if ($sic->resp28 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="2"
                    @if ($sic->resp28 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp28" value="3"
                    @if ($sic->resp28 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <br> <h3> 3. ทักษะทางปัญญา </h3>

            <div id="resp31" class="form-group"> 
                3.1 คิดอย่างมีวิจารณญาณและอย่างเป็นระบบ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="1"
                    @if ($sic->resp31 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="2"
                    @if ($sic->resp31 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="3"
                    @if ($sic->resp31 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp32" class="form-group"> 
                3.2 สามารถสือค้น ตีความ และประเมินสารสนเทศ เพื่อใช้ในการแก้ไขปัญหาอย่างสร้างสรรค์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="1"
                    @if ($sic->resp32 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="2"
                    @if ($sic->resp32 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp32" value="3"
                    @if ($sic->resp32 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp33" class="form-group"> 
                3.3 สามารถรวบรวม ศึกษา วิเตาระห์ และสรุปประเด็นปัญหาและความต้องการ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="1"
                    @if ($sic->resp33 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="2"
                    @if ($sic->resp33 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp33" value="3"
                    @if ($sic->resp33 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp34" class="form-group"> 
                3.4 สามารถประยุกต์ความรู้และทักษาะกับการแก้ไขทางคอมพิวเตอร์ได้อย่างเหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="1"
                    @if ($sic->resp34 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp31" value="2"
                    @if ($sic->resp34 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp34" value="3"
                    @if ($sic->resp34 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <br> <h3> 4. ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ </h3>

            <div id="resp41" class="form-group"> 
                4.1 สามาถสื่อสารทั้งภาษาไทยและภาษาต่างประเทศกับกลุ่มคนหลากหลายได้อย่างมีประสิทธิภาพ<br>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="1"
                    @if ($sic->resp41 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="2"
                    @if ($sic->resp41 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp41" value="3"
                    @if ($sic->resp41 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp42" class="form-group"> 
                4.2 สามารถให้ความช่วยเหลือและอำนวยความสะดวกในการแก้ปัญหาสภานการณ์ต่าง ๆ ทั้งในบทบาทผู้นำ หรือในบทบาทของผู้ร่วมทีมทำงาน<br>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="1"
                    @if ($sic->resp42 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="2"
                    @if ($sic->resp42 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp42" value="3"
                    @if ($sic->resp42 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp43" class="form-group"> 
                4.3 สามารถใช้ความรู้ในศาสตร์มาชี้นำสังคมในประเด็นที่เหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="1"
                    @if ($sic->resp43 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="2"
                    @if ($sic->resp43 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp43" value="3"
                    @if ($sic->resp43 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp44" class="form-group"> 
                4.4 มีความรับผิดชอบในการกระทำของตนเองและรับผิดชอบงานในกลุ่ม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="1"
                    @if ($sic->resp44 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="2"
                    @if ($sic->resp44 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp44" value="3"
                    @if ($sic->resp44 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp45" class="form-group"> 
                4.5 สามารถเป็นผู้ริเริ่มแสดงประเด็นในการแก้ไขสถานการณ์ทั้งส่วนตัวและส่วนรวม พร้อมทั้งแสดงจุดยืนอย่างพอเหมาะทั้งของตนเองและของกลุ่ม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="1"
                    @if ($sic->resp45 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="2"
                    @if ($sic->resp45 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp45" value="3"
                    @if ($sic->resp45 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp46" class="form-group"> 
                4.6 มีความรับผิดชอบการพัฒนาการเรียนรู้ทั้งของตนเองและทางวิชาชีพอย่างต่อเนื่อง<br>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="1"
                    @if ($sic->resp46 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="2"
                    @if ($sic->resp46 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp46" value="3"
                    @if ($sic->resp46 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <br> <h3> 5. ทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศ </h3>

            <div id="resp51" class="form-group"> 
                5.1 มีทักษะในการใช้เครื่องมือที่จำเป็นที่มีอยู่ในปัจจุบันต่อการทำงานที่เกี่ยวกับคอมพิวเตอร์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="1"
                    @if ($sic->resp51 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="2"
                    @if ($sic->resp51 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp51" value="3"
                    @if ($sic->resp51 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp52" class="form-group"> 
                5.2 สามารถแนะนำประเด็นการแก้ไขโดยใช้สารสนเทศทางคณิตศาสตร์หรือการแสดงสถิติประยุกต์ต่อปัญหาที่เกี่ยวข้องอย่างสร้างสรรค์<br>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="1"
                    @if ($sic->resp52 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="2"
                    @if ($sic->resp52 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp52" value="3"
                    @if ($sic->resp52 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp53" class="form-group"> 
                5.3 สามารถสื่อสารอย่างมีประสิทธิภาพทั้งปากเปล่าและการเขียน พร้อมทั้งลือกใช้รูปแบบของสื่อการนำเสนอได้อย่างเหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="1"
                    @if ($sic->resp53 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="2"
                    @if ($sic->resp53 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp53" value="3"
                    @if ($sic->resp53 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

            <div id="resp54" class="form-group"> 
                5.4 สามารภใช้เทคโนโลยีสารสนเทศได้อย่างเหมาะสม<br>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="1"
                    @if ($sic->resp54 == 1)
                        checked
                    @endif
                    > ความรับผิดชอบหลัก</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="2"
                    @if ($sic->resp54 == 2)
                        checked
                    @endif
                    > ความรับผิดชอบรอง</h5></label>
                <label class="radio-inline"><h5><input type="radio" name="resp54" value="3"
                    @if ($sic->resp54 == 3)
                        checked
                    @endif
                    > ไม่มี</h5></label>
            </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
@endsection