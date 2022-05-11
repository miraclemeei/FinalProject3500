<?php
$servername = "localhost";
$username = "root";
$password = "lntom1971";
$dbname = "ONCLASS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `CARREGISTRATION`";
$result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        echo 'good';
        echo '<br>';
    }
    echo "<table><tr><th>ID</th><th>Price</th><th>CarId</th><th>Color</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["PRICE"]."</td><td>".$row["CARID"]."</td><td>".$row["COLOR"]."</td></tr>";
    }
    echo "</table>";
 
  $conn->close();
?>