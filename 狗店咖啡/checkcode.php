<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
	{
		echo "Page open successfully<br><br>";

		$conn=mysqli_connect("localhost","root","","socialdog") or die("Connect Failed: " . mysqli_connect_error());

		if(isset($_POST['code']))
		{
			$code=$_POST['code'];//获取管理员口令

			//检查数据库的admin表中，是否存在该口令
			$sql="SELECT code from admin where code={$code}";

			$query=mysqli_query($conn,$sql);


			if($query)
			{
				echo "query successfully";


				// 打印口令表，看看是否成功
				echo '<br>code table:<br>';
				echo '<table border="1"><tr><td>code</td></tr>';
				while($row = mysqli_fetch_assoc($query))
				{
				    echo "<tr>".
				         "<td>{$row['code']}</td>".
				         "</tr>";

				}
				echo '</table>';


				//返回code表中，用户输入的code出现的次数，如果>0,则该用户就是管理员
				$sql2="create FUNCTION isCodeExist(code int) RETURNS INT

						begin

							declare flag int default 0;  

							return(
								select count('code') from admin where admin.code=code;
								);
						END";

				$query=mysqli_query($conn,$sql2);


				//获取$code出现的次数
				$sql3="select isCodeExist({$code}) as CodeNum;";

				$query=mysqli_query($conn,$sql3);

				$row=mysqli_fetch_assoc($query);				
				$CodeNum=$row['CodeNum'];
				echo "Code-{$code} 出现的次数为 {$CodeNum} 次";				



			}
			else
			{
				echo "query failed";
			}

		}
		else
		{
			echo "entrance code is not given";
		}

	}
	else
	{
		echo "something bad happens";
	}




?>