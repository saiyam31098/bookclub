 <html>
  <head>
    <?php include("header.php"); ?>
    <?php include("bnav.php"); ?>
    <link href="style.css" rel="stylesheet" type="text/css">
  </head>

 	<body>

     <?php
         include("connect.php");
         $oid = $_REQUEST["oid"];
         $qr = "select * from cart where cid = ".$oid."";
         $res = mysqli_query($cn, $qr);
         $row = mysqli_fetch_array($res);

      ?>

     <center><h3 style="color: white;">Update Book Rating Here!</h3></center>

 <div class="container">
   <div class="jumbotron">
     <form name="frm1" method="post" action="processUpdateRating.php?oid=<?php echo $row[0] ?>">
       <div class="form-group">
     <label for="bname">Book Name</label>
     <input type="text" class="form-control" value="<?php echo $row[2] ?>" id="exampleInputEmail1" placeholder="Book Name" name="bname" readonly>
   </div>
   <div class="form-group">
  <label for="rating">New Rating</label>
  <input type="number" class="form-control" min="0" max="5" id="exampleInputEmail1" name="rating">
</div>
   <center><button type="submit" id="sub" class="btn btn-default">Submit</button></center>
   </form>
   </div>
   </div>
   <center><div style="color:white;">
   <?php
   if(isset($_REQUEST["msg"])<>"")
   {
   echo $_REQUEST["msg"];
   }
   ?>
   </div></center>

 	</body>


 </html>
