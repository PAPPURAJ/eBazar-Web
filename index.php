<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eBazar</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top">
       
       <div class="container">
           
           <div class="col-md-6 offer">
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">3 Items In Your Cart | Total Price: $300 </a>
               
           </div>
           
           <div class="col-md-6">
               
               <ul class="menu">
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   
               </ul>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="navbar" class="navbar navbar-default">
       
       <div class="container">
           
           <div class="navbar-header">
               
               <a href="index.php" class="navbar-brand home">
                   
                   <img src="images/eBazar.png" alt="eBazar Logo" class="hidden-xs">
                   <img src="images/eBazar.png" alt="eBazar Logo Mobile" class="visible-xs">
                   
               </a>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">
               
               <div class="padding-nav">
                   
                   <ul class="nav navbar-nav left">
                       
                       <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="checkout.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul>
                   
               </div>
               
               <a href="cart.php" class="btn navbar-btn btn-primary right">
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>3 Items In Your Cart</span>
                   
               </a>
               
               <div class="navbar-collapse collapse right">
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button>
                   
               </div>
               
               <div class="collapse clearfix" id="search">
                   
                   <form method="get" action="results.php" class="navbar-form">
                       
                       <div class="input-group">
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn">
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                               
                               <i class="fa fa-search"></i>
                               
                           </button>
                           
                           </span>
                           
                       </div>
                       
                   </form>
                   
               </div>
               
           </div>
           
       </div>
       
   </div>
   
   <div class="container" id="slider">
       
       <div class="col-md-12">
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>
               
               <div class="carousel-inner">
                   
                   <div class="item active">
                       
                       <img src="admin_area/slides_images/slide1.jpg" alt="Slider Image 1">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/slide-2.png" alt="Slider Image 2">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/slide-3.png" alt="Slider Image 3">
                       
                   </div>
                   
                   <div class="item">
                       
                       <img src="admin_area/slides_images/slide-4.jpg" alt="Slider Image 4">
                       
                   </div>
                   
               </div>
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="advantages">
       
       <div class="container">
           
           <div class="same-height-row">
               
               <div class="col-sm-4">
                   
                   <div class="box same-height">
                       
                       <div class="icon">
                           
                           <i class="fa fa-heart"></i>
                           
                       </div>
                       
                       <h3><a href="#">Best Offer</a></h3>
                       
                       <p>We always tries to give the best service to the customer. </p>
                       
                   </div>
                   
               </div>
               
               <div class="col-sm-4">
                   
                   <div class="box same-height">
                       
                       <div class="icon">
                           
                           <i class="fa fa-tag"></i>
                           
                       </div>
                       
                       <h3><a href="#">Best Prices</a></h3>
                       
                       <p>Deliver best product in best price is our main goal</p>
                       
                   </div>
                   
               </div>
               
               <div class="col-sm-4">
                   
                   <div class="box same-height">
                       
                       <div class="icon">
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div>
                       
                       <h3><a href="#">100% Original</a></h3>
                       
                       <p>We always ensure users to give the 100% genuine product </p>
                       
                   </div>
                   
               </div>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="hot">
       
       <div class="box">
           
           <div class="container">
               
               <div class="col-md-12">
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="content" class="container">
       
       <div class="row">
           
           <div class="col-sm-4 col-sm-6 single">
               
               <div class="product">
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/ssd.png" alt="ssd" width="180">
                       
                   </a>
                   
                   <div class="text">
                       
                       <h3>
                           <a href="details.php">
                              SSD
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div>
                   
               </div>
               
           </div>
           
           <div class="col-sm-4 col-sm-6 single">
               
               <div class="product">
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/mobile.png" alt="mobile"  width="195">
                       
                   </a>
                   
                   <div class="text">
                       
                       <h3>
                           <a href="details.php">
                               Mobile Phone
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/laptop.jpg" alt="laptop"  width="240">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                               Laptop
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/bag.png" alt="bag"  width="350" height="230">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                               Bag
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/arduino.jpg" alt="arduino"  width="350" height="230">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                               Arduino
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/usage.png" alt="usage"  width="350">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                               Used Laptop
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/keyboard.jpg" alt="keyboard"  width="350" height="230">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                              Keyboard
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
           <div class="col-sm-4 col-sm-6 single"><!-- col-sm-4 col-sm-6 single Begin -->
               
               <div class="product"><!-- product Begin -->
                   
                   <a href="details.php">
                       
                       <img class="img-responsive" src="admin_area/product_images/mouse.jpg" alt="mouse" width="350" height="230">
                       
                   </a>
                   
                   <div class="text"><!-- text Begin -->
                       
                       <h3>
                           <a href="details.php">
                              Mouse
                           </a>
                       </h3>
                       
                       <p class="price">$30</p>
                       
                       <p class="button">
                           
                           <a href="details.php" class="btn btn-default">View Details</a>
                           
                           <a href="details.php" class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                                   Add To Cart
                               </i>
                               
                           </a>
                           
                       </p>
                       
                   </div><!-- text Finish -->
                   
               </div><!-- product Finish -->
               
           </div><!-- col-sm-4 col-sm-6 single Finish -->
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
