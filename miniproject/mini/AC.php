<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     
    <title>add</title>
  </head>
  
      
    
    
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
                           
                            <h4 class="text-center">ADD CARS </h4>
                            <div class="card-body">

                                <form action="acp.php" method="POST">

                                    <div class="form-group">
                                        <label for="name">CAR NAME </label>
                                        <input type="text" class="form-control" name="car_name" id="car_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="card number">NO_OF_SEATS</label>
                                        <input type="number" class="form-control" name="no_of_seats" id="no_of_seats" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="name">COST </label>
                                        <input type="text" class="form-control" name="cost" id="cost" required>
                                    </div>
                                    <div class="form-group">
                                     <label for="file">CAR IMAGE</label>
                                     <br>
                                        <input type="file" name="file" id="file" required>
                                     </div>
                                        
                                  <a href="acp.php"><button type="submit"  class="btn btn-outline-info btn-sm btn-block">SUBMIT</button></a>
          

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

    
    