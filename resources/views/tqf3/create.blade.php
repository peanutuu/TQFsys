@extends('layout')
@section('title','เพิ่มเอกสารมคอ3')
@section('content')

<h1>เพิ่มเอกสารมคอ3.</h1><br>
     <form method="POST" action="{{ route('tqf3.store')}}" enctype="multipart/form-data">
        @csrf
        

        {{-- @include('posts._form') --}}
        
        {{-- <h1><label>หมวดที่ 1 ข้อมูลโดยทั่วไป</label></h1>
        <div class="form-group">
            <label>รายวิชา</label>
            {{ $subject }}
        </div> --}}

        {{-- <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="id">
                <option value="" disabled selected>เลือกรายวิชา</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subjectid}}</option>
                    @endforeach
            </select>
        </div> --}}

        {{-- <p>
            <label>1. รหัสวิชาและชื่อรายวิชา</label>
            <input type="text" value="{{ $subject }}" />
            <input type="text" value="{{ $subject }}" />
            <input type="text" value="{{ $subject }}" />
        </p> --}}

        {{-- <p>
            <label>2. จำนวนหน่วยกิต</label>
            <input type="text" />
        </p>

        <p>
            <label>3. หลักสูตรและประเภทวิชา</label>
            <input type="text" />
            <label>หลักสูตร</label>
            <input type="text" />
            <label>สาขาวิชา</label>
            <input type="text" />
            <label>ประเภทกลุ่มรายวิชา</label>
            <input type="text" />
        </p>

        <p>
            <label>4. อาจารย์ผู้ประสานรายวิชา</label>
            <input type="text" />
            <label>สถานที่ติดต่ออาจารย์ ห้อง IT-302 โทร</label>
            <input type="text" />
            <label>E-mail</label>
            <input type="text" />
        </p>

        <p>
            <label>5. ภาคการศึกษาที่</label>
            <input type="text" />
            <label>ชั้นปีที่</label>
            <input type="text" />
        </p>

        <p>
            <label>6. รายวิชาที่ต้องเรียนมาก่อน (Pre-requisite) (ถ้ามี) ไม่มี</label>
            <input type="text" />
        </p>

        <p>
            <label>7. รายวิชาที่ต้องเรียนพร้อมกัน (Co-requisite) (ถ้ามี) ไม่มี</label>
            <input type="text" />
        </p>

        <p>
            <label>8. สถาที่เรียน คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม</label>
            <label>ห้อง</label>
            <input type="text" />
            <label>วัน</label>
            <input type="text" />
            <label>เวลา</label>
            <input type="text" />
        </p>

        <p>
            <label>9. วันที่จัดทำหรือปรับปรุงรายละเอียดของวิชาครั้งล่าสุด</label>
            <label>วันที่</label>
            <input type="text" />
        </p>

        <h1><label>หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์</label></h1>
        <p>
            <label>1.จุดมุ่งหมายของรายวิชา</label>
            <label>1.1</label>
            <input type="text" />
            <label>1.2</label>
            <input type="text" />
        </p>

        <p>
            <label>2.วัตถุประสงค์ในการพัฒนาปรับปรุงรายวิชา</label><br>
            <label>อธิบายโดยย่อเกี่ยวกับวัตถุประสงค์ในการพัฒนารายวิชานี้หรือการเปลี่ยนแปลงสำคัญๆที่เกิดขึ้น 
                <br>เช่น เพิ่มการใช้เทคโนโลยีสารสนเทศ หรือ web based การเปลี่ยนแปลงเนื้อหาของรายวิชาซึ่งเป็นผลจากงานวิจัย ใหม่ๆ ในสาขา</label><br>
            <label>2.1</label>
            <input type="text" /><br>
            <label>2.2</label>
            <input type="text" />
        </p>

        <h1><label>หมวดที่ 3 ลักษณะและการดำเนินการ</label></h1>
        <p>
            <label>1.คำอธิบายรายวิชา</label>
            <input type="text" />
        </p>

        <p>
            <label>2.จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา</label>
            <label>บรรยาย</label>
            <input type="text" />
            <label>สอนเสริม</label>
            <input type="text" />
            <label>การฝึกปฏิบัติ</label>
            <input type="text" />
            <label>การศึกษาด้วยตนเอง</label>
            <input type="text" />
        </p>

        <p>
            <label>3.จำนวนชั่วโมงต่อสัปดาร์ที่อาจารย์ให้คำปรึกษาแนะนำทางวิชาการแก่นิสิตเป็นรายงานบุคคล</label>

            <input type="tex" placeholder="ระบุจำนวนชั่วโมงต่อสัปดาห์ที่จะให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษานอกชั้นเรียนและระบุวิธีการสื่อสารให้นักศึกษาได้ทราบกำหนดเวลาล่วงหน้า"  
            size="150"/>
        </p>

        <p>
            <label>4.การบูรณาการเรียนการสอนกับงานวิจัย / งานบริการวิชาการ / ทำนุบำรุงศิลปะ (ถ้ามี)</label>
            <input type="text" />
        </p>

        <h1>หมวดที่ 4 การพัฒนาการเรียนรู้ของนิสิต</h1>
        <p>
            <label>1.คุณธรรม จริยธรรม</label><br>
            <label>1.1 คุณธรรม จริยธรรมที่ต้องพัฒนา</label><br>
            <label>1.2 วิธีการสอน</label><br>
            <input type="text" /><br>
            <label>1.3 วิธีการประเมินผล</label><br>
            <input type="text" />
        </p>

        <p>
            <label>2.ความรู้</label><br>
            <label>2.1 ความรู้ต้องพัฒนา </label><br>
            <label>2.2 วิธีการสอน</label><br>
            <input type="text" /><br>
            <label>2.3 วิธีการประเมินผล</label><br>
            <input type="text" />
        </p>

        <p>
            <label>3.ทักษะทางปัญญา</label><br>
            <label>3.1 ทักษะทางปัญญาที่ต้องพัฒนา</label><br>
            <label>3.2 วิธีการสอน</label><br>
            <input type="text" /><br>
            <label>3.3 วิธีการประเมินผล</label><br>
            <input type="text" />
        </p>

        <p>
            <label>4.ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบ</label><br>
            <label>4.1 ทักษะความสัมพันธ์ระหว่างบุคคลและความรับผิดชอบที่ต้องพัฒนา</label><br>
            <label>4.2 วิธีการสอน</label><br>
            <input type="text" /><br>
            <label>4.3 วิธีการประเมินผล</label><br>
            <input type="text" />
        </p>

        <p>
            <label>5.ทักษะการวิเคราะห์เชิงตัวเลข การสื่อสาร และการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา</label><br>
            <label>5.1 ทักษะการสื่อสารและการใช้เทคโนโลยีสารสนเทศที่ต้องพัฒนา</label><br>
            <label>5.2 วิธีการสอน</label><br>
            <input type="text" /><br>
            <label>5.3 วิธีการประเมินผล</label><br>
            <input type="text" />
        </p>

        <h1>หมวดที่ 5 แผนการสอนและการประเมินผล</h1>
        <p>
            <label>1.แผนการสอน</label><br>
            <input type="text" />
        </p>

        <p>
            <label>2.แผนการประเมินผลการเรียนรู้</label><br>
            <label>2.1 วิธีการ</label><br>
            <label>2.2 เกณฑ์ผ่านรายวิชา ผู้ที่จะผ่านรายวิชานี้จะต้อง</label><br>
            <input type="text" /><br>
            <label>2.3 เกณฑ์ค่าระดับคะแนน</label><br>
            <input type="text" />
        </p>

        <h1>หมวดที่ 6 ทรัพยากรประกอบการเรียนการสอน</h1>
        <p>
            <label>1.เอกสารและตำราหลัก</label><br>
            <input type="text" placeholder="ระบุตำราและเอกสารหลักที่ใช้ในการเรียนการสอน" size="150"/>
        </p>

        <p>
            <label>2.เอกสารและข้อมูลสำคัญ</label><br>
            <input type="text" placeholder="ระบุหนังสือ วารสาร รายงาน สื่ออิเล็กทรอนิกส์ เว็บไซต์ กฎระเบียบต่างๆ โปรแกรมคอมพิวเตอร์และแหล่งอ้างอิงที่สำคัญอื่นๆ ซึ่งนักศึกษาจำเป็นต้องศึกษาเพิ่มเติม" size="150"/>
        </p>

        <p>
            <label>3.เอกสารและข้อมูลแนะนำ</label><br>
            <input type="text" placeholder="ระบุหนังสือ วารสาร รายงาน สื่ออิเล็กทรอนิกส์ เว็บไซต์ กฎระเบียบต่างๆ โปรแกรมคอมพิวเตอร์และแหล่งอ้างอิงที่สำคัญอื่นๆ ซึ่งนักศึกษาควรศึกษาเพิ่มเติม" size="150"/>
        </p>

        <h1>หมวดที่ 7 การประเมินและปรับปรุงการดำเนินการของรายวิชา</h1>
        <p>
            <label>1.กลยุทธ์การประเมินประสิทธิผลของรายวิชาโดยนิสิต</label><br>
            <input type="text" />
        </p>

        <p>
            <label>2.กลยุทธ์การประเมินการสอน</label><br>
            <input type="text" placeholder="ระบุวิธีการประเมินที่จะได้ข้อมูลการสอน เช่น จากผู้สังเกตการณ์ หรือทีมผู้สอน หรือผลการเรียนของนักศึกษา เป็นต้น" size="150" />
        </p>

        <p>
            <label>3.การปรับปรุงการสอน</label><br>
            <input type="text" placeholder="อธิบายการปรับปรุงการสอน เช่น การวิจัยในชั้นเรียน การประชุมเชิงปฏิบัติการเพื่อพัฒนาการเรียนการสอน เป็นต้น" size="150" />
        </p>

        <p>
            <label>4.การทวนสอบมาตรฐานผลสัมฤทธิ์ของนิสิตในรายวิชา</label><br>
            <input type="text" placeholder="อธิบายกระบวนการที่ใช้ในการทวนสอบมาตรฐานผลสัมฤทธิ์ของนักศึกษาตามมาตรฐานผลการเรียนรู้ของรายวิชา เช่น ทวนสอบจากคะแนนข้อสอบ หรืองานที่มอบหมาย กระบวนการอาจแตกต่างกันไปสำหรับรายวิชาที่แตกต่างกัน หรือสำหรับมาตรฐานผลการเรียนรู้แต่ละด้าน" size="200" />
        </p>

        <p>
            <label>5.การดำเนินการทบทวนและการวางแผนปรับปรุงประสิทธิผลของรายวิชา</label><br>
            <input type="text" placeholder="อธิบายกระบวนการในการนำข้อมูลที่ได้จากการประเมินจากข้อ 1 และ 2 มาวางแผนเพื่อปรับปรุงคุณภาพ" size="100"/>
        </p> --}}

        <p>
            <label>ชื่อเอกสาร</label>
            <input name='name' type="text" />
        </p>

        <p>
            <label>ปีการศึกษา</label>
            <select name="year">
                <option value="" disabled selected>เลือกปีการศึกษา</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
            </select>
        </p>

        <p>
            <label>ภาคเรียนการศึกษา</label>
            <select name="term" >
                <option value="" disabled selected>เลือกภาคเรียนการศึกษา</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="ซัมเมอร์">ซัมเมอร์</option>
            </select>
        </p>

        <div class="form-group">
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id">
                <option value="" disabled selected>เลือกรายวิชา</option>
                    @foreach($subjects as $subject)
                        <option value="{{$subject->id}}">{{$subject->subjectid}}</option>
                    @endforeach
            </select>
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

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>

@endsection