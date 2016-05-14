

<?php  


if (isset($_POST['submit'])){	//if the submit button is clicked

	$username = ($_POST["username"]);		/*Put the username and password entered 
											into the form into variables*/
	$password = ($_POST["password"]);		

	if($username && $password){				//if username and password data is submitted

		echo("Username is: " . $username . "<br> Password is : " . $password . "<br>");

	}
	else{
		echo "Enter Name and Password";
	}

	$connection = mysqli_connect('localhost', 'root', '', 'userBase');	//Create a connection with mySql Database
																		//Username is root password is blank and using datatbase  called userbase

	if($connection){													//If we get a connection
		echo "We are conected";
	}

	else{
		die("Database connection failed");
	}

}

?>





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title></title>
</head>
<body>

<div class = "container">

	<div class="col-sm-6">

		<form action="LoginPage.php" method="post">
			<div class="form-group">
			<label for "username">Username</label>
			<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
			<label for "password">Password</label>
			<input type="password" name="password" class="form-control">
			</div>

			<input type = "submit" class = 'btn btn-primary' name="submit" value="Submit">


		</form>

	</div>

</div>

</body>
</html>