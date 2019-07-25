<?php
  include("connect.php");
  $uid = $_SESSION["uid"];

  $qr = "select type from chat where uid = ".$uid."";
  $res = mysqli_query($cn, $qr);
  $row = mysqli_fetch_array($res);

  if($row[0]=="borrower")
    header("location:borrowerHomepg.php");
  else
    header("location:lenderhomepg.php");


 ?>
