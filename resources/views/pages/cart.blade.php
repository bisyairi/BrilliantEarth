@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Cart List</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!--Cart Page Area Start-->
    <div class="shopping-cart-area section-padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    @if (session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                     {{-- {{Cart::content()}} --}}
                    @if (Cart::count() >0)

                    <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

                    <div class="wishlist-table-area table-responsive">

                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-image">Image</th>
                                    <th class="t-product-name">Product Name</th>
                                    {{-- <th class="product-edit">Edit</th> --}}
                                    <th class="product-unit-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Subtotal</th>
                                </tr>
                            </thead>
                            @foreach ($cartItems as $item)
                            <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <form id="remove" action="{{ route('cart.remove', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn"><i class="fa fa-trash-o fa-2x"></i></button>
                                        </form>
                                    </td>
                                    <td class="product-image">
                                    <a href="{{route('shop.show', $item->options->slug)}}">
                                            <img style="width:255px; height:280px" src="{{asset('img/'.$item->options->image)}}" alt="">
                                        </a>
                                    </td>
                                    <td class="t-product-name">
                                        <h3>
                                            <a href="{{ route('shop.show', $item->options->slug) }}">{{$item->name}}</a>
                                        </h3>
                                    <p>{{$item->options->size }}</p>
                                    <p>{{$item->options->gemstone}}</p>
                                    </td>
                                    <td class="product-unit-price">
                                        <p>{{presentPrice($item->price)}}</p>
                                    </td>
                                    <td class="product-quantity product-cart-details">
                                        <select class="quantity" data-id="{{ $item->rowId }}">
                                            @for ($i = 1; $i < 6; $i++)
                                                <option {{ $item->qty == $i ? 'selected' : ''}}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </td>
                                    <td class="product-quantity">
                                        <p>{{ presentPrice($item->subtotal) }}</p>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="shopingcart-bottom-area">
                        <a class="left-shoping-cart" role="button" href="{{route('shop.index')}}">CONTINUE SHOPPING</a>
                        <div class="shopingcart-bottom-area pull-right">
                            <form id="removeall" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a id="clearall" class="right-shoping-cart" role="button">CLEAR SHOPPING CART</a>
                            </form>
                        </div>

                    </div>

                    @else
                        <h3>No items in Cart!</h3>
                        <br>
                        <div class="shopingcart-bottom-area">
                            <a class="left-shoping-cart" href="/shop">CONTINUE SHOPPING</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--Cart Page Area End-->
    <!-- Discount Area Start -->
    @if (Cart::count() >0)
    <div class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="discount-main-area">
                        <div class="discount-top">
                            <h3>DISCOUNT CODE</h3>
                            <p>Enter your coupon code if have one</p>
                        </div>
                        <form id="couponform" action="{{route('coupon.store')}}" method="POST">
                            <div class="discount-middle">
                                @csrf
                                <input type="text" id="coupon_code" name="coupon_code" placeholder="ABC123">
                                <a role="button" id="applycoupon">APPLY COUPON</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="subtotal-main-area">
                        <div class="subtotal-area">
                            <h2>SUBTOTAL<span>{{presentPrice(Cart::subtotal())}}</span></h2>
                        </div>
                        @if (session()->has('coupon'))
                        <div class="subtotal-area">
                            <h2>DISCOUNT ({{ session()->get('coupon')['name']}})
                                <form id="removeform" action="{{route('coupon.destroy')}}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <a id="removecoupon">Remove</a>
                                </form>
                                <span>-{{ presentPrice($discount) }}</span>
                            </h2>
                        </div>

                        <div class="subtotal-area">
                            <h2>NEW SUBTOTAL<span>{{ presentPrice($newSubtotal) }}</span></h2>
                        </div>
                        @endif

                        <div class="subtotal-area">
                            <h2>TAX ({{config('cart.tax')}}%)<span>{{ presentPrice($newTax) }}</span></h2>
                        </div>
                        <div class="subtotal-area">
                            <h2>GRAND TOTAL<span>{{ presentPrice($newTotal) }}</span></h2>
                        </div>
                        <a href="{{route('checkout.index')}}">CHECKOUT</a>
                        {{-- <p>Checkout With Multiple Addresses</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <br>
    <br>
    <br>
    <!-- Discount Area End -->
@endsection

@section('extra-js')

    <script src="{{ asset('js/app.js')}}"></script>
    <script type="text/javascript">

    (function(){
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element){
            element.addEventListener('change', function(){
                // alert('Changed');

                const id = element.getAttribute('data-id')

                axios.patch(`cart/${id}`, {
                    quantity: this.value
                })

                .then(function (response) {
                    console.log(response);
                    window.location.href = '{{ route('cart.index') }}'
                    // console.log('lol');
                })
                .catch(function (error) {
                    console.log(error);
                    window.location.href = '{{ route('cart.index') }}'
                });
            })
        })
    })();

    document.getElementById("clearall").onclick = function() {
        document.getElementById("removeall").submit();
    }

    document.getElementById("applycoupon").onclick = function() {
        document.getElementById("couponform").submit();
    }

    document.getElementById("removecoupon").onclick = function() {
        document.getElementById("removeform").submit();
    }

    </script>

@endsection
