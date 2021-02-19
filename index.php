<?php
session_start();
error_reporting(0);
include 'includes/config.php';
if ($_SESSION['alogin'] != '') {
    $_SESSION['alogin'] = '';
}
if (isset($_POST['login'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uname', $uname, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] = $_POST['username'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {

        echo "<script>alert('Invalid Details');</script>";

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen">
    <link rel="stylesheet" href="css/prism/prism.css" media="screen"> <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="css/main.css" media="screen">
    <script src="js/modernizr/modernizr.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    ul li  a:hover{
        background-color: yellow;
}
    }
</style>

<body class="">
    <div class="main-wrapper">

        <div class="">
            <div class="row">
                <div class="topnav">
                   
                    <nav class="navbar navbar-inverse" >
  <div class="container-fluid" style="background- #b3b3ff";>

    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="clglogo.png" alt="clg logo" style="width: 70px;height: 55px;margin-top: -12px;"></a>

    </div>
    
    <ul class="nav navbar-nav" style="margin-left: 950px;">
      
      <!-- <li ><a style="color: white;">About us</a> -->
         <!--  -->
        <li><a href="#process" style="color: white;"id="hover">About us</a></li>
      </li>
      <li>
        <a  style="color: white;" href="#" data-toggle="modal"  data-target="#login"id="hover">Admin Login</a>


<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #e5e5e5;">
          <h4 class="modal-title">Admin Login</h4>
         <button type="button" style="margin-top: -36px;" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            
                                                    <p class="sub-title">Student Result Management System</p>
                                               

                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="inputEmail3"
                                                            class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="username" class="form-control"
                                                                id="inputEmail3" placeholder="UserName">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3"
                                                            class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" class="form-control"
                                                                id="inputPassword3" placeholder="Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-20">
                                                        <div class="col-sm-offset-2 col-sm-10">

                                                            <button type="submit" name="login"
                                                                class="btn btn-success btn-labeled pull-right">Sign
                                                                in<span class="btn-label btn-label-right"><i
                                                                        class="fa fa-check"></i></span></button>
                                                        </div>
                                                    </div>
                                                </form>




                                           
        </div>

</div>
</div>
</div>
        

      </li>
      <li>
<a href="#" style="color: white;" data-toggle="modal" data-target="#result">Result</a>



<div class="modal fade" id="result">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header" style="background-color: #e5e5e5;">
          <h4 class="modal-title">For Students</h4>
         <button type="button" style="margin-top: -36px;" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           
                                                    <p class="sub-title">Student Result Management System</p>
                                              
                                                <form class="form-horizontal" method="post">
                                                    <div class="form-group">
                                                   <!--      <label for="inputEmail3" class="col-sm-6 control-label">Search
                                                            your result</label> -->
                                                        <div class="col-sm-6">
                                                            <a href="find-result.php">click here</a>
                                                        </div>
                                                    </div>

                                                </form>



        </div>

</div>
</div>
</div>
</li>
</ul>
</div>
</nav>
               









<div class="container">
  <div id="myCarousel" class="carousel slide" data-interval="1500" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
<!--       <li data-target="#myCarousel" data-slide-to="2"></li>
 -->    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="pope1.png" alt="Clg logo1" style="width:100%;">

      </div>

      <!-- <div class="item">
        <img src="pope2.jpg" alt="Clg logo2" style="width:100%;">
      </div>
     -->
      <div class="item">
        <img src="pope.png" alt="Clg logo3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




<center>
<h2 style="color: black; font-size: 50px;" id="process">About us</h2>

</center>
<div class="container">
  <div class="row">
    <div class="col-md-6">
              <img src="pope3.png" alt="Clg logo1" style="width:100%;">

    </div>
    <div class="col-md-6">
      <br><br>
      Pope John Paul II College of Education was founded by His Grace, Dr.V.S.Selvanathar, Former Archbishop of Pondicherry and Cuddalore, on 23rd 1986 to commermorate the historic visit of Saintly Pope John Paul II to India. It is a Christian minority Institution established and managed by the Archdiocese of Pondicherry - Cuddalore.<br><br>

Over the years, guided by the illustrious former Archbishop Dr.Michael Augustine and the present Archbishop Dr. Antony Anandarayar, the College has evolved into a premier institution of teacher training, ushering transformational changes in administration, providing optimum infrastructural facilities, diversifying courses, adopting innovative digital teaching learning strategies and maintaining a positive learning environment.<br><br>

It has been recognized by NCTE, AICTE and is affiliated to the Pondicherry university. Presently it is the only College of Education in

    </div>



<div class="col-md-12">
  <br>
  the UT of Puducherry, which has been reaccredited
<b>( 2nd Cycle ) with an "A" grade (in 4 - point scale ) by NAAC in 2016.</b><br><br>

It Offers three distinct teacher education programmes viz. two year B.Ed., four - year Integrated programmes of B.A., B.Ed.,( English ) and B.Sc., B.Ed with Mathamatics, Physics & Chemistry as main subjects. M.C.A course is aslo run as a stand alone technical programme by the college. 
  <br><br><br>
</div>    
  </div>
  
</div>











<!--Footer start-->
<!-- <footer class="site-footer" style="height: 100px;"> -->
<div class="row footer" style="color: white;background-color: black;">
    <div class="col-md-6">
        <h2 style="color: white; margin-left: 247px;">Contact Us</h2>
 <address style="margin-left: 247px;"><i class="fa fa-map-marker" aria-hidden="true">Reddiarpalayam, Puducherry
605 010.</i><br><i class="fa fa-phone-square">(0413) 2292121 <br>9443140664</i><br><i class="fa fa-envelope-o"></i>
popejohnpaulcollege@yahoo.co.in</address>
<h2 style="margin-left: 247px; color: white;">Follow Us</h2>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<style>
    .fa {
  padding: 10px;
  font-size: 20px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

    .fa-facebook {
  background: #3B5998;
  color: white;
  margin-left: 247px;
  
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
    </div>
     <div class="col-md-6">
        <br>
        <iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=pope%20john&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" sty></iframe>
        <br>
</div>
</div>
<!-- <a href="https://yt2.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>< -->
<!--footer end-->












    <!-- ========== COMMON JS FILES ========== -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/pace/pace.min.js"></script>
    <script src="js/lobipanel/lobipanel.min.js"></script>
    <script src="js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
    <script>
        $(function () {

        });
    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>
