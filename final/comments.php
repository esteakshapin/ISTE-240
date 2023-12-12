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
		}
	}


    ?>

    <div class="content">
        <h2>See what other's are saying!</h2>
        <?php 
            // querying for all the comments in the database
            $res = $conn->query('SELECT `from`, `message`, `date`, `thumbs_up`, `thumbs_down`, `id` FROM `240Comments`');

            // use the counter to alternate background color
            $counter = 0;

            

            // looping thru the table and displaying each entry
            if ($res) {
                while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                    // $commentElement = '<div class="comment-box';
                    // if($counter % 2 == 0){
                    // $commentElement += ' comment-box-color-primary';
                    // }

                    // $commentElement += '</div> <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt=""><div class="comment-text-section">';

                    // //adding name
                    // $commentElement += '<h4>' + $row['from'] + '</h4>';
        
                include './partials/comment.php';
                $counter += 1;



                }
            } else {
                echo "Error in query execution: " . mysqli_error($conn);
            }
        
        ?>

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