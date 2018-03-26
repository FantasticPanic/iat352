<?php  
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="css/styles2.css" rel="stylesheet" type = "text/css" >
</head>
<body>
	
	<div id = "main-wrapper">
		<h2> Homepage</h2>
		<h3>You are now logged in
		<?php  
			echo $_SESSION ['username']; 
		?>
		</h3>

	<form action = "homepage.php" method = "post">
		<input name = "logout" type = "submit" id="logout_btn" value = "Log Out"/><br>

		
</form>
<?php  
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:login.php');
 }
?>
</div>
</body>
</html>