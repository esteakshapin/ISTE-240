<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Chittagong - Time of BD!';
        include './partials/header.php';
    ?>
    <body>
        <!-- nav bar -->
        <?php
            $active = "Cities";
            include './partials/navbar.php';
        
        ?>
        <!-- nav bar -->

        <!-- This carousel cycles through a list of images  -->
        <?php
            $carouselSrc = "./static/images/Chittagong-carousel/IMG_9525.jpg";
            $alt = "Slide Show of Images Taken From Shapin's Bangladesh Trip in Chittagong";
            $carouselTitle = "Chittagong";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>About</h2>
            <p>
                <img
                    src="./static/images/Chittagong-carousel/Chattogram_map.svg"
                    alt="Map of Bangladesh" width="150px" height="150px"
                    style="float: left; margin-right: .5rem;">
                <span style="vertical-align: top;">
                    Chittagong, officially known as Chattogram, is a busy coastal city in southeastern Bangladesh. It is the second-largest city in the country and holds immense cultural, historical, and economic significance. Being one of the biggest port city in the all of southeast Asia, the city is marked by ships, trucks, and delicious seafood!
                </span>

            </p>

            <h3>History</h3>
            <p>

                <span style="vertical-align: top;">
                    Chittagong has a rich and storied history that dates back centuries. In the ancient and medieval eras, it was an important port city and a key regional trading center. This history is still carried over to this day as the ports of Chittagong sees over 4,000 ships per year. Throughout the years, it has been under the rule of various empires, such as the Maurya, Gupta, Mughal, and British Empires.
                    
                    <br>
                    <img
                        src="https://thebigindianpicture.com/wp-content/uploads/2012/10/Production-Stills-29-768x512.jpg"
                        alt="Map of Bangladesh" width="150px" height="150px"
                        style="float: right; margin-right: .5rem;">
                        During the Bangladesh Liberation War in 1971, however, Chittagong was at the heart of it all as the people living here actively fought in the struggle for independence from Pakistan. Various key victories, like The Chittagong armoury raid and Battle of Jalalabad helped give birth to the nation now known as Bangladesh!
                    <br>
                    <a
                        href="https://en.wikipedia.org/wiki/History_of_Chittagong">More
                        Info (wikipedia)</a>
                </span>

            </p>
            <h3>Landmarks</h3>
            <p>
                Chittagong boasts a variety of landmarks and attractions that reflect its historical and cultural heritage:

                <ol>
                    <li>
                        <img src="https://fadangrandal.files.wordpress.com/2015/10/10255099_539292822865188_762746760322278182_o.jpg" alt="" width="100px" height="100px" style="float: right; margin-left: .5rem;">
                        
                        <b>Chittagong Hill Tracts: </b> This hilly region surrounding Chittagong is known for its breathtaking landscapes, indigenous communities, and unique cultural traditions.
                    <li>
                        <b>Kaptai Lake: </b> Located just outside Chittagong, Kaptai Lake is one of the largest man-made lakes in the world and offers stunning views of the surrounding hills and forests.
                    </li>
                    <li>
                        <b>Foy's Lake: </b> A picturesque artificial lake located in the city, Foy's Lake is a popular spot where people can enjoy boat rides and scenic views away from the busy city.</li>


                        
                    </li>
                    <li>
                        <b>War Cemetery: </b> The Chittagong War Cemetery is a great reminder of the sacrifices made during World War II. It is the final resting place for soldiers who served in the region during the war.
                    </li>
                    <li>
                        <b>Patenga Beach: </b>Patenga Beach is a popular destination for both locals and tourists, offering sandy shores and amazing views of the Bay of Bengal.
                    </li>
                </ol>
            </p>

            <h3>Population</h3>
            <p>
                <img
                        src="https://joc.com/content-assets/styles/feature_image_1500w/s3%2Ffield_feature_image%2FChittagong.1111_4.jpg"
                        alt="Map of Bangladesh" width="150px" height="150px"
                        style="float: right; margin-right: .5rem;">
                Chittagong is a diverse and dynamic city with a mix of ethnicities and cultures with its own distinct dialect. It serves as a major industrial and commercial center, contributing significantly to Bangladesh's economy.
                <br>
                The bustling port of Chittagong is one of the busiest in South Asia, handling a significant portion of the country's imports and exports. This economic activity has led to rapid urbanization and growth in the city's population.
            </p>

            <h2>Personal Connection</h2>
            <p>
                During my recent visit, I spent about a week in Chittagong at my aunt's condo. On the first night, the very first thing we did was visit the huge port in the neighborhood. It was a scene unlike any other, as the huge orange lights lit up the night sky like bunch of miniature suns. Beside the bustling ports, there are some amazing bodies of water that visitors can explore. I had an amazing time kayaking through the Chittagong Hill Tracts with my cousins, surrounded by beautiful mountains on each side. One of my fondest memories from my trip. I would highly recommend one check out the various landmarks mentioned above, specifically the ports as it truly captures the heart and soul of the beautiful city.
            </p>

        </div>
        <!-- main content section -->

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>

        <script>
            // list of image URL that the carousel uses to cycle through
            const imageUrls = [
                './static/images/Chittagong-carousel/IMG_9525.jpg',
                './static/images/Chittagong-carousel/IMG_9559.jpg',
                './static/images/Chittagong-carousel/IMG_9561.jpg',
                './static/images/Chittagong-carousel/IMG_9571.jpg',
                './static/images/Chittagong-carousel/IMG_9575.jpg',
                './static/images/Chittagong-carousel/IMG_9665.jpg',
                './static/images/Chittagong-carousel/IMG_9666.jpg',
                './static/images/Chittagong-carousel/IMG_9684.jpg',
                './static/images/Chittagong-carousel/IMG_9685.jpg',
                './static/images/Chittagong-carousel/IMG_9686.jpg',
            ];

            const carouselImg = document.getElementById("carousel-img");
            let currentIndex = 0;

            // changes the current image shown by the carousel by updating the src to the next image in the list
            // this code was written by me
            function changeImage(){
                carouselImg.src = imageUrls[currentIndex % imageUrls.length]
                currentIndex++;
            }

            // Set a timer to update the image every 2 seconds
            setInterval(changeImage, 2000);

        </script>
    </body>
</html>