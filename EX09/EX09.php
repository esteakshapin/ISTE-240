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
    
</body>
</html>