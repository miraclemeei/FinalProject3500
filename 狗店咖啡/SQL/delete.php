<?php


echo "Here is the delete page<br>";


include("../connect.php");


$sql="DELETE FROM order where note=''";

$query=mysqli_query($conn,$sql);

if($query)
{
	echo "query successfully";

	header("Location:../ManagementPage.php");


}
else
{
	echo "query failed";
}



?>