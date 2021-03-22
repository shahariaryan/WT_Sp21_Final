<?php
      session_start();
	  if(!isset($_COOKIE["user"]))
	  {
		  header("Location:login.php");
	  }
	  
?>

<html>
     <body>
	       <h1>Hello<br><?php echo $_COOKIE["user"];?></h1>
	</body>
</html>