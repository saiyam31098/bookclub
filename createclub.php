<html>

	<body>

    <?php
        include("connect.php");
     ?>

    <h3>Please enter the details to create a club</h3>

		<form name="frm1" method="post" action="processclubcreate.php">

      Club Name: <input type="text" name="c1txt"></br>
      Area: <select name="area">
              <option value="Bhatar Road">Bhatar Road</option>
              <option value="City Light">City Light</option>
              <option value="Parle Point">Parle Point</option>
            </select></br>
			Category: <select name="cat">
                  <option value="Thriller">Thriller</option>
                  <option value="Romance">Romance</option>
                  <option value="Mystery/crime">Mystery/crime</option>
                  <option value="Science Fiction & Fantasy">Science Fiction & Fantasy</option>
                  <option value="Horror">Horror</option>
                </select></br>
			<input type="submit" name="submit" value="Submit">

		</form>

		<?php

			if(isset($_REQUEST["msg"])<>"")
			{

				echo $_REQUEST["msg"];
			}

		?>

	</body>


</html>
