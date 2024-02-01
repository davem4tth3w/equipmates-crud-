<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="landingpage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Equipments</title>
    
</head>
<body>
    <div class="container">
        
          <!-- Header -->
    <header>
        <!-- new nav -->
            
        <!-- mobile view -->
        <div class="mob-fixed-cont">
            <div class="mobile-container">
                <a href="landingpage.html" id="nav_logo-mobile">Equipmates</a>
            </div>
        </div>
        <!-- mobile view end-->

        <!-- navigation - start -->
        <nav class="nav">
            <div class="nav_container">

                <a href="landingpage.html" id="nav_logo">Equipmates</a>
                
                <div class="nav_toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
            
                </div>

                <!-- search-bar -->
                <div class="searchbar-container">

                    <form action="#">
                        <div class="form-input">
                            <input type="search" placeholder="Search...">
                            <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                        </div>
                    </form>
                    
                </div>
                <!-- search-bar end-->



                <ul class="nav_menu">
                    <li class="nav_item">
                        <a href="landingpage.html" class="nav_links">Home</a>
                    </li>
    
                    <li class="nav_item">
                        <a href="shoppingcart.html" class="nav_links">Fitness</a>
                    </li>
    
                    <li class="nav_item">
                        <a href=" " class="nav_links">Sports</a>
                    </li>

                    <li class="nav_item">
                        <a href="logout.php" class="nav_links">Logout</a>
                    </li>
    
    
                    
                    <li class="nav_item">
                        <a href="user-profile.html" class="nav_links"><i class='bx bx-user-circle' id="user-icon"></i></a>
                    </li>

                    <li class="nav_item">
                       <i class='bx bx-shopping-bag' id="cart-icon"></i>
                    </li>
                    
    
                </ul>

                 <!-- cart -->
            <div class="cart">
                <h2 class="cart-title">Your cart</h2>
                <!-- content -->
                <div class="cart-content">

                </div>
                <!-- total -->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">P0</div>
                </div>
                <!-- buy button -->
                <!-- <button type="button" class="btn-buy">Buy Now</button> -->

                <a href="payment.php"><button type="button" class="btn-buy">Buy Now</button></a>

                <!-- cart close -->
                <i class='bx bx-x' id="close-cart"></i>
            </div>

            </div>
        </nav>

        <!-- navigation - end -->
        <!-- new nav end-->



         <!-- navigation -->

        </div>         
    </header>


        <div class="content">

            <div class="content-background">

                <div class="content-itms">

                    <div class="first-text">
                        <h4>Equip your teammates</h4>
                    </div>
        
                    <div class="second-text">
                        <h4>Gear up to win.</h4>
                    </div>
    
    
                    <div class="shopbtn">
                        <button class="shopnow-btn"><a href="">shop now</a></button>
                    </div>
            
                </div>
            </div>

        </div>


        <!-- FEATURED PRODUCTS IN LANDINGPAGE -->

         <!-- shop -->

    <section class="shop container">

        <div class="featured-products">
            <h4>Featured Products</h4>
        </div>

        <div class="header-container">
            <div class="cart-header"><h4>F I T N E S S</h4></div>
        </div>

        <!-- <h2 class="section-title">Shop products</h2> -->

        <!-- content -->
        <div class="shop-content">
            <!-- box 1 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/abdominal-bench.jpg" alt="" class="product-img">
                <h2 class="product-title">ABDOMINAL BENCH</h2>
                <span class="price">P12000</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

             <!-- box 2 -->
             <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/adjustable-weightbench.jpg" alt="" class="product-img">
                <h2 class="product-title">ADJUSTABLE WEIGHT BENCH</h2>
                <span class="price">P20000</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

             <!-- box 3 -->
             <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/benchpress.jpg" alt="" class="product-img">
                <h2 class="product-title">BENCH PRESS</h2>
                <span class="price">P10000</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

             <!-- box 4 -->
             <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/cable-crossover-machine.jpg" alt="" class="product-img">
                <h2 class="product-title">CABLE CROSSOVER MACHINE</h2>
                <span class="price">P25000</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            <!-- box 5 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/chest-pressmachine.jpg" alt="" class="product-img">
                <h2 class="product-title">Chess press machine</h2>
                <span class="price">P25000</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            <!-- box 6 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/dumbell.png" alt="" class="product-img">
                <h2 class="product-title">DUMBELL</h2>
                <span class="price">P2580</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            <!-- box 7 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/preacher-curlbench.jpg" alt="" class="product-img">
                <h2 class="product-title">preacher curlbench</h2>
                <span class="price">P450</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            <!-- box 8 -->
            <div class="product-box">
                <img src="img/product8.jpg" alt="" class="product-img">
                <h2 class="product-title">SHOES</h2>
                <span class="price">P3999</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            <!-- box 9 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/hammer-strength-bench.jpg" alt="" class="product-img">
                <h2 class="product-title">hammer strength bench</h2>
                <span class="price">P39000</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            <!-- box 10 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/kettle-ball.jpg" alt="" class="product-img">
                <h2 class="product-title">kettle ball</h2>
                <span class="price">P999</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>

            

        </div>
    </section>

    <!-- FEATURED PRODUCTS IN LANDINGPAGE (END)-->


        
    <footer class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address: </strong>Lustre, Sta. Catalina Zamboanga City</p>
            <p><strong>Contact no.: </strong> 0935663458</p>
            <p><strong>Open time: </strong> 8:00 am - 10:00 pm, Mon - Sat</p>
            <div class="follow">
                <h4>Show your support on:</h4>
                <div class="icon">
                    <i class='bx bxl-facebook-square'></i>
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-instagram' ></i>
                    <i class='bx bxl-youtube' ></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href=" ">About Us</a>
            <a href=" ">Delivery</a>
            <a href=" ">Privacy Policy</a>
            <a href=" ">Terms & Conditions</a>
            <a href=" ">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href=" ">Sign In</a>
            <a href=" ">View Cart</a>
            <a href=" ">My Wishlist</a>
            <a href=" ">Track my Order</a>
            <a href=" ">Help</a>
        </div>

        <div class="col install">
            <p>Secured Payment Getaways </p>
        </div>

        <div class="copyright">
            <p>2022, Equipmates Inc. </p>
        </div>
    </footer>


    </div>
    <script src="equipmentsJS.js"></script>
    <script src="mainJS.js"></script>
</body>
</html>