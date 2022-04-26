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
    <title>Femtech Ec</title>
    <link rel="stylesheet" href="Style.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <?php
  include'navbar.php'?>


  <div id="carouselExampleInterval" class="carousel slide mt-0" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <section id="ban">
          <h4 style="margin-bottom: -8px;">Special offer</h4>
          <h2><b>Super value deals</b></h2>
          <h1 style="margin-right: 18px; margin-top: -19px;"> <b> On all products</b></h1>
          <p style="margin-top: -13px;">Save more with coupons & up to 50% off</p>
          <a href="shop.php" id="button">Shop Now!</a>
       </section>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <section style="padding-left: 46%;" id="ban2"  class="d-block w-100" alt="...">
          <h4 style="margin-bottom: -8px; color: white;">Special offer</h4>
          <h2 style="color: white
          ;"><b>Get ready for Easter Sales!</b></h2>
          <h1 style="margin-right: 18px; margin-top: -19px; color: rgb(180, 4, 4);"> <b> Great discount On all products</b></h1>
          <p style="margin-top: -13px; color: white;">Up to 50% off</p>
          <a href="shop.php" id="button">Shop Now!</a>
        </section>
      </div>
      <div class="carousel-item">
        <video id="vid" autoplay muted> <source src="Phones/s22 ultra vid.mp4" type="video/mp4"> </video>
        <div class="carousel-caption d-none d-md-block">
          <h5>Best Seller</h5>
          <p>The Samsung S22 Ultra</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  
  <div class="pt-5">
    <center>
      <h1>Featured Products</h1>
      <h6>Latest must have gadgets!</h6>
    </center>
  </div>

 <?php include'featured.php' ?>

 

  <div>

      <center style="background: url(banners/Sales_banner.jpg); width: 100%;">
        <h5 style="color: white;" class="pt-5"> <b> Seasons Sales</b> </h5>
        <h3 style="color: white;">Up to</h3>
        <h3 style = 'color: rgb(207, 10, 10);'> 70% Off</h3>
        <h3 style="color: white;" class="pb-5">All Electronic Gadgets & Accessories</h3>
      </center>

  </div>


  <!-- /////////////////////////////////////NEW Arrivals/////////////////////////////////////////////////////// -->

  <div class="container-fluid">
    <center>
      <h2 style="color:black;" class="pt-5"> <b>New Arrivals</b> </h2>
      <p style="color: rgb(104, 104, 104);">
      Check out our latest inventory stuck up</p>
    </center>

    <section class="p-1">
      <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  ">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
              <img src="Phones/redmi.jpg" class="card-img-top" alt="...">
              </div>
              <div class="card-body">
                <p class="card-text"> <b>Redmi 11 Series</b></p> 
                 <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
             </div>
             </div>
           </div>
                
              

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  ">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Phones/S22 ultra white.jpg" class="card-img-top" alt="...">
                </div>
              <div class="card-body">
                <p class="card-text"> <b>Samsung S22 Ultra pebble white</b></p> 
              <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
             </div>
             </div>
           </div>
             
                
               
               

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  ">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Phones/galaxy z tab.jpg" class="card-img-top" alt="..." height="240px">
                </div>
              <div class="card-body">
                <p class="card-text"> <b>Galaxy Z Tab</b></p> 
              <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
             </div>
             </div>
           </div>
                
              
               

          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  ">
            <div  id="conn" class="card" style="width: 18rem;">
              <div class="container-fluid pt-3">
                <img src="Laptop/pro book.jpg" class="card-img-top" alt="..." height="240px">
                </div>
              <div class="card-body">
                <p class="card-text"> <b>Samsung Book2 Pro 360</b></p> 
              <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
             </div>
             </div>
           </div>
                
                
           <div class="col-lg-3col-md-3 col-sm-3 col-xs-3   pt-5">
             <div  id="conn" class="card" style="width: 18rem;">
               <div class="container-fluid pt-3">
                 <img src="Smart watch/OSW-16_680_-_2_800x.jpg" class="card-img-top" alt="...">
              </div>
               <div class="card-body">
                 <p class="card-text"> <b>OSW-16 Smart watch</b></p> 
                <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
               </div>
             </div>
          </div>
   
             <div class="col-lg-3col-md-3 col-sm-3 col-xs-3  pt-5">
               <div id="conn"  class="card" style="width: 18rem;">
                 <div class="container-fluid pt-3">
                   <img src="Smart watch/Oraimo Smart watch.png" class="card-img-top" alt="...">
                   </div>
                 <div class="card-body">
                   <p class="card-text"> <b>Oraimo Smart Watch</b></p> 
                  <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
                 </div>
                 </div>
               </div>
         
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3   pt-5">
                 <div  id="conn" class="card" style="width: 18rem;">
                   <div class="container-fluid pt-3">
                     <img src="Laptop/lenovos145-500x500.jpg" class="card-img-top" alt="...">
                     </div>
                   <div class="card-body">
                     <p class="card-text"> <b>Lenovo 145</b></p>
                    <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
                   </div>
                   </div>
                 </div>
           
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3   pt-5">
                   <div  id="conn" class="card" style="width: 18rem;">
                     <div class="container-fluid pt-3">
                       <img src="Smart watch/Oraimo bud.png" class="card-img-top" alt="...">
                       </div>
                     <div class="card-body">
                       <p class="card-text"> <b>Oraimo Buds</b></p> 
                      <a href="shop.php" style="background-color:#003399; padding:7px; color:white; border:0px solid black;text-decoration:none;">Shop Now</a>
                     </div>
                     </div>
                   </div>

                  </div>
                </section>
               </div>
             
             
           
                      
                    
                 
                
                
               

                
               
                
                
               
    
    
    <div class="pt-5">
       <center>
        <h2 style="color: black; border-bottom: 1px solid; width: 20%;"> <b>Femtech Blog</b> </h2>
        <p>Updates on On-going and upcoming Information on the company</p>
      </center>
    </div>
    
    

      <div class="container p-3">
            <div class="row">
              <div id="fem" style="color: white; margin-right:30px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-6    pt-5">
                  <h5 style="margin-bottom: -8px;">Get a certificate degree with 100% <br>
                  practical learning at the <br></h5>
                  <h4 style="color: #000000;"><b> Femtech Information Technology Institute FITI</b></h4>
                   <a id="but" href="fiti.php"> Learn More </a>
              </div>
  
              <div id="femt" style="color: white;" class="col-lg-5 col-md-5  col-sm-5 col-xs-5   pt-5">
               <h5 style="color: #000000;">Get you Mobile & PC gadgets <br></h5>
               <h4 style="margin-top: -8px;">Repaired at a great <br> discounted price at the </h4>
               <br>
               <h2 style="color: red; margin-top: -35px;">Femtech PC Clinic</h2>
               <a id="but" href="Pc clinic.php"> Learn More </a>
  
              </div>
  
            </div>
  
      </div>
      
    

  <?php include'news.php' ?>


    <!-- ///////////////////////////////////FOOTER////////////////////////////////////// -->

<?php include'footer.php' ?>        
    <!-- CSS only -->

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