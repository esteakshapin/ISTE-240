<div class="comment-box <?php if ($counter % 2 == 0) {echo "comment-box-color-primary";}?>">
    <img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="">
    <div class="comment-text-section">
        <h4><?php $commentInfo["from"]?></h4>
        <span><?php $commentInfo["date"]?></span>
        <p>
            <?php $commentInfo["message"]?>
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