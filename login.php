<?php

session_start();

if (isset($_POST['submit'])) {
    include 'connect.php';
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link ,$_POST['password']);
    if (empty($email) || empty($email)) {
        echo '<h1>You should complete all fields</h1>';
        echo '</br><a href="index.php" class="button">Return to home</a>';
        die();
    }
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<h1>Not a email</h1>';
            echo '</br><a href="index.php" class="button">Return to home</a>';  
            die();
        }
        else{
            $sql = "SELECT * FROM users WHERE email = '$email';";
            $result = mysqli_query($link , $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1) {
                echo '<h1>No user with this email</h1>';
                echo '</br><a href="index.php" class="button">Return to home</a>'; 
                die();
            }
            else {
                $row = mysqli_fetch_assoc($result);
                //De-hasing the password
                $hashPassCheck = password_verify($password, $row['password']);
                if ($hashPassCheck == false) {
                    echo '<h1>Invalid password</h1>';
                    echo '</br><a href="index.php" class="button">Return to home</a>'; 
                    die();
                } elseif ($hashPassCheck == true) {
                    //Login the user
                    $_SESSION['id'] = $row['user_id'];
                    $_SESSION["username"] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['admin'] = $row['admin'];
                    if($row['admin'] == 1) {
                        echo '<h1>Login successfully</h1>';
                        echo '</br><a href="admin.php" class="button">Go to adminstration</a>';
                    }
                    else {
                        echo '<h1>Login successfully</h1>';
                        echo '</br><a href="shop.php" class="button">Go to the shop</a>';
                        die();
                    }
                }   
            }
        }
    }
}
else {
    echo '<h1>Eroare</h1>';
    echo '</br><a href="index.php" class="button">Return to home</a>';
    die();
}

