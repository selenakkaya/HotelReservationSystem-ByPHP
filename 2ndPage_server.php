<?php 

	session_start();
	$db = mysqli_connect("localhost", "root", "Selen.ak8","hotelreserv");

	// initialize variables
	
    $id="";
	$guestName ="";
	$guestAddress ="";
	$guestMail ="";
	$guestTel ="";
	$dateFrom ="";
	$dateTo="";
	$numOfGuests="";

	$edit_state=false;

	if (isset($_POST['save'])) {
		
		$Res_id =$_POST['Res_id'];
		$id=$_POST['id'];
		$guestName =$_POST['guestName'];
		$guestAddress =$_POST['guestAddress'];
		$guestMail =$_POST['guestMail'];
		$guestTel =$_POST['guestTel'];
		$dateFrom =$_POST['dateFrom'];
		$dateTo=$_POST['dateTo'];
		$numOfGuests=$_POST['numOfGuests'];






$query="INSERT INTO reservation ( id, guestName,guestAddress, guestMail, guestTel, dateFrom,dateTo,numOfGuests) VALUES ($id','$guestName','$guestAddress','$guestMail','$guestTel','$dateFrom', '$dateTo','$numOfGuests')"; 


		mysqli_query($db,$query );

		$_SESSION['message'] = "information saved"; 
		header('location:2ndPage.php');
		
 echo "<table>";
       echo"<thead>";
            echo"<tr>";
            echo"<th>Res_id</th>";
            echo"<th>id</th>";
            echo"<th>Guest Name</th>";
            echo"<th>Guest Address</th>";
            echo"<th>guestMail</th>";
            echo"<th>guestTel</th>";
            echo"<th>dateFrom</th>";
            echo"<th>dateTo</th>";
            echo"<th>numOfGuests</th>";
            
        echo"</tr>";
        echo"</thead>";
  
        echo"</table>";



	}

	

$results=mysqli_query($db,"SELECT Res_id, id, guestName,guestAddress, guestMail, guestTel, dateFrom,dateTo,numOfGuests FROM reservation");

	?>