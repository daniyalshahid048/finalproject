@extends('master2')   
@section('content1')
<center><h1> Rating  are </h1></center>
<div class="container">
<table class="table" style="background-color:#fa8072">
    <thead>
      <tr>
      
        <th>username</th>
       
      
        <th>skills</th>
        <th>task</th>
        <th> Rating</th>
      </tr> 
    </thead>
    <tbody>
    
    
    @foreach($d as $da)
      <tr>
        <td>{{$da->username}}</td>
        
       
        <td>{{$da->developlang}}</td>
        <td>{{$da->assignt}}</td>
        <td>{{$da->rating}}</td>
      </tr>      
      @endforeach
      </tbody>
      </table>
</div>

@endsection  