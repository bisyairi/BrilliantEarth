<!--Header Area Start-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-xs">
                    <div class="header-top-message pull-left">
                        <span><i class="fa fa-envelope"></i>bisyairi@gmail.com</span>
                        <span><i class="fa fa-phone"></i>+60182968823</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-menu pull-right">
                        <ul class="nav-menu">
                            @guest
                            <li><a href="{{ route('login')}}">LOGIN</a></li>
                            <li><a href="{{ route('register')}}">CREATE ACCOUNT</a></li>
                            @else
                            <a href="{{ route('logout')}}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout</a>

                            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display:none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-2 col-xs-6">
                    <div class="header-logo">
                        <a href="/">
                            <img src="{{asset('img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>

                {{ menu('main', 'inc.menus.main') }}

                @if (Cart::count() >0)

                <div class="col-md-1 col-sm-1 col-xs-6">
                    <div class="header-cart pull-right">
                        <ul>
                            <li>
                                <a class="header-cart-link" href="{{ route('cart.index') }}">
                                    <i class="flaticon-bag"></i>
                                    @if (Cart::instance('default')->count() > 0)
                                    <span>{{ Cart::instance('default')->count() }}</span>
                                    @endif
                                </a>
                                <div class="cart_down_area">
                                    @foreach(Cart::content() as $item)
                                    <div class="cart_single">
                                        <a href="{{route('shop.show', $item->options->slug)}}">
                                            <img style="width:50px; height:70px" src="{{ productImage($item->options->image) }}" alt="">
                                        </a>
                                        <h2>
                                            <a href="{{ route('shop.show', $item->options->slug) }}">{{$item->name}}</a>
                                            <form id="remove" action="{{ route('cart.remove', $item->rowId) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="javascript:;" onclick="parentNode.submit();">
                                                    <span><i class="fa fa-trash"></i></span>
                                                </a>
                                            </form>
                                        </h2>
                                        <p>{{$item->qty}} x {{presentPrice($item->price)}}</p>
                                    </div>
                                    @endforeach
                                    <div class="cart_shoptings">
                                        <a href="/checkout">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                @else
                <div class="col-md-1 col-sm-1 col-xs-6">
                    <div class="header-cart pull-right">
                        <ul>
                            <li>
                                <a class="header-cart-link" href="{{ route('cart.index') }}">
                                    <i class="flaticon-bag"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</header>
<!--Header Area End-->

<!-- Mobile Menu Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">SHOP</a></li>
                            <li><a href="shop.html">MEN</a></li>
                            <li><a href="shop.html">WOMEN</a></li>
                            <li><a href="shop.html">COLLECTION</a></li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="contact.html">Contact Page</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="shop.html">Shop Page</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
