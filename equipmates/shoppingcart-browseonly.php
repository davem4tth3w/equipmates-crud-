<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart browse only</title>
    <!-- link to css -->
    <link rel="stylesheet" href="shoppingcart-browseonly.css">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>

         <!-- Header -->
    <header>
        <!-- new nav -->
            
        <!-- mobile view -->
        <div class="mob-fixed-cont">
            <div class="mobile-container">
                <a href=" " id="nav_logo-mobile">Equipmates</a>
            </div>
        </div>
        <!-- mobile view end-->

        <!-- navigation - start -->
        <nav class="nav">
            <div class="nav_container">

                <a href=" " id="nav_logo">Equipmates</a>
                
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
                        <a href=" " class="nav_links">Home</a>
                    </li>
    
                    <li class="nav_item">
                        <a href=" " class="nav_links">Fitness</a>
                    </li>
    
                    <li class="nav_item">
                        <a href=" " class="nav_links">Sports</a>
                    </li>
    
                    
                    <li class="nav_item">
                        <a href=" " class="nav_links">login</a>
                    </li>
    
                    <li class="nav_item">
                        <a href=" " class="nav_links">Signup</a>
                    </li>

                    <li class="nav_item">
                        <a href=" " class="nav_links"><i class='bx bx-shopping-bag' id="cart-icon"></i></a>
                       
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
                <button type="button" class="btn-buy">Buy Now</button>

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

    <!-- shop -->
    <section class="shop container">

        <div class="note">
            <h4>This page is for browsing only. You need to log in to add cart.</h4>
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
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            
            </div>

             <!-- box 2 -->
             <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/adjustable-weightbench.jpg" alt="" class="product-img">
                <h2 class="product-title">ADJUSTABLE WEIGHT BENCH</h2>
                <span class="price">P20000</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

             <!-- box 3 -->
             <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/benchpress.jpg" alt="" class="product-img">
                <h2 class="product-title">BENCH PRESS</h2>
                <span class="price">P10000</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

             <!-- box 4 -->
             <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/cable-crossover-machine.jpg" alt="" class="product-img">
                <h2 class="product-title">CABLE CROSSOVER MACHINE</h2>
                <span class="price">P25000</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            <!-- box 5 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/chest-pressmachine.jpg" alt="" class="product-img">
                <h2 class="product-title">Chess press machine</h2>
                <span class="price">P25000</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            <!-- box 6 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/dumbell.png" alt="" class="product-img">
                <h2 class="product-title">DUMBELL</h2>
                <span class="price">P2580</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            <!-- box 7 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/preacher-curlbench.jpg" alt="" class="product-img">
                <h2 class="product-title">preacher curlbench</h2>
                <span class="price">P450</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            <!-- box 8 -->
            <div class="product-box">
                <img src="img/product8.jpg" alt="" class="product-img">
                <h2 class="product-title">SHOES</h2>
                <span class="price">P3999</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            <!-- box 9 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/hammer-strength-bench.jpg" alt="" class="product-img">
                <h2 class="product-title">hammer strength bench</h2>
                <span class="price">P39000</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            <!-- box 10 -->
            <div class="product-box">
                <img src="img/FITNESS EQUIPMENTS/kettle-ball.jpg" alt="" class="product-img">
                <h2 class="product-title">kettle ball</h2>
                <span class="price">P999</span>
                <a href=" " class='bx bx-shopping-bag add-cart' id="link-to-login"></a>
            </div>

            

        </div>
    </section>
   
    <!-- link to JS -->

    <script src="equipmentsJS.js"></script>
    
</body>
</html>