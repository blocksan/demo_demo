<div id="fb-root"></div>
<!-- /*<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=418205805053676";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>*/ -->

<div class="header-wrapper style-3">
                <header class="type-1">
                    <div class="header-top">

                        <div class="header-top-entry">


                    <?php if(isset($_SESSION['FBID']))
                            echo $_SESSION['FBID'];
                            else
                                   echo'
                                <div class="title" style="color:gray"><img src="img/flag-lang-1.png" alt="" /><b>Sign in</b><i class="fa fa-caret-down"></i></div>


                                              <div class="list">
                                    <a href="#" class="list-entry"><img src="img/flag-lang-2.png" alt="" />Login</a>
                                    <a href="#" class="list-entry"><img src="img/flag-lang-2.png" alt="" />Register</a>
                                </div>';

                                    ?>



                        </div>
                        <div class="header-top-entry">
                            <div class="title">
                                 <a href="#" style="text-decoration:none;" style="color:gray"><b>Sell T-Shirt &nbsp;</b><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- <div class="list">
                                <a href="#" class="list-entry">$ CAD</a>
                                <a href="#" class="list-entry">&#8364; EUR</a>
                            </div> -->
                        </div>
                        <div class="header-top-entry hidden-xs">
                            <div class="title" style="color:gray"><i class="fa fa-phone"></i>Order On WhatsApp &nbsp; <a href="tel:+987123654"><b>+91 8284855237</b></a></div>
                        </div>
                      <!--   <div class="middle-entry">
                          <a class="icon-entry" href="#">
                              <span class="image">
                                  <i class="fa fa-phone"></i>
                              </span>
                              <span class="text" style="color:gray">
                                  <b style="color:gray">Enquiry ?</b> <br/> (+91) 8284855237
                              </span>
                          </a>
                          <a class="icon-entry" href="#">
                              <span class="image">
                                  <i class="fa fa-car"></i>
                              </span>
                              <span class="text" style="color:gray">
                                  <b style="color:gray">Free Shipping</b> <br/> on Rs.500+
                              </span>
                          </a>
                      </div> -->
                        <div class="socials-box">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                        <div class="clear"></div>
                    </div>

                    <div class="header-middle">
                        <div class="logo-wrapper">
                            <a id="logo" href="#" width="50px"><img src="img/logo.png" width="50px" height="80px" alt="" /></a>
                        </div>



       <!--  Entry for wishlist and cart  -->

                        <div class="right-entries">
                             <a class="header-functionality-entry open-search-popup " href="#" style="color:gray"><i class="fa fa-search"></i> <span>Search</span>
                            <a class="header-functionality-entry" href="wishlist.php" style="color:gray"><i class="fa fa-heart-o"></i><span>Wishlist</span></a>
                            <a class="header-functionality-entry open-cart-popup cart-total-item" style="color:gray" href="cart.php" >
                            <i class="fa fa-shopping-cart show_item_total" style="color:gray"></i>My Cart

                        <span class="cart-total-show" style="padding:0.7em;color:white;border-radius:50%;font-weight:bold;font-size:1.6em">

                                   <?php
                                        if(isset($_SESSION['products'])&&count($_SESSION['products'])>0)
                                        {
                                           echo count($_SESSION['products']);

                                        }
                                        else
                                            echo '';
                                    ?>
                                   </span> </a>
                            <div id="product-added" style="position:absolute;display:none;height:30px;line-height:30px;right:100px;font-weight:bold;width:130px;text-align:center;border-radius:10px;color:white;background:#987" >
                                item added to cart
                             </div>
    <!-- Update the price when item added to cart  -->

                             <!-- <b class="show-total-cost">&nbsp;&nbsp;<i class="fa fa-rupee"></i>255.99</b> -->
    <!-- end here -->

                            </a>
                        </div>

                    </div>

                    <div class="close-header-layer"></div>
                    <div class="navigation">
                        <div class="navigation-header responsive-menu-toggle-class">
                            <div class="title">Navigation</div>
                            <div class="close-menu"></div>
                        </div>
                        <div class="nav-overflow">
                            <div class="navigation-search-content">
                                <div class="toggle-desktop-menu"><i class="fa fa-search"></i><i class="fa fa-close"></i>search</div>
                                <div class="search-box size-1">
                                    <form action="products.php?search_query=">
                                        <div class="search-button">
                                            <i class="fa fa-search"></i>
                                            <input type="submit"  />
                                        </div>
                                        <!-- <div class="search-drop-down">
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
                                        </div> -->
                                        <div class="search-field">
                                            <input type="text" value="" placeholder="Search for product" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <nav>
                                <ul>
                             <li class="full-width">
                                        <a href="index2.php" class="actve">Home</a><i class="fa fa-chevron-dwn"></i>

    <!-- Extra Item to show in Submenu -->


                                       <!--      <div class="full-width-menu-items-left">
                                           <div class="row">
                                               <div class="col-lg-6">
                                                   <div class="submenu-list-title"><a href="index-wide.html">Homepages <span class="menu-label blue">new</span></a><span class="toggle-list-button"></span></div>
                                                   <ul class="list-type-1 toggle-list-container">
                                                       <li><a href="index-wide.html"><i class="fa fa-angle-right"></i>Mango - Wide Header</a></li>
                                                       <li><a href="index-electronic.html"><i class="fa fa-angle-right"></i>Mango - Electronic</a></li>
                                                       <li><a href="index-everything.html"><i class="fa fa-angle-right"></i>Mango - Everything</a></li>
                                                       <li><a href="index-fullwidthheader.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth Header</a></li>
                                                       <li><a href="index-food.html"><i class="fa fa-angle-right"></i>Mango - Food</a></li>
                                                       <li><a href="index-underwear.html"><i class="fa fa-angle-right"></i>Mango - Underwear</a></li>
                                                       <li><a href="index-bags.html"><i class="fa fa-angle-right"></i>Mango - Bags</a></li>
                                                       <li><a href="index-fullwidth-noslider.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth No Slider</a></li>
                                                       <li><a href="index-lookbook.html"><i class="fa fa-angle-right"></i>Mango - Lookbook</a></li>
                                                       <li><a href="index-wine-left.html"><i class="fa fa-angle-right"></i>Mango - Wine</a></li>
                                                       <li><a href="index-fullwidth.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth</a></li>
                                                       <li><a href="index-fullwidth-left.html"><i class="fa fa-angle-right"></i>Mango - Fullwidth Left Sidebar</a></li>
                                                   </ul>
                                               </div>
                                               <div class="col-lg-6">
                                                   <div class="submenu-list-title"><a href="index-wide.html">Homepages <span class="menu-label blue">new</span></a><span class="toggle-list-button"></span></div>
                                                   <ul class="list-type-1 toggle-list-container">
                                                       <li><a href="index-parallax.html"><i class="fa fa-angle-right"></i>Mango - Parallax</a></li>
                                                       <li><a href="index-grid.html"><i class="fa fa-angle-right"></i>Mango - Grid Light</a></li>
                                                       <li><a href="index-leftsidebar.html"><i class="fa fa-angle-right"></i>Mango - Grid Left Sidebar</a></li>
                                                       <li><a href="index-minimal.html"><i class="fa fa-angle-right"></i>Mango - Minimal</a></li>
                                                       <li><a href="index-toys.html"><i class="fa fa-angle-right"></i>Mango - Toys</a></li>
                                                       <li><a href="index-furniture.html"><i class="fa fa-angle-right"></i>Mango - Furniture</a></li>
                                                       <li><a href="index-jewellery.html"><i class="fa fa-angle-right"></i>Mango - Jewellery</a></li>
                                                       <li><a href="index-mini.html"><i class="fa fa-angle-right"></i>Mango - Mini</a></li>
                                                       <li><a href="index-presentation.html"><i class="fa fa-angle-right"></i>Mango - Presentation</a></li>
                                                       <li><a href="index-parallax-fullwidth.html"><i class="fa fa-angle-right"></i>Mango - Parallax Fullwidth</a></li>
                                                       <li><a href="index-parallax-boxed.html"><i class="fa fa-angle-right"></i>Mango - Parallax Boxed</a></li>
                                                   </ul>
                                               </div>
                                           </div>
                                       </div>

                                                                               </div> -->
                                    </li>
                                    <li class="full-width-columns">
                                        <a href="#">College Tees</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                                <div class="submenu-list-title">
                                                    <a href="contact.html">Engineering </a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
                                                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Buy The Tshirt</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                                <div class="submenu-list-title">
                                                    <a href="contact.html">Engineering </a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
                                                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Buy The Tshirt</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                                <div class="submenu-list-title">
                                                    <a href="contact.html">Engineering </a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
                                                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Buy The Tshirt</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                                <div class="submenu-list-title">
                                                    <a href="contact.html">Engineering </a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
                                                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Buy The Tshirt</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-column-entry">
                                                <div class="image"><img alt="" src="img/product-menu-2.jpg"></div>
                                                <div class="submenu-list-title">
                                                    <a href="contact.html">Engineering </a><span class="toggle-list-button"></span></div>
                                                <div class="description toggle-list-container">
                                                    <ul class="list-type-1">
                                                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Buy The Tshirt</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="simple-list">

                                        <a href="#">Rewritable</a>

                                    </li>
                                    <li class="column-1">

                                        <a href="#">Design Contest</a>

                                    </li>
                                    <li class="column-1">

                                        <a href="#">Blog</a>

                                    </li>
                                    <li class="simple-list">

                                        <a>Bulk Order</a>

                                    </li>
                                    <li><a href="#">Selfie Contest</a></li>
                                    <li class="fixed-header-visible">
                                        <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>

                                <div class="clear"></div>

                                <a class="fixed-header-visible additional-header-logo"><img src="img/logocaz.jpg" alt=""/></a>
                            </nav>
                            <div class="navigation-footer responsive-menu-toggle-class">
                                <div class="socials-box">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="clear"></div>
            </div>