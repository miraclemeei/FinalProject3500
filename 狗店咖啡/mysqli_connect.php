<?php
$servername = "localhost";
$username = "root";
$password = "lntom1971";
$dbname = "socialdog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `order`";
$result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        echo 'good';
    }
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["user"]."</td><td>".$row["password"]."</td><td>".$row["order"]."</td></tr>";
    }
    echo "</table>";
 
  $conn->close();
?>