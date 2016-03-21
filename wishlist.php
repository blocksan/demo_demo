<?php
session_start();
require('db_connect.php');
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
  <!--  <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    -->  <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/logocaz.jpg" />
    <style type="text/css">
        .div_continue a{
            position: relative;
            border:1px solid #5e93dd;
            padding:20px 40px;
            top: 120px;
            
        }
        .div_continue span{
            position: relative;
            font-weight:bold;
            font-size: 1.2em;
            margin-left: 20px;
            bottom: 20px;
            top:80px;
        }
        a.continue_to_shop{
            background: #5E93DC;
            font-weight:bold;
            font-size: 1.2em;
            color: white;


            transition:all 0.2s ease-in-out;
        }
        a.continue_to_shop:hover{
            background: #5E93aa;
        }
    </style>
  	<title>Cazpro - Store</title>
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
                    <a href="#">Account</a>
                    <a href="#">Wishlist</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-9 col-sm-push-3">
                            <div class="wishlist-header hidden-xs">
                                <div class="title-1">Product Name</div>
                                <div class="title-2">Purchase Product</div>
                            </div>
                            <div class="wishlist-box">
                                
                              
                         <!-- adding product from ajax -->
                         <?php

                                if(!isset($_SESSION['UID']))
                                {

                                $query= "SELECT * from product_info as p1 LEFT JOIN product_category as p2 ON p1.category_id=p2.category_id LEFT JOIN product_images as p3 ON p1.product_id=p3.product_id LEFT JOIN product_cost as p4 ON p2.category_id=p4.category_id WHERE p1.product_id IN (select product_id from user_wishlist WHERE user_id='10001')";
                                $result=mysql_query($query);
                               if(mysql_num_rows($result)>0)
                                {
                                    while($row=mysql_fetch_array($result))
                                {

                                echo'   <div class="wishlist-entry" disable="disabled">
                                    <div class="column-1">
                                        <div class="traditional-cart-entry">
                                            <a class="image" href="#"><img alt="" src="images/tshirts/normal/'.$row["image_logo"].'" /></a>
                                            <div class="content">
                                                <div class="cell-view">
                                                    <span class="tag" >'.$row['product_heading'].'</span>
                                                    <span class="title" >'.strtoupper($row['product_name']).'</span>
                                                    <div class="inline-description">'.$row['sub_category'].'/'.$row['sub_category'].'</div>
                                                    <div class="inline-description" style="font-weight:bold;color:black">Rs. &nbsp;'.$row['category_price'].'</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-2" >
                                        <a class="button style-4" id="'.$row["product_id"].'" href="showproduct.php?storeItem='.$row["product_id"].'" style="background:#00aced;border:2px #00aced solid">buy now</a>
                                        <a class="remove-button removeProduct" id="'.$row["product_id"].'" ><i class="fa fa-times"></i></a>
                                    </div>
                                </div>';
                                }
                                }
                                else
                                    echo '
                                <div class="rows">
                                    <div class="col-xs-6 col-md-4 col-md-offset-3 div_continue" >
                                       <span>Sorry, No product found </span>
                                    </div>
                                </div>
                                    
                                <div class="rows">
                                    <div class="col-xs-6 col-md-4 col-md-offset-3 div_continue" >
                                        <a href="index2.php" class="continue_to_shop" >Continue Shopping</a>
                                    </div>
                                </div>';
                                    }
                            ?>
                    
                        <!-- end -->
                            
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-pull-9 blog-sidebar">
                            <div class="information-blocks">
                                <div class="categories-list account-links">
                                    <div class="block-title size-3">Client account</div>
                                    <ul>
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="#">Account/Password </a></li>
                                        <li><a href="#">Address Book</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="wishlist.php">My Wishlist</a></li>
                                        <li><a href="#">My Reviews</a></li>
                                        <li><a href="#">My Tags</a></li>
                                    </ul>
                                </div>
                                <div class="article-container">
                                    <br/>Custom CMS block displayed below the one page account panel block. Put your own content here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
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

                        </div>
                </div>                

                <!-- FOOTER -->
                <?php include('footer.php'); ?>
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
    <script type="text/javascript">
    $(document).ready(function(){
        $('.wishlist-box').on('click','.removeProduct',function(){
            var product_id=$(this).attr('id');
            $('.wishlist-box').html("<div class='rows'><div class='col-xs-6 col-xs-offset-4'><div class='loadinganim'><img src='img/loader.gif'></div></div></div>");
              $.post('remove_wishlist_product.php',{'id': product_id}, function(data){
                                                
                                                if(data==="true")
                                                {
                                                    window.location.replace("wishlist.php");
                                                } 
                                                else
                                                {
                                                    alert("product already in the cart");
                                                }
                            
                                    }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
                                        
                                        alert(thrownError); //alert with HTTP error
                                     
                                    
                                    });
        });
    });

    </script>
</body>
</html>
