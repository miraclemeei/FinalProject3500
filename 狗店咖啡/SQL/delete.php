<?php


echo "Here is the delete page<br>";


include("../connect.php");

if($conn)
{
	echo "<br>connection has no problem<br>";
}
$sql="DELETE FROM order where note='empty';";

$query=mysqli_query($conn,$sql);

if($query)
{
	echo "<br>query successfully";

	header("Location:../ManagementPage.php");


}
else
{
	echo "<br>query failed";
}



?>