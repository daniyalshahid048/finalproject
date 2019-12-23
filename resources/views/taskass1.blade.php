@extends('master')   
@section('content')
<form action="{{url('/ooa')}}" method="post">
{{ csrf_field() }}
<div class="form-group">
  
  <input type="text" class="form-control" name="user" placeholder="Enter user name " id="usr">
  <input type="text" class="form-control" name="s" placeholder="Enter project description " id="usr">

 <input type="submit"  name="Login" class="form-control btn font-weight-bold" value="assigned" style="border-radius: 0px"><br>
</div>
</form>




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