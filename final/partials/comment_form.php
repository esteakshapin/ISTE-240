<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="comment-form" method="POST">

    <label for="">Name: <h4>John Doe</h4></label>
    <br>
    <label for="comment">Leave your comment:</label><br>
    <textarea name="comment" id="comment" cols="50" rows="10" required></textarea>

    <br>
    <input type="submit" value="submit">
</form>