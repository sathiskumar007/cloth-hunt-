<?php
include_once('/xampp/htdocs/php/cloth-hunt/config.php');
include_once('/xampp/htdocs/php/cloth-hunt/head.php');
include_once('/xampp/htdocs/php/cloth-hunt/nav.php');
?>
<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    .shopping-cart {
        width: 750px;
        height: 423px;
        margin: 80px auto;
        background: #FFFFFF;
        box-shadow: 1px 2px 3px 0px rgba(0, 0, 0, 0.4);
        border-radius: 6px;
        display: flex;
        flex-direction: column;
    }

    .title {
        height: 60px;
        border-bottom: 1px solid #E1E8EE;
        padding: 20px 30px;
        color: #5E6977;
        font-size: 18px;
        font-weight: 400;
    }

    .item {
        padding: 20px 30px;
        height: 120px;
        display: flex;
    }

    .item:nth-child(3) {
        border-top: 1px solid #E1E8EE;
        border-bottom: 1px solid #E1E8EE;
    }

    /* buttons */
    .buttons {
        position: relative;
        padding-top: 30px;
        margin-right: 60px;
    }

    .delete-btn,
    .like-btn {
        display: inline-block;
        Cursor: pointer;
    }

    .delete-btn {
        width: 18px;
        height: 17px;
        background: url(&amp;quot;delete-icn.svg&amp;quot;) no-repeat center;
    }

    .like-btn {
        position: absolute;
        top: 9px;
        left: 15px;
        background: url('twitter-heart.png');
        width: 60px;
        height: 60px;
        background-size: 2900%;
        background-repeat: no-repeat;
    }

    .is-active {
        animation-name: animate;
        animation-duration: .8s;
        animation-iteration-count: 1;
        animation-timing-function: steps(28);
        animation-fill-mode: forwards;
    }

    @keyframes animate {
        0% {
            background-position: left;
        }

        50% {
            background-position: right;
        }

        100% {
            background-position: right;
        }
    }


    .image {
        margin-right: 50px;
    }

    .description {
        padding-top: 10px;
        margin-right: 60px;
        width: 115px;
    }

    .description span {
        display: block;
        font-size: 14px;
        color: #43484D;
        font-weight: 400;
    }

    .description span:first-child {
        margin-bottom: 5px;
    }

    .description span:last-child {
        font-weight: 300;
        margin-top: 8px;
        color: #86939E;
    }

    .quantity {
        padding-top: 20px;
        margin-right: 60px;
    }

    .total-price {
        width: 83px;
        padding-top: 27px;
        text-align: center;
        font-size: 16px;
        color: #43484D;
        font-weight: 300;
    }

    .quantity input {
        --webkit-appearance: none;
        border: none;
        text-align: center;
        width: 32px;
        font-size: 16px;
        color: #43484D;
        font-weight: 300;
    }

    button[class*=btn] {
        width: 30px;
        height: 30px;
        background-color: #E1E8EE;
        border-radius: 6px;
        border: none;
        cursor: pointer;
    }

    .minus-btn img {
        margin-bottom: 3px;
    }

    .plus-btn img {
        margin-top: 2px;
    }

    button:focus,
    input:focus {
        outline: 0;
    }

    /* responsive */
    @media (max-width: 800px) {
        .shopping-cart {
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .item {
            height: auto;
            flex-wrap: wrap;
            justify-content: center;
        }

        .image img {
            width: 50%;
        }

        .image,
        .quantity,
        .description {
            width: 100%;
            text-align: center;
            margin: 6px 0;
        }

        .buttons {
            margin-right: 20px;
        }
    }
</style>


<?php
// $id=$_GET["pId"];

// $sql='SELECT * FROM seller WHERE id=' . $id;
// $pro=mysqli_query($config, $sql);

// while($row =mysqli_fetch_array($pro)){
//     $pId=$row[0]
// }
// echo $id;

// $id = $_GET['pId'];
?>

<?php
if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];
    // Now you have the product ID, you can use it as needed
    echo "Product ID: " . $productId;
    // Process adding the product to the cart or perform any other action
} else {
    echo "Product ID not found in the URL.";
}
?>


<div class="shopping-cart">
    <!-- Title -->

    <div class="title">
        Shopping Bag
    </div>

    <!-- Product #1 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="item-1.png" alt="" />
        </div>

        <div class="description">
            <span>Common Projects</span>
            <span>Bball High</span>
            <span>White</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$549</div>
    </div>

    <!-- Product #2 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="item-2.png" alt="" />
        </div>

        <div class="description">
            <span>Maison Margiela</span>
            <span>Future Sneakers</span>
            <span>White</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$870</div>
    </div>

    <!-- Product #3 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="item-3.png" alt="" />
        </div>

        <div class="description">
            <span>Our Legacy</span>
            <span>Brushed Scarf</span>
            <span>Brown</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$349</div>
    </div>
</div>

<script>
    // Toggle like button active state
    $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
    });

    // Decrease value with minus button
    $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        let $this = $(this);
        let $input = $this.closest('div').find('input');
        let value = parseInt($input.val());

        if (value > 1) {
            value = value - 1;
        } else {
            value = 0;
        }

        $input.val(value);
    });

    // Increase value with plus button
    $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        let $this = $(this);
        let $input = $this.closest('div').find('input');
        let value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
        } else {
            value = 100;
        }

        $input.val(value);
    });
</script>

<?php
include_once('/xampp/htdocs/php/cloth-hunt/footer.php');
?>