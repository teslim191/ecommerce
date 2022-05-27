<?php 
   $server = 'localhost';
   $user = 'root';
   $password ='';
   $db = 'ecommerce';

//    $server = 'eyvqcfxf5reja3nv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
//    $user = 'yi0apy33d4oxl29q';
//    $password ='squkl3rnisdukib0';
// //    $port = 3306;
//    $db = 'qc5bfoys8nmntmpe';

   $con = mysqli_connect($server,$user,$password,$db);
   
   if(!$con){
       die('Unable to connect to database' . mysqli_connect_error());
   }
   else{
    //    echo'Database Connected Successfully!';
   }
