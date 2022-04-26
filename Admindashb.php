<?php
  include'connection/dbase.php';
  session_start();
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];

if (!isset($_SESSION['email'])){
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
    <?php include 'navbar.php';?>

    
    <?php 
    $query = "SELECT * FROM signup WHERE Email = '$email' ";
    $result = mysqli_query($con, $query);
    if($result){
        while($arr = mysqli_fetch_array($result)){
            $name = $arr['Name'];
            $email = $arr['Email'];
            $img = $arr['File'];
          
            echo"
            <center>
            <h1 style='margin-top:150px; border-bottom: 2px solid black;width: 35%;'>
           Admin Dashboard </h1>
            </center>
            <section class='pt-5'>
            <div class='container'>
            <div class='row'>
            <div id='dash' class='col-lg-3'>
            <center>
            <img src='image/$img' alt='' class='mt-5' height='100px' style='border-radius:50%; border:7px solid #02ec92; width: 32%; padding:3px;'> <br>
            <p class='mt-2'>
            <b>ID :</b> $name <br> 
            <b>Email :</b> $email
           </p>
           </center>
           
        <section style='padding:15px;'  id='ddcon'>
          <a id='dcon' href='logout2.php'><i class='fa-solid fa-arrow-right-from-bracket fa-2x'></i> Logout </a> 
        </section>
            
        </div>

        <div style='background-color:#1d015a;' class='col-lg-8 offset-lg-1'>
        <section>
        <div class='row'>
        <div class='col-lg-2 mt-5'>
        <a class=' text-decoration-none' style='color: white;' href='viewcomments.php'> <i class='fa-solid fa-user-pen fa-2x'></i> Reviews </a> 
        </div>
        <div class='col-lg-3 mt-5'>
        <a class=' text-decoration-none' style='color: white;' href='reglist.php'> <i class='fa-solid fa-user-plus fa-2x'></i> Newsletter<br>Reg. List </a> 
        </div>
        <div class='col-lg-2 mt-5'>
        <a class=' text-decoration-none' style='color: white;' href='productupload.php'> <i class='fa-solid fa-upload fa-2x'></i> Product<br>Upload</a> 
        </div>
        </div>

        </section>
        
    </div>
       </section> ";
          }

           

    

                
}
?>

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
   
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
  
<?php } ?>
</body>
</html>
               
               
                     
                                     
                                   
                       

                        
                     

  
    
