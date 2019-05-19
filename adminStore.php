<?php 
session_start();
include 'connect.php';
global $link;
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$price = $_POST['price'];
		$sql = 'INSERT INTO items (name, image, price) VALUES ("' . $name . '", "' . $image . '", "' . $price . '")';
		
		if (mysqli_query($link, $sql)) {
			echo '<h1>Records inserted successfully.</h1>';
			echo '<h1>Redirecting ...</h1>';
			header( "refresh:5;url=http://petshop.site/admin.php" );
		} else {
			echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
		}
	}

	if (isset($_POST['save_edit'])) {
		$id = $_POST['item_id'];
		$image = addslashes(file_get_contents($_FILES['edit_image']['tmp_name']));
		$name = $_POST['edit_name'];
		$price = $_POST['edit_price'];
		$sql = 'UPDATE items
					SET name = "'.$name.'", image = "' . $image . '", price = "' . $price . '"
					WHERE id = ' . $id . '';
		if (mysqli_query($link, $sql)) {
			echo '<h1>Records updated successfully.</h1>';
			echo '<h1>Redirecting ...</h1>';
			header( "refresh:5;url=http://petshop.site/admin.php" );
		} else {
			echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
		}
	}

	if (isset($_POST['save_edit'])) {
		$id = $_POST['item_id'];
		$image = addslashes(file_get_contents($_FILES['edit_image']['tmp_name']));
		$name = $_POST['edit_name'];
		$price = $_POST['edit_price'];
		$sql = 'UPDATE items
					SET name = "'.$name.'", image = "' . $image . '", price = "' . $price . '"
					WHERE id = ' . $id . '';
		if (mysqli_query($link, $sql)) {
			echo '<h1>Records updated successfully.</h1>';
			echo '<h1>Redirecting ...</h1>';
			header( "refresh:5;url=http://petshop.site/admin.php" );
		} else {
			echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
		}
	}
	
	if (isset($_POST['delete'])) {
		$id = $_POST['item_id'];
		$sql = 'DELETE FROM items WHERE id="'.$id.'"';
		if (mysqli_query($link, $sql)) {
			echo '<h1>Record deleted successfully.</h1>';
			echo '<h1>Redirecting ...</h1>';
			header( "refresh:5;url=http://petshop.site/admin.php" );
		} else {
			echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
		}
	}

  // Inchidere conexiune
	mysqli_close($link);
	