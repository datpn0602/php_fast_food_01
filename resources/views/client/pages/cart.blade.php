@extends('client.master')   
@section('content') 
<section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
        <div class="col-main">
            <div class="cart">
                <div class="page-title">
                    <h2>{{ trans('messeage.cart') }}</h2>
                </div>
                <div class="table-responsive">
                    {!! Form::open(['method' => 'POST', 'route' => 'cart']) !!}
                        {!! Form::hidden('form_key','Vwww7itR3zQFe86m') !!}
                        <fieldset>
                            <table class="data-table cart-table" id="shopping-cart-table">
                                <thead>
                                    <tr class="first last">
                                        <th rowspan="1">&nbsp;</th>
                                        <th rowspan="1"><span class="nobr">{{ trans('messeage.product_name') }}</span></th>
                                        <th colspan="1" class="a-center"><span class="nobr">{{ trans('messeage.price') }}</span></th>
                                        <th class="a-center " rowspan="1">{{ trans('messeage.quantity') }}</th>
                                        <th colspan="1" class="a-center">{{ trans('messeage.total') }}</th>
                                        <th class="a-center" rowspan="1">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="first last">
                                        <td class="a-right last" colspan="8">
                                            <a href="index">
                                                {!! Form::button( trans('messeage.continue_shopping'), ['title' => trans('messeage.continue_shopping'), 'class' => 'button btn-continue']) !!}
                                            </a>
                                            <a href="payment">
                                                {!! Form::button( trans('messeage.payment'), ['title' => trans('messeage.payment'), 'class' => 'button btn-update']) !!}    
                                            </a>
                                            <a href="#">
                                                {!! Form::button( trans('messeage.update_cart'), ['title' => trans('messeage.update_cart'), 'class' => 'button btn-update'] ) !!}   
                                            </a>
                                            <a href="#">
                                                {!! Form::button( trans('messeage.clear_cart'), ['title' => trans('messeage.clear_cart'), 'class' => 'button btn-update'] ) !!}   
                                            </a>    
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr class="first odd">
                                        <td class="image"><a class="product-image" title="Sample Product" href="food_details"><img width="75" alt="Sample Product" src="products-images/01.jpg"></a></td>
                                        <td><h2 class="product-name"> <a href="product_detail.html">Sample Product</a> </h2></td>
                                        <td class="a-center hidden-table"><span class="cart-price"> <span class="price">$29.95</span> </span></td>
                                        <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name="cart[10522][qty]"></td>
                                        <td class="a-center movewishlist"><span class="cart-price"> <span class="price">$29.95</span> </span></td>
                                        <td class="a-center last"><a class="button remove-item" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
