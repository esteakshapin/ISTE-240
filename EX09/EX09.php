<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 09</title>
</head>
<body>
    <!-- Including the DB connection partial to connect to the database -->
    <?php

    include('./dbCon.php');
    
    // get all the comments in the database
    if ($conn){
        $res = $conn->query('SELECT `from`, `message`, `date` FROM `comments`');
    
        if ($res) {
            $records = []; // Initialize the array
            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $records[] = $row;
            }
    
            if (!empty($records)) {
                // Assuming you want to echo a specific column, for example, 'comment_text'
                echo $records[0]['from'];
            } else {
                echo "No records found.";
            }
        } else {
            echo "Error in query execution: " . mysqli_error($conn);
        }
    }
    
    ?>
    <h1>What do you think?</h1>
</body>
</html>