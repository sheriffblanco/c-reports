<?php 
require_once("config.php");
if((isset($_POST['vname']) && $_POST['vname'] !='') && (isset($_POST['vaddress']) && $_POST['vaddress'] !='') && (isset($_POST['vtel']) && $_POST['vtel'] !='') && (isset($_POST['email'])&& $_POST['email'] !='') && (isset($_POST['subname']) && $_POST['subname'] !='')  && (isset($_POST['subtel']) && $_POST['subtel'] !='') && (isset($_POST['comments']) && $_POST['comments'] !='') && (isset($_POST['subjectad']) && $_POST['subjectad'] !=''))
{
 require_once("cases_mail.php");
    
$vname = $conn->real_escape_string($_POST['vname']);
$vaddress = $conn->real_escape_string($_POST['vaddress']);
$vtel = $conn->real_escape_string($_POST['vtel']);
$email = $conn->real_escape_string($_POST['email']);
$subname = $conn->real_escape_string($_POST['subname']);
$subtel = $conn->real_escape_string($_POST['subtel']);
$comments = $conn->real_escape_string($_POST['comments']);
$subjectad = $conn->real_escape_string($_POST['subjectad']);
    
$sql="INSERT INTO tbl_reports (vname, vaddress, vtel, email, subname, subtel, comments,subjectad) VALUES ('".$vname."','".$vaddress."', '".$vtel."', '".$email."', '".$subname."', '".$subtel."', '".$comments."','".$subjectad."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Report recieved!";
}
}
else
{
echo "Please Check Your Fields";
}
?>