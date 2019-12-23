<html>
    <head>
        <title>Sidebar</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!---CSS FILE--->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <!--Font awosome--->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!---Google fonts for menu---->
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
    </head>
    <body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<section id="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-xs-center">
                <h2 class="margin-top-0 wow fadeIn" style="color:white">Get in Touch With Admin</h2>
                <hr class="primary">
                <p style="color:white">We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-xs-center">
                <form class="contact-form row" action="{{url('/azx')}}">
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label></label>
                        <input type="submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</section>
</body>
</html>