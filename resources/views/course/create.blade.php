@extends('layout')
@section('title','เพิ่มหลักสูตร')
@section('content')
    <form method="POST" action="{{ route('course.store')}}">
        @csrf

        {{-- @include('posts._form') --}}
         <p>
            <label>ชื่อหลักสูตร</label>
            <input type="text" name="coursename" />
        </p>
        <p>
            <label>คณะ</label>
            <input type="text" name="coursefac" />
        </p>
        <p>
            <label>ก.หมวดวิชาศึกษาทั่วไป</label>
            <input type="text" name="course1_1" placeholder="ระบบปกติ"/>
            <input type="text" name="course2_1" placeholder="ระบบพิเศษ"/>
        </p>        
        <p>
            <label>ข.หมวดวิชาศึกษาเฉพาะ</label>
            <input type="text" name="course1_2" placeholder="ระบบปกติ"/>
            <input type="text" name="course2_2" placeholder="ระบบพิเศษ"/>
        </p>        
        <p>
            <label>ค.หมวดประสบการณ์วิชาชีพ</label>
            <input type="text" name="course1_3" placeholder="ระบบปกติ"/>
            <input type="text" name="course2_3" placeholder="ระบบพิเศษ"/>
        </p>
        <p>
            <label>ง.หมวดวิชาเลือกเสรี</label>
            <input type="text" name="course1_4" placeholder="ระบบปกติ"/>
            <input type="text" name="course2_4" placeholder="ระบบพิเศษ"/>
        </p>
        <p>
            <label>รวม</label>
            <input type="text" name="course1_5" placeholder="ระบบปกติ"/>
            <input type="text" name="course2_5" placeholder="ระบบพิเศษ"/>
        </p>

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