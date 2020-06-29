@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')

<div>
    <form method="POST" action="{{ route('course.store')}}">
        @csrf
        <br> <br>
        <h1>เพิ่มหลักสูตร</h1> <hr> <br>
        {{-- @include('posts._form') --}}
        
        <p>
            <label>รหัสหลักสูตร</label>
            <input type="text" name="courseid" class="form-control" placeholder="รหัสหลักสูตร" required />
        </p>

        <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="coursename" class="form-control" placeholder="ชื่อหลักสูตร" required/>
        </p>

        <p>
            <label>คณะ</label>
            {{-- <input type="text" name="coursefac" class="form-control" /> --}}
            <select class="form-control" name="coursefac" required>
                <option value="" disabled selected>เลือกคณะ</option>
                <option value="คณะมนุษยศาสตร์และสังคมศาสตร์">คณะมนุษยศาสตร์และสังคมศาสตร์</option>
                <option value="คณะวิทยาศาสตร์">คณะวิทยาศาสตร์</option>
                <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                <option value="คณะพยาบาลศาสตร์">คณะพยาบาลศาสตร์</option>
                <option value="คณะศึกษาศาสตร์">คณะศึกษาศาสตร์</option>
                <option value="คณะศิลปกรรมศาสตร์">คณะศิลปกรรมศาสตร์</option>
                <option value="คณะเภสัชศาสตร์">คณะเภสัชศาสตร์</option>
                <option value="คณะเทคโนโลยี">คณะเทคโนโลยี</option>
                <option value="คณะการบัญชีและการจัดการ">คณะการบัญชีและการจัดการ</option>
                <option value="คณะการท่องเที่ยวและการโรงแรม">คณะการท่องเที่ยวและการโรงแรม</option>
                <option value="คณะสถาปัตยกรรมศาสตร์ ผังเมืองและนฤมิตศิลป์">คณะสถาปัตยกรรมศาสตร์ ผังเมืองและนฤมิตศิลป์</option>
                <option value="คณะวิทยาการสารสนเทศ">คณะวิทยาการสารสนเทศ</option>
                <option value="วิทยาลัยการเมืองการปกครอง">วิทยาลัยการเมืองการปกครอง</option>
                <option value="คณะสาธารณสุขศาสตร์">คณะสาธารณสุขศาสตร์</option>
                <option value="คณะแพทยศาสตร์">คณะแพทยศาสตร์</option>
                <option value="คณะสิ่งแวดล้อมและทรัพยากรศาสตร์">คณะสิ่งแวดล้อมและทรัพยากรศาสตร์</option>
                <option value="คณะสัตวแพทยศาสตร์และสัตวศาสตร์">คณะสัตวแพทยศาสตร์และสัตวศาสตร์</option>
                <option value="วิทยาลัยดุริยางคศิลป์">วิทยาลัยดุริยางคศิลป์</option>
                <option value="คณะวัฒนธรรมศาสตร์">คณะวัฒนธรรมศาสตร์</option>
            </select>
        </p>

        <p>
            <label>อักษรย่อ</label>
            <input type="text" name="coursefac2" class="form-control" placeholder="อักษรย่อ" required/>
        </p> 
        
        <p>
            <label>ระดับการศึกษา</label>
            {{-- <input type="text" name="courselv" class="form-control" /> --}}
            <select class="form-control" name="courselv" required>
                <option value="" disabled selected>เลือกระดับการศึกษา</option>
                <option value="ปริญญาตรี ระบบปกติ">ปริญญาตรี ระบบปกติ</option>
                <option value="ปริญญาตรี ระบบพิเศษ">ปริญญาตรี ระบบพิเศษ</option>
                <option value="ปริญญาตรีต่อเนื่อง ระบบปกติ">ปริญญาตรีต่อเนื่อง ระบบปกติ</option>
                <option value="ปริญญาตรีต่อเนื่อง ระบบพิเศษ">ปริญญาตรีต่อเนื่อง ระบบพิเศษ</option>
                <option value="ปริญญาตรี (เทียบเข้า) ระบบพิเศษ">ปริญญาตรี (เทียบเข้า) ระบบพิเศษ</option>
                <option value="ปริญญาโท ระบบในเวลาราชการ">ปริญญาโท ระบบในเวลาราชการ</option>
                <option value="ปริญญาโท ระบบนอกเวลาราชการ">ปริญญาโท ระบบนอกเวลาราชการ</option>
                <option value="ปริญญาเอก ระบบในเวลาราชการ">ปริญญาเอก ระบบในเวลาราชการ</option>
                <option value="ปริญญาเอก ระบบนอกเวลาราชการ">ปริญญาเอก ระบบนอกเวลาราชการ</option>
            </select>
        </p>

        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="coursecredit" class="form-control" placeholder="จำนวนหน่วยกิตทั้งหมด" />
        </p>

        <p>
            <label>ปีการศึกษา</label>
            {{-- <input type="text" name="courseyear" class="form-control" /> --}}
            <select class="form-control" name="courseyear" required>
                <option value="" disabled selected>เลือกจำนวนปีการศึกษา</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </p>

        <p>
            <label>เกรดต่ำสุด</label>
            <input type="text" name="courselowcredit" class="form-control" placeholder="จำนวนเกรดต่ำสุด" required/>
        </p>

        <p>
            <label>1. หมวดวิชาศึกษาทั่วไป</label>
            <input type="text" name="course1" class="form-control" placeholder="จำนวนหน่วยกิต" required/>
        </p>      

        <p>
            <label>2. หมวดวิชาศึกษาเฉพาะ</label>
            <input type="text" name="course2" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

            <label>2.1 วิชาแกน</label>
            <input type="text" name="course21" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

            <label>2.2 วิชาเฉพาะด้าน</label>
            <input type="text" name="course22" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

                <label>2.2.1 กลุ่มประเด็นด้านองค์การและระบบสารสนเทศ</label>
                <input type="text" name="course221" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

                <label>2.2.2 กลุ่มเทคโนโลยีเพื่องานประยุกต์</label>
                <input type="text" name="course222" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

                <label>2.2.3 กลุ่มเทคโนโลยีและวิธีการทางซอฟท์แวร์</label>
                <input type="text" name="course223" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

                <label>2.2.4 กลุ่มโครงสร้างพื้นฐานของระบบ</label>
                <input type="text" name="course224" class="form-control" placeholder="จำนวนหน่วยกิต" required/> <br>

                <label>2.2.5 กลุ่มภาษาสำหรับเทคโนโลยีสารสนเทศ</label>
                <input type="text" name="course225" class="form-control" placeholder="จำนวนหน่วยกิต" required/>
        </p>   

        <p>
            <label>3. หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course3" class="form-control" placeholder="จำนวนหน่วยกิต" required/>
            {{-- <input type="text" name="course2_3" placeholder="ระบบพิเศษ"/> --}}
        </p>

        <p>
            <label>4. หมวดวิชาเลือกเสรี</label>
            <input type="text" name="course4" class="form-control" placeholder="จำนวนหน่วยกิต" required/>
            {{-- <input type="text" name="course2_4" placeholder="ระบบพิเศษ"/> --}}
        </p>

        <p>
            <label>5. หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course5" class="form-control" placeholder="จำนวนหน่วยกิต" required/>
            {{-- <input type="text" name="course2_4" placeholder="ระบบพิเศษ"/> --}}
        </p>

        {{-- <p>
            <label>รวม</label>
            <input type="text" name="coursesum" class="form-control"/>
        </p> --}}

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
</div>
@endsection