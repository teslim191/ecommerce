<?php
include'connection/dbase.php';

session_start();
$email = $_SESSION['email'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $image_name = $_FILES["file"]["name"];
    $body = $_POST['body'];
     
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin View comment page</title>
</head>
<body>
    <?php include'navbar.php';?>
    <center>

        <h2  style='margin-top:100px; border-bottom:2px solid black;width: 30%;'>Customer Reviews</h2>
    </center>
    <div class="container-fluid mt-5">
        <table class='table table-bordered'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Product Image</th>
                <th>Body</th>
                <th>Delete Post</th>
            </tr>
            <?php
$query = "SELECT * FROM mess WHERE Email = '$email'";
 $result = mysqli_query($con, $query);
 if($result){
    while($arr = mysqli_fetch_array($result)){
       $id = $arr['Id'];
       $email = $arr['Email'];
       $name = $arr['Name'];
       $subject = $arr['Title'];
       $image_name = $arr['File'];
       $body = $arr['Body'];

       echo"
       <tr>
         <td>$name</td>
         <td><a class='text-decoration-none' style='color: black;' target='_blank' href='mailto:$email'>$email</a></td>
         <td>$subject</td>
         <td><img src='image/$image_name' width='50' height='50'></td>
         <td>$body</td>
         <td> <center>
         <a href='delete.php?Id=$id'> <i style='color:red;' class='fas fa-times-circle mt-3'></i></a>
         </center></td> 
       </tr>";
    }
}
?>


       </table>
       <a class='btn' style='color: white; background-color: #003399;' href='Admindashb.php'><i class="fa-solid fa-arrow-left"></i></a>

    </div>

    <?php include 'news.php';?>
    <?php include 'footer.php';?>
<?php } ?>
</body>
</html>