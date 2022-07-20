@extends('layouts.master')

@section('content')
<hr>

<main>
<!-- Section: Design Block -->
<section class="text-center text-lg-start">

    <!-- Jumbotron -->
    <div class="container py-3">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right " style="
              background: hsla(0, 0%, 100%, 0.5) !important;
              backdrop-filter: blur(30px) !important;
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign up</h2>

                    <form method="POST" action="{{ route('register') }}" class="form-contact">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <label class="fg-grey" for="name">{{ __('First Name') }}</label>
                                <input type="text" id="name" placeholder="Enter your First Name" class="form-control @error('name') is-invalid @enderror"name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <label class="fg-grey" for="l_name">{{ __('Last Name') }}</label>
                                <input type="text" id="l_name" placeholder="Enter your Last Name" name="l_name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('l_name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                          </div>
                         <!-- Email input -->
                         <div class="form-outline mb-4">
                              <label class="fg-grey" for="email">{{ __('Email') }}</label>
                              <input type="email" id="form3Example3" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                         </div>
                                           <!-- Password input -->
                        <div class="form-outline mb-4">
                             <label class="fg-grey" for="password">{{ __('Password') }}</label>
                             <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- Confirm Password input -->
                        <div class="form-outline mb-4">
                              <label class="fg-grey" for="password-confirm">{{ __('Confirm Password') }}</label>
                              <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <!-- Phone Number input -->
                        <div class="form-outline mb-4">
                              <label class="fg-grey" for="phone">{{ __('Phone Number') }}</label>
                              <input type="number" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required/>
                              @error('phone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>  

                        <!-- Submit button -->
                        <div class="text-center">
                            <p> You Already have an account?<a href="login"><span>{{ __('Login') }}</span></a></p>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-3">
                         {{ __('Sign up') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-1 mask-custom">
            <img src="https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100 rounded shadow-4 "
              alt="" />
          </div>
    </div>
</div>
<!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</main>
@endsection
