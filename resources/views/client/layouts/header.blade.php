<header>
 <div class="header-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-12"> 
                <!-- Header Logo -->
                <div class="logo">
                    <a title="YumYum Restaurant" href="index"><img alt="YumYum Restauran" src="client/images/logo.png" ></a>
                </div>
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
                </div>
                <!-- Search-col -->
                <div class="search-box pull-right">
                    {!! Form::open(['method' => 'POST', 'id' => 'search_mini_form']) !!}
                    {!! Form::text('search', '', ['placeholder' => 'Search...', 'id' => 'search']) !!}
                    {!! Form::button('', ['class' => 'search-btn-bg']) !!}
                    <span class="glyphicon glyphicon-search"></span>&nbsp;
                    {!! Form::close() !!}
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
                    <li class="level0 parent drop-menu active"><a href="#"><span>{{trans('messeage.home')}}</span></a></li>
                    <li class="level0 parent drop-menu "><a href="#"><span>{{trans('messeage.about')}}</span></a></li>
                    <li class="level0 parent drop-menu"><a href="#"><span>{{trans('messeage.product')}}</span></a>
                        <ul class="level1">
                            @foreach($category as $cate)
                                <li class="level1 nav-10-3"><a href="#"><span>{{ $cate->name}}</span></a></li>
                            @endforeach
                            @foreach($types as $type)
                                <li class="level1 nav-10-3"><a href="#"><span>{{ $type->name}}</span></a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="level0 parent drop-menu "><a href="#"><span>{{trans('messeage.promotions')}}</span></a></li>
                    <li class="level0 parent drop-menu "><a href="#"><span>{{trans('messeage.contact')}}</span></a></li>
                </ul>
                <!-- End Navbar(Menu) -->
                <div class="menu_top">
                    <div class="top-cart-contain pull-right"> 
                      <!-- Top Cart -->
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                <a href="#"><span class="hidden-xs">{{trans('messeage.cart')}}(2)</span></a>
                            </div>
                            <div class="top-cart-content" style="display: none;">
                                <div class="block-subtitle">
                                    <div class="top-subtotal">2 items <span class="price">$259.99</span> </div>
                                    <!--top-subtotal-->
                                    <div class="pull-right">
                                        <a href="cart">
                                            {!! Form::button( trans('messeage.view_cart'), ['title' => 'View Cart', 'class' => 'view-cart'] ) !!}
                                        </a> 
                                    </div>
                                    <!--pull-right--> 
                                </div>
                                <!--block-subtitle-->
                                <ul class="mini-products-list" id="cart-sidebar">
                                    <li class="item first">
                                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="products-images/product4.jpg"></a>
                                            <div class="product-details">
                                                <strong>1</strong> x <span class="price">$179.99</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item first">
                                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="products-images/product4.jpg"></a>
                                            <div class="product-details">
                                                <strong>1</strong> x <span class="price">$179.99</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="actions">
                                    <a href="payment">
                                        {!! Form::button(trans('messeage.checkout'), ['title' => 'Checkout', 'class' => 'btn-checkout']) !!}
                                    </a>
                                </div>
                                <!--actions--> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end nav --> 
