<nav id="navbar" >
    <div class="icon-container">
        <img src="./views/assets/logo.jpg" />
        <div class="search-bar-container">
        <form action="/search" method="GET">
            <input
              name="searchData" 
              class="search-bar" 
              type="text" 
              value="<?php if(isset($searchData)) echo $searchData; ?>"
            />
            <button type="submit">
                <img class="search-bar-icon" src="./views/assets/search-bar.png" alt="">
            </button>
        </form>
        </div>
    </div>
    <div class="navigation-container">
        <ul>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/") echo "active";
            ?>">
                <a href="/" >Home</a>
            </li>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/study") echo "active";
            ?>">
                <a href="/study" >Study</a>
            </li>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/questions") echo "active";
            ?>">
                <a href="/questions" >Questions</a>
            </li>
            <li class="<?php 
                if($_SERVER["REQUEST_URI"] === "/contact") echo "active";
            ?>">
                <a href="/contact" >Contact Us</a>
            </li>
        </ul>
    </div>
    <?php if(isset($_COOKIE["login-data"])) echo "
        <div class='logged-account-container' id='user-logo-container' >
            <div class='image-container' id='image-container' >
                <img src='./views/assets/person.png' class='user-logo' id='user-logo' />
                <img src='./views/assets/arrow-up.png' class='arrow' id='arrow' />
            </div>
            <div class='user-menu' id='user-menu-container'>
                <div class='image-username-container'>
                    <img src='./views/assets/person.png' />
                    <div class='level-username-container' >
                        <p>Mekaratas</p>
                        <h5>Level</h5>
                    </div>
                </div>
                <ul class='link-container' >
                    <li><a href='#'>See Profile</a>
                    <li><a href='#'>My Progress</a>
                    <li><a href='#'>My Questions</a>
                </ul>
                <div class='log-out-container' >
                    <a href='/' onclick='handleLogOut()' >Log Out</a>
                </div>
            </div>
        </div>
    "; else echo "
    <div class='login-register-container'>
        <a href='/login' >Log In</a>
        <a href='/register' >Register</a>
    </div>
    "; ?>
</nav>