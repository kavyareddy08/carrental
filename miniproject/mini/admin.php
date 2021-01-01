

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>admin</title>
  
<style>
.vertical-menu {
  width: 200px;
  height:500px;
}

.vertical-menu a {
  background-color: black;
  color: white;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: black;
  color: white;
}
h1 {
            font-family: 'Lobster', cursive;
            
            position: initial;
            animation-name: sign;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            text-align:center;
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
        body{
          background-image: url("https://images.unsplash.com/photo-1494905998402-395d579af36f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjd8fGNhcnN8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
        width:100%;
        }
</style>
</head>
<body>

<h1>WELCOME BACK</h1>
<div class="vertical-menu">
  <a href="#" class="active">MENU</a>
  <a href="customer.php">CUSTOMERS</a>
  <a href="ca.php">CARS</a>
  <a href="books.php">BOOKED CARS</a>
  <a href="admlogout.php">LOGOUT</a>
  
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>