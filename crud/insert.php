<?php 
	
	include 'conn.php';

	if(isset($_POST['done'])){

		$uname = $_POST['uname'];
		$pswd = $_POST['pswd'];

		$q = "INSERT INTO `crudtbl`(`uname`, `pswd`) VALUES ('$uname','$pswd')";

		$query = mysqli_query($con,$q);
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		
 	</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 </head>
 <body>
 
 	<div class="col-lg-6 m-auto">

 		<form method='post'>

 			<br/>
 			<div class="card">
 				
 				<div class="card-header bg-dark">
 					
 					<h1 class="text-white text-center">Insert Operation</h1>
 				</div>

 				<label>User Name:</label>

 				<input type="text" name="uname"> <br/>

 				<label>Password:</label>

 				<input type="text" name="pswd"class="form-control"> <br/>

 				<button class="btn btn-sucess" type="submit" name="done">Submit</button>
 				<br/>

 			</div>
 			
 		</form>
 	</div>

 </body>
 </html>