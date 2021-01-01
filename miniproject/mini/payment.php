<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:payment.php');
}
echo '<script>alert("Your Booking Suucessfully make payment")</script>'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
    <title>payment</title>
  </head>
  <body>
      
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="car.php">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">contact us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              welcome <?php echo $_SESSION['username'];?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="signin.php">Signup</a>
                <a class="dropdown-item" href="log.php"> Login</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
                
              </div>
            </li>
          </ul>
        </div>
      </nav>
    
      
        
        <title>Payment</title>
  </head>
  <body>
    
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-md-6">


                <div class="row">
                    <div class="col-md-2">


                    </div>

                    <div class="col-md-10">
                        <div class="card mt-4">
                           
                            <h4 class="text-center">MAKE YOUR PAYMENT </h4>
                            <div class="card-body">

                                <form action="end.php" method="POST">

                                    <div class="form-group">
                                        <label for="name">NAME </label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="NAME ON CARD" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="card number">CARD NUMBER</label>
                                        <input type="number" class="form-control" name="number" id="number" required placeholder= "Debit Card Number">
                                    </div>
                                    <div class="form-group">
                                     <label for="date">EXPIRY DATE(MM YYYY)</label>
                                     <br>
                                        <input type="number"  name="number" id="number" placeholder="MM" required  size="2">  <input type="number"  name="number" id="number"  placeholder="YYYY" size="3" required><label for="cvv">CVC/CVV</label><input type="password" class="form-control" name="number" id="number"  placeholder="3 or 4 digits" required>
                                     </div>
                                        
                                  <a href="end.php"><button type="submit"  class="btn btn-outline-info btn-sm btn-block">PAY</button></a>
          

    <!-- Optional JavaScript; choose one of the two! -->

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
  </html>

    
    