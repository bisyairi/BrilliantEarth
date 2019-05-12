@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area2 section-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>PRODUCT DETAILS</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!-- Product Simple Area Start -->
    <div class="product-simple-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="single-product-image-inner">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="one">
                                <a class="venobox" href="{{asset('img/product/'.$product->image)}}" data-gall="gallery" title="">
                                    <img src="{{asset('img/product/'.$product->image)}}" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="two">
                                <a class="venobox" href="img/single-product/bg-2.jpg" data-gall="gallery" title="">
                                    <img src="img/single-product/bg-2.jpg" alt="">
                                </a>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="three">
                                <a class="venobox" href="img/single-product/bg-3.jpg" data-gall="gallery" title="">
                                    <img src="img/single-product/bg-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="product-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab"><img src="img/single-product/1.jpg" alt=""></a></li>
                            <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab"><img src="img/single-product/2.jpg" alt=""></a></li>
                            <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab"><img src="img/single-product/3.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-5 col-sm-5">
                    <div class="single-product-details">
                        <div class="list-pro-rating">
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star icolor"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <h2>{{$product->name}}</h2>
                        {{-- <h4>{!! $stockLevel !!}</h4> --}}
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        <div class="single-product-price">
                            <h2 id="prodPrice" class="prodPrice">{{$product->presentPrice()}}</h2>
                            <input type="text" name="prodPrice2" id="prodPrice2" value="{{$product->price}}">
                            <input type="text" name="prodId" id="prodId">
                            {{-- <p><i>Normal Retail Price: {{$product->presentPrice()}}</i></p> --}}
                        </div>
                        <p class="single-shop-select" id="gem">
                            <label>Gemstone</label>
                            <select id="gemStone" class="product">
                                @foreach ($product->attributes as $gemstone)
                                <option value="{{$gemstone->gemstone}}">{{$gemstone->gemstone}}</option>
                                @endforeach
                            </select>
                        </p>

                        <p class="single-shop-select" id="colour">
                            <label>Colour</label>
                            <select id="productColour" class="product">
                                @foreach ($product->attributes as $colour)
                                <option value="{{$colour->colour}}">{{$colour->colour}}</option>
                                @endforeach
                            </select>
                        </p>

                        <p class="single-shop-select" id="size">
                            <label>Size</label>
                            <select id="productSize" class="product">
                                @foreach ($product->attributes as $size)
                                <option value="{{$size->size}}">{{$size->size}}</option>
                                @endforeach
                            </select>
                        </p>

                        <div class="product-attributes clearfix">
                            <span class="pull-left" id="quantity-wanted-p">
                                <span class="dec qtybutton">-</span>
                                <input id="quantity" type="text" value="1" class="cart-plus-minus-box">
                                <span class="inc qtybutton">+</span>
                            </span>
                            <span>
                               <a class="cart-btn">
                                   <i class="flaticon-bag"></i>
                                   <span>Add to Cart</span>
                                </a>
                            </span>
                        </div>
                        <div class="add-to-wishlist">
                            <a class="wish-btn" href="cart.html">
                                <i class="flaticon-favorite"></i>
                                <span>ADD TO WISHLIST</span>
                            </a>
                        </div>
                        <div class="single-product-categories">
                           <label>Categories:</label>
                            <span>Girls Optical, Large ( Ages 9- 14 ), Small ( Ages 2-8 ).</span>
                        </div>
                        <div id="product-comments-block-extra">
                            <ul class="comments-advices">
                                <li>
                                    <a href="#" class="open-comment-form">Write a review</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="p-details-tab-content section-padding-2">
                        <div class="p-details-tab">
                            <ul class="p-details-nav-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Review</a></li>
                                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Tab</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content review">
                            <div role="tabpanel" class="tab-pane active" id="more-info">
                                <p>{!!$product->description!!}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="data">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">
                                            <td>Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr class="even">
                                            <td>Styles</td>
                                            <td>Casual</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Properties</td>
                                            <td>Short Sleeve</td>
                                        </tr>
                                    </tbody>
                               </table>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div id="product-comments-block-tab">
                                    <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Simple Area End -->
    <!--Related Product Area Start-->
    <div class="featured-product-area section-padding-2">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Related  products</h2>
                </div>
                <div class="featured-product-list indicator-style">
                    @foreach ($mightAlsoLike as $item)
                    <div class="col-md-3">
                        <div class="single-new-trend">
                            <a href="{{ route('shop.show', $item->slug) }}"><img src="{{asset('img/product/'.$item->image)}}" alt=""></a>
                            <div class="overlay-content">
                                <a href="{{ route('shop.show', $item->slug) }}"><h2>{{$item->presentPrice()}}</h2></a>
                                <a href="{{ route('shop.show', $item->slug) }}" class="btn-small">Now</a>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="flaticon-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop.show', $item->slug) }}"><i class="flaticon-view"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{ route('shop.show', $item->slug) }}">
                                    <h4>{{$item->name}}</h4>
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
    <!--Related Product Area End-->
