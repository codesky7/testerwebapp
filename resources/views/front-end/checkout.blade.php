@extends('front-end.layouts.app')
@section('content')
<div class="container mt-6" style="">
    <div class="py-5 text-center checkoutbox" style="margin-top: 100px;">
        
        <h2>Checkout </h2>
        <p class="lead">Ensure your app meets all Google Play Console requirements with our comprehensive testing services. Our secure and user-friendly platform guides you through adding your app, selecting a payment plan, and integrating testers. Receive detailed feedback and easily publish your app on the Google Play Store with confidence.</p>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">{{session('product')}}</small>
                    </div>
                    <span class="text-muted">${{session('price')}}</span>
                </li>
                
                
                
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>${{session('price')}}</strong>
                </li>
            </ul>
            <form class="card p-2" action="{{route('stripe.checkout')}}" method="POST">
                @csrf
                @method('POST')
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing info</h4>
            <form class="needs-validation" novalidate="" method="POST" action="{{ route('stripe.checkout') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="{{ Auth::user()->fname }}" required="" name="fname">
                        <div class="invalid-feedback">Valid first name is required.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="{{ Auth::user()->lname }}" required="" name="lname">
                        <div class="invalid-feedback">Valid last name is required.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="{{ Auth::user()->email }}" required>
                    <div class="invalid-feedback">Please enter a valid email address</div>
                </div>
                <div class="mb-3">
                    <label for="phone">Phone <span class="text-muted">(Optional)</span></label>
                    <input type="tel" class="form-control" id="phone" placeholder="+123456687422" name="phone">
                    <div class="invalid-feedback">Please enter a valid phone number</div>
                </div>
                <div class="mb-3">
                    <label for="testingUrl">Testing url <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="testingUrl" placeholder="https://play.google.com/apps/testing/package-name" name="testing_url">
                    <div class="invalid-feedback">Please enter testing url</div>
                </div>
                <div class="mb-3">
                    <label for="note">Add a note for testers and admin</label>
                    <textarea class="form-control" id="note" rows="3" name="note"></textarea>
                </div>
                <div class="mb-3">
                    <label for="product">Product</label>
                    <input type="text" class="form-control" id="product" name="product" placeholder="Product name" value="{{session('product')}}" required>
                    <div class="invalid-feedback">Please enter the product name</div>
                </div>
                <div class="mb-3">
                    <label for="price">Price (in USD)</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Price in USD" required value="{{session('price')}}">
                    <div class="invalid-feedback">Please enter the price</div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
            
        </div>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2024 <a href="{{route('home')}}">Tester Bee</a></p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>
@endsection

@section('js')
   <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())
</script> 
@endsection