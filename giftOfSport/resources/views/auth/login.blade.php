@extends('layouts.master')
{{-- @extends('layouts.app') --}}

@section('content')
{{-- auth login form --}}
{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
 <hr>
    <main>
        <!-- Section: Design Block -->
        <section class="text-center text-lg-start">
        
            <!-- Jumbotron -->
            <div class="container py-4">
              <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                  <div class="card cascading-right-1 " style="
                      background: hsla(0, 0%, 100%, 0.5) !important;
                      backdrop-filter: blur(30px) !important;">
                    <div class="card-body p-4 shadow-5 text-center">
                      <h2 class="fw-bold mb-4">Log In</h2>


                    <form method="POST" action="{{ route('login') }}" class="form-contact">
                        @csrf
                         <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="fg-grey" for="email">Email address</label>
                            <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                         <!-- Password input -->
                       <div class="form-outline mb-4">
                         <label class="fg-grey" for="password">Password</label>
                         <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password">
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                            <div class="text-center">
                            <p> You don't have an account?<a href="register"><span> Signup </span></a></p>
                            </div>
                            <div class="row col col-12">
                                <div class="col-md-6 ">
                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label " for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link " href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                               @endif
                            </div>
                              <button type="submit" class="btn btn-primary btn-block mb-3">
                                  {{ __('Login') }}
                              </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
     <div class="col-lg-6 mb-5 mb-lg-1 mask-custom">
<img src="https://images.pexels.com/photos/6455924/pexels-photo-6455924.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-75 rounded shadow-4 "
  alt="" />
</div>   
    </div>
</div>
</div>
</div>
</div>


</div>
</div>
<!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</main>

@endsection
