<html>
	<head>
		<?php include("header.php"); ?>
	</head>
	<body>

    <?php
        include("connect.php");
     ?>

    <h3>Please fill the following details to add a book</h3>

		<form name="frm1" method="post" action="processAddBook.php">

      Book Name: <input type="text" name="bname"></br>
			Category: <select name="cat">
                  <option value="Thriller">Thriller</option>
                  <option value="Romance">Romance</option>
                  <option value="Mystery/crime">Mystery/crime</option>
                  <option value="Science Fiction & Fantasy">Science Fiction & Fantasy</option>
                  <option value="Horror">Horror</option>
                </select></br>
      Author: <input type="text" name="author"></br>
      Book Condition: <select name="cond">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                      </select><br/>
			isAvailable: <input type="text" name="avail"></br>
			<input type="submit" name="submit" value="Submit">

		</form>

	</body>


</html>
