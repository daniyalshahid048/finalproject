@extends('master2')   
@section('content1')
<form action="{{url('/poi')}}" method="post">
{{ csrf_field() }}
<div class="form-group">
  
  <input type="text" class="form-control" name="p" placeholder="Enter project code " id="usr" style="height:150px;">
  
  <input type="submit"  name="Login" class="form-control btn btn-primary" value="submit" style="border-radius: 0px"><br>

</div>
</form>



@endsection  

