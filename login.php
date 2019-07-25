<html>
<head>
	<title>Book Club - LogIn</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,300' rel='stylesheet' type='text/css'>
</head>
	<body>


    <h1>Login Here!</h1>

		<form name="frm1" method="post" action="processLogin.php">
		<div class="white-box">
     		<input type="email" name="uemail" placeholder="Email"></br>
			<input type="password" name="ptxt" placeholder="Password"></br>
		</div>
			<input type="submit" name="submit" value="Submit">

		    <p><a href="signup.php">Sign Up!</a></p>
		    </form>

		<center><?php

			if(isset($_REQUEST["msg"])<>"")
			{

				echo $_REQUEST["msg"];
			}

		?></center>

	</body>


</html>
