@extends('master2')   
@section('content1')

<center><h1> Task assign are </h1></center>
<div class="container">
<table class="table" style="background-color:#fa8072">
    <thead>
      <tr>
      
        <th>username</th>
       
        <th>phone</th>
        <th>skills</th>
        <th>task</th>
      </tr> 
    </thead>
    <tbody>
    
    @foreach($d as $da)
      <tr>
        <td>{{$da->username}}</td>
        
        <td>{{$da->phone}}</td>
        <td>{{$da->developlang}}</td>
        <td>{{$da->assignt}}</td>
      </tr>      
      @endforeach
   
      </tbody>
      </table>
</div>


@endsection  








