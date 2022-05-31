<?php 

session_start();


$_SESSION['eno']=$_POST['eno'];
$_SESSION['ename']=$_POST['ename'];
$_SESSION['addr']=$_POST['addr'];



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="emp3.php" method="post">
	Basic salary :<input type="text" name="basic"><br>

	DA :<input type="text" name="da"><br>
	HRA :<input type="text" name="hra">
	<input type="submit" name="submit">
</form>
</body>
</html>