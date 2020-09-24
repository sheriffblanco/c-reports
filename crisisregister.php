<?php 
	include('includes/header.php');
?>

<link rel="stylesheet" href="b4/css/bootstrap.min.css">
<script src="b4/js/bootstrap.min.js"></script>

<div style="background-color: red; width: 60%; margin: 15px auto; text-align: center; box-shadow: 0 0 40px pink; border-radius: 30px;">
<div class="desc" style="background-color: black; color: white; font-family: "><p>Sign Up</p></div><br>
<form action="process_crisisreg.php" method="POST" enctype="multipart/form-data">
	<div class="container">
		<div form-row align-items-center>
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control"  placeholder="Firstname" name="fname">
			</div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control"  placeholder="Lastname" name="lname">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control" placeholder="Username" name="uname">
				<small class="form-text text-muted">Min: 6 and max 16 characters</small>
			</div>
			<div class="form-group col-md-4">
				<input type="email" class="form-control" placeholder="Email" name="email">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group col-md-4">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
		</div>
		</div>
	</div>
	<input type="radio" name="gender" value="male" checked> Male
				    <input type="radio" name="gender" value="female"> Female
	                <input type="radio" name="gender" value="other"> Other
	                
	<button type="submit" class="btn btn-primary">Sign in</button>
	</div>
</form>
</div>
<!--
		<div style="background-color: red; width: 60%; margin: 15px auto; text-align: center; box-shadow: 0 0 40px pink; border-radius: 30px; ">
			<div class="desc" style="background-color: black; color: white; font-family: "><p>Sign Up</p></div><br>
				
                    <form action="process_crisisreg.php" method="POST" enctype="multipart/form-data" style="text-align: center;">
					<input type="text" name="fname" placeholder="First name"><br><br>
					
					<input type="text" name="lname" placeholder="Last name"><br><br>
					
					<input type="text" name="uname" placeholder="Username"><br><br>
					
					<input type="email" name="email" placeholder="Email"><br><br>
					
					<input type="password" name="password" placeholder="Password"><br><br>

					<input type="password" name="password" placeholder="Repeat Password"><br><br>
					<input type="radio" name="gender" value="male" checked> Male
				    <input type="radio" name="gender" value="female"> Female
	                <input type="radio" name="gender" value="other"> Other


					<div class="desc"><button style="width: 100px; height: 50px;">Register</button></div>		
				</form>	
		</div><br><br><br><br>-->
		<!--<footer class="footer" style="margin-top: 70px;"><p>Copyright © 2020 phil</p></footer>-->
</body>
</html>