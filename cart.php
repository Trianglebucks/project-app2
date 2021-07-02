<?php
 session_start();

 if (!isset($_SESSION['username'])) {
   header("Location: login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <link rel="stylesheet" href="styles2.css" />
    <title>Shopping Cart</title>
  </head>
  <body>
    <header>
      <div class="overlay"></div>
      <nav>
        <h2>SHOP</h2>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="shoes.php">Shoes</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="cart">
            <a href="cart.php">Cart<span>0</span></a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="products-container">
      <div class="product-header"></div>
      <div class="products"></div>
    </div>
    <script src="main2.js"></script>
  </body>
</html>
