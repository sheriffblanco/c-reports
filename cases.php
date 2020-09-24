<?php
include('includes/config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Crisis-reported</title>
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
		
	</div>
	

<!--<h2>Crimes Reported</h2>-->

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>ID</th>
      <th>Victim's name</th>
      <th>Victim's address</th>
      <th>Victim's Tel</th>
      <th>Email</th>
      <th>Subject's name</th>
      <th>Subject's Tel</th>
      <th>Reported case</th>
      <th>Subject's address</th>
    </tr>

    <?php 
$sql = "SELECT * from  tbl_reports";
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
      <td><?php echo htmlentities($result->vname);?></td>
      <td><?php echo htmlentities($result->vaddress);?></td>
      <td><?php echo htmlentities($result->vtel);?></td>
      <td><?php echo htmlentities($result->email);?></td>
      <td><?php echo htmlentities($result->subname);?></td>
      <td><?php echo htmlentities($result->subtel);?></td>
      <td><?php echo htmlentities($result->comments);?></td>
      <td><?php echo htmlentities($result->subjectad);?></td>
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
      <td></td>
      <td></td>
    </tr>
  </table>
</div>

</body>
</html>