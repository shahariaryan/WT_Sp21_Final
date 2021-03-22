<?php
      $uname="";
      $pass="";
     if ($_SERVER["REQUEST_METHOD"]=="POST")
	 {
            $username=$_POST ["uname"];
            $username=$_POST ["pass"];
             $server="localhost";
             $user="root";
             $password="";
             $db="wt_sp21_f";
             $conn = mysqli_connect($server,$user,$password,$db);
             $query="insert into users values (NULL,'$uname','$pass','user')";
			 
			 if(mysqli_query($conn,$query))
			 {
				 echo "value added";
			 }
			 else
			 {
				 echo "not inserted, Error";
			 }
	 }
?>	 



<html>
   <body>
        <form method="post">
            <input type="text" name="uname" Placeholder="username"><br>
            <input type="password" name="pass" placeholder="password"><br>
             <input type="submit" value="register">
         </form>
    </body>
</html>