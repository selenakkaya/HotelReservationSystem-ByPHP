<?php include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT hotelCity FROM hotel ORDER BY hotelCity ASC");
    $edit_state=true;
?>
<html>
<head>
            <div class="content">
            <h1 align="center">Home Page</h1>
            <p align="center">Welcome  </p>
<div class="wrapper">
    <button onclick="window.location.href='index.html'">Admin Log in</button>
</div>
        </div>
<link href="style.css" type="text/css" rel="stylesheet" />
<title >Multiselect Dropdown Filter</title>
</head>
<body>
    <h2 align="center">Filter as City</h2>
    <form method="POST" name="search" action="home_page.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="hotelCity[]" multiple="multiple">
                    <option value="0" selected="selected">Select Country</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['hotelCity'] . '">' . $countryResult[$key]['hotelCity'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['hotelCity'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
            <th><strong>id</strong></th>
            <th><strong>hotelName</strong></th>
            <th><strong>hotelCity</strong></th>
            <th><strong>hotelAddress</strong></th>
            <th><strong>numOfStars</strong></th>
            <th><strong>totalNumOfRoom</strong></th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from hotel";
                    $i = 0;
                    $selectedOptionCount = count($_POST['hotelCity']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['hotelCity'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE hotelCity in (" . $selectedOption . ")";
                    
                    $results = $db_handle->runQuery($query);
                }
                if (! empty($results)) {
                    foreach ($results as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="1"><?php echo $results[$key]['id']; ?></div>
                             <input type="button" value="OK" onclick="openWin()">
                        </td>
                        <td><div class="col" id="2"><?php echo $results[$key]['hotelName']; ?> </div>
                        </td>
                        <td><div class="col" id="3"><?php echo $results[$key]['hotelCity']; ?> </div></td>
                        <td><div class="col" id="4"><?php echo $results[$key]['hotelAddress']; ?></div></td>
                        <td><div class="col" id="5"><?php echo $results[$key]['numOfStars']; ?> </div></td>
                        <td><div class="col" id="6"><?php echo $results[$key]['totalNumOfRoom']; ?> </div></td>
                    </tr>
<script>
function openWin() {
  window.open("2ndPage.php");
}
</script>
                <?php
                    }
                    ?>

                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>

<h2 align="center"> Filter as Hotel Name </h2>
<?php


$nameResult = $db_handle->runQuery("SELECT  hotelName FROM hotel ORDER BY hotelName ASC");
?>
 <form method="POST" name="search" action="home_page.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="hotelName[]" multiple="multiple">
                    <option value="0" selected="selected">Select Hotel Name</option>
                        <?php
                        if (! empty($nameResult)) {
                            foreach ($nameResult as $key => $value) {
                                echo '<option value="' . $nameResult[$key]['hotelName'] . '">' . $nameResult[$key]['hotelName'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['hotelName'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1">

                <thead>
                    <tr>
            <th><strong>id</strong></th>
            <th><strong>hotelName</strong></th>
            <th><strong>hotelCity</strong></th>
            <th><strong>hotelAddress</strong></th>
            <th><strong>numOfStars</strong></th>
            <th><strong>totalNumOfRoom</strong></th> 
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from hotel";
                    $i = 0;
                    $selectedOptionCount = count($_POST['hotelName']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['hotelName'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE hotelName in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="1"><?php echo $result[$key]['id']; ?></div>
                            <input type="button" value="OK" onclick="openWin()">
                        <td><div class="col" id="2"><?php echo $result[$key]['hotelName']; ?> </div></td>
                        <td><div class="col" id="3"><?php echo $result[$key]['hotelCity']; ?> </div></td>
                        <td><div class="col" id="4"><?php echo $result[$key]['hotelAddress']; ?></div></td>
                        <td><div class="col" id="5"><?php echo $result[$key]['numOfStars']; ?> </div></td>
                        <td><div class="col" id="6"><?php echo $result[$key]['totalNumOfRoom']; ?> </div></td>
                    </tr>
                    <script>
function openWin() {
  window.open("2ndPage.php");
}
</script>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>




</body>
</html>