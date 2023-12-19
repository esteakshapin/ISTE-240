<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Cox Bazar - Time of BD!';
        include './partials/header.php';
    ?>
    <body>
        <!-- nav bar -->
        <?php
            $active = "Vacation";
            include './partials/navbar.php';
        
        ?>
        <!-- nav bar -->

        <!-- NOTE: This carousel only has one image (the default image) -->
        <?php
            $carouselSrc = "https://cdn.bangladeshscenictours.com/wp-content/uploads/2019/11/Exploring-Coxs-Bazar-990x490.jpg";
            $alt = "Image of a rowing boat in Cox Bazar";
            $carouselTitle = "Cox Bazar";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>Cox Bazar</h2>
            <p>
                Cox's bazar is probably the most popular vacation spot in Bangladesh. Located in the southeastern part of Bangladesh, Cox's Bazar is known for having the longest sea beach in the world. My family and I vacationed here when I was 6 and I had the time of my life. We stayed at a fancy hotel with my whole extended family and got a chance to go to the beach everyday. We got to visit Himchari and Inani Beach, quieter sections of Cox's Bazar that offers great seafood restaurants, and watch the sunset as families. It is quite normal to rent out beach chairs and umbrellas from the locals so you really don't need to bring anything but yourself! Unfortunately, I do not have access to all my childhood photos but you must trust me when I say it was worth it.
            </p>

            <h2 style="margin-bottom: 0px;">Recommendations</h2>
            <h3 style="margin-top: 1rem;">
                Hotels
            </h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Hotel Sayeman Beach Resort:</b> This upscale resort offers luxurious rooms with sea views, excellent dining options, a pool, spa, and easy beach access. <br> <span style="font-style: italic; color: gray;">Price: $87/night*</span></li>
                    <li><b>Hotel The Cox Today:</b> Located in a prime area, this hotel offers modern rooms, dining options, and facilities like a fitness center and a pool. <br> <span style="font-style: italic; color: gray;">Price: $54/night*</span></li>
                    <li><b>Hotel Sea Cox:</b> A budget-friendly hotel offering clean and simple accommodations close to the beach. <br> <span style="font-style: italic; color: gray;">Price: $20/night*</span></li>
                </ol>

                <span style="font-style: italic; color: gray;">*Price as seen on October 2023</span>

            </div>
            <br>
            <h3>Restaurants</h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Mermaid Cafe:</b> Mermaid Cafe is an excellent restaurant to enjoy a meal with your family. Dalchini offers a taste of authentic local cuisine. Their seafood platters and curries are highly recommended. Specializes in <i>Indian and Western food</i></li>
                    <li><b>Salt Bistro and Cafe:</b> This upscale restaurant offers a mix of international and Bangladeshi cuisine. It's known for its quality steaks and pasta dishes. Specializes in <i>European food</i></li>
                    <li><b>EFC- Live Fish Restaurant:</b> When you're planning a visit to Cox's Bazar and looking to savor the flavors of the sea, a visit to EFC - Live Fish Restaurant is a must. This restaurant boasts an extensive menu featuring a wide variety of fishes and seafood, including lobster, squid, and more. <i>Sea Food</i></li>
                </ol>
                
            </div>
            
            <h3>Activities:</h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Beach Relaxation:</b> You can't come to the longest sea beach in the world and not soak in the sun! Spend time on the picturesque beach sunbathing, reading a book, or taking dip. During my visit, I spend the majority of time exploring teh beach, swimming in the ocean and building sand castles and I recommend you do the same!</li>
                    <li><b>Inani Beach:</b> As stated above, I visited Inani Beach during my vacation. it is less crowded than Cox's Bazar Beach and is known for its clear waters, unique coral formations, and tranquility.</li>
                    <li><b>Horse Back Riding:</b> Although I was not able to do this due to my age, one should seriously consider going horseback riding along the beautiful sea of Cox's Bazar. Rides can go anywhere from 10 min to an hour and are heavily sought after in the evening time and specially during sunset!</li>
                </ol>
                
            </div>
        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>
    </body>
</html>