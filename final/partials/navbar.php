<!-- NOTE: the navbar requires the active variable to be set in order to display teh current page -->

<?php


// this session check was borrowed from https://stackoverflow.com/questions/3538513/detect-if-php-session-exists
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_name("eks3146_240_final");
    session_start();
}

?>

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

        <li class="nav-items <?php if ($active == "Forum") {echo 'active';}?>" >
            <a href="./comments.php">
                <div class="spacing"></div>
                Forum
                <div class="spacing"></div>
            </a>
        </li>

        <li class="nav-items <?php if ($active == "About") {echo 'active';}?>" >
            <a href="./grading.php">
                <div class="spacing"></div>
                About
                <div class="spacing"></div>
            </a>
        </li>

        <li class="nav-items <?php if ($active == "Work-Cited") {echo 'active';}?>" >
            <a href="./bibliography.php">
                <div class="spacing"></div>
                Work Cited
                <div class="spacing"></div>
            </a>
        </li>
    </ul>


    <a href="javascript:void(0);" class="hamburgerIcon" onclick="toggleMobileNav()">
        <i class="fa fa-bars"></i>
    </a>


    
    <!-- if user is logged in, display user icon -->
    <div class="user-section">
        <?php 
        if (array_key_exists("id", $_SESSION) && array_key_exists("first_name", $_SESSION) && array_key_exists("last_name", $_SESSION)) {
            echo '<div style="display: flex; align-items: center; gap: .5rem"><img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="" id="user-profile"><a id="login" href="./logout.php">Log Out</a></div>';
        }else{
            echo '<a href="./login.php" id="login">Log In</a>';
        }
        
        ?>
    </div>
    
</nav>

<div class="mobile-menu hide" id="mobile-menu">
    <ul class="mobile-sub-nav-menu">

        <li class="mobile-sub-nav-menu-items <?php if ($active == "Home") {echo 'active';}?> ">
            <a href="./index.php">
                Home
            </a>
        </li>

        <li>
            <h4 class="<?php if ($active == "Cities") {echo 'active';}?>">Cities</h4>
        </li>
        
        <li class="mobile-sub-nav-menu-items indented">
            <a href="./dhaka.php">
                Dhaka
            </a>
        </li>
        
        <li class="mobile-sub-nav-menu-items indented"><a href="./Chittagong.php">Chittagong</a></li>
    
    
        <li class="mobile-sub-nav-menu-items indented"><a href="./Feni.php">Feni</a></li>
        
        <h4 class="<?php if ($active == "Food") {echo 'active';}?>">Food</h4>
        <li class="mobile-sub-nav-menu-items indented"><a href="./appetizer.php">Appetizer</a></li>
            
            
        <li class="mobile-sub-nav-menu-items indented"><a href="./entree.php">Entree</a></li>
    
    
        <li class="mobile-sub-nav-menu-items indented"><a href="./desert.php">Desert</a></li>

        <h4 class="<?php if ($active == "Vacation") {echo 'active';}?>">Vacation</h4>
        <li class="mobile-sub-nav-menu-items indented"><a href="./cox-bazar.php">Cox Bazar</a></li>
            
            
        <li class="mobile-sub-nav-menu-items indented"><a href="./rangamati.php">Rangamati</a></li>
    
    
        <li class="mobile-sub-nav-menu-items indented"><a href="./st-martin-island.php">St. Martin's Island</a></li>

        <li class="mobile-sub-nav-menu-items <?php if ($active == "Forum") {echo 'active';}?>" >
            <a href="./comments.php">
                Forum
            </a>
        </li>

        <li class="mobile-sub-nav-menu-items <?php if ($active == "About") {echo 'active';}?>" >
            <a href="./grading.php">
                About
            </a>
        </li>

        <li class="mobile-sub-nav-menu-items <?php if ($active == "Work-Cited") {echo 'active';}?>" >
            <a href="./bibliography.php">
                Work Cited
            </a>
        </li>

        <li class="mobile-sub-nav-menu-items">
            <?php 
                if (array_key_exists("id", $_SESSION) && array_key_exists("first_name", $_SESSION) && array_key_exists("last_name", $_SESSION)) {
                    echo '<div style="display: flex; align-items: center; gap: .5rem"><img src="https://static.vecteezy.com/system/resources/previews/020/911/740/original/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png" alt="" id="user-profile"><a id="login" href="./logout.php">Log Out</a></div>';
                }else{
                    echo '<a href="./login.php" id="mobile-login">Log In</a>';
                }
            
            ?>
        </li>

    </ul>
</div>

<script>
    function toggleMobileNav(){
        var menu = document.getElementById("mobile-menu");
        if(menu.classList.contains("hide")){
            menu.classList.remove("hide");
        }else{
            menu.classList.add("hide");
        }
    }
</script>