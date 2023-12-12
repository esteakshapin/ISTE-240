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
                $from = $_SESSION['id'];

                $stmt = $conn->prepare('INSERT INTO `240Comments` (`from`, `message`) VALUES (?, ?)');
                $stmt->bind_param('is', $from, $message);
                $stmt->execute();
                $stmt->close();
            }
		}
	}


    ?>

    <div class="content">
        <h2>See what other's are saying!</h2>

        <div class="comment-box comment-box-color-primary">
            <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="">
            <div class="comment-text-section">
                <h4>NAME</h4>
                <span>10.10.10</span>
                <p>
                    COMMENT TEXT
                </p>
                <div class="comment-rate-section">
                    <div class="comment-rate-item thumbs-up">
                        <span>
                            &#128077;
                        </span>
                        <span>
                            10 Votes
                        </span>
                    </div>

                    <div class="comment-rate-item thumbs-down">
                        <span>
                            &#128078; 
                        </span>
                        <span>
                            10 Votes
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="comment-box ">
        <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="">
            <div class="comment-text-section">
                <h4>NAME</h4>
                <span>10.10.10</span>
                <span>test@gmail.com</span>
                <p>
                    COMMENT TEXT
                </p>
                <div class="comment-rate-section">
                    <div class="comment-rate-item thumbs-up">
                        <span>
                            &#128077;
                        </span>
                        <span>
                            0 Votes
                        </span>
                    </div>

                    <div class="comment-rate-item thumbs-down">
                        <span>
                            &#128078; 
                        </span>
                        <span>
                            0 Votes
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <h2>Leave a comment!</h2>
        <?php 
        if (array_key_exists("id", $_SESSION) && array_key_exists("first_name", $_SESSION) && array_key_exists("last_name", $_SESSION)) {
            include "./partials/comment_form.php";
        }else{
            echo '<a href="./login.php" id="login">You need to login to leave a comment!</a>';
        }
        
        ?>

        
    </div>
</body>
</html>