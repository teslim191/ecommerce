<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body>
    <?php require "navbar.php";         ?>
 <div class="container-fluid">
 <div id="message"></div>
 <?php
require "connection/dbase.php";
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM product WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $name = $row["product_name"];
            $desc = $row["product_desc"];
            
            echo"
            <h3 style='margin-top:100px;' class='text-center'>$name</h3>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-9'>
                            <p>$desc</p>
                        </div>
                        <div class='col-lg-3'>
                        <div class='card p-3'>
                        ";
                        echo '<h4>₦';echo number_format($row['product_price'],2); echo'</h4>';
                       echo "
                       <form action='' class='form-submit'>
                            <b>Quantity : </b>
                            <input type='number' class='form-control pqty' value="; echo $row['product_qty'];echo ">
                            <input type='hidden' class='pid' value=";echo $row['id']; echo ">
                            <input type='hidden' class='pname' value=";echo $row['product_name']; echo ">
                            <input type='hidden' class='pprice' value=";echo $row['product_price']; echo ">
                            <input type='hidden' class='pimage' value=";echo $row['product_image']; echo ">
                            <input type='hidden' class='pcode' value="; echo $row['product_code']; echo ">
                            <button style='color:white; background-color: #003399'; class='btn btn-block addItemBtn mt-2'><i class='fas fa-cart-plus'></i>&nbsp;&nbsp;Add to
                              cart</button>
                        </form>
                    </div>
                    </div>
                        
                    </div>
                </div>
            ";
        }
    }
}
?>



</div>   
<?php include 'news.php' ?>
<?php include 'footer.php' ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Send product details to the server
        $(".addItemBtn").click(function(e){
            e.preventDefault();
            var $form = $(this).closest(".form-submit");
            var pid = $form.find(".pid").val();
            var pname = $form.find(".pname").val();
            var pprice = $form.find(".pprice").val();
            var pimage = $form.find(".pimage").val();
            var pcode = $form.find(".pcode").val();
            var pqty = $form.find(".pqty").val()


            $.ajax({
                url: 'action.php',
                method: 'post',
                data:{
                    pid: pid,
                    pname: pname,
                    pprice: pprice,
                    pimage: pimage,
                    pcode: pcode,
                    pqty: pqty 
                },
                success: function(response){
                    $("#message").html(response);
                    window.scrollTo(0, 0);
                    load_cart_item_number();
                }

            })
        })
// Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();
        function load_cart_item_number(){
            $.ajax({
                url: 'action.php',
                method: 'get',
                data:{
                    cartItem: 'cart_item'
                },
                success: function(response){
                    $("#cart-item").html(response);
                }
            });
        }
    });
</script>
</body>
</html>