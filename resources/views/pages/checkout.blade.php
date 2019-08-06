@extends('layouts.app')

@section('extra-script')

<script src="https://js.stripe.com/v3/"></script>
{{-- <script src="https://www.paypal.com/sdk/js?client-id=AZqm_IlseI_rSC0u4vTu69gMyU9fLm749II961CIYjuVp1GZEDV1NDIRWgze2vg1VH3qLgDY3qp2Rhl3&currency=MYR&components=buttons,marks"></script> --}}
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
                @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                        {{ csrf_field() }}
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
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#billingaddress" aria-expanded="false" aria-controls="billingaddress">
                                       <span>1</span>
                                       Billing Address
                                    </a>
                                </h4>
                            </div>
                            <div id="billingaddress" class="panel-collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>First Name<span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>Last Name<span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>Address<span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="Street address" value="{{ old('address') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>City<span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="city" name="city" placeholder="Town / City" value="{{ old('city') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>State<span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>Postcode<span class="required">*</span></label>
                                                    <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode / Zip" value="{{ old('postcode') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>Email Address<span class="required">*</span></label>
                                                    @if (auth()->user())
                                                    <input type="text" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                                    @else
                                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="form-row">
                                                    <label>Phone<span class="required">*</span></label>
                                                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="buttons-set" style="padding-right:15px">
                                            <button class="btn btn-default" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#paymentmethod" aria-expanded="false" aria-controls="paymentmethod">CONTINUE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#paymentmethod" aria-expanded="false" aria-controls="paymentmethod">
                                       <span>2</span>
                                       Payment Options
                                    </a>
                                </h4>
                            </div>
                            <div id="paymentmethod" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body no-padding">
                                    <div class="payment-met">
                                        <form action="#" id="payment-form">
                                            <ul class="form-list">
                                                <li class="control">
                                                    <label for="card-element">Credit or debit card<span class="required">*</span></label>
                                                    <div class="form-group">
                                                        <p class="form-row">
                                                            <input type="text"  id="name_on_card" name="name_on_card" placeholder="Name on Card" value="{{ old('name_on_card') }}" required>
                                                        </p>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="card-element">
                                                            <!-- A Stripe Element will be inserted here. -->
                                                        </div>
                                                        <!-- Used to display form errors. -->
                                                        <div id="card-errors" role="alert"></div>
                                                    </div>
                                                </li>
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
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#orderinformation" aria-expanded="false" aria-controls="orderinformation">
                                       <span>3</span>
                                       Order Informations
                                    </a>
                                </h4>
                            </div>
                            <div id="orderinformation" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree">
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
                                                <button type="submit" id="complete-order" title="Place Order" class="btn btn-default"><span>Place Order</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
                <div class="col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-4">
                    <div class="checkout-widget">
                        <h2 class="widget-title">YOUR CHECKOUT PROGRESS</h2>
                        <ul>
                            <li><a data-toggle="collapse" href="#billingaddress" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="billingaddress"><i class="fa fa-minus"></i> Billing Address</a></li>
                            <li><a data-toggle="collapse" href="#paymentmethod" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="paymentmethod"><i class="fa fa-minus"></i> Payment Options</a></li>
                            <li><a data-toggle="collapse" href="#orderinformation" role="button" data-parent="#accordion" aria-expanded="false" aria-controls="orderinformation"><i class="fa fa-minus"></i> Order Informations</a></li>
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

// Create a Stripe client.
var stripe = Stripe('pk_test_nyxZM7d2gVDM3xOLoNNoczwp00YsHvwIAN');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {
    hidePostalCode: true,
    style: style
    });

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  // Disable the submit button to prevent repeated clicks
  document.getElementById('complete-order').disable = true;

  var options = {
      name: document.getElementById('name_on_card').value,
      address_line1: document.getElementById('address').value,
      address_city: document.getElementById('city').value,
      address_state: document.getElementById('state').value,
      address_zip: document.getElementById('postcode').value
  }

  stripe.createToken(card, options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;

      // Enable the submit button
      document.getElementById('complete-order').disable = false;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}

</script>

@endsection
