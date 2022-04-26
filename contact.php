<?php
include'connection/dbase.php';
session_start();

$email = $_SESSION['email'];

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $image_name = $_FILES["file"]["name"];
  $tmp_name = $_FILES["file"]["tmp_name"];
  $body = $_POST['body'];

  $path = "image/$image_name";
 
  if(empty($name) or empty($subject) or empty($body)) {
    echo" <script>alert('All fields required')</script> ";
  }

  else{
    $upload = move_uploaded_file($tmp_name, $path);
    $query = "INSERT INTO mess(Email,Name,Title,File,Body) VALUES ('$email','$name','$subject','$image_name','$body')";
    $result = mysqli_query($con, $query);
    if($result) {
      echo" <script>alert('Comment Submitted Sucessfully')</script>";
    }
    else{
      echo" <script>alert('Unable To Submit Comment')</script>";
    }

     
  }
 


 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="Style.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include'navbar.php' ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <p style='margin-top:100px;'>Get In Touch</p>
      <h4>Visit One Of Our Office Today</h4>
      <br>
      <h6><b> Head Office</b></h6>
    
         <div class="container-fluid">
           <p>
             <i style='margin-right:10px;' class='fas fa-map'></i>No 171 Ibrahim Taiwo Opposite Stadium Gate Ilorin Kwara State Nig. <br>
             <i style='margin-right:10px;' class='fas fa-envelope pt-5'></i>femtech@gmail.com <br>
             <i style='margin-right:10px;' class='fas fa-phone pt-5'></i> +2348061616565 <br>
             <i style='margin-right:10px;' class='fas fa-clock pt-5'></i> Mon-Sat 8:00am-6:00pm <br>
            </p>
         </div>
     </div>
     <div class="col-lg-6" stle="margin-top:200px;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.1833952070606!2d4.542936264273845!3d8.481541499659192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1036529654f15ced%3A0x5082a312f00e69cd!2sFemtech%20Information%20Technology!5e0!3m2!1sen!2sng!4v1647433987499!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
     </div>
  </div>
 


  <div class="container-fluid pt-5">
  <div class="row">
    <div class="col-lg-6">
      <h6><b> Tanke Branch</b></h6>
    
         <div class="container-fluid">
           <p>
             <i style='margin-right:10px;' class='fas fa-map'></i>No 17 Tanke tipper garage Ilorin Kwara State Nig. <br>
             <i style='margin-right:10px;' class='fas fa-envelope pt-5'></i>femtech@gmail.com <br>
             <i style='margin-right:10px;' class='fas fa-phone pt-5'></i> +2348061739929 <br>
             <i style='margin-right:10px;' class='fas fa-clock pt-5'></i> Mon-Sat 8:00am-6:00pm <br>
            </p>
         </div>
     </div>
     <div class="col-lg-6" stle="margin-top:200px;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31569.742698967093!2d4.60027174483967!3d8.478187366341492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10364d1bdd3c794f%3A0x4ed87e1b0c3010d2!2sFemtech%20IT%20Training%20Centre!5e0!3m2!1sen!2sng!4v1647946126460!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
     </div>
  </div>
 



  <div class="container-fluid pt-5">
  <div class="row">
    <div class="col-lg-6">
      <h6><b> Fate Branch</b></h6>
    
         <div class="container-fluid">
           <p>
             <i style='margin-right:10px;' class='fas fa-map'></i>No 8 Shoprite Mall Ilorin Kwara State Nig. <br>
             <i style='margin-right:10px;' class='fas fa-envelope pt-5'></i>femtech@gmail.com <br>
             <i style='margin-right:10px;' class='fas fa-phone pt-5'></i> +2349104536565 <br>
             <i style='margin-right:10px;' class='fas fa-clock pt-5'></i> Mon-Sat 8:00am-6:00pm <br>
            </p>
         </div>
     </div>
     <div class="col-lg-6" stle="margin-top:200px;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.0217507648667!2d4.582989575884834!3d8.497265606114253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10364d0a5a336787%3A0x6af10e1c8ad6c446!2sShoprite%20Kwara%20Mall!5e0!3m2!1sen!2sng!4v1647946008875!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
     </div>
  </div>
  <center class='pt-5'>
    <p> For more Inquires visit <a target='_blank' class='text-decoration-none' href="https://femtechit.com">https://femtechit.com</a> </p> 
  </center>


  
<section class='mt-5' style="border: 1px solid black; margin:10px;">
    <div class="container-fluid">
           <div class="row container-fluid">
               <div class="col-lg-6 p-5">

               
                   <p>Leave a message</p>
                   <h3>we would love to hear from you</h3>
                  <form action="" method="POST" enctype='multipart/form-data'>
                   <input type="name" placeholder="Your name" name='name' class='form-control mt-3'>
                   <input type="text" placeholder="Subject" name='subject' class='form-control mt-4'>
                   <input type="file" placeholder="choose a file" name='file' class='form-control mt-4'>
                   <textarea name='body' cols='30' rows='10' class='form-control mt-4'  placeholder="Your message">  </textarea>
                   <button type="submit" name='submit' style='background-color:#003399; color: white;' class="btn mt-4">Submit</button>
                  </form>
                  
               </div>

               <div class="col-lg-2 p-5">
                 <img  src="Review/DSC_1144.jpg" alt="" width=80px height=80px style="border-radius:50%;">
                 

                 <img src="Review/marsai.png" alt="" width=80px height=80px style="border-radius:50%;" class="mt-5">
               


                 <img src="Review/TWP_3328.jpg" alt="" width=80px height=80px style="border-radius:50%;" class="mt-5">
               

                 <img src="Review/TWP_6268.jpg" alt="" width=80px height=80px style="border-radius:50%;" class="mt-5">
               

               </div>
               <div class="col-lg-4 mt-5" style='margin-left:-70px;'>
               <div id='type'>
                    <h5>Kimorah</h5>
                   <p>Senior Marketing Manager <br> Phone: +2349 123 8493 23 <br> Email: example@gmail.com</p>
                 </div> 

                 <div id='type'>
                  <h5>Marsai</h5>
                   <p>Assistant Marketing Manager <br> Phone: +2349 123 6789 26 <br> Email: example@gmail.com</p>
                </div> 

                <div id='type'>
                  <h5>Liam</h5> 
                   <p>Managing Director <br> Phone: +2349 123 4532 29 <br> Email: example@gmail.com</p>
                </div> 

                <div id='type'>
                  <h5>Ella</h5>
                   <p>Senior Advertisement Manager <br> Phone: +2349 123 4567 20 <br> Email: example@gmail.com</p>
                </div> 


               </div>
               </div>
           </div>
    </div>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
  </body>
  </html>
          
            
   
            
       
           
   
          
          
    
            


