<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    //"lntom1971";
    $dbname = "socialdog";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Management Page of Social Dog</title>
 <link rel="stylesheet" type="text/css" href="CSS/cssfordbms.css">
 <link rel="stylesheet" type="text/css" href="../学习/E-Commerce/CSS/all.css">
 <link rel="stylesheet" type="text/css" href="../学习/E-Commerce/CSS/all.min.css" >
</head>


<script>

    function jump()
    {
        window.location.href="SQL/delete.php";
    }
</script>

<header>
    <div id="header_line1">
        <div  class ="header_line1_left">
            <span style="color: aliceblue; ">Social Dog Customer Information ManageMent System</span>
        </div>
    </div>
    <img src="img/logo.png" width="5%" height="4%" style="margin-left: 5px; float: right;">  
</header>
<body>
    <div id="navbar">
        <ul id="nav">
            <li><a href="" style="color:yellow;">DataBase Manipulation</a>
                <ul style="margin-top: 5px;">
                    <a href="SQL/add.php"><li>ADD</li></a>
                    <li><button style="background-color: black;color:white; font-size:15px; border-width: 0px;" id="navbar-button" onclick="javascript:jump()">Delete</button></li>
                    <a href="SQL/select.php"><li>Select</li></a>
                </ul>
            </li>
            <li><a href="../template/index.html" style="color:yellow;">Home</a></li>
            <li><a href="Social Dog.html" style="color:yellow;">Visit Old Site</a></li>
        </ul>
    </div>
    <div id="main">
        <p id="p1">
            DATABASE MANAGEMENT SYSTEM
        </p>
        <p id="p2" >
            THE FOLLOWING IS THE DATABASE OF SOICAL DOG FOR CUSTOMERS' INFORMATION
        </p>
        <div style="text-align:center">
            <table class="table3_10" style=" width: 70%; margin:auto;">
                <tr>
                    <th> User </th>
                    <th> Password </th>
                    <th> Order </th>
                    <th> Note </th>
                </tr>
                <?php
                    $sql = "SELECT * FROM `order`";
                    $result = mysqli_query($conn,$sql);
                        if($result->num_rows>0){
                            echo 'good';
                        }
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<tr><td>".$row["user"]."</td><td>".$row["password"]."</td><td>".$row["orders"]."</td><td>".$row["note"]."</td></tr>";
                        }
                        echo "</table>";
                     
                      $conn->close();
                ?>
        </div>
        <footer>
            <p style="color: white; text-align:center">I LOVE SOCIAL DOG!</p>
            <a href="" style="color: white; ">FAQ</a> <br>
            <a href=""style="color: white; ">Contact US</a> <br>
            <img src="img/logo.png" width="5%" height="4%" style="margin-left: 5px; float: right; clear: all; margin-top: -75px">
        </footer>

    </div>
</body>



</html>