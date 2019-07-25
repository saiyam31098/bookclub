<?php

  include("connect.php");

  $cid = $_REQUEST["cid"];
  $lid = $_SESSION["lid"];

  $qr = "update lender_details set lcid = ".$cid." where lid = ".$lid."";
  mysqli_query($cn, $qr);

  header("location:lenderhomepg.php");

 ?>
