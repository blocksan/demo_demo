<?php
require('db_connect.php');
session_start();
if(isset($_POST['sort']))
{   
    echo "no products";
}
else
{   
         include ('product_info.inc');

         $subCategory=$_SESSION['productSubCategory'];
         $mainCategory=$_SESSION['productMainCategory'];
         $time=$_SESSION['productTime'];
         $size=$_SESSION['productSize'];
         $sort_by = $_SESSION['sort_by'];
         $order = $_SESSION['order'];
        if($time=="false") 
            { $query="     SELECT p1.product_id,p1.product_heading,p1.product_name, p2.color, p2.size, p3.image_front, p4.main_category, p4.sub_category,p3.image_front,p3.image_back,p5.category_price,p5.category_offer
                            FROM product_info AS p1
                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                            AND p2.color=p3.color
                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                            WHERE p4.main_category LIKE '%$mainCategory%' AND p4.sub_category like '%$subCategory%' AND p2.size LIKE '%$size%'
                            ORDER BY $sort_by $order LIMIT 0 , 30";
            }
        else
        { if($time=="newest")
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
             }

        }

            if(isset($query))
            {     $result=mysql_query($query);
                  $totalresults=mysql_num_rows($result);
                  if($totalresults>=1)  
                 { while($row=mysql_fetch_array($result))
                    {   $for_color_id=$row['product_id'];
                        $sub_query="select size from product_attr where product_id=$for_color_id";
                        $sub_result=mysql_query($sub_query);
                        $sizes=array();
                        while($sub_row=mysql_fetch_array($sub_result))
                        {
                            $sizes[$sub_row['size']]=$sub_row['size'];
                        }

                      echo '
                       <form class="data_form">
                            <div class="swiper-slide" style="" >
                                
                                    <input type="hidden" name="product_id" value="'.$row["product_id"] .'">
                                    <input type="hidden" name="product_color" value="'.$row["color"].'">
                                    <input type="hidden" name="product_size" value="" class="inputSize">
                                    <input type="hidden" name="product_qty" value="1" >

                                <div class="paddings-container product-boundary" style="width:280px;height:420px;margin:20px 4px;padding:0px;" >
                                                <div class="product-slide-entry shift-image">
                                                    <div class="product-image" style="width:275px;height:340px;margin-left:-32px" >
                                                        <img src="images/tshirts/normal/'.$row["image_front"].'"alt="" />
                                                        <img src="images/tshirts/normal/'.$row["image_back"].'" alt="" />
                                                       <a class="top-line-a right open-product productdetail_load" id="'.$row["product_id"].'" ><i class="fa fa-expand"></i> <span>Quick View</span></a>
                                                        <div class="bottom-line">
                                                                <div class="right-align" style="width:120px;">
                                                                    <a style="width:50px;" class="bottom-line-a square send-to-wishlist" id="'.$row["product_id"].'"  ><i class="fa fa-heart " style="font-size:17px;"></i></a>
                                                                    <a href="showproduct.php?storeItem='.$row["product_id"].'"style="width:70px;font-size:12px;"class="bottom-line-a square" id="'.$row["product_id"].'" ><i class="fa fa-rupee" style="font-size:17px;"></i>Buy</a>
                                                                </div>
                                                                <div class="left-align" style="width:140px;">
                                                                    <a type="submit"  class="bottom-line-a send-to-cart" id="'.$row["product_id"].'"style="font-size:12px;"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                    
                                                                </div>

                                                                <div class="size-selector detail-info-entry">
                                                            
                                                                    <div class="detail-info-entry-title sizes-entry"></div>
                                                            ';
                                                        
                                                                          if(isset($sizes['M']))
                                                                           echo '<div class="entry" id="sizeM">M</div>';
                                                                           else
                                                                            echo '<button class="entry disabled">M</button>';
                                                                        if(isset($sizes['LL']))
                                                                           echo '<div class="entry" id="sizeL">L</div>';
                                                                           else
                                                                            echo '<button class="entry disabled">L</button>';
                                                                        if(isset($sizes['XL']))
                                                                           echo '<div class="entry" id="sizeXL">XL</div>';
                                                                           else
                                                                            echo '<button class="entry disabled">XL</button>';

                                                            echo '
                                                                    
                                                                    <div class="spacer"></div>
                                                                </div>

                                                        </div>
                                                    </div>
                                                    <div><a class="tag" style="font-size:13px;margin-left:-200px;">'.$row['sub_category'].'</a><a  class="tag" style="font-size:13px;margin-right:-50px;color:black">&nbsp;&nbsp;'.$row['product_heading'].'</a></div>
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
                                            </div>
                                            
                                </div>
                                </form>

                            ';
                            

                        }
                    }
                    else
                        //echo '<div align="center">NO PRODUCT FOUND 1</div>  '.$_SESSION['size'].' '.$_SESSION['category'].' '.$_SESSION['rewritable'];
                        echo '<div align="center">NO PRODUCT FOUND 2</div>';
                    }
                    else
                        echo '<div align="center">NO PRODUCT FOUND 2</div>';
                          
}
?>

