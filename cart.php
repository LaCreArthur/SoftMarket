<?php 
    require "header.php"; 
?>
        <a href="#">Shopping Cart</a>
    </li>
</ul>
    <h2>Shopping Cart</h2>

<?php 
    /*var_dump($_SESSION); */
?>
    
</div>
<section id="content">
    <?php 

        if(isset($_GET['msg'])){
            $msg = rawurldecode($_GET['msg']);
            echo '<div class="row">
                    <div class="table added-success">
                        <span id="checkmark">🗸</span><span id="success-msg">'.$msg.'</span>
                    </div>
                </div>';
        }
    ?>
    <div class="row">
        <form method="post" action="cart.php">
        <table class="table table-bordered">
            <tr class="titles">
                <td>Item Name</td>
                <th class="titles150">Price</th>
                <th class="titles150">Quantity</th>
                <th style="width: 140px;">Subtotal</th>
                <th></th>
            </tr>
            <!--LOOP ON ARTICLES IN $_SESSION -->
            <?php 
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids))
                $products = array();
            else 
                $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',', $ids).')');
            /*var_dump($products);*/
            foreach ($products as $product):
            ?>
            
            <tr class="articles">
                <td class="cart-product"><img src="../ressources/products/<?= $product->id;?>.jpg" alt="70x90" height="90"><a><?= $product->name;?></a></td>
                <th class="product-price"><p>$<?= number_format($product->price,2);?></p></th>
                <th class="product-quantity"><input type="number" class="qty" name="panier[quantity][<?= $product->id; ?>]" min="1" max="99" value="<?= $_SESSION['panier'][$product->id]; ?>" title="qty"/></th>
                <th class="product-subtotal">$<?= number_format($product->price,2) * $_SESSION['panier'][$product->id];?></th>
                <th><a class="deleteBtn" href="cart.php?delPanier=<?= $product->id; ?>"><img src="../ressources/delete.png" alt="delete"></a></th>
            </tr>
            
            <?php endforeach; ?>
            <input type="submit" value="update" style="display:none;"/>
           <!-- <tr class="articles">
                <td class="cart-product"><img src="../ressources/cart.png" alt="70x90"><a>Nam Tempus Dictumirsib</a></td>
                <th class="product-price"><p>$100.00</p></th>
                <th class="product-quantity"><input type="number" min="0" max="99" value="1" title="qty"/></th>
                <th class="product-subtotal">$100.00</th>
                <th><button class="deleteBtn"><img src="../ressources/delete.png" alt="delete"></button></th>
            </tr>-->
        </table>
        </form>
    </div>
    <div class="row cart-forms">
        <div class="col-md-4 shipping">
            <div class="cart-titles" id="shiptitle">Estimate Shipping & Tax</div>
            <div class="cart-subtitles">Enter your destination to get a shipping estimate.</div>

            <ul class="form-list">
                <li>
                    <label for="country" class="required">Country <em>*</em></label>
                    <div class="input-box">
                        <input type="text" name="country_id" id="country" title="Country">
                    </div>
                </li>
                <li>
                    <label for="region_id" class="required">State / Province <em>*</em></label>
                    <div class="input-box" style="margin-top:2px">
                        <input type="text" id="region_id" name="region_id" title="State/Province" >
                    </div>
                </li>
                <li>
                    <label for="postcode" class="required">Zip / Postal Code <em>*</em></label>
                    <div class="input-box">
                        <input type="text" id="postcode" name="estimate_postcode" value="">
                    </div>
                </li>
            </ul>
            <img src="../ressources/getaquote.png" alt="get a quote" style="margin: 22px 0 19px 20px;">

        </div>
        <div class="col-md-4">
            <div class="cart-titles" id="coupontitle">Discount Coupon</div>
            <div class="cart-subtitles" style="margin-left: 26px;">Enter coupon code below if you have one. </div>
            <ul style="margin: -9px 0px 0px 7px;">
                <li>
                    <label for="coupon" class="required">Get a coupon discount here</label>
                    <div class="input-box">
                        <input type="text" name="coupon" id="coupon" title="coupon">
                    </div>
                </li>
            </ul>

            <img src="../ressources/applycoupon.png" style="margin: 19px 0 0 27px;">
        </div>
        <div class="col-md-4">
            <div class="cart-titles" id="ordertitle">Order Total</div>
            <div class="row">
                <div class="cart-subtitles col-md-6" style="margin:0px 65px 10px 33px;font-size:12px;">Subtotal</div>
                <div class="col-md-3 text-right" id="subtotal">$<?= number_format($panier->total(), 2); ?></div>
            </div>
            <div class="row">
                <div class="cart-subtitles col-md-6" style="margin: 9px 0px 0px 33px;font-size:12px;">Grand Total</div>
                <div class="col-md-3 text-right" id="total">$<?= number_format($panier->total(), 2); ?></div>
            </div>
            <div class="row"><img style="margin: 19px -30px 0 49px;" src="../ressources/checkout.png" alt="checkout"></div>
        </div>

<?php require 'footer.php'; ?>