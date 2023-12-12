<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php
        $header = 'Grading Page - Time of BD!';
        include './partials/header.php';
    ?>
    <body>
        <!-- nav bar -->
        <?php
            $active = "";
            include './partials/navbar.php';
        
        ?>
        <!-- nav bar     -->
        
        <div class="content">
            <h2>Good Design Technique</h2>
            <ul>
                <li>Design the website in Figma using CRAP principles. Page has a minimalistic, and clean feel with contrasted text and repeating sections. All pages except for the index, work cited, and grading page have a Carousel header followed by a content section of relevant information like historical facts, recipes, and personal connections. These receptive sections help maintain the overall theme of the website while still distinguishing the separate sections (cities, food, and vacation) with their own unique section</li>
            </ul>

            <h2>Quality of Content</h2>
            <ul>
                <li>
                    Included 10 pages excluding the work cited & grading page.
                </li>
                <li>
                    Each page include thoroughly researched information along with a personal connection sections that gives each page a unique, personalized feel. Additionally, each sections have their own unique, relevant sections (like history section with teh cities, recipe section with the food, etc) that adds to the overall quality of the pages.
                </li>
            </ul>

            
            <h2>More Miscellaneous</h2>
            <ul>
                <li>
                    The code is well formatted with a global css file to create the website's overall look and feel. The source code is also thoroughly commented to explain the various sections and the functions.
                </li>
                <li>
                    The nav bar is consistent across the website and utilizes dropdowns to organize data for convenience and simplicity. The nav bar also highlights the current section the visitor is in to give more context.
                </li>
                <li>
                    Includes an image carousel in most pages that cycles through a list of images (related to the page information). First, a div with an img and a title is included within the HTMl. The title is positioned in the center of the carousel using absolute. Using JavaScript, the src of the IMG tag is changed every 2 section to the next index of the list of images, allowing for a cycling carousel.
                    This feature is a nice addition as it adds to the visuals of the page while relating the information of the section in a visual medium.
                </li>
            </ul>

            <h2>Responsive</h2>
            <ul>
                <li>This was a mobile first design, as the website uses flex-box to properly wrap elements for smaller screens. The design is also mobile friendly as it has a simplistic look with contrasting font and font sizes that make it easier to read on mobile devices.</li> 
            </ul>

            <h1>Final Project Update</h1>
            <ul>
                <li>
                    <h4>PHP Transformation</h4>
                    Refactored all pages to be php and use partials. Header, navbar, carousel, and footer (added in this version) has been implemented as php partials and are being incorporated in all pages using include. This has significantly reduced repetitiveness and follow the DRY
                </li>

                <li>
                    <h4></h4>
                </li>
            </ul>

        </div>

        <!-- footer section -->
        <?php include "./partials/footer.php" ?>
    </body>
</html>