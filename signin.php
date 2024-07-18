<?php

include_once('config.php');

if (isset($_POST['submit'])) {

    $isError = 0;
    $errorMsg = "";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `userslist` WHERE email='$email'";
    $result = mysqli_query($config, $sql);

    if ($result && mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        $actualEmail = $row['email'];
        $actualId = $row['id'];
        $actualpwd = $row['password'];

        if ($email == $actualEmail  &&  $password == $actualpwd) {
            setcookie("myUserId", $actualId, time() + 60 * 60 * 24);
            header('Location:index.php');
            // echo "<script>alert('Login Successfull');</script>";
            exit(); // Make sure to exit after redirection
        } else {
            $isError = 1;
            $errorMsg = "Password is wrong";
        }
    } else {
        // $isError = 1;
        // $errorMsg = "Email is not found on DB";
        header('Location:register.php');
        echo "<script>alert('Email is not found on DB');</script>";
        exit(); // Make sure to exit after redirection
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <title>Signin Page</title>
    <style>
        @font-face {
            font-family: roboto;
            src: url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;800;900&display=swap');
        }

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            font-family: roboto;

        }

        /* body{
        background: url('https://img.freepik.com/free-photo/magnificent-woman-long-bright-skirt-dancing-studio-carefree-inspired-female-model-posing-with-pleasure-yellow_197531-11084.jpg?t=st=1709631671~exp=1709635271~hmac=7b21c1078e60939d243d6700995e544cb3fc0db1798eeccda175b349de30d154&w=1480');
        background-repeat: no-repeat;
            background-size: cover;
        } */

        .img {
            width: 300px;
            height: 300px;
            background-image: url('https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 100%;
            height: auto;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15%;

        }

        form h1 {
            margin-bottom: 20px;
            text-align: center;
            padding-top: 15px;
        }

        form input,
        i,
        a {
            margin-left: 80px;
        }


        input[type="email"],
        input[type="password"] {
            border: none;
            border-bottom: 1px solid #595856;
            width: 70%;
        }


        input[type="email"],
        input[type="password"]:focus {
            border: none;
            border-bottom: 1px solid #595856;
        }

        input[type="submit"] {
            padding: 6px 30px;
            cursor: pointer;
            color: black;
            border: 1.5px solid black;
            border-radius: 5px;
            transition: 0.5s;
            background-color: white;
        }

        input[type="submit"]:hover {
            color: white;
            background-color: #57b0ff;
            border: 1.5px solid #57b0ff;
        }

        a {
            color: black;
        }

        .warning {
            background-color: yellow;
            color: red;
            font-size: 18px;
        }

        .error {
            background-color: red;
            color: white;
            font-size: 18px;
        }

        @media(max-width:425px) {
            .container {
                flex-direction: column-reverse;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <?php

        if (isset($_POST['submit'])) {
            // echo "<scrip> console.log('working')</script;
            if ($isError == 1) {
                echo "<span class='error'>" . $errorMsg . "</span>";
            }
            if (isset($_POST['message'])) {
                $errorMsg = "logout sucessfully";
                echo "<span class='warning'>" . $errorMsg . "</span>";
            }
        }
        ?>
        <div class="form-section">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <h1>Login</h1>

                <i class="fa-solid fa-at"></i>
                <input type="email" name="email" placeholder="           Your Email" value=""><br><br>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="           Password" value=""><br><br>
                <a href="register.php">New user </a><br><br>

                <input type="submit" name="submit" value="Login">
            </form>
        </div>
        <div class="img"></div>
    </div>
</body>

</html>