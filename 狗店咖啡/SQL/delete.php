<?php


echo "Here is the delete page<br>";


include("../connect.php");

if($conn)
{
	echo "<br>connection has no problem<br>";
}

$sql="DELETE FROM `order` WHERE `note` = 'empty';";

$query=mysqli_query($conn,$sql);

if($query)
{
 	echo "<script>window.alert('Delete succeed, User information is updated');</script>";
    echo "<script>window.location.href='../ManagementPage.php';</script>";
}
else
{
	echo "<script>window.alert('Query Failed');</script>";
    echo "<script>window.location.href='../ManagementPage.php';</script>";
}



?>