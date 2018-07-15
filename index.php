<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
</head>
<body>
	<style type="text/css">
		div{
			font-family: 'Chela One', cursive;
			font-size: 32px;
		}
		body{
			background-color: #b2b2b5;
  background-color: rgba(115, 0, 255, .5);
		}
		#formContainer{
			text-align: center;

		}
		/*input[type=text],input[type=password]{
			background-color: #91F;
			color: #FF6;
			margin: 12px;
			font-family: 'Comic sans MS';
		}*/
		form {
    margin: 0 auto;
    margin-top: 20px;
}
label {
    color: #559;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 24px;
}
#error{
font-size: 16px;
color: red;
}

	</style>


<div align="center"><h3> Welcome !</h3>
	<br> ready to get more organised ? </br>
 </div>
 <!--<form action ="handler.php">-->
 	<?php  
 	session_start();
 	$_SESSION['message']='';
 	$mysqli = new mysqli('localhost','root','YouLoveYours3lf','accounts');
 	if($_SERVER['REQUEST_METHOD'] == 'POST'){
 		//TO CHECK IF BOTH PASSWORDS ARE EQUAL !

 		if($_POST['password']==$_POST['confPassword']){
 			$username = $mysqli->real_escape_string($_POST['username']);
 			$email = $mysqli->real_escape_string($_POST['mailid']);
 			$password = md5($_POST['password']);
 			
 			$sql = "INSERT INTO users (username, mailid, password)"."VALUES ('$username','$email','$password')";
 			if($mysqli->query($sql) === true){
 				$_SESSION['message'] = 'registeration successful !';
 				header("loction : handler.php");
 			}
 			else{
 				$_SESSION['message'] = " registration failed !!!!!";
 			}
 		}
 		else
 		{
 			$_SESSION['message'] = "passwords don't match";
 		}

 	}
 	?>
 	<div id="formContainer">
 		<form method="post">
 			<!--<?= $_SESSION['message']?>-->
 			<!--<label for="username"> User Name :</label>-->
 			<input type="text" placeholder="Username" name="username" required="please fill">
 			<br>
 			<input type="text" name="mailid" placeholder="E-mail ID" required>
 			<br>
 			<label for="password">Password :</label>
 			<input type="password" name="password" required>
 			<br>
 			<label for="confPassword">Confirm Password :</label>
 			<input type="password" name="confPassword" required>
 			<br>
 			<input type="submit" value="Submit">
 		</form>
 	</div>
 	<div id="error">
 		<?= $_SESSION['message']?>
 	</div>

 	
 </form>
</body>
</html>