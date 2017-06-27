<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	if(isset($_POST['edit'])) {
		$text = $_POST['text'];
		$date = date("M d, Y, h:i:sa");
		$a = $text. " " .$date;
	}
?>


 	<form method="post" action="#">
	<input type="text" name="text" > 
	<button type="submit" name="edit">Submit</button>
	</form><br>

	<form method="post" action="#">
	<input type="text" name="text1" value="<?php if(isset($_POST['edit'])) { echo $a; } ?> "> 
	<input type="submit" value="Clear"> 
	</form>

</body>
</html>