@extends('layouts.app')

@section('content')
        <!-- slider Area Start -->
		<div class="slider-area">
			<div class="bend niceties preview-1">
				<div id="ensign-nivoslider-3" class="slides">
					<img src="{{asset('img/slider/s-1-1.jpg')}}" alt="" title="#slider-direction-1"/>
 					<img src="{{asset('img/slider/s-1-2.jpg')}}" alt="" title="#slider-direction-2"/>
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="t-cn slider-direction">
					<div class="container slider-height">
						<div class="row slider-height">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 slider-height">
								<div class="slide-text">
									<div class="cap-title wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
										<h2><strong>SPANKING</strong><br />COLLECTION</h2>
									</div>
									<div class="cap-shop wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
										<a href="/shop">Shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction">
					<div class="container slider-height">
						<div class="row slider-height">
							<div class="col-md-12 slider-height">
								<div class="slide-text">
									<div class="cap-title wow bounceInDown" data-wow-duration="0.9s" data-wow-delay="0s">
										<h2><strong>SPANKING</strong><br />COLLECTION</h2>
									</div>
									<div class="cap-shop wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
										<a href="/shop">Shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider Area End-->
		<!--New Product Area Start-->
		<div class="new-product-area">
		    <div class="container">
		        <div class="row">
                    <div class="col-md-12">
                        <div class="new-product-top">
                            <div class="col-50 padding-right">
                                @foreach ($newproduct1 as $product)
                                <div class="single-top-product">
                                    <img style="width:580px; height:346px" src="{{asset('img/'.$product->image)}}" alt="">
                                    <div class="overlay-content">
                                        <a href="/shop"><h3>{{$product->name}} <br>  {{$product->details}}</h3></a>
                                        <a href="/shop" class="btn-product">Shop Now</a>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($newproduct2 as $product)
                                <div class="single-top-product">
                                    <img style="width:580px; height:420px" src="{{asset('img/'.$product->image)}}" alt="">
                                    <div class="overlay-content">
                                        <a href="/shop"><h3>{{$product->name}} <br>  {{$product->details}}</h3></a>
                                        <a href="/shop" class="btn-product">Shop Now</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-50 padding-left">
                                @foreach ($newproduct3 as $product)
                                <div class="single-top-product">
                                    <img style="width:580px; height:420px" src="{{asset('img/'.$product->image)}}" alt="">
                                    <div class="overlay-content">
                                        <a href="/shop"><h3>{{$product->name}} <br>  {{$product->details}}</h3></a>
                                        <a href="/shop" class="btn-product">Shop Now</a>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($newproduct4 as $product)
                                <div class="single-top-product">
                                    <img style="width:580px; height:346px" src="{{asset('img/'.$product->image)}}" alt="">
                                    <div class="overlay-content">
                                        <a href="/shop"><h3>{{$product->name}} <br>  {{$product->details}}</h3></a>
                                        <a href="/shop" class="btn-product">Shop Now</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
		        </div>
		        <div class="new-trend section-padding">
                    <div class="row">
                        <div class="section-title">
                            <h2>New Trend</h2>
                        </div>
                        <div class="new-trend-list indicator-style">
                            @foreach ($newtrend as $key => $trend)
                            <div class="col-md-4">
                                <div class="single-new-trend">
                                    <a href="/shop"><img src="{{asset('img/'.$trend->image)}}" alt=""></a>
                                    <div class="overlay-content">
                                    <a href="/shop"><h2>{{$trend->presentPrice()}}</h2></a>
                                        <a href="/shop" class="btn-small">Now</a>
                                        <div class="product-action">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="flaticon-bag"></i></a>
                                                </li>
                                                <li>
                                                <a href="#" class="show-modal" title="Quick view" data-toggle="modal" data-target="#productModal"
                                                data-id="{{$trend->id}}" data-desc="{{$trend->description}}"
                                                data-image="{{asset('img/'.$trend->image)}}" data-price="{{$trend->presentPrice()}}"
                                                data-name="{{$trend->name}}"><i class="flaticon-view"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="/shop">
                                        <h4>{{$trend->name}}</h4>
                                        </a>
                                        <div class="pro-rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
		        </div>
		    </div>
		</div>
		<!-- New Product Area End -->
		<!-- New Product Area Start -->
		<div class="new-collection-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-6">
		            <div class="new-collection-info">
		                <h2>New Collection !!</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		                <a href="/shop" class="btn-default">SHOP NOW</a>
		            </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- New Product Area End -->
        <!--Featured Product Area Start-->
        <div class="featured-product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2>Featured Products</h2>
                    </div>
                    <div class="featured-product-list indicator-style">
                        @foreach ($featured as $key => $feature)
                        <div class="col-md-3">
                            <div class="single-new-trend">
                                <a href="/shop"><img src="{{asset('img/'.$feature->image)}}" alt=""></a>
                                <div class="overlay-content">
                                <a href="/shop"><h2>{{ $feature->presentPrice() }}</h2></a>
                                    <a href="/shop" class="btn-small">Now</a>
                                    <div class="product-action">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="flaticon-bag"></i></a>
                                            </li>
											<li>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal"
                                                data-desc="{{$feature->description}}" data-image="{{asset('img/'.$feature->image)}}"
                                                data-price="{{$feature->presentPrice()}}" data-name="{{$feature->name}}"><i class="flaticon-view"></i></a>
											</li>
                                        </ul>
                                    </div>
                                    <a href="/shop">
                                    <h4>{{ $feature->name }}</h4>
                                    </a>
                                    <div class="pro-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="testimonial-list indicator-style-3">
                        <div class="single-testimonial">
                            <div class="col-md-offset-1 col-md-2 col-sm-2">
                                <div class="support-img">
                                    <img src="{{asset('img/testimonial/1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="testimonial-text">
                                    <h2>What our client says</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#">ZENIFAR DUE</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="col-md-offset-1 col-md-2 col-sm-2">
                                <div class="support-img">
                                    <img src="{{asset('img/testimonial/2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="testimonial-text">
                                    <h2>What our client says</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#">ZENIFAR DUE</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="col-md-offset-1 col-md-2 col-sm-2">
                                <div class="support-img">
                                    <img src="{{asset('img/testimonial/3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="testimonial-text">
                                    <h2>What our client says</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <a href="#">ZENIFAR DUE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Testimonial Area End-->
        <!-- Brand Area Start -->
        {{-- @include('inc.brand') --}}
        <!-- Brand Area End -->
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images" id="image">
                                        <img alt="" src="" id="photo">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1 id="name" name="name" value="name"></h1>
                                    <div class="price-box" id="price">
                                    <p class="price"><span class="special-price"><span class="amount"></span></span></p>
                                    </div>
                                    <a href="product-details.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc" id="desc">
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->
@endsection

@section('extra-js')
    <script type="text/javascript">

    $(function() {
        $('#productModal').on("show.bs.modal", function (e) {

            $("#name").html($(e.relatedTarget).data('name'));
            $("#price").html($(e.relatedTarget).data('price'));
            $("#desc").html($(e.relatedTarget).data('desc'));
            $("#photo").attr("src", $(e.relatedTarget).data('image'));

           /*  var price = document.getElementById("price");
            var content = document.createTextNode("RM ");

            price.insertBefore(content, price.firstChild); */
        });
    });
    </script>
@endsection
