<html>
<head>
	<?php include("header.php"); ?>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

	<body>
		<?php include("bnav.php"); ?>

		<center><h3 style="color:white;">Order Placed Successfully!</h3></center>

		<div class="container">
	<div class="row">
			<div class="col-md-10 col-md-offset-1">

					<div class="panel panel-default panel-table">
						<div class="panel-heading">
							<div class="row">
								<div class="col col-xs-6">
									<h3 class="panel-title">Order Placed</h3>
								</div>
								<div class="col col-xs-6 text-right">
									<a href="userprogrid.php" type="button" class="btn btn-sm btn-primary btn-create">Shop Again</a>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-list">
								<thead>
									<tr>
											<th class="hidden-xs">Order ID</th>
					            <th>Book Name</th>
					            <th>Status</th>
									</tr>
								</thead>

				<tbody>
					<?php
				include("connect.php");
	      $uid = $_SESSION["uid"];
				$qr = "select * from cart where uid=".$uid." and status='ongoing'";
	      $res = mysqli_query($cn, $qr);


	    while($row = mysqli_fetch_array($res))
	    {
	    ?>

	        <tr>
	            <td><?php echo $row[0] ?></td>
	            <td><?php echo $row[2] ?></td>
	            <td><?php echo $row[4] ?></td>
	        </tr>

	        <?php

	    $or = "update cart set status = 'complete' where cid = ".$row[0]."";
	    // echo $or;
	    mysqli_query($cn, $or);

	    $qr1 = "select OrderCount from books_details where bname='".$row[2]."'";
	    // echo $qr1;
	    $res1 = mysqli_query($cn, $qr1);
	    $row1 = mysqli_fetch_array($res1);


	    $sum = $row1[0] + 1;
	    $qr2 = "update books_details set OrderCount = ".$sum." where bname = '".$row[2]."'";
	    mysqli_query($cn, $qr2);
	  }

	    ?>

			</tbody>
			 </table>
		 </div>
					</div>

	</div></div></div>


    </body>

</html>
