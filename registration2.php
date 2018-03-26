<?php
	require "config.php";


?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link href="css/styles2.css" rel="stylesheet" type = "text/css" >
</head>
<body>
	
	<div id = "main-wrapper">
		<h2>Registration Form</h2>
	

	<form action = "registration2.php" method = "post">
		<label>First Name: </label>
		<input name = "firstName" type = "text" class = "inputvalues" placeholder = "Type your first name" required /><br>
		<label>Last Name: </label>
		<input name= "lastName"type = "text" class = "inputvalues" placeholder = "Type your last name" required/><br>
		<label>Username: </label>
		<input name= "username"type = "text" class = "inputvalues" placeholder = "Type your username" required/><br>
		<label>Email: </label>
		<input name= "email" type = "text" class = "inputvalues" placeholder = "Type your email" required/><br>
		
		<label>Select Your Favorite Team</label>
		<select class = "faveTeam" name="faveTeam">
			<option value = "ATL">Atlanta Hawkes</option>
			<option value = "BOS">Boston Celtics</option>
			<option value = "BKN">Brooklyn Nets</option>
			<option value = "CHA">Charlotte Hornets</option>
			<option value = "CHI">Chicago Bulls</option>
			<option value = "CLE">Cleveland Cavaliers</option>
			<option value = "DAL">Dallas Mavericks</option>
			<option value = "DEN">Denver Nuggets</option>
			<option value = "DET">Detroit Pistons</option>
			<option value = "GSW">Golden State Warriors</option>
			<option value = "HOU">Houston Rockets</option>
			<option value = "IND">Indiana Pacers</option>
			<option value = "LAC">LA Clippers</option>
			<option value = "LAL">Los Angeles Lakers</option>
			<option value = "MEM">Memphis Grizzlies</option>
			<option value = "MIA">Miami Heat</option>
			<option value = "MIL">Milwaukee Bucks</option>
			<option value = "MIN">Minnesota Timberwolves</option>
			<option value = "NOP">New Orleans Pelicans</option>
			<option value = "NYK">New York Knicks</option>
			<option value = "OKC">Oklahoma City Thunder</option>
			<option value = "ORL">Orlando Magic</option>
			<option value = "PHI">Philadelphia 76ers</option>
			<option value = "PHX">Pheonix Suns</option>
			<option value = "POR">Portland Trail Blazers</option>
			<option value = "SAC">Sacremento Kings</option>
			<option value = "SAS">San Antonio Spurs</option>
			<option value = "TOR">Toronto Raptors</option>
			<option value = "UTA">Utah Jazz</option>
			<option value = "WAS">Washington Wizards</option>
		</select><br>
		
		<label>Password: </label>
		<input name= "password" type = "password" class = "inputvalues" placeholder = "Type your password" required /><br>
		<label>Confirm Password: </label>
		<input name= "cpassword"type = "password" class = "inputvalues" placeholder = "Re-type your password" required/><br><br>

		

		<input name= "createacct_btn" type="submit" id= "createacct_btn" value= "Create Account"/><br>
		<a href="login.php"><input name = "back_btn" type="button" id= "back_btn" value= "<< Go Back to Login"/></a>
</form>

<?php

//will check whether or not the create account button is pressed
if(isset($_POST['createacct_btn'])){
	//echo '<script type = "text/javascript"> alert("TEST IF THIS WORKS") </script>';
	 $firstName = $_POST['firstName'];
	 $lastName	= $_POST['lastName'];
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $cpassword = $_POST['cpassword'];
	 $faveTeam = $_POST['faveTeam'];

	 //check the first password and confirmed password, see if they match
	 // make a query on the database
	if($password == $cpassword){
			$query= "SELECT * FROM users WHERE username='$username'";

			//pass in connection variable from config.php and query
			$query_run = mysqli_query($db,$query);

			//checks number of rows when the query was executed
			if(mysqli_num_rows($query_run)>0)
			{
				//if this username already exists
				echo '<script type = "text/javascript"> alert("This username already exists")</script>';
			}
			else
			{
				//inserts values into MySQL database
				$query = "INSERT INTO users VALUES (NULL, '$username', '$firstName','$lastName','$email', '$password', '$faveTeam')";
				$query_run = mysqli_query($db, $query);

				//if it runs sucessfully
				if($query_run)
				{ 
					echo '<script type = "text/javascript"> alert("Username registered")</ script>';
				}
				else
				{ 
					echo '<script type= "text/javascript"> alert("Oops! There was an error in the database") </script>';

				}
			}
	
	}
	else {

		echo '<script type= "text/javascript"> alert("Please check that password and confirm password match") </script>';

	}

}
?>
</div>
</body>
</html>