<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
	{
		echo "Connected Successfully";
		
		$conn=mysqli_connect("localhost","root","","socialdog") or die("Connect Failed: " . mysqli_connect_error());

		if(isset($_POST['code']))
		{
			$code=$_POST['code'];//获取管理员口令

			//检查数据库的admin表中，是否存在该口令
			$sql="SELECT code from admin where code=$code ==> table";

			$query=mysqli_query($conn,$sql);

			if($query)
			{
				echo "query successfully";
			}
			else
			{
				echo "query failed";
			}

		}

	}
	else
	{
		echo "something bad happens";
	}




?>