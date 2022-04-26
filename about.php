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
    <title>About us</title>
    <link rel="stylesheet" href="Style.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include'navbar.php' ?>

<div style='margin-top:100px;' class="container-fluid">
    <div class="row">
        <div class="col-lg-5">
            <img src="femtechlogo.png" alt="" width=100% height=140px>
        </div>
        <div class="col-lg-7">
            <h2>About Us</h2>
            <p>
            FEMTECH Information Technology Limited is one of the fastest growing Information Technology (I.T) firms in Nigeria. <br>

Its services over the years have accorded it wide acceptability among Nigerians; subsequently becoming a household name in the I.T Industry. <br>

The Company’s commitment to first class customer service has made it one of the trusted and most respected Computer sales and I.T support service <br>
providers in Nigeria. <br>

OUR SERVICES INCLUDE: <br>

1. Cell phone store, Sales and Supply of Laptops, Desktops Computers & Computer Accessories. <br>
2. Sales of apple products, iphone, macbook, etc. <br>
3. Sales and Supply of Mobile Smart Phones, etc. <br>
4. Solar and CCTV sales and installation <br>
5. Software development <br>
6. Professional I. C. T Training <br>
            </p>
            <br>
            <marquee style='color:white; background-color:#003399' behavior="" direction=""> <b>Visit our head office for your Quality Electronics at Taiwo oppo stadim gate Ilorin Kwara state.........</b></marquee>
        </div>
    </div>
</div>

<center class='pt-5'>
    <h1 style="color:#003399;"> <b> SAMSUNG </b> <span style="color:black"> <b> ad</b></span> </h1> 
    <video style="height:50vh;" autoplay muted loop> <source src="Phones/pro book 3.mp4" type="video/mp4"> </video>
</center>



<?php include'news.php' ?>
<?php include'footer.php' ?>   

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
    $(document).ready(function() {

      // Send product details to the server
      $(".addItemBtn").click(function(e) {
        e.preventDefault();
        var $form = $(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();

        var pqty = $form.find(".pqty").val();

        $.ajax({
          url: 'action.php',
          method: 'post',
          data: {
            pid: pid,
            pname: pname,
            pprice: pprice,
            pqty: pqty,
            pimage: pimage,
            pcode: pcode
          },
          success: function(response) {
            $("#message").html(response);
            window.scrollTo(0, 0);
            load_cart_item_number();
          }
        });
      });

      // Load total no.of items added in the cart and display in the navbar
      load_cart_item_number();

      function load_cart_item_number() {
        $.ajax({
          url: 'action.php',
          method: 'get',
          data: {
            cartItem: "cart_item"
          },
          success: function(response) {
            $("#cart-item").html(response);
          }
        });
      }
    });
  </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

</body>
</html>