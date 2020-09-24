<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Checking if the user entered a username.
	if (!empty($_POST['uname'])) {
		// Sanitize and store the username.
		$username = htmlspecialchars(trim($_POST['uname']));
	}
	if (!empty($_POST['password'])) {
		// Sanitize and store the password.
		$password = htmlspecialchars(trim($_POST['password']));
	}

	if (empty($_POST['uname'])) { ?>
		<script>
			alert('Please enter your username.')
		</script>
	<?php } elseif (empty($_POST['password'])) { ?>
		<script>
			alert('Please enter your password.')
		</script>
	<?php } else {
		// Sanitize and store the username and password.
		$username = htmlspecialchars(trim($_POST['uname']));
		$password = htmlspecialchars(trim($_POST['password']));

		// Hash the password.
		echo $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
	}
}
?>


<?php 
	include('includes/header.php');
?>
<body style="background: url('images/news.jpeg') no-repeat center; background-size: cover">
		<div style="background-color: red; width: 60%; margin: 15px auto; text-align: center; box-shadow: 0 0 40px pink; border-radius: 30px; ">
			<div class="desc" style="background-color: black; color: white; font-family: "><p>Login</p></div><br>
				<form style="text-align: center;" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
					<label>Username:</label><br>
					<input type="text" name="uname"><br><br>
					
					<label>Password:</label><br>
					<input type="password" name="password">

					<div class="desc"><button style="width: 100px; height: 50px;">Login</button>
					<a href="crisisregister.php">SignUp</a>...<a href="adminlogin.php">Admin</a></div>		
				</form>	
		</div>
</body>
</html>