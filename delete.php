<?php 

	include 'conn.php';

	$id = $_GET['id'];

	$q = "DELETE FROM `crudtbl` WHERE id = $id";

	mysqli_query($con, $q);

	header('location: modify.php');

	if($q){
		echo "<script>alert('Record Deleted from Database')</script>";
	}

	else{

		echo "Failed to delete record from database!";
	}

 ?>