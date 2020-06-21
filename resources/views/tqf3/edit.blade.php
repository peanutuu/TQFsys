@extends('layout')

@section('content')
    <form method="POST" action="{{ route('tqf3.update',['tqf3' => $tqf3->id])}}">
        @csrf
        @method('PUT')

        <p>
            <label>ชื่อเอกสาร</label>
            <input type="text" name="name" value="{{ old('name', $tqf3->name) }}" />
        </p>

        <p>
            <label>ปีการศึกษา</label>
            <select name="year" disabled="true">
                <option value="{{ old('year', $tqf3->year) }}">{{ old('year', $tqf3->year) }}</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
            </select>
            <input type="hidden" name="year" value="{{ old('year', $tqf3->year) }}"/>
        </p>

        <p>
            <label>ภาคเรียนการศึกษา</label>
            <select name="term" disabled="true">
                <option value="{{ old('term', $tqf3->term) }}">{{ old('term', $tqf3->term) }}</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="ซัมเมอร์">ซัมเมอร์</option>
            </select>
            <input type="hidden" name="term" value="{{ old('term', $tqf3->term) }}"/>
        </p>

        <p>
            <label>รายวิชา</label>
            <select class="form-control" name="subject_id" disabled="true">
                    @foreach($subjects as $subject)
                        <option value="{{ old('subject_id', $subject->id) }}"
                            @if($subject->id == $tqf3->subject_id)
                            selected
                            @endif
                            >{{ old('subject_id', $subject->subjectid) }}</option>
                    @endforeach
            </select>
            <input type="hidden" name="subject_id" value="{{ old('subject_id', $subject->id) }}"/>
        </p>

        <h1><label>หมวดที่ 1 ข้อมูลโดยทั่วไป</label></h1>
        <p>
            <label>1. รหัสวิชาและชื่อรายวิชา</label>
            <input type="text" value=" {{ old('name', $tqf3->subject->subjectid) }}"      />
            <input type="text" value=" {{ old('name', $tqf3->subject->subjectnameth) }}"  />
            <input type="text" value=" {{ old('name', $tqf3->subject->subjectnameen) }}"  />
        </p>

        <p>
            <label>2. จำนวนหน่วยกิต</label>
            <input name='tqf3121' type="text" value=" {{ old('name', $tqf3->subject->credit) }}" />
        </p>

        <p>
            <label>3. หลักสูตรและประเภทวิชา</label><br>
            <label>หลักสูตร</label>
            <input name='tqf3131' type="text" value="{{ old('tqf3131', $tqf3->tqf3131) }}"/><br>

            <label>สาขาวิชา</label>
            <input name='tqf3132' type="text" value="{{ old('tqf3132', $tqf3->tqf3132) }}"/><br>

            <label>ประเภทกลุ่มรายวิชา</label>
            <input name='tqf3133' type="text" value="{{ old('tqf3133', $tqf3->tqf3133) }}"/>
        </p>

        <p>
            <label>4. อาจารย์ผู้ประสานรายวิชา</label>
            {{-- <input name='tqf3141' type="text" /> --}}
            <textarea name='tqf3141' rows="5" cols="4" class="form-control" >{{ old('tqf3141', $tqf3->tqf3141) }}</textarea><br>

            {{-- <label>สถานที่ติดต่ออาจารย์ ห้อง IT-302 โทร</label>
            <input name='tqf3142' type="text" />
            
            <label>E-mail</label>
            <input name='tqf3143' type="text" /> --}}
        </p>

        <p>
            <label>5. ภาคการศึกษาที่</label>
            <input name='tqf3151' type="text" value="{{ old('term', $tqf3->term) }}/{{ old('year', $tqf3->year) }}" readonly/>

            <label>ชั้นปีที่</label>
            <input name='tqf3152' type="text" value="{{ old('tqf3152', $tqf3->tqf3152) }}"/>
        </p>

        <p>
            <label>6. รายวิชาที่ต้องเรียนมาก่อน (Pre-requisite) (ถ้ามี) ไม่มี</label>
            <input name='tqf3161' type="text" value="{{ old('tqf3161', $tqf3->tqf3161) }}"/>
        </p>

        <p>
            <label>7. รายวิชาที่ต้องเรียนพร้อมกัน (Co-requisite) (ถ้ามี) ไม่มี</label>
            <input name='tqf3171' type="text" value="{{ old('tqf3171', $tqf3->tqf3171) }}"/>
        </p>

        <p>
            <label>8. สถาที่เรียน คณะวิทยาการสารสนเทศ มหาวิทยาลัยมหาสารคาม</label>

            <label>ห้อง</label>
            <input name='tqf3181' type="text" value="{{ old('tqf3181', $tqf3->tqf3181) }}"/>

            <label>วัน</label>
            <input name='tqf3182' type="text" value="{{ old('tqf3182', $tqf3->tqf3182) }}"/>

            <label>เวลา</label>
            <input name='tqf3183' type="text" value="{{ old('tqf3183', $tqf3->tqf3183) }}"/>
        </p>

        <p>
            <label>9. วันที่จัดทำหรือปรับปรุงรายละเอียดของวิชาครั้งล่าสุด</label>
            <label>วันที่</label>
            <input name='tqf3191' type="text" value="{{ old('tqf3191', $tqf3->tqf3191) }}"/>
        </p>

        <h1><label>หมวดที่ 2 จุดมุ่งหมายและวัตถุประสงค์</label></h1>
        <p>
            <label>1.จุดมุ่งหมายของรายวิชา</label><br>
            <textarea name='tqf3211' rows="5" cols="4" class="form-control">{{ old('tqf3211', $tqf3->tqf3211) }}</textarea><br>

            {{-- <label>1.2</label>
            <input name='tqf3212' type="text" /> --}}
        </p>

        <p>
            <label>2.วัตถุประสงค์ในการพัฒนาปรับปรุงรายวิชา</label><br>
            <label>อธิบายโดยย่อเกี่ยวกับวัตถุประสงค์ในการพัฒนารายวิชานี้หรือการเปลี่ยนแปลงสำคัญๆที่เกิดขึ้น เช่น เพิ่มการใช้เทคโนโลยีสารสนเทศ หรือ web based การเปลี่ยนแปลงเนื้อหาของรายวิชาซึ่งเป็นผลจากงานวิจัย ใหม่ๆ ในสาขา</label><br>
            {{-- <label>2.1</label> --}}
            <textarea name='tqf3221' rows="5" cols="4" class="form-control">{{ old('tqf3221', $tqf3->tqf3221) }}</textarea><br>
            {{-- <input name='tqf3221' type="text" /><br>

            <label>2.2</label>
            <input name='tqf3222' type="text" /> --}}
        </p>

        <h1><label>หมวดที่ 3 ลักษณะและการดำเนินการ</label></h1>
        <p>
            <label>1.คำอธิบายรายวิชา</label>
            <textarea name='tqf3311' rows="5" cols="4" class="form-control">{{ old('tqf3311', $tqf3->tqf3311) }}</textarea><br>
        </p>

        <p>
            <label>2.จำนวนชั่วโมงที่ใช้ต่อภาคการศึกษา</label><br>
            <label>บรรยาย</label>
            <input name='tqf3321' type="text" value="{{ old('tqf3321', $tqf3->tqf3321) }}"/>

            <label>สอนเสริม</label>
            <input name='tqf3322' type="text" value="{{ old('tqf3322', $tqf3->tqf3322) }}"/>

            <label>การฝึกปฏิบัติ</label>
            <input name='tqf3323' type="text" value="{{ old('tqf3323', $tqf3->tqf3323) }}"/>

            <label>การศึกษาด้วยตนเอง</label>
            <input name='tqf3324' type="text" value="{{ old('tqf3324', $tqf3->tqf3324) }}"/>
        </p>

        <p>
            <label>3.จำนวนชั่วโมงต่อสัปดาร์ที่อาจารย์ให้คำปรึกษาแนะนำทางวิชาการแก่นิสิตเป็นรายงานบุคคล</label>
            {{-- <input name='tqf3331' type="text" placeholder="ระบุจำนวนชั่วโมงต่อสัปดาห์ที่จะให้คำปรึกษาและแนะนำทางวิชาการแก่นักศึกษานอกชั้นเรียนและระบุวิธีการสื่อสารให้นักศึกษาได้ทราบกำหนดเวลาล่วงหน้า"  
            size="150"/> --}}
            <textarea name='tqf3331' rows="5" cols="4" class="form-control" >{{ old('tqf3331', $tqf3->tqf3331) }}</textarea><br>
        </p>

        <p>
            <label>4.การบูรณาการเรียนการสอนกับงานวิจัย / งานบริการวิชาการ / ทำนุบำรุงศิลปะ (ถ้ามี)</label>
            {{-- <input name='tqf3341' type="text" /> --}}
            <textarea name='tqf3341' rows="5" cols="4" class="form-control" >{{ old('tqf3341', $tqf3->tqf3341) }}</textarea><br>

        </p>

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
            <textarea name='tqf3412' rows="5" cols="4" class="form-control" >{{ old('tqf3412', $tqf3->tqf3412) }}</textarea><br>

            <label>1.3 วิธีการประเมินผล</label><br>
            <textarea name='tqf3413' rows="5" cols="4" class="form-control" >{{ old('tqf3413', $tqf3->tqf3413) }}</textarea><br>
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
            <textarea name='tqf3422' rows="5" cols="4" class="form-control" >{{ old('tqf3422', $tqf3->tqf3422) }}</textarea><br>

            <label>2.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3423' type="text" /> --}}
            <textarea name='tqf3423' rows="5" cols="4" class="form-control" >{{ old('tqf3423', $tqf3->tqf3423) }}</textarea><br>
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
            <textarea name='tqf3432' rows="5" cols="4" class="form-control" >{{ old('tqf3432', $tqf3->tqf3432) }}</textarea><br>

            <label>3.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3433' type="text" /> --}}
            <textarea name='tqf3433' rows="5" cols="4" class="form-control" >{{ old('tqf3433', $tqf3->tqf3433) }}</textarea><br>
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
            <textarea name='tqf3442' rows="5" cols="4" class="form-control" >{{ old('tqf3442', $tqf3->tqf3442) }}</textarea><br>

            <label>4.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3443' type="text" /> --}}
            <textarea name='tqf3443' rows="5" cols="4" class="form-control" >{{ old('tqf3443', $tqf3->tqf3443) }}</textarea><br>
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
            <textarea name='tqf3452' rows="5" cols="4" class="form-control" >{{ old('tqf3452', $tqf3->tqf3452) }}</textarea><br>

            <label>5.3 วิธีการประเมินผล</label><br>
            {{-- <input name='tqf3453' type="text" /> --}}
            <textarea name='tqf3453' rows="5" cols="4" class="form-control" >{{ old('tqf3453', $tqf3->tqf3453) }}</textarea><br>
        </p>

        <h1>หมวดที่ 5 แผนการสอนและการประเมินผล</h1>
        <p>
            <label>1.แผนการสอน</label><br>
            {{-- <input name='tqf3511' type="text" /> --}}
        </p>

        <p>
            <label>2.แผนการประเมินผลการเรียนรู้</label><br>
            <label>2.1 วิธีการ</label><br>

            <label>2.2 เกณฑ์ผ่านรายวิชา ผู้ที่จะผ่านรายวิชานี้จะต้อง</label><br>
            {{-- <input name='tqf3521' type="text" /><br> --}}
            <textarea name='tqf3521' rows="5" cols="4" class="form-control" >{{ old('tqf3521', $tqf3->tqf3521) }}</textarea><br>

            <label>2.3 เกณฑ์ค่าระดับคะแนน</label><br>
            {{-- <input name='tqf3522' type="text" /> --}}
            <textarea name='tqf3522' rows="5" cols="4" class="form-control" >{{ old('tqf3522', $tqf3->tqf3522) }}</textarea><br>
        </p>

        <h1>หมวดที่ 6 ทรัพยากรประกอบการเรียนการสอน</h1>
        <p>
            <label>1.เอกสารและตำราหลัก</label><br>
            {{-- <input name='tqf3610' type="text" placeholder="ระบุตำราและเอกสารหลักที่ใช้ในการเรียนการสอน" size="150"/> --}}
            <textarea name='tqf3610' rows="5" cols="4" class="form-control" >{{ old('tqf3610', $tqf3->tqf3610) }}</textarea><br>
        </p>

        <p>
            <label>2.เอกสารและข้อมูลสำคัญ</label><br>
            {{-- <input name='tqf3620' type="text" placeholder="ระบุหนังสือ วารสาร รายงาน สื่ออิเล็กทรอนิกส์ เว็บไซต์ กฎระเบียบต่างๆ โปรแกรมคอมพิวเตอร์และแหล่งอ้างอิงที่สำคัญอื่นๆ ซึ่งนักศึกษาจำเป็นต้องศึกษาเพิ่มเติม" size="150"/> --}}
            <textarea name='tqf3620' rows="5" cols="4" class="form-control" >{{ old('tqf3620', $tqf3->tqf3620) }}</textarea><br>
        </p>

        <p>
            <label>3.เอกสารและข้อมูลแนะนำ</label><br>
            {{-- <input name='tqf3630' type="text" placeholder="ระบุหนังสือ วารสาร รายงาน สื่ออิเล็กทรอนิกส์ เว็บไซต์ กฎระเบียบต่างๆ โปรแกรมคอมพิวเตอร์และแหล่งอ้างอิงที่สำคัญอื่นๆ ซึ่งนักศึกษาควรศึกษาเพิ่มเติม" size="150"/> --}}
            <textarea name='tqf3630' rows="5" cols="4" class="form-control" >{{ old('tqf3630', $tqf3->tqf3630) }}</textarea><br>
        </p>

        <h1>หมวดที่ 7 การประเมินและปรับปรุงการดำเนินการของรายวิชา</h1>
        <p>
            <label>1.กลยุทธ์การประเมินประสิทธิผลของรายวิชาโดยนิสิต</label><br>
            {{-- <input name='tqf3710' type="text" /> --}}
            <textarea name='tqf3710' rows="5" cols="4" class="form-control" >{{ old('tqf3710', $tqf3->tqf3710) }}</textarea><br>
        </p>

        <p>
            <label>2.กลยุทธ์การประเมินการสอน</label><br>
            {{-- <input name='tqf3720' type="text" placeholder="ระบุวิธีการประเมินที่จะได้ข้อมูลการสอน เช่น จากผู้สังเกตการณ์ หรือทีมผู้สอน หรือผลการเรียนของนักศึกษา เป็นต้น" size="150" /> --}}
            <textarea name='tqf3720' rows="5" cols="4" class="form-control" >{{ old('tqf3720', $tqf3->tqf3720) }}</textarea><br>
        </p>

        <p>
            <label>3.การปรับปรุงการสอน</label><br>
            {{-- <input name='tqf3730' type="text" placeholder="อธิบายการปรับปรุงการสอน เช่น การวิจัยในชั้นเรียน การประชุมเชิงปฏิบัติการเพื่อพัฒนาการเรียนการสอน เป็นต้น" size="150" /> --}}
            <textarea name='tqf3730' rows="5" cols="4" class="form-control" >{{ old('tqf3730', $tqf3->tqf3730) }}</textarea><br>
        </p>

        <p>
            <label>4.การทวนสอบมาตรฐานผลสัมฤทธิ์ของนิสิตในรายวิชา</label><br>
            {{-- <input name='tqf3740' type="text" placeholder="อธิบายกระบวนการที่ใช้ในการทวนสอบมาตรฐานผลสัมฤทธิ์ของนักศึกษาตามมาตรฐานผลการเรียนรู้ของรายวิชา เช่น ทวนสอบจากคะแนนข้อสอบ หรืองานที่มอบหมาย กระบวนการอาจแตกต่างกันไปสำหรับรายวิชาที่แตกต่างกัน หรือสำหรับมาตรฐานผลการเรียนรู้แต่ละด้าน" size="200" /> --}}
            <textarea name='tqf3740' rows="5" cols="4" class="form-control" >{{ old('tqf3740', $tqf3->tqf3740) }}</textarea><br>
        </p>

        <p>
            <label>5.การดำเนินการทบทวนและการวางแผนปรับปรุงประสิทธิผลของรายวิชา</label><br>
            {{-- <input name='tqf3750' type="text" placeholder="อธิบายกระบวนการในการนำข้อมูลที่ได้จากการประเมินจากข้อ 1 และ 2 มาวางแผนเพื่อปรับปรุงคุณภาพ" size="100"/> --}}
            <textarea name='tqf3750' rows="5" cols="4" class="form-control" >{{ old('tqf3750', $tqf3->tqf3750) }}</textarea><br>
        </p>



        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
@endsection