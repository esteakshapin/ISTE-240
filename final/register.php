
<!DOCTYPE html>
<html lang="en">
<!-- Header Section -->
<?php
	$header = 'Forum - Time of BD!';
	include './partials/header.php';
?>

<?php
	// check if POST dictionary is null (means this was a get request - not trying to register yet)

	if($conn){
		if($_POST != null){
			$formElements = array("username", "password", "first_name", "last_name", "email");
	
			$elementsEmpty = false;
	
			foreach ($formElements as $elements) {
				// if one of the elements in the form is empty, we must set the $elementsEmpty to true and return error to user
				if(empty($_POST[$elements])){
					$elementsEmpty = true;
				}
			}
	
			// check all the elements are not empty and the passwords match
			if(!$elementsEmpty){
	
				$display_email = 0;
				// format display_email
				if(!empty($_POST['display_email']) && $_POST['display_email'] == 'on'){
					$display_email = 1;
				}
				
				mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
				$stmt = $conn->prepare("INSERT INTO `240Users` (`username`, `password`, `email`, `display_email`, `first_name`, `last_name`) VALUES (?,?,?,?,?, ?)");
	
				//bind
				$stmt->bind_param("sssiss", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["email"], $display_email, $_POST["first_name"], $_POST["last_name"]);
	
				//execute
				$stmt->execute();
				$stmt->close();
	
				header('Location: index.php');
			}
		}
	}

	
?>

<body>
	<!-- nav bar -->
    <?php
        $active = "Forum";
        include './partials/navbar.php';
    ?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="register-form" method="POST">
		<label for="first_name">First Name:</label><br>
		<input type="text" name="first_name" id="first_name"><br>

		<label for="last_name">Last Name:</label><br>
		<input type="text" name="last_name" id="last_name"><br>

		<label for="email">Email:</label><br>
		<input type="email" name="email" id="email"><br>

		<label for="display_email">Display Email?</label>
		<input type="checkbox" name="display_email" id="display_email"><br>

		<label for="username">username:</label>
		<input type="text" name="username" id="username"><br>

		<label for="password">password:</label>
		<input type="text" name="password" id="password"><br>


		<br>
		<input type="submit" value="Register">
	</form>
</body>
</html>
