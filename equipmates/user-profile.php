<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <title>USER PROFILE</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="user-profile-stylesheet.css">
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
                        <a href="landingpage.html" class="nav_links">Home</a>
                    </li>
    
                    <li class="nav_item">
                        <a href="shoppingcart.html" class="nav_links">Fitness</a>
                    </li>
    
                    <li class="nav_item">
                        <a href=" " class="nav_links">Sports</a>
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


        
        <div class="sidebar">
            <div class="top">
                <div class="logo">
                    <i class='bx bx-user-circle'></i>
                    <span>User Profile</span>
                </div>
                <i class="bx bx-menu" id="btn"></i>
            </div>
            <div class="user">
                <img src="img/profile-pic.jpg" alt="user-pic" class="user-img">
                <div>
                    <p class="bold">Roland Jay Pada</p>
                    <p>User</p>
                </div>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class='bx bxs-user-account' ></i>
                        <span class="nav-item">Account</span>
                    </a>
                    <span class="tooltip">Account</span>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bxs-shopping-bag"></i>
                        <span class="nav-item">Purchases</span>
                    </a>
                    <span class="tooltip">Purchases</span>
                </li>

                <li>
                    <a href="#">
                        <i class='bx bx-bell' ></i>
                        <span class="nav-item">Notifications</span>
                    </a>
                    <span class="tooltip">Notifications</span>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-menu"></i>
                        <span class="nav-item">Orders</span>
                    </a>
                    <span class="tooltip">Orders</span>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-body"></i>
                        <span class="nav-item">Customers</span>
                    </a>
                    <span class="tooltip">Customers</span>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bxs-location-plus"></i>
                        <span class="nav-item">Shipping</span>
                    </a>
                    <span class="tooltip">Shipping</span>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-cog"></i>
                        <span class="nav-item">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>

                <li>
                    <a href="landingpage-browseonly.html">
                        <i class="bx bx-log-out"></i>
                        <span class="nav-item">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                </li>
            </ul>       
        </div>

        <div class="main-content">
            <div class="container">
                

                <div class="box-container">  
                    <div class="box box1">  
                         <div class="content">  
                            <h4>To Pay</h4>
                            <div class="items">
                                <div class="remove-item">
                                    <i class='bx bxs-x-circle' ></i>
                                </div>

                                <img src="img/FITNESS EQUIPMENTS/dumbell.png" alt="">
                                <div class="item-desc">
                                    <div class="itm-name">
                                        <h5>Dumbell</h5>
                                    </div>
                                    <div class="itm-price">
                                        <h5>P2000</h5>
                                        <h5>Quantity: 1</h5>
                                    </div>

                                </div>
                            </div>
                         </div>  
                    </div>  

                    <div class="box box2">  
                         <div class="content">  
                            <h4>To Ship</h4>
                            <div class="items">

                            </div>
                         </div>  
                    </div>

                    <div class="box box3">  
                         <div class="content">  
                            <h4>To Recieve</h4>
                         </div>  
                    </div>  

                    <div class="box box4">  
                        <div class="content">  
                            <h4>Completed</h4>
                        </div>  
                   </div> 

                   <div class="box box5">  
                        <div class="content">  
                            <h4>Canceled</h4>
                        </div>  
                    </div> 

                    <div class="box box6">  
                        <div class="content">  
                            <h4>Returned Item</h4>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
</body> 

    <!-- link to JS -->
    <script src="mainJS.js"></script>
    <script src="equipmentsJS.js"></script>
    
<script>
    let btn = document.querySelector('#btn')
    let sidebar = document.querySelector('.sidebar')

    btn.onclick = function() {
        sidebar.classList.toggle('active');
    };
</script>


</html>