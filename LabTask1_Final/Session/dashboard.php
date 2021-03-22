<?php
      session_start();
	  if(!isset($_SESSION["user"]))
	  {
		  header("Location:login.php");
	  }
	  
?>

<html>
     <body>
	       <h1>Hello<br><?php echo $_SESSION["user"];?></h1>
	</body>
</html>