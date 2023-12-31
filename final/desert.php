<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Desert - Time of BD!';
        include './partials/header.php';
    ?>
    <body>
        <!-- nav bar -->
        <?php
            $active = "Food";
            include './partials/navbar.php';
        
        ?>
        <!-- nav bar -->

        <!-- NOTE: This carousel only has one image (the default image) -->
        <?php
            $carouselSrc = "https://static.toiimg.com/photo/52743612.cms";
            $alt = "Image of a Rasgulla (bengali desert)";
            $carouselTitle = "Desert";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>Rasgulla</h2>
            <p>
                Bangladeshi people have a sweet tooth like no other. The region is known for their delicate and delicious deserts known as sweets and is absolutely adored by the locals. At the top of the sweet hierarchy is a well known desert called Rasgulla. These soft, spongy cheese balls, bathed in fragrant sugar syrup, offer a delicious burst of sweetness with every bite. The masterful combination of fresh chhena (cheese) and sweet syrup makes Rasgulla a cherished item on any occasion. During my visit, I'm ashamed to say I have had AT LEAST one rasgulla per day. These little curds of joy should instantly be on everyone's wish list and would be a crime to not give it a try when in Bangladesh.

            </p>

            <h2 style="margin-bottom: 0px;">Recipe</h2>
            <span style="font-style: italic; color: gray;">Credit: Swasthi (<a href="https://www.indianhealthyrecipes.com/rasgulla-recipe-bengali-rasgulla-recipe-easy-diwali-sweet-recipe/">Swasthi's Recipes</a>)</span>
            <h3 style="margin-top: 1rem;">
                Ingredients
            </h3>
            <div class="recipe-sections">
                <h4 >For the Chhena (Cheese Balls):</h4>
                <ol>
                    <li>1 liter of full-fat milk</li>
                    <li>2 tablespoons lemon juice or white vinegar</li>
                    <li>Ice cubes or cold water</li>
        
                </ol>
                
                <h4>For the Sugar Syrup:</h4>
                <ol>
                    <li>1.5 cups of granulated sugar</li>
                    <li>4 cups of water</li>
                    <li>A few green cardamom pods (optional)</li>
                </ol>
            </div>
            

            <h3>Directions</h3>
            <div class="recipe-sections">
                <h4>Prepare the Chhena (Cheese Balls):</h4>
                <ol>
                    <li>In a heavy-bottomed pot, bring the milk to a boil. Stir continuously to prevent it from sticking to the bottom.</li>
                    <li>Once the milk comes to a boil, reduce the heat to low. Add lemon juice or white vinegar while stirring gently. The acid will cause the milk to curdle.</li>
                    <li>When the milk solids (chhena) separate from the whey and the whey turns transparent, turn off the heat.</li>
                    <li>Place a muslin cloth or cheesecloth over a large strainer set in the sink or over a bowl.</li>
                    <li>Pour the curdled milk through the cloth to collect the chhena. Gather the cloth corners and rinse the chhena under running water to remove the lemony taste.</li>
                    <li>Squeeze out any excess water and hang the chhena for about 30 minutes to drain. You can use the ice cubes or cold water to hasten the cooling process.</li>
                </ol>
                
                <h4>Knead the Chhena:</h4>
                <ol>
                    <li>Transfer the drained chhena to a clean, dry surface or a large plate.</li>
                    <li>Knead the chhena well with the heels of your hands until it becomes smooth and free from lumps. This should take about 5-7 minutes.
                    </li>
                </ol>
                
                <h4>Shape the Rasgulla:</h4>
                <ol>
                    <li>Divide the kneaded chhena into equal-sized portions and roll them into smooth, crack-free balls. Make sure there are no cracks, as this can cause the rasgullas to break during cooking.</li>
                    <li>The size of the balls will increase slightly when cooked, so keep them small.</li>
                </ol>
                
                <h4> Prepare the Sugar Syrup:</h4>
                <ol>
                    <li>In a large, wide, and deep pan, combine the sugar, water, and cardamom pods (if using). Bring the mixture to a boil, stirring until the sugar dissolves completely.</li>
                    <li>Let the sugar syrup boil for about 5-7 minutes, or until it becomes slightly thick and sticky. There's no need for a specific syrup consistency; it should be somewhat viscous.</li>
                    
                </ol>

                <h4> Cook the Rasgulla:</h4>
                <ol>
                    <li>Gently slide the chhena balls into the simmering sugar syrup. Cover the pan and let them cook on medium heat for 15-20 minutes. During this time, the rasgullas will puff up and float to the surface.</li>
                    <li>After 15-20 minutes, turn off the heat and let the rasgullas sit in the syrup for at least 30 minutes. They will absorb the syrup and become spongy.</li>
                    
                </ol>
            </div>
            
            <h3>Serve:</h3>
            <p>Rasgullas can be served warm, at room temperature, or chilled. However, they taste best when chilled, so you should refrigerate for a few hours before serving for the best experience. Enjoy!</p>
        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>
    </body>
</html>