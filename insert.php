<?php 
	
	include 'conn.php';

	$Nerr = $Perr = "";
	//$uname = $pswd ="";

	function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;

		}

	if(isset($_POST['done'])){

		$uname = $_POST['uname'];
		$pswd = $_POST['pswd'];

		$q = "INSERT INTO `crudtbl`(`uname`, `pswd`) VALUES ('$uname','$pswd')";

		$query = mysqli_query($con,$q);


		if(empty($_POST['uname'])){
			$Nerr = "Name is required!";
		} else{
			$uname = test_input($_POST['uname']);

			if(!preg_match("/^[a-zA-Z-' ]*$/",$uname)){
				$Nerr = "Only letters and white space allowed";
			}
		}
		

		if(empty($_POST['pswd'])){
			$Perr = "Password is required";
		} else{
			$pswd = test_input($_POST['pswd']);

			if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pswd)){
				$Perr = "Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters";
			}
		}



	}

	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		CRUD Operations Demo
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
	 <form action="insert.php" method="post">

	 
	 	<div class="col-lg-6 m-auto">

	 		<form method='post'>

	 			<br/>
	 			<div class="card">
	 				
	 				<div class="card-header bg-dark">
	 					
	 					<h1 class="text-white text-center">Insert Operation</h1>
	 				</div>


	 				<label>User Name:</label>

	 				<input type="text" name="uname">
	 				<span class="error">* <?php echo $Nerr;?></span>
  					 <br/>

	 				<label>Password:</label>

	 				<input type="text" name="pswd"class="form-control"><span class="error">* <?php echo $Perr;?></span> <br/>



	 				<button class="btn btn-success" type="submit" name="done">Submit</button>
	 				<br/>
	 				
	 				<button class="btn btn-success" type="button" name="done"><a href="/crud/main.php">Cancel</a></button>
	 				<br/>

	 				

	 			</div>
	 			
	 		</form>
	 	</div>
	</form>
 </body>
</html>