@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>SHOP LEFT SIDEBAR</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!-- Shop Page Area Start -->
    <div class="shop-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="shop-widget">
                        <aside class="widget widget-categories">
                            <h2 class="sidebar-title">CATEGORY</h2>
                            <ul class="sidebar-menu">
                                @foreach ($categories as $category)
                                <li class="{{ setActiveCategory($category->slug) }}">
                                    <a href="{{ route('shop.index', ['category' => $category->slug]) }}">
                                        <span class="widget-hover">{{ $category->name }}</span>
                                        <span>({{$category->products_count}})</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget-shop-by">
                            <h3 class="sidebar-sub-title">Price</h3>
                            <div class="info-widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                            <input type="submit" value="SEARCH" /> 
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget widget-image">
                           <a href="#">
                               <img src="img/shop/side-bar.jpg" alt="">
                           </a>
                            <div class="widget-content">
                                <h2>Friday Sale <br>Extra <br>30% Off</h2>
                                <a href="#">Shop Now <i class="fa fa-angle-right"></i> </a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="shop-right-area">
                        <div class="shop-tab-list">
                            <div class="shop-left-tab">
                                <div class="shop-tab-pill pull-left">
                                    <ul>
                                        <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span></span></a></li>
                                        <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop-tab-pill pull-right">
                                    <ul>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Sort by : </label>
                                                <select onchange="location = this.value;">
                                                    <option value="position" selected="selected">Position</option>
                                                    <option value="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'name']) }}">Name</option>
                                                    <option value="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'price']) }}">Price</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Show : </label>
                                                <select>
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="09">09</option>
                                                    <option value="08">08</option>
                                                    <option value="07">07</option>
                                                    <option value="06">06</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-tab-pill pull-right">
                                    <div class="shop-pagination">
                                            {{ $products->appends(request()->input())->render("pagination::bootstrap-4") }}
                                    </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="row tab-pane fade in active" id="home">
                               <div class="shop-single-product-area">
                                   @foreach ($products as $product)
                                   <div class="col-md-4 col-sm-6">
                                       <div class="single-product">
                                           <a href="single-product.html">
                                               <img src="{{asset('img/product/'.$product->image)}}" alt="">
                                           </a>
                                           <div class="single-product-overlay {{ $product->status }}">
                                               <h3>{{ $product->status_desc }}</h3>
                                           </div>
                                           <div class="single-product-content">
                                              <div class="left-content pull-left">
                                                  <a href="#"><h2>{{ $product->name }}</h2></a>
                                                   <span class="new-price">RM {{ $product->price }}</span>                                                     
                                              </div>
                                              <div class="right-content pull-right">
                                                  <a href="#"><i class="flaticon-bag"></i></a>
                                              </div>
                                           </div>
                                       </div>
                                   </div>
                                   @endforeach
                               </div>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach ($products as $product)
                                        <div class="shop-list-single">
                                            <div class="shop-list-left">
                                                <a href="#"><img style="width:270px; height:345px" src="{{asset('img/product/'.$product->image)}}" alt="" /></a>                                          
                                            </div>  
                                            <div class="shop-list-right">
                                                <div class="left-content">
                                                    <a href="#"><h2>{{$product->name}}</h2></a>
                                                    <span class="new-price">RM {{$product->price}}</span>
                                                </div>
                                                <div class="list-pro-rating">
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-desc">
                                                {!!$product->description!!}
                                                </div>
                                                <a class="btn-default" href="#">SHOP NOW</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-tab-list no-margin">
                            <div class="shop-left-tab">
                                <div class="shop-tab-pill pull-left">
                                    <ul>
                                        <li class="active first-margin"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span></span></a></li>
                                        <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span></span></a></li>
                                    </ul>
                                </div>
                                <div class="shop-tab-pill pull-right">
                                    <ul>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Sort by : </label>
                                                <select onchange="location = this.value;">
                                                    <option value="position" selected="selected">Position</option>
                                                    <option value="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'name']) }}">Name</option>
                                                    <option value="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'price']) }}">Price</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="product-size-deatils">
                                            <div class="show-label">
                                                <label>Show : </label>
                                                <select>
                                                    <option value="10" selected="selected">10</option>
                                                    <option value="09">09</option>
                                                    <option value="08">08</option>
                                                    <option value="07">07</option>
                                                    <option value="06">06</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-tab-pill pull-right">
                                <div class="shop-pagination">
                                    {{ $products->appends(request()->input())->render("pagination::bootstrap-4") }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End -->
    <br>
@endsection

@section('extra-js')
    <!-- Javascript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(function() {
            $( "#slider-range" ).slider({
                range:true,
                min: {!! $minprice !!},
                max: {!! $maxprice !!},
                values: [ {!! $minprice !!}, {!! $maxprice !!} ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        });
        </script>
@endsection