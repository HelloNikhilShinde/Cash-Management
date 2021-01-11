<?php 
include('NavigationBar.php');
include('config.php');

//selecting data to show
$sql = "SELECT * FROM `allusers`";
$result = mysqli_query($con, $sql);
mysqli_close($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <section class="container">
        <div>
            <table class="center">
                <tr>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Balance</th>
                </tr>
                <?php 
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $sno = $sno + 1;
                        echo "<tr>
                        <td scope='row'>". $sno . "</td>
                        <td>". $row['name'] . "</td>
                        <td>". $row['email'] . "</td>
                        <td>". $row['balance'] . "</td>
                        </tr>";
                    }
                ?>
            </table>
        </div>
        <div class="primary">
            <a href="./UserSelection.php" class="btn">Select User &#128204; </a>
            <a href="./index.php" class="btn">Home &#127968; </a>

        </div>
    </section> 

    
</body>
</html>
                        
    
		