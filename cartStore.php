<?php

session_start();
include 'connect.php';
global $link;

if (isset($_POST['delete'])) {
    $id = $_POST['user_id'];
    $sql = 'DELETE FROM cart WHERE user_id='.$id.'';
    if (mysqli_query($link, $sql)) {
        echo '<h1>Record deleted successfully.</h1>';
        echo '<h1>Redirecting ...</h1>';
        header( "refresh:2;url=http://petshop.site/cart.php" );
    } else {
        echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
    }
}

if (isset($_POST['addCart'])) {
    include 'connect.php';
    $item_id = $_POST['item_id'];
    if (empty($item_id)) {
        echo '<h1>An error has occured, we will redirect you back and please try again</h1>';
        header( "refresh:5;url=http://petshop.site/shop.php" );
        die();
    } else {
        if (!isset($_SESSION['id'])) {
            echo '<h1>An error has occured, you are not logged in, we will redirect you back and please try again</h1>';
            header( "refresh:4;url=http://petshop.site/shop.php" );
            die();
        } else {
            $user_id = $_SESSION['id'];
            $sql = 'INSERT INTO cart (user_id, items_id) VALUES ("' . $user_id . '", "' . $item_id . '")';
            if (mysqli_query($link, $sql)) {
                echo '<h1>Records successfully added to cart.</h1>';
                echo '<h1>Redirecting ...</h1>';
                header( "refresh:3;url=http://petshop.site/shop.php" );
                die();
            } else {
                echo '<h1>An error has occured, insert into database error, we will redirect you back and please try again</h1>';
                header( "refresh:5;url=http://petshop.site/shop.php" );
                die();
            }
        }
    }
} else {
    echo '<h1>Eroare</h1>';
    echo '</br><a href="index.php" class="button">Return to home</a>';
    die();
}
