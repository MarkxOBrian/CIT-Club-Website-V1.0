<?php
session_start();
include 'dbconnect.php';

?>


<?php
$result=mysqli_query($db_connect,"SELECT * FROM contact");
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
                        <li><a href="#">welcome, <?php echo $_SESSION['username']; ?></a></li>
                        <!--<li><a href="reg_members.php"> registered members</a></li>-->
                        <li><a href="logout.php">  <div class="glyphicon glyphicon-log-out"></div> log out</a></li>
                        <li><a href="#"><button type="button" class="btn btn-warning" onclick="window.print();">print</button></a></li>
                        

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        <header id="home" class="hom">
            <div class="container">

                <div class="row">
                    <br><br><br><br><br><br>

                        <div class="col-md-12 col-sm-6 col-xs-12">


    <table class="table"> 
   <caption>CIT CLUB REGISTERED MEMBERS</caption> 
   <thead> 
      <tr> 
         <th>Username</th> 
         <th>E-mail</th> 
         <th>Subject</th>
         <th>Message</th>  
      </tr> 
   </thead> 
   <tbody> 
<?php
//checking if the username exists
if(isset($_SESSION['username'])){ 

    while($extract=mysqli_fetch_assoc($result)){

echo "<tr>"."<td>".$extract['user_name']."</td>"."<td>".$extract['email']."</td>". "<td>".$extract['subject']."</td>"."<td>".$extract['message']."</tr>"; 
  }

}

else{
    echo "<script>alert('Cannot view contacts.No such admin user!');</script>";
    header("Location:reg_members.php");
}
//end of validation check

?>




   </tbody> 
</table> 

  
                        </div>

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
