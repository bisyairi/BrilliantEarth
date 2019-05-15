<!--Header Area Start-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-xs">
                    <div class="header-top-message pull-left">
                        <span><i class="fa fa-envelope"></i>admin@themepure.net</span>
                        <span><i class="fa fa-phone"></i>+8801737 803547</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-top-menu pull-right">
                        <ul class="nav-menu">
                            <li><a href="/login">LOGIN</a></li>
                            <li><a href="#">LANGUAGE</a>
                                <div class="ht-menu-down">
                                    <ul>
                                        <li><a href="#">Malay</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">CURRENCY</a>
                                <div class="ht-menu-down">
                                    <ul>
                                        <li><a href="#">MYR</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </div>
                            </li>
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
                <div class="col-md-10 col-sm-9 hidden-xs">
                    <div class="mainmenu text-center">
                        <nav>
                            <ul id="nav">
                                <li><a href="/">HOME</a></li>
                                <li><a href="/shop">DIAMOND</a></li>
                                <li><a href="/shop">COLLECTION</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/cart">Cart Page</a></li>
                                        <li><a href="/checkout">Check Out</a></li>
                                        <li><a href="/contact-us">Contact</a></li>
                                        <li><a href="/login">Login</a></li>
                                        <li><a href="/my-account">My Account</a></li>
                                        <li><a href="/shop">Shopping Page</a></li>
                                        <li><a href="/single-product">Single Shop Page</a></li>
                                        <li><a href="/wishlist">Wishlist Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact-us">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-6">
                        <div class="header-cart pull-right">
                                {{-- <ul> --}}
                                    {{-- <li> --}}
                                        <a class="header-cart-link" href="{{ route('cart.index') }}">
                                            <i class="flaticon-bag"></i>
                                            @if (Cart::instance('default')->count() > 0)
                                            <span>{{ Cart::instance('default')->count() }}</span>
                                            @endif
                                        </a>
                                           {{-- <div class="cart_down_area">
                                               <div class="cart_single">
                                                   <a href="">
                                                       <img style="width:50px; height:70px" src="" alt="">
                                                   </a>
                                                   <h2>
                                                       <a href=""></a>

                                                       <button type="submit" class="btn btn-xs">
                                                           <span><i class="fa fa-trash"></i></span>
                                                       </button>

                                                   </h2>
                                                   <p></p>
                                               </div>
                                               <div class="cart_shoptings">
                                                   <a href="/checkout">Checkout</a>
                                               </div>
                                           </div> --}}
                                        {{-- </li> --}}
                                    {{-- </ul> --}}
                                </div>
                </div>
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
