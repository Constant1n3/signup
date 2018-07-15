<!DOCTYPE html>
<html>
<head>
	<title>Let's Get started ! </title>
	<link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet">
</head>
<body>
<style type="text/css">
	
</style>

hello there ! 
<?php session_start();



?>
<div class="welcome">
	<div class="alert aler-success"><?= $_SESSION['message'] ?> </div>
	Welcome <span class="user"><?= $_SESSION['username'] ?></span>
</div>
</body>
</html>