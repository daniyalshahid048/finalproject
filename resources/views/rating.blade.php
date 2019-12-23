@extends('master')   
@section('content')
<form action="{{url('/pi')}}" method="post">
{{ csrf_field() }}
<div class="form-group">
  
  <input type="text" class="form-control" name="p" placeholder="Enter username " id="usr">
  <br>
  <input type="text" class="form-control" name="r" placeholder="Enter rating " id="usr">
  <input type="submit"  name="Login" class="form-control btn btn-primary" value="assigned" style="border-radius: 0px"><br>

 </div>
</form>



@endsection  