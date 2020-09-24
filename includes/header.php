<!DOCTYPE html>
<html>
<head>
	<title>crisis</title>
	<link rel="stylesheet" type="text/css" href="crisis.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="crisis.css">
	<style>
		body {margin: 0;}

		ul.topnav {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #111;}

		ul.topnav li a.active {background-color: red;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
		ul.topnav li.right, 
		ul.topnav li {float: none;}
		}
</style>
</head>
<body style="background-image: url('images/news.jpeg');">



<ul class="topnav">
  <li><a class="active" href="index.php">C-Reports</a></li>
  <li><a href="report.php">Report Crimes</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="contact.php">Contact Us</a></li>
  <li><a href="jobs.php">Job Opportunites</a></li>
  <li class="right"><a href="crisislogin.php">Login</a></li>
  <li class="right"><a href="crisisregister.php">Sign up</a></li>
</ul>
