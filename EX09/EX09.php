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
        echo '<h2>connected</h2>';
        $res = $conn->query('SELECT * FROM `comments`');

        if($res){
            while($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                $records[] = $row;
            }
        }

        echo $records[0];
    }
    
    ?>
    <h1>What do you think?</h1>
</body>
</html>