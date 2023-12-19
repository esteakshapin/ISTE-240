<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Appetizer - Time of BD!';
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
            $carouselSrc = "https://www.marionskitchen.com/wp-content/uploads/2023/04/Samosa-9.jpg";
            $alt = "Image of Samosas (Bengali Potato Filled Appetizer)";
            $carouselTitle = "Appetizer";
            include './partials/carousel.php';
        
        ?>

        <!-- The content body -->
        <div class="content">
            <h2>Samosa</h2>
            <p>
                At the heart of Bangladeshi street food culture stands the Samosa, a beloved appetizer that tells a flavorful tale of local spices, creativity, and culinary history. These triangular pieces of delight are a culinary masterpiece, with a crispy, golden exterior that gives way to a savory filling of spiced potatoes, peas, and occasionally minced meat. Bursting with aromatic spices and served with chutney, Bangladeshi Samosas are more than just a snack; they are a cultural icon that showcases the nation's passion for both food and hospitality. This dish can be found at nearly every corner in Bangladesh, from the street food vendors selling them for $0.05 a piece to the upscale restaurant with various sauces and garnishes. During my visit to Bangladesh, I had this appetizer couple of times during my outings and it brought me right back to my childhood. Having samosas is a great way to start off on our culinary journey!

            </p>

            <h2 style="margin-bottom: 0px;">Recipe</h2>
            <span style="font-style: italic; color: gray;">Credit: Fahmida Lipi (Shapin's Mom)</span>
            <h3 style="margin-top: 1rem;">
                Ingredients
            </h3>
            <div class="recipe-sections">
                <h4 >Samosa Dough</h4>
                <ol>
                    <li>2 cups all-purpose flour</li>
                    <li>1/4 cup vegetable oil</li>
                    <li>1/2 teaspoon salt</li>
                    <li>Water (for kneading)</li>
                </ol>
                
                <h4>Samosa Filling:</h4>
                <ol>
                    <li>2 large potatoes, boiled and mashed</li>
                    <li>1/2 cup frozen peas, thawed</li>
                    <li>1 small onion, finely chopped</li>
                    <li>2 green chilies, finely chopped (adjust to your spice preference)</li>
                    <li>1 teaspoon cumin seeds</li>
                    <li>1 teaspoon mustard seeds</li>
                    <li>1/2 teaspoon garam masala</li>
                    <li>1/2 teaspoon turmeric powder</li>
                    <li>1 teaspoon coriander powder</li>
                    <li>Salt to taste</li>
                    <li>Vegetable oil for frying</li>
                </ol>
            </div>
            

            <h3>Directions</h3>
            <div class="recipe-sections">
                <h4>Prepare the Samosa Dough:</h4>
                <ol>
                    <li>In a mixing bowl, combine the all-purpose flour and salt.</li>
                    <li>Add the vegetable oil and mix it into the flour using your fingers until it resembles breadcrumbs.</li>
                    <li>Gradually add water and knead the mixture into a smooth, firm dough. Cover the dough with a damp cloth and let it rest for 30 minutes.</li>
                </ol>
                
                <h4>Prepare the Samosa Filling:</h4>
                <ol>
                    <li>Heat some vegetable oil in a pan over medium heat.</li>
                    <li>Add the cumin seeds and mustard seeds. When they start to splutter, add the chopped onions and green chilies.</li>
                    <li>Sauté the onions until they turn translucent.</li>
                    <li>Add the mashed potatoes, thawed peas, and all the spices (garam masala, turmeric powder, coriander powder). Mix well.</li>
                    <li>Cook the filling for a few minutes, stirring frequently, until the flavors meld together. Season with salt to taste.</li>
                    <li>Remove the filling from heat and let it cool to room temperature.</li>
                </ol>
                
                <h4>Assemble the Samosas:</h4>
                <ol>
                    <li>Divide the rested dough into equal portions and roll each portion into a ball.</li>
                    <li>Roll out each ball into a thin oval or circle.</li>
                    <li>Cut the rolled dough in half to form two semi-circles.</li>
                    <li>Fold each semi-circle to form a cone shape, sealing the edges with a little water to make a triangular pocket.</li>
                    <li>Fill each cone with a spoonful of the prepared filling, ensuring not to overfill.</li>
                    <li>Seal the open edge of the cone by pinching it together, creating a triangular Samosa.</li>
                    <li>Repeat the process with the remaining dough and filling.</li>
                </ol>
                
                <h4>Fry the Samosas:</h4>
                <ol>
                    <li>Heat vegetable oil in a deep frying pan or skillet over medium heat.</li>
                    <li>Once the oil is hot, carefully add the prepared Samosas, a few at a time, without overcrowding the pan.</li>
                    <li>Fry the Samosas until they turn golden brown and crispy, turning them occasionally to ensure even cooking.</li>
                    <li>Remove the fried Samosas with a slotted spoon and place them on paper towels to drain excess oil.</li>
                </ol>
            </div>
            
            <h3>Serve:</h3>
            <p>Bangladeshi Samosas are best enjoyed hot and crispy with chutney, such as tamarind or mint chutney. They make for a delightful snack or appetizer that's sure to be a hit at any gathering. Enjoy!</p>
        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>
    </body>
</html>