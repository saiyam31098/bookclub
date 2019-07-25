<html>

	<head>

  	</head>

	<body>

		<?php
			include("connect.php");
      if($_SESSION["lcid"])
      {
          $qr = "select * from lender_details where lcid = ".$_SESSION["lcid"]."";
          $res = mysqli_query($cn, $qr);
    ?>
    <table align="center" border="1">
			<tr>
				<th>Member ID</th>
				<th>Member Name</th>
        <th>Member Email</th>
			</tr>

			<?php
				while($row = mysqli_fetch_array($res))
				{

			?>
			<tr>
				<td><?php echo $row[0] ?></td>
				<td><?php echo $row[1] ?></td>
        <td><?php echo $row[5] ?></td>
      </tr>
      <?php
        }
       ?>
     </table>
     <?php
      }
      ?>
      <center><h3>Press <a href="lenderhomepg.php">here</a> to go to home page!</h3></center>
	</body>


</html>
