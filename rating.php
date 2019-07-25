 <html>

 	<body>

     <?php
         include("connect.php");
         $oid = $_REQUEST["oid"];
         $qr = "select * from cart where cid = ".$oid."";
         $res = mysqli_query($cn, $qr);
         $row = mysqli_fetch_array($res);

      ?>

     <h1>Update Book Rating Here!</h1>

 		<form name="frm1" method="post" action="processUpdateRating.php?oid=<?php echo $row[0] ?>">

      Book Name = <input type="text" value="<?php echo $row[2] ?>" name="bname" readonly><br/>
      New Rating = <input type="number" min="0" max="5" name="rating"><br/>

 			<input type="submit" name="submit" value="Submit">

 		</form>

 	</body>


 </html>
