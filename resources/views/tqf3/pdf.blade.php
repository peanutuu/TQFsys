{{-- <!DOCTYPE html>
<html lang="th">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <h1>{{ $tqf3->name }}<h1>
  </body>
</html> --}}

@extends('layout')
@section('title','มคอ')
@section('content')
    <h1>ชื่อเอกสาร {{ $tqf3->name }} </h1>
    <h1>เอกสารเป็นของรายวิชา {{ $tqf3->subject->subjectid }}</h1>
    <h1>ปีการศึกษา {{ $tqf3->year }} / {{ $tqf3->term }}</h1>
@endsection