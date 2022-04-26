<?php
include'connection/dbase.php';
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];

if (!isset($_SESSION['name'])){
    header('Refresh : 0; url=login.php');
    echo"<script>('You are Unauthorised to view this page')</script>";
}
else {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Profile</title>
</head>
<body>
    <?php include'navbar.php'?>

    
    <?php 
    $query = "SELECT * FROM signup WHERE Email = '$email' ";
    $result = mysqli_query($con, $query);
    if($result){
        while($arr = mysqli_fetch_array($result)){
            $name = $arr['Name'];
            $email = $arr['Email'];
            $img = $arr['File'];
            $add = $arr['Address'];
            $con = $arr['Country'];
            $sta = $arr['State'];
            $city = $arr['City'];
          }

           

    

            echo"
            <center>
            <h1 style='margin-top:150px; border-bottom: 2px solid black;width: 25%;'>
            Dashboard </h1>
            </center>
            <section class='pt-5'>
            <div class='container-fluid'>
            <div class='row'>
            <div id='dash' class='col-lg-3'>
            <center>
            <img src='image/$img' alt='' class='mt-5' height='100px' style='border-radius:50%; border:7px solid #02ec92; width: 32%; padding:3px;'> <br>
            <p class='mt-2'>
            <b>ID :</b> $name <br> 
            <b>Email :</b> $email
           </p>
           </center>
           
        <section style='padding:15px;'id='ddcon'>
        <a id='dcon' href='cart.php'><i class='fa-solid fa-shopping-cart fa-2x'></i> Unpaid items </a> <br> <br> <br>
          <a id='dcon' href='logout2.php'><i class='fa-solid fa-arrow-right-from-bracket fa-2x'></i> Logout </a> <br>
            </tbody>
            </table>
        </section>
            
            </div>

            <div class='col-lg-9'>
            <section class='p-1'>
              <div class='row'>
                  <div class='col-lg-3 col-md-6'>
                    <div  id='conn' class='card' style='width: 14rem;'>
                      <div class='container-fluid pt-3'>
                      <img src='Phones/redmi.jpg' class='card-img-top' height='195px' alt='...'>
                      </div>
                      <div class='card-body'>
                        <p class='card-text'> <b>Redmi 11 Series</b></p> 
                         <a href='shop.php' style='background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;'>Shop Now</a>
                     </div>
                     </div>
                   </div>
                        
                      
        
                  <div class='col-lg-3 col-md-6'>
                    <div  id='conn' class='card' style='width: 14rem;'>
                      <div class='container-fluid pt-3'>
                        <img src='Phones/S22 ultra white.jpg' class='card-img-top' alt='...'>
                        </div>
                      <div class='card-body'>
                        <p class='card-text'> <b>Samsung S22 Ultra pebble white</b></p> 
                      <a href='shop.php' style='background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;'>Shop Now</a>
                     </div>
                     </div>
                   </div>

                   <div class='col-lg-3 col-md-6'>
                   <div  id='conn' class='card' style='width: 14rem;'>
                     <div class='container-fluid pt-3'>
                       <img src='Laptop/Acer.jpg' class='card-img-top' alt='...'>
                       </div>
                     <div class='card-body'>
                       <p class='card-text'> <b>Acer Quantom</b></p> 
                     <a href='shop.php' style='background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;'>Shop Now</a>
                    </div>
                    </div>
                  </div>
                  </div>
                  </section>
                 </div>
                 
        </div>
        </div>
            </section>";
                
}
?>

    <?php include'news.php'?>
    <?php include'footer.php'?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
 
   <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
  
<?php } ?>
</body>
</html>