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

                    <?php echo Cart::content(); ?>
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
                                        <form id="remove" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <a onclick="document.getElementById('remove').submit()">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </form>
                                    </td>
                                    <td class="product-image">
                                        <a href="">
                                            <img src="" alt="">
                                        </a>
                                    </td>
                                    <td class="t-product-name">
                                        <h3>
                                            <a href="{{ route('shop.show', $models->firstWhere('id', $item->id)->products->slug) }}">{{$item->name}}</a>
                                        </h3>
                                    <p>{{$models->firstWhere('id', $item->id)->size }}</p>
                                    <p>{{$models->find($item->id)->gemstone}}</p>
                                    </td>
                                    {{-- <td class="product-edit">
                                        <p>
                                            <a href="#">Edit</a>
                                        </p>
                                    </td> --}}
                                    <td class="product-unit-price">
                                        <p>{{presentPrice($item->price)}}</p>
                                    </td>
                                    <td class="product-quantity product-cart-details">
                                        <input type="number" value="{{$item->qty}}">
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
                        <a class="left-shoping-cart" href="/shop">CONTINUE SHOPPING</a>
                        <div class="shopingcart-bottom-area pull-right">
                            <a class="right-shoping-cart" href="#">CLEAR SHOPPING CART</a>
                            <a class="right-shoping-cart" href="#">UPDATE SHOPPING CART</a>
                        </div>
                    </div>

                    @else
                        <h3>No items in Cart!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--Cart Page Area End-->
    <!-- Discount Area Start -->
    <div class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="discount-main-area">
                        <div class="discount-top">
                            <h3>DISCOUNT CODE</h3>
                            <p>Enter your coupon code if have one</p>
                        </div>
                        <div class="discount-middle">
                            <input type="text" placeholder="">
                            <a class="" href="#">APPLY COUPON</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="subtotal-main-area">
                        <div class="subtotal-area">
                            <h2>SUBTOTAL<span>{{presentPrice(Cart::subtotal())}}</span></h2>
                        </div>
                        <div class="subtotal-area">
                            <h2>GRAND TOTAL<span>{{presentPrice(Cart::total())}}</span></h2>
                        </div>
                        <a href="#">CHECKOUT</a>
                        <p>Checkout With Multiple Addresses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Discount Area End -->
@endsection
