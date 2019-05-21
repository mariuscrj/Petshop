<?php 
session_start();
include 'connect.php';
global $link;
	if (isset($_POST['save'])) {
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		if( $_FILES['image']['tmp_name']!= null) {
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		} else {
			echo "<h1>No image</h1>";
			header( "refresh:2;url=http://petshop.site/admin.php" );
		}
		$price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
		if(empty($name)) {
			echo "<h1>Invalid name</h1>";
			header( "refresh:2;url=http://petshop.site/admin.php" );
		}
		else {
			if($price != null) {
				$sql = 'INSERT INTO items (name, image, price) VALUES ("' . $name . '", "' . $image . '", "' . $price . '")';
				
				if (mysqli_query($link, $sql)) {
					echo '<h1>Records inserted successfully.</h1>';
					echo '<h1>Redirecting ...</h1>';
					header( "refresh:2;url=http://petshop.site/admin.php" );
				} else {
					echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
				}
			}
			else {
				echo '<h1>Invalid price</h1>';
				header( "refresh:2;url=http://petshop.site/admin.php" );
			}
		}
	}

	if (isset($_POST['save_edit'])) {
		$id = $_POST['item_id'];
		if(empty($_FILES['edit_image']['tmp_name'])){
			echo '<h1>No image</h1>';
			echo '<h1>Redirect</h1>';
			header( "refresh:2;url=http://petshop.site/admin.php" );
		} else {
			$image = addslashes(file_get_contents($_FILES['edit_image']['tmp_name']));
			$name = filter_var($_POST['edit_name'], FILTER_SANITIZE_STRING);
			$price = filter_var($_POST['edit_price'], FILTER_SANITIZE_NUMBER_INT);
			if(empty($name)) {
				echo "<h1>Invalid name</h1>";
				header( "refresh:2;url=http://petshop.site/admin.php" );
			} else {
				if($price == null) {
					echo '<h1>Invalid price</h1>';
					header( "refresh:2;url=http://petshop.site/admin.php" );
				} else {
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
			}
		}
	}
	
	if (isset($_POST['delete'])) {
		$id = $_POST['item_id'];
		$sql = 'DELETE FROM items WHERE id="'.$id.'"';
		if (mysqli_query($link, $sql)) {
			echo '<h1>Record deleted successfully.</h1>';
			echo '<h1>Redirecting ...</h1>';
			header( "refresh:2;url=http://petshop.site/admin.php" );
		} else {
			echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
		}
	}

  // Inchidere conexiune
	mysqli_close($link);
	