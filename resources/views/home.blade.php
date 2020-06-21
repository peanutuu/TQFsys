@extends('layouts.app')
@section('title','หน้าหลัก')
@section('content')

<div class="card card-default">
  <div class="card-header">
      <h3>ยินดีตอนรับ</h3> 
  </div>
  <div class="card-body">
    <h3> {{ Auth::user()->name }} </h3>
  </div>
</div>
    
    
@endsection
    
