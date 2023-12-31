<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Forum - Time of BD!';
        include './partials/header.php';
    ?>
<body>
    <!-- nav bar -->
    <?php
        $active = "Forum";
        include './partials/navbar.php';
    
    ?>
    <!-- nav bar -->
    
    <?php
        $carouselSrc = "https://static.helpjuice.com/helpjuice_production/uploads/upload/image/4752/direct/1603737480214-Community%20Forum.png";
        $alt = "Image of a group of people with text-bubbles above their head";
        $carouselTitle = "Forum";
        include './partials/carousel.php';
    
    ?>

    <?php 
    if($conn){
		if($_POST != null){
            // trying to add a new comment
            if(!empty($_POST['comment'])){
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


                $message = $_POST['comment'];
                $from = $_POST['from'];

                $stmt = $conn->prepare('INSERT INTO `240Comments` (`from`, `message`) VALUES (?, ?)');
                $stmt->bind_param('ss', $from, $message);
                $stmt->execute();
                $stmt->close();
            }

            //trying to thumbs up
            if(!empty($_POST['action']) && $_POST['action'] == "thumbs_up" && $_POST["from"] !== ""){
                // first get comment that the user is trying to thumbs up
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
				$stmt = $conn->prepare("SELECT `thumbs_up` FROM `240Comments` WHERE `id` = ? LIMIT 1");
                //bind
				$stmt->bind_param("i", $_POST["id"]);

                //execute
				$stmt->execute();
                $stmt->bind_result($thumbs_up);
                // Fetch the results
                if ($stmt->fetch()) {
                    // if thumbs up list is null, add user as the first user
                    if($thumbs_up == null){
                        $thumbs_up = (string)$_POST['from'] . ",";
                    }else if(strpos($thumbs_up, $_POST['from']) !== false){
                        //if user is already on the list, in which case we must remove them
                        $thumbs_up = str_replace((string)$_POST['from'] . ",", "", $thumbs_up);
                    }else{
                        $thumbs_up .= (string)$_POST['from'] . ",";
                    }
                }

                $stmt->close();

                //update comment
                $stmt = $conn->prepare('UPDATE `240Comments` SET `thumbs_up` = ? WHERE `id` = ?');
                $stmt->bind_param('si', $thumbs_up, $_POST["id"]);
                $stmt->execute();
                $stmt->close();
            }

            //trying to thumbs down
            if(!empty($_POST['action']) && $_POST['action'] == "thumbs_down" && $_POST["from"] !== ""){
                // first get comment that the user is trying to thumbs up
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
				$stmt = $conn->prepare("SELECT `thumbs_down` FROM `240Comments` WHERE `id` = ? LIMIT 1");
                //bind
				$stmt->bind_param("i", $_POST["id"]);

                //execute
				$stmt->execute();
                $stmt->bind_result($thumbs_down);
                // Fetch the results
                if ($stmt->fetch()) {
                    // if thumbs up list is null, add user as the first user
                    if($thumbs_down == null){
                        $thumbs_down = (string)$_POST['from'] . ",";
                    }else if(strpos($thumbs_down, $_POST['from']) !== false){
                        //if user is already on the list, in which case we must remove them
                        $thumbs_down = str_replace((string)$_POST['from'] . ",", "", $thumbs_down);
                    }else{
                        $thumbs_down .= (string)$_POST['from'] . ",";
                    }
                }

                $stmt->close();

                //update comment
                $stmt = $conn->prepare('UPDATE `240Comments` SET `thumbs_down` = ? WHERE `id` = ?');
                $stmt->bind_param('si', $thumbs_down, $_POST["id"]);
                $stmt->execute();
                $stmt->close();
            }
		}
	}


    ?>

    <div class="content">
        <h2>See what other's are saying!</h2>
        <div class="comment-section-container">
            <?php 
                // querying for all the comments in the database
                $res = $conn->query('SELECT `from`, `message`, `date`, `thumbs_up`, `thumbs_down`, `id` FROM `240Comments`');

                // use the counter to alternate background color
                $counter = 0;

                

                // looping thru the table and displaying each entry
                if ($res) {
                    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                        $id = $row['id'];
                        $from = $row['from'];
                        $date = $row['date'];
                        $message = $row['message'];
                        $thumbs_up = $row["thumbs_up"];
                        $thumbs_down = $row["thumbs_down"];
                        include './partials/comment.php';
                        $counter += 1;
                    }
                } else {
                    echo "Error in query execution: " . mysqli_error($conn);
                }
            
            ?>
        </div>
        

        <h2>Leave a comment!</h2>
        <?php 
        if (array_key_exists("id", $_SESSION) && array_key_exists("first_name", $_SESSION) && array_key_exists("last_name", $_SESSION)) {
            include "./partials/comment_form.php";
        }else{
            echo '<a href="./login.php">You need to login to rate or leave a comment!</a>';
        }
        
        ?>

        
    </div>
</body>
</html>