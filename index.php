<?php 
require 'header.php';
require 'aside.php';
?>

<?php
    //var_dump($DB->query('SELECT * FROM products'));
?>

<article class="col-md-9">
    <img src="../ressources/banner880.png">
    <div class="row toolbar">
        <div class="toolbar-item col-md-6">
            <p class="amount">150 Item(s)</p>
        </div>
        <div class="toolbar-sorter col-md-6">
            <img class="view-mode" src="../ressources/display-mode.png"/>
            <img class="show"      src="../ressources/perpage.png"/>
            <img class="sortby"    src="../ressources/position.png"/>
            <img class="v-middle"  src="../ressources/button-sort.png">
        </div>
    </div>
    <div class="row articles">
        <!-- BOUCLE SUR LES ARTICLES -->
        <div class="product-item col-md-4" id="item1">
            <img class="product-image" src="../ressources/img160.png"/>
            <div class="product-shop">
                <h2 class="product-name">
                    <a href="#"> Voluptatem Accusantium Doloremque</a>
                </h2>
                <div class="price-box">
                <span>
                    <span class="price">$29.00</span>
                </span>
                </div>
                <div class="rating-box">
                    <div class="rating"></div>
                </div>
                <div class="actions">
                    <img src="../ressources/addtocart.png" style="margin: 0 15px 3px 0;"/>
                    <img src="../ressources/button-compare.png" style="margin: 0 -1px 0 0;"/>
                    <img src="../ressources/button-wish.png"/>
                </div>
            </div>
        </div>
        <div class="product-item col-md-4" id="item2">
            <img class="product-image" src="../ressources/img160.png"/>
            <img class="product-label" src="../ressources/discount.png">
            <div class="product-shop">
                <h2 class="product-name">
                    <a href="#"> Voluptatem Accusantium Doloremque</a>
                </h2>
                <div class="price-box">
                <span>
                    <span class="price-crossed">$29.00</span>
                    <span class="special-price">$18.00</span>
                </span>
                </div>
                <div class="rating-box">
                    <div class="rating"></div>
                </div>
                <div class="actions">
                    <img src="../ressources/addtocart.png" style="margin: 0 15px 3px 0;"/>
                    <img src="../ressources/button-compare.png" style="margin: 0 -1px 0 0;"/>
                    <img src="../ressources/button-wish.png"/>
                </div>
            </div>
        </div>
        <div class="product-item col-md-4" id="item3">
            <img class="product-image" src="../ressources/img160.png"/>
            <img class="product-label" src="../ressources/new.png">
            <div class="product-shop">
                <h2 class="product-name">
                    <a href="#"> Voluptatem Accusantium Doloremque</a>
                </h2>
                <div class="price-box">
                <span>
                    <span class="price">$29.00</span>
                </span>
                </div>
                <div class="rating-box">
                    <div class="rating"></div>
                </div>
                <div class="actions">
                    <img src="../ressources/addtocart.png" style="margin: 0 15px 3px 0;"/>
                    <img src="../ressources/button-compare.png" style="margin: 0 -1px 0 0;"/>
                    <img src="../ressources/button-wish.png"/>
                </div>
            </div>
        <!-- FIN BOUCLE SUR LES ARTICLES -->
        </div>
    </div>
</article>
   
<?php require 'footer.php'; ?>