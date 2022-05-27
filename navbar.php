<?php
include 'connection/dbase.php';
session_start();
$email = $_SESSION['email'];

?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: snow;">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="femtechlogo.png" alt="" width="130"><br> <i> Does IT Better...</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto" style="padding-right: 40px;">
        <a id="nav" class="nav-link active px-3" href="index.php">Home</a>
        <a id="nav" class="nav-link active px-3" href="shop.php">Shop</a>
        <a id="nav" class="nav-link active px-3" href="about.php">About</a>
        <a id="nav" class="nav-link active px-3" href="contact.php">Contact</a>
        <a id="nav" class="nav-link active px-3" href="cart.php"> <i class="fa-solid fa-shopping-cart position-relative">
            <span id='cart-item' class="badge rounded-square bg-danger">
              <span class="visually-hidden">Cart</span>
            </span>
          </i></a>
        <?php if (isset($_SESSION["email"])) : ?>
          <a id="nav" class="nav-link active px-3" href="Admindashb.php">Dashboard</a>
          <a id="nav" class="nav-link active px-3" href="logout.php">Logout</a>
          
        <?php else :  ?>
          <a id="nav" class="nav-link active px-3" href="login.php">Login</a>
        <?php endif ?>

      </div>
    </div>
  </div>
</nav>