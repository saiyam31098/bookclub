<html>

	<head>

  	</head>

	<body>

		<?php
			include("connect.php");

			$msg="";

			$qr="SELECT * FROM `books_details`";
			$result = mysqli_query($cn, $qr);

		?>
    <center><h1>Products Grid</h1></center>

		<table align="center" border="1">
			<tr>
				<th>Book ID</th>
				<th>Book Name</th>
        <th>Category</th>
				<th>Author</th>
        <th>Owner</th>
        <th>Book Rating</th>
        <th>Condition</th>
				<th>isAvailable</th>
				<th>Action</th>
			</tr>

			<?php
				while($row = mysqli_fetch_array($result))
				{
          if($row[9]=="No")
            continue;
          else {

			?>
			<tr>
				<td><?php echo $row[0] ?></td>
				<td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[4] ?></td>
				<td><?php echo $row[5] ?></td>
				<td><?php echo $row[7] ?></td>
				<td><?php echo $row[8] ?></td>
        <td><?php echo $row[9] ?></td>
				<td><a href="processUserprogrid.php?pid=<?php echo $row[0] ?>">Add to Cart </a></td>
			</tr>
			<?php
          }
				}
			?>

		</table>
    <center><h3>Press <a href="borrowerhomepg.php">here</a> to go to home page!</h3></center>
	</body>


</html>
