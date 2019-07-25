<?php

  include("connect.php");
  $msg = $_REQUEST["comment"];

  $uid = $_SESSION["uid"];

  $qr = "select * from user_details where uid = ".$uid."";
  $res = mysqli_query($cn, $qr);
  $row = mysqli_fetch_array($res);

  $qr1 = "insert into chat (uid, uname, type, msg) values (".$row[0].", '".$row[1]."', '".$row[8]."', '".$msg."')";
  mysqli_query($cn, $qr1);

  header("location:chat.php?msg=Message sent successfully!");
 ?>
