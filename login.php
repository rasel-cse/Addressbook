<?php 
session_start();
$con=mysqli_connect("localhost","root","123456789");
mysqli_select_db($con,"addressbook");


if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];


$sql="select * from registration where username='$username' AND password='$password'";
$run=mysqli_query($con,$sql);
if (mysqli_num_rows($run)) {

    $_SESSION['username']=$username;
    header('location:home.php');
}

else{

    echo "<script>alert('Wrong username or password')</script>" ;
}
}

 ?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container">
    <div class="navbar-header"></div>
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<a href="index.php" class="navbar-brand"><span  aria-hidden="true"></span> AddressBook</a>  
 <div class="collapse navbar-collapse" id="bs-nav-demo">
 
<ul class="nav navbar-nav navbar-right">
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="registration.php">Registration</a></li></ul>
    
</div>

</nav>
    <div class="container">
    <div class="jumbotron">

    <h1> <span class="" aria-hidden="true"></span>Login</h1>
    <p>Here you have to login with your valid username and password.</p>
</div>
</div>



<div class="container">
        <div class="card card-container">

            <form class="form-signin" action="login.php" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="name" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
              
                <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit"></input>
            </form><!-- /form -->
         
        </div><!-- /card-container -->
    </div><!-- /container -->


<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>