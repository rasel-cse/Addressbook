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
    <li><a href="#">View</a></li>
    </ul>

 <div class="collapse navbar-collapse" id="bs-nav-demo">
 
<ul class="nav navbar-nav navbar-right">
    <li><a href="logout.php">Logout</a></li>
    <li><a href="edit.php">Edit</a></li>
    <li><a href="Insert.php">Insert</a></li>

    </ul>
</div>

</nav>
    <div class="container">
    <div class="jumbotron">

    <div class="content">

                        <p>View all  details</p>
                        
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>FirstName</th>
                               <th>LastName</th>
                                <th>Email</th>
                              <th>Number</th>
                              <th>Address</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                          

                          <?php
              if (isset($_SESSION['username'])) {
                $username=$_SESSION['username'];
              }


               $identified = mysqli_query($dbcon,"SELECT id FROM registration WHERE username = '$username'");
                $row= mysqli_fetch_array($identified);
                $data=$row['id'];

              $result = mysqli_query($dbcon,"select * from information where identity='$data'" );
              
              while($row = mysqli_fetch_array($result)){
                ?>
                            <tr>
                              <th><?php echo $row['firstname'];?>   </th>
                                <th><?php echo $row['lastname'];?> </th>
                               <th><?php echo $row['email'];?> </th>
                              <td><?php echo $row['number'];?> </td>
                            
                              <td><?php echo $row['address'];?> </td>

                              <td>
                          
                                  <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                               </td>

                            </tr>

                            
                        <?php   }
                          
                          ?>
                            
                        
                          </tbody>

                        </table>
                        
                    </div>
                </div>



</div>
</div>
</div>

 
<script src="http://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>