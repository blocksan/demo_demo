<?php
    session_start();
    //session_destroy();
    include ('product_info.inc');
    if(!isset($_SESSION['productId']))
    {
        $_SESSION['productId'] = "";
        $_SESSION['productColor'] = "";
        $_SESSION['productMainCategory'] = "";
        $_SESSION['productSubCategory'] = "";
        $_SESSION['productSize'] = "";
        $_SESSION['productTime'] = "false";
        $_SESSION['productPrice'] = "";
        $_SESSION['sort_by'] = "product_date_added";
        $_SESSION['order'] = "DESC";
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
 <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' /> <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png" />
    <style type="text/css">
    body.modal-open { overflow:inherit; padding-right:inherit !important; }
    .product-boundary{

        transition:all 0.3s ease-in-out;
    }
    .product-boundary:hover{
        box-shadow: 2px 2px 4px gray;
    }
    </style>
  	<title>Cazpro - Product Shop</title>
    <script type="text/javascript">
        function handleSelect(elm)
        {
            if(elm.value == "price1")
            {
                window.location = "products.php?sort_by=category_price&order=DESC";
            }
            else if(elm.value == "price2")
            {
                window.location = "products.php?sort_by=category_price&order=ASC";
            }
            else
            {
                window.location = "products.php?sort_by="+elm.value;
            }
        }
    </script>
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
                    <a href="index2.php">Home</a>
                    <?php if(isset($_GET['mainCat']))
                              echo '<a href="products.php?mainCat='.$_GET['mainCat'].'&cat=">'.$_GET['mainCat'].'

                               </a>' ;
                               else if(isset($_SESSION['productMainCategory']))
                                    {
                                        echo '<a href="products.php?mainCat='.$_SESSION['productMainCategory'].'&cat=">'.$_SESSION['productMainCategory'].'

                               </a>' ;
                                    }
                                 ?>

                    <a href="javascript:void(0);">
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
                    <div class="row">
                        <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4" >
                            <div class="page-selector">
                                <div class="shop-grid-controls" style="width:850px;">
                                    <div class="entry">
                                        <div class="inline-text filter" >Sorty by</div>
                                        <div class="simple-drop-down style-6">
                                            <select onchange="javascript:handleSelect(this)">
                                                <?php
                                                    if($_GET['sort_by'] == "product_date_added")
                                                        echo '<option value="product_date_added" selected>Popularity</option>';
                                                    else
                                                        echo '<option value="product_date_added">Popularity</option>';
                                                    if($_GET['sort_by']=="category_price" && $_GET['order'] == "DESC")
                                                        echo '<option value="price1" selected>High to Low</option>';
                                                    else
                                                        echo '<option value="price1">High to Low</option>';
                                                    if($_GET['sort_by']=="category_price" && $_GET['order'] == "ASC")
                                                        echo '<option value="price2" selected>Low to High</option>';
                                                    else
                                                        echo '<option value="price2">Low to High</option>';
                                                ?>
                                            </select>
                                        </div>
                                    </div>



                                         <?php
                                            echo '<div class="entry" style="width:250px;">
                                            <div class="inline-text"></div>';
                                            echo '<div class="size-selector ajaxsizeload">';
                                           if(!isset($_GET['sort_by_size']))
                                           {
                                                 echo' <a class="entry" id="stock_m" href="products.php?sort_by_size=M"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">M</div></a>
                                            ';
                                             echo' <a class="entry" id="stock_l" href="products.php?sort_by_size=LL"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">L</div></a>
                                            ';
                                             echo' <a class="entry" id="stock_xl" href="products.php?sort_by_size=XL"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">XL</div></a>
                                            ';
                                           }
                                           else
                                           { if($_GET['sort_by_size']=='M')
                                               echo' <a class="entry active" id="stock_m" href="products.php?sort_by_size=M"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">M</div></a>
                                                ';
                                                else
                                                echo' <a class="entry " id="stock_m" href="products.php?sort_by_size=M"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">M</div></a>
                                                ';
                                            if($_GET['sort_by_size']=='LL')
                                             echo' <a class="entry active" id="stock_l" href="products.php?sort_by_size=LL"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">L</div></a>
                                            ';
                                            else
                                                echo' <a class="entry " id="stock_l" href="products.php?sort_by_size=LL"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">L</div></a>
                                                ';
                                            if($_GET['sort_by_size']=='XL')
                                             echo' <a class="entry active" id="stock_xl" href="products.php?sort_by_size=XL"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">XL</div></a>
                                            ';
                                            else
                                                 echo' <a class="entry " id="stock_xl" href="products.php?sort_by_size=XL"><div style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;">XL</div></a>
                                            ';

                                           }
                                           ?>
                                        <div class="spacer" style="width:30px;height:35px;text-align:center;line-height:35px;padding-left:5px;"></div>
                                             </div>
                                        </div>

                                    <!-- <div class="entry" style="width:290px;">

                                        <div class="inline-text"></div>
                                        <div class="color-selector detail-info-entry">
                                            <div style="background-color: #cf5d5d;" class="entry active"></div>
                                            <div style="background-color: #c9459f;" class="entry"></div>
                                            <div style="background-color: #689dd4;" class="entry"></div>
                                            <div style="background-color: #68d4aa;" class="entry"></div>
                                            <div class="spacer"></div>
                                        </div>
                                        <div class="btn btn-success">reset</div>
                                    </div> -->




                                </div>
                                <div class="clear"></div>
                            </div>



<div class="information-blocks dynamicloading">
                <div class="parentselecter parentselecter_data">

    <!-- for checking out which data have to show and passing the session to loadingproduct.php-->
                    <?php
                        if(isset($_GET['mainCat']))
                        {   if($_GET['mainCat']=="reset")
                                $_SESSION['productMainCategory']="";
                            else
                            $_SESSION['productMainCategory']=$_GET['mainCat'];
                        }
                        if(isset($_GET['cat']))
                        {   if($_GET['cat']=="reset")
                                $_SESSION['productSubCategory']="";
                            else
                            {
                                $_SESSION['productSubCategory']=$_GET['cat'];
                                $_SESSION['productSize'] = "";
                            }

                        }
                        if(isset($_GET['sort_by_size']))
                        {
                            $_SESSION['productSize'] = $_GET['sort_by_size'];
                        }
                        if(isset($_GET['sort_by']))
                        {
                            $_SESSION['sort_by'] = $_GET['sort_by'];
                            if($_GET['sort_by'] == "category_price")
                                $_SESSION['order'] = $_GET['order'];
                        }
                    ?>
                     <div class="col-xs-4 col-xs-offset-2 col-lg-offset-5" style="margin-top:60px;">
                            <img src="img/loader.gif" class="animation_loading_image_main" >
                        </div>


                </div>

                    <div class="rows">
                        <div class="col-xs-4 col-xs-offset-2 col-lg-offset-5" style="margin-top:60px;">
                            <img src="img/loader.gif" class="animation_loading_image" style="display:none">
                            <button class="btn btn-danger" id="loadmore" style="display:none">Load More </button>
                        </div>
                    </div>

</div>


                        </div>
                        <div class="col-md-3 col-md-pull-9 col-sm-4 col-sm-pull-8 blog-sidebar">
                            <div class="information-blocks categories-border-wrapper">
                                <div class="block-title size-3">Categories</div>
                                <div class="accordeon">
                                    <ul><li><a style="color:black;height:20px;padding:0.2em;font-weight:bold;font-size:0.9em;line-height:40px;"href="products.php?mainCat=reset&cat=reset">All</a></li></ul>
                                    <div class="accordeon-title">Engineering</div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                            <ul>
                                                <li><a href="products.php?cat=cse&mainCat=engineering">CSE</a></li>
                                                <li><a href="products.php?cat=ece&mainCat=engineering">ECE</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="accordeon-title">Rewritable Tshirts</div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                            <ul>
                                                <ul>
                                                <li><a href="products.php?cat=cse&mainCat=rewritable">CSE</a></li>
                                                <li><a href="products.php?cat=ece&mainCat=rewritable">ECE</a></li>
                                            </ul>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--
                  <div class="information-blocks">
                    <div class="latest-entries-heading">
                        <h3 class="title">You may also like</h3>
                    </div>
                    <div class="products-swiper">
                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                      <div class="swiper-slide" style="margin:10px 35px;">
                                                <div class="paddings-container">
                                                    <div class="product-slide-entry">
                                                        <div class="product-image" style="width:230px">
                                                            <img src="img/product-jewellery-2.jpg" alt="" />
                                                            <a class="top-line-a right open-product"><i class="fa fa-expand"></i> <span>Quick View</span></a>
                                                            <div class="bottom-line">
                                                                <div class="right-align">
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="left-align">
                                                                    <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="title" href="#">Blue Pullover Batwing </a>
                                                        <div class="price">
                                                            <div class="prev">$199,99</div>
                                                            <div class="current">$119,99</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <div class="swiper-slide">
                                      <div class="swiper-slide" style="margin:10px 35px;">
                                                <div class="paddings-container">
                                                    <div class="product-slide-entry">
                                                        <div class="product-image" style="width:230px">
                                                            <img src="img/product-jewellery-2.jpg" alt="" />
                                                            <a class="top-line-a right open-product"><i class="fa fa-expand"></i> <span>Quick View</span></a>
                                                            <div class="bottom-line">
                                                                <div class="right-align">
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="left-align">
                                                                    <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="title" href="#">Blue Pullover Batwing </a>
                                                        <div class="price">
                                                            <div class="prev">$199,99</div>
                                                            <div class="current">$119,99</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>


                            </div>
                            <div class="pagination"></div>
                        </div>
                    </div>
                </div>
                 -->
                <div class="clear"></div>

            </div>

              <?php include('footer.php'); ?>


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
</div>




   <div id="product-popup" class="overlay-popup">
        <div class="overflow">
            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                        <div class="popup-container dynamicproduct_detail">
                        <div class="row">
                            <div class="col-sm-6 information-entry">
                                <div class="product-preview-box">
                                    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image firstZoom">
                                                    <img src="img/loader.gif" class="img-responsive" alt="" data-zoom="img/product-main-1-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image secondZoom">
                                                    <img src="img/loader.gif" class="img-responsive"alt="" data-zoom="img/product-main-2-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image thirdZoom">
                                                    <img src="img/loader.gif" class="img-responsive"alt="" data-zoom="img/product-main-3-zoom.jpg" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image fourthZoom">
                                                    <img src="img/loader.gif" class="img-responsive"alt="" data-zoom="img/product-main-4-zoom.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pagination"></div>
                                        <div class="product-zoom-container">
                                            <div class="move-box">
                                                <img class="default-image" src="img/loader.gif" alt="" />
                                                <img class="zoomed-image" src="img/loader.gif" alt="" />
                                            </div>
                                            <div class="zoom-area"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-hidden-edges">
                                        <div class="swiper-container product-thumbnails-swiper" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide selected">
                                                    <div class="paddings-container thumb-first-img">
                                                        <img src="img/loader.gif" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container thumb-second-img">
                                                        <img src="img/loader.gif" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container thumb-third-img">
                                                        <img src="img/loader.gif" alt="" />
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container thumb-fourth-img">
                                                        <img src="img/loader.gif" alt="" />
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
                                    <h1 class="product-title"></h1>
                                    <h3 class="product-subtitle"></h3>
                                   <!--  <div class="rating-box">
                                       <div class="star"><i class="fa fa-star"></i></div>
                                       <div class="star"><i class="fa fa-star"></i></div>
                                       <div class="star"><i class="fa fa-star"></i></div>
                                       <div class="star"><i class="fa fa-star-o"></i></div>
                                       <div class="star"><i class="fa fa-star-o"></i></div>
                                       <div class="rating-number">25 Reviews</div>
                                   </div> -->
                                    <div class="product-description detail-info-entry"></div>
                                    <div class="offers_apply">

                                            <span class="offer_name1">
                                                  </span>&nbsp;&nbsp;<span class="offer_code1"></span>
                                             <br><br>
                                             <span class="offer_name2">
                                                  </span>&nbsp;&nbsp;<span class="offer_code2" ></span>

                                    </div>
                                    <br><br>
                                    <div class="price detail-info-entry">
                                        <div class="prev"></div>
                                        <div class="current"></div>
                                    </div>
                                    <div class="size-selector detail-info-entry">
                                        <div class="detail-info-entry-title sizes-entry">Sizes</div>
                                        <button class="entry" id="sizeM">M</button>
                                        <button class="entry" id="sizeL">L</button>
                                        <button class="entry" id="sizeXL">Xl</button>
                                        <div class="spacer"></div>
                                    </div>
                                    <!-- <div class="color-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Color</div>
                                        <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                        <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                        <div class="entry" style="background-color: #000;">&nbsp;</div>
                                        <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                        <div class="spacer"></div>
                                    </div> -->
                                    <div class="quantity-selector detail-info-entry">
                                        <div class="detail-info-entry-title">Quantity</div>
                                        <div class="entry number-minu" >-</div>
                                        <div class="entry number">1</div>
                                        <div class="entry number-plu" >+</div>
                                    </div>
                                    <div class="detail-info-entry">
<!--                                         <a class="button style-10 add-to-cart" href="#">Add to cart</a> -->
                                        <a class="button style-12 send-to-wishlist" id=""><i class="fa fa-heart" ></i> Add to Wishlist</a>
                                        <div class="clear"></div>
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


 <!-- Pop Up to show different processed task -->

        <div class="modal fade"id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body" style="background:#E9F3F8">
                <div align="center" class="modal_text"style="font-size:20px;color:black"><img src="img/loader.gif"></div>
              </div>
            </div>
          </div>
        </div>


    <!-- END -->

    </div>


    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/global.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- custom scrollbar -->
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>

    <!-- range slider -->
    <script src="js/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            var minVal = parseInt($('.min-price span').text());
            var maxVal = parseInt($('.max-price span').text());
            var size=0;
            $( "#prices-range" ).slider({
                range: true,
                min: minVal,
                max: maxVal,
                step: 5,
                values: [ minVal, maxVal ],
                slide: function( event, ui ) {
                    $('.min-price span').text(ui.values[ 0 ]);
                    $('.max-price span').text(ui.values[ 1 ]);
                }
            });


    //open product popup

    $('.parentselecter').on('click','.open-product',function(){
        showPopup($('#product-popup'));
        initSwiper();
        return false;
    });

    function showPopup(id){
        id.addClass('visible active');
    }
    function disablePopup(id)
    {
        id.hide();
    }
    function showProductPopup(id){
        id.show();
    }
    var v=1;
    //adding cart item on click

    var total_cart_item=0;
    $('.parentselecter').on('click','.data_form .send-to-cart',function(e){
       $(".open-cart-popup .qtyItems").html(v);
       $(".open-cart-popup .qtyItems").show();
       v++;
        $('.modal-body ').css({"background":"white"});
        $('.modal-body .modal_text').css({"padding":"0.7em","font-size":"1.2em","background":"white","color":"black"});
       $('.modal-body .modal_text').html("Adding Product to Cart");
       //sending_shopping_database(v);
       if(size==0)
        {   $('#myModal').modal('toggle');
            $('.modal-body ').css({"background":"#F43939"});
            $('.modal-body .modal_text').css({"padding":"0.7em","font-size":"1.5em","background":"#F43939","color":"white"});
            $('.modal-body .modal_text').html("choose a size first");
             setTimeout(function(){$('#myModal').modal('toggle')},1000);
        }
        else
            {   var cl=$(this).attr('class');
                $(this).html('Adding to cart...');
                $('.data_form .inputSize').attr("value",size);   //updating the size of product
                var productdata=$(this).closest('.data_form').serialize(); //serializing the data
                                                                 //alert(productdata);

                    $.ajax({                                //make ajax request to cart_process.php
                        url: "add_cart_item.php",
                        type: "POST",
                        dataType:"json",                    //expect json value from server
                        data: productdata,
                        error: function(data) {
                                    $('#myModal').modal('toggle');
                                    $('.modal-body .modal_text').html("Oops !!! Error in adding the Item");
                                    setTimeout(function(){$('#myModal').modal('toggle')},1000);
                             },
                        success: function(data)
                            {
                                    $('.send-to-cart').html('<i class="fa fa-shopping-cart"></i>Add to cart');
                                    $('.cart-mycart-show').hide();
                                    total_cart_item=data.items;
                                    if(total_cart_item>2)
                                    {
                                        $('.cart-box.popup .popup-container').css("overflow-y","scroll");


                                    }
                                    $(".cart-total-item").trigger("mouseenter");
                                    $(".cart-total-show").hover(function(){$(this).html(data.items);
                                    });
                            }
                           });


                    size=0;             //for setting the size of all size button to zero
                console.log(productdata);
            }
    });

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

    var selectedSize=0;
    $('.detail-info-entry').on('click','button',function(){
        selectedSize=$(this).attr('id');
        alert(selectedSize);

    });
    $('.detail-info-entry').on('click','.add-to-cart',function(){

        alert("hello");
       });

    // end adding cart
    $('.parentselecter ').on('mouseenter','.size-selector .disabled',function(){
        //alert("hello00");
        $(this).css("cursor","no-drop");
        $(this).prop( "disabled", true );
    });

    // adding product to wishlist
        $('.detail-info-entry').on('click','.send-to-wishlist',function(){
        var v='a';
            v=$(this).attr('id');
            sending_wishlist_database(v);
           // alert("hello");

        });
        $('.parentselecter').on('click','.send-to-wishlist',function(){
            var v='a';
            v=$(this).attr('id');

            sending_wishlist_database(v);
            $(this).css("color","#FD2C67");

        });
        $('.parentselecter ').on('click','.size-selector .entry',function(){
            //if($(this).)
            $('.entry').removeClass('active');
            // var id=$(this).attr('id');
             $(this).addClass('active');
             size=$(this).attr('id');
        });
    //end wishlist

    function sending_wishlist_database(v)
    {   var product_id=v;

                                 $.post('add_wishlist_item.php',{id:product_id}, function(data){
                                                 $('#myModal').modal('toggle');
                                                 console.log(data);
                                                if(data=="true")
                                                {
                                                    $('.modal_text').html("added to the wishlist");
                                                    setTimeout(function(){$('#myModal').modal('toggle')},700);

                                                }
                                                else
                                                {
                                                    $('.modal_text').html("Already in the wishlist");
                                                    setTimeout(function(){$('#myModal').modal('toggle')},700);
                                                }

                                    }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?

                                        alert(thrownError); //alert with HTTP error


                                    });
    }

    //init swiper
    var initIterator = 0;
    function initSwiper(){

        $('.swiper-container:not(.initialized)').each(function(){
            var $t = $(this);

            var index = 'swiper-unique-id-'+initIterator;

            $t.addClass('swiper-'+index + ' initialized').attr('id', index);
            $t.find('.pagination').addClass('pagination-'+index);

            var autoPlayVar = parseInt($t.attr('data-autoplay'), 10);
            if(_ismobile) autoPlayVar = 0;
            var centerVar = parseInt($t.attr('data-center'), 10);
            var simVar = ($t.closest('.circle-description-slide-box').length)?false:true;

            var slidesPerViewVar = $t.attr('data-slides-per-view');
            if(slidesPerViewVar == 'responsive'){
                slidesPerViewVar = updateSlidesPerView($t);
            }
            else slidesPerViewVar = parseInt(slidesPerViewVar, 10);

            var loopVar = parseInt($t.attr('data-loop'), 10);
            var speedVar = parseInt($t.attr('data-speed'), 10);

            swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
                speed: speedVar,
                pagination: '.pagination-'+index,
                loop: loopVar,
                paginationClickable: true,
                autoplay: autoPlayVar,
                slidesPerView: slidesPerViewVar,
                keyboardControl: true,
                calculateHeight: true,
                simulateTouch: simVar,
                centeredSlides: centerVar,
                roundLengths: true,
                onSlideChangeEnd: function(swiper){
                    var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
                    if($t.closest('.navigation-banner-swiper').length || $t.closest('.parallax-slide').length){
                        var qVal = $t.find('.swiper-slide-active').attr('data-val');
                        $t.find('.swiper-slide[data-val="'+qVal+'"]').addClass('active');
                    }
                },
                onSlideChangeStart: function(swiper){
                    var activeIndex = (loopVar===true)?swiper.activeIndex:swiper.activeLoopIndex;
                    if($t.hasClass('product-preview-swiper')){
                        swipers['swiper-'+$t.parent().find('.product-thumbnails-swiper').attr('id')].swipeTo(activeIndex);
                        $t.parent().find('.product-thumbnails-swiper .swiper-slide.selected').removeClass('selected');
                        $t.parent().find('.product-thumbnails-swiper .swiper-slide').eq(activeIndex).addClass('selected');
                    }
                    else $t.find('.swiper-slide.active').removeClass('active');
                },
                onSlideClick: function(swiper){
                    if($t.hasClass('product-preview-swiper')){
                        $t.find('.default-image').attr('src', $t.find('.swiper-slide-active img').attr('src'));
                        $t.find('.zoomed-image').attr('src', $t.find('.swiper-slide-active img').data('zoom'));
                        $t.find('.product-zoom-container').addClass('visible').animate({'opacity':'1'});
                    }
                    else if($t.hasClass('product-thumbnails-swiper')){
                        swipers['swiper-'+$t.parent().parent().find('.product-preview-swiper').attr('id')].swipeTo(swiper.clickedSlideIndex);
                        $t.find('.active').removeClass('active');
                        $(swiper.clickedSlide).addClass('active');
                    }
                }
            });
            swipers['swiper-'+index].reInit();
            if(!centerVar){
                if($t.attr('data-slides-per-view')=='responsive'){
                    var paginationSpan = $t.find('.pagination span');
                    var paginationSlice = paginationSpan.hide().slice(0,(paginationSpan.length+1-slidesPerViewVar));
                    if(paginationSlice.length<=1 || slidesPerViewVar>=$t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
                    else $t.removeClass('pagination-hidden');
                    paginationSlice.show();
                }
            }
            initIterator++;
        });

    }

    //end init swiper




                    var track_load = 0;  //total loaded record group(s)
                    //console.log(category);
                    var loading  = false;    //to prevents multipal ajax loads
                       var total_pages =0; //total record group(s)
                        $('.dynamicloading .parentselecter').load("loadingproducts.php", {'page':'true'}, function(data) {
                            track_load++;
                             // alert(track_load);
                           //  console.log(total_pages);
                          // $(".dynamicloading .swiper-wrapper").append(data);
                            $('.animation_loading_image_main').hide();

                            $('#loadmore').show();

                        });
                     //load first group

                                 $("#loadmore").click(function(){
                                        $loading = true;
                                        $('#loadmore').hide();

                                 total_pages=<?php      if(isset($_SESSION['totalpages']))
                                                        echo $_SESSION['totalpages'];
                                                        else {
                                                            $i=1;
                                                            echo $i;
                                                            }
                                                            ?> ;

                                                             //load data from the server using a HTTP POST request

                               if(track_load <=total_pages)
                                    {   $('.animation_loading_image').show();
                                        $.post('loadingmoreproducts.php',{'page': track_load}, function(data){

                                        $(".dynamicloading .swiper-wrapper").append(data); //append received data into the element

                                        //hide loading image
                                        $('#loadmore').show();
                                        $('.animation_loading_image').hide(); //hide loading image once data is received

                                        track_load++; //loaded group increment
                                        loading = false;

                                    }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?

                                        alert(thrownError); //alert with HTTP error
                                         $(".dynamicloading .swiper-wrapper").append("no more products");
                                        $('.animation_loading_image').hide(); //hide loading image
                                        loading = false;

                                    });
                                    if(track_load>=total_pages-1)
                                    {

                                        $('#loadmore').hide();
                                        $('#loadmore').attr("disabled","disabled");
                                        $('.animation_loading_image_main').hide();
                                        $('.animation_loading_image').hide();
                                    }
                                    }
                        });




        $('.parentselecter_data').on('click','.productdetail_load',function(){
                   $('.animation_loading_image').show(); //show loading image
                                    var id = $(this).attr('id');
                                    console.log(id);
                                    $.post('loadingproductdetail.php',{productid:id}, function(data){
                                        var parsedData = jQuery.parseJSON(data);
                                        $(".product-title").html(parsedData.jheading);
                                        $(".product-subtitle").html(parsedData.jname);
                                        $(".firstZoom img").attr("src","images/tshirts/normal/"+parsedData.jfront_pic);
                                        $(".firstZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jfront_pic);                                        //hide loading image
                                        $(".detail-info-entry .prev").html("Rs."+parsedData.jmrp);
                                        $(".detail-info-entry .current").html("Rs."+parsedData.jselling_price);
                                        $(".secondZoom img").attr("src","images/tshirts/normal/"+parsedData.jback_pic);
                                        $(".secondZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jback_pic);                                        //hide loading image
                                       $(".thirdZoom img").attr("src","images/tshirts/normal/"+parsedData.jside_pic);
                                        $(".thirdZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jside_pic);                                        //hide loading image
                                       $(".fourthZoom img").attr("src","images/tshirts/normal/"+parsedData.jlogo_pic);
                                        $(".fourthZoom img").attr("data-zoom","images/tshirts/mega/"+parsedData.jlogo_pic);                                        //hide loading image
                                       $(".product-zoom-container .move-box img.default-image").attr("src","images/tshirts/normal/"+parsedData.jfront_pic);

                                       $('.send-to-wishlist').attr("id",parsedData.jid);


                                        if(parsedData.offer1!=0)
                                           {
                                             $(".offers_apply .offer_name1").attr("style","text-transform:uppercase;font-weight:bold");
                                             $(".offers_apply .offer_name1").html(parsedData.offer1);
                                             $(".offers_apply .offer_code1").attr("style","border:1px solid green;color:green;height:20px;padding:0.2em;width:50px;border-radius:5px;text-align:center");
                                             $(".offers_apply .offer_code1").html(parsedData.offer_code1);
                                            }

                                        if(parsedData.offer2!=0)
                                       {
                                        $(".offers_apply .offer_name2").attr("style","text-transform:uppercase;font-weight:bold");
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
                                       console.log(parsedData.jsizeL);
                                       console.log(parsedData.jsizeM);
                                       console.log(parsedData.jsizeXL);
                                        if(parsedData.jstock_m==0)
                                            {
                                               $("button#sizeM").prop("disabled",true);
                                               $("button#sizeM").css("cursor","no-drop");
                                               $("button#sizeM").css("background","gray");
                                               //  $(this).prop( "disabled", true );
                                            }
                                            else
                                                {   $("button#sizeM").css("background","white");
                                                    $("button#sizeM").prop("disabled",false);
                                                    $("button#sizeM").show();
                                                  //  console.log(parsedData.jstock_m);
                                                }
                                        if(parsedData.jstock_l==0)
                                            {
                                                $("button#sizeL").prop("disabled",true);
                                                $("button#sizeL").css("background","gray");
                                                $("button#sizeL").css("cursor","no-drop");
                                            }
                                            else
                                                {   $("button#sizeL").css("background","white");
                                                      $("button#sizeL").prop("disabled",false);
                                                    $("button#sizeL").show();
                                                    //console.log(parsedData.jstock_l);
                                                }
                                        if(parsedData.jstock_xl==0)
                                            {  $("button#sizeXL").prop("disabled",true);
                                               $("button#sizeXL").css("cursor","no-drop");
                                              $("button#sizeXL").css("background","gray");
                                                //$("#sizeXL").hide();
                                            }
                                            else
                                               {    $("button#sizeXL").prop("disabled",false);
                                                    $("button#sizeXL").css("background","white");
                                                    $("button#sizeXL").show();
                                                    //console.log(parsedData.jstock_xl);
                                                }
                                       $('.animation_loading_image').hide();

                                    }).fail(function(xhr, ajaxOptions, thrownError) {
                                         $(".dynamicproduct_detail").append("Produc Not Found");
                                        $('.animation_loading_image').hide();
                                        loading = false;

                                    });
        });

// sort by size AJAX loading


// end of AJAX size






            });
    </script>

</body>
</html>
