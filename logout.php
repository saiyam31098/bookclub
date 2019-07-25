<?php

  session_unset();

  session_destroy();

	header("location: login.php?msg=You have successfully logged out!");

?>
