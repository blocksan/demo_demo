<!-- /*require('db_connect.php');
$i=1001;*/
                   /*                            $query="SELECT DISTINCT p1.product_id,p1.product_heading,p1.product_name,p2.color,p2.size,p5.category_price,p5.category_offer,p4.main_category,p4.sub_category,p4.Material,p1.product_gender,p4.Description,p1.product_neck,p3.image_front,p3.image_back,p3.image_side,p3.image_logo 
                           FROM product_info AS p1
                           LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                           LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                           AND p3.color = 'blue'
                           LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                           LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                           WHERE p1.product_id=1003
                                                           ";
                                               $result=mysql_query($query);
                                               while($row=mysql_fetch_array($result)){
                                                     echo $row['image_front'].$row['image_logo'].$row['image_side'].$row['image_back'];
                                               }
                                                   */  -->
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/polymer/0.5.6/polymer.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/polymer/0.5.6/polymer.min.js"></script>
</head>
<body>
<polymer-element name="lorem-element" noscript>
  <template>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </template>
</polymer-element>

</body>
</html>