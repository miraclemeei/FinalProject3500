
<?php

require_once('mysqli_connect.php');

$query = "SELECT user,password,orders,note, FROM order"
$response = @mysqli_query($dbc,$query);
while($row = mysqli_fetch_array($response)){
    echo $row['user'];
}
?>