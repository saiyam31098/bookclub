<?php

	include("connect.php");

	$uemail = $_REQUEST["uemail"];
	$upass = $_REQUEST["ptxt"];

	$qr = "select * from user_details where uemail='".$uemail."'and upass='".$upass."'";

	$res = mysqli_query($cn,$qr);

	if($row = mysqli_fetch_array($res))
	{

		$_SESSION["uid"] = $row[0];
		$_SESSION["uname"] = $row[1];
		$_SESSION["uemail"] = $row[4];
    if($row[8]=="borrower")
		  header("location:borrowerhomepg.php");
    else
      header("location:lenderhomepg.php");
	}
	else
	{
		header("location:login.php?msg=Invalid user id/password");
	}

?>
