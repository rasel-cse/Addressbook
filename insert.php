<?php
session_start();


if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
} 
?>

<?php
session_start();

$dbcon=mysqli_connect("localhost","root","123456789");

mysqli_select_db($dbcon,"addressbook");





if(isset($_POST["submit"])){
	$firstname= $_POST["firstname"];
	$lastname=$_POST['lastname'];
		$email= $_POST["email"];
	$number= $_POST["number"];


	$address=$_POST['address'];


if (isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
  }

  $identified = mysqli_query($dbcon,"SELECT id FROM registration WHERE username = '$username'");
  $row = mysqli_fetch_array($identified);
 $data=$row['id'];

  $insert_data="insert into information (identity,firstname,lastname,email,number,address) VALUE ('$data','$firstname','$lastname','$email','$number','$address')";
    if(mysqli_query($dbcon,$insert_data))
    {
        echo"<script>window.open('view.php','_self')</script>";
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
   <ul class="nav navbar-nav">
    <li><a href="#">Insert</a></li>
    </ul>

 <div class="collapse navbar-collapse" id="bs-nav-demo">
 
<ul class="nav navbar-nav navbar-right">

    <li><a href="logout.php">Logout</a></li>
    <li><a href="view.php">View</a></li>
    <li><a href="insert.php">Edit</a></li>

    </ul>
</div>

</nav>
    <div class="container">
    <div class="jumbotron">

<h1> <span class="" aria-hidden="true"></span>Insert</h1>
<p>Insert the form with your personal Information.</p>
</div>

<div class="col-md-12">
          <div class="content">
            <p>Please fill up this field</p>
            <?php
              //global $e_message;
              
              if(isset($e_message)){
                echo $e_message;
              }
              
              if(isset($o_messge)){
                echo $o_messge;
              }
              
            ?>


<form action="insert.php" method="POST">
 <div class="form-group">
    <label for="exampleInputName">First Name</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputName" placeholder="Enter First Name" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputName">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputName" placeholder="Enter Last Name" required="required">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputName">Phone Number</label>
    <input type="number" name="number" class="form-control" id="exampleInputName" placeholder="Enter Phone Number" required="required">
  </div>

   <div class="form-group">
    <label for="exampleInputName">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputName" placeholder="Enter Address" required="required">
  </div>
   
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</div>



 <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.dropdown.js"></script>
  <script type="text/javascript">

  jQuery(document).ready(function( $ ){
      $( '#exampleInputoper' ).dropdown( {
          gutter : 0
      });
      $('.cros').click(function(){
        $(this).parent('.e-message').slideUp();
      });
    });
  </script>

<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>