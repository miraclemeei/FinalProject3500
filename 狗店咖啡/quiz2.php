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

$sql = "SELECT * FROM `CARREGISTRATION` WHERE CARPRICE>95000";
$result=mysqli_query($conn,$sql);
echo 'good';
echo '<br>';
if($result->num_rows==0){
    echo 'None';
}
while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ID"]."</td><td>".$row["PRICE"]."</td><td>".$row["CARID"]."</td><td>".$row["COLOR"]."</td></tr>";
  }
$conn->close();
?>