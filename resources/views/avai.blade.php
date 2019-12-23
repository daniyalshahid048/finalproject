@extends('master')   
@section('content')
<center><h1> Avaiable Employee are</h1></center>
<div class="container">
<table class="table" style="background-color:#fa8072">
    <thead>
      <tr>
      
        <th>username</th>
        <th>password</th>
        <th>phone</th>
        <th>skills</th>
      </tr>
    </thead>
    <tbody>
    @foreach($d as $da)
      <tr>
        <td>{{$da->username}}</td>
        <td>{{$da->password}}</td>
        <td>{{$da->phone}}</td>
        <td>{{$da->developlang}}</td>
       
      </tr>      
      @endforeach
</div>


@endsection  