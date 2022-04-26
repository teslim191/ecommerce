<?php 
   $server = 'localhost';
   $user = 'root';
   $password ='';
   $db = 'ecommerce';

   $con = mysqli_connect($server,$user,$password,$db);
   
   if(!$con){
       die('Unable to connect to database' . mysqli_connect_error());
   }
   else{
    //    echo'Database Connected Successfully!';
   }
?>