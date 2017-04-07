<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Projet Web : SoftMarket</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/toolbar.css">
    <link rel="stylesheet" href="../css/article.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/cart.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/app.js"></script>

</head>
<body>
<div class="container">
    <header>
        <div class="row header-top">
            <div id="header-info" class="col-md-4">
                <p>Shop by Phone <span>(01) 123 456 SM</span> <a href="#">Live Chat With Us</a></p>
            </div>
            <div id="header-menu" class="col-md-8">
                <div id="cart">
                    <a href="#">My Cart <span>(2)</span></a>
                    <p class="dropdown-toggle" style="padding-left: 12px;"></p><span class="caret"></span> <!-- le caret est plus loin que l'autre -->
                </div>
                <div id="account">
                    <a href="#">My Account</a>
                    <p class="dropdown-toggle"></p><span class="caret"></span>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-left">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="../ressources/logo.png"></a>
                </div>
                <div id="nav-menu" class="nav nav-pills float-right">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="#">OFFICE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">MULTIMEDIA</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">DESIGN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">DEVELOPER</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">UTILITIES</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">GAMES</a></li>
                    </ul>
                    <div class="search-input-content">
                        <input class="search" type="text" title="search"></div>
                </div>
            </div>
        </nav>
    </header>
</div>
<div id="header-separator"></div><br>
<div id="main-container" class="container">
    <div class="breadcrumbs">
        <ul>
            <li class="home">
                <a href="index.html" title="Go to Home Page">Home</a>
                <span>/ </span>
            </li>
            <li class="category">
                <a href="#">Shopping Cart</a>
            </li>
        </ul>
        <h2>Shopping Cart</h2>
    </div>
    <section id="content">
        <div class="row">
            <div class="table added-success">
                <span id="checkmark">🗸</span><span id="success-msg">Consectetur Adipisicing 331</span>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <tr class="titles">
                    <td>Item Name</td>
                    <th class="titles150">Price</th>
                    <th class="titles150">Quantity</th>
                    <th style="width: 140px;">Subtotal</th>
                    <th></th>
                </tr>
                <tr class="articles">
                    <td class="cart-product"><img src="../ressources/cart.png" alt="70x90"><a>Nam Tempus Dictumirsib</a></td>
                    <th class="product-price"><p>$100.00</p></th>
                    <th class="product-quantity"><input type="number" min="0" max="99" value="1" title="qty"/></th>
                    <th class="product-subtotal">$100.00</th>
                    <th><button class="deleteBtn"><img src="../ressources/delete.png" alt="delete"></button></th>
                </tr>
                <tr class="articles">
                    <td class="cart-product"><img src="../ressources/cart.png" alt="70x90"><a>Nam Tempus Dictumirsib</a></td>
                    <th class="product-price"><p>$100.00</p></th>
                    <th class="product-quantity"><input type="number" min="0" max="99" value="1" title="qty"/></th>
                    <th class="product-subtotal">$100.00</th>
                    <th><button class="deleteBtn"><img src="../ressources/delete.png" alt="delete"></button></th>
                </tr>
            </table>
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
                    <div class="col-md-3 text-right" id="subtotal">$200.00</div>
                </div>
                <div class="row">
                    <div class="cart-subtitles col-md-6" style="margin: 9px 0px 0px 33px;font-size:12px;">Grand Total</div>
                    <div class="col-md-3 text-right" id="total">$200.00</div>
                </div>
                <div class="row"><img style="margin: 19px -30px 0 49px;" src="../ressources/checkout.png" alt="checkout"></div>
            </div>
        </div>

        <div class="row" style="padding: 0 13px 40px 16px;">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="../ressources/lab_trial.png" alt="trial">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="../ressources/lab_banner.png" alt="banner">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="../ressources/lab_gift.png" alt="gift">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="../ressources/lab_submit.png" alt="submit">
                </a>
            </div>
        </div>
    </section>
</div>

<footer>
    <section id="footer-img">
        <div class="container">
            <img src="../ressources/footer.png" alt="footer" height=444 width=1179>
        </div>
    </section>
    <section id="bottom" class="container">
        <div class="row logos">
            <ul id="socials" class="col-md-6">
                <li><img src="../ressources/icon_fb.png" class="icon"><a href="#"><span>Facebook</span></a></li>
                <li><img src="../ressources/icon_twitter.png" class="icon"><a href="#"><span>Twitter</span></a></li>
                <li><img src="../ressources/icon_yt.png" class="icon"><a href="#"><span>Youtube</span></a></li>
                <li><img src="../ressources/icon_rss.png" class="icon"><a href="#"><span>RSS Feed</span></a></li>
            </ul>
            <ul id="payments" class="col-md-6">
                <li><img src="../ressources/img-24.png" alt="???"></li>
                <li><img src="../ressources/mastercard.png" alt="mastercard"></li>
                <li><img src="../ressources/visa.png" alt="visa"></li>
                <li><img src="../ressources/paypal.png" alt="paypal"></li>
            </ul>
        </div>
        <div class="footer-address row">
            <address class="col-md-6">© 2017 Reproduction of SoftMarket Magento Store by emthemes.com based on a JPG, by Arthur Scheidel.</address>
            <div class="col-md-6 switcher">
                <ul id="select-curency">
                    <li class="first"><a href="" title="Australian Dollar">£</a></li>
                    <li class=""><a href="" title="Euro">€</a></li>
                    <li class="selected last">
                        <a href="" title="US Dollar"><strong>$</strong></a></li>
                </ul>
                <ul id="select-language">
                    <li><a href="">ES</a></li>
                    <li><a href="">FR</a></li>
                    <li class="selected">
                        <a href=""><strong>EN</strong></a></li>
                </ul>
            </div>
        </div>
    </section>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>