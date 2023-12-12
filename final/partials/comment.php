<div class="comment-box <?php if ($counter % 2 == 0) {echo "comment-box-color-primary";}?>">
    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="">
    <div class="comment-text-section">
        <h4><?php echo $from ?></h4>
        <span><?php echo $date ?></span>
        <p>
            <?php echo $message ?>
        </p>
        <div class="comment-rate-section">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="hidden" name="action" value="thumbs_up">
                <input type="hidden" name="from" value="<?php if (array_key_exists("id", $_SESSION)) {echo $_SESSION['id'];} ?>">
                <button type="submit" class="comment-rate-item thumbs-up <?php if (array_key_exists("id", $_SESSION) && strpos($thumbs_up, (string)$_SESSION['id']) !== false) {echo "active";}?>">
                    <span>
                        &#128077;
                    </span>
                    <span>
                        <?php 
                            if ($thumbs_up == null) {
                            echo "0";
                            }else{
                            echo strlen($thumbs_up) / 2;
                            }
                        ?>
                        Votes
                    </span>
                </button>

            </form>
            
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="hidden" name="action" value="thumbs_down">
                <input type="hidden" name="from" value="<?php if (array_key_exists("id", $_SESSION)) {echo $_SESSION['id'];} ?>">
                <button type="submit" class="comment-rate-item thumbs-down <?php if (array_key_exists("id", $_SESSION) && strpos($thumbs_down, (string)$_SESSION['id']) !== false) {echo "active";}?>">
                    <span>
                        &#128078; 
                    </span>
                    <span>
                        <?php 
                            if ($thumbs_down == null) {
                            echo "0";
                            }else{
                            echo strlen($thumbs_down) / 2;
                            }
                        ?>
                        Votes
                    </span>
                </button>
            </form>
        </div>
    </div>
    
</div>