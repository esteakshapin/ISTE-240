<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/scripts/script.js"></script>

  <script>
    //For the practical it is OK to put your javascript here! though if you wish you can also do an external file
    
  </script>
</head>

<body>
 <div class="wrapper">
    <title>Scholarship Calculator - South Hampton Institute of Technology</title>
    <img src="./assets/images/shoftechlogo.png" alt="South Hampton Institute of Technology Logo" class="logo">
    <nav class="main">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Cat Reviews</a>
    </nav>

    <div class="featured-review">
        <img src="./assets/images/tagline-img.png" alt="" class="featured-image">
        <div class="featured-tagline">
            We are accredited!
        </div>
    </div>

    <!-- Scholarship calculator section -->
    <div class="scholarship-section">
        <h2>Scholarship Calculator</h2>
        <label for="income">income: </label>
        <input name="income" id="income" placeholder="Please enter your income without any commas (ex. 10000)">
        <input type="button" value="Check if Qualified" onclick="calculateScholarship()">
        <br>
        <span id="scholarship-result"></span>
    </div>

    <!-- Application section -->
    <div class="application-section">
        <h2>Apply Now</h2>
        <form name="applicationForm" action="process.php" onsubmit="return validateApplicationForm()" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- student testimonial section -->
    <div class="student-testimonial">
        <?php
        include "../dbCon.php";
            // get all the comments in the database
            if ($conn){
                // querying for all the testimonials in the database
                $res = $conn->query('SELECT `name`, `testimonial` FROM `testimonials`');
                
                // looping thru the table and displaying each entry in an <li>
                if ($res) {
                    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                    $name = $row['name'];
                    $testimonial = $row["testimonial"];

                    include "./assets/inc/testimonial.php";
                    }
                } else {
                    echo "Error in query execution: " . mysqli_error($conn);
                }
            }
        ?>
    </div>
    <?php include "./assets/inc/footer.php"?>
 </div>
</body>
</html>