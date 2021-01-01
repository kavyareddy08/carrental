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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Lobster&display=swap" rel="stylesheet">
    
        <a href="https://icons8.com/icon/17949/google"></a>
    
        <style>
            body {
               
                background-image: url("https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTJ8fGNhcnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" );
                width: 100%;
                height:100%;


               
            }
            p{
                color:white;
            }
            h4 {
                font-family: 'Lobster', cursive;
                margin-top: 10px;
                position: relative;
                animation-name: sign;
                animation-duration: 2s;
                animation-iteration-count: infinite;
            }
            
            @keyframes sign {
                0% {
                    background-color: #fba8a4;
    background-image: linear-gradient(315deg, #fba8a4 0%, #dad2f3 74%);
                    border-radius: 15px;
                    top: 0px;
                    color: white;
                }
                50% {
                    background-color: #f9c5d1;
    background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);
                    top: 10px;
                    color: white;
                }
            }
            
            .card {
                border-radius: 20px;
            }
            
            .form-group input {
                border-radius: 15px;
                cursor: pointer;
            }
            
            label {
                color: white;
            }
            
            .card-body {
                background-color: #537895;
    background-image: linear-gradient(315deg, #537895 0%, #09203f 74%);
            }
            
            .form-group input:hover {
                background-color: #f3e6e8;
    background-image: linear-gradient(315deg, #f3e6e8 0%, #d5d0e5 74%);
                color: black;
            }
            
            span {
                color: white
            }
        </style>
    
        <title>book</title>
    </head>
    
    <body>
        
        <div class="container mt-2">
            <div class="row">
    
                <div class="col-md-3"></div>
                <div class="col-md-6">
    
    
                    <div class="row">
                        <div class="col-md-6">
    
    
                        </div>
    
                        <div class="col-md-10">
                            <div class="card mt-4">
                               
                                <h4 class="text-center">BOOK A CAR </h4>
                                <div class="card-body">
    
                                    <form action="book.php" method="POST">
                                    <div class="form-group">
                                            <label for="firstname">Name</label>
                                            <input type="text" class="form-control" name="username" id="username" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="firstname">Booking_from</label>
                                            <input type="text" class="form-control" name="bookingfrom" id="bookingfrom" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Booking_to</label>
                                            <input type="text" class="form-control" name="bookingto" id="bookingto" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">From_Date</label>
                                            <input type="date" class="form-control" name="bookingdate" id="bookingdate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">To_Date</label>
                                            <input type="date" class="form-control" name="bookingdate1" id="bookingdate1"  required>
                                        </div>
                                        
    
                                        <button type="submit"  class="btn btn-outline-info btn-sm btn-block">BOOK NOW</button>
    
                                    </form>
    
    
                                    
                                </div>
    
    
    
                            </div>
    
    
                        </div>
                    </div>
    
                </div>
    
            </div>
    
    
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
    
    </html>
    
    
