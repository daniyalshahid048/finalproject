@extends('master')   
@section('content')
<div class="container">
<form class="shadow shadow-lg p-4" action="{{url('/zzzab')}}" method="post">
              {{ csrf_field() }}

  
  <input type="text" class="form-control" name="d" placeholder="enter username that you deleted " id="usr">
  <input type="submit"  name="Login" class="form-control btn btn-primary" value="DELETED" style="border-radius: 0px"><br>

</form>


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








