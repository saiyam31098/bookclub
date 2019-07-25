<?php

  include("connect.php");

  $bname = $_REQUEST["bname"];
  $bcat = $_REQUEST["cat"];
  $bauth = $_REQUEST["author"];
  $bookcond = $_REQUEST["cond"];
  $avail = $_REQUEST["avail"];

  $qr = "select * from lender_details where luid = ".$_SESSION["uid"]."";
  $res = mysqli_query($cn, $qr);

  if($row = mysqli_fetch_array($res))
  {
      $query = "insert into books_details (bname, category, bcid, bauthor, bowner, boid, bcondition, isAvailable) values ('".$bname."', '".$bcat."', ".$row[3].", '".$bauth."', '".$row[1]."', ".$row[0].", '".$bookcond."', '".$avail."')";
      mysqli_query($cn, $query);
      header("location:lenderhomepg.php");
  }


 ?>
