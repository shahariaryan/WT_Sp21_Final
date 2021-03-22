<?php 
   $server="localhost";
   $user="root";
   $password="";
   $db="wt_sp21_f";
   $conn= mysqli_connect($server,$user,$password,$db);
   if($conn)
   {
	   echo "connected";
   }
   else
   {
	   echo mysqli_connect_error();
   }
   $query="insert into users values (NULL,'shahariar','22342424','admin')";
   if(mysqli_query($conn,$query))
   {
	   echo "value added";
   }
   else
   {
	   echo "Probelm";
   }
 ?> 
   