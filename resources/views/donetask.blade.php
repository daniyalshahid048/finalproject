@extends('master')   
@section('content')
<center><h1> Done task are </h1></center>
<div class="container">
<table class="table" style="background-color:#fa8072">
    <thead>
      <tr>
      
        <th>username</th>
       
        <th>phone</th>
        <th>skills</th>
        <th>task</th>
        
        <th>project code</th>
      </tr> 
    </thead>
    <tbody>
    
    
    @foreach($d as $da)
      <tr>
        <td>{{$da->username}}</td>
        
        <td>{{$da->phone}}</td>
        <td>{{$da->developlang}}</td>
        <td>{{$da->assignt}}</td>
        <td>{{$da->submitt}}</td>
      </tr>      
      @endforeach
      </tbody>
      </table>
</div>


@endsection  