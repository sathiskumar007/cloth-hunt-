<?php
include_once('./head.php');
?>
<!-- <link rel="stylesheet" href="./style.css"> -->
<?php
include_once('./nav.php');
include_once('./config.php');
?>
<style>
    /* external css */

    @font-face {
        font-family: roboto;
        src: url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;800;900&display=swap');
    }


    * {
        margin: 0;
        padding: 0;
        list-style-type: none;
        font-family: roboto;
    }


    .dark-mode {
        background-color: black;
        color: white;
    }

    .nav {
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: space-around;
        background-color: #f5f5f5;
    }

    .nav .logo {
        width: 30%;
    }

    .nav ul {
        width: 40%;
        display: flex;
        justify-content: space-evenly;
    }

    .nav ul li a {
        text-decoration: none;
        line-height: 80px;
        /* color: rgb(214, 214, 214); */
        color: black;
        font-weight: medium;
    }

    .nav .icons {
        line-height: 80px;
        width: 30%;
    }

    .nav .icons i {
        gap: 30px;
        margin-left: 50px;
    }

    .nav .logo a {
        text-decoration: none;
        color: black;
        font-size: 32px;
        margin-left: 225px;
        line-height: 80px;
    }

    #ham-icon {
        font-size: 28px;
        display: none;
    }

    .nav input {
        display: none;
    }


    /* caurosel */


    .caption {
        top: 35%;
    }

    .img {
        float: right;
        /* margin-right: 150px; */
    }

    .text {
        font-size: 75px;
        text-align: left;
    }



    .btn1 {
        width: 150px;
        height: 50px;
        position: relative;
        border-radius: 5px;
        border: none;
        background: transparent;
        color: black;
        font-size: 15px;
        font-weight: regular;
        cursor: pointer;
        margin-right: 380px;
        font-family: roboto;
    }

    .btn1::before {
        content: "";
        position: absolute;
        background: #54d9e1;
        width: 100%;
        height: 3px;
        left: 0;
        bottom: 0;
        transform: scaleX(0);
        transition: .5s ease-out;
    }

    .btn1:hover::before {
        transform: scaleX(0.8);
    }

    /* caurosel end */

    /* categories */


    .categories {
        margin-top: 6%;

    }

    /* categoriesend */
    /* footer */

    .foot {
        width: 100%;
    }

    .footer {
        width: 90%;
        height: auto;
        display: flex;
        grid-template-columns: repeat(4, 1fr);
        padding: 30px;
        justify-content: center;
        align-items: start;
        margin-left: 7.5%;
    }

    .footer .left {
        width: 50%;
        display: flex;
    }

    .footer .right {
        width: 50%;
        display: flex;
    }

    .company {
        width: 50%;
    }

    .shop {
        width: 50%;
    }

    .customer {
        width: 50%;
    }

    .staytouch {
        width: 50%;
    }

    .company a {
        text-decoration: none;
        font-size: 35px;
        color: black;
        font-weight: bold;
    }

    .company p {
        font-size: 15px;
    }

    .company .social {
        width: 80%;
    }

    .company .social i {
        margin: 5px;
        padding: 8px;
        border: 1px solid black;
        border-radius: 20px;
    }

    .company .social i:hover {
        color: white;
        border-color: white;
        background-color: #54d9e1;
    }

    .shop p {
        font-size: 15px;

    }

    .customer p {
        font-size: 15px;

    }

    .staytouch p {
        font-size: 15px;
    }

    .staytouch input {
        height: 40px;
        border: none;
        background-color: #e5e5e6;
        /* border-radius: 150px; */
    }

    ::placeholder {
        color: rgb(39, 39, 39);
        font-size: 15px;
        letter-spacing: 1px;
    }

    /* footer end */





    /* responsive */


    @media(max-width:1024px) {
        .nav .logo a {
            margin-left: 100px;
        }

        .card-container {
            /* flex-direction: column; */
            margin-top: 55px;
            row-gap: 30px;
        }

        /* section h1 {
        /* margin-top: 45%; 
    } */


    }

    @media(max-width:768px) {
        .nav #ham-icon {
            display: block;
            order: 3;
            color: #54d9e1
        }

        .nav ul {
            position: absolute;
            background-color: #54d9e1;
            height: 480px;
            width: 100%;
            top: 80px;
            top: -100%;
            flex-direction: column;
            gap: 5px;
            transition-duration: 0.8s;
            z-index: -1;
        }

        .nav ul li {
            align-items: center;
            color: rgb(216, 216, 216);
            color: white;
            /* width: 100%; */

        }

        .nav ul li a {
            width: 100%;
            color: white;
            text-align: center;
            font-size: 22px;
        }

        #ham-icon {
            line-height: 90px;
        }

        #check-btn:checked~ul {
            top: 85px;
            left: 0px;

        }

        .nav .logo a {
            margin: 0px;
        }

        .nav .icons i {
            margin-left: 20px;
        }

        .footer {
            /* flex-wrap: wrap; */
            flex-direction: column;
            gap: 50px;
        }

        .footer .left {
            width: 100%;
        }

        .footer .right {
            width: 100%;
        }

        .caption {
            margin-bottom: opx;
        }

    }

    @media(max-width:425px) {
        .nav .icons i {
            margin-left: 10px;
        }

        .nav .logo a {
            font-size: 25px;
        }

        .footer {
            flex-direction: column;
            gap: 50px;
        }

        .footer .left {
            width: 100%;
            flex-direction: column;
            gap: 50px;
        }

        .footer .right {
            width: 100%;
            flex-direction: column;
            gap: 50px;
        }

        .footer .left .company,
        .footer .left .shop,
        .footer .right .customer,
        .footer .right .staytouch {
            width: 100%;
        }
    }

    @media(max-width:375px) {
        .nav .icons i {
            margin-left: 5px;
        }

        .nav .logo a {
            font-size: 20px;
        }

        .staytouch input {
            height: 40px;
            width: 160px;
            border: none;
            background-color: #e5e5e6;
        }
    }

    /* external css end */

    .container {
        width: 80%;
        /* width: 940px; */
        margin: 50px auto 0;
        padding: 15px;
        border-radius: 5px;
        display: flex;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
    }

    .xzoom-container {
        display: flex;
        flex-direction: row-reverse;
        gap: 30px;
    }

    .xzoom-container img {
        width: 400px;
        height: 600px;

    }

    .description {
        margin-right: 50px;
        width: 80%;
    }

    .description h1 {
        margin: 10px 0 10px 0;
        font-weight: 500;
    }

    .description p {
        font-size: 15px;

    }

    .description span {
        margin-top: 15px;
        display: inline-block;
        font-weight: 600;
        font-size: 30px;

    }

    .btn {
        display: flex;
        gap: 50px;
    }

    .description .btn button {
        font-size: 18px;
        padding: 10px 20px;
        margin-top: 10px;
        cursor: pointer;
        border: none;
        outline: none;
        color: white;
    }

    .buy {
        background-color: orange;
    }

    .cart {
        background-color: red;
    }

    .xzoom-thumb a {
        /* display: flex; */
        row-gap: 46px;
    }

    .xzoom-thumb a img {
        display: inline-block;
        width: 80px;
        height: 120px;
        margin-top: 20px;
    }

    .xzoom-preview {
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 20px 2px rgba(0, 0, 0, 0.2);
        width: 100%;
    }

    .active {
        border: 1px solid skyblue;
        box-shadow: 0 0px 0px 3px skyblue;
        border-radius: 5px;
    }

    .xzoom-thumb-preview {
        width: 100px;
    }
