@extends('layouts.app')

@section('extra-script')
<script src="https://www.paypal.com/sdk/js?client-id=AZqm_IlseI_rSC0u4vTu69gMyU9fLm749II961CIYjuVp1GZEDV1NDIRWgze2vg1VH3qLgDY3qp2Rhl3&currency=MYR"></script>
@endsection

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Checkout List</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!--Check Out Area Start-->
    <div class="check-out-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">

                        {{-- <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingPaypal">
                                    <h4 class="panel-title" style="text-align:center">
                                        <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" aria-controls="paypalmethod">
                                          Express Checkout
                                        </a>
                                    </h4>
                                </div>
                                <div id="paypalmethod" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingPaypal">
                                    <div class="panel-body no-padding">
                                        <div class="payment-met">
                                            <div id="paypal-button-container"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#checkoutmethod" aria-expanded="false" aria-controls="checkoutmethod">
                                       <span>1</span>
                                       Checkout Method
                                    </a>
                                </h4>
                            </div>
                            <div id="checkoutmethod" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h2 class="collapse-title">CHECKOUT AS A GUEST OR REGISTER</h2>
                                            <h4>Register with us for future convenience:</h4>
                                            <form action="#">
                                                <div class="check-register">
                                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked/>
                                                    <label>Checkout as Guest</label>
                                                </div>
                                            </form>
                                            <p>Register and save time!</p>
                                            <p>Register with us for future convenience:</p>
                                            <p>Fast and easy check out</p>
                                            <p>Easy access to your order history and status</p>
                                            <button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#contactinformation" aria-expanded="false" aria-controls="contactinformation" style="margin: 79px; margin-left:auto">CONTINUE</button>

                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h2 class="collapse-title">LOGIN</h2>
                                            <h5>Already registered?</h5>
                                            <p class="login-info">Please log in below:</p>
                                            <form action="#">
                                                <p class="form-row">
                                                    <label>Email Address<span class="required">*</span></label>
                                                    <input type="email" />
                                                </p>
                                                <p class="form-row">
                                                    <label>Password<span class="required">*</span></label>
                                                    <input type="password" />
                                                </p>
                                                <div class="check-register login-button">
                                                    <a href="#">forgot your password?</a>
                                                    <input class="btn btn-default" type="submit" value="LOGIN"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#contactinformation" aria-expanded="false" aria-controls="contactinformation">
                                       <span>2</span>
                                       Contact Information
                                    </a>
                                </h4>
                            </div>
                            <div id="contactinformation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        {{-- <div class="col-md-12">
                                            <div class="shop-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="malaysia">Malaysia</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>First Name<span class="required">*</span></label>
                                                <input type="text" name="firstname" required>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Last Name<span class="required">*</span></label>
                                                <input type="text" name="lastname">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>Address<span class="required">*</span></label>
                                                <input type="text" name="address" placeholder="Street address">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>City<span class="required">*</span></label>
                                                <input type="text" name="city" placeholder="Town / City">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>State<span class="required">*</span></label>
                                                <input type="text" name="state">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Postcode<span class="required">*</span></label>
                                                <input type="text" name="postcode" placeholder="Postcode / Zip">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Email Address<span class="required">*</span></label>
                                                <input type="text" name="email">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Phone<span class="required">*</span></label>
                                                <input type="text" name="phone" placeholder="Phone">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="buttons-set">
                                        <button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#shippingmethod" aria-expanded="false" aria-controls="shippingmethod">CONTINUE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#shippingmethod" aria-expanded="false" aria-controls="shippingmethod">
                                       <span>3</span>
                                       Shipping Method
                                    </a>
                                </h4>
                            </div>
                            <div id="shippingmethod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body no-padding">
                                    <div class="payment-met">
                                        <form action="#" id="shipping-form">
                                            <ul class="form-list">
                                                <li class="control">
                                                    <label class="radio-inline"><input type="radio" class="radio" title="Standard Shipping" checked>Standard Shipping</label>
                                                </li>
                                                <br>
                                            </ul>
                                        </form>
                                        <div class="buttons-set">
                                            <button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#billingaddress" aria-expanded="false" aria-controls="billingaddress">CONTINUE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#billingaddress" aria-expanded="false" aria-controls="billingaddress">
                                       <span>4</span>
                                       Billing Address
                                    </a>
                                </h4>
                            </div>
                            <div id="billingaddress" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input type="checkbox" id="ship-box">
                                            </h3>
                                        </div>
                                        <div id="ship-box-info" class="row">
                                            {{-- <div class="col-md-12">
                                                <div class="shop-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">Bangladesh</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Afghanistan</option>
                                                        <option value="audi">Ghana</option>
                                                        <option value="audi2">Albania</option>
                                                        <option value="audi3">Bahrain</option>
                                                        <option value="audi4">Colombia</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>First Name<span class="required">*</span></label>
                                                    <input type="text" name="firstname1">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Last Name<span class="required">*</span></label>
                                                    <input type="text" name="lastname1">
                                                </p>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="form-row">
                                                    <label>Address<span class="required">*</span></label>
                                                    <input type="text" name="address1" placeholder="Street address">
                                                </p>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="form-row">
                                                    <label>City<span class="required">*</span></label>
                                                    <input type="text" name="city1" placeholder="Town / City">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>State<span class="required">*</span></label>
                                                    <input type="text" name="state1">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Postcode<span class="required">*</span></label>
                                                    <input type="text" name="postcode1" placeholder="Postcode / Zip">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Email Address<span class="required">*</span></label>
                                                    <input type="text" name="email1">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Phone<span class="required">*</span></label>
                                                    <input type="text" name="phone2" placeholder="Phone">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="order-notes">
                                            <label>Order Notes</label>
                                            <textarea name="ordernote" placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess"></textarea>
                                        </div>
                                    </div>
                                    <div class="buttons-set">
                                        <button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#shippingmethod" aria-expanded="false" aria-controls="shippingmethod">CONTINUE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentmethod" aria-expanded="false" aria-controls="paymentmethod">
                                       <span>5</span>
                                       Payment
                                    </a>
                                </h4>
                            </div>
                            <div id="paymentmethod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body no-padding">
                                    <div class="payment-met">
                                        <form action="#" id="payment-form">
                                            <ul class="form-list">
                                                <li class="control">
                                                    <input type="radio" class="radio" title="Check / Money order" name="payment[method]" id="p_method_checkmo" checked>
                                                    <img style="height:25px" alt="PayPal" src="//cdn.shopify.com/s/assets/checkout/offsite-gateway-logos/paypal@2x-2cabd13111981089fdf7f9faee0ef21550690cd2d380dede9fb7bc8c1253b3c6.png">
                                                    <span style="float: right">
                                                        <span>
                                                            <span class="visually-hidden">
                                                                <img style="height:25px" alt="PayPal" src="//cdn.shopify.com/s/assets/payment_icons/visa-319d545c6fd255c9aad5eeaad21fd6f7f7b4fdbdb1a35ce83b89cca12a187f00.svg">
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <span class="visually-hidden">
                                                                <img style="height:25px" alt="PayPal" src="https://cdn.shopify.com/s/assets/payment_icons/master-173035bc8124581983d4efa50cf8626e8553c2b311353fbf67485f9c1a2b88d1.svg">
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <span class="visually-hidden">
                                                                <img style="height:25px" alt="PayPal" src="https://cdn.shopify.com/s/assets/payment_icons/american_express-ed5c54cf3ceb18cd4deb3687857b816c07e4f4c7e8719da4a206cea3e7961be1.svg">
                                                            </span>
                                                        </span>
                                                    </span>
                                                </li>
                                                <br>
                                                {{-- <li class="control">
                                                    <input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
                                                    <img alt="iPay88 Malaysia" class="offsite-payment-gateway-logo" src="https://cdn.shopify.com/s/files/applications/073816cdc0d59bdfd1ae4456ba7b8736.png?height=24&amp;1519702867">
                                                    <span style="float: right">
                                                        <span>
                                                            <span class="visually-hidden">
                                                                <img style="height:25px" alt="PayPal" src="//cdn.shopify.com/s/assets/payment_icons/visa-319d545c6fd255c9aad5eeaad21fd6f7f7b4fdbdb1a35ce83b89cca12a187f00.svg">
                                                            </span>
                                                        </span>
                                                        <span>
                                                            <span class="visually-hidden">
                                                                <img style="height:25px" alt="PayPal" src="https://cdn.shopify.com/s/assets/payment_icons/master-173035bc8124581983d4efa50cf8626e8553c2b311353fbf67485f9c1a2b88d1.svg">
                                                            </span>
                                                        </span>
                                                    </span>
                                                </li> --}}
                                            </ul>
                                        </form>
                                        <div class="buttons-set">
                                            <button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#orderinformation" aria-expanded="false" aria-controls="orderinformation">CONTINUE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#orderinformation" aria-expanded="false" aria-controls="orderinformation">
                                       <span>6</span>
                                       Order Information
                                    </a>
                                </h4>
                            </div>
                            <div id="orderinformation" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body no-padding">
                                    <div class="order-review" id="checkout-review">
                                        <div class="table-responsive" id="checkout-review-table-wrapper">
                                            <table class="data-table" id="checkout-review-table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="1">Product Name</th>
                                                        <th colspan="1">Price</th>
                                                        <th rowspan="1">Qty</th>
                                                        <th colspan="1">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                @foreach (Cart::content() as $item)
                                                <tbody>
                                                    <tr>
                                                        <td><h3 class="product-name">{{$item->name}} - {{$item->options->gemstone}} {{$item->options->colour}} {{$item->options->size}}</h3></td>
                                                        <td><span class="cart-price"><span class="price">{{presentPrice($item->price)}}</span></span></td>
                                                        <td>{{$item->qty}}</td>
                                                        <!-- sub total starts here -->
                                                        <td><span class="cart-price"><span class="price">{{ presentPrice($item->subtotal) }}</span></span></td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">Subtotal</td>
                                                        <td><span class="price">{{presentPrice(Cart::subtotal())}}</span></td>
                                                    </tr>
                                                    @if (session()->has('coupon'))
                                                    <tr>
                                                        <td colspan="3">Discount</td>
                                                        <td><span class="price">{{presentPrice($discount)}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">New Subtotal</td>
                                                        <td><span class="price">{{presentPrice($newSubtotal)}}</span></td>
                                                    </tr>
                                                    @endif
                                                    <tr>
                                                        <td colspan="3">Tax ({{config('cart.tax')}}%)</td>
                                                        <td><span class="price">{{presentPrice($newTax)}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Shipping Handling (Flat Rate - Fixed)</td>
                                                        <td><span class="price">Free for now</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><strong>Grand Total</strong></td>
                                                        <td><strong><span class="price">{{presentPrice($newTotal)}}</span></strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div id="checkout-review-submit">
                                            <div class="cart-btn-3" id="review-buttons-container">
                                                <p class="left">Forgot an Item? <a href="{{route('cart.index')}}">Edit Your Cart</a></p>
                                                <button type="submit" title="Place Order" class="btn btn-default"><span>Place Order</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-4">
                    <div class="checkout-widget">
                        <h2 class="widget-title">YOUR CHECKOUT PROGRESS</h2>
                        <ul>
                            <li><a data-toggle="collapse" href="#checkoutmethod" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="checkoutmethod"><i class="fa fa-minus"></i> Checkout Method</a></li>
                            <li><a data-toggle="collapse" href="#contactinformation" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="contactinformation"><i class="fa fa-minus"></i> Contact Information</a></li>
                            <li><a data-toggle="collapse" href="#shippingmethod" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="shippingmethod"><i class="fa fa-minus"></i> Shipping Method</a></li>
                            <li><a data-toggle="collapse" href="#billingaddress" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="billingaddress"><i class="fa fa-minus"></i> Billing Address</a></li>
                            <li><a data-toggle="collapse" href="#paymentmethod" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="paymentmethod"><i class="fa fa-minus"></i> Payment</a></li>
                            <li><a data-toggle="collapse" href="#orderinformation" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="orderinformation"><i class="fa fa-minus"></i> Order Information</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Check Out Area End-->
@endsection

@section('extra-js')

<script>

document.frmTransaction.submit();

</script>

@endsection
