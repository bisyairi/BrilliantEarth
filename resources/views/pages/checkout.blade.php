@extends('layouts.app')

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
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       <span>1</span>
                                       Checkout Method
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h2 class="collapse-title">CHECKOUT AS A GUEST OR REGISTER</h2>
                                            <h4>Register with us for future convenience:</h4>
                                            <form action="#">
                                                <div class="check-register">
                                                    <input type="radio" />
                                                    <label>Checkout as Guest</label>
                                                </div>
                                                <div class="check-register">
                                                    <input type="radio" />
                                                    <label>Register</label>
                                                </div>													
                                            </form>
                                            <p>Register and save time!</p>
                                            <p>Register with us for future convenience:</p>
                                            <p>Fast and easy check out</p>
                                            <p>Easy access to your order history and status</p>
                                            <button class="btn btn-default">CONTINUE</button>
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
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       <span>2</span>
                                       Billing Information
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
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
                                        </div>	
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>First Name<span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                        </div>	
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Last Name<span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                        </div>	
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>Company Name</label>
                                                <input type="text">
                                            </p>
                                        </div>	
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>Address<span class="required">*</span></label>
                                                <input type="text" placeholder="Street address">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <label>Town / City<span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>State / County<span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Postcode / Zip<span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Email Address<span class="required">*</span></label>
                                                <input type="text">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <label>Phone<span class="required">*</span></label>
                                                <input type="text" placeholder="Phone">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="checbox-info">
                                                <input type="checkbox" id="cbox">
                                                Create an account?
                                            </label>
                                            <div id="cbox_info">
                                                <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                <p class="form-row">
                                                    <label>Phone<span class="required">*</span></label>
                                                    <input type="text" placeholder="Phone">
                                                </p>									
                                            </div>
                                        </div>											
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       <span>3</span>
                                       Shopping Method
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input type="checkbox" id="ship-box">
                                            </h3>
                                        </div>
                                        <div id="ship-box-info" class="row">
                                            <div class="col-md-12">
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
                                            </div>	
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>First Name<span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                            </div>	
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Last Name<span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                            </div>	
                                            <div class="col-md-12">
                                                <p class="form-row">
                                                    <label>Company Name</label>
                                                    <input type="text">
                                                </p>
                                            </div>	
                                            <div class="col-md-12">
                                                <p class="form-row">
                                                    <label>Address<span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address">
                                                </p>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="form-row">
                                                    <label>Town / City<span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>State / County<span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Postcode / Zip<span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Email Address<span class="required">*</span></label>
                                                    <input type="text">
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="form-row">
                                                    <label>Phone<span class="required">*</span></label>
                                                    <input type="text" placeholder="Phone">
                                                </p>
                                            </div>											
                                        </div>
                                        <div class="order-notes">
                                            <label>Order Notes</label>
                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess"></textarea>
                                        </div>
                                    </div>								
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       <span>4</span>
                                       Payment Information
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body no-padding">
                                    <div class="payment-met">
                                        <form action="#" id="payment-form">
                                            <ul class="form-list">
                                                <li class="control">
                                                    <input type="radio" class="radio" title="Check / Money order" name="payment[method]" id="p_method_checkmo">
                                                    <label for="p_method_checkmo">Check / Money order </label>
                                                </li>
                                                <li class="control">
                                                    <input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
                                                    <label for="p_method_ccsave">Credit Card (saved) </label>
                                                </li>
                                            </ul>
                                        </form>
                                        <div class="buttons-set">
                                            <button class="btn btn-default">CONTINUE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                       <span>5</span>
                                       Payment Information
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
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
                                                <tbody>
                                                    <tr>
                                                        <td><h3 class="product-name">Cras neque metus</h3></td>
                                                        <td><span class="cart-price"><span class="price">$155.00</span></span></td>
                                                        <td>1</td>
                                                        <!-- sub total starts here -->
                                                        <td><span class="cart-price"><span class="price">$155.00</span></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3 class="product-name">Nunc facilisis</h3></td>
                                                        <td><span class="cart-price"><span class="price">$222.00</span></span></td>
                                                        <td>1</td>
                                                        <!-- sub total starts here -->
                                                        <td><span class="cart-price"><span class="price">$222.00</span></span></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">Subtotal</td>
                                                        <td><span class="price">$377.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Shipping Handling (Flat Rate - Fixed)</td>
                                                        <td><span class="price">$10.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><strong>Grand Total</strong></td>
                                                        <td><strong><span class="price">$387.00</span></strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div id="checkout-review-submit">
                                            <div class="cart-btn-3" id="review-buttons-container">
                                                <p class="left">Forgot an Item? <a href="#">Edit Your Cart</a></p>
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
                            <li><a href="#"><i class="fa fa-minus"></i> Billing Address</a></li>
                            <li><a href="#"><i class="fa fa-minus"></i> Shipping Address</a></li>
                            <li><a href="#"><i class="fa fa-minus"></i> Shipping Method</a></li>
                            <li><a href="#"><i class="fa fa-minus"></i> Payment Method</a></li>
                        </ul>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
    <!--Check Out Area End-->
@endsection