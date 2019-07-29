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
                <form id="addtocart" action="{{route('cart.store')}}" method="POST" id="cartform">
                    {{ csrf_field() }}
                    <div class="col-md-6 col-sm-7">
                        <div class="single-product-image-inner">
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active">
                                <a class="venobox" href="{{ productImage($product->image) }}" data-gall="gallery" title="">
                                    <img src="{{ productImage($product->image) }}" alt="">
                                </a>
                            </div>

                            @foreach (json_decode($product->images, true) as $image)
                            <div role="tabpanel" class="tab-pane" id="image2">
                                <a class="venobox" href="{{ productImage($image) }}" data-gall="gallery" title=""><img src="{{ productImage($image) }}" alt=""></a>
                            </div>
                            @endforeach

                        </div>


                        <ul class="product-tabs" role="tablist">

                            <li role="presentation">
                                <a class="venobox" href="{{ productImage($product->image) }}" data-gall="gallery">
                                    <img src="{{ productImage($product->image) }}" style="height: 150px; width:170px" alt="">
                                </a>
                            </li>

                            @if ($product->images)
                            <!-- Nav tabs -->

                            @foreach (json_decode($product->images, true) as $image)
                            <li role="presentation">
                            <a class="venobox" href="{{ productImage($image) }}" data-gall="gallery"">
                                    <img src="{{ productImage($image) }}" style="height: 150px; width:170px" alt="">
                                </a>
                            </li>
                            @endforeach

                            @endif

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
                            <p></p>
                            <div class="single-product-price">
                                <h2 id="prodPrice" class="prodPrice">{{$product->presentPrice()}}</h2>
                                {{-- <p><i>Normal Retail Price: {{$product->presentPrice()}}</i></p> --}}
                            </div>
                                <input type="hidden" name="price" id="prodPrice2">
                                <input type="hidden" name="id" id="prodId">
                                <input type="hidden" name="id2" id="productId" value="{{$product->id}}">
                                <input type="hidden" name="name" id="prodName" value="{{$product->name}}">
                                <input type="hidden" name="slug" id="prodSlug" value="{{$product->slug}}">
                                <input type="hidden" name="image" id="prodImg" value="{{$product->image}}">
                                <input type="hidden" name="sku" id="prodSku">

                            <p class="single-shop-select" id="gem">
                                <label>Gemstone</label>
                                <select id="gemStone" name="gemStone" class="product">
                                    @foreach ($product->attributes as $gemstone)
                                    <option value="{{$gemstone->gemstone}}">{{$gemstone->gemstone}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="gemstone" id="gemStone2" />
                            </p>

                            <p class="single-shop-select" id="colour">
                                <label>Colour</label>
                                <select id="productColour" name="productColour" class="product">
                                    @foreach ($product->attributes as $colour)
                                    <option value="{{$colour->colour}}">{{$colour->colour}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="colour" id="colour2" />
                            </p>

                            <p class="single-shop-select" id="size">
                                <label>Size</label>
                                <select id="productSize" name="productSize" class="product">
                                    <option disabled selected value="0">Select Size</option>
                                    @foreach ($product->attributes as $size)
                                    <option value="{{$size->size}}">{{$size->size}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->any())
                                <div class="alert alert-danger"><ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                                <input type="hidden" name="size" id="size2" />
                            </p>


                            <div class="product-attributes clearfix">
                                <span class="pull-left" id="quantity-wanted-p">
                                    <span class="dec qtybutton">-</span>
                                    <input id="quantity" name="qty" value="1" type="text" class="cart-plus-minus-box">
                                    <span class="inc qtybutton">+</span>
                                </span>
                                <span>
                                <a class="cart-btn" role="button" onclick="document.getElementById('addtocart').submit()">
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
                            {{-- <label>Categories:</label>
                                <span>Girls Optical, Large ( Ages 9- 14 ), Small ( Ages 2-8 ).</span>
                            </div> --}}
                            <div id="product-comments-block-extra">
                                <ul class="comments-advices">
                                    <li>
                                        <a href="#" class="open-comment-form">Write a review</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
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
                            <a href="{{ route('shop.show', $item->slug) }}"><img src="{{ productImage($item->image) }}" alt=""></a>
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

            var spanSubmit = $('.submit-span');

            spanSubmit.on('click', function() {
                $(this).closest('form').submit();
            });

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

            $(document).on('change', '#gemStone', function(){
                var gemstone=$(this).val();

                var div=$(this).parent();

                var op="";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductSize')!!}',
                    data: {'gemstone':gemstone},
                    success:function(data){

                        // console.log(data);
                        op+='<option disabled selected value>Select Size</option>';

                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].size+'">'+data[i].size+'</option>';
                        }

                        div.find('#productSize').html("");
                        // div2.find('#productSize').html("");

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

                        // console.log(data);

                        // here price is coloumn name in products table data.coln name
                        var price = (data.price/100).toFixed(2);

                        document.getElementById("prodPrice").innerHTML = "RM"+price;
                        document.getElementById("prodPrice2").value = data.price;

                        document.getElementById("gemStone2").value = data.gemstone;
                        document.getElementById("colour2").value = data.colour;
                        // document.getElementById("size2").value = data.size;

                        // a.find('.prod_price').val(data.price);

                    },
                    error:function(){
                        console.log('wp');
                    }
                });
            });

            $(document).on('change', '#productColour', function(){
                var colour=$(this).val();

                var div=$(this).parent();

                var op="";

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductSize')!!}',
                    data: {'colour':colour},
                    success:function(data){

                        // console.log(data);
                        op+='<option disabled selected value>Select Size</option>';

                        for(var i=0;i<data.length;i++){
                            op+='<option value="'+data[i].size+'">'+data[i].size+'</option>';
                        }

                        div.find('#productSize').html("");
                        // div2.find('#productSize').html("");

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

                        // console.log(data);

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
            });

            $(document).on('change','#productSize',function(){
                var size=$("#productSize").val();
                var gemstone=$("#gemStone").val();
                var colour=$("#productColour").val();
                var prodid=$("#productId").val();

                console.log(gemstone, colour, size, prodid);

                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('findProductId')!!}',
                    data: {'size':size, 'gemstone':gemstone, 'colour':colour, 'prodid':prodid},
                    dataType:'json',
                    success:function(data){

                        console.log(data);
                        document.getElementById("prodId").value = data[0].id;
                        document.getElementById("gemStone2").value = data[0].gemstone;
                        document.getElementById("prodPrice2").value = data[0].price;
                        document.getElementById("size2").value = data[0].size;
                        document.getElementById("colour2").value = data[0].colour;
                        document.getElementById("prodSku").value = data[0].sku;

                    },
                    error:function(){
                        console.log('cuba lagi');
                    }
                });
            });

            window.onload = function() {
                document.getElementById("prodId").value = '';
                document.getElementById("gemStone2").value = '';
                document.getElementById("prodPrice2").value = '';
                document.getElementById("size2").value = '';
                document.getElementById("colour2").value = '';
                document.getElementById("prodSku").value = '';
                }

            // $("#cartform").submit(function(event){
            //     // var valDDL = $(this).val();
            //     //event.preventDefault();
            //     var valDDL = $("#productSize").val();
            //     if(valDDL==""){
            //         event.preventDefault();
            //         alert("select dropdown option");
            //     }
            // });

        });

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

    </script>
@endsection
