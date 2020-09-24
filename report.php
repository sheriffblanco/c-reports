<?php 
	include('includes/header.php');
?>
	<div style="background-image: url('images/news.jpeg');   width: 100%; position: relative;">
		<div style="text-align:center; top:15px; float: right; margin-right: 5px; ">
			
			
		<br>		
		</div><br><br>
		<h1 style="text-decoration: line-through; margin-left: 22px; color: red;">SEE SOMETHNIG SAY SOMETHING</h1>
		<h1 class="text" style="color: white;text-align: center; bottom: 20px;">Violence ever defeats it's own ends. Where you cannot drive you can always persuade. A gentle word, a kind look, a good-natured smile can work wonders and accomplish miracles. There is a secret pride in every human heart that revolts at tyranny. You may order and drive an individual, but you cannot make him respect you.</h1>
	</div><br>
	<div style="background-color: white; width: 100%; height: 550px; margin: 5px;">
		<div style="float: left; margin-left: 10px; text-align: center;">
		<h1>C-Reports Form</h1>
		<form  action="process_reports.php" method="POST" enctype="multipart/form-data">
			<label>Victim's name</label><input type="text" name="vname"> 
			<label>Address</label><input type="text" name="vaddress"><br><br>
			<label>Telephone</label><input type="text" name="vtel">
			<label>Email</label><input type="text" name="email"><br><br>
			<label>Subject's name</label><input type="text" name="subname">
			<label>Address</label><input type="text" name="subjectad"><br><br>
			<label>Telephone</label><input type="text" name="subtel"><br><br>
			<label>Details of Crime</label>	<br><textarea style ="float:left; width:500px; height: 100px;" class="form-control" id="comments" name="comments" placeholder="Details of Crime" rows="5"></textarea><br>
			<button type="Submit" style="margin-left: 15px; width: 100px; height: 70px; background-color: red; border-radius: 40px;">Submit</button>
		</form>
	</div>
	<div style="background-image: url('images/end.jpeg'); width: 640px; height: 550px; float: right;">
	</div>
	</div>
	
	
		
<footer class="footer" style="">Copyright © 2020 phil</footer>		
</body>

</html>