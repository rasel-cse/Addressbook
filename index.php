<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Navbars</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
<a href="#" class="navbar-brand">AddressBook</a>	
 <div class="collapse navbar-collapse" id="bs-nav-demo">
   <ul class="nav navbar-nav">
   	<li><a href="index.html">About</a></li>
	<li><a href="#">Contact</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
	<li><a href="index.php">Home</a></li>
	<li><a href="login.php">Login</a></li>
  <li><a href="registration.php">Registration</a></li>
</ul>
</div>

</nav>

    <div class="container">   
    <img src="addressbook.png" class="img-responsive" alt="Cinque Terre" width="1200" height="674"> 
  </div> 

<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>