<!DOCTYPE html>
<?php
$link=mysqli_connect('localhost','root','','kwasu');

if (isset($_POST['submit'])) {
	$query="INSERT INTO `student_login` (`id`, `username`, `password`) VALUES (NULL, '$_POST[username]', '$_POST[password]');";
	$result=mysqli_query($link,$query);
	if ($result) {
		echo "success";
		# code...
	}
}


?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2.1-dist/css/bootstrap.css">
	
</head>

<body style=" background-image: url('background2.jpeg');background-size:cover; background-attachment:fixed;background-repeat: no-repeat;">
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class=" col-md-6 ">
				<img src="kwasu.png" style="margin-left: 150px; height:80px;">
				<div style=";color:black;font-family:sans-serif;size:6px"><h1>Welcome to Kwara State University,Malete</h1></div>

			</div>
			<div class=" col-md-6"  ;>

				<form method="POST" action="#">
					<fieldset>
						<div class="form-group">
						<input type="text" name="username" placeholder="Username" class="form-control" style="width:350px">
						Username is required
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="password" class="form-control" style="width:350px">
					</div>
					<div class="form-group">
						
						<button  type="submit" name="submit" class="btn btn-primary block full-width m-b" data-ng-click="confirmLogin($event)" data-ng-disabled="frmlogin.$invalid" style="width:350px; background-color:#3cb371">Login</button>

					</div>
						<a href="#"><small>forgot password?</small></a>
							<br>

							<p style="margin-left:90px">Do not have an account?</p>
							<div class="form-group">
								<button name="account" class="form-control" style="width:350px; background-color: white">Create an account(For Applicant only)
								</button><br>


								<p>The best you can get</p>
					</fieldset>			


					
				</form>
			
				
			
			
		</div>
		
		</div>

	</div>
	<hr>
	<footer>
		copywright Kwara State University




	</footer>
</body>
</html>