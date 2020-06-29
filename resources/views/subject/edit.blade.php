@extends('layout')

@section('content')
    <form method="POST" action="{{ route('subject.update',['subject' => $subject->id])}}">
        @csrf
        @method('PUT')

        <br><br>
        <p>
            <label>รหัสรายวิชา</label>
            <input type="text" name="subjectid" class="form-control" value="{{ old('subjectid', $subject->subjectid) }}" />
        </p>

        <p>
            <label>ชื่อรายวิชา(อังกฤษ)</label>
            <input type="text" name="subjectnameen" class="form-control" value="{{ old('subjectnameen', $subject->subjectnameen) }}" />
        </p>
        
        <p>
            <label>ชื่อรายวิชา(ไทย)</label>
            <input type="text" name="subjectnameth" class="form-control" value="{{ old('subjectnameth', $subject->subjectnameth) }}" />
        </p>        

        <p>
            <label>สังกัด</label>
            <input type="text" name="subjectfac" class="form-control" value="{{ old('subjectfac', $subject->subjectfac) }}" />
        </p>   

        <p>
            <label>หน่วยกิต</label>
            <input type="text" name="credit" class="form-control" value="{{ old('credit', $subject->credit) }}" /> 
        </p>

        <p>
            <label>เงื่อนไขรายวิชา</label>
            {{-- <input type="text" name="subjectbefore" class="form-control" value="{{ old('subjectbefore', $subject->subjectbefore) }}" />  --}}
            <label>รายวิชาที่ต้องเรียนมาก่อน</label>
            <select class="form-control" name="subjectbefore" required>
                    <option value="{{ old('subjectbefore', $subject->subjectbefore) }}" selected>{{ $subject->subjectbefore }}</option>
                    <option value="ไม่มี">ไม่มี</option>
                @foreach($subjects as $subject)
                    <option value="{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}">{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}</option>
                @endforeach
            </select>
            <label>รายวิชาที่เรียนพร้อมกัน</label>
            <select class="form-control" name="subjectwith" required>
                    <option value="{{ old('subjectwith', $subject->subjectwith) }}" selected>{{ $subject->subjectwith }}</option>\
                    <option value="" disabled selected>เลือกรายวิชา</option>
                    <option value="ไม่มี">ไม่มี</option>
                @foreach($subjects as $subject)
                    <option value="{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}">{{$subject->subjectid}} {{$subject->subjectnameen}} {{$subject->subjectnameth}}</option>
                @endforeach
            </select>
        </p>

        <p>
            <label>คำอธิบายรายวิชา(ไทย)</label>
            <textarea name='descriptionth' rows="5" cols="4" class="form-control">{{ old('descriptionth', $subject->descriptionth) }}</textarea><br>
        </p>

        <p>
            <label>คำอธิบายรายวิชา(อังกฤษ)</label>
            <textarea name='descriptionen' rows="5" cols="4" class="form-control">{{ old('descriptionen', $subject->descriptionen) }}</textarea><br>
        </p>

        <p>
            <label>จุดมุ่งหมายของรายวิชา</label>
            <textarea name='pointofsubject' rows="5" cols="4" class="form-control">{{ old('pointofsubject', $subject->pointofsubject) }}</textarea><br>
        </p>

        <div class="form-group">
            <label>สถานะรายวิชา</label>
            <select class="form-control" name="avalible">
                <option value="{{ old('avalible', $subject->avalible) }}"     
                    selected   
                >{{ old('avalible', $subject->avalible) }}</option>
                @if($subject->avalible == "ใช้งาน")
                    <option value="ไม่ใช้งาน">ไม่ใช้งาน</option>
                @else
                     <option value="ใช้งาน">ใช้งาน</option>
                @endif
            </select>
        </div>

        {{-- @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <button type="submit" class="btn btn-primary btn-block">Update!</button>
    </form>
@endsection