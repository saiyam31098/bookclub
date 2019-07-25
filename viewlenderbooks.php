<html>

	<head>
    <script type="text/javascript" >
  function del(id)
  {
    if(confirm("Do you want to delete "+id+" data?"))
    {
      window.location="viewlenderbooks.php?del_id="+id;
    }
  }
</script>
<?php include("header.php"); ?>
  	</head>

	<body>

		<?php
			include("connect.php");
			if($_REQUEST["del_id"]<>"")
			{
				$did = $_REQUEST["del_id"];
				$qr2 = "delete from books_details where bid=".$did;
				mysqli_query($cn, $qr2);
				$msg = "Data deleted with brand_id ".$did;
			}
      $qr = "select count(*) from books_details where boid = ".$_SESSION["lid"]."";
      $res = mysqli_query($cn, $qr);
      $row = mysqli_fetch_array($res);

      if($row==0)
      {
        echo "Sorry you haven't entered any books details";
      }
      else
      {
        $qr1 = "select * from books_details where boid = ".$_SESSION["lid"]."";
        $res1 = mysqli_query($cn, $qr1);
      ?>
      <table align="center" border="1">
  			<tr>
  				<th>Book ID</th>
  				<th>Book Name</th>
          <th>Condition</th>
          <th>isAvailable</th>
          <th>Action</th>
  			</tr>

  			<?php
  				while($row1 = mysqli_fetch_array($res1))
  				{

  			?>
  			<tr>
  				<td><?php echo $row1[0] ?></td>
  				<td><?php echo $row1[1] ?></td>
          <td><?php echo $row1[8] ?></td>
          <td><?php echo $row1[9] ?></td>
          <td><a href="brand_update.php?brand_id=<?php echo $row[0] ?>">Edit </a> <a href="javascript:del(<?php echo $row[0] ?>)">Delete</a></td>
        </tr>
        <?php
          }
        }
         ?>
       </table>
       <center><h3>Press <a href="lenderhomepg.php">here</a> to go to home page!</h3></center>
	</body>


</html>
