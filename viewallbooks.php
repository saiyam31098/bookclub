<html>

	<head>

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
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">Book ID</th>
                        <th>Book Name</th>
                        <th>Condition</th>
                        <th>isAvailable</th>
                    </tr> 
                  </thead>
  			<?php
  				while($row1 = mysqli_fetch_array($res1))
  				{

  			?>
          <tbody>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?php echo $row1[0] ?></td>
                            <td><?php echo $row1[1] ?></td>
                            <td><?php echo $row1[8] ?></td>
                            <td><?php echo $row1[9] ?></td>
                          </tr>
                        </tbody>
                </table>

        <?php
          }
         ?>
       



              
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div>
</div>
</div>
	</body>


</html>
