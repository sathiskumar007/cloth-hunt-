<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register Page</title>
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

        .img {
            width: 300px;
            height: 300px;
            background-image: url('https://colorlib.com/etc/regform/colorlib-regform-7/images/signup-image.jpg');
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


        input[type="name"],
        input[type="email"],
        input[type="password"],
        input[type="cpassword"] {
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

        input[type="reset"] {
            padding: 6px 30px;
            cursor: pointer;
            color: black;
            border: 1.5px solid black;
            border-radius: 5px;
            transition: 0.5s;
            background-color: white;
        }

        input[type="reset"]:hover {
            color: white;
            background-color: #57b0ff;
            border: 1.5px solid #57b0ff;
        }

        a {
            color: black;
        }

        @media(max-width:425px) {
            .container {
                flex-direction: column-reverse;
            }
        }
    </style>
</head>

<body>
    <?php

    $errorNo = 0;
    $nameerror = $mailerror = $passerror = $cpasserror = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once("config.php");

        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if (empty($name)) {
            $errorNo++;
            $nameerror = "Enter Your Name <br>";
        } else {
            $namepattern = '/^[a-zA-Z]{3,}$/';
            if (!preg_match($namepattern, $name)) {
                $errorNo++;
                $nameerror =  "Username Is too Long<br>";
            }
        }
        if (empty($email)) {
            $errorNo++;
            $mailerror = "Enter Your Email-Id <br>";
        } else {
            $mailPatt = '/[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/';
            if (!preg_match($mailPatt, $email)) {
                $errorNo++;
                $mailerror = "Enter Your Email Properly <br>";
            }
        }

        if (empty($password)) {
            $errorNo++;
            $passerror =  "Enter Your Password  <br>";
        } else {
            if (strlen($password) < 8) {
                $errorNo++;
                $passerror =  "Password must have at least 8 characters.<br>";
            }
        }
        if (empty($cpassword)) {
            $errorNo++;
            $cpasserror =  "Enter Your Conform Password <br>";
        } else {
            if ($password != $cpassword) {
                $errorNo++;
                $cpasserror = "Passwords do not match.<br>";
            }
        }

        if ($errorNo == 0) {
            // No validation errors, proceed with registration
            $sql = "INSERT INTO `userslist` (userName, email, password, conformPassword) VALUES ('$name', '$email', '$password', '$cpassword')";
            $result = mysqli_query($config, $sql);
            if ($result) {
                echo "<script>alert('Registration successful!');</script>";
                header('Location: signin.php');
              
            } else {
                echo "<div class='danger'>There is a problem in registering your account.</div>";
            }
        }
    }

    ?>
    <div class="container">

        <div class="form-section">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <h1>Register</h1>

                <?php


                // if (isset($_POST['submit'])) {
                //     if ($errorNo == 1) {
                //         // echo "<span class='error'>" . $errorMsg . "</span>";
                //         // echo $errorMsg;
                //     }
                //     if (isset($_POST['message'])) {
                //         $errorMsg = "register sucessfully";
                //         echo "<span class='warning'>" . "</span>";
                //     }
                // }
                // echo $errorMsg;
                ?> <br><br>
                <?php echo (!empty($nameerror)) ? $nameerror : ''; ?>
                <i class="fa-solid fa-user"></i>

                <input type="name" name="username" placeholder="           name"><br><br>
                <?php echo (!empty($mailerror)) ? $mailerror : ''; ?>
                <i class="fa-solid fa-at"></i>
                <input type="email" name="email" placeholder="           Your Email"><br><br>
                <?php echo (!empty($passerror)) ? $passerror : ''; ?>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="           Password"><br><br>
                <?php echo (!empty($cpasserror)) ? $cpasserror : ''; ?>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="cpassword" placeholder="            Repeat Your Password"><br><br>
                <a href="signin.php">I have an account </a><br><br>

                <input type="submit" name="submit" value="Register">
                <input type="reset" name="clear" value="Clear">

                <br>
                <?php   // if(isset($_POST['submit'])) { echo $submit_error;}
                //echo $submit_sucess; 
                ?>
            </form>
        </div>
        <div class="img"></div>
    </div>
</body>

</html>