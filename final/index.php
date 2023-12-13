<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Time of BD!';
        include './partials/header.php';
    ?>
    <body>
        <!-- nav bar -->
        <?php
            $active = "Home";
            include './partials/navbar.php';
        
        ?>
        <!-- nav bar -->

        <!-- This carousel cycles through a list of images -->
        <?php
            $carouselSrc = "./static/images/index-carousel-images/IMG_9995.jpg";
            $alt = "Slide Show of Images Taken From Shapin's Bangladesh Trip";
            $carouselTitle = "Bangladesh";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>About</h2>
            <p>
                <img src="https://geology.com/world/bangladesh-map.gif"
                    alt="Map of Bangladesh" width="150" height="150"
                    style="float: left; margin-right: .5rem;">
                <span style="vertical-align: top;">
                    <i><b>Bangladesh</b></i>, a small but culturally rich
                    country in Southeast Asia that holds a special place in my
                    heart. It was my place of birth and the home to most of
                    extended family. Despite it's small size, Bangladesh is a
                    beautiful country, filled with serene landscape, inspiring
                    architecture, taste-bud melting food, and kind and welcoming
                    people! From the bustling street of Dhaka to the serene
                    riverine countryside, Bangladesh is gem that is waiting to
                    be discovered.
                    <br>
                    The purpose of this blog is to portray the amazing
                    characteristics of Bangladesh and share the captivating
                    experiences I have encountered during my unforgettable
                    vacation in 2022. Since my immigration to the states back in
                    2011, 2022 was my first time back and so much of what I
                    loved about the country flooded back to me. So fasten your
                    seatbelt and get ready to experience Bangladesh from a
                    native's prospective!

                    <br>
                    <a href="./bibliography.php">Work Cited Page</a>
                    <br>
                    <a href="./grading.php">Grading Page</a>
                </span>

            </p>

            <!-- Blogs section with links to the individual pages -->
            <h2>Blogs</h2>
            <div class="assignmentCardContainer">

                <!-- This container is a flex div that hold all the filter options. It is justified at the end -->
                <div class="filterOptionsContainer">
                    <h4>Filter</h4>
                    <span class="filterOptions exercises" onclick="toggle(this)">Cities</span>
                    <span class="filterOptions individualProjects" onclick="toggle(this)">Food</span>
                    <span class="filterOptions groupProjects" onclick="toggle(this)">Vacation</span>
                </div>

                <div class="card">
                    <img
                        src="https://cdn.britannica.com/97/189797-050-1FC0041B/Night-view-Dhaka-Bangladesh.jpg"
                        alt style="margin-bottom: 1rem">
                    <h3><b><a href="./dhaka.html">Dhaka</a></b></h3>
                    <span class="exercises active">Cities</span>

                    <p>
                        Dhaka, the capital city of Bangladesh, is not only the
                        largest city in the country but also the densest with
                        immense history and importance. With a rich past, iconic
                        landmarks, and a rapidly growing population, Dhaka is a
                        city of organized chaos that will surely be the first
                        stop of anyone visiting Bangladesh.
                    </p>
                </div>

                <div class="card">
                    <img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Shah_Amanat_763.jpg/1200px-Shah_Amanat_763.jpg"
                        alt style="margin-bottom: 1rem">
                    <h3><b><a href="./Chittagong.html">Chittagong</a></b></h3>
                    <span class="exercises active">Cities</span>
                    <p>
                        Chittagong, officially known as Chattogram, is a busy coastal city in southeastern Bangladesh. It is the second-largest city in the country and holds immense cultural, historical, and economic significance. Being one of the biggest port city in the all of southeast Asia, the city is marked by ships, trucks, and delicious seafood!
                    </p>
                </div>

                <div class="card">
                    <img
                        src="https://dhakanightout.com/wp-content/uploads/2022/01/rajajir-dighi-feni-550x400.jpg"
                        alt style="margin-bottom: 1rem">
                    <h3><b><a
                                href="./Feni.html">Feni</a></b></h3>
                    <span class="exercises active">Cities</span>
                    <p>

                        Feni is a small, unknown city nestled in the heart of
                        Bangladesh. It sits right in the middle of Dhaka and
                        Chittagong, two of the biggest cities in the country,
                        and was my hometown. Although fairly small, there
                        are many things to admire about this small bee-hive of a
                        city and houses the majority of my memories from my
                        early childhood.
                    </p>
                </div>

                <div class="card">
                    <div class="container">
                        <img
                        src="https://upload.wikimedia.org/wikipedia/commons/5/58/Samosa_dish.jpg"
                        alt style="margin-bottom: 1rem">
                        <h3><b><a href="./appetizer.html">Appetizer</a></b></h3>
                        <span class="individualProjects active">Food</span>

                        <p>
                            A crispy, golden triangle filled with spiced potatoes, peas, and herbs. This is the immensely irresistible appetizer that can be found at nearly home or restaurant in Bangladesh. Each bite is a perfect balance of spicy and savory, a dish that can transcend border and transform anyone to the warm, and delicious place of Southeast Asia.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="container">
                        <img
                        src="https://images.food52.com/7f0yncraWeYUJG_lLbH2ie1xd6g=/2016x1344/d815e816-4664-472e-990b-d880be41499f--chicken-biryani-recipe.jpg"
                        alt style="margin-bottom: 1rem">

                        <h3><b><a href="./entree.html">Entree</a></b></h3>
                        <span class="individualProjects active">Food</span>

                        <p>At the heart of the Bangladeshi culinary traditions lies the Chicken Biryani. A favorite among the whole southeast Asia subcontinent, the chicken biryani truly embodies the essence of the nation's heritage. It requires the careful blending of various aromatic spices, basmati rice and juicy, delicious chicken. Each bite reveals an array fo flavor that has been carefully layered and slow-cooked to absolute perfection. </p>
                    </div>
                </div>

                <div class="card">
                    <div class="container">
                        <img
                        src="https://static.toiimg.com/photo/52743612.cms"
                        alt style="margin-bottom: 1rem">

                        <h3><b><a href="./desert.html">Desert</a></b></h3>
                        <span class="individualProjects active">Food</span>

                        <p>Bangladeshi people have a sweet tooth like no other. The region is known for their delicate and delicious deserts known as sweets and is absolutely adored by the locals. At the top of the sweet hierarchy is a well known desert called Rasgulla. These soft, spongy cheese balls, bathed in fragrant sugar syrup, offer a delicious burst of sweetness with every bite.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="container">
                        <img
                        src="https://cdn.bangladeshscenictours.com/wp-content/uploads/2019/11/Exploring-Coxs-Bazar-990x490.jpg"
                        alt style="margin-bottom: 1rem">

                        <h3><b><a href="./cox-bazar.html">Cox Bazar</a></b></h3>
                        <span class="groupProjects active">Vacation</span>

                        <p>Cox's bazar is probably the most popular vacation spot in Bangladesh. Located in the southeastern part of Bangladesh, Cox's Bazar is known for having the longest sea beach in the world. My family and I vacationed here when I was 6 and I had the time of my life.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="container">
                        <img
                        src="./static/images/rangamati-carousel/IMG_2092.jpg"
                        alt style="margin-bottom: 1rem">

                        <h3><b><a href="./rangamati.html">Rangamati</a></b></h3>
                        <span class="groupProjects active">Vacation</span>

                        <p>Rangamati, hidden within the picturesque hill district of Chittagong Hill Tracts, is a hidden gem of natural beauty. Although I have lived in Bangladesh during my childhood years, I have never known about Rangamati until my trip in 2022. This amazing vacation spot offers an escape for tourists from the hustle and bustle of life among the lush green hills and serene lakes.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="container">
                        <img
                        src="https://st.depositphotos.com/56785000/53594/i/450/depositphotos_535942156-stock-photo-marina-restaurant-island-maldives.jpg"
                        alt style="margin-bottom: 1rem">

                        <h3><b><a href="./st-martin-island.html">St. Martin’s Island</a></b></h3>
                        <span class="groupProjects active">Vacation</span>

                        <p>Known for its powdery white sandy beaches, crystal-clear waters filled with marine life, and of course lots of coconut tress, St. Martin's Island seems to promise a lifetime of unforgettable memories. The thought of walking along its shores, devouring some delicious seafood, and looking up at the starlit skies at night fills me with great anticipation. It's certainly on my must visit list for my next trip to Bangladesh!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>

        <!-- script for filtering -->
        <script src="./static/js/index.js"></script>

        <script>
            // list of image URL that the carousel uses to cycle through
            const imageUrls = [
                './static/images/index-carousel-images/IMG_2456.jpg',
                './static/images/index-carousel-images/IMG_9409.jpg',
                './static/images/index-carousel-images/IMG_9452.jpg',
                './static/images/index-carousel-images/IMG_9467.jpg',
                './static/images/index-carousel-images/IMG_9525.jpg',
                './static/images/index-carousel-images/IMG_9571.jpg',
                './static/images/index-carousel-images/IMG_9988.jpg',
                './static/images/index-carousel-images/IMG_9991.jpg',
                './static/images/index-carousel-images/IMG_9995.jpg',
                './static/images/index-carousel-images/IMG_9409.jpg',
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