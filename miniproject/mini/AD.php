
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<style>
.btn {
    position: absolute;
    top: 17%;
    left: 10%;
    transform: translate(-70%, -70%);
    -ms-transform: translate(-50%, -50%);
    background-color:  #555;
    color: white;
    font-size: 16px;
    padding: 8px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
  }

</style>
<div class="container mt-4">
        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-md-6">


                <div class="row">
                    <div class="col-md-2">


                    </div>

                    <div class="col-md-10">
                        <div class="card mt-4">
                           
                            <h4  style = "text-align: left" class="text-center">DELETE CARS </h4>
                            <div class="card-body">

                                <form action="acd.php" method="REQUEST">

                                    <div class="form-group">
                                        <label for="name">CAR ID</label>
                                        
                                        <input  style = "padding:5px" type="text" class="form-control" name="id" id="id" required placeholder="enter car id">
                                    </div>
                                    <br>
                                    <br>
                                    <a href="acd.php"><button type="submit"  class="btn btn-outline-info btn-sm btn-block">DELETE</button></a>
                                    </div>



</div>


</div>
</div>

</div>

</div>


</div>


</body>
</html>
