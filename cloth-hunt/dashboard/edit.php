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
    <title>edit</title>
</head>

<body>


    <div class="container mt-5">
        <?php include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Product Edit
                            <a href="index.php" class="btn btn-danger float-end"> BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $user_id = mysqli_real_escape_string($config, $_GET['id']);
                            $query = "SELECT * FROM seller WHERE id='$user_id'";
                            $query_run = mysqli_query($config, $query);
                            // echo $user_id ;

                            if (mysqli_num_rows($query_run) > 0) {
                                $userInfo = mysqli_fetch_array($query_run);
                                $imagepath=$userInfo['imagePath'];
                                $imageback=$userInfo['imageback'];
                                $title=$userInfo['title'];
                                $rate=$userInfo['rate'];

                                // echo $imagepath;
                                // echo $imageback;
                                // echo $title;
                                // echo $rate;
                        ?>
                                  
                                <form action="code.php" method="GET">

                                    <input type="hidden" name="id" value="<?= $userInfo['id']; ?>">
                                    <div class="mb-3">
                                        <label for="">ImagePath1</label>
                                        <!-- <input type="file"  accept=".jpg, .png, .web" name="imagePath1" value="// $userInfo['imagePath']; ?>"> -->
                                        <input type="text"   name="imagePath1" value="<?= $userInfo['imagePath']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""> ImagePath2</label>
                                        <!-- <input type="file" accept=".jpg, .png, .web" name="imagePath2" value=" //$userInfo['imageback']; ?>"> -->
                                        <input type="text" name="imagePath2" value="<?= $userInfo['imageback']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for=""> Title</label>
                                        <input type="text" name="title" value="<?= $userInfo['title']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Price</label>
                                        <input type="text" name="rate" value="<?= $userInfo['rate']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_user" class="btn btn-primary"> Updated User</button>
                                    </div>

                                </form>
                        <?php
 }

                            else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>