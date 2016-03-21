<?php

session_start();
//session_destroy();
require('db_connect.php');
if(isset($_POST["product_id"]))
{	//$_POST['product_id']=1001;
    foreach($_POST as $key => $value)
    {
        $new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array
    }

   $pId=$new_product['product_id'];
   $pColor=$new_product['product_color'];
   $pColor=strtolower($pColor);
   $new_product['product_size']=substr($new_product['product_size'],4,2);
   if($new_product['product_size']=="L")
   {
    $new_product['product_size']="LL";
   }
   $pSize=$new_product['product_size'];

   /*$pId=1001;
   $pColor='blue';
   $pSize='M';
*/

    $index=$new_product['product_id'].$new_product['product_size'].$new_product['product_color'];
   	$query="SELECT p1.product_name,p1.category_id,p1.product_id,p2.color,p4.main_category,p2.size,p3.image_front,p5.category_offer,p5.category_price,p3.image_front
                            FROM product_info AS p1
                            LEFT JOIN product_category AS p4 ON p1.category_id = p4.category_id
                            LEFT JOIN product_attr AS p2 ON p1.product_id = p2.product_id
                            LEFT JOIN product_images AS p3 ON p2.product_id = p3.product_id
                            LEFT JOIN product_cost AS p5 ON p4.category_id = p5.category_id
                            WHERE p1.product_id=$pId AND p2.color='$pColor' AND p2.size='$pSize' ";
   	$result=mysql_query($query);
   	if($result)
   	{
   		  $row=mysql_fetch_array($result);
        $num_row=mysql_num_rows($result);
        if($num_row>0)
        {
                $new_product['product_name'] = $row['product_name']; //fetch product name from database
                $new_product['category_id'] = $row['category_id'];  //fetch product price from database
                $new_product['product_image']=$row['image_front'];
                $base_price=$new_product['product_price']=$row['category_price']-$row['category_offer'];
                if(isset($_SESSION["products"][$index]))        //if session var already exist
                {
        		          if(($_SESSION['products'][$index]['product_id']==$new_product['product_id']) && ($_SESSION["products"][$index]['product_size']==$new_product['product_size']) && ($_SESSION["products"][$index]['product_color']==$new_product['product_color'])) //check item exist in products array
        		            {	  $new_product['product_qty']=$_SESSION['products'][$index]['product_qty']+1;
        		              	unset($_SESSION['products'][$index]);
        		            }
                          $_SESSION['products'][$index] = $new_product;

                          $total_items = count($_SESSION['products']);
                          $_SESSION['items']=$total_items;
                          echo json_encode(array('items'=>$total_items));

        	     	 }
                		 else
                		 {
                       	$_SESSION['products'][$index] = $new_product;

                        $total_items = count($_SESSION['products']);
                  	   	$_SESSION['items']=$total_items;
                  	   	echo json_encode(array('items'=>$total_items));
        		        	}
        	}
          else
          {
              $total_items = count($_SESSION['products']);
              $_SESSION['items']=$total_items;
              echo json_encode(array('items'=>$total_items));
          }

       	}
        else
        {
          $total_items = count($_SESSION['products']);
          $SESSION['items']=$total_items;
          echo json_encode(array('items'=>$total_items));
        }

}
################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{
		//$cart_show = '';
          $i=0;

    if(isset($_SESSION["products"]) && count($_SESSION["products"])>0)
    { //if we have session variable

        $total_price = 0;
        foreach($_SESSION["products"] as $product){ //loop though items and prepare html content

            //set variables to use them in HTML content below
            $product_name = $product["product_name"];
            $product_cat = $product["category_id"];
            $product_id=$product["product_id"];
            $product_size=$product["product_size"];
            $product_qty=$product["product_qty"];
            $product_color=$product["product_color"];
            $product_price=$product["product_price"]*$product_qty;
            $product_image=$product["product_image"];
            $remove_item=$product_id.$product_size.$product_color;
            $total_price=$total_price+$product_price;
            /*$product_code = $product["product_code"];
            $product_qty = $product["product_qty"];
            $product_color = $product["product_color"];
            $product_size = $product["product_size"];*/
            echo "
            			<div class='cart-entry'>
			             		<a class='image'><img height='40px'src='images/tshirts/normal/$product_image' alt='' /></a>
			           		    <div class='content'>
						            <a class='title' href='#'>$product_name</a>
			                   		<div class='quantity'>$product_cat &nbsp;&nbsp;$product_qty</div>
			                   		<div class='quantity'>$product_size &nbsp;&nbsp; $product_id</div>
			                   		<div class='price'><i class='fa fa-rupee'></i>$product_price</div>
			              		</div>
               				<div class=\"button-x discard-product\" id='$remove_item'><i class='fa fa-close' ></i></div>
               			</div>
           ";

        }

        echo " <div class='summary'>
               <!-- <div class='subtotal'>Subtotal: $990,00</div>-->
               <div class='grandtotal'>Grand Total <span>$total_price</span></div>
           </div>
           <div class='cart-buttons'>
               <div class='column'>
                   <a href='cart.php' class='button style-3'>view cart</a>
                   <div class='clear'></div>
               </div>
               <div class='column'>
                   <a class='button style-4 checkout'>checkout</a>
                   <div class='clear'></div>
               </div>
               <div class='clear'></div>
           </div> "; //exit and output content
    }else
    {
        die("<div style='font-weight:bold' align='center'>Your Cart is empty</div>"); //we have empty cart
    }
}

################# remove item from shopping cart ################
if(isset($_POST["remove_id"]) && isset($_SESSION["products"]))
{
    $product_id   = filter_var($_POST["remove_id"], FILTER_SANITIZE_STRING); //get the product code to remove

    if(isset($_SESSION["products"][$product_id])&&($_SESSION["products"][$product_id]['product_qty']>1))
    {
        $_SESSION["products"][$product_id]['product_qty']=$_SESSION["products"][$product_id]['product_qty']-1;
    }
    else if(isset($_SESSION["products"][$product_id]))
    	unset($_SESSION["products"][$product_id]);

    $total_items = count($_SESSION["products"]);
    $_SESSION['total_items']=$total_items;
    echo json_encode(array('items'=>$total_items));
}
?>