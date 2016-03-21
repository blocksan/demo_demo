<?php 
require('db_connect.php');
if(!isset($_POST['productid']))
{
    header('location:error.html');
}
else
{

 $id=$_POST['productid'];
//$id=1005;
 $queryVisit="SELECT total_visits from product_info where product_id=$id";
 $resultVisit=mysql_query($queryVisit);
 $row=mysql_fetch_array($resultVisit);
 $visit=$row['total_visits'];
 $visit=$visit+1;
 $queryVisitIn="UPDATE product_info SET total_visits=$visit WHERE product_id=$id";
 $resultVisitIN=mysql_query($queryVisitIn);

$query="   SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo 
                            FROM product_info AS p1
                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                            WHERE p1.product_id=$id ";

$result=mysql_query($query);
 $stuff= array();
 if(($row=mysql_num_rows($result))>0)
{
while($row=mysql_fetch_array($result))
{  
                                

                            $stuff["jid"]=$row['product_id'];
                            $stuff["jheading"] = $row['product_heading'];
                            $stuff["jname"]=$row['product_name'];
                            $stuff["jcolor"] = $row['color'];
                            $stuff["jmrp"] = $row['category_price'];
                            $stuff["jselling_price"] = ($row['category_price']-$row['category_offer']);
                            $stuff["jcategory"]=$row['main_category'];
                            $stuff["jsub_category"]=$row['sub_category'];
                            $stuff["jsize"]=$row['size'];
                            $stuff["jmaterial"]=$row['Material'];
                            $stuff["jgender"] = $row['product_gender'];
                            $stuff["jdescription"]=$row['Description'];
                            $stuff["jcollared"]=$row['product_neck'];
                            $stuff["jfront_pic"] = $row['image_front'];
                            $stuff["jback_pic"] = $row['image_back'];
                            $stuff["jside_pic"] = $row['image_side'];
                            $stuff["jlogo_pic"] = $row['image_logo'];

}

//for fetching the size of the products
$stuff["jsizeL"]=0;
$stuff["jsizeM"]=0;
$stuff["jsizeXL"]=0;
$stuff["jstock_m"]=0;
$stuff["jstock_l"]=0;
$stuff["jstock_xl"]=0;
$query2="SELECT p2.size,p2.stock from product_attr AS p2 WHERE p2.product_id= $id";
$result2=mysql_query($query2);
$num=mysql_num_rows($result2);
if(($row2=mysql_num_rows($result2))>0)
{
    while($row2=mysql_fetch_array($result2))
    {
        if($row2['size']=='LL')
           { 
            $stuff["jsizeL"]=$row2['size'];
            $stuff["jstock_l"] = $row2['stock'];
            }   
        if($row2['size']=='M')
           { 
             $stuff["jsizeM"]=$row2['size'];
             $stuff["jstock_m"] = $row2['stock'];
            }
        if($row2['size']=='XL')
           { 
            $stuff["jsizeXL"]=$row2['size'];
            $stuff["jstock_xl"] = $row2['stock'];
            }
    }
}

//for fetching the offer on the products

$query3="SELECT p2.offer_name, p2.offer_code
FROM product_offers AS p2, product_info AS p1
WHERE p2.offer_valid_to = p1.category_id AND p1.product_id=$id
LIMIT 1";
$result3=mysql_query($query3);
$num=mysql_num_rows($result3);
$stuff["offer1"]=0;
$stuff["offer2"]=0;
$stuff["offer_code1"]=0;
$stuff["offer_code2"]=0;
if(($row3=mysql_num_rows($result3))>0)
{
    while($row3=mysql_fetch_array($result3))
    {
        $stuff["offer1"]=$row3['offer_name'];
        $stuff["offer_code1"]=$row3['offer_code'];
    }
}

//for fetching the extra offer on the products

$query4="SELECT p1.product_extra_offer, p1.product_extra_offer_code from product_info as p1 WHERE p1.product_id=$id AND p1.product_extra_offer !=''";
$result4=mysql_query($query4);
$num=mysql_num_rows($result4);
if(($row3=mysql_num_rows($result4))>0)
{
    while($row3=mysql_fetch_array($result4))
    {
        $stuff["offer2"]=$row3['product_extra_offer'];
        $stuff["offer_code2"]=$row3['product_extra_offer_code'];
    }
}
$jsondata=json_encode($stuff);
echo $jsondata;
}

/*else
{
    header('location:error.html');
}*/

}
?>