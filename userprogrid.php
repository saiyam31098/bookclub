<html>

	<head>
		<?php include("header.php"); ?>
		<script src="https://kit.fontawesome.com/81b184deeb.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
  	</head>

	<body>

		<?php
		include("bnav.php");
			include("connect.php");

			$msg="";

			$qr="SELECT * FROM `books_details`";
			$result = mysqli_query($cn, $qr);

		?>
		<div class="container">
	<div class="row">
			<div class="col-md-10 col-md-offset-1">

					<div class="panel panel-default panel-table">
						<div class="panel-heading">
							<div class="row">
								<div class="col col-xs-6">
									<h3 class="panel-title">Products Grid</h3>
								</div>
								<div class="col col-xs-6 text-right">
									<a href="borrowerHomepg.php" type="button" class="btn btn-sm btn-primary btn-create">Go Home</a>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<table class="table table-striped table-bordered table-list">
								<thead>
									<tr>
											<th class="hidden-xs">Book ID</th>
											<th>Book Name</th>
							        <th>Category</th>
											<th>Author</th>
							        <th>Owner</th>
							        <th>Book Rating</th>
							        <th>Condition</th>
											<th>isAvailable</th>
											<th>Action</th>
									</tr>
								</thead>

				<tbody>
					<?php
						while($row = mysqli_fetch_array($result))
						{
		          if($row[9]=="No")
		            continue;
		          else {

					?>
					<tr>
						<td class="hidden-xs"><?php echo $row[0] ?></td>
						<td><?php echo $row[1] ?></td>
		        <td><?php echo $row[2] ?></td>
		        <td><?php echo $row[4] ?></td>
						<td><?php echo $row[5] ?></td>
						<td><?php echo $row[7] ?></td>
						<td><?php echo $row[8] ?></td>
		        <td><?php echo $row[9] ?></td>
						<td><a href="processUserprogrid.php?pid=<?php echo $row[0] ?>"><i class="fas fa-shopping-cart"></i></a></td>
					</tr>
					<?php
		          }
						}
					?>
			</tbody>
			 </table>
		 </div>
					</div>

</div></div></div>
	</body>


</html>
