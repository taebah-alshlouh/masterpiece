@extends('layouts.master')
@section('title','about')
@section('content')
    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="about">About</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">About</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <div class="subhead">About Us</div>
            <h2 class="title-section">We are <span class="fg-primary">Professional Teams</span> to Growth your Business</h2>

            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of</p>
          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="../assets/img/about.jpg" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Our Teams</div>
          <h2 class="title-section">The Expert Team on ReveTive</h2>
        </div>

        <div class="owl-carousel team-carousel mt-5">
          <div class="team-wrap">
            <div class="team-profile">
              <img src="../assets/img/teams/team_1.jpg" alt="">
            </div>
            <div class="team-content">
              <h5>Walter White</h5>
              <div class="text-sm fg-grey">Chief Executive Officer</div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>

          <div class="team-wrap">
            <div class="team-profile">
              <img src="../assets/img/teams/team_2.jpg" alt="">
            </div>
            <div class="team-content">
              <h5>Sarah Johanson</h5>
              <div class="text-sm fg-grey">Chief Technology Officer</div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>

          <div class="team-wrap">
            <div class="team-profile">
              <img src="../assets/img/teams/team_3.jpg" alt="">
            </div>
            <div class="team-content">
              <h5>Anna Anderson</h5>
              <div class="text-sm fg-grey">Product Manager</div>

              <div class="social-button">
                <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container-fluid">
        <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
          <div class="py-3 px-5">
            <img src="../assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/google.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/mailchimp.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/paypal.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/stripe.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>
@endsection
 

@section('script')  
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>
@endsection
