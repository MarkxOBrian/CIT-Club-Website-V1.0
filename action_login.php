<?php
session_start();
include 'dbconnect.php';
?>


<?php
if(isset($_POST['submit'])){
//getting data from the login form
$adm_number=$_POST['adm'];
$password=$_POST['password'];
$result=mysqli_query($db_connect,"SELECT * FROM signup WHERE adm_number='$adm_number' && password='$password'");

$rows=mysqli_num_rows($result);

if($rows>0){
    while($extract=mysqli_fetch_assoc($result)){
        $_SESSION['adm']=$extract['adm_number'];
        $_SESSION['fname']=$extract['first_name'];
        $_SESSION['lname']=$extract['last_name'];
        $_SESSION['faculty']=$extract['faculty'];
        $_SESSION['course']=$extract['course'];
        $_SESSION['email']=$extract['email'];
        $_SESSION['cellphone']=$extract['cellphone'];
    }

    
     


}

else{
    echo "<script>alert('Invalid admission number or password!');</script>";
    header("Refresh:0; url=index.html");
}
}
?>




<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>cit club</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/lato-webfont.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css">



        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" height="70" width="100" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        
                        <li><a href="">welcome, <?php echo $_SESSION['adm'];  ?></a></li>
                        <li><a href="logout.php">  <div class="glyphicon glyphicon-log-out"></div> log out</a></li>
                        

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="hom">
            <div class="container">

                <div class="row">
                    <br><br><br><br><br><br>
                     <div class="col-md-7 col-sm-6 col-xs-12" style="border-right: 1px solid lightgrey">  
                        

                      <table class="table table-hover"> 
   <thead> 
      <tr> 
         <th colspan="2">SUPPORTIVE TUTORIALS AND E-BOOKS</th> 
      </tr> 
   </thead> 
   <tbody> 
      <tr> 
         <td>INTRODUCTION TO LINUX</td> 
         <td> <a href="assets/docs/linux.pdf"><button class="btn btn-info">Download</button>  </a></td> 
      </tr> 
      <tr> 
         <td>INTRODUCTION TO GIT</td> 
         <td> <a href="assets/docs/git.pdf"><button class="btn btn-info">Download</button>  </a></td> 
      </tr> 
      <tr> 
         <td>INTRODUCTION TO PYTHON</td> 
         <td> <a href="assets/docs/python.pdf"><button class="btn btn-info">Download</button>  </a></td> 
      </tr> 
      <tr> 
         <td>INTRODUCTION TO PHP</td> 
         <td> <a href="assets/docs/php.pdf"><button class="btn btn-info">Download</button>  </a></td> 
      </tr> 
       
   </tbody> 
</table> 




                        </div>
                        <div class="col-md-5 col-sm-6 col-xs-12">
    <table class="table table-hover"> 
   <thead> 
      <tr> 
         <th colspan="2">USER BASIC INFORMATION</th> 
      </tr> 
   </thead> 
   <tbody> 
      <tr> 
         <td>FIRST NAME:</td> 
         <td> <?php echo $_SESSION['fname']."<br>";  ?></td> 
      </tr> 
      <tr> 
         <td> LAST NAME:</td> 
         <td><?php echo $_SESSION['lname']."<br>";  ?></td> 
      </tr> 
      <tr> 
         <td> FACULTY: </td> 
         <td><?php echo $_SESSION['faculty']."<br>";  ?></td> 
      </tr> 
      <tr> 
         <td> COURSE: </td> 
         <td><?php echo $_SESSION['course']."<br>";  ?></td> 
      </tr> 
       <tr> 
         <td> E-MAIL: </td> 
         <td><?php echo $_SESSION['email']."<br>";  ?></td> 
      </tr> 
       <tr> 
         <td>CELLPHONE: </td> 
         <td><?php echo $_SESSION['cellphone']."<br>";  ?></td> 
      </tr> 
   </tbody> 
</table> 


                         
                        </div>         
                </div>

            </div>
        </header>









                   


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>


        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
