<?php
include('includes/config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Adminpage</title>
	<link rel="stylesheet" type="text/css" href="crisis.css">
</head>
	<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: red;}
</style>
</head>
<body>

	<div class="navbar">
		<a href="" class="active" style="font-size: 40px; float: left;">C-Reports</a>
		
		<button style="background-color: black; height: 90px; margin-top: -30px; float: right;"><a href="crisislogin.html">Login out</a></button>
		
	</div>
	

<!--<h2>Crimes Reported</h2>-->

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>ID</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Username</th>
      <th>Email</th>
      <th>Password</th>
      <th>Gender</th>
      
    </tr>

    <?php 
$sql = "SELECT * from  tbl_registration";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>


    <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($result->fname);?></td>
      <td><?php echo htmlentities($result->lname);?></td>
      <td><?php echo htmlentities($result->uname);?></td>
      <td><?php echo htmlentities($result->email);?></td>
      <td><?php echo htmlentities($result->password);?></td>
      <td><?php echo htmlentities($result->gender);?></td>
      <?php $cnt=$cnt+1; }} ?> 
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>

</body>
</html>