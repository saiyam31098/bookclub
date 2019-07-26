<html>
<head>
	<?php include("header.php"); ?>
	<?php include("bnav.php"); ?>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

	<body>

		<?php
			include("connect.php");

			$bid = $_REQUEST["bid"];

			$qr = "select * from books_details where bid=".$bid;

			$res = mysqli_query($cn, $qr);

			$row = mysqli_fetch_array($res);

		?>

		<center><h3 style="color: white;">Update Book Rating Here!</h3></center>

<div class="container">
	<div class="jumbotron">
		<form name="frm1" method="post" action="processBookUpdate.php">
			<div class="form-group">
		<label for="bid">Book ID</label>
		<input type="text" class="form-control" value="<?php echo $row[0] ?>" id="exampleInputEmail1" placeholder="Book ID" name="bid" readonly>
	</div>
	<div class="form-group">
 <label for="btxt">Book Name</label>
 <input type="text" class="form-control" value="<?php echo $row[1] ?>" id="exampleInputEmail1" name="btxt" readonly>
</div>
<div class="form-group">
<label for="ctxt">Condition</label>
<input type="text" class="form-control" value="<?php echo $row[8] ?>" id="exampleInputEmail1" name="ctxt">
</div>
<div class="form-group">
<label for="atxt">Book Name</label>
<input type="text" class="form-control" value="<?php echo $row[9] ?>" id="exampleInputEmail1" name="atxt">
</div>
	<center><button type="submit" id="sub" class="btn btn-default">Update</button></center>
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
