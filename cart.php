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
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png" />
  	<title>Cazpro - Cart</title>
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

             <?php
                include('header.php');
                ?>
            <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">Shopping Cart</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-9 information-entry">
                            <h3 class="cart-column-title size-1">Products</h3>
                            <div class="traditional-cart-entry style-1">
                                <a class="image" href="#"><img alt="" src="img/product-minimal-1.jpg"></a>
                                <div class="content">
                                    <div class="cell-view">
                                        <a class="tag" href="#">woman clothing</a>
                                        <a class="title" href="#">Pullover Batwing Sleeve Zigzag</a>
                                        <div class="inline-description">S / Dirty Pink</div>
                                        <div class="inline-description">Zigzag Clothing</div>
                                        <div class="price">
                                            <div class="prev">$199,99</div>
                                            <div class="current">$119,99</div>
                                        </div>
                                        <div class="quantity-selector detail-info-entry">
                                            <div class="detail-info-entry-title">Quantity</div>
                                            <div class="entry number-minus">&nbsp;</div>
                                            <div class="entry number">10</div>
                                            <div class="entry number-plus">&nbsp;</div>
                                            <a class="button style-17">remove</a>
                                            <a class="button style-15">Update Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 information-entry">
                            <h3 class="cart-column-title size-1" style="text-align: center;">Subtotal</h3>
                            <div class="sidebar-subtotal">
                                <div class="price-data">
                                    <div class="main">$129.99</div>
                                    <div class="title">Excluding tax &amp; shipping</div>
                                    <div class="subtitle">ORDERS WILL BE PROCESSED IN USD</div>
                                </div>
                                <div class="additional-data">
                                    <div class="title"><span class="inline-label red">Promotion</span> Additional Notes</div>
                                    <textarea class="simple-field size-1"></textarea>
                                    <a class="button style-10">Checkout</a>
                                </div>
                            </div>
                            <div class="block-title size-1">Get shipping estimates</div>
                            <form>
                                <label>Country</label>
                                <div class="simple-drop-down simple-field size-1">
                                    <select>
                                        <option>United States</option>
                                        <option>Great Britain</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <label>State</label>
                                <div class="simple-drop-down simple-field size-1">
                                    <select>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Idaho</option>
                                    </select>
                                </div>
                                <label>Zip Code</label>
                                <input type="text" value="" placeholder="Zip Code" class="simple-field size-1">
                                <div class="button style-16" style="display: block; margin-top: 10px;">calculate shipping<input type="submit"/></div>
                            </form>
                        </div>
                    </div>

                <?php

                if(isset($_SESSION["products"]) && count($_SESSION["products"])>0)

                {
                    foreach($_SESSION["products"] as $product){ //loop though items and prepare html content

                                //set variables to use them in HTML content below
                                $product_name = $product["product_name"];
                                $product_cat = $product["category_id"];
                                $product_id=$product["product_id"];
                                $product_size=$product["product_size"];
                                $product_qty=$product["product_qty"];
                                $product_color=$product["product_color"];
                                $product_price=$product["product_price"]*$product_qty;
                                $product_image=$product["product_image"];
                                $remove_item=$product_id.$product_size.$product_color;
                               // $total_price=$total_price+$product_price;
                                echo $product_name.'  '.$product_cat.'<br>';
                            }
                }
                else
                    echo 'no product';
                ?>

                </div>


                <?php
                    include('footer.php');
                ?>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="overlay-popup" id="image-popup">

        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container">
                        <img class="gallery-image" src="img/portfolio-1.jpg" alt="" />
                        <div class="close-popup"></div>
                    </div>
                </div>
            </div>
        </div>
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
       <?php
        include('cart_item_entered.php');
       ?>
   </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript">
        $('document').ready(function(){
            $('.cart-total-item').hover(function(){
            $('.cart-box .cart-item-container').html('<div align="center" ><img src="img/loader.gif" width="50px" height="40px"></div>');
            $('.cart-box .cart-item-container').load("add_cart_item.php",{"load_cart":"1"});

            });
    $('.cart-item-container').on('click','.discard-product',function(){
                    var v=$(this).attr("id");
                    $('.cart-box .cart-item-container').load("add_cart_item.php",{"remove_id":v});
                   $('.cart-mycart-show').hide();
                     $(".cart-total-item").trigger("mouseenter");
                });
        });
    </script>
</body>
</html>
