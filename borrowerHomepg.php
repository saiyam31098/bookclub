<html>

  <head>
    <title>Book Club - Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  </head>

    <body>

        <?php

			include("connect.php");

			//session_start();

			if(!isset($_SESSION["uid"]))
			{
				header("location:userlogin.php?msg=Sorry your session expired");
			}


        ?>

        <center>
        	<h2>Welcome <?php echo $_SESSION["uname"] ?>!!</h2><br/>
			       <a href="userprogrid.php">Products</a><br/>
             <a href="orderhistory.php">Orders</a><br/>
             <a href="chat.php">Community Chat</a><br/>
             <a href="logout.php">Logout</a>
        </center>

        <?php

		if(isset($_REQUEST["msg"])<>"")
			echo $_REQUEST["msg"];

		?>

    <center><h4>Recommendations</h1></center>
      <?php
        $pr = "SELECT * FROM books_details order by OrderCount desc limit 0,3";
        $res4 = mysqli_query($cn, $pr);
        ?>
        <table align="center" border="1">
    			<tr>
    				<th>Book ID</th>
    				<th>Book Name</th>
            <th>Category</th>
            <th>Order Count</th>
    			</tr>

    			<?php
    				while($row4 = mysqli_fetch_array($res4))
    				{

    			?>
    			<tr>
    				<td><?php echo $row4[0] ?></td>
    				<td><?php echo $row4[1] ?></td>
            <td><?php echo $row4[2] ?></td>
            <td><?php echo $row4[10] ?></td>
          </tr>
          <?php
            }
      ?>
    </body>

</html>
