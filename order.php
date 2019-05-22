<?php
    session_start();
    include 'connect.php';
    global $link;
    $products = "SELECT * FROM cart";
    $orders = mysqli_query($link, $products);
    if (isset($_POST['complete'])) {
        foreach ($orders as $order) {
            $user_id = $order['user_id'];
            $item_id = $order['items_id'];
            $adress = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
            if(!empty($adress)) {
                $sql = 'INSERT INTO orders (user_id, item_id, adress) VALUES ("' . $user_id . '", "' . $item_id . '", "' . $adress . '")';
                if (mysqli_query($link, $sql)) {
                } else {
                    echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
                }
            }
            else {
                echo "<h1>Invalid adress</h1>";
			    header( "refresh:2;url=http://petshop.site/cart.php" );
            }
        }

        if(!empty($adress)) {

            $sql = 'DELETE FROM cart WHERE user_id="'.$_SESSION['id'].'"';
            if(mysqli_query($link, $sql)) {
                echo '<h1>Ordered</h1>';
                header( "refresh:2;url=http://petshop.site/index.php" );
            }
            else {
                echo "Error,cart full";
            }
        } else {
            echo "<h1>Invalid adress</h1>";
            header( "refresh:2;url=http://petshop.site/cart.php" );
        }
    }
    mysqli_close($link);
?>
