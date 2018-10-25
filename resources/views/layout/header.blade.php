<header>
   <div class="header-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12"> 
                <!-- Header Logo -->
                <div class="logo"><a title="YumYum Restaurant" href="index"><img alt="YumYum Restauran" src="images/logo.png" ></a></div>
                <!-- End Header Logo --> 
            </div>
            <div class="col-lg-9 col-xs-12 right_menu">
                <div class="toplinks"> 
                    <div class="links"> 
                        <div class="login">
                            <a href="login"><span class="hidden-xs">{{trans('messeage.login')}}</span></a>
                        </div>
                        <div class="login"><a href="sigin">
                            <span class="hidden-xs">{{trans('messeage.signin')}}</span></a>
                        </div>
                    </div>
                    <!-- links --> 
                </div>

                <!-- Search-col -->
                <div class="search-box pull-right">
                    <form action="http://htmldemo.magikcommerce.com/ecommerce/classic-html-template/version_1/cat" method="POST" id="search_mini_form" name="Categories">
                        <input type="text" placeholder="Search..." maxlength="70" name="search" id="search">
                        <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
                    </form>
                </div>
                <!-- End Search-col --> 
            </div>
        </div>
    </div>
</div>
</header>
<!-- Navbar(Menu) -->
<nav>
    <div class="container">
        <div class="row">
            <div class="nav-inner col-lg-12">
                <ul id="nav" class="hidden-xs">
                    <li class="level0 parent drop-menu active"><a href="index"><span>{{trans('messeage.home')}}</span></a></li>
                    <li class="level0 parent drop-menu "><a href="about_us"><span>{{trans('messeage.about')}}</span></a></li>
                    <li class="level0 parent drop-menu"><a href="categories"><span>{{trans('messeage.product')}}</span></a>
                        <ul class="level1">
                            <li class="level1 nav-10-3"><a href="categories"><span>{{trans('messeage.pizza')}}</span></a></li>
                            <li class="level1 nav-10-4"><a href="categories"><span>{{trans('messeage.cake')}}</span></a></li>
                            <li class="level1 nav-10-4"><a href="categories"><span>{{trans('messeage.snacks')}}</span></a></li>
                        </ul>
                    </li>
                    <li class="level0 parent drop-menu "><a href="promotions"><span>{{trans('messeage.promotions')}}</span></a></li>
                    <li class="level0 parent drop-menu "><a href="contact_us"><span>{{trans('messeage.contact')}}</span></a></li>
                </ul>
                <!-- End Navbar(Menu) -->
                <div class="menu_top">
                    <div class="top-cart-contain pull-right"> 
                      <!-- Top Cart -->
                      <div class="mini-cart">
                        <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#"><span class="hidden-xs">{{trans('messeage.cart')}}(2)</span></a></div>
                        <div>
                            <div class="top-cart-content" style="display: none;">
                                <div class="block-subtitle">
                                    <div class="top-subtotal">2 items <span class="price">$259.99</span> </div>
                                    <!--top-subtotal-->
                                    <div class="pull-right">
                                        <button title="View Cart" class="view-cart" type="button"><span><a href="cart">View Cart</a></span></button>
                                    </div>
                                    <!--pull-right--> 
                                </div>
                                <!--block-subtitle-->
                                <ul class="mini-products-list" id="cart-sidebar">
                                    <li class="item first">
                                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="products-images/product4.jpg"></a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                                                <p class="product-name"><a href="product_detail.html">Sample Product</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item last">
                                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="products-images/product3.jpg"></a>
                                            <div class="product-details">
                                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                                                <p class="product-name"><a href="product_detail.html">Sample Product</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <button class="btn-checkout" title="Checkout" type="button"><span><a href="page.shopping_cart" title="">Checkout</a></span></button>
                                </div>
                                <!--actions--> 
                            </div>
                        </div>
                    </div>
                    <!-- Top Cart -->
                    <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                        <input value="" type="hidden">
                        <input id="enable_module" value="1" type="hidden">
                        <input class="effect_to_cart" value="1" type="hidden">
                        <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</nav>
<!-- end nav --> 
