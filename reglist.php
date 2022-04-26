<?php
include 'connection/dbase.php';
session_start();
$email = $_SESSION['email'];


if (isset($_POST['submit'])) {
    $news = $_POST['email'];
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>News reg list</title>
</head>
<body>
    <?php include 'navbar.php';?>
    <center>

        <h2 style='margin-top:100px; border-bottom:2px solid black;width: 25%;'>News Update</h2>
    </center>
    <div class="container mt-5">
        <table class="table table-bordered table-stripped">
           <tr>
               <th>News Update Registration List</th>
           </tr>

           <?php
          
           $query = "SELECT * FROM news WHERE Email = '$email'";
           $result = mysqli_query($con, $query);
             if($result){
                   while($arr = mysqli_fetch_array($result)){
                       $id = $arr['Id'];
                       $email = $arr['Email_news'];
                    

                       echo"
                       <tr>
                       <td> <li> $email </li></td>
                       </tr>
                       ";
                    }
                }
           ?>
        </table>
        <a class='btn' style='color: white; background-color: #003399;' href="Admindashb.php"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
    <?php include 'news.php';?>
    <?php include 'footer.php';?>
<?php } ?>
</body>
</html>