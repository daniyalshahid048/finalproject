<html>
    <head>
        <title>Sidebar</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/admin_style.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!---CSS FILE--->
        
        
        <!--Font awosome--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!---Google fonts for menu---->
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    </head>
    <body>
      <!----Navbar----->
 

    <!----Navbar-end--->
        <!----Side bar---->
        @section('navbar1')
    <div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2>Online Task</h2>
    </div>
    <ul class="sidebar-nav">
      <li class="active">
        <a href="{{url('/ba')}}"> <i class="fa fa-question"></i></i>Assigned Task</a>
      </li>
      <li>
        <a href="{{url('/bb')}}"><i class="fa fa-angellist"></i></i>Submit Task</a>
      </li>
            <li>
        <a href="{{url('/bc')}}"><i class="fa fa-male"></i>Assigned Rating</a>
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
  
      <li class="nav-item"><a href="{{url('/vfvf')}}"><span class="glyphicon glyphicon-log-in"></span> Log OUT</a></li>
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
  @yield('content1')
 
  </div>
</div>








        <!----LogIn cards----->
 

  <!-----LogIn end--->





   <!----Signin cards----->

         
  <!-----Signin end--->



        
   
    
        
    </body>
</html>