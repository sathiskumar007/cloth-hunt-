<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth Hunt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="./about.css"> -->
    <link rel="stylesheet" href="shop.css">

</head>

<?php
// include_once('head.php');
include_once('nav.php');

?>

<style>
    /* seller */

    .c-container {
        width: 300px;
        height: auto;
        display: flex;
        justify-content: start;
        align-items: center;
        gap: 20px;
        flex-direction: column;
        transition: all ease-in-out 0.2s;
        flex-wrap: wrap;
    }

    .img-container {
        width: 100% !important;
        object-fit: cover !important;
        transition: all ease-in-out 0.2s;
    }

    .img-container img {
        width: 100%;
        height: auto;
        object-fit: cover;
        /* background-position: center; */
    }

    .text-container {
        width: 100%;
        height: auto;
    }

    .c-container:hover {
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.315);
    }

    @media screen and (max-width:1024px) and (min-width: 50pxpx) {
        .c-container {
            flex-direction: row;
            flex-wrap: wrap;
        }
    }

    /* sellerend */
</style>


<section style="margin-top: 50px;">
    <div class="container-fluid w-100 d-flex flex-column justify-content-center align-items center">
        <div class="text-container text-center">
            <h5 class="text-center">Shop</h5>
            <h2 class="text-center">OUR PRODUCTS</h2>
        </div>

        <div class="row w-100  d-flex justify-content-center ">
            <div class="column ">
                <div class="cardd d-flex  align-items-center">
                    <img class="image" src="https://img.freepik.com/free-photo/medium-shot-athlete-with-headband_23-2148267338.jpg?ga=GA1.1.64353436.1667538898&semt=ais_user" alt="Bodyfit">
                    <div class="container text-start">
                        <h5 class=" fw-semi-bold text-start">Bodyfit</h5>
                        <p class=" sub-title">40 Products</p>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="cardd d-flex  align-items-center">
                    <img class="image" src="https://img.freepik.com/free-photo/boy-filming-with-camcorder-yellow-scene_23-2148184779.jpg?t=st=1721116803~exp=1721120403~hmac=c9df89933eb43b52ecf1190eb506d4dc5f68c48a6bebb140529ea915f703fff2&w=826" alt="men">
                    <div class="container text-start">
                        <h5 class=" fw-semi-bold text-start">Men</h5>
                        <p class=" sub-title">20 Products</p>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="cardd d-flex  align-items-center">
                    <img class="image" src="https://img.freepik.com/free-photo/black-friday-shopping-woman-wearing-fashion-clothes_23-2148665725.jpg?ga=GA1.1.64353436.1667538898&semt=ais_user" alt="Bodyfit">
                    <div class="container text-start">
                        <h5 class=" fw-semi-bold text-start">Women</h5>
                        <p class=" sub-title">14 Products</p>
                    </div>
                </div>
            </div>
            <div class="column ">
                <div class="cardd d-flex  align-items-center">
                    <img class="image" src="https://img.freepik.com/free-photo/attractive-girl-with-flying-hair-posing-studio_158595-803.jpg?ga=GA1.1.64353436.1667538898&semt=ais_user" alt="Bodyfit">
                    <div class="container text-start">
                        <h5 class=" fw-semi-bold text-start">Women Fashion</h5>
                        <p class=" sub-title">40 Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<section>
    <div class="container-fluid w-100 d-flex flex-column gap-3 justify-content-center align-items-center" style=" width:95%!important;margin-top: 50px;margin-bottom: 50px;">
        <div class="row w-100  d-flex  justify-content-between align-items-start" style="gap: 20px; width:90%;">
            <!-- catageory column -->
            <div class="column w-25 d-flex justify-content-start gap-3 fw-semi-bold  align-items-start ">
                <h5 class="p-2 px-3 w-100" style="background-color: rgba(0, 0, 0, 0.1);">TYPE</h5>

                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Body Fit (32)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Collections (20)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Activities (12)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Fashion Style (30)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Kids (32)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Mens (15)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Women (30)</span>
                    </label>
                </div>
                <br>
                <!-- second column -->

                <h5 class="p-2 px-3 w-100" style="background-color: rgba(0, 0, 0, 0.1);">COLOR</h5>

                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Beige (3)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Black (5)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Blue (10)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Brown (10)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Brown (2)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Gray (15)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">Red (6)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">White (16)</span>
                    </label>
                </div> <br>
                <!-- third column -->
                <h5 class="p-2 px-3 w-100" style="background-color: rgba(0, 0, 0, 0.1);">Price</h5>

                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">&#8377;500 Under</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">&#8377;500 - &#8377;999</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">&#8377;1000 - &#8377;1999</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">&#8377;2000 - &#8377;2999</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3"> &#8377;3000 - Over </span>
                    </label>
                </div>
                <!-- fouth column -->
                <h5 class="p-2 px-3 w-100" style="background-color: rgba(0, 0, 0, 0.1);">Size</h5>

                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">XS (17)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">S (20)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">M (17)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3">L (27)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3"> XL (15)</span>
                    </label>
                </div>
                <div class="px-2 checkbox-container justify-content-start ">
                    <label class="checkbox-label px-3">
                        <input type="checkbox">
                        <span class="label-text px-3"> Free Size (15)</span>
                    </label>
                </div>

            </div>

            <!-- card row -->
            <div class="row w-75 container-fluid">



                <div class="container-fluid d-flex flex-row flex-wrap gap-5" style=" margin-top: 30px;">
                    <div class="c-container row">
                        <div class="img-container ">
                            <img src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/06/38-450x572.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <h5 style='font-size: clamp(10px, 1.5vw, 20px)'>Chiffon Wrap Maxi Dress</h5>
                            <div class='price d-flex'>
                                <p class=' fw-regular' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1199</p>&nbsp;&nbsp;
                                <del class=' ' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1399</del>
                            </div>
                        </div>
                    </div>
                    <div class="c-container row">
                        <div class="img-container ">
                            <img src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/01-450x572.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <h5 style='font-size: clamp(10px, 1.5vw, 20px)'>Polar Fleece Jacket</h5>
                            <div class='price d-flex'>
                                <p class=' fw-regular' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1199</p>&nbsp;&nbsp;
                                <del class=' ' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1399</del>
                            </div>
                        </div>
                    </div>
                    <div class="c-container row">
                        <div class="img-container ">
                            <img src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/27-450x572.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <h5 style='font-size: clamp(10px, 1.5vw, 20px)'>Hooded Jacket</h5>
                            <div class='price d-flex'>
                                <p class=' fw-regular' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1199</p>&nbsp;&nbsp;
                                <del class=' ' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1399</del>
                            </div>
                        </div>
                    </div>
                    <div class="c-container row">
                        <div class="img-container ">
                            <img src="https://nooni-be87.kxcdn.com/nooni-fashion/wp-content/uploads/2023/04/06-450x572.jpg" alt="">
                        </div>
                        <div class="text-container">
                            <h5 style='font-size: clamp(10px, 1.5vw, 20px)'>Women Hooded Jacket </h5>
                            <div class='price d-flex'>
                                <p class=' fw-regular' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1199</p>&nbsp;&nbsp;
                                <del class=' ' style='font-size: clamp(10px, 1.5vw, 20px)'>&#8377;1399</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>


<?php
// include_once('footer.php');
include('./footer.php')

?>