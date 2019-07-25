<html>
  <head>
    <title>Book Club</title>
    <?php include("header.php"); ?>
  </head>

  <body>
    <center><h1>Join Club</h1></center>
    <?php

    include("connect.php");
    $lid = $_SESSION["lid"];
    $qr = "select * from club_details";
    $res = mysqli_query($cn, $qr);

    ?>

     <table align="center" border="1">
 			<tr>
 				<th>Club ID</th>
 				<th>Club Name</th>
         <th>Category</th>
         <th>Action</th>
 			</tr>

 			<?php
 				while($row = mysqli_fetch_array($res))
 				{

 			?>
 			<tr>
 				<td><?php echo $row[0] ?></td>
 				<td><?php echo $row[1] ?></td>
         <td><?php echo $row[3] ?></td>
         <td><a href="projoinclub.php?cid=<?php echo $row[0] ?>">Join Club</a></td>

         <?php
          }
         ?>
       </tr>
      </table>

      <center><h3>Press <a href="lenderhomepg.php">here</a> to go to home page!</h3></center>

     </body>
     </html>
