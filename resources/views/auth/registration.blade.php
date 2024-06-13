<x-app>
    


    @section('title')
    Sign Up
@endsection


    <div class="ht-100v text-center">
        <div class="row pd-0 mg-0">
           <div class="col-lg-6 bg-gradient hidden-sm" style="background: url('https://img.freepik.com/free-vector/mobile-testing-concept-illustration_114360-1564.jpg?t=st=1717847795~exp=1717851395~hmac=2fd3094938f62ce8c7e3d7a1c3bf2a4ce6cac3fcd0ec20504be1fffc5eba6889&w=1380');    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;justify-content: center;
    align-items: center;
    display: flex;">
              <div class="ht-100v d-flex">
                 <div class="align-self-center">
                    {{-- <img src="assets/images/logo-sm.png" class="img-fluid" alt=""> --}}
                    <h3 class="tx-35 tx-semibold tx-black pd-t-50">Test your app from Experts</h3>
                    <p class="pd-y-15 pd-x-10 pd-md-x-100 tx-gray-200"></p>
                    <a href="{{route('login')}}" class="btn btn-primary"><span class="tx-gray-200">Sign In</span></a>
                 </div>
              </div>
           </div>
           <div class="col-lg-6 bg-light">
              <div class="ht-100v d-flex align-items-center justify-content-center">
                 <form action="{{route('registration')}}" method="POST" class="">
                  @csrf
                  @method('POST')
                    <h3 class="tx-dark mg-b-5 tx-left">Create New Account</h3>
                    <div class="tx-red">{{session('product')}}</div>
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
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                           <label class="tx-gray-500 mg-b-0">First Name</label>
                        </div>
                        <input type="text" class="form-control" placeholder="First Name" name="first_name">
                     </div>
                     <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                           <label class="tx-gray-500 mg-b-0">Last Name</label>
                        </div>
                        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                     </div>
                    <div class="form-group tx-left">
                       <label class="tx-gray-500 mg-b-5">Email address</label>
                       <input type="email" class="form-control" placeholder="yourname@yourmail.com" name="email">
                    </div>
                    <div class="form-group">
                       <div class="d-flex justify-content-between mg-b-5">
                          <label class="tx-gray-500 mg-b-0">Password</label>
                       </div>
                       <input type="password" class="form-control" placeholder="Enter your password" name="password">
                    </div>
                    <button type="submit" href="" class="btn btn-brand btn-block">Create Account</button>
                    <div class="pd-y-20 tx-uppercase tx-gray-500">or</div>
                    <button class="btn bg-facebook">Facebook</button>
                    <button class="btn bg-twitter">Twitter</button>
                    <button class="btn bg-linkedin">Linkedin</button>
                    <div class="tx-13 mg-t-20 tx-center tx-gray-500">Already have an account? <a href="{{route('login')}}" class="tx-semibold">Sign In</a></div>
                 </form>
              </div>
           </div>
        </div>
     </div>


</x-app>
