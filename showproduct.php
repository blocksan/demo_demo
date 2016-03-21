<?php
require('db_connect.php');
session_start();
ini_set('display_errors', 0);
$ii=rand(0,2);
if(isset($_GET['storeItem'])&&($_SESSION['cookie']!=$_GET['storeItem']))
{
    $_SESSION['cookie']=$_GET['storeItem'];
        if(!isset($_COOKIE['store'])&&(count($_COOKIE['store'])<3))
          {

            setcookie("store[$ii]","$_GET[storeItem]",(time()+3600*24*365*10),'/');

        }
        else if(isset($_COOKIE['store'])&&(count($_COOKIE['store'])<3))
        {
            setcookie("store[$ii]","$_GET[storeItem]",time()+3600*24*365*10, '/');
        }
        else
        {    $rem=rand(0,2);
            //echo $_COOKIE['store'][$rem].' item to delete<br>';
           // unset($_COOKIE['store'][$rem]);

            setcookie("store[$rem]","$_GET[storeItem]",time()+3600*24*365*10, '/');
        }
}

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
    <style type="text/css">
   .extra .paddings-container{
    transition:all 0.2s ease-in-out;
    border:0px solid gray;
    box-sizing: border-box;

    padding-right:5px;
   }
   .extra .paddings-container:hover{
        #border:1px solid gray;
        box-shadow: 0px 0px 5px black;
        #height:310px;
    }
    </style>
  	<title>Cazpro - The Store</title>
</head>
<body class="style-10">

    <!-- LOADER -->
    <!-- <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div> -->

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->
            <?php
            include ('header.php');

            ?>
            <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">T-shirts</a>
                    <?php if(isset($_GET['mainCat']))
                              echo '<a href="products.php?mainCat='.$_GET['mainCat'].'&cat=">'.$_GET['mainCat'].'

                               </a>' ;
                               else if(isset($_SESSION['productMainCategory']))
                                    {
                                        echo '<a href="products.php?mainCat='.$_SESSION['productMainCategory'].'&cat=">'.$_SESSION['productMainCategory'].'

                               </a>' ;
                                    }
                                 ?>

                    <a href="javascript:void(0);" class="tshirtNameTag">
                        <?php if(isset($_GET['cat']))
                                echo $_GET['cat'];
                               else if(isset($_SESSION['productSubCategory']))
                                    {
                                        echo $_SESSION['productSubCategory'];
                                    }
                        ?>
                    </a>
                </div>

                <div class="information-blocks">
                    <div class="row product_show">
                        <div class="col-sm-5 col-md-4 col-lg-5 information-entry">
                            <div class="product-preview-box">
                                <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="firstZoom product-zoom-image">
                                                <img src="img/product-main-1.jpg" alt="" data-zoom="img/product-main-1-zoom.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="secondZoom product-zoom-image">
                                                <img src="img/product-main-2.jpg" alt="" data-zoom="img/product-main-2-zoom.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="thirdZoom product-zoom-image">
                                                <img src="img/product-main-3.jpg" alt="" data-zoom="img/product-main-3-zoom.jpg" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="fourthZoom product-zoom-image">
                                                <img src="img/product-main-4.jpg" alt="" data-zoom="img/product-main-4-zoom.jpg" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pagination"></div>
                                    <div class="product-zoom-container">
                                        <div class="move-box">
                                            <img class="default-image" src="img/product-main-1.jpg" alt="" />
                                            <img class="zoomed-image" src="img/product-main-1-zoom.jpg" alt="" />
                                        </div>
                                        <div class="zoom-area"></div>
                                    </div>
                                </div>
                                <div class="swiper-hidden-edges">
                                    <div class="swiper-container product-thumbnails-swiper" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide selected">
                                                <div class="thumb-first-img paddings-container">
                                                    <img src="img/product-main-1.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="thumb-second-img paddings-container">
                                                    <img src="img/product-main-2.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="thumb-third-img paddings-container">
                                                    <img src="img/product-main-3.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="thumb-fourth-img paddings-container">
                                                    <img src="img/product-main-4.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-4 information-entry">
                            <div class="product-detail-box">
                                <h1 class="product-title"></h1>
                                <h3 class="product-subtitle"></h3>
