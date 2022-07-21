

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="mailto:contact@mail.com">gos@mail.com</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">+0790780957-07788999947</a>
            </div>
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="/" class="navbar-brand">GIFT OF<span class="text-primary"> SPORT</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="/" class="nav-link {{ Request::is('/') ? 'active' : null }}">Home</a>
            </li>
            <li class="nav-item">
              <a href="./shop" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="/portfolio" class="nav-link">Rent</a>
            </li>
            <li class="nav-item">
              <a href="about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contact" class="nav-link">Contact</a>
            </li>
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
            </li>
            @endif
            @if (Route::has('register'))
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item">
              <a id="navbarDropdown" class="nav-link" href="profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user"></i>   {{ Auth::user()->name }}   
              </a>
          </li>
          <li>
            <div class="nav-item" aria-labelledby="navbarDropdown">
              <a class="nav-link" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          </li>
          @endguest
            <li class="nav-item">
              <a href="/cart" class="nav-link"><i class="fas fa-shopping-cart"></i></a>
            </li>
            <li class="nav-item">
              <a href="wishlist" class="nav-link"><i class="fas fa-heart"></i></a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
