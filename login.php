<?php
include 'connection/dbase.php';
session_start();

if (isset($_SESSION['name'])) {
  header('Location: dashb.php');
} else {
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = sha1($password);

    if (empty($email) or empty($password)) {
      // $alert= "<class='alert alert-warning alert-dismissible fade show fixed-bottom' role='alert'>
      // <strong>Missing Info</strong> You should check in on some of those fields below.
      // <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      // </div>";
      $alert = "All fields are required.";
    } else {
      $query = "SELECT * FROM signup WHERE  Email = '$email' and Password = '$hash_password'";
      $result = mysqli_query($con, $query);
      if ($result) {
        while ($arr = mysqli_fetch_array($result)) {
          $name = $arr['Name'];
          $email = $arr['Email'];
          $password = $arr['Password'];

          $_SESSION['name'] = $name;
          $_SESSION['email'] = $email;


          header('Refresh: 0; url=Home.php');
          echo "<script> alert('Welcome $name') </script>";
        }
      } else {
        // $alert= "<div style='margin-top: 100px;' class='alert alert-danger alert-dismissible fade show fixed-bottom' role='alert'>
        // <strong>Unable To Log In User</strong> 
        // <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        // </div>";
        $alert = "Unable To Log In User. Incorrect Email or Password";
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
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: snow;">
      <div class="container-fluid">
        <a class="navbar-brand"><img src="femtechlogo.png" alt="" height="40" width="130"><br> <i> Does IT Better...</i></a>
      </div>
    </nav>

    <div class="container p-5">
    <h3 class="pt-5 mt-5" style="color: #003399;">Login</h3>
    <form method='POST' style="">
    <?php echo "<span style='color:red;font-size:1.5rem;'>" .@$alert. "</span>"; ?>
      <div class="mb-3 col-lg-4">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="example@gmail.com" name='email' aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-4">
          <label for="password" class="form-label">Password</label>
          <div class="input-group mb-3">
            <input type="password" name="password" placeholder="Password" class="form-control" id="password" aria-describedby="basic-addon1">
            <span class="input-group-text" id=""><i id="eye" class="fas fa-eye-slash"></i></span>
            </div>
        </div>
      </div>
      <button style="background-color:#003399 ; color: snow;" type="submit" class="btn" name='submit'>Submit</button><span> Don't have an account yet? No worries click <a id="sign" style="color: #003399;" class="text-decoration-none" href="signup.php"><b>Here</b></a> to sign up</span>

    </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



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

  <?php } ?>
  </body>

  </html>