<!DOCTYPE html>
<html lang="en">

    <!-- Header Section -->
    <?php
        $header = 'Rangamati - Time of BD!';
        include './partials/header.php';
    ?>
    <body>
        <!-- nav bar -->
        <?php
            $active = "Vacation";
            include './partials/navbar.php';
        
        ?>
        <!-- nav bar -->

        <!-- This carousel cycles through a list of images -->
        <?php
            $carouselSrc = "./static/images/rangamati-carousel/IMG_2092.jpg";
            $alt = "Slideshow of images from Shapin's trip in Rangamati";
            $carouselTitle = "Rangamati";
            include './partials/carousel.php';
        
        ?>

        <div class="content">
            <h2>Rangamati</h2>
            <p>
                Rangamati, hidden within the picturesque hill district of Chittagong Hill Tracts, is a hidden gem of natural beauty. Although I have lived in Bangladesh during my childhood years, I have never known about Rangamati until my trip in 2022. This amazing vacation spot offers an escape for tourists from the hustle and bustle of life among the lush green hills and serene lakes. The best place to explore this area is to go on a boat tour, something I will never forget. You get the chance to explore the various waterfalls, sunbathe between the towering mountains and eat food at the indigenous restaurants. This mountainous area is home to various indigenous people who have adapted to life on mountains and water and you can tour their villages as part of the boat tour. Although my family and I elected not to do that, we still had an amazing time relaxing in our boat and exploring the natural beauty that Rangamati has to offer!
            </p>

            <h2 style="margin-bottom: 0px;">Recommendations</h2>
            <h3 style="margin-top: 1rem;">
                Hotels
            </h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Parjatan Hotel Rangamati:</b> This government-run hotel offers comfortable rooms with beautiful views of Kaptai Lake. It's located in a scenic area and provides a relaxing atmosphere. <br> <span style="font-style: italic; color: gray;">Price: $28/night*</span></li>
                    <li><b>Hotel Green Castle:</b> This mid-range hotel offers clean and comfortable rooms with lake views. It's a good option for travelers seeking value for money. <br> <span style="font-style: italic; color: gray;">Price: $15/night*</span></li>
                    <li><b>Hotel Sea Cox:</b> A budget-friendly hotel offering clean and simple accommodations close to the beach. <br> <span style="font-style: italic; color: gray;">Price: $10/night*</span></li>
                </ol>

                <span style="font-style: italic; color: gray;">*Price as seen on October 2023</span>

            </div>
            <br>
            <h3>Restaurants</h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Hill Queen Restaurant:</b> This restaurant is known for its scenic hilltop location and offers panoramic views of the surrounding landscape. Specializes in <i>Bengali and Western food</i></li>
                    <li><b>Hotel Green Castle Restaurant:</b> Located at Hotel Green Castle, this restaurant offers a variety of dishes with both indoor and outdoor seating options. It's a good place to enjoy a meal while taking in the scenery. <i>European food</i></li>
                    <li><b>Local Eateries:</b> Don't miss the opportunity to explore some of the local eateries and street food stalls in Rangamati. During my visit, my family and I ate at a mountain top restaurant as part of the boat ride. 10/10 <i>Sea Food</i></li>
                </ol>
                
            </div>
            
            <h3>Activities:</h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Boat Tours :</b> Explore the stunning Rangamati by taking a boat tour. You can hire a traditional rowboat or a larger motorized boat to navigate the lake's pristine waters. Enjoy the scenic views of lush hills, islands, and indigenous villages along the way.</li>
                    <li><b>Hiking:</b> Rangamati is surrounded by hills and forests, making it an excellent destination for hiking. You can embark on hiking adventures in the nearby hills and explore the rich biodiversity of the region. During my visit, my brother and I hiked to top of of a mountain during our lunch break and had phenomenal views like no other.
                    </li>
                    <li><b>Visit Indigenous Villages:</b> Interact with the indigenous communities in Rangamati to learn about their unique cultures and traditions. You can visit villages like Marma, Chakma, and Tripura to experience their way of life.</li>
                </ol>
                
            </div>
        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>

        <script>
            // list of image URL that the carousel uses to cycle through
            const imageUrls = [
                './static/images/rangamati-carousel/IMG_2092.jpg',
                './static/images/rangamati-carousel/IMG_2100.jpg',
                './static/images/rangamati-carousel/IMG_2102.jpg',
                './static/images/rangamati-carousel/IMG_2133.jpg',
                './static/images/rangamati-carousel/IMG_2134.jpg',
                './static/images/rangamati-carousel/IMG_2136.jpg',
                './static/images/rangamati-carousel/IMG_2141.jpg',
                './static/images/rangamati-carousel/IMG_2144.jpg',
                './static/images/rangamati-carousel/IMG_9697.jpg',
                './static/images/rangamati-carousel/IMG_9701.jpg',
                './static/images/rangamati-carousel/IMG_9704.jpg',
                './static/images/rangamati-carousel/IMG_9711.jpg',
                './static/images/rangamati-carousel/IMG_9717.jpg',
                './static/images/rangamati-carousel/IMG_9718.jpg',
                './static/images/rangamati-carousel/IMG_9719.jpg',
                './static/images/rangamati-carousel/IMG_9730.jpg',
                './static/images/rangamati-carousel/IMG_9732.jpg',
                './static/images/rangamati-carousel/IMG_9736.jpg',
                './static/images/rangamati-carousel/IMG_9771.jpg',
                './static/images/rangamati-carousel/IMG_9791.jpg',
                './static/images/rangamati-carousel/IMG_9894.jpg',
                './static/images/rangamati-carousel/IMG_9897.jpg',
                './static/images/rangamati-carousel/IMG_9966.jpg',
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