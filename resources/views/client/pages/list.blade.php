@extends('client.master')   
@section('content')   
<!-- Breadcrumbs -->
<div class="breadcrumbs bounceInUp animated">
    <div class="container">
        <div class="row">
          <div class="col-xs-12">
              <ul>
                  <li class="home"> <a title="Go to Home Page" href="index.html">{{ trans('messeage.home') }}</a><span>» </span></li>
                  <li class=""> <a title="Go to Home Page" href="grid.html">{{ trans('messeage.pizza') }}</a><span>» </span></li>
              </ul>
          </div>
      </div>
  </div>
</div>
<!-- Breadcrumbs End --> 
<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Tops & Tees</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-main col-sm-9 col-sm-push-3">
                <article class="col-main">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="" src="images/women_banner.png"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <h2 class="cat-heading"><strong>New Fashion 2015</strong><br></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                                        </div>
                                    </div>
                                    <!-- End Item --> 
                                    <!-- Item -->
                                    <div class="item"> 
                                        <a href="#x"><img alt="" src="images/women_banner1.png"></a>
                                    </div>
                                    <!-- End Item --> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="view-mode"> 
                                <a href="categories" title="Grid" class="button button-grid">&nbsp;</a>
                                <span title="List" class="button button-active button-list">&nbsp;</span>    
                            </div>
                        </div>
                        <div class="pager">
                            <div id="limiter">
                                <label>View: </label>
                                <ul>
                                    <li><a href="#">15<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">20</a></li>
                                            <li><a href="#">30</a></li>
                                            <li><a href="#">35</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="pages">
                                <label>{{ trans('messeage.page') }}: </label>
                                <ul class="pagination">
                                    <li><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="category-products">
                        <ol class="products-list" id="products-list">
                            <li class="item first">
                                <div class="product-image"> 
                                    <a href="food_details" title="Sample Product">
                                        <img class="small-image" src="products-images/01.jpg" alt="Sample Product">
                                    </a> 
                                </div>
                                <div class="product-shop">
                                    <h2 class="product-name">
                                        <a href="food_details" title="Sample Product">Sample Product</a>
                                    </h2>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:50%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> 
                                            <a href="#">1 {{ trans('messeage.reviews') }}(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> 
                                        </p>
                                    </div>
                                    <div class="desc std">
                                        <p>Sed volutpat ac massa eget 
                                          lacinia.  
                                      Aenean volutpat lacus at dolor blandit </p>
                                        <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                                          tincidunt mi. Vivamus dictum nec... 
                                            <a class="link-learn" title="" href="food_details">Learn More</a>
                                        </p>
                                    </div>
                                    <div class="price-box">
                                        <p class="old-price">
                                            <span class="price-label"></span>
                                            <span id="old-price-212" class="price"> $442.99 </span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price-label"></span>
                                            <span id="product-price-212" class="price"> $222.99 </span>
                                        </p>
                                    </div>
                                    <div class="actions">
                                        <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>{{ trans('messeage.addCart') }}</span></button>
                                        <span class="add-to-links"> 
                                            <a title="Add to Compare" class="button link-compare" href="compare.html"><span>{{ trans('messeage.compare') }}</span></a>
                                        </span> 
                                    </div>
                                </div>
                            </li>
                            <li class="item first">
                                <div class="product-image"> 
                                    <a href="food_details" title="Sample Product">
                                        <img class="small-image" src="products-images/01.jpg" alt="Sample Product">
                                    </a> 
                                </div>
                                <div class="product-shop">
                                    <h2 class="product-name">
                                        <a href="food_details" title="Sample Product">Sample Product</a>
                                    </h2>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:50%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> 
                                            <a href="#">1 {{ trans('messeage.reviews') }}(s)</a>
                                            <span class="separator">|</span>
                                            <a href="#review-form">Add Your Review</a> 
                                        </p>
                                    </div>
                                    <div class="desc std">
                                        <p>Sed volutpat ac massa eget 
                                          lacinia.  
                                      Aenean volutpat lacus at dolor blandit </p>
                                        <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                                          tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="food_details">Learn More</a> </p>
                                    </div>
                                    <div class="price-box">
                                        <p class="old-price">
                                            <span class="price-label"></span>
                                            <span id="old-price-212" class="price"> $442.99 </span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price-label"></span>
                                            <span id="product-price-212" class="price"> $222.99 </span>
                                        </p>
                                    </div>
                                    <div class="actions">
                                        <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>{{ trans('messeage.addCart') }}</span></button>
                                        <span class="add-to-links">  <a title="Add to Compare" class="button link-compare" href="compare.html"><span>{{ trans('messeage.compare') }}</span></a> </span> 
                                    </div>
                                </div>
                            </li>
                            <li class="item first">
                                <div class="product-image"> 
                                    <a href="food_details" title="Sample Product"> <img class="small-image" src="products-images/01.jpg" alt="Sample Product"> </a> 
                                </div>
                                <div class="product-shop">
                                    <h2 class="product-name"><a href="food_details" title="Sample Product">Sample Product</a></h2>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:50%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> 
                                            <a href="#">1 {{ trans('messeage.reviews') }}(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> 
                                        </p>
                                    </div>
                                    <div class="desc std">
                                        <p>Sed volutpat ac massa eget 
                                          lacinia.  
                                      Aenean volutpat lacus at dolor blandit </p>
                                        <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                                          tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="food_details">Learn More</a> </p>
                                    </div>
                                    <div class="price-box">
                                        <p class="old-price">
                                            <span class="price-label"></span>
                                            <span id="old-price-212" class="price"> $442.99 </span>
                                        </p>
                                        <p class="special-price">
                                            <span class="price-label"></span>
                                            <span id="product-price-212" class="price"> $222.99 </span>
                                        </p>
                                    </div>
                                    <div class="actions">
                                        <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>{{ trans('messeage.addCart') }}</span></button>
                                        <span class="add-to-links"> 
                                            <a title="Add to Compare" class="button link-compare" href="compare.html"><span>{{ trans('messeage.compare') }}</span></a>
                                        </span> 
                                    </div>
                                </div>
                            </li>
                            <li class="item first">
                                <div class="product-image"> 
                                    <a href="food_details" title="Sample Product">
                                        <img class="small-image" src="products-images/01.jpg" alt="Sample Product">
                                    </a> 
                                </div>
                                <div class="product-shop">
                                    <h2 class="product-name"><a href="food_details" title="Sample Product">Sample Product</a></h2>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:50%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> 
                                            <a href="#">1 {{ trans('messeage.reviews') }}(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> 
                                        </p>
                                    </div>
                                    <div class="desc std">
                                        <p>Sed volutpat ac massa eget 
                                          lacinia.  
                                      Aenean volutpat lacus at dolor blandit </p>
                                        <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu, 
                                          tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="food_details">Learn More</a> </p>
                                    </div>
                                    <div class="price-box">
                                        <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                                        <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
                                    </div>
                                    <div class="actions">
                                        <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>{{ trans('messeage.addCart') }}</span></button>
                                        <span class="add-to-links">  <a title="Add to Compare" class="button link-compare" href="compare.html"><span>{{ trans('messeage.compare') }}</span></a> </span> 
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </article>
                <!--  ///*///======    End article  ========= //*/// --> 
            </div>
            <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <aside class="col-left sidebar">
                    <div class="side-nav-categories">
                        <div class="block-title">{{ trans('messeage.category') }}</div>
                        <!--block-title--> 
                        <!-- BEGIN BOX-CATEGORY -->
                        <div class="box-content box-category">
                            <ul>
                                <li><a class="active" href="#">{{ trans('messeage.pizza') }}</a> </li>
                                <li><a href="#">{{ trans('messeage.cake') }}</a></li>
                                <li class="last"> <a href="#">{{ trans('messeage.snacks') }}</a> </li>
                            </ul>
                        </div>
                        <!--box-content box-category--> 
                    </div>     
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection
