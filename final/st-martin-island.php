<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'St. Martin - Time of BD!';
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
            $carouselSrc = "https://st.depositphotos.com/56785000/53594/i/450/depositphotos_535942156-stock-photo-marina-restaurant-island-maldives.jpg";
            $alt = "Slideshow of images from Shapin's trip in Rangamati";
            $carouselTitle = "St. Martin's Island";
            include './partials/carousel.php';
        
        ?>

        <div class="content">
            <h2>St. Martin's Island</h2>
            <p>
                St. Martin's Island, often referred to as 'Narikel Jinjira' (Coconut Island), has captured the heart of travelers seeking a slice of paradise in Bangladesh. Situated in the Bay of Bengal, it's a place I've been longing to explore after hearing about it from a dear friend. While my family and I haven't had the chance to set foot on this pristine island yet, my friend's vivid descriptions have certainly ignited a desire. Known for its powdery white sandy beaches, crystal-clear waters filled with marine life, and of course lots of coconut tress, St. Martin's Island seems to promise a lifetime of unforgettable memories. The thought of walking along its shores, devouring some delicious seafood, and looking up at the starlit skies at night fills me with great anticipation. It's certainly on my must visit list for my next trip to Bangladesh!
            </p>

            <h2 style="margin-bottom: 0px;">Recommendations</h2>
            <h3 style="margin-top: 1rem;">
                Hotels
            </h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Dreamers' Paradise Beach Resort:</b> This beachfront resort offers comfortable rooms, a restaurant serving seafood delicacies, and direct access to the beach. It's a top choice for travelers seeking a more luxurious stay. <br> <span style="font-style: italic; color: gray;">Price: $137/night*</span></li>
                    <li><b>Sand Castle Beach Resort:</b> Located on the quieter side of the island, Sand Castle Beach Resort provides cozy cottages with stunning sea views. It's a peaceful retreat for a tranquil vacation. <br> <span style="font-style: italic; color: gray;">Price: $75/night*</span></li>
                    <li><b>Saint Martin Resort:</b> A budget-friendly option with simple accommodations and a friendly atmosphere. It's a good choice for those looking for affordability. <br> <span style="font-style: italic; color: gray;">Price: $20/night*</span></li>
                </ol>

                <span style="font-style: italic; color: gray;">*Price as seen on October 2023</span>

            </div>
            <br>
            <h3>Restaurants</h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>Narikel Jinjira Restaurant:</b> A relatively small restaurant that offers fresh and tasty food geared toward western tourists. Specializes in <i>Chinese and Seafood</i></li>
                    <li><b>Blue Marine Restaurant:</b> Situated near the main beach, Blue Marine Restaurant serves a variety of seafood dishes, including delicious crab preparations. It's a popular spot for seafood lovers. <i>Seafood</i></li>
                    <li><b>Hasan restaurant:</b> This is a hole in the wall located near the west side of the island offering cheap but delicious food for a great experience. Specializes in <i>Asian and Bangladeshi food</i></li>
                </ol>
                
            </div>
            
            <h3>Activities:</h3>
            <div class="recipe-sections">
                <ol>
                    <li><b>BEACH TIME:</b> St. Martin's Island is renowned for its pristine beaches with soft, white sands and crystal-clear waters. Spend your days relaxing on the beach, sunbathing, or taking leisurely walks along the shoreline.</li>
                    <li><b>Snorkeling:</b> Explore the underwater world of St. Martin's Island by snorkeling in its clear waters. You can rent snorkeling gear and discover colorful coral reefs and a variety of marine life.
                    </li>
                    <li><b>Star-Gazing:</b> The island's clear night skies provide an excellent opportunity for star-gazing. On a clear night, you can see a spectacular display of stars that have been missing from your city life!</li>
                </ol>
                
            </div>
        </div>
        <!-- footer section -->
        <?php include "./partials/footer.php" ?>
    </body>
</html>