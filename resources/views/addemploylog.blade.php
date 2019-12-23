@extends('master')   
@section('content')
<div class="container LogIn-card">
          <h2 class="text-center" style="color: #ed0757"><i class="fa fa-stethoscope"></i> Student Login</h2>
          <br><br>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <form class="shadow shadow-lg p-4" action="{{url('/zzza')}}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                <h5><i class="fa fa-user"></i> username</h5>
                  <input type="text" name="u" placeholder="write your username" class="form-control">
                 
                </div>
                

                <div class="form-group" >
                <h5><i class="fa fa-key"></i> Password</h5>
                  <input type="text" name="p" placeholder="write its Password" class="form-control">
                </div>
                <div class="form-group">
                <h5><i class="fa fa-user"></i> Phone No</h5>
                  <input type="text" name="ph" placeholder="write its phone Number" class="form-control">
                  
                </div>
                <div class="form-group">
                <h5><i class="fa fa-user"></i> skills</h5>
                  <input type="text" name="s" placeholder="write its skill" class="form-control">
                  
                </div>
                <input type="submit"  name="Login" class="form-control btn btn-dark" value="submit" style="border-radius: 0px"><br>

                 <br>

               
              </form>
            </div>



@endsection  








