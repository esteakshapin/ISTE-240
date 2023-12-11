<!DOCTYPE html>
<html lang="en">

    <!-- Header Section -->
    <?php
        $header = 'Feni - Time of BD!';
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
            $carouselSrc = "./static/images/feni-carousel/IMG_1717.jpg";
            $alt = "Slide Show of Images Taken From Shapin's Bangladesh Trip in Feni";
            $carouselTitle = "Feni";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>About</h2>
            <p>
                <img
                    src="https://www.researchgate.net/publication/320273769/figure/fig1/AS:547237761880064@1507483057034/The-map-showing-sampling-areas-of-Feni-and-Muhuri-Rivers.png"
                    alt="Map of Bangladesh" width="150px" height="150px"
                    style="float: left; margin-right: .5rem;">
                <span style="vertical-align: top;">
                    Feni is a small, unknown city nestled in the heart of
                        Bangladesh. It sits right in the middle of Dhaka and
                        Chittagong, two of the biggest cities in the country,
                        and was my hometown. Although fairly small, there
                        are many things to admire about this small bee-hive of a
                        city and houses the majority of my memories from my
                        early childhood.
                </span>

            </p>

            <h3>History</h3>
            <p>

                <span style="vertical-align: top;">
                    Feni came was established in 1929, relatively young for a city. For the longest, this piece of land was an uninhabitable marshy land which helped give it its name. The continuous silting process made it possible for humans to finally occupy this area and has now lead to a small thriving city.  
                
                    <a
                        href="https://en.wikipedia.org/wiki/Feni,_Bangladesh">More
                        Info (wikipedia)</a>
                </span>

            </p>
            <h3>Landmarks</h3>
            <p>
                While Feni may not be as large or as prominent as Dhaka, it has its share of notable landmarks and attractions:

                <ol>
                    <li>
                        <img src="https://lh3.googleusercontent.com/p/AF1QipOuTK2W3wrlTEW7ebj7_T4R5rIy9jKi_ytX0Ayp=w1080-h608-p-no-v0" alt="" width="100px" height="100px" style="float: right; margin-left: .5rem;">
                        
                        <b>Bir Muktijoddha Smriti Complex: </b> This memorial complex pays tribute to the freedom fighters who sacrificed their lives during the Bangladesh Liberation War. It includes a museum, a mural depicting the war, and the Shaheed Minar (Martyrs' Monument).
                    <li>
                        <b>Feni River: </b>The city is located on the banks of the Feni River, which provides scenic views and serves as a vital waterway for the region.
                    </li>
                    <li>
                        <b>Chandigachh Jame Mosque: </b> This historic mosque is known for its unique architectural design and intricate terracotta work.</li>
                    </li>
                </ol>
            </p>

            <h3>Population</h3>
            <p>
                The population of Feni is continuously growing as the city serves an important economic and transportation hub for southeastern Bangladesh. Like the rest of country, Feni is dominated by Muslims followed by hindus. However, unlike most cities in Bangladesh, Feni houses one of the largest group of hijras (individuals who are born make but look and dress in traditionally feminine ways), often called the Third Gender. 
            </p>

            <h2>Personal Connection</h2>
            <p>
               Feni is my childhood. It is where I learned to walk, run, play cricket among many other things. Although quite small compared to regional cities like Dhaka and Chittagong or even international cities like NYC, Feni has a unique appeal that I have not found anywhere else. It has an amazing food scene, from breakfast parathas to chicken korma dinner. There are many shopping malls to find the perfect modern or traditional clothing and has some amazing parks and recreational locations. Where Feni really shines are the its surrounding area. One must simply not return from Bangladesh before visiting the many small towns and villages that surround Feni. The people are amazing and helpful and love to show off the natural beauty of their land. As can be seen in the slideshow, my cousin and I went on a hike to a waterfall located just 40 min outside of Feni. While tracking through the 2-hour plus trail, you come across some of the most breathtaking sceneries of green rice fields, towering mountains and a winding, clear river. It was very different from the hikes in the city as you feel among the local people while walking by the rice field workers. Feni has always been, and will always be, one of the most special places in my heart and I implore everyone to visit my little town before leaving this wonderful country!
            </p>

        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>

        <script>
            // list of image URL that the carousel uses to cycle through
            const imageUrls = [
                './static/images/feni-carousel/IMG_1717.jpg',
                './static/images/feni-carousel/IMG_2249.jpg',
                './static/images/feni-carousel/IMG_2275.jpg',
                './static/images/feni-carousel/IMG_2300.jpg',
                './static/images/feni-carousel/IMG_2304.jpg',
                './static/images/feni-carousel/IMG_2457.jpg',
                './static/images/feni-carousel/IMG_2477.jpg',
                './static/images/feni-carousel/IMG_2480.jpg',
                './static/images/feni-carousel/IMG_9426.jpg',
                './static/images/feni-carousel/IMG_9429.jpg',
                './static/images/feni-carousel/IMG_9433.jpg',
                './static/images/feni-carousel/IMG_9439.jpg',
                './static/images/feni-carousel/IMG_9451.jpg',
                './static/images/feni-carousel/IMG_9453.jpg',
                './static/images/feni-carousel/IMG_9457.jpg',
                './static/images/feni-carousel/IMG_9465.jpg',
                './static/images/feni-carousel/IMG_9468.jpg',
                './static/images/feni-carousel/IMG_9974.jpg',
                './static/images/feni-carousel/IMG_9982.jpg',
                './static/images/feni-carousel/IMG_9988.jpg',
                './static/images/feni-carousel/IMG_9990.jpg',
                './static/images/feni-carousel/IMG_9991.jpg',
                './static/images/feni-carousel/IMG_9995.jpg',
                './static/images/feni-carousel/IMG_9996.jpg',
                './static/images/feni-carousel/IMG_9999.jpg',
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