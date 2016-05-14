<?php  


if(isset($_POST['submit'])) {						//if the submit button is clicked (name submit is part of POST variable)

	$minimum = 6;
	$maximum = 20;
	$nameList = array('John', 'Frank', 'Mike', 'Phil' );

	$userName = $_POST['userName'];					//Putting the entered info into variables.
	$userPassword= $_POST['userPassword'];

	if(strlen($userPassword) < $minimum){
		echo "Password is too short";
	}

	elseif (strlen($userPassword) > $maximum) {
		echo "Password too long";
		
	}
	else if (!in_array($userName, $nameList)){
		echo "Sorry, You do not have access";
	}

	else{

echo "Hello " . $userName . " Welcome to the site. <br>" . "Your password is: " . $userPassword;
}	

}

?>