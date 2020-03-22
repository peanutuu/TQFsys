@extends('layout')
@section('title','หน้าหลัก')
@section('content')
    <h1>หน้า Homepage</h1>

    Activity Table
    {{-- <div class="container"><br><br>
      <div class="row">
        <div class="col">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div> --}}

        <div class="col col-lg-2">
          <h4>เลือกทำรายการ</h4><br>
          <a href="{{ route('course.index') }}" class="btn btn-primary" style="height:40px;width:100px"> หลักสูตร </a><br><br>
          <a href="{{ route('subject.index') }}" class="btn btn-primary" style="height:40px;width:100px"> รายวิชา </a><br><br>
          <a href="{{ route('tqf.index') }}" class="btn btn-primary" style="height:40px;width:100px"> มคอ. </a><br><br>
        </div>
      </div>
    </div>
    
@endsection
    