<!--                                 <div class="rating-box">
    <div class="star"><i class="fa fa-star"></i></div>
    <div class="star"><i class="fa fa-star"></i></div>
    <div class="star"><i class="fa fa-star"></i></div>
    <div class="star"><i class="fa fa-star-o"></i></div>
    <div class="star"><i class="fa fa-star-o"></i></div>
    <div class="rating-number">25 Reviews</div>
</div> -->
                                <div class="product-description detail-info-entry">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                <div class="price detail-info-entry">
                                    <div class="prev"></div>
                                    <div class="current"></div>
                                </div>
                                <div class="size-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Size</div>
                                    <div class="entry" id="sizeM">m</div>
                                    <div class="entry" id="sizeL">l</div>
                                    <div class="entry" id="sizeXL">xl</div>
                                    <div class="spacer"></div>
                                </div>
                             <!--    <div class="color-selector detail-info-entry">
                                 <div class="detail-info-entry-title">Color</div>
                                 <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                 <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                 <div class="entry" style="background-color: #000;">&nbsp;</div>
                                 <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                 <div class="spacer"></div>
                             </div> -->
                                <div class="quantity-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Quantity</div>
                                    <div class="entry number-minus">&nbsp;</div>
                                    <div class="entry number">1</div>
                                    <div class="entry number-plus">&nbsp;</div>
                                </div>
                                <div class="detail-info-entry">
                                    <a class="button style-10">Add to cart</a>
                                    <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                    <div class="clear"></div>
                                </div>
                                <!-- <div class="tags-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Tags:</div>
                                    <a href="#">bootstrap</a>/
                                    <a href="#">collections</a>/
                                    <a href="#">color/</a>
                                    <a href="#">responsive</a>
                                </div> -->
                                <div class="share-box detail-info-entry">
                                    <div class="title">Share in social media</div>
                                    <div class="socials-box">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear visible-xs visible-sm"></div>
                        <div class="col-md-4 col-lg-3 information-entry product-sidebar">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="information-blocks production-logo">
                                        <div class="background">
                                            <div class="logo"><img src="img/logocaz.jpg" alt="" /></div>
                                            <span style="font-size:15px;font-weight:bold">You May Also Like</span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                <?php

                                $getId=$_GET['storeItem'];
                                $getIdRand=1000+rand(1,10);
                               if($getId==$getIdRand)
                               {
                                $getIdRand=1000+rand(1,10);
                               }
                            $query2="SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo


                            FROM product_info AS p1
                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                            AND p2.color = p3.color
                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                            WHERE p1.product_id!=$getId AND p1.product_id=$getIdRand limit 1";
                                     $result=mysql_query($query2);
                                  while($row=mysql_fetch_array($result))
                                 {
                                        echo '
                                        <div class="information-blocs">
                                        <div class="paddings-container">
                                        <div class="information-entry products-lis" >
                                                <div class="product-slide-entry shift-image">
                                                     <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                        <div class="swiper-slide extra">
                                                                <div class="paddings-container">
                                                                    <div class="product-slide-entry shift-image" >

                                                                        <div class="product-image" >
                                                                            <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                            <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                        </div><br>
                                                                        <a class="title">'.$row['product_heading'].'</a>
                                                                        <div class="price">
                                                                            <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                            <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                             <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                        </div>
                                                                    </a>
                                                                    </div>
                                                             </div>
                                                        </div>
                                                </div>
                                                </div>
                                            </div>
                                        ';


                                        }

                                ?>
                      <!--                   <div class="information-entry products-list">
                          <div class="inline-product-entry" style="padding:2px 20px;position:relative">
                              <div>
                              <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg" style="width:170px;height:200px;"></a>
                              <br>
                              </div>
                                 <div class="price" style="position:absolute;bottom:-20px;">
                                          <div class="prev">$199,99</div>
                                          <div class="current">$119,99</div>
                                   </div>

                              <div class="clear"></div>
                          </div>

                      </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="tabs-container style-1">
                        <div class="swiper-tabs tabs-switch">
                            <div class="title">Product info</div>
                            <div class="list">
                                <a class="tab-switcher active">Product description</a>
                                <a class="tab-switcher">SHIPPING &amp; RETURNS</a>
                                <a class="tab-switcher">Reviews (25)</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-6 information-entry">
                                            <h4>RETURNS POLICY</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 information-entry">
                                            <h4>SHIPPING</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-6 information-entry">
                                            <h4>RETURNS POLICY</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 information-entry">
                                            <h4>SHIPPING</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-6 information-entry">
                                            <h4>RETURNS POLICY</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 information-entry">
                                            <h4>SHIPPING</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="tabs-container">
                        <div class="swiper-tabs tabs-switch">
                            <div class="title">Products</div>
                            <div class="list">
                                <a class="block-title tab-switcher active" style="text-transform:uppercase;font-size:15px;">Popular Products</a>
                                <a class="block-title tab-switcher" style="text-transform:uppercase;font-size:15px;">New Arrivals</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="products-swiper">
                                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                        <div class="swiper-wrapper">
                                                <?php
                                                $query="SELECT *
                                                            FROM product_info AS p1
                                                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                                                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                                                            AND p2.color = p3.color
                                                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                                                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                                                            ORDER BY p1.total_visits DESC
                                                            LIMIT 0 , 6
                                                            ";
                                                $result=mysql_query($query);
                                                while($row=mysql_fetch_array($result))
                                              {  echo '
                                                        <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                        <div class="swiper-slide extra">
                                                                <div class="paddings-container">
                                                                    <div class="product-slide-entry shift-image" >

                                                                        <div class="product-image" >
                                                                            <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                            <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                        </div><br>
                                                                        <a class="title">'.$row['product_heading'].'</a>
                                                                        <div class="price">
                                                                            <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                            <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                             <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                        </div>
                                                                    </a>
                                                                    </div>
                                                             </div>
                                                        </div>
                                            ';
                                            }
                                                ?>

                                        </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="products-swiper">
                                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                        <div class="swiper-wrapper">
                                                   <?php
                                                $query="SELECT *
                                                            FROM product_info AS p1
                                                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                                                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                                                            AND p2.color = p3.color
                                                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                                                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                                                            ORDER BY p1.product_date_added DESC
                                                            LIMIT 0 , 6
                                                            ";
                                                $result=mysql_query($query);
                                                while($row=mysql_fetch_array($result))
                                              {  echo '
                                                        <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                        <div class="swiper-slide extra">
                                                                <div class="paddings-container">
                                                                    <div class="product-slide-entry shift-image" >

                                                                        <div class="product-image" >
                                                                            <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                            <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                        </div><br>
                                                                        <a class="title">'.$row['product_heading'].'</a>
                                                                        <div class="price">
                                                                            <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                            <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                             <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                        </div>
                                                                    </a>
                                                                    </div>
                                                             </div>
                                                        </div>
                                            ';
                                            }
                                                ?>
                                        </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="tabs-container">
                        <div class="swiper-tabs tabs-switch">
                            <div class="list">
                                  <a class="block-title tab-switcher" style="text-transform:uppercase;font-size:15px;">Recently Viewed</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="products-swiper">
                                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                        <div class="swiper-wrapper">

                                                <?php
                                                if(isset($_GET['storeItem']))
                                                {
                                                    $i=$_GET['storeItem'];
                                                $query="SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo
                                                                FROM product_info AS p1
                                                                LEFT JOIN product_images AS p3 ON p1.product_id = p3.product_id
                                                                LEFT JOIN product_attr AS p2 ON p3.product_id = p2.product_id
                                                                AND p2.color = p3.color
                                                                LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                                                                LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                                                                WHERE p1.product_id=$i limit 1;
                                                            ";
                                                $result=mysql_query($query);
                                                while($row=mysql_fetch_array($result))
                                              {  echo '
                                                        <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                        <div class="swiper-slide extra">
                                                                <div class="paddings-container">
                                                                    <div class="product-slide-entry shift-image" >

                                                                        <div class="product-image" >
                                                                            <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                            <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                        </div><br>
                                                                        <a class="title">'.$row['product_heading'].'</a>
                                                                        <div class="price">
                                                                            <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                            <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                             <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                        </div>
                                                                    </a>
                                                                    </div>
                                                             </div>
                                                        </div>
                                            ';
                                            }
                                            }

                                            if(isset($_COOKIE['store'][0]))
                                                {     $pro=$_COOKIE['store'][0];
                                                     $query="SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo
                                                                FROM product_info AS p1
                                                                LEFT JOIN product_images AS p3 ON p1.product_id = p3.product_id
                                                                LEFT JOIN product_attr AS p2 ON p3.product_id = p2.product_id
                                                                AND p2.color = p3.color
                                                                LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                                                                LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                                                                WHERE p1.product_id=$pro limit 1;
                                                            ";
                                                $result=mysql_query($query);
                                                while($row=mysql_fetch_array($result))
                                                  {  echo '
                                                            <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                            <div class="swiper-slide extra">
                                                                    <div class="paddings-container">
                                                                        <div class="product-slide-entry shift-image" >

                                                                            <div class="product-image" >
                                                                                <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                                <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                            </div><br>
                                                                            <a class="title">'.$row['product_heading'].'</a>
                                                                            <div class="price">
                                                                                <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                                <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                                 <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                            </div>
                                                                        </a>
                                                                        </div>
                                                                 </div>
                                                            </div>
                                                ';
                                                    }
                                            }
                                                if(isset($_COOKIE['store'][1]))
                                                {
                                                    $pro=$_COOKIE['store'][1];
                                                     $query="SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo
                                                                FROM product_info AS p1
                                                                LEFT JOIN product_images AS p3 ON p1.product_id = p3.product_id
                                                                LEFT JOIN product_attr AS p2 ON p3.product_id = p2.product_id
                                                                AND p2.color = p3.color
                                                                LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                                                                LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                                                                WHERE p1.product_id=$pro limit 1;
                                                            ";
                                                $result=mysql_query($query);
                                                while($row=mysql_fetch_array($result))
                                                  {  echo '
                                                            <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                            <div class="swiper-slide extra">
                                                                    <div class="paddings-container">
                                                                        <div class="product-slide-entry shift-image" >

                                                                            <div class="product-image" >
                                                                                <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                                <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                            </div><br>
                                                                            <a class="title">'.$row['product_heading'].'</a>
                                                                            <div class="price">
                                                                                <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                                <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                                 <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                            </div>
                                                                        </a>
                                                                        </div>
                                                                 </div>
                                                            </div>
                                                ';
                                                    }
                                                }
                                                if(isset($_COOKIE['store'][2]))
                                                {
                                                   $pro=$_COOKIE['store'][2];
                                                     $query="SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo
                                                                FROM product_info AS p1
                                                                LEFT JOIN product_images AS p3 ON p1.product_id = p3.product_id
                                                                LEFT JOIN product_attr AS p2 ON p3.product_id = p2.product_id
                                                                AND p2.color = p3.color
                                                                LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                                                                LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                                                                WHERE p1.product_id=$pro limit 1;
                                                            ";
                                                $result=mysql_query($query);
                                                while($row=mysql_fetch_array($result))
                                                  {  echo '
                                                            <a class="extra-product-link" href="showproduct.php?storeItem='.$row["product_id"].'">
                                                            <div class="swiper-slide extra">
                                                                    <div class="paddings-container">
                                                                        <div class="product-slide-entry shift-image" >

                                                                            <div class="product-image" >
                                                                                <img  src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                                                <img  src="images/tshirts/normal/'.$row["image_back"].'" alt="" />

                                                                            </div><br>
                                                                            <a class="title">'.$row['product_heading'].'</a>
                                                                            <div class="price">
                                                                                <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                                                <div class="prev">Rs.'.$row["category_price"].'</div>
                                                                                 <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                                                            </div>
                                                                        </a>
                                                                        </div>
                                                                 </div>
                                                            </div>
                                                ';
                                                    }
                                                }


                                                ?>

                                        </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="information-blocks">
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
                               </div>  -->

                <!-- FOOTER -->
          <!--   </div>

                  </div> -->
        <div class="clear"></div>

    </div>
