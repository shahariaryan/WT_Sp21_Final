<?php
      $uname="";
	  $pass="";
	 if ($_SERVER["REQUEST_METHOD"]=="POST")
	 {
            $uname=$_POST ["uname"];
            $pass=$_POST ["pass"];
			
			if($uname=="shah" && $pass=="1657571")
			{    
		            session_start();
		            $_SESSION["user"]=$uname;
			      	header("Location:dashboard.php");
			}
	 }
?>


<html>
   <body>
        <form method="post">
            <input type="text" name="uname" Placeholder="username"><br>
            <input type="password" name="pass" placeholder="password"><br>
             <input type="submit" value="Submit">
         </form>
    </body>
</html>