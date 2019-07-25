<html>

	<body>
        <center><h2>Order Placed!!</h2></center>
    	<table align="center" border="1">

        <tr>
        	  <th>Order ID</th>
            <th>Book Name</th>
            <th>Status</th>
        </tr>

        <?php
			include("connect.php");
      $uid = $_SESSION["uid"];
			$qr = "select * from cart where uid=".$uid." and status='ongoing'";
      $res = mysqli_query($cn, $qr);


    while($row = mysqli_fetch_array($res))
    {
    ?>

        <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[4] ?></td>
        </tr>

        <?php

    $or = "update cart set status = 'complete' where cid = ".$row[0]."";
    // echo $or;
    mysqli_query($or, $cn);

    $qr1 = "select OrderCount from books_details where bname='".$row[2]."'";
    // echo $qr1;
    $res1 = mysqli_query($cn, $qr1);
    $row1 = mysqli_fetch_array($res1);


    $sum = $row1[0] + 1;
    $qr2 = "update books_details set OrderCount = ".$sum." where bname = '".$row[2]."'";
    mysqli_query($qr2, $cn);
  }

    ?>

        </table><br/>


      <center><button><a href="borrowerhomepg.php">Shop Again</a></button></center>

    </body>

</html>
