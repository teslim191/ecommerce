<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cart System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body>
  <!-- Navbar start -->
  <?php require "navbar.php"; ?>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div style='margin-top:100px' class="container-fluid">
  <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php include'connection/dbase.php';
      $stmt = $con->prepare('SELECT * FROM product');
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) :
      ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
            <div  id="conn"  class="card p-2 border-secondary mb-2">
              <img src="product_image/<?= $row['product_image'] ?>" class="card-img-top" height="250px">
              <div class="card-body p-1">
                <h4 class="card-title text-center text-dark"><?= $row['product_name'] ?></h4>
                <h5 class="card-text text-center text-dark"><i class=""></i>&nbsp;&nbsp;<span>₦</span><?= number_format($row['product_price'], 2) ?></h5>
                <p><?= substr($row['product_desc'], 0, 20) . "..."    ?></p>
                <div class='star'>
  
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>

</div>
                <a href="productdetails.php?id=<?= $row['id'] ?>" style='color:white; background-color: #003399'; class="btn">read more</a>

              </div>
              <div class="card-footer p-1">
                <form action="" class="form-submit">
                  <div class="row p-2">
                    <div class="col-md-6 py-1 pl-4">
                      <b>Quantity : </b>
                    </div>
                    <div class="col-md-6">
                      <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                    </div>
                  </div>
                  <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                  <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                  <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                  <button  style='color:white; background-color: #003399';  class="btn btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                    cart</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  
  <div class="container-fluid">
    <center>
    
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
  <!-- Displaying Products End -->


  <section class='pt-5' id='pagination'>
      <center>

       
        <a href="shop1.php">2</a>
        <a href="shop2.php"><i class="fa-solid fa-arrow-right"></i></a>
      </center>
    </section>

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
</body>

</html>
