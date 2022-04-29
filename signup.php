<?php

include "connection/dbase.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $image_name = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];
    $password = $_POST["password"];

    $path = "image/$image_name";
    $passwordLength = strlen($password);
    $hash_password = sha1($password);


    if (empty($name) or empty($email) or empty($image_name) or empty($password)) {
        //     $alert = "<div class='alert alert-warning alert-dismissible fade show fixed-bottom' role='alert'>
        // All Fields Required! 
        // <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        // </div>";
        $response = "All fields required";
    } elseif ($passwordLength < 6 or $passwordLength > 12) {
        //     $alert = "<div class='alert alert-warning alert-dismissible fade show fixed-bottom' role='alert'>
        // Invalid Password
        // <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        // </div>";
        $response = "Invalid password";
    } 
    else {
        $sql = "SELECT * FROM admin WHERE Email='$email'";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
            $response = "Sorry, Email already taken";
        }
        else {
            $upload = move_uploaded_file($tmp_name, $path);
            $query = "INSERT INTO admin(Name,Email,File,Password) VALUES ('$name','$email','$image_name','$hash_password')";
            $result = mysqli_query($con, $query);
            if ($result) {
                // $alert = " <script>alert(' Registration Successful you are about to be redirected to the login page')</script> ";
                $response = "registration successful";
                header('Refresh: 2; url=login.php');
            } else {
                $response = "Registration unsuccessful";
            
        }

            //         $alert = "<div style='margin-top: 100px;' class='alert alert-danger alert-dismissible fade show fixed-bottom' role='alert'>
            //   Registration Unsuccessful
            //   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            //   </div>";
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
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: snow;">
        <div class="container">
            <a style="color: #003399;" class="navbar-brand"><img src="femtechlogo.png" alt="" height="40" width="130"><br> <i> Does IT Better...</i></a>
        </div>
    </nav>

    <div class="container pt-3 mt-3">
        <h3 class="pt-5 mt-5" style="color: #003399;">Sign up</h3>
        <form action='' method='POST' enctype='multipart/form-data' style="width: 60%;" class="form-group">
            <?php echo "<span style='color:red;font-size:2rem;'>" . @$response . "</span>";   ?>
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name='name' placeholder="Name" class="form-control" id="name">
            </div>

            <label for="Email" class="form-label">Email</label>
            <input type="email" name='email' placeholder="example@gmail.com" class="form-control" id="inputEmail4">

            <label for="label" class='form-label'>File</label>
            <input type="file" name='file' class='form-control'>

            <label for="inputPassword4" class="form-label">Password</label>
            <div class="input-group mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control" id="password" aria-describedby="basic-addon1">
                <span class="input-group-text" id=""><i id="eye" class="fas fa-eye-slash"></i></span>
            </div>
            <div>
                <button type="submit" name='submit' style='border:none; color:white; background-color:#003399;' class='btn'>Sign Up</button><span> Already have an account? click <a id="sign" style="color: #003399;" class="text-decoration-none" href="login.php"><b>Here</b></a> to login</span>
            </div>
    </div>
    </form>
    </div>
    </div>







































    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        $('#eye').click(function() {
            const type = document.getElementById('password').type;
            const icon = $(this)


            if (icon.hasClass('fas fa-eye-slash') && type === 'password') {
                icon.removeClass('fas fa-eye-slash')
                icon.addClass('fas fa-eye')
                document.getElementById('password').type = "text"
            } else {
                icon.removeClass('fas fa-eye')
                icon.addClass('fas fa-eye-slash')
                document.getElementById('password').type = 'password'
            }
        })
    </script>







</body>

</html>