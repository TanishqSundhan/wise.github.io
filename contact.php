<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];
$txtType = $_POST['txtType'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldPhone`, `fldMessage`, `fldType`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage', '$txtType')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	header('Location: thank-you.html');

}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
