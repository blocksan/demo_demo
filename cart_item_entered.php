<?php
                if(isset($_SESSION['items']))
                {
                    if($_SESSION['items']>2)
                    {
                        echo '<div class="popup-container cart-item-container" style="overflow-y:scroll;height:400px;">';
                    }
                    else
                        echo '<div class="popup-container cart-item-container" >';
                }
                else
                    {
                    echo '<div class="popup-container cart-item-container">';
                }
            ?>