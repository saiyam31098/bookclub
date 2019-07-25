<?php

    include("connect.php");
    $oid = $_REQUEST["oid"];
    $bname = $_REQUEST["bname"];
    $rating = $_REQUEST["rating"];

    $qr = "update cart set rate = ".$rating." where cid = ".$oid."";
    mysqli_query($cn, $qr);

    $cr = "select bratesum, bratecount from books_details where bname = '".$bname."'";
    $res = mysqli_query($cn, $cr);
    $row = mysqli_fetch_array($res);

    $s = $row[0];
    $s = $s + $rating;
    $c = $row[1] + 1;
    $rate = $s/$c;

    $cr1 = "update books_details set brating=".$rate.", bratesum=".$s.", bratecount=".$c." where bname = '".$bname."'";
    mysqli_query($cn, $cr1);


    header("location:orderhistory.php");

 ?>
