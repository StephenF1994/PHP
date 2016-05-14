






	













<!DOCTYPE html>

<head>
	<title>Form and PHP basics</title>
</head>
<body>



	<form   action="FormProcess.php" method="post"> <!-- action specifies where to send the data, method
													specifies by which type. We want to 'post' to 'FormTutTwo -->

			<input type="text" name = "userName" placeholder = "Enter name">
			<input type="password" name = "userPassword" placeholder = "Enter Password">

			<input type="submit" name = "submit"> <!-- Data is submitted in POST global variable. -->

	</form>





</body>







