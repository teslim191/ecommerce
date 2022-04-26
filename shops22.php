<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung S22 details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php include'navbar.php'?>
   <section>
     <div style='margin-top:100px;' class="container-fluid pt-3">
     <div class='row'>
       <div class='col-lg-5 col-md-2'>
            <img src="phones/s22 ultra black.jpg" alt="" width=70% height='400px' id='main'>
      
          <div style='margin:30px;'>
            <img src="phones/s22 ultra black.jpg" alt="" width=30% height=100% class='small'>
            <img style='margin-left:40px;' src="phones/s22 ultra white.jpg" alt="" width=30% height=100% class='small'>
         </div>
       </div>



       <?php
 include 'connection/dbase.php';
 $stmt = $con->prepare("SELECT * FROM product WHERE Name = 'samsung' ");
 $stmt->execute();
 $result = $stmt->get_result();
 while ($row = $result->fetch_assoc()):
?>

       <div class="col-lg-7  col-md-2">


         <h6>Phone</h6>
         <h4><?= $row['Name']?></h4>
         <h3>&#8358;<?= $row['Price']?></h3>


         <form action="" class='form-submit'></form>
         <input type='number' class='pqty' name='quantity' value="<?= $row['Quantity']?>" style=' width: 70px;
    padding: 10px 5px 10px 15px;'> 
               <input type="hidden" class='pid' value="<?= $row['Id']?>">
               <input type="hidden" class='pname' value="<?= $row['Name']?>">
               <input type="hidden" class='pprice' value="<?= $row['Price']?>">
               <input type="hidden" class='pimage' value="<?= $row['File']?>">
               <input type="hidden" class='pcode' value="<?= $row['Code']?>">
               <button  id='not' type='submit' name='submit' style='color: white; background-color: #003399;border: none;margin: 2px; text-decoration:none;' class='btn addItemBtn'>Add to cart <span> <i class='fas fa-shopping-cart'></i> </span></button>
            </form>

         <h4 class=pt-5>PRODUCT DETAILS</h4>
         <?= $row['Description']?>
     </div>
     <?php endwhile; ?>
    
     </div>
     </div>
   </section>




    <?php include'news.php'?>
    <?php include'footer.php'?>

   
 <script>
       var x = document.getElementById('main');
       var y = document.getElementsByClassName('small');

       y[0].onclick = function() {
          x.src = y[0].src;
        }

       y[1].onclick = function() {
         x.src = y[1].src;
        }

    
 </script>

<script type='text/javascript'>
$(document).ready(function(){
  $(".addItemBtn").click(function(e){
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
      method: 'post'
      data: {
        pid: pid, 
        pname: pname,
        pprice: pprice, 
        pqty: pqty,
        pimage: pimage, 
        pcode: pcode
      },
      success: function(response) {
        $('#message').html(response);
        window.scrollTo(0, 0);
        load_cart_item_number();
      }
    });
  });
   
  load_cart_item_number();

  function load_cart_item_number(){
    $.ajax({
      url: 'action.php'
      method: 'get',
      data: {
        cartItem: "cart_item"
      },
      success: function(response){
        $("#cart-item").html(response);
      }
    });
  }

});
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

 
  
</body>
</html>