</style>

<?php

$id = isset($_GET['pId']) ? intval($_GET['pId']) : 0;
?>
<div class="container">
    <?php
    $sql = 'SELECT * FROM seller WHERE id=' . $id;
    $product = mysqli_query($config, $sql);

    while ($row = mysqli_fetch_array($product)) {
        $productId = $row[0];
        $productImageFront = $row[1];
        $productImageBack = $row[2];
        $productTitle = $row[3];
        $productPrice = $row[4];
    ?>


        <div class="xzoom-container">
            <div class="zoom">
                <img src="./img/<?php echo $productImageFront; ?>" alt="" class="xzoom">
            </div>
            <div class="xzoom-thumb">
                <a href="">
                    <img class="xzoom-gallery" src="./img/<?php echo $productImageFront; ?> " alt="">
                </a>
                <a href="">
                    <img class="xzoom-gallery" src="./img/<?php echo $productImageBack; ?> " alt="">
                </a>

                <!-- <a href="https://rukminim2.flixcart.com/image/612/612/xif0q/t-shirt/g/t/o/xl-ts23-vebnor-original-imagwhgbjnrg8hjc.jpeg?q=70">
                    <img class="xzoom-gallery" src="https://rukminim2.flixcart.com/image/612/612/xif0q/t-shirt/g/t/o/xl-ts23-vebnor-original-imagwhgbjnrg8hjc.jpeg?q=70" alt="">
                </a>
               -->
            </div>
        </div>
        <!-- zoom container end -->

        <!-- description container -->
        <div class="description">
            <h1 class="cont"><?php echo $productTitle; ?></h1>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita corrupti fuga vitae, minima quaerat a? Ex consequatur voluptates, molestiae quia quibusdam distinctio tempore. Reprehenderit molestiae explicabo fuga debitis, accusamus accusantium amet quibusdam laborum expedita architecto dicta dolor a, soluta consectetur cum quam perspiciatis voluptas repellendus reiciendis facilis deserunt ipsa aspernatur voluptatibus. Itaque repudiandae sint placeat libero maiores dolore necessitatibus laborum ipsam adipisci. Perspiciatis temporibus consequuntur repellendus iure adipisci eaque officia nemo dolorum modi saepe maiores, reprehenderit necessitatibus itaque quo laborum praesentium voluptate tenetur corporis fugiat? Architecto quam similique dolore aliquid ab debitis accusantium sequi laudantium nihil ea? Laborum, qui beatae?
            </p>
            <div class='price d-flex '>
                <p class="fs-1 fw-bold">&#8377;<?php echo $row[4] ?></p>&nbsp;&nbsp;
                <del class="fs-4 mt-3">&#8377;<?php echo $row[5] ?></del>
            </div>
            <div class="btn">
                <button class="buy">Buy Now</button>

                <form action="" method="POST"> 
                    <input type="hidden" name="product_id" value="<?php $productId ?> ">
                    <button class="cart" type="submit" name="add">Add To Cart</button>

                </form>
            </div>
        </div>

    <?php
    }

    // if(isset($_POST['add'])){
    //     // echo'working';
    //     $addId=$_POST['add'];
    //     echo $addId.'working';
    //     $query="UPDATE seller set cartStatus='one' WHERE id='$addId' ";
    // }

if (isset($_POST['add'])) {
    // Retrieve the product ID from the form
    // $addId = $_POST['add'];
    // $id=$_POST['product_id'];
    echo $productId;

    // Database update query
    $query = "UPDATE seller SET cartStatus='true' WHERE id='$productId' ";

    // Assuming you have a connection variable named $conn
    if (mysqli_query($config, $query)) {
        echo "
        <script>alert('Cart updated successfully.')</script>
        ";
    } else {
        echo "Error updating cart: " . mysqli_error($config);
    }
}

    ?>

    <!-- zoom container  -->
<!-- <h1><?php echo $productId; ?></h1> -->
    <!-- zoom container end -->
</div>
<script src="./js/jquery.js"></script>
<script src="./js/zoom.js"></script>
<script>
    $(document).ready(function() {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 450,
            tint: "#333",
            Xoffset: 15
        });
    });
</script>


<?php
include_once('./footer.php');
?>