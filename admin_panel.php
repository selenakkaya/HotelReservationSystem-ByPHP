<?php  include('server.php'); 
if (isset($_GET['update'])){
    $id=$_GET['update'];
    $edit_state=true;
    $rec=mysqli_query($db, "SELECT id,hotelName, hotelCity, hotelAddress,numOfStars,totalNumOfRoom FROM hotel WHERE id=$id");
    $record=mysqli_fetch_array($rec);
    $id = $record['id'];
    $name = $record['hotelName'];
    $city = $record['hotelCity'];
    $address = $record['hotelAddress'];
    $numOfStars = $record['numOfStars'];
    $TotalNumOfRoom = $record['totalNumOfRoom'];

}


?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD: CReate, Update, Delete PHP MySQL</title>
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
    <table>
        <thead>
            <tr>
            <th>id</th>
            <th>Hotel Name</th>
            <th>Hotel City</th>
            <th>Hotel Address</th>
            <th>Number of Stars</th>
            <th>Total Number of Room</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['hotelName']; ?></td>
                    <td><?php echo $row['hotelCity']; ?></td>
                    <td><?php echo $row['hotelAddress']; ?></td>
                    <td><?php echo $row['numOfStars']; ?></td>
                    <td><?php echo $row['totalNumOfRoom']; ?></td>

                    <td>
                        <a href="admin_panel.php?update=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                    </td>
                    <td>
                           <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
        </table>

    <form method="post" action="server.php" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    
        <div class="input-group">
            <label>Hotel Name</label>
            <input type="text" name="hotelName" value="<?php echo $name; ?>">
        </div>
        <div class="input-group">
            <label>Hotel City</label>
            <input type="text" name="hotelCity" value="<?php echo $city; ?>">
        </div>
        <div class="input-group">
            <label>Hotel Address</label>
            <input type="text" name="hotelAddress" value="<?php echo $address; ?>">
        </div>      
        <div class="input-group">
            <label>Number of Stars</label>
            <input type="text" name="numOfStars" value="<?php echo $numOfStars; ?>">
        </div>
        <div class="input-group">
            <label>Total Number of Room</label>
            <input type="text" name="totalNumOfRoom" value="<?php echo $TotalNumOfRoom; ?>">
        </div>
        <div class="input-group">
            <?php if($edit_state==false): ?>
                <button class="btn" type="submit" name="save" >Save</button>
            <?php else: ?>
                <button class="btn" type="update" name="update" >Save</button>
            <?php endif ?>
        </div>
    </form>

</body>
</html>