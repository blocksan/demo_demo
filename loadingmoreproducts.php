<?php
require('db_connect.php');
session_start();
if(isset($_POST['sort']))
{   
    echo "no products";
}
else
{   $item_per_page=4;
    $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
            if(!is_numeric($page_number))
            {
                header('location:error.html');
                
            }
    $position=($page_number * $item_per_page);
    if(isset($_SESSION['filter']))
    {   $filter=$_SESSION['filter'];
        $query="select product_id,product_heading,sub_category,mrp,selling_price,front_pic from products WHERE $filter >0 LIMIT $position,$item_per_page ";
    }
    elseif(isset($_SESSION['from_main_index']))
    {           
        $filter=$_SESSION['from_main_index'];       
        $query="select product_id,product_heading,sub_category,mrp,selling_price,front_pic from products WHERE sub_category='$filter' LIMIT $position,$item_per_page";
     }
    elseif(isset($_SESSION['category']))
    {
         $filter=$_SESSION['category'];       
        $query="select product_id,product_heading,mrp,sub_category,selling_price,front_pic from products WHERE sub_category = '$filter' LIMIT $position,$item_per_page";
    }
    elseif(isset($_SESSION['sort_by_price']))
    {
        if($_SESSION['sort_by_price']=="pop")
        {
               $filter="total_stock";
            $query="select product_id,product_heading,sub_category,mrp,selling_price,front_pic from products ORDER BY total_stock ASC LIMIT $position,$item_per_page";
        }
        else
        {    $filter=$_SESSION['sort_by_price'];
            $query="select product_id,product_heading,sub_category,mrp,selling_price,front_pic from products ORDER BY total_stock '$filter' LIMIT $position,$item_per_page";
        }
    }
    elseif(isset($_SESSION['sort_by_size']))
    {
        $filter=$_SESSION['sort_by_size'];
        $query="select product_id,product_heading,mrp,sub_category,selling_price,front_pic from products WHERE $filter > 0 LIMIT $position,$item_per_page";
    }
    else
        $query="select product_id,product_heading,sub_category,mrp,selling_price,front_pic from products";
                 
                    $result=mysql_query($query);
                    while($row =mysql_fetch_array($result))
                    {
                        echo '<div class="swiper-slide" style="margin:10px 35px;" > 
                                                <div class="paddings-container" >
                                                    <div class="product-slide-entry">
                                                        <div class="product-image" style="width:260px">
                                                            <img src="images/tshirts/normal/normal_'.$row["front_pic"].'" alt="" />
                                                            <a class="top-line-a right open-product productdetail_load" id="'.$row["product_id"].'"><i class="fa fa-expand"></i> <span>Quick View</span></a>
                                                            <div class="bottom-line">
                                                                <div class="right-align">
                                                                    <a class="bottom-line-a square send-to-wishlist"id="'.$row["product_id"].'"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="left-align">
                                                                    <a class="bottom-line-a send-to-cart" id="'.$row["product_id"].'"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span style="line-height:20px;">'.$row['sub_category'].'</span>
                                                        <div class="price">
                                                            <div class="prev">Rs.'.$row["mrp"].'</div>
                                                            <div class="current">Rs.'.$row["selling_price"].'</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';

                        }
                    
}

?>

