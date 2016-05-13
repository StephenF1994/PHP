
<?php  


if(isset($_POST['submit'])) {						//if the submit button is clicked (name submit is part of POST variable)

	$userName = $_POST['userName'];					//Putting the entered info into variables.
	$userPassword= $_POST['userPassword'];

echo "Hello " . $userName . " Welcome to the site. <br>" . "Your password is: " . $userPassword;

}



	








?>




<!DOCTYPE html>

<head>
	<title>Form and PHP basics</title>
</head>
<body>



	<form   action="FormTutTwo.php" method="post"> <!-- action specifies where to send the data, method
													specifies by which type. We want to 'post' to 'FormTutTwo -->

			<input type="text" name = "userName" placeholder = "Enter name">
			<input type="password" name = "userPassword" placeholder = "Enter Password">

			<input type="submit" name = "submit"> <!-- Data is submitted in POST global variable. -->

	</form>





</body>







