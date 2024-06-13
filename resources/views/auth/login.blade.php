
@section('title')
    Sign In
@endsection
<x-app>
    <div class="ht-100v text-center">
        <div class="row pd-0 mg-0">
           <div class="col-lg-6 bg-gradient hidden-sm">
              <div class="ht-100v d-flex">
                 <div class="align-self-center">
                    <img src="assets/images/logo-sm.png" class="img-fluid" alt="">
                    <h3 class="tx-20 tx-semibold tx-gray-100 pd-t-50">JOIN OUR GREAT COMMUNITY</h3>
                    <p class="pd-y-15 pd-x-10 pd-md-x-100 tx-gray-200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <a href="{{route('registration')}}" class="btn btn-outline-primary"><span class="tx-gray-200">Get An Account</span></a>
                 </div>
              </div>
           </div>
           <div class="col-lg-6 bg-light">
              <div class="ht-100v d-flex align-items-center justify-content-center">
                 <form action="{{route('login')}}" method="POST" class="">
                  @csrf
                  @method('POST')
                    <h3 class="tx-dark mg-b-5 tx-left">Sign In</h3>
                    <p class="tx-gray-500 tx-15 mg-b-40">Welcome back! Please signin to continue.</p>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="form-group tx-left">
                       <label class="tx-gray-500 mg-b-5">Email address</label>
                       <input type="email" class="form-control" placeholder="email@domain.com" name="email">
                    </div>
                    <div class="form-group">
                       <div class="d-flex justify-content-between mg-b-5">
                          <label class="tx-gray-500 mg-b-0">Password</label>
                          <a href="" class="tx-13 mg-b-0 tx-semibold">Forgot password?</a>
                       </div>
                       <input type="password" class="form-control" placeholder="Enter your password" name="password">
                    </div>
                    <button type="submit" href="" class="btn btn-brand btn-block">Sign In</button>
                    <div class="pd-y-20 tx-uppercase tx-gray-500">or</div>
                    <button class="btn bg-facebook">Facebook</button>
                    <button class="btn bg-twitter">Twitter</button>
                    <button class="btn bg-linkedin">Linkedin</button>
                    <div class="tx-13 mg-t-20 tx-center tx-gray-500">Don't have an account? <a href="{{route('registration')}}" class="tx-dark tx-semibold">Create an Account</a></div>
                 </form>
              </div>
           </div>
        </div>
     </div>
</x-app>