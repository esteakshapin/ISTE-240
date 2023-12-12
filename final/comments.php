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


                $message = $_GET['comment'];
                $from = $_SESSION['id'];

                echo $from . " - " . $message;

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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="comment-form" method="POST">

            <label for="">Name: <h4>John Doe</h4></label>
            <br>
            <label for="comment">Leave your comment:</label><br>
            <textarea name="comment" id="comment" cols="50" rows="10" required></textarea>

            <br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>