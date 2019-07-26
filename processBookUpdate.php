<?php

	include("connect.php");

	$bid = $_REQUEST["bid"];
	$con = $_REQUEST["ctxt"];
  $avail = $_REQUEST["atxt"];

	$qr="update books_details set bcondition='".$con."', isAvailable='".$avail."' where bid=".$bid;
	echo $qr;

	mysqli_query($cn, $qr);
	header("location:viewlenderbooks.php?msg=Record updated from bid=".$bid);



?>
