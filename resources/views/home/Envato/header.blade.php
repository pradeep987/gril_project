<header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <nav class="top-blocks">
                        <div id="languages-block" class="languages-block top-block">
                            <div class="current top-inner">
                                <img class="flag" src="<?= asset('Envato/img/lang/1.jpg') ?>" alt="en">
                                <span class="language">English</span>
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                            </div>
                            <ul id="languages" class="language-select top-sub">
                                <li class="selected">
                                    <img src="<?= asset('Envato/img/lang/1.jpg') ?>"  alt="en"> English</li>
                                <li>
                                    <a href="/gril_project/public/Envato/index10" title="Français (French)">
                                        <img src="<?= asset('Envato/img/lang/2.jpg') ?>"  alt="fr"> Français 
                                    </a>
                                </li>
                                <li> 
                                    <a href="/gril_project/public/Envato/index11" title="Español (Spanish)"> 
                                        <img src="<?= asset('Envato/img/lang/3.jpg') ?>"  alt="es"> Español 
                                    </a>
                                </li>
                                <li> 
                                    <a href="/gril_project/public/Envato/index12" title="Italiano (Italian)">         
                                        <img src="<?= asset('Envato/img/lang/4.jpg') ?>"  alt="it"> Italiano 
                                    </a>
                                </li>
                                <li> 
                                    <a href="/gril_project/public/Envato/index13" title="فارسى (Persian)"> 
                                        <img src="<?= asset('Envato/img/lang/5.jpg') ?>"  alt="fa"> فارسى 
                                    </a>
                                </li>F
                            </ul>
                        </div>
                        <div id="currencies-block" class="top-block currencies-block">
                            <form id="setCurrency" class="set-currency top-inner" action="#" method="post">
                                <span class="current">
                                    <input type="hidden" name="id_currency" id="id_currency">
                                    <input type="hidden" name="SubmitCurrency">
                                    <span class="current-label">USD</span>
                                </span>
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                            </form>
                            <ul id="first-currencies" class="currency-select top-sub">
                                <li class="selected" data-value="dollar">Dollar</li>
                                <li data-value="euro"><a href="#" title="Euro"> Euro </a></li>
                            </ul>
                        </div>
                        <div class="phone-block top-block">
                            <span class="top-number top-inner">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="call-number">CALL 0123-456-789</span>
                            </span>
                        </div>
                        <div class="accounts-block top-block top-navwrap">
                            <div class="current">
                                <div class="current-label"><i class="fa fa-user" aria-hidden="true"></i> My account</div>
                            </div>
                            <ul id="account-menu" class="menu account-menu top-menu">
                                <li class="menu-item"><a href="/gril_project/public/Envato/signup"><i class="fa fa-user" aria-hidden="true"></i>My account</a></li>
                                <li class="menu-item"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>My wishlist</a></li>
                                <li class="menu-item"><a href="/gril_project/public/Envato/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>My cart</a></li>
                                <li class="menu-item"><a href="/gril_project/public/Envato/cart"><i class="fa fa-check-square" aria-hidden="true"></i>Checkout</a></li>
                                <li class="menu-item"><a href="/gril_project/public/Envato/signup"><i class="fa fa-lock" aria-hidden="true"></i>Login</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="display-flex">
                        <div class="col-sm-3">
                            <div class="header-logo logo">
                                <a href="/gril_project/public/Envato/index-2" title="Rosa Logo">
                                    <img src="<?= asset('Envato/img/logo.png') ?>"  alt="Rosa logo"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <form id="searchform" class="searchform" action="#" method="get">
                                <input type="search" class="searchinput" name="searchinput" placeholder="Search..."/>
                                <button type="submit" class="searchsubmit" name="searchsubmit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        
                        <!--------------- Mini Cart --------------->
                        <div class="col-sm-3">
                            <div class="block-minicart">
                                <a href="/gril_project/public/Envato/cart" class="cartlink">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart<span class="cart-subtotal"> (0)</span>
                                </a>
                                <div class="on-minicart">
                                    <dl class="cart-products">
                                        <dt class="cart-product">
                                            <a class="cart-thumb" href="#">
                                                <img src="<?= asset('Envato/img/product/cart-thumb-1.jpg') ?>"  alt="Cart Thumb">
                                            </a>
                                            <div class="cart-info">
                                                <div class="product-name">
                                                    <span class="quantity-formated">
                                                        <span class="quantity">1</span>x
                                                    </span>
                                                    <a href="#">Funnky hight</a>
                                                </div>
                                                <div class="product-attributes">
                                                    <a href="#">S, Beige</a>
                                                </div>
                                                <span class="price">$50.99</span>
                                            </div>
                                            <span class="remove-link">
                                                <a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                            </span>
                                        </dt>
                                        <dd></dd>
                                        <dt class="cart-product">
                                            <a class="cart-thumb" href="#">
                                                <img src="<?= asset('Envato/img/product/cart-thumb-1.jpg') ?>"  alt="Cart Thumb">
                                            </a>
                                            <div class="cart-info">
                                                <div class="product-name">
                                                    <span class="quantity-formated">
                                                        <span class="quantity">1</span>x
                                                    </span>
                                                    <a href="#">Funnky hight</a>
                                                </div>
                                                <div class="product-attributes">
                                                    <a href="#">S, Beige</a>
                                                </div>
                                                <span class="price">$35</span>
                                            </div>
                                            <span class="remove-link">
                                                <a href="#"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                            </span>
                                        </dt>
                                        <dd></dd>
                                    </dl>
                                    <p class="cart-no-product">No products</p>
                                    <div class="cart-prices">
                                        <div class="cart-fee-wrap cart-shipping-fee">
                                            <span class="cart-text">Shipping</span>
                                            <span class="cart-fee price">$2.00</span>
                                        </div>
                                        <div class="cart-fee-wrap cart-total-fee">
                                            <span class="cart-text">Total</span>
                                            <span class="cart-fee price">$120.49</span>
                                        </div>
                                    </div>
                                    <div class="cart-checkout">
                                        <a href="#" class="btn btn-default checkout-btn">Check out<i class="fa fa-angle-right right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>