
<header class="header">

    <div class="nav nav-1">
        <section class="flex">
            <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome.</a>

            <ul>
                <li>
                     <a href="post_property.php">post property<i class="fas fa-paper-plane"></i></a>
                </li>
            </ul>

        </section>
    </div>
    <div class="nav nav-2">
        <section class="flex">
        <div id="menu-btn" class="fas fa-bars"></div>
            
            <div class="menu">
                <ul>
                    <li><a href="#">My Listings<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="post_property.php">Post Property</a></li>
                            <li><a href="my_listings.php">My Listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Options<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="search.php">Filter Search</a></li>
                            <li><a href="listings.php">All Listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Help<i class="fa fa-angle-down"></i></a>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">contact</a></li>
                            <li><a href="contact.php#faq">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul>
                <li><a href="saved.php">Saved<i class="fa fa-heart"></i></a></li>
                    <li><a href="#">Account <li class="fas fa-angle-down"></i> </a>
                        <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>                            
                        <?php if($user_id !=''){?>
                        <li><a href="update.php">Update Profile</a></li>    
                        <li><a href="components/user_logout.php" onclick="return confirm('Log out from this website?')">Logout</a>  
                        <?php }?></li>  
                    </ul>
                </li> 
            </ul>
        </section>
    </div>

</header>