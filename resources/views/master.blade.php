<html>
    <head>
        <title>Sidebar</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <link rel="stylesheet" type="text/css" href="css/admin_style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        
        <!--Font awosome--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!---Google fonts for menu---->
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    </head>
    <body>
      <!----Navbar----->
      @section('navbar')

    <!----Navbar-end--->
        <!----Side bar---->
    <div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2>Online Task</h2>
    </div>
    <ul class="sidebar-nav">
      <li >
        <a href="{{url('/as')}}"><i class="fa fa-home"></i>add employee</a>
      </li>
      <li>
        <a href="{{url('/aa')}}"><i class="fa fa-male"></i>Remove Employee</a>
      </li>
      <li>
        <a href="{{url('/ac')}}"><i class="fa fa-superpowers"></i>Avaible Employee</a>
      </li>
      <li>
        <a href="{{url('/ad')}}">  <i class="fa fa-tasks"></i></i>Task Assign</a>
      </li>
      <li>
        <a href="{{url('/aeee')}}"> <i class="fa fa-american-sign-language-interpreting"></i></i>Done Task</a>
      </li>
<li>
        <a href="{{url('/af')}}"><i class="fa fa-ribbon"></i></i>Rating</a>
      </li>
    </ul>
  </aside>
 
 
   <nav class="navbar navbar-expand-md bg-dark">

    <div id="navbar-wrapper bg-light">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class=" active" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
          
        </div>
      </div>
    </nav>
  </div>
 
   
    <button type="button" class="navbar-toggler  " style="background-color:grey; " data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        
    </button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<h2 style="float:center;color:white;font-family: 'Cinzel', serif;font-weight: bold;">Online Task Management System</h2>

 
    <ul class=" navbar-nav  ml-auto">
  
  <li class="nav-item"><a href="{{url('/m')}}"><span class="glyphicon glyphicon-log-in"></span> Log OUT</a></li>
</ul>
</div>

        <!--Side bar end-->
        


        <b><br><br><br>
        <script>
    $("#sidebar-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});  
  </script>
        @show
        <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-9">
  @yield('content')
 
  </div>
</div>












   <!----Signin cards----->

         
  <!-----Signin end--->



        
        
 
    
        
    </body>
</html>