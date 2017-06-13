<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php

			if(isset($_POST['add'])) {
				$text1 = $_POST['text1'];
				$text2 = $_POST['text2'];

				if ((is_numeric($text1)) && (is_numeric($text2))) {
					$text3 = $text1 + $text2;
				}else{
					$text3 = $text1 . $text2;
				}
			}

			if(isset($_POST['edit'])) {
				$text1 = $_POST['text_edit1'];
				$text2 = $_POST['text_edit2'];
			}
		
		?>


	<form method="post" action="#">
				<button type="submit" name="add">Add</button>
				<input type="text" name="text1" value="<?php if (isset($_POST['add'])) { echo $text1; } ?>" >
				<input type="text" name="text2" value="<?php if (isset($_POST['add'])) { echo $text2; } ?>" >
				<input type="text" name="output1" value="<?php if (isset($_POST['add'])) { echo $text3; } ?>" >
				
				
	</form> <br>                  
            


	<form method="post" action="#">
			<br>
			<button type="submit" name="edit">Edit</button>
				<input type="text" name="text_edit1" value="<?php if (isset($_POST['edit'])) { echo $text1; } ?>" required>
				<input type="text" name="text_edit2" value="<?php if (isset($_POST['edit'])) { echo $text1; } ?>" required>
	</form> <br>


	<form method="post" action="#">
			<button type="reset" name="delete">Delete</button>
			<input type="text" name="text_delete" required>
	</form> <br>


	<form method="post" action="#">
			<button type="submit" name="search">Search</button>
			<input type="text" name="text_search" required>
			<input type="text" name="text_search1" required>
	</form> <br>




</body>
</html>