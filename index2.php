<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
     -->
     <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png" />
  	<title>Cazpro - Student Store</title>
</head>
<body class="style-10 boxed-layout">

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

             <div class="parallax-slide fullwidth-block small-slide" style="margin-bottom: 30px; margin-top: -25px;">
                    <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide active" data-val="0" style="background-image: url(banner/banner6.jpg);">
                                <div class="parallax-vertical-align" style="margin-top: 0;">
                                    <div class="parallax-article">
                                        <h2 class="subtitle">Check out this weekend</h2>
                                        <h1 class="title">Big sale</h1>
                                        <!-- <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                         --><div class="info">
                                            <a href="products.php?cat=cse&mainCat=engineering" class="button style-8">shop now</a>
                                            <a href="#" class="button style-8">features</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide no-shadow " data-val="1" style="background-image: url(banner/banner5.jpg);">
                                <div class="parallax-vertical-align" style="margin-top: 0;margin-left:5%;">
                                    <div class="parallax-article left-align">
                                        <h2 class="subtitle">Check out this weekend</h2>
                                        <h1 class="title">Big sale</h1>
                                       <!--  <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                                                                -->  <div class="info">
                                            <a href="#" class="button style-8">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
<!-- Offers Section -->

               <div class="container-fluid two-tabs" style="text-align:center;margin-top:30px;">
                    <div class="rows" >
                        <div class="col-xs-6 col-lg-4 col-lg-offset-1 create-tab" style="padding:5px;">
                               <span> CREATE <br> <span style="font-size:0.4em">AND</span> <br> SELL</span>
                        </div>
                        <div class="col-xs-6 col-lg-4 col-lg-offset-1 link-tab" style="padding:5px;">
                                <span> PROMOTE <br> <span style="font-size:0.4em">AND</span> <br> EARN</span>
                        </div>

                    </div>
                </div>


