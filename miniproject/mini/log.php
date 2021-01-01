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
     
    <title>login</title>
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
              <a class="nav-link" href="My.php">My Bookings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">contact us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Authentication
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="signin.php">Signup</a>
                <a class="dropdown-item" href="log.php"> Customer Login</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
                <a class="dropdown-item" href="adminlog.php"> Admin Login</a>
            
              </div>
            </li>
          </ul>
        </div>
      </nav>
    
      
        
        
<style>
    
        
            body {
            
            background-image: url("https://images.unsplash.com/photo-1553440569-bcc63803a83d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8N3x8Y2Fyc3xlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
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

    

    <title>Login</title>
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
                            
                            <h4 class="text-center">LogIn </h4>
                            <div class="card-body">
                        
                                <form action="login.php" method="POST">
                                

                                    <div class="form-group">
                                        <label for="username">UserName</label>
                                        <input type="text" class="form-control" name="username" id="username"  required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password"> Password</label>
                                        <input type="password" class="form-control" name="pass1" id="pass1" required>
                                    </div>

                                    <button type="submit" class="btn btn-outline-info btn-sm btn-block">LogIn</button>

                                </form>
                                <br>
                                <span>Not a user?</span><a href="signin.php" style="color:black;">Signup</a>

                            

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

