<html>

	<head>
<?php include("header.php"); ?>
<style>

textarea {
	border-radius: 10px;
	height: 40px;
	width: 66rem;
	padding: 5px;
}

textarea:focus {
	outline: none !important;
}

</style>
  	</head>

	<body>
    <center><h1>Community Chat</h1></center>
		<?php
			include("connect.php");
      if($_SESSION["uid"])
      {
          $qr = "select * from chat";
          $res = mysqli_query($cn, $qr);
    ?>
    <table align="center" border="1">
			<tr>
        <th>Msg ID</th>
				<th>User ID</th>
        <th>User Name</th>
				<th>User Type</th>
        <th>Message</th>

			</tr>

			<?php
				while($row = mysqli_fetch_array($res))
				{

			?>
			<tr>
				<td><?php echo $row[0] ?></td>
				<td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row[4] ?></td>
      </tr>
      <?php
        }
       ?>
     </table>
     <?php
      }
      ?><br/>
      <center><form name="frm1" action="processChat.php">
        	<textarea name="comment" placeholder="Type your message"></textarea><br/>
          <input type="submit" value="Submit">
        </form></center>

      <?php
		if(isset($_REQUEST["msg"])<>"")
		{
			$msg = $_REQUEST["msg"];
		}
		?>

		<center> <?php echo $msg ?> </center>
	</body>


</html>