<?php   include('footer.php'); ?>
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
    <script>
    $(document).ready(function(){

            //script for cart item to be load on hover
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


                    var v=<?php echo $_GET["storeItem"]; ?>;
                   $('.animation_loading_image').show(); //show loading image
                                    //load data from the server using a HTTP POST request
                                    $.post('loadingproductdetail.php',{'productid':v},
                                        function(data){

                                        var parsedData = jQuery.parseJSON(data);  //parsing JSON data in Json Format in Objects

                                        $(".product-title").html(parsedData.jheading); //append received data into the element
                                        $(".product-subtitle").html(parsedData.jname);
                                        $(".firstZoom img").attr("src","images/tshirts/normal/"+parsedData.jfront_pic);
                                        $(".firstZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jfront_pic);                                        //hide loading image
                                        $(".price .prev").html("Rs."+parsedData.jmrp);
                                        $(".price .current").html("Rs."+parsedData.jselling_price);
                                        $(".secondZoom img").attr("src","images/tshirts/normal/"+parsedData.jback_pic);
                                        $(".secondZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jback_pic);                                        //hide loading image
                                       $(".thirdZoom img").attr("src","images/tshirts/normal/"+parsedData.jside_pic);
                                        $(".thirdZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jside_pic);                                        //hide loading image
                                       $(".fourthZoom img").attr("src","images/tshirts/normal/"+parsedData.jlogo_pic);
                                        $(".fourthZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jlogo_pic);                                        //hide loading image
                                       $(".product-zoom-container .move-box img.default-image").attr("src","images/tshirts/normal/"+parsedData.jfront_pic);
                                        if(parsedData.offer_name1!="")
                                           { $(".offers_apply .offer_name1").attr("style","text-transform:uppercase;font-weight:bold");
                                             $(".offers_apply .offer_name1").html(parsedData.offer1);
                                             $(".offers_apply .offer_code1").attr("style","border:1px solid green;color:green;height:20px;padding:0.2em;width:50px;border-radius:5px;text-align:center");
                                            $(".offers_apply .offer_code1").html(parsedData.offer_code1);
                                             }

                                        if(parsedData.offer_name2!="")
                                       {  $(".offers_apply .offer_name2").attr("style","text-transform:uppercase;font-weight:bold");
                                        $(".offers_apply .offer_name2").html(parsedData.offer2);
                                        $(".offers_apply .offer_code2").attr("style","border:1px solid green;color:green;height:20px;padding:0.2em;width:50px;border-radius:5px;text-align:center");
                                        $(".offers_apply .offer_code2").html(parsedData.offer_code2);
                                        }
                                        $(".product-zoom-container .move-box img.zoomed-image").attr("src","images/tshirts/mega/"+parsedData.jfront_pic);
                                        $(".thumb-first-img img").attr("src","images/tshirts/thumbnail/"+parsedData.jfront_pic);
                                        $(".thumb-second-img img").attr("src","images/tshirts/thumbnail/"+parsedData.jback_pic);
                                        $(".thumb-third-img img").attr("src","images/tshirts/thumbnail/"+parsedData.jside_pic);
                                        $(".thumb-fourth-img img").attr("src","images/tshirts/thumbnail/"+parsedData.jlogo_pic);

                                        $(".product-description").html(parsedData.jdescription);

                                        if(parsedData.jstock_m==0)
                                            {
                                               $("#sizeM").hide();
                                            }
                                            else
                                                $("#sizeM").show();
                                        if(parsedData.jstock_l==0)
                                            {
                                                $("#sizeL").hide();
                                            }
                                            else
                                                $("#sizeL").show();
                                        if(parsedData.jstock_xl==0)
                                            {
                                                $("#sizeXL").hide();
                                            }
                                            else
                                                $("#sizeXL").show();

                                        $('.tshirtNameTag').html(parsedData.jname);
                                       $('.animation_loading_image').hide(); //hide loading image once data is received

                                    }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?

                                       // alert(thrownError); //alert with HTTP error
                                         $(".dynamicproduct_detail").append("Produc Not Found");
                                        $('.animation_loading_image').hide(); //hide loading image
                                        loading = false;

                                    });
        });


    </script>
</body>
</html>
