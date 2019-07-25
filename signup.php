<html>
<head>
  <title>Book Club - SignUp</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,300' rel='stylesheet' type='text/css'>
</head>
	<body>

    <?php
        include("connect.php");
     ?>

    <h1>Sign Up Here!</h1>

		<form name="frm1" method="post" action="processSignup.php">
      <div class="white-box">
      <input type="text" name="uname" placeholder="Name"></br>
      <input type="number" name="uage" placeholder="Age"></br>
      <input type="text" name="unumber" placeholder="Phone Number"></br>
      <input type="email" name="uemail" placeholder="Email"></br>
			<input type="password" name="ptxt" placeholder="Password"></br>
      <input type="text" name="ulocation" placeholder="Location"></br>
      <select name="utype">
              <option value="borrower">Borrower</option>
              <option value="lender">Lender</option>
            </select></br>
      </div>
			<input type="submit" name="submit" value="Submit">


		
    <p>If already an existing user? Please click <a href="login.php">here</a> to Login!</p>
    </form>
		<?php

			if(isset($_REQUEST["msg"])<>"")
			{
				echo $_REQUEST["msg"];
			}

		?>

	</body>


</html>
