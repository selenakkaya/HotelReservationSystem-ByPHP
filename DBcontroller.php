<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "Selen.ak8";
	private $database = "hotelreserv"; 
	private $conn;
	
        function __construct() {
        $this->conn = $this->connectDB();
	}	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
        function runQuery($query) {
                $result = mysqli_query($this->conn,$query);
                while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
                }		
                if(!empty($resultset))
                return $resultset;
	}
}

?>
<?php 
	session_start();
	$db = mysqli_connect("localhost", "root", "Selen.ak8","hotelreserv");

	// initialize variables

    $Res_id =1;
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


		$query="INSERT INTO reservation (Res_id, id, guestName,guestAddress, guestMail, guestTel, dateFrom,dateTo,numOfGuests) VALUES ('$Res_id',$id','$guestName','$guestAddress','$guestMail','$guestTel','$dateFrom', '$dateTo','$numOfGuests')"; 
		mysqli_query($db,$query );

		$_SESSION['message'] = "information saved"; 
		header('location:2ndPage.php');
	}


	$results1=mysqli_query($db,"SELECT Res_id, id, guestName,guestAddress, guestMail, guestTel, dateFrom,dateTo,numOfGuests FROM reservation");

	?>