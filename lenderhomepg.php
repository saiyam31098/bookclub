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
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="lenderhomepg.php">BooksClub</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="joinclub.php">Join a Club</a></li>
                <li><a href="createclub.php">Create a club</a></li>
                <li><a href="chat.php">Community Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <?php
          }
          else {
            $_SESSION["lcid"] = $row[3];
            $_SESSION["lid"] = $row[0];

            $pr = "select cname from club_details where cid = ".$row[3]."";
            $pres = mysqli_query($cn, $pr);
            $prow = mysqli_fetch_array($pres);

        ?>

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="lenderhomepg.php">BooksClub</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="addBook.php">Add Book</a></li>
                <li><a href="viewlenderbooks.php">Your Books</a></li>
                <li><a href="viewallbooks.php">Books</a></li>
                <li><a href="clubmembers.php">Members</a></li>
                <li><a href="chat.php">Community Chat</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <?php

          }
        }

         ?>

    </body>

</html>
