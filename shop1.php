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
    <title>Shop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <?php include'navbar.php' ?>
      <div>
      
      <h4 style='padding: 200px 290px; font-size: 40px'  id='east'> Happy Easter! <br>
      Get Ready For The Biggest Event Sale <br>
      Off The Year</h4>
    
      </div>

<div class="container-fluid pt-5">
    <section>
      <div class="row">
          <div class="col-lg-3 col-md-6">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
              <img src="Laptop/Acer.jpg" class="card-img-top" alt="..." height='240px'>
              </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Acer quantom 3</b></p> 
                <div  class="star">
  
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>

            </div>
            <p>&#8358;185,000</p>
            <div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>

             </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div  id="conn" class="card" style="width: 18rem;">
             
              <div class="container-fluid pt-3">
                <img src="Phones/S22 ultra white.jpg" class="card-img-top" alt="...">
                </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Samsung S22 Ultra pebble white</b></p> 
                <div  class="star">
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;870,000</p>
<div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>
      
               
             </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Phones/galaxy z tab.jpg" class="card-img-top" alt="..." height="240px">
                </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Galaxy Z Tab</b></p> 
                <div  class="star">
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;550,000</p>
<div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>

             </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Laptop/pro book.jpg" class="card-img-top" alt="..." height="240px">
                </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Samsung Book2 Pro 360</b></p> 
                <div  class="star">
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;1,000,000</p>
 <div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>

             </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 pt-5">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Smart watch/OSW-16_680_-_2_800x.jpg" class="card-img-top" alt="...">
             </div>
              <div class="card-body">
                
                <p class="card-text"> <b>OSW-16 Smart watch</b></p> 
                <div  class="star">
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;10,000</p>
<div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>
    
             </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 pt-5">
            <div id="conn"  class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Smart watch/Oraimo Smart watch.png" class="card-img-top" alt="...">
                </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Oraimo Smart Watch</b></p> 
                <div  class="star">
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;25,000</p>
<div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>

             </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 pt-5">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Laptop/lenovos145-500x500.jpg" class="card-img-top" alt="...">
                </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Lenovo 145</b></p> 
                <div  class="star">
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;255,000</p>
<div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>

             </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6 pt-5">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Smart watch/Oraimo bud.png" class="card-img-top" alt="...">
                </div>
              <div class="card-body">
                
                <p class="card-text"> <b>Oraimo Buds</b></p> 
                <div class='star'>
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
<p>&#8358;5,000</p>
<div>
                <a href="cart.php"> <i style="background-color:#003399; padding:7px; color:white; border:0px solid black; border-radius:50%; float:right;" class= 'fas fa-shopping-cart'></i> </a>
            </div>
  
             </div>
            </div>
          </div>
    
    
        </div>
      </section>
  
 </div>



    <section class='pt-5' id='pagination'>
      <center>

       <a href="shop.php"><i class="fa-solid fa-arrow-left"></i></a>
        <a href="shop1.php">2</a>
        <a href="shop2.php"><i class="fa-solid fa-arrow-right"></i></a>
      </center>
    </section>
    



    <?php include'news.php'?> 
    <?php include'footer.php'?>

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
   
 
   <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
  
</body>
</html>