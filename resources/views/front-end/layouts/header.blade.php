<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('home')}}" class="logo">
              <h4>Tester Bee <img src="/frontend/assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{route('home')}}/#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
            
            @guest()
            <li class="scroll-to-section"><a href="{{route('login')}}">Sign In</a></li> 
            <li class="scroll-to-section"><a href="{{route('registration')}}">Sign Up</a></li>
            <li class="scroll-to-section"><div class="main-blue-button"><a href="#contact">Get Your Quote</a></div></li> 
            @endguest 
           @auth()
           <li class="scroll-to-section"><a href="{{route('adminlogout')}}">Sign Out</a></li> 
          
           @if (Auth::user()->user_type == 0)
           <li class="scroll-to-section"><div class="main-blue-button"><a href="{{route('client.dashboard')}}">Dashboard</a></div></li> 
           @elseif (Auth::user()->user_type == 1)
           <li class="scroll-to-section"><div class="main-blue-button"><a href="{{route('admin.dashboard')}}">Dashboard</a></div></li>
           @elseif (Auth::user()->user_type == 2)
           <li class="scroll-to-section"><div class="main-blue-button"><a href="{{route('tester.dashboard')}}">Dashboard</a></div></li>
           @endif
           @endauth
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>