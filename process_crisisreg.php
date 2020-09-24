<?php 
require_once("config.php");
if((isset($_POST['fname']) && $_POST['fname'] !='') && (isset($_POST['lname']) && $_POST['lname'] !='') && (isset($_POST['uname']) && $_POST['uname'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
 require_once("contact_mail.php");
    
$password = $conn->real_escape_string($_POST['password']);
$gender = $conn->real_escape_string($_POST['gender']);
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$uname = $conn->real_escape_string($_POST['uname']);
$email = $conn->real_escape_string($_POST['email']);
    
$sql="INSERT INTO tbl_registration (fname, lname, uname, email, password, gender) VALUES ('".$fname."','".$lname."', '".$uname."', '".$email."', '".$password."', '".$gender."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please Check Your Fields";
}
?>