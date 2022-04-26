<?php
 include'connection/dbase.php';
 session_start();
 $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FITI</title>
    <link rel="stylesheet" href="/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <?php include'navbar.php'?>

      <center>
        <h4><b>Start your journey as a Technopreneur with Us <br>
        at the Femtech Information Technology Institute</b></h4>
      </center>
      <img src="femtech/fiti gate view.jpg" alt="" width="100%" height="100%">

      <div style="background-color: rgb(2, 2, 82); margin-top: 50px;" class="container" >
       
          <div class="row pt-5">
              <div class="col-lg-6">
                
                  <p style="color: white;" class="pt-5"><b>Address :</b> Opposite Femtech PC Clinic, Ibrahim Taiwo Road, Ilorin. <br>
                  <b>Contact :</b> 07059961675 <br>
                  <b>Website :</b> <a class="text-decoration-none" target='_blank' href=" www.femtechit.com/training"> www.femtechit.com/training</a> </p>

                  <img  style=" box-shadow: 2px 2px 5px black ;" class="mt-5" src="femtech/fiti inside view 2.jpg" alt=""  max-width="50%" height="200px">

              </div>
              <div class="col-lg-6">
                <img style=" box-shadow: 2px 2px 5px black ;" src="femtech/fiti front view.jpg" alt="" max-width="50%" height="200px">
      
                <img  style=" box-shadow: 2px 2px 5px black ;" class="mt-5 mb-5" src="femtech/fiti inside view.jpg" alt=""  max-width="50%" height="200px">
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