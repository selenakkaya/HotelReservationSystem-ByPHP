<?php  include '2ndPage_server.php';?>
<!DOCTYPE html>
<html>
<p><a href="home_page.php">GO BACK TO HOME PAGE</a> </p>
<head>

	<style>
		
body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.message {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
	</style>
</head>
<body>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="message">
            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>

    <?php endif ?>
    <?php if(isset($_SESSION['message'])): ?>
        <div class="message">
            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
  

        <form method="post" action="2ndPage_server.php" >
    <input type="hidden" name="Res_id" value="<?php echo $Res_id; ?>">
    
        <div class="input-group">
            <label>id</label>
            <input type="text" name="id" value="<?php echo $id; ?>">
        </div>
        <div class="input-group">
            <label>Guest Name</label>
            <input type="text" name="guestName" value="<?php echo $guestName; ?>">
        </div>
        <div class="input-group">
            <label>Guest Address</label>
            <input type="text" name="guestAddress" value="<?php echo $guestAddress; ?>">
        </div>      
        <div class="input-group">
            <label>Guest Mail</label>
            <input type="text" name="guestMail" value="<?php echo $guestMail; ?>">
        </div>
        <div class="input-group">
            <label>Guest Tel</label>
            <input type="text" name="guestTel" value="<?php echo $guestTel; ?>">
        </div>
        <div class="input-group">
            <label>dateFrom</label>
            <input name="dateFrom" type="date" value=" <?php if(isset($_POST['dateFrom'])){ echo $_POST['dateFrom']; }?> " />
        </div>
        <div class="input-group">
            <label>dateTo</label>
            <input name="dateTo" type="date" value=" <?php if(isset($_POST['dateTo'])){ echo $_POST['dateTo']; }?> " />
        </div>
        <div class="input-group">
            <label>numOfGuests</label>
            <input type="text" name="numOfGuests" value="<?php echo $numOfGuests; ?>">
        </div>
        <div class="input-group">
            
                <button class="btn" type="submit" name="save" >Save</button>
            
        </div>
      
       
    </form>

</body>
</html> 


</body>
</html>