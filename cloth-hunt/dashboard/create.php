<?php

session_start();
include_once('/xampp/htdocs/php/cloth-hunt/config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>
    <div class="container mt-5">
        <?php
             include('message.php');
        ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Product Add <a href="./index.php" class="btn btn-danger float-end">Back</a></h5>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="mb-3">
                        <label for="">ImagePath1</label>
                        <input type="file" name="imagePath1" accept=".jpg, .png, .web "  class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="">ImagePath2</label>
                        <input type="file" name="imagePath1"  accept=".jpg, .png, .web " class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Price</label>
                        <input type="text" name="rate" class="form-control">
                    </div>
                    <div class="mb-3">
                        <!-- <label for="">studentName</label> -->
                        <button type="submit" name="save_card" class="form-control btn btn-primary">Create Card</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>