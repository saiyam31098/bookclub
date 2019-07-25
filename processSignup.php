<?php

	include("connect.php");

	$uname = $_REQUEST["uname"];
  $uage = $_REQUEST["uage"];
  $unumber = $_REQUEST["unumber"];
	$uemail = $_REQUEST["uemail"];
	$upass = $_REQUEST["ptxt"];
  $ulocation = $_REQUEST["ulocation"];
  $utype = $_REQUEST["utype"];

	$qr="insert into user_details (uname, uage, unumber, uemail, upass, ulocation, utype) values ('".$uname."',".$uage.",".$unumber.",'".$uemail."','".$upass."','".$ulocation."','".$utype."')";
	mysqli_query($cn,$qr);

  $qr1 = "select * from user_details where uemail='".$uemail."'";
  $res = mysqli_query($cn,$qr1);

	if($row = mysqli_fetch_array($res))
  {
      $qr2="insert into lender_details (lname, luid, lcid, l_location, l_email) values ('".$row[1]."',".$row[0].",0,'".$row[6]."','".$row[4]."')";
      mysqli_query($cn,$qr2);
  }

	header("location:login.php?msg=User signed up successfully! Please Login to continue.");

?>
