<section>

    <?php
    // session_start(); 

    include_once('config.php');

    if (isset($_GET['submit'])) {

        setcookie('myUserId', "", time() - 60 * 60 * 24);
        // header('Location:signin.php');/
        echo "<script>window.location.href = 'signin.php';</script>";
        session_destroy();
    }
    if (isset($_COOKIE['myUserId'])) {
        $thisUserId = $_COOKIE['myUserId'];
        // echo $thisUserId;
    }
    ?>


    <div class="nav">
        <label for="check-btn" id="ham-icon"><i class="fa-solid fa-bars"></i></label>
        <input type="checkbox" name="" id="check-btn">
        <div class="logo">
            <a href="">Cloth Hunt</a>
        </div>
        <ul>
            <li><a href="./index.php" >Home</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./shop.php">Shop</a></li>
            <li><a href="">Blog</a></li>
            <?php
            $query = "SELECT * FROM `navigation` ";
            $result = mysqli_query($config, $query);

            // if (mysqli_num_rows($result) > 0) {
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         $userName = $row['userName'];
            //     }
            // }
            // echo "<li><a href='./index.php'>Home</a></li>";

            ?>
            <!-- <li>
                <form action="" method="GET" style="line-height: 80px;">
                    <button type="submit" style="border-radius: 20px; background-color: #54d9e1;border: none;color: white;" class="btn" name="submit" value="Log Out"> <i class="fa-solid fa-user-ninja"></i></button>
                </form>
            </li> -->
        </ul>
        <div class="icons gap-2">
            <a href="" class="text-dark"> <i class="fa-solid fa-magnifying-glass "></i></a>
            <a href="#offcanvasExample" class="text-dark" data-bs-toggle="offcanvas"> <i class="fa-solid fa-cart-shopping"> <span class="position-absolute top-25 start-10 translate-middle badge rounded-pill  " style="background-color:#54d9e1; ">
                        9 </span></i></a>
            <a href="" class="text-dark"> <i class="fa-regular fa-heart"> <span class="position-absolute top-25 start-10 translate-middle badge rounded-pill " style="background-color:#54d9e1; ">
                        9 </span></i></a>
            <a href="" class="text-dark"> <i class="fa-regular fa-user"> <span class="position-absolute top-25 start-10 translate-middle badge rounded-pill " style="background-color:#54d9e1; ">
                        9 </span></i></a>
        </div>
    </div>
</section>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-header  mt-5">
        <h5 class="mx-auto " id="offcanvasExampleLabel d-inline-block">Add To Cart</h5>
        <button type="button" class="btn-close px-5" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <?php
    $cartquery = "SELECT * FROM seller WHERE cartStatus='true'";
    $cartproduct = mysqli_query($config, $cartquery);
    $cartfirst = true;

    while ($row = mysqli_fetch_array($cartproduct)) {
        // Determine if this is the first item
        $pId = $row[0];
        // echo 'id='.$pId;
        // return $pId;
        $cartactiveClass = $cartfirst ? 'active' : '';
        $cartfirst = false;

        // Use concatenation to ensure PHP variables are properly parsed
        echo "
    <div class='offcanvas-body'>
        <div class='cart d-flex justify-content-around align-items-center' style='background-color: white !important;'>
            <img src='./img/" . $row[2] . "' style='width: 20%; height: auto;' class='background-cover' alt='Product Image'>
            <p>" . $row[1] . "</p>
            <div class='btn-group d-flex align-items-center'>
                <button class='plus-btn text-black py-2 px-3' style='width: 30px; border-radius: 30px; background-color: #54d9e1; color: white; border: none;'>+</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <p>1</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <form action=''>
                    <input type='hidden' name='product_id' value='1'>
                </form>
                <button class='minus-btn py-2 px-3' style='width: 30px; border-radius: 30px; background-color: #54d9e1; color: white; border: none;'><strong>-</strong></button>
            </div>
            <p> &#8377;" . $row[5] . "</p> 

           <form action='$_SERVER[PHP_SELF]' method='POST'>
                <input type='hidden' name='product_id' value='" . $pId . "'>
                <button type='submit' class='close-btn btn-outline-danger py-2 px-3 color-danger' style='border-radius: 20px;' name='remove'>R</button>
            </form>
        </div>
    </div>
    
    ";
    }

    ?>
    <?php
    // ...

    // Check if the form is submitted and the 'product_id' field is set
    if (isset($_POST['product_id'])) {
        $productId = $_POST['product_id'];

        // Perform the necessary database operations to remove the item
        $removeQuery = "UPDATE seller SET cartStatus='false' WHERE id='$productId'";
        mysqli_query($config, $removeQuery);
         echo $productId;
        // Redirect back to the previous page
        // header('Location:index.php ');
        echo '<script> window.location.href = "index.php" </script>';
        // header('Location:index.php');
        exit;
    }

    // ...

    ?>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cartItems = document.querySelectorAll('.cart');

        cartItems.forEach(cartItem => {
            const plusBtn = cartItem.querySelector('.plus-btn');
            const minusBtn = cartItem.querySelector('.minus-btn');
            const quantityText = cartItem.querySelector('p');

            // Event listener for plus button
            plusBtn.addEventListener('click', () => {
                let quantity = parseInt(quantityText.textContent);
                if (quantity < 10) {
                    quantity++;
                    quantityText.textContent = quantity;
                }
            });

            // Event listener for minus button
            minusBtn.addEventListener('click', () => {
                let quantity = parseInt(quantityText.textContent);
                if (quantity > 1) {
                    quantity--;
                    quantityText.textContent = quantity;
                }
            });
        });
    });
</script>