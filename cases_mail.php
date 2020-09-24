<?php
$toEmail = "akpanphilip1122@gmail.com";
$mailHeaders = "From: " . $_POST["vname"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["vaddress"], $_POST["vtel"], $_POST["subname"], $_POST["subjectad"], $_POST["subtel"], $_POST["comments"], $mailHeaders)) {
echo"<p class='success'>User Registration Details Was Sent Successfuly.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>
 