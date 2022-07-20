@extends('layouts.master')
@section('title','Home')
{{-- @include('layouts.nav')     --}}

@section('content')

   <div class="page-banner home-banner mb-5">
     <div class="slider-wrapper">
       <div class="owl-carousel hero-carousel">
         <div class="hero-carousel-item">
           <img
             src="https://images.pexels.com/photos/3599587/pexels-photo-3599587.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             alt="">
           <div class="img-caption">
             <div class="subhead">We're design studio believe in ideas</div>
             <h1 class="mb-4">Creative Design</h1>
             <a href="#services" class="btn btn-outline-light">Get Started</a>
           </div>
         </div>
         <div class="hero-carousel-item">
           <img
             src="https://images.pexels.com/photos/7031705/pexels-photo-7031705.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             alt="">
           <div class="img-caption">
             <div class="subhead">We're design studio believe in ideas</div>
             <h1 class="mb-4">Creative Design</h1>
             <a href="#services" class="btn btn-outline-light">Get Started</a>
           </div>
         </div>
         <div class="hero-carousel-item">
           <img
             src="https://images.pexels.com/photos/703012/pexels-photo-703012.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             alt="">
           <div class="img-caption">
             <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>
             <a href="#services" class="btn btn-outline-light">Get Started</a>
             <a href="#services" class="btn btn-primary">See Pricing</a>
           </div>
         </div>
         <div class="hero-carousel-item">
           <img
             src="https://images.pexels.com/photos/6740823/pexels-photo-6740823.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
             alt="">
           <div class="img-caption">
             <div class="subhead">Easy way to build perfect website</div>
             <h1 class="mb-4">Beautify handcrafted templates for your website</h1>
             <a href="#services" class="btn btn-primary">Read More</a>
           </div>
         </div>
       </div>
     </div> <!-- .slider-wrapper -->
   </div> <!-- .page-banner -->
 </header>

 <main>
   <div class="page-section p-0">
     <div class="container">
       <div class="text-center">
         <h2 class="title-section my-5"> New Arrivals</h2>
       </div>

       <div class="row justify-content-center">
         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/web_development.svg" alt="">
             </div>
             <h5>Web Development</h5>
           </div>
         </div>
         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/graphics_design.svg" alt="">
             </div>
             <h5>Graphics Design</h5>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/seo_and_marketing.svg" alt="">
             </div>
             <h5>SEO & Marketing</h5>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/customer_services.svg" alt="">
             </div>
             <h5>Customer Services</h5>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/app_development.svg" alt="">
             </div>
             <h5>App Development</h5>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/ui_ux_design.svg" alt="">
             </div>
             <h5>UI/UX Design</h5>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/product_design.svg" alt="">
             </div>
             <h5>Product Design</h5>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
           <div class="text-center">
             <div class="img-fluid mb-4">
               <img src="../assets/img/icons/data_analyst.svg" alt="">
             </div>
             <h5>Data Analyst</h5>
           </div>
         </div>

       </div>
     </div> <!-- .container -->
   </div> <!-- .page-section -->

   <div class="page-section">
     <div class="container">
       <div class="text-center">
         <h2 class="title-section">Popular Products</h2>
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
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 py-3">
           <h2 class="title-section">Shop The Brands</h2>
         </div>
         <div class="col-md-6 py-3 text-md-right">
           <a href="portfolio.html" class="btn btn-outline-primary">Shop Now <span
               class="mai-arrow-forward ml-2"></span></a>
         </div>
       </div>

       <div class="row mt-3">
         <div class="col-lg-4 py-3">
           <div class="portfolio">
             <a href="../assets/img/portfolio/work-1.jpg" data-fancybox="portfolio">
               <img src="../assets/img/portfolio/work-1.jpg" alt="">
             </a>
           </div>
         </div>
         <div class="col-lg-4 py-3">
           <div class="portfolio">
             <a href="../assets/img/portfolio/work-2.jpg" data-fancybox="portfolio">
               <img src="../assets/img/portfolio/work-2.jpg" alt="">
             </a>
           </div>
         </div>
         <div class="col-lg-4 py-3">
           <div class="portfolio">
             <a href="../assets/img/portfolio/work-3.jpg" data-fancybox="portfolio">
               <img src="../assets/img/portfolio/work-3.jpg" alt="">
             </a>
           </div>
         </div>
         <div class="col-lg-4 py-3">
           <div class="portfolio">
             <a href="../assets/img/portfolio/work-4.jpg" data-fancybox="portfolio">
               <img src="../assets/img/portfolio/work-4.jpg" alt="">
             </a>
           </div>
         </div>
         <div class="col-lg-4 py-3">
           <div class="portfolio">
             <a href="../assets/img/portfolio/work-5.jpg" data-fancybox="portfolio">
               <img src="../assets/img/portfolio/work-5.jpg" alt="">
             </a>
           </div>
         </div>
         <div class="col-lg-4 py-3">
           <div class="portfolio">
             <a href="../assets/img/portfolio/work-6.jpg" data-fancybox="portfolio">
               <img src="../assets/img/portfolio/work-6.jpg" alt="">
             </a>
           </div>
         </div>
       </div>
     </div> <!-- .container -->
   </div> <!-- .page-section -->

   <!-- Testimonials -->
   <div class="page-section">
     <div class="container">
       <div class="owl-carousel testimonial-carousel">
         <div class="card-testimonial">
           <div class="content">
             The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by
             fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
           </div>
           <div class="author">
             <div class="avatar">
               <img src="../assets/img/person/person_1.jpg" alt="">
             </div>
             <div class="d-inline-block ml-2">
               <div class="author-name">Sam Watson</div>
               <div class="author-info">CEO - Mosh Elite Ltd.</div>
             </div>
           </div>
         </div>

         <div class="card-testimonial">
           <div class="content">
             The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by
             fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
           </div>
           <div class="author">
             <div class="avatar">
               <img src="../assets/img/person/person_2.jpg" alt="">
             </div>
             <div class="d-inline-block ml-2">
               <div class="author-name">Edinson Alfa</div>
               <div class="author-info">CEO - Mosh Elite Ltd.</div>
             </div>
           </div>
         </div>

         <div class="card-testimonial">
           <div class="content">
             The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by
             fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
           </div>
           <div class="author">
             <div class="avatar">
               <img src="../assets/img/person/person_3.jpg" alt="">
             </div>
             <div class="d-inline-block ml-2">
               <div class="author-name">May Halloway</div>
               <div class="author-info">CEO - Mosh Elite Ltd.</div>
             </div>
           </div>
         </div>

         <div class="card-testimonial">
           <div class="content">
             The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by
             fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
           </div>
           <div class="author">
             <div class="avatar">
               <img src="../assets/img/person/person_1.jpg" alt="">
             </div>
             <div class="d-inline-block ml-2">
               <div class="author-name">Sam Watson</div>
               <div class="author-info">CEO - Mosh Elite Ltd.</div>
             </div>
           </div>
         </div>

         <div class="card-testimonial">
           <div class="content">
             The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by
             fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
           </div>
           <div class="author">
             <div class="avatar">
               <img src="../assets/img/person/person_2.jpg" alt="">
             </div>
             <div class="d-inline-block ml-2">
               <div class="author-name">Edinson Alfa</div>
               <div class="author-info">CEO - Mosh Elite Ltd.</div>
             </div>
           </div>
         </div>

         <div class="card-testimonial">
           <div class="content">
             The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by
             fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
           </div>
           <div class="author">
             <div class="avatar">
               <img src="../assets/img/person/person_3.jpg" alt="">
             </div>
             <div class="d-inline-block ml-2">
               <div class="author-name">May Halloway</div>
               <div class="author-info">CEO - Mosh Elite Ltd.</div>
             </div>
           </div>
         </div>

       </div> <!-- .row -->
     </div> <!-- .container -->
   </div> <!-- .page-section -->

   <div class="page-section">
     <div class="container">
       <div class="text-center">
         <h2 class="title-section">Discount Section</h2>
       </div>

       <div class="row my-5 card-blog-row">
         <div class="col-lg-3 py-3">
           <div class="card-blog">
             <div class="header">
               <div class="entry-footer">
                 <div class="post-author">Sam Newman</div>
                 <a href="#" class="post-date">23 Apr 2020</a>
               </div>
             </div>
             <div class="body">
               <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
             </div>
             <div class="footer">
               <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
             </div>
           </div>
         </div>
         <div class="col-lg-3 py-3">
           <div class="card-blog">
             <div class="header">
               <div class="avatar">
                 <img src="../assets/img/person/person_1.jpg" alt="">
               </div>
               <div class="entry-footer">
                 <div class="post-author">Sam Newman</div>
                 <a href="#" class="post-date">23 Apr 2020</a>
               </div>
             </div>
             <div class="body">
               <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
               <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
             </div>
             <div class="footer">
               <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
             </div>
           </div>
         </div>
         <div class="col-lg-3 py-3">
           <div class="card-blog">
             <div class="header">
               <div class="avatar">
                 <img src="../assets/img/person/person_2.jpg" alt="">
               </div>
               <div class="entry-footer">
                 <div class="post-author">Sam Newman</div>
                 <a href="#" class="post-date">23 Apr 2020</a>
               </div>
             </div>
             <div class="body">
               <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
               <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
             </div>
             <div class="footer">
               <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
             </div>
           </div>
         </div>
         <div class="col-lg-3 py-3">
           <div class="card-blog">
             <div class="header">
               <div class="avatar">
                 <img src="../assets/img/person/person_3.jpg" alt="">
               </div>
               <div class="entry-footer">
                 <div class="post-author">Sam Newman</div>
                 <a href="#" class="post-date">23 Apr 2020</a>
               </div>
             </div>
             <div class="body">
               <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
               <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
             </div>
             <div class="footer">
               <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
             </div>
           </div>
         </div>
       </div>

       <div class="text-center">
         <a href="product.html" class="btn btn-primary">View More</a>
       </div>

     </div> <!-- .container -->
   </div> <!-- .page-section -->

   <div class="page-section mb-5">
     <div class="text-center">
       <div class="title-section">
         <h2><b> Shop The Brands</b></h2>
       </div>
     </div>
     <div class="container-fluid">
       <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
         <div class="py-3 px-5">
           <img src="../assets/img/clients/adidas.png" alt="" width="150px" height="100px">
         </div>
         <div class="py-3 px-5">
           <img src="../assets/img/clients/nike.png" alt="" width="150px" height="100px">
         </div>
         <div class="py-3 px-5">
           <img src="../assets/img/clients/reebok.png" alt="" width="150px" height="100px">
         </div>
         <div class="py-3 px-5">
           <img src="../assets/img/clients/skechers.png" alt="" width="150px" height="100px">
         </div>
         <div class="py-3 px-5">
           <img src="../assets/img/clients/puma.png" alt="" width="150px" height="100px">
         </div>
       </div>
     </div> <!-- .container-fluid -->
   </div> <!-- .page-section -->
{{-- @include('layouts.foo')  --}}
@endsection