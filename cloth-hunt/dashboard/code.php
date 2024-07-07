<?php

session_start();

include_once('/xampp/htdocs/php/cloth-hunt/config.php');



// if (isset($_POST['delete'])) {
//     $userid = mysqli_real_escape_string($config, $_POST['delete']);
//     // echo '<script>alert("$userid")</script>';

//     $query = "UPDATE seller set userStatus='$userStatus' WHERE id='$hidden_user_id'";
//     // $query = "DELETE FROM `seller` WHERE id='$userid' ";
//     $query_run = mysqli_query($config, $query);
//     if ($query_run) {
//         $_SESSION['message'] = 'Card Deleted Sucessfully';
//         header('Location:index.php');
//         exit(0);
//     } else {
//         $_SESSION['message'] = "Card Not Deleted";
//         header("Location:index.php");
//         exit(0);
//     }
// }

// if (isset($_POST['delete'])) {
//     include 'config.php'; // Include your database configuration file
//     $userid = mysqli_real_escape_string($config, $_POST['delete']);

//     // Debugging output to check $userid
//     echo '<script>alert("' . $userid . '")</script>';

//     // SQL query to delete record
//     $query = "DELETE FROM `seller` WHERE id='$userid'";

//     // Execute the query
//     $query_run = mysqli_query($config, $query);

//     // Check if the query executed successfully
//     if ($query_run) {
//         $_SESSION['message'] = 'Card Deleted Successfully';
//         header('Location: index.php');
//         exit(); // Exit after redirect
//     } else {
//         $_SESSION['message'] = 'Card Not Deleted: ' . mysqli_error($config); // Error message including MySQL error
//         header('Location: index.php');
//         exit(); // Exit after redirect
//     }
// }

if (isset($_POST['delete_user'])) {
    $userid = mysqli_real_escape_string($config, $_POST['delete_user']);

    // Prepare and execute the DELETE query
    $query = "DELETE FROM seller WHERE id = $userid";
    $stmt = mysqli_prepare($config, $query);
    mysqli_stmt_bind_param($stmt, "i", $userid);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        $_SESSION['message'] = 'Product Deleted Successfully';
    } else {
        $_SESSION['message'] = 'Product Not Deleted';
    }

    header('Location: index.php');
    exit();
}

if (isset($_POST['update_user'])) {
    $imgfront = mysqli_real_escape_string($config, $_POST['imagePath1']);
    $imgback = mysqli_real_escape_string($config, $_POST['imagePath1']);
    $title = mysqli_real_escape_string($config, $_POST['title']);
    $price = mysqli_real_escape_string($config, $_POST['rate']);

    $query = "UPDATE `seller` (`imagePath`,`imageback`,`tittle`,`rate`)VALUES('$imgfront','$imgback','$title','$price');";
    echo $query;
    $query_run = mysqli_query($config, $query);
    if ($query_run) {
        $_SESSION['message'] = "Product Updated Sucessfully";
        header('Location:index.php');
        exit(0);
    } else {
        $_SESSION['message'] = 'Product Not Updated';
        header('Location:index.php');
        exit(0);
    }
}

if (isset($_POST['save_card'])) {
    $imgfront = mysqli_real_escape_string($config, $_POST['imagePath1']);
    $imgback = mysqli_real_escape_string($config, $_POST['imagePath1']);
    $title = mysqli_real_escape_string($config, $_POST['title']);
    $price = mysqli_real_escape_string($config, $_POST['rate']);

    $cardStatus = "active";

    // $stuStatus = "active";

    // $query = "INSERT INTO seller (userName,imagePath,imageback,title,rate) VALUES('$imgfront','$imgback','$title','$price')";
    $query = "INSERT INTO `seller` (`imagePath`,`imageback`,`title`,`rate`,`userStatus`)VALUES('$imgfront','$imgback','$title','$price','$cardStatus');";

    $query_run = mysqli_query($config, $query);

    if ($query_run) {
        $_SESSION['message'] = "Card Created Sucessfully";
        header('Location:index.php');
        exit(0);
    } else {
        $_SESSION['message'] = "card Not Created";
        header('Location:create.php');
    }
}
