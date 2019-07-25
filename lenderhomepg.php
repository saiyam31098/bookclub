<html>
<head>
  <?php include("header.php"); ?>
  <title>Book Club - Home</title>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,300' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

</head>

    <body>

        <?php

			include("connect.php");

			//session_start();

			if(!isset($_SESSION["uid"]))
			{
				header("location:login.php?msg=Sorry your session expired");
			}
      $qr = "select * from lender_details where l_email='".$_SESSION["uemail"]."'";
      $res = mysqli_query($cn,$qr);
      if($row = mysqli_fetch_array($res))
      {
          $_SESSION["lid"] = $row[0];
          if($row[3]==0)
          {

        ?>
        	<center><h2>Hello <?php echo $_SESSION["uname"] ?>!!</h2><br/>
			       <a href="joinclub.php">Join a Club</a><br/>
             <a href="createclub.php">Create a Club</a><br/>
             <a href="chat.php">Community Chat</a><br/>
             <a href="logout.php">Logout</a>
        </center>

        <?php
          }
          else {
            $_SESSION["lcid"] = $row[3];
            $_SESSION["lid"] = $row[0];

            $pr = "select cname from club_details where cid = ".$row[3]."";
            $pres = mysqli_query($cn, $pr);
            $prow = mysqli_fetch_array($pres);

        ?>

        <center>
        	<h2>Hello <?php echo $_SESSION["uname"] ?>!!</h2><br/>
            <h3>Club: <?php echo $prow[0] ?></h3>
             <a href="addBook.php">Add Book</a><br/>
             <a href="viewlenderbooks.php">Your Books</a><br/>
			       <a href="viewallbooks.php">Books</a><br/>
             <a href="clubmembers.php?">Members</a><br/>
             <a href="chat.php">Community Chat</a><br/>
             <a href="logout.php">Logout</a>
        </center>

        <?php

          }
        }

         ?>

    </body>

</html>
