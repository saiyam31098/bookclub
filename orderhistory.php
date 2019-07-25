<html>

	<head>

  	</head>

	<body>
    <center><h1>Order History</h1></center>
		<?php
			include("connect.php");
      if($_SESSION["uid"])
      {
          $qr = "select * from cart where uid = ".$_SESSION["uid"]."";
          $res = mysqli_query($cn, $qr);
    ?>
    <table align="center" border="1">
			<tr>
				<th>Order ID</th>
        <th>Book ID</th>
				<th>Book Name</th>
        <th>Status</th>
        <th>Rating</th>
			</tr>

			<?php
				while($row = mysqli_fetch_array($res))
				{

			?>
			<tr>
				<td><?php echo $row[0] ?></td>
				<td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[4] ?></td>
        <td><?php echo $row[5] ?><a href="rating.php?oid=<?php echo $row[0] ?>"> Update rating</a></td>

        <?php
         }
        ?>
      </tr>
     </table>
     <?php
      }
      ?>
      <center><h3>Press <a href="borrowerhomepg.php">here</a> to go to home page!</h3></center>
	</body>


</html>
