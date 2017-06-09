<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$date = "Friday";

	if(isset($_POST["date"])) {
		$date = $_POST['date'];
	}

	
	if(isset($_POST['addweek'])) {
		$curr_date= $_POST['curr_date'];
		$weeks = $_POST['weektxt'];
		$date = "+" . $weeks . " week," . $curr_date;
	}

	if(isset($_POST['addmonth'])) {
		$curr_date= $_POST['curr_date'];
		$months = $_POST['monthtxt'];
		$date = "+" . $months . " month," . $curr_date;
	}

	$sdate = strtotime($date);
	echo date("M d, Y", $sdate);

?>


	<form action="" method="post">

		<button name='date' value="Monday">Monday</button>
		<button name='date' value="Tuesday">Tuesday</button>
		<button name='date' value="Wednesday">Wednesday</button>
		<button name='date' value="Thursday">Thursday</button>
		<button name='date' value="Friday">Friday</button>
	</form><br>

	<form method="post" action="">
	<input type='hidden' name='curr_date' value='<?php echo date("M d, Y", $sdate); ?> '>
	<br>
		Week <input type="number" name="weektxt" min='1' required>
		<button type="submit" name="addweek">Add Week</button>
	</form>

	<form method="post" action="">
	<input type='hidden' name='curr_date' value='<?php echo date("M d, Y", $sdate); ?> '>
	<br>
		Month <input type="number" name="monthtxt" min='1' required>
		<button type="submit" name="addmonth">Add Month</button>
	</form>

</body>
</html>