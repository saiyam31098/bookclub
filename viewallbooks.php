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
      <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">All Books</h3>
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
                        <th class="hidden-xs">Book ID</th>
                        <th>Book Name</th>
                        <th>Condition</th>
                        <th>isAvailable</th>
                    </tr> 
                  </thead>

          <tbody>
  			<?php
  				while($row1 = mysqli_fetch_array($res1))
  				{

  			?>
                          <tr>
                            <td class="hidden-xs"><?php echo $row1[0] ?></td>
                            <td><?php echo $row1[1] ?></td>
                            <td><?php echo $row1[8] ?></td>
                            <td><?php echo $row1[9] ?></td>
                          </tr>
        <?php
          }
         ?>
         
                        </tbody>
         </table>
       </div>
            </div>

</div>
</div>
</div>
	</body>


</html>
