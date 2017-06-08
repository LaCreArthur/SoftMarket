<?php require 'header.php';?>

        <a href="#">Design</a>
    </li>
</ul>
    <h2>Design</h2>
</div>
<section id="content">
    <div class="row">

<?php require 'aside.php';?>

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
        <?php $products = $DB->query('SELECT * FROM products'); 
        foreach ($products as $product): ?>
        <div class="product-item col-md-4" id="item1">
            <button class="imgButton" type="button" data-toggle="modal" data-target="#myModal<?= $product->id;?>">
                <img class="product-image" src="../ressources/products/<?= $product->id;?>.jpg" title="Click to zoom"/>
            </button>
            <?php
            if(!empty($product->special)) {
                if ($product->special == 1)
                    echo '<img class="product-label" src="../ressources/discount.png">';
                else if ($product->special == 2)
                    echo '<img class="product-label" src="../ressources/new.png">';
            }
            ?>
            <div class="product-shop">
                <h2 class="product-name">
                    <a href="#"> <?= $product->name;?></a>
                </h2>
                <div class="price-box">
                <span>
                    <?php 
                     if(!empty($product->special) & $product->special == 1) {
                        echo '<span class="price price-crossed">$'. number_format($product->price,2) .'</span>';
                        echo '<span class="special-price">$'. number_format($product->price - (0.2*$product->price),2) .'</span>';
                     }
                     else
                        echo '<span class="price">$'. number_format($product->price,2) .'</span>';
                    ?>
                </span>
                </div>
                <div class="rating-box">
                    <div class="rating"></div>
                </div>
                <div class="actions">
                    <a class="addCart" href="addpanier.php?id=<?= $product->id?>"><img src="../ressources/addtocart.png" style="margin: 0 15px 3px 0;"/></a>
                    <img src="../ressources/button-compare.png" style="margin: 0 -1px 0 0;"/>
                    <img src="../ressources/button-wish.png"/>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal animated fadeIn" id="myModal<?= $product->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?= $product->id;?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel<?= $product->id;?>"><?= $product->name;?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <img class="modal-img" src="../ressources/products/<?= $product->id;?>large.jpg"/>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        <!-- FIN BOUCLE SUR LES ARTICLES -->
        
    </div>
    <div class="row pages toolbar">
            <div class="col-md-6 offset-6">
                <ol>
                    <li class="current">1</li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li>
                        <a class="next" href="" title="Next">
                            <span>Next page</span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
</article>
   
<?php require 'footer.php'; ?>