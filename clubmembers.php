<html>

	<head>
		<?php include("header.php"); ?>
  	</head>

	<body style="background: #36465D">

		<?php
		include("nav.php");
			include("connect.php");
      if($_SESSION["lcid"])
      {
          $qr = "select * from lender_details where lcid = ".$_SESSION["lcid"]."";
          $res = mysqli_query($cn, $qr);
    ?>

      <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panel Heading</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="lenderhomepg.php" type="button" class="btn btn-sm btn-primary btn-create">Go Back</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">Member ID</th>
                        <th>Member Name</th>
                        <th>Member Email</th>
                    </tr>
                  </thead>
                   <tbody>

			<?php
				while($row = mysqli_fetch_array($res))
				{

			?>
			 <tr>
                            <td class="hidden-xs"><?php echo $row[0] ?></td>
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



                        </tbody>
                </table>
              </div>
            </div>

</div></div></div>

	</body>


</html>
