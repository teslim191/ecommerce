<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hisense</title>
    <link rel="stylesheet" href="/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
</head>
<body>
<?php
 include'connection/dbase.php';
 session_start();
 $email = $_SESSION['email'];
?>
<?php include'navbar.php'?>
    

    <div class="container box-shadow" style="margin-top: 100px;">
        <div class="row">
            <div class="col-lg-5">
                <img class="pt-5" src="spec view/front hi" alt="" height="300" width="280">
                <img class="pt-2" src="spec view/back hi" alt="" height="230" width="300">

                <h5 class="pt-5">Hisense</h5>
                <p class="pt-3"><b>Rating:</b>
              <span  class="star">  
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>   
            </span></p>
            <p><b>Price:</b> &#8358;212,000</p>
            <a href='shop.php' id="not" style="color: white; background-color: #003399;border: none;margin: 2px;text-decoration: none;padding:7px;border-radius: 15px;">Shop Now</a>
            </div>
          

            <div class="col-lg-7">
                <h2><b>SPECIFICATIONS</b></h2>
              <b>  Intended Display Use :  </b>	Home Entertainment <br>
              <b>  Television Screen Type : </b>	Flat <br>
              <b>  Television Refresh Rate : </b>	60 Hz <br>
              <b>  Display Technology : </b>	LED <br>
              <b>  TV Screen Size	 : </b> 50" <br>
              <b>  Television 3D Technology : </b>	Passive 3D <br>
              <b>  Resolution : </b>	1080i HD <br>
              <b>  Colour : </b>	Black <br>
              <b>  Warranty Period : </b>	1 Year <br>
              <b>  Display Features : </b>	UHD <br>
            </div>
        </div>

    </div>
   
    <?php include'news.php'?> 
    <?php include'footer.php'?> 





    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
 
    <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>


