<?php
require('db_connect.php');
session_start();
if(!isset($_POST['sort_by_size']))
{   
    echo "no products";
}
else
{  if(isset($_POST['sort_by_size']))
   {    
        if(isset($_SESSION['category']))
            {
                unset($_SESSION['category']);
            }

        $filter=$_POST['sort_by_size'];
        $_SESSION['filter']=$filter;
        $query="select product_id,product_heading,mrp,selling_price,front_pic from products WHERE $filter > 0";          
    }
    elseif (isset($_POST['sort_by_price']))
    {
        $filter=$_POST['sort_by_price'];
        if($filter=="asc"||$filter=="desc")
        {
            $query="select product_id,product_heading,mrp,selling_price,front_pic from products ORDER BY selling_price ASC";
        }
        else
            $query="select product_id,product_heading,mrp,selling_price,front_pic from products ORDER BY selling_price DESC";
        $_SESSION['sort_by_price']=$filter;
        
    }
                     $result=mysql_query($query);
                     $totalresults=mysql_num_rows($result);
                     $onepageresult=8;
                     $totalpages=ceil($totalresults/$onepageresult);
                     $_SESSION['totalpages']=$totalpages-1;
                     if($totalpages>1)
                     $firstload=8;
                    else
                     $firstload=$totalpages;
                    for($i=0;$i<20000000;$i++)
                    {

                    }
                    while($row =mysql_fetch_array($result)&&$firstload>=0)
                    {
                        echo '<div class="swiper-slide" style="margin:10px 35px;" > 
                                                <div class="paddings-container" >
                                                    <div class="product-slide-entry">
                                                        <div class="product-image" style="width:260px">
                                                            <img src="images/tshirts/normal/normal_'.$row["front_pic"].'" alt="" />
                                                            <a class="top-line-a right open-product productdetail_load" id="'.$row["product_id"].'"><i class="fa fa-expand"></i> <span>Quick View</span></a>
                                                            <div class="bottom-line">
                                                                <div class="right-align">
                                                                    <a class="bottom-line-a square"><i class="fa fa-heart"></i></a>
                                                                </div>
                                                                <div class="left-align">
                                                                    <a class="bottom-line-a"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span style="line-height:20px;">'.$row['product_heading'].'</span>
                                                        <div class="price">
                                                            <div class="prev">Rs.'.$row["mrp"].'</div>
                                                            <div class="current">Rs.'.$row["selling_price"].'</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                            $firstload--;
                        }
                    
}

?>