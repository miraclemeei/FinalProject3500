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

	<form name="form1" action="../addstudent_manager.php" method="POST">
		<div class="container">
			<div class="form_group">
				<label>User:</label>
				<input type="text" name="user" value="" required>
			</div>
			<div class="form_group">
				<label>Password:</label>
				<input type="text" name="password" value="0000" required>
			</div>
			<div class="form_group">
				<label>Orders:</label>
				<input type="text" name="orders" value="Latte" required>
			</div>
			<div class="form_group">
				<label>Note:</label>
				<input type="text" name="note" value="empty" required>
			</div>
			<div class="form_group">
				<input id="submit" type="submit" name="submit" value="Submit" required>
			</div>
		</div>


	</form>


</body>
</html>