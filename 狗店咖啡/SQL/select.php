<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Select Reservations</title>

	<link rel="stylesheet" type="text/css" href="../CSS/select.css">
</head>
<body>
	<h2> Select Order Information</h2>

	<form name="form1" method="POST">
		<div class="container">
			<div class="form_group">
				<label>User:</label>
				<input type="text" name="user" placeholder="Enter Username" value="" required>
			</div>
			
			<div class="	form_group">
				<input id="submit" type="submit" name="submit" value="Select" required>
			</div>
		</div>
	</form>


	<div class="div-table">
            <table class="select_table">
                <tr>
                    <th> User </th>
                    <th> Password </th>
                    <th> Order </th>
                    <th> Note </th>
                </tr>
                <?php

                	if(isset($_POST["submit"]))
                	{
                		$post_data=file_get_contents('php://input');//获取user name
                		// echo "<div> POST BODY <br>"; 
                		// print_r($_POST);
                		// echo "</div>";
                	}

                	// echo "<br> post_data='{$post_data}'<br>";
                	//post_data接收到了 'user=bruce&submit=Select'
                	$str=explode("&", $post_data);//分割字符串

                	$str1=explode("=",$str[0]);//前半段字符串再次分割

                	echo "<br>str1[1] = {$str1[1]}<br>";//str1[1]就是我们需要的username

                	include("../connect.php");

                    $sql = "SELECT * FROM `order` WHERE `user` = '{$str1[1]}';";//变量外面一定要加引号！！！
                    $query = mysqli_query($conn,$sql);
                        if($query)
                        {
                            echo '<br>Query is correct<br><br>';
                        }
                        else
                        {
                    		echo "<script>window.alert('Query has some mistakes');</script>";
                    		//echo "<script>window.location.href='select.php';</script>";
                        }

                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {
                          echo "<tr><td>".$row["user"]."</td><td>".$row["password"]."</td><td>".$row["orders"]."</td><td>".$row["note"]."</td></tr>";
                        }
                        echo "</table>";
                     
                      $conn->close(); 
                ?>
        </div>





</body>
</html>