 <?php

                                if(!isset($_SESSION['UID']))
                                {

                                $query= "SELECT * from products WHERE product_id IN(select product_id from user_wishlist WHERE email='sandyghosh555@gmail.com')";
                                $result=mysql_query($query);
                                while($row=mysql_fetch_array($result))
                                {

                                echo'   <div class="wishlist-entry">
                                    <div class="column-1">
                                        <div class="traditional-cart-entry">
                                            <a class="image" href="#"><img alt="" src="images/tshirts/normal/normal_'.$row["front_pic"].'" /></a>
                                            <div class="content">
                                                <div class="cell-view">
                                                    <a class="tag" href="#">'.$row['product_heading'].'</a>
                                                    <a class="title" href="#">'.strtoupper($row['category']).'</a>
                                                    <div class="inline-description">'.$row['category'].'/'.$row['sub_category'].'</div>
                                                   <!-- <div class="inline-description">Zigzag Clothing</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-2">
                                        <a class="button style-14">add to cart</a>
                                        <a class="remove-button removeProduct" ><i class="fa fa-times"></i></a>
                                    </div>
                                </div>';
                                }
                                    }
                            ?>