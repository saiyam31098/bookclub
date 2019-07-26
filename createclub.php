<html>
	<head>
		<?php include("header.php"); ?>
		<style>
					#sub:hover{
						background-color: #36465D;
						color: white;
					}
					#sub{
						background-color: transparent;
						width: 100%;
					}
		</style>
	</head>

	<body style="background: #36465D;">
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <?php

        include("connect.php");
     ?>

		 <center><h3 style="color: white;">Please fill the following details to add a book</h3></center>

 <div class="container">
	 <div class="jumbotron">
		 <form name="frm1" method="post" action="processclubcreate.php">
			 <div class="form-group">
		 <label for="c1txt">Club Name</label>
		 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Club Name" name="c1txt">
	 </div>
	 <div class="form-group">
 <label for="area">Area</label>
 <select name="area" class="form-control">
	 	<option value="Bhatar Road">Bhatar Road</option>
	 	<option value="City Light">City Light</option>
	 	<option value="Parle Point">Parle Point</option>
	</select>
	 </div>
	 <div class="form-group">
 <label for="cat">Category</label>
 <select name="cat" class="form-control">
	 	<option value="Thriller">Thriller</option>
	 	<option value="Romance">Romance</option>
	 	<option value="Mystery/crime">Mystery/crime</option>
	 	<option value="Science Fiction & Fantasy">Science Fiction & Fantasy</option>
	 	<option value="Horror">Horror</option>
	</select>
	 </div>
	 <center><button type="submit" id="sub" class="btn btn-default">Submit</button></center>
 </form>
 </div>
 </div>
 <center><div style="color:white;">
 <?php
 if(isset($_REQUEST["msg"])<>"")
 {
	 echo $_REQUEST["msg"];
 }
	?>
 </div></center>

	</body>


</html>
