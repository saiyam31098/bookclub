<html>

	<head>
<?php include("header.php"); ?>
<link href="style.css" rel="stylesheet" type="text/css">
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

		<?php
		include("bnav.php");
			include("connect.php");
      if($_SESSION["uid"])
      {
          $qr = "select * from chat";
          $res = mysqli_query($cn, $qr);
    ?>
    	<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Community Chat</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="processChatToHome.php" type="button" class="btn btn-sm btn-primary btn-create">Go Home</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                        <th class="hidden-xs">Name</th>
						<th>User Type</th>
				        <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
			<?php
				while($row = mysqli_fetch_array($res))
				{

			?>
				<tr>
                           <td><div class="alert alert-warning" role="alert"><?php echo $row[2] ?></div></td>
					        <td><div class="alert alert-info" role="alert"><?php echo $row[3] ?></div></td>
									<td><div class="alert alert-success" role="alert"><?php echo $row[4] ?></div></td>
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




                        </tbody>
                </table>

              </div>
            </div>

</div></div></div>


	</body>


</html>
