<?php
    include 'connect.php';
    global $link;
    $products = "SELECT * FROM cart";
    $orders = mysqli_query($link, $products);
    if (isset($_POST['complete'])) {
        foreach ($orders as $order) {
            $user_id = $order['user_id'];
            $item_id = $order['items_id'];
            $adress = $_POST['adress'];
            $sql = 'INSERT INTO orders (user_id, item_id, adress) VALUES ("' . $user_id . '", "' . $item_id . '", "' . $adress . '")';
            if (mysqli_query($link, $sql)) {
            } else {
                echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
            }
        }
        $sql = "DELETE FROM cart ";
        if(mysqli_query($link, $sql)) {
            echo '<h1>Ordered</h1>';
            echo '</br><a href="index.php" class="button">Return to home</a>';
        }
        else {
            echo "Error,cart full";
        }
    }
    mysqli_close($link);
?>
