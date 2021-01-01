 <?php
 session_start();
 if(!isset($_SESSION['username'])){
   header('location:log.php');
 }
 ?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="a.css">
    <title>index</title>
  </head>
  <body>
      
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="car.php">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="My.php">My Bookings</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              welcome <?php echo $_SESSION['username'];?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="signin.php">Signup</a>
                <a class="dropdown-item" href="log.php"> Customer Login</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
                <a class="dropdown-item" href="adminlog.php">Admin login</a>
                
              </div>
            </li>
          </ul>
        </div>
      </nav>
    
      
        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGNhcnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="1550" height="900" alt="">
        <a href="car.php"><button class="btn">READ MORE</button></a>
        <div class="centered"><h2>  FIND THE RIGHT CAR FOR YOU</h2></div>
      
      
</html>
<div class="card text-white bg-dark mt-5">
  <div class="card-header">About Us</div>
  <div class="card-body">
    <h4 class="card-title">Car rental system</h4>
    <h6 class="card-text">UVCE.</h6>
    <h6>Created by :Kavya
      <br>
      5th semester CSE
      <br>
      EMAIL:kavyareddysr07@gmail.com
    </h6>
    <hr>
    <p>Designed By : 2020 Copyrights Reserves </p>
  </div>
</div>
    

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