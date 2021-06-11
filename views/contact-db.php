<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records

$txtMessage = $_POST['msg'];
$txtName = $_POST['name'];
$txtEmail = $_POST['mail-id'];
$txtSubject = $_POST['sub'];

// database insert SQL code
$sql = "INSERT INTO `form_contact` (`message`, `name`, `email`, `subject`) VALUES ('$txtMessage', '$txtName', '$txtEmail', '$txtSubject')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>