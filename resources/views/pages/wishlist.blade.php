@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Wishlist</h2>
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
                                <li>
                                    <a href="#">
                                        Rings
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Necklaces
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       Bracelets
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Earrings
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Churies
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Jewelry Sets
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget-shop-by">
                            <h2 class="sidebar-title">SHOP BY</h2>
                            <h3 class="sidebar-sub-title">Manufacture</h3>
                            <ul class="sidebar-menu">
                                <li>
                                    <a href="#">
                                        <span class="widget-hover">Rings</span>
                                        <span>(20)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="widget-hover">Necklaces</span>
                                        <span>(26)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="widget-hover">Bracelets</span>
                                        <span>(15)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="widget-hover">Earrings</span>
                                        <span>(22)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="widget-hover">Churies</span>
                                        <span>(26)</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="widget-hover">Jewelry Sets</span>
                                        <span>(36)</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget-shop-by">
                            <h2 class="sidebar-title">POPULAR TAG</h2>
                            <ul class="tag-list">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Women’s</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Lookbook</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Dress</a></li>
                                <li><a href="#">Sale Off</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">men’s</a></li>
                                <li><a href="#">Carry bag</a></li>
                            </ul>
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
                    <div class="wishlist-right-area table-responsive">
                        <table class="wish-list-table">
                            <thead>
                                <tr>
                                    <th class="t-product-name">Products</th>
                                    <th class="product-details-comment">Product Details & Comment</th>
                                    <th class="product-price-cart">Add To Cart</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-image">
                                        <a href="#">
                                            <img src="img/product/1.jpg" alt="">
                                        </a>
                                    </td>
                                    <td class="product-details">
                                        <h4>Consequences</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <textarea placeholder="Please Enter Your Comment"></textarea>
                                    </td>
                                    <td class="product-cart">
                                        <div class="product-cart-details">
                                            <span>$ 200.00</span>
                                            <input type="number" value="1">
                                            <input type="submit" value="ADD TO CART">
                                        </div>
                                        <p>
                                            <a href="#">Edit</a>
                                        </p>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-image">
                                        <a href="#">
                                            <img src="img/product/2.jpg" alt="">
                                        </a>
                                    </td>
                                    <td class="product-details">
                                        <h4>Consequences</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <textarea placeholder="Please Enter Your Comment"></textarea>
                                    </td>
                                    <td class="product-cart">
                                        <div class="product-cart-details">
                                            <span>$ 200.00</span>
                                            <input type="number" value="1">
                                            <input type="submit" value="ADD TO CART">
                                        </div>
                                        <p>
                                            <a href="#">Edit</a>
                                        </p>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-image">
                                        <a href="#">
                                            <img src="img/product/3.jpg" alt="">
                                        </a>
                                    </td>
                                    <td class="product-details">
                                        <h4>Consequences</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                                        <textarea placeholder="Please Enter Your Comment"></textarea>
                                    </td>
                                    <td class="product-cart">
                                        <div class="product-cart-details">
                                            <span>$ 200.00</span>
                                            <input type="number" value="1">
                                            <input type="submit" value="ADD TO CART">
                                        </div>
                                        <p>
                                            <a href="#">Edit</a>
                                        </p>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="wishlist-bottom-link">
                        <a href="index.html">
                            <i class="fa fa-angle-double-left"></i>
                            Back
                        </a>
                        <div class="shopingcart-bottom-area wishlist-bottom-area pull-right">
                            <a href="#" class="right-shoping-cart">SHARE WISHLIST</a>
                            <a href="#" class="right-shoping-cart">ADD ALL TO CART</a>
                            <a href="#" class="right-shoping-cart">UPDATE WISHLIST</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page Area End -->
    <!-- Brand Area Start -->
    @include('inc.brand')
    <!-- Brand Area End -->
@endsection
