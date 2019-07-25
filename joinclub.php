<html>
  <head>
    <title>Book Club</title>
    <?php include("header.php"); ?>
  </head>

  <body style="background: #36465D;">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="lenderhomepg.php">BooksClub</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="joinclub.php">Join a Club</a></li>
            <li><a href="createclub.php">Create a club</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <?php


    include("connect.php");
    $lid = $_SESSION["lid"];
    $qr = "select * from club_details";
    $res = mysqli_query($cn, $qr);

    ?>


      <div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Join A Club</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a type="button" href="lenderhomepg.php" class="btn btn-sm btn-primary btn-create">Go Back</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs"> Club ID</th>
                        <th>Club Name</th>
                         <th>Category</th>
                         <th>Action</th>
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
        <td><?php echo $row[3] ?></td>
        <td><a class="btn btn-normal" href="projoinclub.php?cid=<?php echo $row[0] ?>">Join Club</a></td>
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
