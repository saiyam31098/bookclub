<html>

	<head>
		<?php include("header.php"); ?>
		<link href="style.css" rel="stylesheet" type="text/css">
  	</head>

	<body>
		<?php
			include("bnav.php");
			include("connect.php");
      if($_SESSION["uid"])
      {
          $qr = "select * from cart where uid = ".$_SESSION["uid"]."";
          $res = mysqli_query($cn, $qr);
    ?>

		<div class="container">
  <div class="row">
      <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <h3 class="panel-title">Order History</h3>
                </div>
								<div class="col col-xs-6 text-right">
									<a href="borrowerhomepg.php" type="button" class="btn btn-sm btn-primary btn-create">Go Home</a>
								</div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-list">
                <thead>
                  <tr>
											<th class="hidden-xs">Order ID</th>
							        <th>Book ID</th>
											<th>Book Name</th>
							        <th>Status</th>
							        <th>Rating</th>
                  </tr>
                </thead>

        <tbody>
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
      </tbody>
       </table>
     </div>
          </div>

</div></div></div>
	</body>


</html>
