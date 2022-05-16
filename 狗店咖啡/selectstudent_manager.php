<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    echo 'good';
    $conn = mysqli_connect('localhost','root','','socialdog') or die("Connect Failed: " . mysqli_connect_error());

    if(isset($_POST['user']))
    {
        $user = $_POST['user'];
        

        $sql = "SELECT * FROM `order` WHERE `user` = {$user};";
        $query= mysqli_query($conn,$sql);
        if($query){
            //print table
            echo "<script>window.alert('Select Succeed !');</script>";


        }else{
            echo "<script>window.alert('No such person !!!!');</script>";

            echo "<script>window.location.href='SQL/select.php';</script>";
        }

    }else{
        echo "<script>window.alert('Missing input value, please check!');</script>";
    }
}
else
{
    echo "something bad happens";
}

?>