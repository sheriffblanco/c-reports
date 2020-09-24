<?php
$toEmail = "akpanphilip1122@gmail.com";
$mailHeaders = "From: " . $_POST["fname"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["lname"], $_POST["uname"], $_POST["password"], $_POST["gender"], $mailHeaders)) {
echo"<p class='success'>User Registration Details Was Sent Successfuly.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>