<html>
	<head>
		<?php include("header.php"); ?>


		<style>
					#sub:hover{
						background-color: #36465D;
						color: white;
					}
					#sub{
						background-color: transparent;
						width: 100%;
					}
		</style>
	</head>
	<body style="background: #36465D;">

    <?php
		include("nav.php");
        include("connect.php");
     ?>

    <center><h3 style="color: white;">Please fill the following details to add a book</h3></center>

<div class="container">
	<div class="jumbotron">
		<form name="frm1" method="post" action="processAddBook.php">
  		<div class="form-group">
    <label for="bname">Book Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Book Name" name="bname">
  </div>
	<div class="form-group">
<label for="cat">Category</label>
<select name="cat" class="form-control">
							<option value="Thriller">Thriller</option>
							<option value="Romance">Romance</option>
							<option value="Mystery/crime">Mystery/crime</option>
							<option value="Science Fiction & Fantasy">Science Fiction & Fantasy</option>
							<option value="Horror">Horror</option>
	</select>
	</div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Author" name="author">
  </div>
	<div class="form-group">
<label for="cat">Category</label>
<select name="cond" class="form-control">
									<option value="Low">Low</option>
									<option value="Medium">Medium</option>
									<option value="High">High</option>
								</select>
	</div>
  <div class="form-group">
    <label for="avail">isAvailable</label>
    <input type="text" id="exampleInputEmail1" class="form-control" placeholder="Availability" name="avail">
  </div>
  <center><button type="submit" id="sub" class="btn btn-default">Submit</button></center>
</form>
</div>
</div>
<center><div style="color:white;">
<?php
if(isset($_REQUEST["msg"])<>"")
{
	echo $_REQUEST["msg"];
}
 ?>
</div></center>

	</body>


</html>
