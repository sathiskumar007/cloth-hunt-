<?php

session_start();
require 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<?php
include_once('./head.php');


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <?php
    include_once('./nav.php');


    ?>


    <!-- <section class="mb-5">
        <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            <div class='carousel-inner'>-->
    <?php
    // $query= "SELECT * FROM caurosel";
    // $product=mysqli_query($config,$query);

    //     while ($row = mysqli_fetch_array($product)) {
    //     echo "


    //     <div class=' carousel-item active' style='background-color:#F1F0EE; padding-top:65px; height: 850px;'>
    //         <img class='img d-block  float-right' src='./img/{$row[1]}' alt='Third slide' style='width: 30%;'>
    //         <div class='caption carousel-caption d-md-block d-fixed m w-25'>
    //             <h1 class='text text-dark' style='margin-top:10px;'>{$row[2]}</h1>
    //             <button class='btn1  border top-0 left-0  right-0 mx-start'> Shop Now</button>
    //         </div>
    //     </div>

    //     ";
    // }

    ?>
    <!-- <div class='carousel-inner'>
                <?php
                // $query = "SELECT * FROM caurosel";
                // $product = mysqli_query($config, $query);
                // $first = true; // Flag to track the first iteration

                // while ($row = mysqli_fetch_array($product)) {
                // // Determine whether to add active class or not
                // $activeClass = $first ? 'active' : '';
                // $first = false; // Set first to false after first iteration

                echo "
            // <div class='carousel-item $activeClass' style='background-color:#F1F0EE; padding-top:65px; height: 850px;'>
            //     <img class='img d-block float-right' src='./img/{$row[1]}' alt='Slide' style='width: 30%;'>
            //     <div class='caption carousel-caption d-md-block d-fixed m w-25'>
            //         <h1 class='text text-dark' style='margin-top:10px;'>{$row[2]}</h1>
            //         <button class='btn1 border top-0 left-0 right-0 mx-start'>Shop Now</button>
            //     </div>
            // </div>
            // ";
                // }
                ?>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        </div>


    </section> -->

    <!-- <section>
        <div class="container">
            <div class="card-container">
                <img src="./img/specialcollection-1.jpg" alt="">
                <div class="text">
                    <p>Spring Collection</p>
                    <button class="card-btn ">Shop Now</button>
                </div>
            </div>
        </div>
    </section> -->
    <style>
        /* .container-fluid {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .adimg {
            width: 50%;
            height: auto;
        }

        .content {
            width: 50%;
            height: auto;
        }

        .adimg img {
            width: 100%;
            height: auto;
        }

        .content a {
            font-size: clamp(50px, 3vw, 100px);
            color: black;
            text-align: center;
            margin-left: 40%;
        }

        .fashbtn {
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            color: white;
            background-color: red;
            margin-left: 38%;
        }

        @media(max-width:1024px) {
            .container-fluid {
                flex-direction: column;
            }

            .adimg {
                width: 100%;
            }

            .content {
                width: 100%;
            }
        } */
        .container-fluid {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .adimg {
            overflow: hidden;
            border-radius: 10px;
        }

        .adimg img {
            width: 100%;
            height: auto;
            transition: transform 0.5s;
        }

        .content {
            text-align: center;
        }

        .fashbtn {
            background-color: #54d9e1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .fashbtn:hover {
            background-color: #0e7e8f;
        }

        .cont:hover .adimg img {
            transform: scale(1.1);
        }
    </style>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <!-- <div class="container-fluid">
        <div class="adimg">
            <img src="https://wpbingosite.com/wordpress/bemins/wp-content/uploads/2023/11/banner-10.jpg" alt="">
        </div>
        <div class="content gap-5">
            <a href="https://youtu.be/I10XB1-IIbA?si=iVjfkE4IbezmX9ZN"><i class="fa-regular fa-circle-play"></i></a>
            <h1 class="text-center">Step into Fashion Excellence</h1><br>
            <button class="fashbtn">Show More</button>
        </div>
    </div> -->
    <!-- <div class="container-fluid">
        <div class="cont">
            <div class="adimg">
                <img src="https://wpbingosite.com/wordpress/bemins/wp-content/uploads/2023/11/banner-10.jpg" alt="">
            </div>
        </div>

        <div class="content gap-5">
            <a href="https://youtu.be/I10XB1-IIbA?si=iVjfkE4IbezmX9ZN"><i class="fa-regular fa-circle-play"></i></a>
            <h1>Step into Fashion Excellence</h1>
            <button class="fashbtn">Show More</button>
        </div>
    </div> -->

    <style>
        /* root */
        /* :root {
            --bg-light: #F5F5FC;
            --bg-dark: #35353C;
            --bg-darker: #15151C;
            --font-body: #55555C;
            --shadow: #C5C5CC;
        }

        tpn card style
        .tpn_card {
            width: 300px;
            height: 300px;
            background: var(--bg-light);
            padding: 5px;
            border-radius: 27px;
        }

        .tpn_card img {
            border-radius: 23px;
            box-shadow: 1px 7px 13px var(--shadow);
            transition: 0.5s ease-in;
        }

        .tpn_card h5 {
            color: var(--bg-dark);
        }

        .tpn_card p {
            color: var(--font-body);
            font-weight: 400;
            margin-bottom: 24px;
        }

        .tpn_card .tpn_btn {
            padding: 13px 27px !important;
            line-height: normal;
            background: var(--bg-dark);
            border-radius: 17px;
            text-decoration: none;
            color: #FFF;
            box-shadow: 1px 7px 13px var(--shadow);
            transition: all .7s ease;
        }

        .tpn_card .tpn_btn:hover {
            background: var(--bg-darker);
            box-shadow: none;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .tpn_card:hover img {
            transform: scale(0.98);
        }



        .ccard {
            position: relative;
            width: 300px;
            height: 300px;
            background-color: #f0f0f0;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
            margin-bottom: 50px;
        }

        .ccard:hover .social-icons {
            transform: translateY(-100px);
            opacity: 1;
            visibility: visible;
        }

        .ccard:hover img {
            transform: scale(1.1);
        }

        .ccard-content img {
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: cover;
            transition: 0.5s;
        }

        .social-icons {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            transform: translateY(100%);
            opacity: 0;
            visibility: hidden;
            text-align: center;
            transition: transform 0.3s, opacity 0.3s, visibility 0.3s;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            color: white;
            font-size: 30px;
            text-decoration: none;

        }

        .card-wrapper img {
            transition: 0.5s;
        }

        .card-wrapper:hover img {
            transform: scale(1.1);
        }

        .content h5 {
            color: #15151C;
            font-size: 50px;
        }

        .container {
            width: 500px;
            height: 500px;
            background-color: red;
            clip-path: circle(50% at 0 0);
            transition: all 0.5s ease;
        }

        .container:hover {
            clip-path: circle(100%);
        }

        .img {
            width: 250px;
        } */
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #131313;
        } */

        /* .container {
            position: relative;
            margin: 0 20px;
        }

        .container .card {
            position: relative;
            width: 320px;
            height: 450px;
            background: #232323;
            border-radius: 20px;
            overflow: hidden;
        }

        .container .card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #9BDC28;
            clip-path: circle(150px at 80% 20%);
            transition: 0.5s ease-in-out;
        }

        .container .card:hover:before {
            clip-path: circle(300px at 80% -20%);
        }

        .container .card:after {
            content: 'Nike';
            position: absolute;
            top: 30%;
            left: -20%;
            font-size: 12em;
            font-weight: 800;
            font-style: italic;
            color: rgba(255, 255, 255, 0.04);
        }

        .container .card .imgBx {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10000;
            width: 100%;
            height: 220px;
            transition: 0.5s;
        }

        .container .card:hover .imgBx {
            top: 0;
            transform: translateY(0%);
        }

        .container .card .imgBx img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-25deg);
            width: 270px;
        }

        .container .card .contentBx {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            text-align: center;
            transition: 1s;
            z-index: 10;
        }

        .container .card:hover .contentBx {
            height: 210px;
        }

        .container .card .contentBx h2 {
            position: relative;
            font-weight: 600;
            letter-spacing: 1px;
            color: #FFFFFF;
        }

        .container .card .contentBx .size,
        .container .card .contentBx .color {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 8px 20px;
            transition: 0.5s;
            opacity: 0;
            visibility: hidden;
        }

        .container .card:hover .contentBx .size {
            opacity: 1;
            visibility: visible;
            transition-delay: 0.5s;
        }

        .container .card:hover .contentBx .color {
            opacity: 1;
            visibility: visible;
            transition-delay: 0.6s;
        }

        .container .card .contentBx .size h3,
        .container .card .contentBx .color h3 {
            color: #FFFFFF;
            font-weight: 300;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-right: 10px;
        }

        .container .card .contentBx .size span {
            width: 26px;
            height: 26px;
            text-align: center;
            line-height: 26px;
            font-size: 14px;
            display: inline-block;
            color: #111111;
            background: #FFFFFF;
            margin: 0 5px;
            transition: 0.5s;
            color: #111111;
            border-radius: 4px;
            cursor: pointer;
        }

        .container .card .contentBx .size span:hover {
            background: #9BDC28;
        }

        .container .card .contentBx .color span {
            width: 20px;
            height: 20px;
            background: #FF0;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
        }

        .container .card .contentBx .color span:nth-child(2) {
            background: #9BDC28;
        }

        .container .card .contentBx .color span:nth-child(3) {
            background: #03A9F4;
        }

        .container .card .contentBx .color span:nth-child(4) {
            background: #E91E63;
        }

        .container .card .contentBx a {
            display: inline-block;
            padding: 10px 20px;
            background: #FFFFFF;
            border-radius: 4px;
            margin-top: 10px;
            text-decoration: none;
            font-weight: 600;
            color: #111111;
            opacity: 0;
            transform: translateY(50px);
            transition: 0.5s;
        }

        .container .card:hover .contentBx a {
            opacity: 1;
            transform: translateY(0px);
            transition-delay: 0.75s;
        }



        .image {
            width: 320px;
        } */
    </style>

    <!-- <div class=" d-flex flex-column flex-md-row justify-content-center align-items-center gap-3 mt-5">
        <div class="tpn_card">
            <img src="./img/seller-1.jpg" class="w-100 mb-4" />
            <h5>Dragon Art</h5>
            <p>Enjoy this clean styling.</p>
            <div class="buttons">
                <a href="#" class="btn tpn_btn">Explore</a>
                <a href="#" class="btn tpn_btn">Add to cart</a>
            </div>
        </div>
        <div class="tpn_card">
            <img src="./img/seller-1.jpg" class="w-100 mb-4" />
            <h5>Dragon Art</h5>
            <p>Enjoy this clean styling.</p>
            <div class="buttons">
                <a href="#" class="btn tpn_btn">Explore</a>
                <a href="#" class="btn tpn_btn">Add to cart</a>
            </div>
        </div>
        <div class="tpn_card">
            <img src="./img/seller-1.jpg" class="w-100 mb-4" />
            <h5>Dragon Art</h5>
            <p>Enjoy this clean styling.</p>
            <div class="buttons">
                <a href="#" class="btn tpn_btn">Explore</a>
                <a href="#" class="btn tpn_btn">Add to cart</a>
            </div>
        </div>
        <div class="tpn_card">
            <img src="./img/seller-1.jpg" class="w-100 mb-4" />
            <h5>Dragon Art</h5>
            <p>Enjoy this clean styling.</p>
            <div class="buttons">
                <a href="#" class="btn tpn_btn">Explore</a>
                <a href="#" class="btn tpn_btn">Add to cart</a>
            </div>
        </div>
        <div class="tpn_card">
            <img src="./img/seller-1.jpg" class="w-100 mb-4" />
            <h5>Dragon Art</h5>
            <p>Enjoy this clean styling.</p>
            <div class="buttons">
                <a href="#" class="btn tpn_btn">Explore</a>
                <a href="#" class="btn tpn_btn">Add to cart</a>
            </div>
        </div>
    </div> -->
    <?php //include_once("./footer.php")  
    ?>



    <!-- <div class="ccard">
        <div class="ccard-content">
            <img src="./img/seller-1.jpg" alt="">
        </div>
        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-opencart"></i></a>
            <a href="#"><i class="fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-regular fa-plus"></i></a>
            <a href="#" class="btn btn-primary">add to cart</a>
        </div>
        <div class="content">
            <h5>sdssdcsdsd</h5>

        </div> -->
    <!-- </div> -->
    <!-- <div class="container position-relative">
        <img src="./img/seller-1.jpg" class="position-absolute">
    </div> -->


    <!-- <div class="container-fluid">
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img class="image" src="https://www.c-store.cz/fotky38463/fotos/_vyrp11_1910895terraultra-g-260-green-2.png">
                </div>
                <div class="contentBx">
                    <h2>Nike Shoes</h2>
                    <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
                    <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img class="image" src="https://www.c-store.cz/fotky38463/fotos/_vyrp11_1910895terraultra-g-260-green-2.png">
                </div>
                <div class="contentBx">
                    <h2>Nike Shoes</h2>
                    <div class="size">
                        <h3>Size :</h3>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                    </div>
                    <div class="color">
                        <h3>Color :</h3>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
    </div> -->

    <style>
        .sellerflow{
            width: 100%;
            height: auto;
            flex-wrap: wrap;
            /* display: flex; */
            /* justify-content: center;
            align-items: center; */
        }

        .container-flow {
            width: 330px;
            height: 530px;
            flex-direction: column;
        }

        .container {
            width: 300px;
            height: 400px;
        }

        .hover-switch {
            cursor: pointer;
        }

        .hover-switch img {
            position: absolute;
            object-fit: cover;
            width: 300px;
            height: 400px;
            border-radius: 10px;
        }

        .hover-switch>img:last-of-type {
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            /* -moz-transition: opacity 0.5s ease-in-out; */
            -webkit-transition: opacity 0.5s ease-in-out;
        }

        .hover-switch:hover>img:last-of-type {
            opacity: 1;
        }

        .hover-switch:hover>img:first-of-type {
            opacity: 1;
        }


        /* .social-icons {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            transform: translateY(100%);
            opacity: 0;
            visibility: hidden;
            text-align: center;
            transition: transform 0.3s, opacity 0.3s, visibility 0.3s;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 10px;
            color: white;
            font-size: 30px;
            text-decoration: none;

        }

        .ccard:hover .social-icons {
            transform: translateY(-100px);
            opacity: 1;
            visibility: visible;
        } */
    </style>
    <div class="sellerflow">
        <div class="container-flow">
            <a href="./index.php">
                <div class="container ">
                    <div class="hover-switch">
                        <img src="https://wpbingosite.com/wordpress/bemins/wp-content/uploads/2020/12/products-1-1-600x820.jpg" alt="" />
                        <img src="https://wpbingosite.com/wordpress/bemins/wp-content/uploads/2020/12/products-2-1-600x820.jpg" alt="" />
                    </div>
                </div>
            </a>
            <div class="containerr mx-5 mt-4">
                <h1>90s Chino Pant</h1>
                <p>$50.00 – $60.00</p>
                <div class="color flex gap-3">
                    <button type="button" class="btn " data-bs-toggle="tooltip" data-bs-placement="left" title="Skyblue" style="width:20px ; height:20px; border:1px solid black; background-color:#54d9e1; border-radius:80px;"></button>
                    <button type="button" class="btn " data-bs-toggle="tooltip" data-bs-placement="bottom" title="White" style="width:20px ; height:20px; border:1px solid black; background-color:white; border-radius:80px;"></button>
                    <button type="button" class="btn " data-bs-toggle="tooltip" data-bs-placement="right" title="Yellow" style="width:20px ; height:20px; border:1px solid black; background-color:yellow; border-radius:80px;"></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>