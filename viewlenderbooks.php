<html>

	<head>

    <script type="text/javascript" >
  function del(id)
  {
    if(confirm("Do you want to delete "+id+" data?"))
    {
      window.location="viewlenderbooks.php?del_id="+id;
    }
  }
</script>
<?php include("header.php"); ?>
  	</head>

	<body style="background: #36465D;">

		<?php
		include("nav.php");
			include("connect.php");
			if($_REQUEST["del_id"]<>"")
			{
				$did = $_REQUEST["del_id"];
				$qr2 = "delete from books_details where bid=".$did;
				mysqli_query($cn, $qr2);
				$msg = "Data deleted with brand_id ".$did;
			}
      $qr = "select count(*) from books_details where boid = ".$_SESSION["lid"]."";
      $res = mysqli_query($cn, $qr);
      $row = mysqli_fetch_array($res);

      if($row==0)
      {
        echo "Sorry you haven't entered any books details";
      }
      else
      {
        $qr1 = "select * from books_details where boid = ".$_SESSION["lid"]."";
        $res1 = mysqli_query($cn, $qr1);
      ?>
      <div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Your Books</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a type="button" href="lenderhomepg.php" class="btn btn-sm btn-primary btn-create">Go Home</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs"> Book ID</th>
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
                            <td align="center">
                              <a href="book_update.php?bid=<?php echo $row1[0] ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a href="javascript:del(<?php echo $row1[0] ?>)" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?php echo $row1[0] ?></td>
                            <td><?php echo $row1[1] ?></td>
                            <td><?php echo $row1[8] ?></td>
                            <td><?php echo $row1[9] ?></td>
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
