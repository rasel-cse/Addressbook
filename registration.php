<?php
session_start();


 
?>

<?php 
$con=mysqli_connect("localhost","root","123456789");
mysqli_select_db($con,"addressbook");


if (isset($_POST['submit'])) {
    $name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];


$sql = "INSERT INTO registration (name, username, password)
VALUE ('$name', '$username', '$password')";


if (mysqli_query($con,$sql)) {
    echo "<script>alert('Registration successful')</script>";
    
} else {
    echo "data not record";
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
    <li><a href="login.php">Login</a></li></ul>

</div>

</nav>
    <div class="container">
    <div class="jumbotron">

    <h1> <span class="" aria-hidden="true"></span>Registration</h1>
    <p>Here you have to registration with your valid name username and password.</p>
</div>
</div>



 <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        
            <form action="registration.php" class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="name" id="inputEmail" name="name" class="form-control" placeholder="name" required autofocus>
                <input type="username" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

                   
                </div>
                <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block btn-signin" type="submit"></input>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div><!-- /container -->

<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>