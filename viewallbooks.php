<html>

	<head>
<?php include("header.php"); ?>
  	</head>

	<body>
    <center><h1>ALL BOOKS</h1></center>

		<?php
			include("connect.php");
      $qr = "select lcid from lender_details where lid = ".$_SESSION["lid"]."";
      $res = mysqli_query($cn, $qr);
      $row = mysqli_fetch_array($res);

      $qr1 = "select * from books_details where bcid = ".$row[0]."";
      $res1 = mysqli_query($cn, $qr1);
      ?>
      <table align="center" border="1">
  			<tr>
  				<th>Book ID</th>
  				<th>Book Name</th>
          <th>Condition</th>
          <th>isAvailable</th>
  			</tr>

  			<?php
  				while($row1 = mysqli_fetch_array($res1))
  				{

  			?>
  			<tr>
  				<td><?php echo $row1[0] ?></td>
  				<td><?php echo $row1[1] ?></td>
          <td><?php echo $row1[8] ?></td>
          <td><?php echo $row1[9] ?></td>
        </tr>
        <?php
          }
         ?>
       </table>
       <center><h3>Press <a href="lenderhomepg.php">here</a> to go to home page!</h3></center>
	</body>


</html>
