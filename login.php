<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!--    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' /> -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon-6.ico" />
  	<title>Cazpro - Login</title>
    <style type="text/css">

    .information-blocks a.facebookBut:hover {
        color:white;
        opacity: 0.8;
    }

    </style>
</head>
<body class="style-10">

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->
           <?php include('header.php'); ?>
            <div class="content-push">
    
                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Login Form</a>
                </div>
        <?php if(isset($_SESSION['FBID']))
            echo $_SESSION['FBID'];
            ?>
                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>Registered Customers</h3>
                                    <p></p>
                                </div>
                                <form>
                                    <label>Email Address</label>
                                    <input class="simple-field" type="text" placeholder="Enter Email Address" value="" />
                                    <label>Password</label>
                                    <input class="simple-field" type="password" placeholder="Enter Password" value="" />
                                    <div class="button style-10">Login Page<input type="submit" value="" /></div>
                                </form>
                                    <br><span > OR</span><br>
                         
    <!-- including php login -->
    <?php
// Facebook app settings
$app_id       = '418205805053676';
$app_secret   = '5a03672408cffd9c9c6a22f2cb6ab169';
$redirect_uri = 'http://localhost/cazpro/facebook_login/loginwithfacebook.php';
 
// Requested permissions for the app - optional.
$permissions = array('email','public_profile');
 

// Define the root directoy.
 
// Autoload the required files
require_once __DIR__ . "/facebook_login/facebook-php-sdk-v4-4.0-dev/autoload.php";
 
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\GraphUser;
 
// Initialize the SDK.
FacebookSession::setDefaultApplication( $app_id, $app_secret );
 
// Initialize the Facebook SDK.
FacebookSession::setDefaultApplication( $app_id, $app_secret );
$helper = new FacebookRedirectLoginHelper( $redirect_uri);
$loginUrl = $helper->getLoginUrl( $permissions );
    if(!isset($_SESSION['FBID']))  
    echo ' <a class="button style-10 facebookBut" style="margin-top:10px;background:hsla(206, 100%, 43%, 1);border:2px solid hsla(206, 100%, 43%, 1);" href="'.$loginUrl.'">Login With Facebook</a>';
    else
        echo ' <a class="button style-10 facebookBut" style="margin-top:10px;background:hsla(206, 100%, 43%, 1);border:2px solid hsla(206, 100%, 43%, 1);" href="logout.php">Logout</a>';

?>
 
    <!-- end-->


                          


                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>New Customers</h3>
                                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                </div>
                                <a class="button style-12">Register Account</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                
               <!--  <div class="information-blocks">
                                 <div class="row">
                                     <div class="col-sm-4 information-entry">
                                         <h3 class="block-title inline-product-column-title">Featured products</h3>
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                             
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                             
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                                     </div>
                                     <div class="col-sm-4 information-entry">
                                         <h3 class="block-title inline-product-column-title">Featured products</h3>
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                             
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                             
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                                     </div>
                                     <div class="col-sm-4 information-entry">
                                         <h3 class="block-title inline-product-column-title">Featured products</h3>
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                             
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                             
                                         <div class="inline-product-entry">
                                             <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>
                                             <div class="content">
                                                 <div class="cell-view">
                                                     <a href="#" class="title">Ladies Pullover Batwing Sleeve Zigzag</a>
                                                     <div class="price">
                                                         <div class="prev">$199,99</div>
                                                         <div class="current">$119,99</div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="clear"></div>
                                         </div>
                                     </div>
                                 </div>
                             </div>   -->              

                <!-- FOOTER -->
             <?php include('footer.php'); ?>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="search-box popup">
        <form>
            <div class="search-button">
                <i class="fa fa-search"></i>
                <input type="submit" />
            </div>
            <div class="search-drop-down">
                <div class="title"><span>All categories</span><i class="fa fa-angle-down"></i></div>
                <div class="list">
                    <div class="overflow">
                        <div class="category-entry">Category 1</div>
                        <div class="category-entry">Category 2</div>
                        <div class="category-entry">Category 2</div>
                        <div class="category-entry">Category 4</div>
                        <div class="category-entry">Category 5</div>
                        <div class="category-entry">Lorem</div>
                        <div class="category-entry">Ipsum</div>
                        <div class="category-entry">Dollor</div>
                        <div class="category-entry">Sit Amet</div>
                    </div>
                </div>
            </div>
            <div class="search-field">
                <input type="text" value="" placeholder="Search for product" />
            </div>
        </form>
    </div>

    <div class="cart-box popup">
        <div class="popup-container">
            <div class="cart-entry">
                <a class="image"><img src="img/product-menu-1.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                    <div class="quantity">Quantity: 4</div>
                    <div class="price">$990,00</div>
                </div>
                <div class="button-x"><i class="fa fa-close"></i></div>
            </div>
            <div class="cart-entry">
                <a class="image"><img src="img/product-menu-1_.jpg" alt="" /></a>
                <div class="content">
                    <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                    <div class="quantity">Quantity: 4</div>
                    <div class="price">$990,00</div>
                </div>
                <div class="button-x"><i class="fa fa-close"></i></div>
            </div>
            <div class="summary">
                <div class="subtotal">Subtotal: $990,00</div>
                <div class="grandtotal">Grand Total <span>$1029,79</span></div>
            </div>
            <div class="cart-buttons">
                <div class="column">
                    <a class="button style-3">view cart</a>
                    <div class="clear"></div>
                </div>
                <div class="column">
                    <a class="button style-4">checkout</a>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
</body>
</html>