@endsection

@section('extra-js')

    <script type="text/javascript">

        $(document).ready(function(){

            var map={};

            $('#gemStone option').each(function(){
                var val=$(this).val();

                if( map[val] ){
                    $(this).remove();
                    return; // continue to next loop
                }

                // Registering val to map list
                map[val]=1;
            });

            $('#productSize option').each(function(){
                var val=$(this).val();

                if( map[val] ){
                    $(this).remove();
                    return; // continue to next loop
                }

                // Registering val to map list
                map[val]=1;
            });

            $('#productColour option').each(function(){
                var val=$(this).val();

                if( map[val] ){
                    $(this).remove();
                    return; // continue to next loop
                }

                // Registering val to map list
                map[val]=1;
            });

            $("#gemStone").val($("#gemStone option:first").val());
            $("#prodcutColour").val($("#productColour option:first").val());
            $("#productSize").val($("#productSize option:first").val());

            if ($("#gemStone option[value!='']").length == 0) {
                $("#gem").hide();
            }

            if ($("#productColour option[value!='']").length == 0) {
                $("#colour").hide();
            }

            if ($("#productSize option[value!='']").length == 0) {
                $("#size").hide();
            }

            /* $(document).on('change','#gemStone',function(){
                // console.log("lol");

                var gemstone=$(this).val();
                var size=$("#productSize").val();
                // console.log(prodId);
                var div=$(this).parent();

                var op="";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductSize')!!}',
                    data: {'gemstone':gemstone},
                    success:function(data){

                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].size+'">'+data[i].size+'</option>';
                        }

                        div.find('#productSize').html("");
                        // div.find('.prodSize').append(op);
                        $('#productSize').html(op);

                        $("#productSize").attr('selectedIndex', 0);

                    },
                    error:function(){
                        console.log('gg');
                    }
                });

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findProductPrice')!!}',
                    data:{'gemstone':gemstone},
                    dataType:'json',//return data will be json
                    success:function(data){

                        // here price is coloumn name in products table data.coln name
                        var price = (data.price/100).toFixed(2);

                        document.getElementById("prodPrice").innerHTML = "RM"+price;
                        document.getElementById("prodPrice2").value = data.price;
                        // document.getElementById("prodId").value = data.id;

                        // a.find('.prod_price').val(data.price);

                    },
                    error:function(){
                    }
                });
            }); */

            /* $(document).on('change','#productColour',function(){
                var colour=$(this).val();

                var div=$(this).parent();

                var op="";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductSize')!!}',
                    data: {'colour':colour},
                    success:function(data){

                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].size+'">'+data[i].size+'</option>';
                        }

                        div.find('#productSize').html("");

                        $('#productSize').html(op);

                        $("#productSize").attr('selectedIndex', 0);

                    },
                    error:function(){
                        console.log('gg');
                    }
                });

                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findProductPrice')!!}',
                    data:{'colour':colour},
                    dataType:'json',//return data will be json
                    success:function(data){

                        // here price is coloumn name in products table data.coln name
                        var price = (data.price/100).toFixed(2);

                        document.getElementById("prodPrice").innerHTML = "RM"+price;
                        document.getElementById("prodPrice2").value = data.price;

                        // a.find('.prod_price').val(data.price);

                    },
                    error:function(){
                        console.log('wp');
                    }
                });
            }); */

            $(document).on('change','.product',function(){
                var size=$("#productSize").val();
                var gemstone=$("#gemStone").val();
                var colour=$("#productColour").val();

                console.log(gemstone, colour, size);

                var div1=$("#gemStone").parent();
                var div2=$("#productColour").parent();

                var op="";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductSize')!!}',
                    data: {'gemstone':gemstone, 'colour':colour},
                    success:function(data){

                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].size+'">'+data[i].size+'</option>';
                        }

                        div1.find('#productSize').html("");
                        div2.find('#productSize').html("");

                        $('#productSize').html(op);

                        $("#productSize").attr('selectedIndex', 0);

                    },
                    error:function(){
                        console.log('gg');
                    }
                });

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductId')!!}',
                    data: {'size':size, 'gemstone':gemstone, 'colour':colour},
                    dataType:'json',
                    success:function(data){
                        // document.getElementById("prodId").value = data.id;
                        console.log(data);

                        document.getElementById("prodId").value = data.id;

                        var price = (data.price/100).toFixed(2);

                        document.getElementById("prodPrice").innerHTML = "RM"+price;
                        document.getElementById("prodPrice2").value = data.price;
                    },
                    error:function(){
                        console.log('cuba lagi');
                    }
                });
            });
        });

    </script>
@endsection
