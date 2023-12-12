<!-- NOTE: the navbar requires the active variable to be set in order to display teh current page -->

<nav>
    <img src="./static/images/Times-of-BD-logos_transparent.png"
        alt="Times Of BD Logo">

    <ul class="nav-center-items-container">
            
        <li class="nav-items <?php if ($active == "Home") {echo 'active';}?> ">
            <a href="./index.php">
                <div class="spacing"></div>
                Home
                <div class="spacing"></div>
            </a>
        </li>
            
        

        <li class="nav-items <?php if ($active == "Cities") {echo 'active';}?>">
            <div class="spacing"></div>
            Cities
            <div class="spacing"></div>
            <ul class="sub-nav-menu">
                <li class="sub-nav-menu-items">
                    <a href="./dhaka.php">
                        Dhaka
                    </a>
                </li>
                
                <li class="sub-nav-menu-items"><a href="./Chittagong.php">Chittagong</a></li>
            
            
                <li class="sub-nav-menu-items"><a href="./Feni.php">Feni</a></li>
                
            </ul>
        </li>

        <li class="nav-items <?php if ($active == "Food") {echo 'active';}?>">
            <div class="spacing"></div>
            Food
            <div class="spacing"></div>
            <ul class="sub-nav-menu">
                
                <li class="sub-nav-menu-items"><a href="./appetizer.php">Appetizer</a></li>
            
            
                <li class="sub-nav-menu-items"><a href="./entree.php">Entree</a></li>
            
            
                <li class="sub-nav-menu-items"><a href="./desert.php">Desert</a></li>
                
            </ul>
        </li>

        <li class="nav-items <?php if ($active == "Vacation") {echo 'active';}?>">
            <div class="spacing"></div>
            Vacation
            <div class="spacing"></div>
            <ul class="sub-nav-menu">
                
                <li class="sub-nav-menu-items"><a href="./cox-bazar.php">Cox Bazar</a></li>
            
            
                <li class="sub-nav-menu-items"><a href="./rangamati.php">Rangamati</a></li>
            
            
                <li class="sub-nav-menu-items"><a href="./st-martin-island.php">St. Martin's Island</a></li>
                
            </ul>
        </li>
    </ul>

    <a href="./bibliography.php"><span id="about-me">Work Cited</span></a>
</nav>