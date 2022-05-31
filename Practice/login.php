<?php

?>

<html>
	<body>
		<form action=login.php methode=post onsubmit="return validate()" name="form">
			USerName <input type="text" name="name">
			Password <input type="password" name="password">
			<input type="submit" name="register">
			<input type="clear" name="clear">
		</form>
	</body>
	<script>
		function validate(){
			let e_username=document.form.name.value;
			let e_password=document.form.password.value;

				if(e_username<1) {
				alert("username cant be empty");
				return false;
			}

			if(e_password<6) {
				alert("Weak password");
				return false;
			}
		}
	</script>

</html>

<!-- <html>
<head>
	<title>Login3times</title>
</head>
	<body>

		<form method=post action=login.php onsubmit=" return validate()" name="form">
			Username:<input type=text name=name><br>
			Password:<input type=password name=addr><br>
			<input type=submit value=Next >
			<input type=clear value=clear>
		</form>
		

	</body>

	<script>
		function validate(){
		let e_username=document.form.name.value;
		let e_password=document.form.addr.value;

		if(e_username.length<1) {
			alert("USerName Cant be empty");
			return false;
		} 

		 if (e_password.length<6) {
			alert("Password Is Weak");
			return false;
		}
	}


	</script>

</html> -->