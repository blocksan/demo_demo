<?php

require('db_connect.php');
session_start();
if(isset($_POST['sort']))
{   
    echo "no products";
}
else
{   
       

         $subCategory=$_SESSION['productSubCategory'];
         $mainCategory=$_SESSION['productMainCategory'];
         $time=$_SESSION['productTime'];
         $size=$_SESSION['productSize'];
         $sort_by = $_SESSION['sort_by'];
         $order = $_SESSION['order'];
        if($time=="false") 
        {   $query="  select * from design_table where category_id IN (select category_id from product_category where main_category='$mainCategory' and sub_category='$subCategory') ";
            }
        else
        { /*if($time=="newest")
           { 
                  $query="  SELECT *
                            FROM product_info AS p1
                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                            AND p2.color = p3.color
                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                            ORDER BY p1.product_date_added DESC
                            LIMIT 0 , 30";
             }*/

        }

            if(isset($query))
            {     $result=mysql_query($query);
                  $totalresults=mysql_num_rows($result);
                 while($row=mysql_fetch_array($result))
                 {
                      echo '
                        <form class="data_form">
                        <div class="swiper-slide" >
                              <input type="hidden" name="product_id" value="'.$row["design_id"] .'">
                              <input type="hidden" name="product_size" value="" class="inputSize">
                              <input type="hidden" name="product_qty" value="1" >

                          <div class="paddings-container product-boundary" style="width:280px;height:460px;margin:20px 4px;padding:0px;" >
                                        
                                          <div class="product-slide-entry shift-image">

                                              <div class="product-image" style="width:275px;height:400px;margin-left:-32px" >
                                                  <img id="1im"src="images/designs/'.$row["design_img1"].'" style="height:360px;" alt="" />
                                                  <input type="hidden" name="design_id" class="design_id" value="'.$row['design_id'].'">
                                                  <img id="2im"src="images/designs/'.$row["design_img2"].'"  style="height:360px;"alt="" />
                                                 
                                                  <div class="bottom-line">
                                                          
                                                          <div class="right-align" style="width:120px;display:none">
                                                              <a style="width:50px;" class="bottom-line-a square send-to-wishlist"  ><i class="fa fa-heart " style="font-size:17px;"></i></a>
                                                              <a href="#"style="width:70px;font-size:12px;"class="bottom-line-a square" ><i class="fa fa-rupee" style="font-size:17px;"></i>Buy</a>
                                                          </div>
                                                          <div class="left-align" style="width:140px; display:none">
                                                              <a type="submit"  class="bottom-line-a send-to-cart" style="font-size:12px;"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                              
                                                          </div>
                                                         <div class="size-selector detail-info-entry">
                                                      
                                                      ';
                                                  
                                                           /*         if(isset($sizes['M']))*/
                                                                    // echo '<div class="entry" id="sizeM" ">M</div>';
                                                                          echo '
                                                                        <div style="display:none;background:url(img/loader.gif) no-repeat;background-size:cover;padding:10px;border:0px;left:100px;"   class="des-entry load_option mdl-button">
                                                                          
                                                                        </div>;
                                                                        <div style="background:url(img/tshirt.png) no-repeat;background-size:cover;"  class="des-entry half_tshirt mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >
                                                                          
                                                                        </div>
                                                                         <div style="background:url(img/fulltshirt.jpg) no-repeat;background-size:cover;" class="des-entry full_tshirt mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                                                          
                                                                        </div>
                                                                         <div style="background:url(img/hoodie.png) no-repeat;background-size:cover;" class="des-entry hoodie mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                                                          
                                                                        </div>
                                                                         <div style="background:url(img/zipper.jpg) no-repeat;background-size:cover;" class="des-entry zipper mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                                                                          
                                                                        </div> 
                                                                      ';
                                                                     /*else
                                                                      echo '<button class="entry disabled">M</button>';
                                                                  if(isset($sizes['LL']))
                                                                     echo '<div class="entry" id="sizeL">L</div>';
                                                                     else
                                                                      echo '<button class="entry disabled">L</button>';
                                                                  if(isset($sizes['XL']))
                                                                     echo '<div class="entry" id="sizeXL">XL</div>';
                                                                     else
                                                                      echo '<button class="entry disabled">XL</button>';*/

                                                      echo '
                                                              
                                                              <div class="spacer"></div>
                                                          </div>

                                                  </div>
                                              </div>
                                             <!-- <div><a class="tag" style="font-size:13px;margin-left:-200px;">'.$row['sub_category'].'</a><a  class="tag" style="font-size:13px;margin-right:-50px;color:black">&nbsp;&nbsp;'.$row['product_heading'].'</a></div>
                                              <!-- <div class="rating-box">
                                                  <div class="star"><i class="fa fa-star"></i></div>
                                                  <div class="star"><i class="fa fa-star"></i></div>
                                                  <div class="star"><i class="fa fa-star"></i></div>
                                                  <div class="star"><i class="fa fa-star"></i></div>
                                                  <div class="star"><i class="fa fa-star"></i></div>
                                              </div> -->
                                               <div class="price">
                                                  <div class="">'.$row["color"].'&nbsp;&nbsp;'.$row["product_id"].'</div>
                                                  <div class="prev">Rs.'.$row["category_price"].'</div>
                                                   <div class="current">Rs.'.($row["category_price"]-$row["category_offer"]).'</div>
                                              </div>
                                          </div>
                                            <div style="display:none" class="all_content">
                                            
                                            <img src="img/loader2.gif">
                                            </div>
                                      </div>
                                     
                          </div>
                          </form>

                            ';
                            
                            }
                        }
                    
                    else
                        echo '<div align="center">NO PRODUCT FOUND 2</div>';
                          
}
?>

