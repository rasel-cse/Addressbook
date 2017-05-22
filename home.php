<?php
session_start();


if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
} 
?>

<?php

$dbcon=mysqli_connect("localhost","root","123456789");

mysqli_select_db($dbcon,"addressbook");



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
   <ul class="nav navbar-nav">
    <li><a href="#">Home</a></li>
    </ul>

 <div class="collapse navbar-collapse" id="bs-nav-demo">
 
<ul class="nav navbar-nav navbar-right">
    <li><a href="insert.php">Insert</a></li>
    <li><a href="view.php">View</a></li>
    <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

</nav>
    <div class="container">
    <div class="jumbotron">

<div class="col-md-12">
                    <div class="content">
                        
                        <div class="col-md-3">
                            <div class="custom-home color-3">
                                <h2>Insert</h2>
                                <div class="home-caption color-3-bg">
                                    <h4>You can insert your Data.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-home color-4">
                                <h2>View</h2>
                                <div class="home-caption color-4-bg">
                                    <h4>You can view your Data.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-home color-2">
                                <h2>Edit</h2>
                                <div class="home-caption color-2-bg">
                                    <h4>You can edit your Data.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="custom-home color-1">
                                <h2>Delete</h2>
                                <div class="home-caption color-1-bg">
                                    <h4>You can delete your Data.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 footer-bg">
                    
                </div>
            </div>
        </div>

</div>
</div>



 
<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>