<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 09</title>
</head>
<body>
    <!-- Including the DB connection partial to connect to the database -->
    <?php include('./dbCon.php'); ?>
    <h1>What do you think?</h1>

    <ul>
        <?php 
            // get all the comments in the database
            if ($conn){
                // check if we need to add a new comment
                if (!empty($_GET['from']) && !empty($_GET['message'])) {
                    $message = $_GET['message'];
                    $from = $_GET['from'];

                    $stmt = $conn->prepare('INSERT INTO `comments` (`from`, `message`) VALUES (?, ?)');
                    $stmt->bind_param('ss', $from, $message);
                    $stmt->execute();
                    $stmt->close();
                }

                $res = $conn->query('SELECT `from`, `message`, `date` FROM `comments`');
            
                if ($res) {
                    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                        echo '<li> <span style="color: green">' . $row['from'] . ': </span> ' . $row['message'] . ' @ <span style="color: gray">' . $row['date'] . "</li>";
                    }
                } else {
                    echo "Error in query execution: " . mysqli_error($conn);
                }
            }
        ?>
    </ul>

    <hr>
    
    <h1>What do you have to say?</h1>
    <form action="" method="get">
        <label for="from">First Name</label>
        <input type="text" name="from"/>
        <br>
        <textarea name="message" rows="4" cols="50" placeholder="say what?"></textarea>
        <input type="submit" value="Add to the List">
    </form>
    
</body>
</html>