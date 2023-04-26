<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','myDatabase');

// get the post records
$txtEmail = $_POST['username'];
$txtPassword = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldEmail`, `fldPassword`) VALUES ('0', '$txtEmail', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("refresh: 2; url=http://localhost/newProject/Home_page.html");
	exit();
}

?>