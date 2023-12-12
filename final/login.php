
<!DOCTYPE html>
<html lang="en">
<!-- Header Section -->
<?php
	$header = 'Login - Time of BD!';
	include './partials/header.php';
?>

<body>
	<!-- nav bar -->
    <?php
        $active = "";
        include './partials/navbar.php';
    ?>

<?php
	// check if POST dictionary is null (means this was a get request - not trying to register yet)

    $errors = null;

	if($conn){
		if($_POST != null){
			$formElements = array("username", "password");
	
			$elementsEmpty = false;
	
			foreach ($formElements as $elements) {
				// if one of the elements in the form is empty, we must set the $elementsEmpty to true and return error to user
				if(empty($_POST[$elements])){
					$elementsEmpty = true;
				}
			}
	
			// check all the elements are not empty and the passwords match
			if(!$elementsEmpty){
				mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
				$stmt = $conn->prepare("SELECT `id`, `first_name`, `last_name`, `password` FROM `240Users` WHERE `username` = ? LIMIT 1");
	
				//bind
				$stmt->bind_param("s", $_POST["username"]);
	
				//execute
				$stmt->execute();
                $stmt->bind_result($id, $first_name, $last_name, $hashed_password);


                // Fetch the results
                if ($stmt->fetch()) {
                    // verify the password
                    if (password_verify($_POST["password"], $hashed_password)) {
                        $_SESSION['id'] = $id;
                        $_SESSION['first_name'] = $first_name;
                        $_SESSION['last_name'] = $last_name;
                    } else {
                        $errors = "Invalid username or password";
                    }
                } else {
                    $errors = "No user found with that username";
                }

				$stmt->close();
	
				header('Location: index.php');
			}
		}
	}

	
?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="register-form" method="POST">
		<h1>Login</h1>

        <?php 
            if($errors){
            echo '<div class="error-message">' . $errors . '</div>';
            }

        ?>

		<label for="username">username:</label>
		<input type="text" name="username" id="username" required><br><br>

		<label for="password">password:</label>
		<input type="password" name="password" id="password" required><br><br>
        <a href="./register.php" id="register-link">Need to register?</a>
        <br>
		<br>
		<input type="submit" value="Log In">
	</form>
</body>
</html>