<html>

  <head>
    <title>Book Club - Home</title>
    <?php include("header.php"); ?>
    <link href="style.css" rel="stylesheet" type="text/css">

    <style>
      .container {
        margin-top: 55px;
      }
    </style>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

  </head>

    <body>

        <?php
        include("bnav.php");

			include("connect.php");

			//session_start();

			if(!isset($_SESSION["uid"]))
			{
				header("location:userlogin.php?msg=Sorry your session expired");
			}


        ?>

        <?php

		if(isset($_REQUEST["msg"])<>"")
			echo $_REQUEST["msg"];

		?>

    <?php
      $pr = "SELECT * FROM books_details order by OrderCount desc limit 0,3";
      $res4 = mysqli_query($cn, $pr);
      ?>

    <div class="container">
  <div class="row">
      <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <h3 class="panel-title">Recommendations for you</h3>
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
                      <th>Order Count</th>
                  </tr>
                </thead>

        <tbody>
          <?php
            while($row4 = mysqli_fetch_array($res4))
            {

          ?>
          <tr>
            <td class="hidden-xs"><?php echo $row4[0] ?></td>
            <td><?php echo $row4[1] ?></td>
            <td><?php echo $row4[2] ?></td>
            <td><?php echo $row4[10] ?></td>
          </tr>
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
