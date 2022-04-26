<?php
include 'connection/dbase.php';
session_start();
if (isset($_GET['Id'])) {
    $id = $_GET['Id'];

    $query = "DELETE FROM mess WHERE Id = '$id'";
    $result = mysqli_query($con, $query);
     if ($result){
        echo" <script>alert('Post Deleted Succcessfully')</script>";
        header('Refresh: 0; url=viewcomments.php');
     }
     else{
        echo" <script>alert('Unable To Delete Post')</script>";
        header('Refresh: 0; url=viewcomments.php');
     }
}
?>