<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Entree - Time of BD!';
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
            $carouselSrc = "https://images.food52.com/7f0yncraWeYUJG_lLbH2ie1xd6g=/2016x1344/d815e816-4664-472e-990b-d880be41499f--chicken-biryani-recipe.jpg";
            $alt = "Image of Chicken Biryani (Bengali rice and chicken dish)";
            $carouselTitle = "Entree";
            include './partials/carousel.php';
        
        ?>

        <!-- main content section -->
        <div class="content">
            <h2>Chicken Biryani</h2>
            <p>
                At the heart of the Bangladeshi culinary traditions lies the Chicken Biryani. A favorite among the whole southeast Asia subcontinent, the chicken biryani truly embodies the essence of the nation's heritage. It requires the careful blending of various aromatic spices, basmati rice and juicy, delicious chicken. Each bite reveals an array fo flavor that has been carefully layered and slow-cooked to absolute perfection. This fan favorite can be found at most sit down restaurant in Bangladesh and can vary widely in price (depending on quality, service, etc). I have grown up all my life enjoying a delicious plate of chicken biryani at weddings, birthday parties, and even just at home. So, whether you decide to book a flight to bangladesh or book a trip to your kitchen, be sure to try this dish for an unforgettable experience.
            </p>

            <h2 style="margin-bottom: 0px;">Recipe</h2>
            <span style="font-style: italic; color: gray;">Credit: Fahmida Lipi (Shapin's Mom)</span>
            <h3 style="margin-top: 1rem;">
                Ingredients
            </h3>
            <div class="recipe-sections">
                <ol>
                    <li>2 cups Basmati rice</li>
                    <li>500g chicken pieces (with bones, preferably thighs or drumsticks)</li>
                    <li>2 large onions, thinly sliced</li>
                    <li>2 tomatoes, chopped</li>
                    <li>1/2 cup plain yogurt</li>
                    <li>2 tablespoons ginger-garlic paste</li>
                    <li>2 tablespoons biryani masala</li>
                    <li>1 teaspoon turmeric powder</li>
                    <li>1 teaspoon red chili powder (adjust to your spice preference)</li>
                    <li>1/2 teaspoon cumin seeds</li>
                    <li>1/2 teaspoon cardamom pods</li>
                    <li>4-5 cloves</li>
                    <li>2-3 bay leaves</li>
                    <li>1/4 cup vegetable oil</li>
                    <li>Salt to taste</li>
                    <li>Fresh coriander leaves and fried onions for garnish</li>
                </ol>
            </div>
            

            <h3>Directions</h3>
            <div class="recipe-sections">
                <h4>Prepare the Chicken Marinade:</h4>
                <ol>
                    <li>In a bowl, combine the yogurt, ginger-garlic paste, biryani masala, turmeric powder, red chili powder, and salt.</li>
                    <li>Add the chicken pieces and marinate them for at least 30 minutes (or longer for better flavor) in the refrigerator.</li>
                </ol>
                
                <h4>Cook the Rice:</h4>
                <ol>
                    <li>Rinse the Basmati rice thoroughly and soak it in water for about 30 minutes. Drain.</li>
                    <li>In a large pot, bring water to a boil. Add the soaked and drained rice along with cumin seeds, cardamom pods, cloves, bay leaves, and salt.</li>
                    <li>Cook the rice until it's about 70% done (still slightly firm). Drain and set aside.</li>
                </ol>
                
                <h4>Prepare the Biryani:</h4>
                <ol>
                    <li>In a large, heavy-bottomed pot or biryani pot, heat vegetable oil over medium heat.</li>
                    <li>Add the sliced onions and sauté until they turn golden brown and crispy. Remove half of the fried onions for garnish.</li>
                    <li>Add the marinated chicken pieces to the pot and cook until they are no longer pink.</li>
                    <li>Stir in the chopped tomatoes and cook until they soften.</li>
                    <li>Layer the partially cooked rice over the chicken in the pot.</li>
                    <li>Sprinkle some fried onions and fresh coriander leaves on top.</li>
                    <li>Cover the pot with a tight-fitting lid and reduce the heat to low. Cook for about 20-25 minutes, allowing the flavors to meld and the rice to fully cook.</li>
                    <li>Once done, gently fluff the biryani with a fork.</li>
                </ol>
            </div>
            
            <h3>Serve:</h3>
            <p>Bangladeshi Chicken Biryani is best enjoyed hot, garnished with additional fried onions and fresh coriander leaves. Serve it with raita (yogurt sauce) or a side salad for the complete experience. Enjoy!</p>
        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>
    </body>
</html>