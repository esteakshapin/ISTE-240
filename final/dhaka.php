<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Dhaka - Time of BD!';
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
            $carouselSrc = "./static/images/dhaka-carousel/IMG_9523.jpg";
            $alt = "Slide Show of Images Taken From Shapin's Bangladesh Trip in Dhaka";
            $carouselTitle = "Dhaka";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>About</h2>
            <p>
                <img
                    src="https://thumbs.dreamstime.com/z/dhaka-vector-map-detailed-city-administrative-area-cityscape-urban-panorama-royalty-free-illustration-outline-highways-237064275.jpg"
                    alt="Map of Bangladesh" width="150" height="150"
                    style="float: left; margin-right: .5rem;">
                <span style="vertical-align: top;">
                    Dhaka, the capital city of Bangladesh, is not only the
                    largest city in the country but also the densest with
                    immense history and importance. With a rich past, iconic
                    landmarks, and a rapidly growing population, Dhaka is a
                    city of organized chaos that will surely be the first
                    stop of anyone visiting Bangladesh.
                </span>

            </p>

            <h3>History</h3>
            <p>

                <span style="vertical-align: top;">
                    Dhaka's history dates back to ancient times, but it rose to
                    prominence during the Mughal Empire in the 17th century when
                    it became the capital of Bengal. Under Mughal rule, Dhaka
                    became the center of trade and culture. The city was known
                    for its amazing Mughal architecture, including the Lalbagh
                    Fort, built by Prince Muhammad Azam, and the Ahsan Manzil,
                    the pink palace of the Nawabs.
                    <br>
                    <img
                        src="https://ourdhaka.weebly.com/uploads/3/8/4/8/38485323/header_images/1414914896.jpg"
                        alt="Map of Bangladesh" width="150" height="150"
                        style="float: right; margin-right: .5rem;">
                    During the British colonial period, Dhaka played
                    a crucial role in the region's administration and economy.
                    The partition of Bengal in 1947 divided the city between
                    India and East Pakistan (now Bangladesh), leading to
                    significant changes in its demographics and culture.
                    <br>
                    <a
                        href="https://en.wikipedia.org/wiki/History_of_Dhaka#:~:text=Dhaka%20was%20successively%20ruled%20by,capital%20of%20the%20Mughal%20India.">More
                        Info (wikipedia)</a>
                </span>

            </p>
            <h3>Landmarks</h3>
            <p>
                Dhaka is dotted with landmarks that reflect its diverse
                heritage and long standing history:

                <ol>
                    <li>
                        <img src="https://img.atlasobscura.com/xd_IblV_eIloy2MwZIIvLHk7BG5nyTKVJFCsDSPGizo/rt:fit/w:600/q:81/sm:1/scp:1/ar:1/aHR0cHM6Ly9hdGxh/cy1kZXYuczMuYW1h/em9uYXdzLmNvbS91/cGxvYWRzL3BsYWNl/X2ltYWdlcy9kMDRh/NmNiOC0yZDg1LTQ0/YjctOGRlNC02OWZi/YTM4Nzc1YTExNTUx/MDQ3Y2VjNGYyOWRl/ZmZfODAwcHgtRGhh/a2FfTGFsYmFnaF9G/b3J0XzUuSlBH.jpg" alt="" width="100" height="100" style="float: right">
                        <b>Lalbagh Fort: </b> This 17th-century Mughal fort is a
                        great example of Mughal architecture. It houses a
                        mosque, a tomb, and a beautiful garden, making it a
                        historical wonder within the rising city.</li>

                    <li>
                        <b>Ahsan Manzil: </b> AKA the Pink Palace,
                        this former palace of the Nawabs of Dhaka is a like a archtiect time capsule. It now serves as a museum,
                        showcasing artifacts from the Mughal and colonial
                        periods.
                    </li>
                    <li>
                        <b>Dhakeshwari Temple: </b> Dhakeshwari is the city's most important Hindu (the second post popular religion in Bangladesh) temple and is a must see for its unique color and roof construction.
                    </li>
                    <li>
                        <b>Jatiya Sangsad Bhaban: </b> Designed by the famous
                        architect Louis Kahn, Jatiya Sangsad Bhaban (AKA the National Parliament House) is a modern architectural masterpiece but more importantly represents Bangladesh's independence from decades of colonial rule.
                    </li>
                    <li>
                        <b>Star Mosque: </b> Known for its stunning blue
                        star-patterned mosaic tiles, this mosque is an excellent
                        example of Islamic architecture.
                    </li>
                </ol>

            <h3>Population</h3>
            <p>
                Dhaka is one of the most densely populated cities in the world, with a population that has grown dramatically over the years. People from all around Bangladesh travel to the city in hopes of an opportunity, which is reflected in the city's lively streets.
                <br>
                The city's population growth has led to various issues in
                infrastructure, traffic congestion, and housing, but it has also
                contributed to the city's hustling culture, packed street
                markets, and a thriving food scene. Dhaka is known for its
                street food, offering a wide array of delicious dishes like
                biryani, pushka, and a wide assortment of sweets.
            </p>

            <h2>Personal Connection</h2>
            <p>
                As a young kid, I visited Dhaka numerous times but never saw the same thing twice. It's immense size and density can't simply be articulated. It can be best described as organized chaos and is amazing to see. Being the capital of Bangladesh, the architecture is one of if not the best in the country with numerous monuments, historical buildings, and beautiful mosques. I've had the privilege of visiting the Lalbagh Fort and it was absolutely breathtaking. Its red clay like color stood out among the bustling gray of the city. Learning about its history and the years that it has endured to be still standing makes it a wonder that must be on everyone's lists. 
            </p>

        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>

        <script>
            // list of image URL that the carousel uses to cycle through
            const imageUrls = [
                './static/images/dhaka-carousel/IMG_9523.jpg',
                './static/images/dhaka-carousel/IMG_9525.jpg',
                './static/images/dhaka-carousel/IMG_9531.jpg',
                './static/images/dhaka-carousel/IMG_9533.jpg',
                './static/images/dhaka-carousel/IMG_9555.jpg',
                './static/images/dhaka-carousel/IMG_9596.jpg',
                './static/images/dhaka-carousel/IMG_9613.jpg',
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