<!-- NOTE: the navbar requires the active variable to be set in order to display teh current page -->

<nav>
    <img src="./static/images/Times of BD-logos_transparent.png"
        alt="Times Of BD Logo">

    <ul class="nav-center-items-container">
        <a href="./index.php">
            <li class="nav-items <?php if ($active == "Home") {echo 'active';}?> ">
                <div class="spacing"></div>
                Home
                <div class="spacing"></div>
            </li>
        </a>

        <li class="nav-items <?php if ($active == "Cities") {echo 'active';}?>">
            <div class="spacing"></div>
            Cities
            <div class="spacing"></div>
            <ul class="sub-nav-menu">
                <a href="./dhaka.html">
                    <li class="sub-nav-menu-items">Dhaka</li>
                </a>
                <a href="./Chittagong.html">
                    <li class="sub-nav-menu-items">Chittagong</li>
                </a>
                <a href="./Feni.html">
                    <li class="sub-nav-menu-items">Feni</li>
                </a>
            </ul>
        </li>

        <li class="nav-items <?php if ($active == "Food") {echo 'active';}?>">
            <div class="spacing"></div>
            Food
            <div class="spacing"></div>
            <ul class="sub-nav-menu">
                <a href="./appetizer.html">
                    <li class="sub-nav-menu-items">Appetizer</li>
                </a>
                <a href="./entree.html">
                    <li class="sub-nav-menu-items">Entree</li>
                </a>
                <a href="./desert.html">
                    <li class="sub-nav-menu-items">Desert</li>
                </a>
            </ul>
        </li>

        <li class="nav-items <?php if ($active == "Vacation") {echo 'active';}?>">
            <div class="spacing"></div>
            Vacation
            <div class="spacing"></div>
            <ul class="sub-nav-menu">
                <a href="./cox-bazar.html">
                    <li class="sub-nav-menu-items">Cox Bazar</li>
                </a>
                <a href="./rangamati.html">
                    <li class="sub-nav-menu-items">Rangamati</li>
                </a>
                <a href="./st-martin-island.html">
                    <li class="sub-nav-menu-items">St. Martin's Island</li>
                </a>
            </ul>
        </li>
    </ul>

    <a href="./bibliography.html"><span id="about-me">Work Cited</span></a>
</nav>