<?php
 session_start();
 if(isset($_SESSION['name'])) {
     session_destroy();
     header('Refresh: 0; url=login.php');
     
     echo"<script id='alert'>
     alert('You Are Now Logged Out')
     </script>";
    }


?>


