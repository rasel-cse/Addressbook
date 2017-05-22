<?php
session_start();


if(!$_SESSION['username'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
} 

$dbcon=mysqli_connect("localhost","root","123456789");

mysqli_select_db($dbcon,"addressbook");

	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		
    $query="DELETE FROM information WHERE id='$id'";
	$result=mysqli_query($dbcon,$query);
	echo "<script>
	alert('are you sure you want delete it?');
	window.location.href='view.php';
	</script>
	";
	}

	else{
		header('location: view.php');
	}
?>