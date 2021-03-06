<?php 
	session_start();
	$db = mysqli_connect("localhost", "root", "Selen.ak8","hotelreserv");

	// initialize variables
	
	$name = "";
	$city = "";
	$address = "";
	$numOfStars = "";
	$TotalNumOfRoom = "";

	$edit_state=false;

	if (isset($_POST['save'])) {
		$id=$_POST['id'];
		$name = $_POST['hotelName'];
		$city = $_POST['hotelCity'];
		$address = $_POST['hotelAddress'];
		$numOfStars = $_POST['numOfStars'];
		$TotalNumOfRoom = $_POST['totalNumOfRoom'];

		$query="INSERT INTO hotel (hotelName, hotelCity, hotelAddress,numOfStars,totalNumOfRoom) VALUES ('$name','$city','$address','$numOfStars', '$TotalNumOfRoom')"; 
		mysqli_query($db,$query );
		$_SESSION['message'] = "information saved"; 
		header('location: admin_panel.php');
	}




//delete record

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM hotel WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: admin_panel.php');
}

//update record
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name =$_POST['hotelName'];
		$city = $_POST['hotelCity'];
		$address = $_POST['hotelAddress'];
		$numOfStars = $_POST['numOfStars'];
		$TotalNumOfRoom =$_POST['totalNumOfRoom'];

	mysqli_query($db, "UPDATE hotel SET id='$id', hotelName='$name', hotelCity='$city',hotelAddress='$address',numOfStars='$numOfStars',totalNumOfRoom='$TotalNumOfRoom' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location:admin_panel.php');
	}

	$results=mysqli_query($db,"SELECT id,hotelName, hotelCity, hotelAddress,numOfStars,totalNumOfRoom FROM hotel");

	?>