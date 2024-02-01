<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sports.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sports</title>
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
                            <a href=" " class="nav_links"><i class='bx bx-user-circle' id="user-icon"></i></a>
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
                    <a href="payment.html"><button type="button" class="btn-buy">Buy Now</button></a>
                    <!-- <button type="button" class="btn-buy">Buy Now</button> -->
    
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
        <section class="shop container">

            <div class="header-container">
                <div class="cart-header"><h4>S P O R T S</h4></div>
            </div>
    
            <!-- <h2 class="section-title">Shop products</h2> -->
    
            <!-- content -->
            <div class="shop-content">
                
                <div class="row-1">
                    
                    <div class="sport-cat-container">
                        <a href=" "><i class='bx bx-basketball'></i></a>
                    </div>

                    <div class="sport-cat-container">
                        <a href=" "><i class='bx bx-basketball'></i></a>
                    </div>

                    <div class="sport-cat-container">
                        <a href=" "><i class='bx bx-basketball'></i></a>
                    </div>

                    <div class="sport-cat-container">
                        <a href=" "><i class='bx bx-basketball'></i></a>
                    </div>
                </div>
                
    
            </div>
        </section>

        <!-- link to JS -->
        <script src="mainJS.js"></script>
        <script src="equipmentsJS.js"></script>
    
    </body>
</html>