<!-- end offer section -->




                <div class="information-blocks" style="margin-top:0px;">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-sm-12" style="height:100px;line-height:100px;" align="center">
                            <span style="color:gray ;font-size:2.1em;font-weight:bold"> OUR STORE</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/1.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>TSHIRTS</span></h3>
                                                                 -->
                                <a href="products.php?cat=cse&mainCat=engineering" class="button style-6">shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry ">
                            <div class="special-item-entry">
                                <img src="images/landing_page/5.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span></h3>
                                 --><a class="button style-6" href="cazoriginals.php?cat=cse&mainCat=engineering">shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/6.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span></h3>
                                 --><a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="information-blocks">
                    <div class="row">

                        <div class="col-sm-4 information-entry col-lg-offset-2">
                            <div class="special-item-entry">
                                <img src="images/landing_page/2.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span> --></h3>
                                <a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/3.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span> --></h3>
                                <a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>
                    </div>

                </div>



                    <div class="parallax-slide auto-slide fullwidth-block">
                        <div class="parallax-clip">
                            <div style="background-image: url(images/landing_page/banner2.jpg);" class="fixed-parallax parallax-fullwidth">

                            </div>
                        </div>
                        <div class="position-center">

                                <div class="parallax-article">
                                   <!--  <h2 class="subtitle">Check out this weekend</h2>
                                   <h1 class="title">BEST SELLING PRODUCTS</h1> -->
                                  <!--   <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                                                       -->  <div class="info">
                                        <a href="#" class="button style-6">shop now</a>
                                    </div>
                                </div>

                        </div>
                    </div>





            <div class="information-blocks" style="margin-top:0px;">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-sm-12" style="height:80px;line-height:80px;" align="center">
                            <span style="color:gray ;font-size:2.1em;font-weight:bold"> NEW ARRIVALS</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/1.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>TSHIRTS</span></h3>
                                                                 -->
                                <a href="products.php?cat=cse&mainCat=engineering" class="button style-6">shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/2.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span> --></h3>
                                <a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/3.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span> --></h3>
                                <a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="information-blocks">
                    <div class="row">

                        <div class="col-sm-4 information-entry col-lg-offset-2">
                            <div class="special-item-entry">
                                <img src="images/landing_page/5.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span></h3>
                                 --><a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="images/landing_page/6.jpg" alt="" />
                                <!-- <h3 class="title">Check out this weekend <span>Jackets</span></h3>
                                 --><a class="button style-6" href="#">shop now</a>
                            </div>
                        </div>
                    </div>

                </div>



                <!-- <div class="column-article-wrapper">
                    <div class="row nopadding">
                        <div class="col-sm-4 information-entry-xs left-border nopadding">
                            <div class="column-article-entry">
                                <a href="#" class="title">About Store</a>
                               <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> <a class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry-xs left-border nopadding">
                            <div class="column-article-entry">
                                <a href="#" class="title">Company Blog</a>
                                <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</div><a class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry-xs left-border nopadding">
                            <div class="column-article-entry">
                                <a href="#" class="title">Coming Events</a>
                               <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> <a class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->




                <div class="information-blocks">
                    <div class="parallax-slide auto-slide fullwidth-block">
                        <div class="parallax-clip">
                            <div style="background-image: url(images/landing_page/banner1.jpg);" class="fixed-parallax parallax-fullwidth">

                            </div>
                        </div>
                        <div class="position-center">

                                <div class="parallax-article">

                                   <!--  <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                    --> <div class="info">
                                        <a href="#" class="button style-6">shop now</a>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>



             <!--    <div class="information-blocks">
                 <div class="row">
                     <div class="information-entry col-md-6">
                         <div class="image-text-widget" style="background-image: url(img/image-text-widget-1.jpg);">
                             <div class="hot-mark red">hot</div>
                             <div style="width:30px;"></div>
                             <h3 class="title">Woman category</h3>
                             <div class="article-container style-1">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisc elit, sed do eiusmod tempor incididunt ut labore consectetur.</p>
                                 <ul>
                                     <li><a href="#">Evening dresses</a></li>
                                     <li><a href="#">Jackets and coats</a></li>
                                     <li><a href="#">Tops and Sweatshirts</a></li>
                                     <li><a href="#">Blouses and shirts</a></li>
                                     <li><a href="#">Trousers and Shorts</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="information-entry col-md-6">
                         <div class="image-text-widget" style="background-image: url(img/image-text-widget-2.jpg);">
                             <div class="hot-mark red">hot</div>
                             <h3 class="title">Man category</h3>
                             <div class="article-container style-1">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisc elit, sed do eiusmod tempor incididunt ut labore consectetur.</p>
                                 <ul>
                                     <li><a href="#">Evening dresses</a></li>
                                     <li><a href="#">Jackets and coats</a></li>
                                     <li><a href="#">Tops and Sweatshirts</a></li>
                                     <li><a href="#">Blouses and shirts</a></li>
                                     <li><a href="#">Trousers and Shorts</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>       -->

    <!-- Selfie Posts -->

            <!-- <div class="information-blocks">
                    <div class="latest-entries-heading">
                        <h3 class="title">Latest Selfie Posts</h3>
                        <a class="latest-more" href="blogposts.php">More Selfies <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="products-swiper">
                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" >
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="min-width:310px;">
                                            <a class="product-image" href="#">
                                                <img src="images/landing_page/selfie4.jpg" style="border-radius:50%" alt="" />

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" >
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="min-width:310px;">
                                            <a class="product-image" href="#">
                                                <img src="images/landing_page/selfie1.jpg" style="border-radius:50%" alt="" />

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" >
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="min-width:310px;">
                                            <a class="product-image" href="#">
                                                <img src="images/landing_page/selfie2.jpg" style="border-radius:50%" alt="" />

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" >
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="min-width:310px;">
                                            <a class="product-image" href="#">
                                                <img src="images/landing_page/selfie1.jpg" style="border-radius:50%" alt="" />

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" >
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 280px;">
                                            <a class="product-image" href="#">
                                                <img src="img/wide-product-6.jpg" style="border-radius:50%" alt="" />

                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" >
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 280px;">
                                            <a class="product-image" href="#">
                                                <img src="img/wide-product-6.jpg" style="border-radius:50%" alt="" />

                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

            </div> -->

        <div class="information-blocks" style="margin-top:-50px;">
                    <div class="latest-entries-heading">
                        <h3 class="title"style="margin-left:600px;color:gray ;font-size:2.1em;font-weight:bold">TRENDING</h3>
                        <a class="latest-more" href="blogposts.php">Show more posts <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="products-swiper">
                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/blog1.jpg" alt="" />
                                                <span class="hover-label">Shop Now</span>
                                            </a>
                                         </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/blog2.jpg" alt="" />
                                                <span class="hover-label">Shop Now</span>
                                            </a>
                                          </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/2.jpg" alt="" />
                                                <span class="hover-label">Shop Now</span>
                                            </a>
                                         </div>
                                    </div>
                                </div>
                                 <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/2.jpg" alt="" />
                                                <span class="hover-label">Shop Now</span>
                                            </a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>







    <!-- Selfie end -->




                <div class="information-blocks" style="margin-top:-40px;">
                    <div class="latest-entries-heading">
                        <h3 class="title" style="margin-left:600px;color:gray ;font-size:2.1em;font-weight:bold">BLOG POST</h3>
                        <a class="latest-more" href="blogposts.php">Show more posts <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="products-swiper">
                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#" >
                                                <img src="images/landing_page/blog1.jpg" style="height:200px;width:200px;margin-left:40px;"alt="" />
                                                <span class="hover-label">Read More</span>
                                            </a>
                                            <a class="subtitle" href="#">New collection from Armiani 2013</a>
                                            <div class="date">Posted 04 November 2014</div>
                                            <span style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor Lorem ipsum dolor sit amet.....</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/blog2.jpg" style="height:200px;width:200px;margin-left:40px;" alt="" />
                                                <span class="hover-label">Read More</span>
                                            </a>
                                            <a class="subtitle" href="#">New collection from Armiani 2013</a>
                                            <div class="date">Posted 04 November 2014</div>
                                            <span style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor.....</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/2.jpg" style="height:200px;width:200px;margin-left:40px;" alt="" />
                                                <span class="hover-label">Read More</span>
                                            </a>
                                            <a class="subtitle" href="#">New collection from Armiani 2013</a>
                                            <div class="date">Posted 04 November 2014</div>
                                            <span style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor.....</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="images/landing_page/1.jpg" style="height:200px;width:200px;margin-left:40px;"alt="" />
                                                <span class="hover-label">Read More</span>
                                            </a>
                                            <a class="subtitle" href="#">New collection from Armiani 2013</a>
                                            <div class="date">Posted 04 November 2014</div>
                                             <span style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor.....</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="img/wide-product-8.jpg" alt="" />
                                                <span class="hover-label">Read More</span>
                                            </a>
                                            <a class="subtitle" href="#">New collection from Armiani 2013</a>
                                            <div class="date">Posted 04 November 2014</div>
                                             <span style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor.....</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="paddings-container">
                                        <div class="product-slide-entry" style="max-width: 310px;">
                                            <a class="product-image hover-class-1" href="#">
                                                <img src="img/wide-product-9.jpg" alt="" />
                                                <span class="hover-label">Read More</span>
                                            </a>
                                            <a class="subtitle" href="#">New collection from Armiani 2013</a>
                                            <div class="date">Posted 04 November 2014</div>
                                             <span style="">Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor.....</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

            </div>


        <!-- FOOTER -->
      <?php include('footer.php'); ?>

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

    <div class="cart-bo popup">
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
   <div id="product-popup" class="overlay-popup">
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container">

                        <div class="row">
                            <div class="col-sm-6 information-entry">
                                <div class="product-preview-box">
                                    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-1.jpg" alt="" data-zoom="img/product-main-1-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-2.jpg" alt="" data-zoom="img/product-main-2-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
                                                    <img src="img/product-main-3.jpg" alt="" data-zoom="img/product-main-3-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image">
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
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container">
                                                        <img src="img/product-main-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 information-entry">
                                <div class="product-detail-box">
                                    <h1 class="product-title">T-shirt Basic Stampata</h1>
                                    <h3 class="product-subtitle">Loremous Clothing</h3>
                                    <div class="rating-box">
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="rating-number">25 Reviews</div>
                                    </div>
                                    <div class="product-description detail-info-entry">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur.</div>
                                    <div class="price detail-info-entry">
                                        <div class="prev">$90,00</div>
                                        <div class="current">$70,00</div>
                                    </div>
                                    <div class="size-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Size</div>
                                        <div class="entry active">xs</div>
                                        <div class="entry">s</div>
                                        <div class="entry">m</div>
                                        <div class="entry">l</div>
                                        <div class="entry">xl</div>
                                        <div class="spacer"></div>
                                    </div>
                                    <div class="color-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Color</div>
                                        <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                        <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                        <div class="entry" style="background-color: #000;">&nbsp;</div>
                                        <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                        <div class="spacer"></div>
                                    </div>
                                    <div class="quantity-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Quantity</div>
                                        <div class="entry number-minus">&nbsp;</div>
                                        <div class="entry number">10</div>
                                        <div class="entry number-plus">&nbsp;</div>
                                    </div>
                                    <div class="detail-info-entry">
                                        <a class="button style-10">Add to cart</a>
                                        <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="tags-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Tags:</div>
                                        <a href="#">bootstrap</a>/
                                        <a href="#">collections</a>/
                                        <a href="#">color/</a>
                                        <a href="#">responsive</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="close-popup"></div>
                    </div>
                </div>
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
