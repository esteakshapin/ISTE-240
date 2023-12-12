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
        <form action="" class="comment-form">
            <label for="first-name">First Name:</label><br>
            <input type="text" name="first-name" id="first-name"><br>

            <label for="last-name">Last Name:</label><br>
            <input type="text" name="last-name" id="last-name"><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email"><br>

            <label for="display-email">Display Email?</label>
            <input type="checkbox" name="display-email" id="display-email"><br>

            <label for="img">Upload Avatar:</label>
            <input type="file" id="img" name="img" accept="image/*"><br>

            <label for="comment">Leave your comment:</label><br>
            <textarea name="comment" id="comment" cols="50" rows="10"></textarea>

            <br>
            <input type="button" value="submit">
        </form>
    </div>
</body>
</html>