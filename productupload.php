<?php
include'connection/dbase.php';

if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $quan = $_POST['pquantity'];
    $des = $_POST['pdescription'];
    $code = $_POST['pcode'];
    $pimage = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $path = "product_image/$pimage";

    if(empty($pname) || empty($pimage) || empty($pprice) || empty($quan) || empty($des) || empty($code)){
     echo" <script>alert('All fields required')</script> ";
    }
    else{
        $upload = move_uploaded_file($tmp_name, $path);
        $query ="INSERT INTO product(product_name,product_image,product_price,product_qty,product_desc,product_code) VALUES ('$pname','$pimage','$pprice','$quan','$des','$code')";
        $result = mysqli_query($con, $query);
           if($result){
            echo" <script>alert('Poducts Info successfully uploaded to database')</script> ";
            header('Refresh: 0; url=Admindashb.php');
           }
           else{
            echo" <script>alert('Unable to upload data')</script> ";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>product upload</title>
</head>
<body>
    <div class=" container-fluid col-lg-4">
    <form action="" method='POST' enctype='multipart/form-data'>
        
       <label class='form-label' for="">Product name</label>
       <input type="name" name='pname' class='form-control'>
       <label class='form-label mt-3' for="image">Image</label>
       <input type="file" name='file' class='form-control'>
       <label class='form-label mt-3' for="">Price</label>
       <input type="text" name='pprice' class='form-control'>
       <label class='form-label mt-3' for="">Quantity</label>
       <input type="number" name='pquantity' value='1' class='form-control'>
       <label class='form-label mt-3' for="">Description</label>
       <textarea rows='' cols='' name='pdescription' class='form-control'> </textarea>
       <label class='form-label mt-3' for="">code</label>
       <input type="text" name='pcode' value='' class='form-control'>
       <input type="submit" name='submit' style='background-color: #003399; color:white;' class='btn mt-3'>

    </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
 
   <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>


		