<?php


if (isset($_POST['submit'])){
  $news = $_POST['email'];

  if(empty($news)){
    echo"<script>alert('All fields required')</script>";
  }
  else{
    $query = "INSERT INTO news(Email,Email_news) VALUES ('$email','$news')";
    $result = mysqli_query($con, $query);

    if ($result){
      echo"<script>alert('You Have Successfully Registered For News Update')</script>";
    }
    else{
      echo"<script>alert('Registration Unsuccessful')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method='POST'>
  <div style="background-image: url(banners/Sales_banner1.jpg); background-position: center; background-size: cover; height: 25vh;" class=" container-fluid mt-5">
      <div class="row">
        <div class="col-lg-6 pt-5">
          <h3 style="color: white;">Sign Up For Newsletters</h3>
          <p style="color: white;">Get E-mail updates about our latest shop and <span style="color: yellow;">special offers.</span></p>

        </div>
        <div class="col-lg-4 pt-5">
          
          <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp"  name="email" placeholder="Your email here">
          
        </div>
        <div class="col-lg-2 pt-5"> 

          <button id="newsletter"  name="submit" type="submit" style="color:white; background-color: rgb(113, 141, 113);  border: 0px; border-radius: 2px;margin-left: -91px;padding: 7px;">Sign Up</button>
          
        
    
          </div>
      
      </div>
    </div>
  </form>
  
</body>
</html>