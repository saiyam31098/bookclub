<?php

  include("connect.php");

  $bid = $_REQUEST["pid"];
  $id = $_SESSION["uid"];

  $cr = "select bname from books_details where bid=".$bid."";
  $res = mysqli_query($cn, $cr);
  $row = mysqli_fetch_array($res);
  echo $row[0];

  $qr = "insert into cart (bid, bname, uid, status) values (".$bid.", '".$row[0]."', ".$id.", 'ongoing')";
  mysqli_query($cn, $qr);

  header("location:checkout.php");

  echo $qr;

 ?>
