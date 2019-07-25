<?php

	include("connect.php");

	$cname = $_REQUEST["c1txt"];
  $uarea = $_REQUEST["area"];
  $ucategory = $_REQUEST["cat"];

  echo $_SESSION["uemail"];

	$qr="insert into club_details (cname, createdby, category) values ('".$cname."','".$_SESSION["uemail"]."','".$ucategory."')";
	mysqli_query($cn,$qr);

  $qr1 = "select * from club_details where cname='".$cname."'";
  $res = mysqli_query($cn,$qr1);

	if($row = mysqli_fetch_array($res))
  { 
      $qr2 = "UPDATE lender_details SET lcid=$row[0] WHERE l_email='".$_SESSION["uemail"]."'";
      mysqli_query($cn, $qr2);
  }

	header("location:lenderhomepg.php");

?>
