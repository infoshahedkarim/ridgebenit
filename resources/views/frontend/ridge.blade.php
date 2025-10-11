@extends('layouts.frontend')
@section('title')
   @php
      $meta = $metas->firstWhere('title', 'Home');
    @endphp

   {{ $meta?->title ?? 'Home' }}
@endsection

@section('description')
   {{ $meta?->des ?? 'RidgebenIT' }}
@endsection

@section('keywords')
   {{ $meta?->keywords ?? 'Home, Ridgeben IT, ridgebenit' }}
@endsection
@section('page-title')
   User List
@endsection
@section('body')

   <body>
@endsection
   @section('content')

      <!-- banner-area-start -->
      <section class="banner__area tpbanner-space scene tpbanner-shape-wrapper fix"
         data-background="{{asset('assets/img/banner/banner-1.png')}}">
         <div class="video-background">
            <video autoplay loop muted>
               <source src="{{ asset('assets/video/bg.mp4') }}" type="video/mp4">
            </video>
         </div>



         <div class="tpbanner-shape-wrappers">
            <div class="container">
               <div class="row justify-content-start">
                  <div class="col-lg-8">
                     <div class="tpbanner__content text-start">
                        <h1 class="tpbanner__title mb-25 pb-10 floating">Empowering Business <br>with Digital Solutions!</h1>
                        <p class="tpbanner__subtitle floating"  style="color:#fff; font-size:22px;">We specialize in custom digital solutions that delegate your business,
                           ensuring development and success in the digital landscape.</p>

                        <!-- <h1 class="tpbanner__title mb-25 pb-10">Empowering Business <br>with Digital Solutions!</h1>

                        <p style="color: white; font-size: 22px;">We specialize in custom digital solutions that delegate
                           your business,
                           ensuring development and success in the digital landscape.</p> -->
                        <div class="tpbanner__search">
                           <div class="d-flex justify-content-start flex-wrap gap-sm-3 gap-2 mt-40">

                              <!-- <div class="tppricing-btn-two" style="text-align: center;">
                                                         <a href="{{route('about')}}" class="tp-btn-blue" style="display: inline-block; text-align: center;">Know More About Us</a>
                                                      </div> -->

                              <!-- <div class="tppricing-btn" style="text-align: center;">
                                                         <a href="#free-consult" class="tp-btn-blue" style="display: inline-block; text-align: center;">Book a Free Consultation</a>
                                                      </div> -->
                              <!-- <div class="tppricing-btn" style="text-align: center;">
                                                         <a href="#free-consult" class="tp-btn-blue" style="display: inline-block; text-align: center;">REQUEST A QUOTE</a>
                                                      </div> -->

                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="tpbanner-shape  d-none d-lg-block">
               <!-- <div class="tpbanner-shape-one">
                                          <img loading="lazy" class="layer" data-depth="0.3" src="{{asset('assets/img/shape/banner-plus.png')}}" alt="">
                                       </div> -->
               <!-- <div class="tpbanner-shape-three">
                                          <img loading="lazy" class="layer" data-depth="0.4" src="{{asset('assets/img/shape/banner-dots.png')}}" alt="">
                                       </div> -->
               <!-- <div class="tpbanner-shape-four">
                                          <img loading="lazy" src="{{asset('assets/img/shape/banner-archer.png')}}" alt="">
                                       </div> -->
               <!-- <div class="tpbanner-shape-five">
                                          <img loading="lazy" class="layer" data-depth="0.2" src="{{asset('assets/img/shape/hero01.png')}}" alt="">
                                       </div> -->
               <!-- <div class="tpbanner-shape-six">
                                          <img loading="lazy" class="layer" data-depth="0.3" src="{{asset('assets/img/shape/reactor.png')}}" alt="">
                                       </div> -->
            </div>
         </div>
         <div class="tpbanner-shape-wrappers tpbanner-shape-y scene-y">
            <div class="tpbanner-shape  d-none d-lg-block">
               <!-- <div class="tpbanner-shape-two">
                                          <img loading="lazy" class="layer" data-depth="0.6" src="{{asset('assets/img/shape/hand.png')}}" alt="">
                                       </div> -->
            </div>
         </div>
      </section>
      <style>
         /* Floating animation (gentle up-down motion) */
         .floating {
            animation: float 6s ease-in-out infinite;
         }
         @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
         }

         .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
         }

         .video-background video {
            width: 100%;
            height: 100%;
            object-fit: cover;
         }

         .tpbanner__title {
            opacity: 0;
            transform: translateY(-30px);
            animation: fadeDown 1s ease forwards 0.1s;
         }

         @keyframes fadeDown {
            to {
               opacity: 1;
               transform: translateY(0);
            }
         }

         .tpbanner__content {
            transition: transform 0.3s ease-out;
         }
      </style>
      <script>
         document.addEventListener("mousemove", e => {
            const x = e.clientX / window.innerWidth - 0.5;
            const y = e.clientY / window.innerHeight - 0.5;
            document.querySelector(".tpbanner__content").style.transform =
               `translate(${x * 20}px, ${y * 20}px)`;
         });
         document.addEventListener("mousemove", e => {
         const x = (e.clientX / window.innerWidth - 0.5) * 20; // horizontal depth
         const y = (e.clientY / window.innerHeight - 0.5) * 20; // vertical depth

         const content = document.querySelector(".tpbanner__content");
         if (content) {
            content.style.transform = `translate(${x}px, ${y}px)`;
         }
      });
      </script>

      <!-- banner-area-end -->

      <!-- home-page-area-start -->
      <!-- <div id="homeDemos" class="home-page__area pb-80 pt-100">
                                       <div class="container">
                                          <div class="row">
                                             <div class="col-xl-12">
                                                <div class="home-page__content-box text-center">
                                                   <div class="home-page__section-box text-center">
                                                      <h3 class="tp-section-title pb-10 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.3s; animation-name: tpfadeUp;">
                                                         Stunning <br> <span>Unique Home</span> pages
                                                      </h3>
                                                   </div>
                                                   <p class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeUp;">Beautiful, hand-crafted
                                                      designs to get you started. It ships with hundreds of layouts <br> and pre-designed page
                                                      templates</p>
                                                </div>
                                                <div class="home-page__features-box d-flex align-items-center justify-content-md-center justify-content-start wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.5s; animation-name: tpfadeUp;">
                                                   <div class="home-page__features-item d-flex align-items-center">
                                                      <i><svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M3.84574 8.6457L0.737013 5.31845C0.311411 4.86293 0.33584 4.14224 0.791359 3.71664C1.24688 3.29103 1.96757 3.31553 2.39317 3.77098L4.79111 6.33745L8.58673 2.79107C8.62086 2.75915 8.65653 2.7299 8.69341 2.70299L10.4783 1.03532C10.9339 0.609719 11.6546 0.634215 12.0802 1.08973C12.5058 1.54519 12.4813 2.26595 12.0258 2.69155L6.57417 7.78519L6.56835 7.77897L4.68255 9.54094L3.84574 8.6457Z" fill="#4260ff"></path>
                                                         </svg>
                                                      </i>
                                                      <span>Unique Design</span>
                                                   </div>
                                                   <div class="home-page__features-item d-flex align-items-center">
                                                      <i><svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M3.84574 8.6457L0.737013 5.31845C0.311411 4.86293 0.33584 4.14224 0.791359 3.71664C1.24688 3.29103 1.96757 3.31553 2.39317 3.77098L4.79111 6.33745L8.58673 2.79107C8.62086 2.75915 8.65653 2.7299 8.69341 2.70299L10.4783 1.03532C10.9339 0.609719 11.6546 0.634215 12.0802 1.08973C12.5058 1.54519 12.4813 2.26595 12.0258 2.69155L6.57417 7.78519L6.56835 7.77897L4.68255 9.54094L3.84574 8.6457Z" fill="#4260ff"></path>
                                                         </svg>
                                                      </i>
                                                      <span>Free Lifetime Update</span>
                                                   </div>
                                                   <div class="home-page__features-item d-flex align-items-center">
                                                      <i><svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M3.84574 8.6457L0.737013 5.31845C0.311411 4.86293 0.33584 4.14224 0.791359 3.71664C1.24688 3.29103 1.96757 3.31553 2.39317 3.77098L4.79111 6.33745L8.58673 2.79107C8.62086 2.75915 8.65653 2.7299 8.69341 2.70299L10.4783 1.03532C10.9339 0.609719 11.6546 0.634215 12.0802 1.08973C12.5058 1.54519 12.4813 2.26595 12.0258 2.69155L6.57417 7.78519L6.56835 7.77897L4.68255 9.54094L3.84574 8.6457Z" fill="#4260ff"></path>
                                                         </svg>
                                                      </i>
                                                      <span>Fast &amp; Friendly Support</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="home-page__thumb-wrap mb-40 text-center">
                                                   <a href="https://html.storebuild.shop/seomy-prv/seomy/index.html" target="_blank">
                                                      <div class="home-page__thumb" data-background="assets/img/demo-page/home-page-1.jpg" style="background-image: url(&quot;assets/img/3.jpg&quot;);"></div>
                                                   </a>
                                                   <div class="home-page__thumb-title">
                                                      <span>Marketing</span>
                                                      <h4><a href="https://html.storebuild.shop/seomy-prv/seomy/index.html" target="_blank">SEO Marketing</a></h4>
                                                   </div>
                                                   <div class="home-page__btn">
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index.html">Multi Page</a>
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-one-page.html">One Page</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="home-page__thumb-wrap mb-40 text-center">
                                                   <a href="https://html.storebuild.shop/seomy-prv/seomy/index-2.html" target="_blank">
                                                      <div class="home-page__thumb" data-background="assets/img/demo-page/home-page-2.jpg" style="background-image: url(&quot;assets/img/demo-page/home-page-2.jpg&quot;);"></div>
                                                   </a>
                                                   <div class="home-page__thumb-title">
                                                      <span>Analysis</span>
                                                      <h4><a href="https://html.storebuild.shop/seomy-prv/seomy/index-2.html" target="_blank">SEO Analysis</a></h4>
                                                   </div>
                                                   <div class="home-page__btn">
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-2.html">Multi Page</a>
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-2-one-page.html">One Page</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="home-page__thumb-wrap mb-40 text-center">
                                                   <a href="https://html.storebuild.shop/seomy-prv/seomy/index-3.html" target="_blank">
                                                      <div class="home-page__thumb" data-background="assets/img/demo-page/home-page-3.jpg" style="background-image: url(&quot;assets/img/demo-page/home-page-3.jpg&quot;);"></div>
                                                   </a>
                                                   <div class="home-page__thumb-title">
                                                      <span>SEO</span>
                                                      <h4><a href="https://html.storebuild.shop/seomy-prv/seomy/index-3.html" target="_blank">Business SEO</a></h4>
                                                   </div>
                                                   <div class="home-page__btn">
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-3.html">Multi Page</a>
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-3-one-page.html">One Page</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="home-page__thumb-wrap mb-40 text-center">
                                                   <a href="https://html.storebuild.shop/seomy-prv/seomy/index-4.html" target="_blank">
                                                      <div class="home-page__thumb" data-background="assets/img/demo-page/home-page-4.jpg" style="background-image: url(&quot;assets/img/demo-page/home-page-4.jpg&quot;);"></div>
                                                   </a>
                                                   <div class="home-page__thumb-title">
                                                      <span>Agency</span>
                                                      <h4><a href="https://html.storebuild.shop/seomy-prv/seomy/index-4.html" target="_blank">SEO Agency</a></h4>
                                                   </div>
                                                   <div class="home-page__btn">
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-4.html">Multi Page</a>
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-4-one-page.html">One Page</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="home-page__thumb-wrap mb-40 text-center">
                                                   <a href="https://html.storebuild.shop/seomy-prv/seomy/index-5.html" target="_blank">
                                                      <div class="home-page__thumb" data-background="assets/img/demo-page/home-page-5.jpg" style="background-image: url(&quot;assets/img/demo-page/home-page-5.jpg&quot;);"></div>
                                                   </a>
                                                   <div class="home-page__thumb-title">
                                                      <span>Campaign</span>
                                                      <h4><a href="https://html.storebuild.shop/seomy-prv/seomy/index-5.html" target="_blank">SEO Campaign</a></h4>
                                                   </div>
                                                   <div class="home-page__btn">
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-5.html">Multi Page</a>
                                                      <a class="menu-btn" href="https://html.storebuild.shop/seomy-prv/seomy/index-5-one-page.html">One Page</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="home-page__thumb-wrap mb-40 text-center">
                                                   <a href="https://html.storebuild.shop/seomy-prv/?storefront=envato-elements#">
                                                      <div class="home-page__thumb img-blur" data-background="assets/img/demo-page/home-page-6.jpg" style="background-image: url(&quot;assets/img/demo-page/home-page-6.jpg&quot;);"></div>
                                                   </a>
                                                   <div class="home-page__thumb-title">
                                                      <span>Business</span>
                                                      <h4><a href="https://html.storebuild.shop/seomy-prv/?storefront=envato-elements#">Coming Soon</a></h4>
                                                   </div>
                                                   <div class="home-page__btn">
                                                      <h5><a href="https://html.storebuild.shop/seomy-prv/?storefront=envato-elements#">Coming Soon</a></h5>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
      <!-- home-page-area-end -->



      <!-- choose-area-start -->
      <!-- <section class="choose-area tpchoose-bottom pt-80">
                                 <div class="container">
                                    <div class="portfolio-inner-2 text-center mb-50">
                                       <h2 class="portfolio-inner-2-head" style="color: #004a87">12+ Years Experiences</h2>
                                    </div>
                                 </div>
                              </section> -->

      <section class="choose-area tpchoose-bottom pt-80" style="background-color: #ffffffff;">
         <div class="container">
            <div class="portfolio-inner-2 text-center mb-50">
               <h2 class="portfolio-inner-2-head"
                  style="color: #004a87; font-size: 60px; font-weight: 700; padding-top: 20px;">12+ Years of
                  Experience</h2>
               <p class="portfolio-inner-2-desc"
                  style="font-size: 18px; color: #6c757d; margin-top: 15px; max-width: 600px; margin-left: auto; margin-right: auto;">
                  Our team brings over a decade of expertise in delivering high-quality digital solutions, ensuring we
                  always exceed your expectations.
               </p>
            </div>
         </div>
      </section>
      <!-- partners showcase sliding -->
      <div class="slider123 col-xl-12 pb-40">
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/11.png')}}" alt="Product 1"></div>
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/33.png')}}" alt="Product 3"></div>
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/44.png')}}" alt="Product 4"></div>
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/55.png')}}" alt="Product 5"></div>
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/66.png')}}" alt="Product 6"></div>
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/77.png')}}" alt="Product 7"></div>
         <div class="card123"><img loading="lazy" src="{{asset('assets/partners/88.png')}}" alt="Product 8"></div>
      </div>






      <!-- Brand Showcase Slider Section -->
      <!-- Brand Showcase Section -->
      {{--
      <section class="brand-showcase-section pt-80 pb-80" style="background-color: #f8fafb;">
         <div class="container">
            <!-- <div class="text-center mb-50">
                                 <h2 class="section-title" style="color: #004a87; font-size: 36px; font-weight: 700;">Brands We Work With</h2>
                                 <p class="section-subtitle" style="font-size: 18px; color: #6c757d; margin-top: 15px; max-width: 600px; margin-left: auto; margin-right: auto;">
                                   These are some of the leading brands we have worked with to create successful digital solutions.
                                 </p>
                               </div> -->

            <!-- Brand Slider -->
            <div class="brand-slider-container col-xl-12 pb-40">
               <div class="brand-slider-content">
                  <!-- Add your brand logos here -->
                  <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/1.jpg')}}"
                        alt="Brand 1"></div>
                  <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/3.webp')}}"
                        alt="Brand 2"></div>
                  <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/4.png')}}"
                        alt="Brand 3"></div>
                  <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/5.png')}}"
                        alt="Brand 4"></div>
                  <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/6.png')}} "
                        alt="Brand 5"></div>
                  <!-- <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/7.png')}}" alt="Brand 6"></div> -->
                  <div class="brand-slider-item">
                     <img loading="lazy" src="{{asset('assets/partners/7.png')}}" alt="Brand 6"
                        style="width: 80px; height: auto; object-fit: contain; object-position: center;">
                  </div>
                  <div class="brand-slider-item"><img loading="lazy" src="{{asset('assets/partners/8.webp')}}"
                        alt="Brand 7"></div>
               </div>
            </div>
         </div>
      </section>
      --}}
      <!-- Brand Showcase Section End -->





      <!-- <section class="about-area p-relative pb-40">
                                    <div class="fix">
                                       <div class="container-fluid">
                                          <div class="row align-items-center">
                                             <div class="col-lg-12">
                                                <div class="about-inner-slide tpabout-inner-active" style="display: flex; gap: 5px;">
                                                   <div class="about-inner-item">
                                                      <img loading="lazy" src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%;"> 
                                                   </div>
                                                   <div class="about-inner-item">
                                                      <img loading="lazy" src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                                                   </div>
                                                   <div class="about-inner-item">
                                                      <img loading="lazy" src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                                                   </div>
                                                   <div class="about-inner-item">
                                                      <img loading="lazy" src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                                                   </div>
                                                   <div class="about-inner-item">
                                                      <img loading="lazy" src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                                                   </div>
                                                   <div class="about-inner-item">
                                                      <img loading="lazy" src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section> -->


      <!-- choose-area-start -->

      <!-- <section class="rb-about-area py-5">
                             <div class="container">
                               <div class="row align-items-center">
                                 <div class="col-lg-6">
                                   <div class="rb-about-thumb position-relative mb-4 mb-lg-0">
                                     <img src="{{ asset('assets/img/banner/front.png') }}" alt="About Ridgeben Team" class="img-fluid rb-about-img-border">
                                     <div class="rb-about-shapes">
                                       <img src="{{ asset('assets/img/shape/choose-shape-1.png') }}" alt="Shape 1" class="shape-one d-none d-md-block">
                                       <img src="{{ asset('assets/img/shape/choose-shape-2.png') }}" alt="Shape 2" class="shape-two">
                                       <img src="{{ asset('assets/img/shape/choose-shape-3.png') }}" alt="Shape 3" class="shape-three d-none d-lg-block">
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-lg-6">
                                   <div class="rb-about-content">
                                     <div class="rb-section-content">
                                       <div class="rb-subtitle mb-3">
                                         <span>ABOUT US</span>
                                       </div>
                                       <h2 class="rb-title mb-4">We offer experiences,<br> more than services.</h2>
                                       <p>
                                         At Ridgeben, we specialize in delivering tailor-made web and digital solutions
                                         with a strong focus on ROI and long-term value. With over 100 successful projects
                                         across 7 countries, we combine global perspective with local expertise to
                                         enhance your brand’s digital presence. Let’s build something great—together.
                                       </p>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </section> -->
      <!-- About US is Here Also -->



      <section class="choose-area tpchoose-bottom pb-40" style="background-color: white;">

         <div class="container">

            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-5">
                  <div class="tpchoose-thumb mt-30 p-relative mb-50">
                     <img loading="lazy" class="tpchoose-border-anim" src="assets/img/banner/front.png" alt="">
                     <div class="tpchoose-shape">
                        <div class="tpchoose-shape-one d-none d-md-block">
                           <img loading="lazy" src="assets/img/shape/choose-shape-1.png" alt="">
                        </div>
                        <div class="tpchoose-shape-two">
                           <img loading="lazy" src="assets/img/shape/choose-shape-2.png" alt="">
                        </div>
                        <div class="tpchoose-shape-three">
                           <img loading="lazy" src="assets/img/shape/choose-shape-3.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-7">
                  <div class="tpchoose-wrapper mb-30">
                     <div class="tpsection__content mb-50">
                        <div class="tpbanner__sub-title mb-15">
                           <span>About Us</span>
                           <i>
                              <svg width="130" height="42" viewBox="0 0 130 42" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <rect y="0.941895" width="130" height="40.9551" fill="url(#pattern6)"
                                    fill-opacity="0.08" />
                                 <defs>
                                    <pattern id="pattern6" patternContentUnits="objectBoundingBox" width="1" height="1">
                                       <use xlink:href="#image0_868_3547"
                                          transform="translate(-0.0587762 0.0123052) scale(0.00611916 0.0198269)" />
                                    </pattern>
                                    <image id="image0_868_3547" width="180" height="50"
                                       xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                                 </defs>
                              </svg>
                           </i>
                        </div>
                        <!-- <h2 class="tpsection__title mb-15">We offer experiences,<br> more than services.</h2>
                                                <p>
                                                   We are experts in developing professionally customized web solutions and providing digital
                                                   solutions.
                                                   We have completed over 100 successful projects in seven countries, combining global insights
                                                   with local knowledge.
                                                   In Ridgeben, We offer high-quality and expert solutions to enhance your online visibility.
                                                   Moreover, a seamless process to ensure your business stands out.
                                                </p> -->
                        <h2 class="tpsection__title mb-15">We offer experiences,<br> more than services.</h2>
                        <ul class="tpabout__list">
                           <li><strong>Over 10 years of experience</strong> – Established in 2014 with a solid track record
                              in IT and software development.</li>
                           <li><strong>150+ successful projects</strong> – Completed across 7+ countries, showing global
                              reach and reliability.</li>
                           <li><strong>Wide range of services</strong> – Offers software, web development, mobile
                              application, e-commerce, UI/UX design, cloud computing, and digital marketing solutions.</li>
                           <li><strong>Strong focus on quality</strong> – Emphasizes security, performance, scalability,
                              and user-friendly solutions.</li>
                           <li><strong>Client satisfaction</strong> – Positive client testimonials highlighting
                              professionalism, creativity, and responsiveness.</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- about us section css & js START -->
      <style>
         /* Base list styling */
         .tpabout__list {
            list-style: none;
            padding-left: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 14px;
         }

         /* Each list item */
         .tpabout__list li {
            position: relative;
            padding-left: 38px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            line-height: 1.8;
            color: #2a2a2a;
            font-size: 18px;
            padding-top: 12px;
            padding-bottom: 12px;
            padding-right: 14px;
         }

         /* Animated icon */
         .tpabout__list li::before {
            content: "";
            position: absolute;
            left: 12px;
            top: 18px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #004A87;
            box-shadow: 0 0 0 rgba(0, 74, 135, 0.4);
            animation: pulse 2s infinite;
            transition: transform 0.3s ease;
         }

         /* Hover effect */
         .tpabout__list li:hover {
            transform: translateX(6px);
            box-shadow: 0 4px 14px rgba(0, 74, 135, 0.15);
         }

         .tpabout__list li:hover::before {
            transform: scale(1.3);
            background-color: #0074D9;
            box-shadow: 0 0 10px rgba(0, 116, 217, 0.5);
         }

         /* Text emphasis */
         .tpabout__list strong {
            color: #004A87;
            font-weight: 700;
         }

         /* Soft entry animation */
         .tpabout__list li {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
         }

         .tpabout__list li.visible {
            opacity: 1;
            transform: translateY(0);
         }

         /* Pulse keyframes */
         @keyframes pulse {
            0% {
               box-shadow: 0 0 0 0 rgba(0, 74, 135, 0.5);
            }

            70% {
               box-shadow: 0 0 0 10px rgba(0, 74, 135, 0);
            }

            100% {
               box-shadow: 0 0 0 0 rgba(0, 74, 135, 0);
            }
         }

         /* Responsive adjustments */
         @media (max-width: 768px) {
            .tpabout__list li {
               font-size: 15px;
               padding-left: 32px;
            }

            .tpabout__list li::before {
               left: 10px;
               top: 16px;
            }
         }
      </style>

      <script>
         // Reveal list items smoothly on scroll
         const aboutListItems = document.querySelectorAll('.tpabout__list li');
         const aboutObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
               if (entry.isIntersecting) {
                  entry.target.classList.add('visible');
                  aboutObserver.unobserve(entry.target);
               }
            });
         }, { threshold: 0.2 });

         aboutListItems.forEach(item => aboutObserver.observe(item));
      </script>
      <!-- about us section css & js END -->







      <!-- choose-area-end -->

      {{--
      <!-- this is dynamic, will change later nicher ta apatoto static kortesi -->
      <!-- services-area-start -->

      <section class="services-area pb-110">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tpsection__content text-center mb-70">
                     <div class="tpbanner__sub-title mb-15">
                        <span>Our Services</span>
                        <i>
                           <svg width="126" height="37" viewBox="0 0 126 37" fill="none" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink">
                              <rect width="126" height="37" fill="url(#pattern4)" fill-opacity="0.08" />
                              <defs>
                                 <pattern id="pattern4" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_859_2751"
                                       transform="translate(-0.0507936) scale(0.00603175 0.0205405)" />
                                 </pattern>
                                 <image id="image0_859_2751" width="180" height="50"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                              </defs>
                           </svg>
                        </i>
                     </div>
                     <h2 class="tpsection__title mb-15">ROI-Oriented, Innovative and Sustainable</h2>
                     <h2 class="tpsection__title mb-15">Digital Solutions</h2>
                  </div>
                  <div class="tpservices">
                     <div class="tpservices-list">


                        <ul>
                           @foreach($services as $service)
                           <li>
                              <div class="tpservices-wrapper tpservices-item3">
                                 <div class="tpservices-img mb-35">
                                    <a href="{{route('page1', $service->slug)}}"> <img loading="lazy"
                                          src="{{ asset('storage/' . $service->icon) }}" alt="" style="width:35%"></a>
                                 </div>
                                 <div class="tpservices-content">
                                    <h4 class="tpservices-title"><a
                                          href="{{route('page1', $service->slug)}}">{{$service->title}}</a></h4>
                                 </div>
                              </div>
                           </li>

                           <!-- <li>
                                                      <div class="tpservices-wrapper tpservices-item2">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/2.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('websitedev')}}">Website Development</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper tpservices-item3">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/3.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('dm')}}">Digital Marketing</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper tpservices-item4">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/4.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('cloudsol')}}">Cloud Solutions</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper tpservices-item5">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/5.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('pa')}}">Productivity App</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper tpservices-item6">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/6.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('email')}}">Email and Collaboration</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper tpservices-item3">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/7.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('cs')}}">Security Solutions</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper tpservices-item2">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/8.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('webhost')}}">Web Hosting</a></h4>
                                                         </div>
                                                      </div>
                                                   </li>

                                                   <li>
                                                      <div class="tpservices-wrapper">
                                                         <div class="tpservices-img mb-35">
                                                            <img loading="lazy" src="{{asset('assets/icon/9.png')}}" alt="" style="width:35%">
                                                         </div>
                                                         <div class="tpservices-content">
                                                            <h4 class="tpservices-title"><a href="{{route('manageservices')}}">Manage Services</a></h4>
                                                         </div>
                                                      </div>
                                                   </li> -->
                           @endforeach
                        </ul>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- services-area-end -->
      --}}

      <!-- services-area-start STATIC For Now -->
      {{--
      <section class="services-section pb-110">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="services-header text-center mb-70">
                     <div class="services-subtitle mb-15"><span>Our Services</span></div>
                     <h2 class="services-title mb-15">ROI-Oriented, Innovative and Sustainable</h2>
                     <h2 class="services-title mb-15">Digital Solutions</h2>
                  </div>

                  <div class="services-list">
                     <ul class="services-grid">

                        <!-- Software Development & Engineering -->
                        <li class="service-item">
                           <a class="service-box"
                              href="https://www.ridgebenit.com/services/software-development-engineering">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-software"></use>
                                 </svg> <!-- Code Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">Software Development & Engineering</h4>
                                 <p>Custom Software, ERP/CRM, Web Apps, Mobile Apps, Legacy System Modernization,
                                    Microservices</p>
                              </div>
                           </a>
                        </li>

                        <!-- Digital & Online Services -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/digital-online-services">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-marketing"></use>
                                 </svg> <!-- Marketing Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">Digital & Online Services</h4>
                                 <p>Web Design, Digital Marketing (SEO, SEM, SMM), E-commerce, Content Management, Social
                                    Media</p>
                              </div>
                           </a>
                        </li>

                        <!-- Cloud Computing Services -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/cloud-computing-services">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-cloud"></use>
                                 </svg> <!-- Cloud Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">Cloud Computing Services</h4>
                                 <p>Cloud Migration (AWS, Azure), Hybrid & Multi-Cloud, Cloud Security, Serverless
                                    Computing</p>
                              </div>
                           </a>
                        </li>

                        <!-- DevOps & IT Operations -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/devops-it-operations">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-devops"></use>
                                 </svg> <!-- DevOps Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">DevOps & IT Operations</h4>
                                 <p>CI/CD, Containerization, IaC, Performance Monitoring, IT Strategy, Managed IT Support
                                 </p>
                              </div>
                           </a>
                        </li>

                        <!-- Cybersecurity Services -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/cybersecurity-services">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-cybersecurity"></use>
                                 </svg> <!-- Shield Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">Cybersecurity Services</h4>
                                 <p>VAPT, MSSP, IAM, Endpoint Protection, SOC, Data Encryption</p>
                              </div>
                           </a>
                        </li>

                        <!-- Data & Analytics Services -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/data-analytics-services">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-data-analytics"></use>
                                 </svg> <!-- Data Analytics Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">Data & Analytics Services</h4>
                                 <p>Big Data, BI, Predictive Analytics, Machine Learning, NLP, Data Warehousing</p>
                              </div>
                           </a>
                        </li>

                        <!-- IT Infrastructure & Networking -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/it-infrastructure-networking">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-web"></use>
                                 </svg> <!-- Networking Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">IT Infrastructure & Networking</h4>
                                 <p>Network Design, Data Center Management, Virtualization, Disaster Recovery</p>
                              </div>
                           </a>
                        </li>

                        <!-- AI & Automation Services -->
                        <li class="service-item">
                           <a class="service-box" href="https://www.ridgebenit.com/services/ai-automation-services">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-ai"></use>
                                 </svg> <!-- AI/ML Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">AI & Automation Services</h4>
                                 <p>AI Model Development, Chatbots, Workflow Automation, AI Recommendations</p>
                              </div>
                           </a>
                        </li>

                        <!-- Business Process Outsourcing (BPO) -->
                        <li class="service-item">
                           <a class="service-box"
                              href="https://www.ridgebenit.com/services/business-process-outsourcing-bpo">
                              <div class="service-icon" aria-hidden="true">
                                 <svg class="service-svg">
                                    <use xlink:href="#icon-ecommerce"></use>
                                 </svg> <!-- BPO Icon -->
                              </div>
                              <div class="service-content">
                                 <h4 class="service-title">Business Process Outsourcing (BPO)</h4>
                                 <p>Customer Support, Technical Support, Telemarketing, Back-Office Operations</p>
                              </div>
                           </a>
                        </li>

                     </ul>
                  </div>

               </div>
            </div>
         </div>
      </section>
      --}}


      <!-- services-area-end -->

      <!-- abc -->
      <!-- <section class="services-section pb-110">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="services-header text-center mb-70">
                                             <div class="services-subtitle mb-15"><span>Our Services</span></div>
                                             <h2 class="services-title mb-15">ROI-Oriented, Innovative and Sustainable</h2>
                                             <h2 class="services-title mb-15">Digital Solutions</h2>
                                          </div>

                                          <div class="services-list">
                                             <ul class="services-grid">

                                                @foreach($services as $service)
                                                   <li class="service-item">
                                                      <a class="service-box" href="{{ route('page1', $service->slug) }}">
                                                         <div class="service-icon" aria-hidden="true">
                                                            {{-- SVG icon or uploaded icon --}}
                                                            @if($service->icon_type === 'svg')
                                                               <svg class="service-svg">
                                                                  <use xlink:href="#{{ $service->icon }}"></use>
                                                               </svg>
                                                            @else
                                                               <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}"
                                                                  style="width:40px; height:40px;">
                                                            @endif
                                                         </div>
                                                         <div class="service-content">
                                                            <h4 class="service-title">{{ $service->title }}</h4>
                                                            <p>{{ $service->short_text }}</p>
                                                         </div>
                                                      </a>
                                                   </li>
                                                @endforeach

                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>

                              <style>
                                 /* ---- Base tokens (optional) ---- */
                                 :root {
                                    --card-bg: #fff;
                                    --card-border: #e9ecef;
                                    --card-shadow: 0 6px 24px rgba(16, 24, 40, .06);
                                    --card-shadow-hover: 0 10px 30px rgba(16, 24, 40, .12);
                                    --brand: #0f62fe;
                                    --text: #101828;
                                    --muted: #667085;
                                 }

                                 /* Section wrapper */
                                 .services-section {
                                    overflow: hidden;
                                 }

                                 /* ===== Responsive grid (FIXED) ===== */
                                 .services-grid {
                                    list-style: none;
                                    margin: 0;
                                    padding: 0;
                                    display: grid;
                                    gap: 18px;
                                    grid-template-columns: repeat(2, minmax(0, 1fr));
                                    /* phones: 2 cols */
                                 }

                                 /* Tablets (≥768px): 3 cols */
                                 @media (max-width:768px) {
                                    .services-grid {
                                       grid-template-columns: repeat(3, minmax(0, 1fr));
                                    }
                                 }


                                 /* ---- Card ---- */
                                 .service-item {
                                    height: 100%;
                                 }

                                 .service-box {
                                    display: flex;
                                    gap: 16px;
                                    align-items: flex-start;
                                    height: 100%;
                                    padding: 18px;
                                    background: var(--card-bg);
                                    border: 1px solid var(--card-border);
                                    border-radius: 16px;
                                    box-shadow: var(--card-shadow);
                                    text-decoration: none;
                                    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
                                    will-change: transform;
                                 }

                                 .service-box:hover {
                                    transform: translateY(-4px);
                                    box-shadow: var(--card-shadow-hover);
                                    border-color: rgba(15, 98, 254, .25);
                                 }

                                 .service-box:focus-visible {
                                    outline: 3px solid color-mix(in oklab, var(--brand) 30%, white);
                                    outline-offset: 2px;
                                 }

                                 /* ---- Icon area ---- */
                                 .service-icon {
                                    flex: 0 0 auto;
                                    inline-size: 48px;
                                    block-size: 48px;
                                    display: grid;
                                    place-items: center;
                                    border-radius: 12px;
                                    background: color-mix(in oklab, var(--brand) 7%, white);
                                 }

                                 .service-icon img,
                                 .service-svg {
                                    inline-size: 28px;
                                    block-size: 28px;
                                    max-inline-size: 100%;
                                    max-block-size: 100%;
                                 }

                                 /* ---- Text ---- */
                                 .service-content {
                                    flex: 1 1 auto;
                                    min-width: 0;
                                 }

                                 .service-title {
                                    color: var(--text);
                                    font-size: clamp(1rem, 1vw + .6rem, 1.15rem);
                                    line-height: 1.25;
                                    margin: 0 0 6px;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                 }

                                 .service-content p {
                                    color: var(--muted);
                                    font-size: .95rem;
                                    line-height: 1.5;
                                    margin: 0;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 3;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                 }

                                 /* Respect reduced motion */
                                 @media (prefers-reduced-motion: reduce) {
                                    .service-box {
                                       transition: none;
                                    }

                                    .service-box:hover {
                                       transform: none;
                                    }
                                 }

                                 @media (max-width:359px) {
                                    .services-grid {
                                       grid-template-columns: 1fr;
                                    }
                                 }
                              </style> -->

      <!-- Make sure you have this in your <head> -->
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

      <section class="services-section pb-110">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">

                  <div class="services-header text-center mb-70">
                     <div class="services-subtitle mb-15"><span>Our Services</span></div>
                     <h2 class="services-title mb-15">ROI-Oriented, Innovative and Sustainable</h2>
                     <h2 class="services-title mb-15">Digital Solutions</h2>
                  </div>

                  <div class="custom-services-list">
                     <ul class="custom-services-grid">

                        @foreach($services as $service)
                           <li class="custom-service-item">
                              <a class="custom-service-box" href="{{ route('page1', $service->slug) }}">
                                 <div class="custom-service-icon" aria-hidden="true">
                                    @if($service->icon_type === 'svg')
                                       <svg class="custom-service-svg" role="img" aria-label="{{ $service->title }} icon">
                                          <use xlink:href="#{{ $service->icon }}"></use>
                                       </svg>
                                    @else
                                       <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" width="40"
                                          height="40" loading="lazy">
                                    @endif
                                 </div>

                                 <div class="custom-service-content">
                                    <h4 class="custom-service-title">{{ $service->title }}</h4>
                                    <p class="custom-service-desc">{{ $service->short_text }}</p>
                                 </div>
                              </a>
                           </li>
                        @endforeach

                     </ul>
                  </div>

               </div>
            </div>
         </div>
      </section>

      <style>
         /* --------- Design tokens --------- */
         :root {
            --card-bg: #fff;
            --card-border: #e9ecef;
            --card-shadow: 0 6px 24px rgba(16, 24, 40, .06);
            --card-shadow-hover: 0 10px 30px rgba(16, 24, 40, .12);
            --brand: #0f62fe;
            --text: #101828;
            --muted: #667085;
         }

         /* wrapper */
         .services-section {
            overflow: hidden;
         }

         /* ===== Responsive grid (mobile-first) ===== */
         .custom-services-grid {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 18px;
            grid-template-columns: repeat(2, 1fr);
            /* ✅ mobile: 2 cols */
         }

         /* Tiny phones */
         @media (max-width:360px) {
            .custom-services-grid {
               grid-template-columns: 1fr;
            }

            /* 1 col */
         }

         /* Tablets (≥768px) */
         @media (min-width:768px) {
            .custom-services-grid {
               grid-template-columns: repeat(3, 1fr);
            }

            /* 3 cols */
         }

         /* Each grid item */
         .custom-service-item {
            height: 100%;
         }

         /* ===== Card (icon top → title → description) ===== */
         .custom-service-box {
            display: flex;
            flex-direction: column;
            /* stack */
            align-items: center;
            /* center icon & text */
            text-align: center;
            gap: 12px;
            height: 100%;
            padding: 22px 18px;
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 16px;
            box-shadow: var(--card-shadow);
            text-decoration: none;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            will-change: transform;
         }

         .custom-service-box:hover {
            transform: translateY(-4px);
            box-shadow: var(--card-shadow-hover);
            border-color: rgba(15, 98, 254, .25);
         }

         .custom-service-box:focus-visible {
            outline: 3px solid color-mix(in oklab, var(--brand) 30%, white);
            outline-offset: 2px;
         }

         /* Icon */
         .custom-service-icon {
            width: 60px;
            height: 60px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: color-mix(in oklab, var(--brand) 7%, white);
            flex: 0 0 auto;
         }

         .custom-service-icon img,
         .custom-service-svg {
            width: 32px;
            height: 32px;
            max-width: 100%;
            max-height: 100%;
         }

         /* Text */
         .custom-service-content {
            width: 100%;
            min-width: 0;
         }

         .custom-service-title {
            color: var(--text);
            font-size: clamp(1rem, 1vw + .6rem, 1.5rem);
            font-weight: 600;
            line-height: 1.25;
            margin: 6px 0 4px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
         }

         .custom-service-desc {
            color: var(--muted);
            font-size: .95rem;
            line-height: 1.55;
            margin: 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
         }

         /* Respect reduced motion */
         @media (prefers-reduced-motion: reduce) {
            .custom-service-box {
               transition: none;
            }

            .custom-service-box:hover {
               transform: none;
            }
         }
      </style>

      <!-- xyz -->







      <!-- funfact-area-start -->
      {{--
      <section class="funfact-area pb-80">
         <div class="container">
            <div class="tpfunfact p-relative">
               <div class="tpfunfact-bg theme-bg-2" data-background="{{asset('assets/img/shape/funfact-1.png')}}">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="tpsection__content feature-white-section text-center">
                           <div class="tpbanner__sub-title mb-15">
                              <i>
                                 <svg width="150" height="36" viewBox="0 0 150 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect x="0.00012207" width="150" height="36" fill="url(#pattern0)"
                                       fill-opacity="0.1" />
                                    <defs>
                                       <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                          <use xlink:href="#image0_853_2637"
                                             transform="translate(-0.0507936) scale(0.00603175 0.0205405)" />
                                       </pattern>
                                       <image id="image0_853_2637" width="180" height="50"
                                          xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAAXNSR0IArs4c6QAAA8JJREFUeF7tnVFO41AMRa9TkIoEIqyA7GA6O2ALs9JZynR2UFZAEB9TCYhHfokhlSrkTqdpXd38pG2cxjk+eXnJjwWJlqcnrTFHfQE0CjSWuthacCuKWgU1FDUEtX33U/v4/atzFbSiaC1EBS2Gzxh+V+CxbANWAqzs8xuwuruS8pnLaRCQ00gDcFlnHRaVoNEK90VSoDFpXeBTyXechwluopv8MOE7PHaKlVRo39ZY3t1JuVC4HJ7ApEKbtJeXaLoZFiapAPcqWLi4hz/dIx1hEN1kd+FVsJR3tNfXsjxSVmd52IMIvSGu4BtMXsXilEfZo1a3n+Isywiv+O3TGk5pdq/K3kI//dFmBjwIxd2dfnAPn9IM60eb6/sI//qKFac0nyDDQvuoiwoPNr8F8GAjb3kI43J0AuN5fBEeKOL7XN6mN68ztOf+EBsS+mWtv6BYHL1qTOC/EfA3NeVh1hZ/m9NPe579QB/b7YcOrT3obkvCL5ivErx8R62z7QOgdqhRbW4rb7B8Gd5k2Vd7a3Uzlx9b84gQevmjGoljDAlMReDmSrYOxrERmkJPVSceJ0iAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHAQqdo07MMkiAQgdBMSwHgZxCj/pvO+aNPtx7st/ostT38f7surTnf3P3wxKYTOiNdmHjhvCj5u9+quMm8B+nv0Z7Co0kraGo5TRuReatx/xCGFo716VXo6A++xbPh3V0p3/fT+i1/izNHK1/nZSmjqW3nQlp7Xvt87k3dNyFtjUpxRz1BdBsXAQmvjUtVdR2UfCOsAvVIXbom34zl+/b9g61dfuHw3KXIAHv0GsNKU3wSvu1CG6L8FKaUZ59x97xnb10xVU827qzu/wwcEYGTQodFO8Uwmwa5FMgG/krQWNdVcuI7xdAf+vspz/DtslyH08x+460RUY7/lR3dwo9WbWPeyB/JrAsbCq0TzY+zfT/iIyc+xxvl33/AiWjt0Jf7u62AAAAAElFTkSuQmCC" />
                                    </defs>
                                 </svg>
                              </i>
                           </div>
                           <h2 class="tpsection-title tpsection-title-white mb-15">We Believe In Our Success</h2>
                        </div>
                     </div>
                  </div>
                  <div class="tpfunfact-shape d-none d-md-block">
                     <div class="tpfunfact-shape-one"><img loading="lazy" src="{{asset('assets/img/shape/funfact-2.png')}}"
                           alt=""></div>
                     <div class="tpfunfact-shape-two"><img loading="lazy" src="{{asset('assets/img/shape/funfact-3.png')}}"
                           alt=""></div>
                  </div>
               </div>
               <div class="tpfunfact-box">
                  <div class="row justify-content-center">
                     <div class="col-lg-5">
                        <div class="tpfunfact-wrapper text-center mb-50">
                           <span class="tpfunfact-title">Duration</span>
                           <h5 class="tpfunfact-count mb-15">Fastest<span> Delivery</span></h5>
                           <div class="tpfunfact-tag">
                              <span><i><img loading="lazy" src="{{asset('assets/img/shape/funfact-icon-1.png')}}"
                                       alt=""></i>7Days Challenges</span>
                              <span><i><img loading="lazy" src="{{asset('assets/img/shape/funfact-icon-2.png')}}"
                                       alt=""></i>10+ Frameworks</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <div class="tpfunfact-wrapper text-center mb-50">
                           <span class="tpfunfact-title">Success Volume</span>
                           <h5 class="tpfunfact-count mb-15">150+<span> Projects</span></h5>
                           <div class="tpfunfact-tag">
                              <span><i><img loading="lazy" src="{{asset('assets/img/shape/funfact-icon-3.png')}}"
                                       alt=""></i>13+ Countries Served</span>
                              <span><i><img loading="lazy" src="{{asset('assets/img/shape/funfact-icon-4.png')}}"
                                       alt=""></i>36TB Data</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      --}}

      <section class="rb-funfact-area py-5">
         <div class="container">
            <div class="rb-funfact-box p-relative">
               <div class="rb-funfact-bg text-center text-white mb-5 p-5"
                  style="background-color: #001f3f; border-radius: 12px;">
                  <div class="rb-subtitle mb-3">
                     <span>ABOUT SUCCESS</span>
                  </div>
                  <h2 class="rb-title text-white">We Believe In Our Success</h2>
                  <div class="rb-funfact-shapes d-none d-md-block">
                     <img src="{{ asset('assets/img/shape/funfact-2.png') }}" alt="shape 1" class="rb-funfact-shape-1">
                     <img src="{{ asset('assets/img/shape/funfact-3.png') }}" alt="shape 2" class="rb-funfact-shape-2">
                  </div>
               </div>

               <div class="row justify-content-center">
                  <!-- Card 1 -->
                  <div class="col-md-6 col-lg-5 mb-4">
                     <div class="rb-funfact-card text-center p-4 shadow-sm h-100 bg-white rounded">
                        <span class="rb-funfact-label mb-2">Duration</span>
                        <h5 class="rb-funfact-count mb-3">Fastest <span>Delivery</span></h5>
                        <div class="rb-funfact-tags d-flex flex-wrap justify-content-center gap-3">
                           <span class="badge bg-light text-dark px-3 py-2">
                              <img src="{{ asset('assets/img/shape/funfact-icon-1.png') }}" alt="" width="20" class="me-1">
                              7 Days Challenge
                           </span>
                           <span class="badge bg-light text-dark px-3 py-2">
                              <img src="{{ asset('assets/img/shape/funfact-icon-2.png') }}" alt="" width="20" class="me-1">
                              10+ Frameworks
                           </span>
                        </div>
                     </div>
                  </div>

                  <!-- Card 2 -->
                  <div class="col-md-6 col-lg-5 mb-4">
                     <div class="rb-funfact-card text-center p-4 shadow-sm h-100 bg-white rounded">
                        <span class="rb-funfact-label mb-2">Success Volume</span>
                        <h5 class="rb-funfact-count mb-3">150+ <span>Projects</span></h5>
                        <div class="rb-funfact-tags d-flex flex-wrap justify-content-center gap-3">
                           <span class="badge bg-light text-dark px-3 py-2">
                              <img src="{{ asset('assets/img/shape/funfact-icon-3.png') }}" alt="" width="20" class="me-1">
                              7+ Countries
                           </span>
                           <span class="badge bg-light text-dark px-3 py-2">
                              <img src="{{ asset('assets/img/shape/funfact-icon-4.png') }}" alt="" width="20" class="me-1">
                              36TB Data
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- funfact-area-end -->


      <!-- case-area-start -->
      {{--
      <section class="homepage-projects pt-60 pb-60">

         <div class="container">
            <div class="section-header text-center mb-50">
               <span class="section-subtitle">Have a look at</span>
               <h2 class="section-title">Our Projects</h2>
            </div>

            <div class="row">
               <!-- Project: Ajwah Tech  -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                     <div class="project-image-wrapper">
                        <img src="{{ asset('assets/img/website/Ajwah-Tech-Trusted-Gadget-Ecommerce-of-Bangladesh.png') }}"
                           alt="Ajwah Tech" loading="lazy" class="project-img">
                     </div>
                     <div class="project-content">
                        <h4 class="project-title">
                           <a href="https://ajwahtech.com/" target="_blank">Ajwah Tech</a>
                        </h4>
                        <!-- <p class="project-desc">Fully Dynamic Ecommerce Website</p>
                                       <div class="project-tags">
                                         <span class="tag">SEO</span>
                                         <span class="tag">Website Design</span>
                                       </div> -->
                     </div>
                  </div>
               </div>

               <!-- Project: Homeland Furniture  -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                     <div class="project-image-wrapper">
                        <img src="{{ asset('assets/img/website/Homeland-Furniture.png') }}" alt="Homeland Furniture"
                           loading="lazy" class="project-img">
                     </div>
                     <div class="project-content">
                        <h4 class="project-title">
                           <a href="https://homelandfurniturebd.com/" target="_blank">Homeland Furniture</a>
                        </h4>
                        <!-- <p class="project-desc">Business Website with HRM, AMS System</p>
                                       <div class="project-tags">
                                         <span class="tag">Website Design</span>
                                         <span class="tag">AMS, HRM</span>
                                       </div> -->
                     </div>
                  </div>
               </div>

               <!--  Project: EasternIT  -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                     <div class="project-image-wrapper">
                        <img src="{{ asset('assets/img/website/Leading-Retail-Computer-Shop-in-Bangladesh.png') }}"
                           alt="EasternIT" loading="lazy" class="project-img">
                     </div>
                     <div class="project-content">
                        <h4 class="project-title">
                           <a href="https://eit.com.bd/" target="_blank">EasternIT</a>
                        </h4>
                        <!-- <p class="project-desc">Blog Website</p>
                                       <div class="project-tags">
                                         <span class="tag">Digital Marketing</span>
                                         <span class="tag">Website Design</span>
                                       </div> -->
                     </div>
                  </div>
               </div>

               <!--  Project: Magnus Holdings Ltd.  -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                     <div class="project-image-wrapper">
                        <img src="{{ asset('assets/img/website/Magnus.png') }}" alt="Magnus Holdings Ltd." loading="lazy"
                           class="project-img">
                     </div>
                     <div class="project-content">
                        <h4 class="project-title">
                           <a href="https://magnusholdingsltd.com/" target="_blank">Magnus Holdings Ltd.</a>
                        </h4>
                        <!-- <p class="project-desc">Real Estate Website with AMS Solution</p>
                                       <div class="project-tags">
                                         <span class="tag">AMS, HRM</span>
                                         <span class="tag">Website Design</span>
                                       </div> -->
                     </div>
                  </div>
               </div>

               <!--  Project: DCON  -->
               <!-- <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image-wrapper">
                                       <img src="{{ asset('assets/img/website/Home-Dcon-Design-Studio.png') }}" alt="Kinglet Furniture" loading="lazy" class="project-img">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://dcon.com.bd/" target="_blank">Dcon Design Studio</a>
                                       </h4>
                                       <p class="project-desc">Dcon Design Studio</p>
                                       <div class="project-tags">
                                         <span class="tag">ERP</span>
                                         <span class="tag">Website Design</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div> -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card dcon-project">
                     <div class="project-image-wrapper">
                        <img src="{{ asset('assets/img/website/Home-Dcon-Design-Studio.png') }}" alt="Dcon Design Studio"
                           loading="lazy" class="project-img">
                     </div>
                     <div class="project-content">
                        <h4 class="project-title">
                           <a href="https://dcon.com.bd/" target="_blank">Dcon Design Studio</a>
                        </h4>
                        <!-- <p class="project-desc">Dcon Design Studio</p>
                                 <div class="project-tags">
                                   <span class="tag">ERP</span>
                                   <span class="tag">Website Design</span>
                                 </div> -->
                     </div>
                  </div>
               </div>


               <!--  Project: CTC Energy Sol.  -->
               <div class="col-lg-4 col-md-6 mb-4">
                  <div class="project-card">
                     <div class="project-image-wrapper">
                        <img src="{{ asset('assets/img/website/CTC-Company.png') }}" alt="CTC Energy Sol." loading="lazy"
                           class="project-img">
                     </div>
                     <div class="project-content">
                        <h4 class="project-title">
                           <a href="https://ctcenergysolution.com/" target="_blank">CTC Energy Sol.</a>
                        </h4>
                        <!-- <p class="project-desc">Business Website</p>
                                       <div class="project-tags">
                                         <span class="tag">Website Design</span>
                                       </div> -->
                     </div>
                  </div>
               </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-5">
               <a href="{{ route('about') }}" class="tp-btn-blue">Know More About Us</a>
            </div>
         </div>
      </section>
      --}}


      <!-- nicher the update korechilam but scrolling chilona upore new update korlam -->
      <!-- <section class="homepage-projects pt-60 pb-60">
                             <div class="container">
                               <div class="section-header text-center mb-50">
                                 <span class="section-subtitle">Have a look at</span>
                                 <h2 class="section-title">Our Projects</h2>
                               </div>

                               <div class="row">
                                 {{-- Project: Ajwah Tech --}}
                                 <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image">
                                       <img src="{{ asset('assets/img/website/ajwah.png') }}" alt="Ajwah Tech" loading="lazy">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://ajwahtech.com/" target="_blank">Ajwah Tech</a>
                                       </h4>
                                       <p class="project-desc">Fully Dynamic Ecommerce Website</p>
                                       <div class="project-tags">
                                         <span class="tag">SEO</span>
                                         <span class="tag">Website Design</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div>

                                 {{-- Project: Homeland Furniture --}}
                                 <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image">
                                       <img src="{{ asset('assets/img/website/homeland.png') }}" alt="Homeland Furniture" loading="lazy">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://homelandfurniturebd.com/" target="_blank">Homeland Furniture</a>
                                       </h4>
                                       <p class="project-desc">Business Website with HRM, AMS System</p>
                                       <div class="project-tags">
                                         <span class="tag">Website Design</span>
                                         <span class="tag">AMS, HRM</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div>

                                 {{-- Project: Jibonjoyi --}}
                                 <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image">
                                       <img src="{{ asset('assets/img/website/jibonjoyi.png') }}" alt="Jibonjoyi" loading="lazy">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://jj.c3bit.com/" target="_blank">Jibonjoyi</a>
                                       </h4>
                                       <p class="project-desc">Blog Website</p>
                                       <div class="project-tags">
                                         <span class="tag">Digital Marketing</span>
                                         <span class="tag">Website Design</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div>

                                 {{-- Project: Magpie Holdings Ltd. --}}
                                 <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image">
                                       <img src="{{ asset('assets/img/website/magpie.png') }}" alt="Magpie Holdings Ltd." loading="lazy">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://magpieholdingsltd.com/" target="_blank">Magpie Holdings Ltd.</a>
                                       </h4>
                                       <p class="project-desc">Real Estate Website with AMS Solution</p>
                                       <div class="project-tags">
                                         <span class="tag">AMS, HRM</span>
                                         <span class="tag">Website Design</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div>

                                 {{-- Project: Kinglet Furniture --}}
                                 <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image">
                                       <img src="{{ asset('assets/img/website/kinglet.png') }}" alt="Kinglet Furniture" loading="lazy">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://kingletbd.com/" target="_blank">Kinglet Furniture</a>
                                       </h4>
                                       <p class="project-desc">Furniture Website</p>
                                       <div class="project-tags">
                                         <span class="tag">ERP</span>
                                         <span class="tag">Website Design</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div>

                                 {{-- Project: CTC Energy Sol. --}}
                                 <div class="col-lg-4 col-md-6 mb-4">
                                   <div class="project-card">
                                     <div class="project-image">
                                       <img src="{{ asset('assets/img/website/CTC.png') }}" alt="CTC Energy Sol." loading="lazy">
                                     </div>
                                     <div class="project-content">
                                       <h4 class="project-title">
                                         <a href="https://ctcenergysolution.com/" target="_blank">CTC Energy Sol.</a>
                                       </h4>
                                       <p class="project-desc">Business Website</p>
                                       <div class="project-tags">
                                         <span class="tag">Website Design</span>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </div>

                               {{-- CTA Button --}}
                               <div class="text-center mt-5">
                                 <a href="{{ route('about') }}" class="tp-btn-blue">Know More About Us</a>
                               </div>
                             </div>
                           </section> -->


      {{--
      <section class="case-area pb-60 fix">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-8">
                  <div class="tpsection__wrapper mb-45">
                     <div class="tpbanner__sub-title mb-15">
                        <span>Have a look at</span>
                        <i>
                           <svg width="150" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink">
                              <rect width="150" height="40" fill="url(#pattern3)" fill-opacity="0.1" />
                              <defs>
                                 <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_859_3410"
                                       transform="translate(-0.0584971) scale(0.00611611 0.0203396)" />
                                 </pattern>
                                 <image id="image0_859_3410" width="180" height="50"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                              </defs>
                           </svg>
                        </i>
                     </div>
                     <h2 class="tpsection__title">Our Projects</h2>
                  </div>
               </div>

               <!-- <div class="col-lg-6 col-md-4">
                                          <div class="tpcase-arrow text-end">
                                             <div class="tpcase-nav p-relative">
                                                <button class="prev-slide prev-slide-case">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" fill="none"
                                                         viewBox="0 0 8 14">
                                                         <path fill-rule="evenodd"
                                                            d="M7.707.293a1 1 0 0 1 0 1.414L2.414 7l5.293 5.293a1 1 0 0 1-1.414 1.414l-6-6a1 1 0 0 1 0-1.414l6-6a1 1 0 0 1 1.414 0z"
                                                            fill="#9f9fa9"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                                <button class="next-slide next-slide-case">
                                                   <span>
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" fill="none"
                                                         viewBox="0 0 8 14">
                                                         <path fill-rule="evenodd"
                                                            d="M.293 13.707a1 1 0 0 1 0-1.414L5.586 7 .293 1.707A1 1 0 1 1 1.707.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414 0z"
                                                            fill="#9f9fa9"></path>
                                                      </svg>
                                                   </span>
                                                </button>
                                             </div>
                                          </div>
                                       </div> -->
            </div>
         </div>
         <!-- <div class="container">
                                    <div class="row grid">
                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/ajwah.png')}}" alt="" style="width: 150%">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://ajwahtech.com/">Ajwah Tech</a></div>
                                                <p>Fully Dynamic Ecommerces Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">SEO</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                        <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/crown.jpeg')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://crownbanquetingsuite.com/">Crown</a></div>
                                                <p>Fully Dynamic Ecommerces Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">Digital Marketing</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div> 

                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/fiber.png')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://www.fiberathome.net/">Fiber@home</a></div>
                                                <p>Fully Dynamic Ecommerces Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">SEO</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div> 

                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/homeland.png')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://homelandfurniturebd.com/">Homeland Furniture</a></div>
                                                <p>Business Website with HRM, AMS System</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">Website Design</a>
                                                   <a href="#">AMS, HRM</a>

                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/jibonjoyi.png')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://jj.c3bit.com/">Jibonjoyi</a></div>
                                                <p>Blog Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">Digital Marketing</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/magpie.png')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://magpieholdingsltd.com/">Magpie Holdings Ltd.</a></div>
                                                <p>Real Estate Website with AMS Solution</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">AMS, HRM</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                        <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/it.jpeg')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="http://ridgebenitinstitute.com/">Ridgeben IT Institute</a></div>
                                                <p>Fully Dynamic Ecommerces Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">Digital Marketing</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div> 

                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/kinglet.png')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://kingletbd.com/">Kinglet Furniture</a></div>
                                                <p>Furniture Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">ERP</a>
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                       <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
                                          <div class="portfolio-inner-item-2 mb-40">
                                             <div class="portfolio-inner-thumb-2">
                                                <img loading="lazy" src="{{asset('assets/img/website/CTC.png')}}" alt="">
                                             </div>
                                             <div class="portfolio-inner-content-2">
                                                <div class="portfolio-inner-title-2"><a href="https://ctcenergysolution.com/">CTC Energy Sol.</a></div>
                                                <p>Business Website</p>
                                                <div class="portfolio-inner-tag-2">
                                                   <a href="#">Website Design</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div> -->
         <div class="d-flex justify-content-center flex-wrap gap-sm-3 gap-2 mt-40">

            <div class="tppricing-btn" style="text-align: center;">
               <a href="{{route('about')}}" class="tp-btn-blue" style="display: inline-block; text-align: center;">Know
                  More About Us</a>
            </div>

         </div>
      </section>
      --}}

      <!-- case-area-end -->


      <!-- pricing-area-start -->
      <!-- <section class="pricing-area tp-price-parent pricing-shape-relative p-relative pt-40 pb-90">
                                 <div class="tpprice-shape-one d-none d-xl-block">
                                    <img loading="lazy" src="{{asset('assets/img/shape/hand-shape.png')}}" alt="triangle">
                                 </div>
                                 <div class="container">
                                    <div class="tppricing-wrapper">
                                       <div class="tppricing-shape">
                                          <div class="tppricing-shape-one d-none d-md-block">
                                             <img loading="lazy" src="{{asset('assets/img/shape/pricing-1-shape-1.png')}}" alt="">
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-lg-4">
                                             <div class="tpprice-switch p-relative mb-40">
                                                <div class="tpsection__content pt-65 mb-20">
                                                   <div class="tpbanner__sub-title mb-15">
                                                      <span>Our Pricing</span>
                                                      <i>
                                                         <svg width="114" height="37" viewBox="0 0 114 37" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <rect y="-0.000488281" width="114" height="37" fill="url(#pattern7)" fill-opacity="0.08" />
                                                            <defs>
                                                               <pattern id="pattern7" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                                  <use xlink:href="#image0_936_1479" transform="translate(-0.0507936) scale(0.00603175 0.0205405)" />
                                                               </pattern>
                                                               <image id="image0_936_1479" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                                                            </defs>
                                                         </svg>
                                                      </i>
                                                   </div>
                                                   <h2 class="tpsection__title mb-25">Choose Your Product.</h2>
                                                </div>
                                                <div class="tpprice-switch-wrapper">
                                                   <label class="toggler toggler--is-active" id="filt-monthly">Pay Monthly</label>
                                                   <div class="toggle">
                                                      <input type="checkbox" id="switcher" class="tp-check">
                                                      <b class="switch"></b>
                                                   </div>
                                                   <label class="toggler" id="filt-yearly">Pay Yearly</label>
                                                </div>
                                                <div class="tpprice-shape">
                                                   <div class="tpprice-shape-two d-none d-lg-block">
                                                      <img loading="lazy" src="{{asset('assets/img/shape/save.png')}}" alt="triangle">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-lg-8">
                                             <div class="tp-price-toggle">
                                                <div id="monthly" class="wrapper-full">
                                                   <div class="tpprice pl-40">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-6">
                                                            <div class="tppricing mb-30">
                                                               <div class="tppricing-head">
                                                                  <div class="tppricing-icon mb-30">
                                                                     <i><img loading="lazy" src="{{asset('assets/img/icon/pricing-icon-1.png')}}" alt=""></i>
                                                                  </div>
                                                                  <h3 class="tppricing-title mb-50">Diamond Pack</h3>
                                                               </div>
                                                               <div class="tppricing-content">
                                                                  <div class="tppricing-feature mb-45">
                                                                     <ul>
                                                                        <li><i class="fa-light fa-check"></i> 999 Email</li>
                                                                        <li><i class="fa-light fa-check"></i> 3gb Hosting</li>
                                                                        <li><i class="fa-light fa-check"></i> Email & Live chat.</li>
                                                                        <li class="tppricing-inactive"><i class="fa-light fa-check"></i> 1
                                                                           Domain</li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="tppricing-price mb-40">
                                                                     <h4 class="tppricing-price-title">$19.99</h4>
                                                                     <span>up to 10 user + 1.99 per user</span>
                                                                  </div>
                                                                  <div class="tppricing-btn-two">
                                                                     <a href="contact.html" class="tp-btn-blue">Get Started</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6">
                                                            <div class="tppricing mb-30">
                                                               <div class="tppricing-head">
                                                                  <div class="tppricing-icon mb-30">
                                                                     <i><img loading="lazy" src="{{asset('assets/img/icon/pricing-icon-2.png')}}" alt=""></i>
                                                                  </div>
                                                                  <h3 class="tppricing-title mb-50">Gold Plan</h3>
                                                               </div>
                                                               <div class="tppricing-content">
                                                                  <div class="tppricing-feature mb-45">
                                                                     <ul>
                                                                        <li><i class="fa-light fa-check"></i> Unlimited Email</li>
                                                                        <li><i class="fa-light fa-check"></i> 5gb Hosting</li>
                                                                        <li><i class="fa-light fa-check"></i> Email & Live chat.</li>
                                                                        <li class="tppricing-inactive"><i class="fa-light fa-check"></i> 3
                                                                           Domain</li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="tppricing-price mb-40">
                                                                     <h4 class="tppricing-price-title">$120.99</h4>
                                                                     <span>up to 10 user + 1.99 per user</span>
                                                                  </div>
                                                                  <div class="tppricing-btn">
                                                                     <a href="contact.html" class="tp-btn-blue">Get Started</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="tpprice-shape d-none d-lg-block">
                                                         <div class="tpprice-shape-two">
                                                            <img loading="lazy" src="{{asset('assets/img/shape/triangle.png')}}" alt="triangle">
                                                         </div>
                                                         <div class="tpprice-shape-three">
                                                            <img loading="lazy" src="{{asset('assets/img/shape/smill.png')}}" alt="triangle">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div id="hourly" class="wrapper-full hide">
                                                   <div class="tpprice pl-40">
                                                      <div class="row">
                                                         <div class="col-lg-6 col-md-6">
                                                            <div class="tppricing mb-30">
                                                               <div class="tppricing-head">
                                                                  <div class="tppricing-icon mb-30">
                                                                     <i><img loading="lazy" src="{{asset('assets/img/icon/pricing-icon-1.png')}}" alt=""></i>
                                                                  </div>
                                                                  <h3 class="tppricing-title mb-50">Diamond Pack</h3>
                                                               </div>
                                                               <div class="tppricing-content">
                                                                  <div class="tppricing-feature mb-45">
                                                                     <ul>
                                                                        <li><i class="fa-light fa-check"></i> 999 Email</li>
                                                                        <li><i class="fa-light fa-check"></i> 3gb Hosting</li>
                                                                        <li><i class="fa-light fa-check"></i> Email & Live chat.</li>
                                                                        <li class="tppricing-inactive"><i class="fa-light fa-check"></i> 1 Domain
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="tppricing-price mb-40">
                                                                     <h4 class="tppricing-price-title">$209.99</h4>
                                                                     <span>up to 10 user + 1.99 per user</span>
                                                                  </div>
                                                                  <div class="tppricing-btn-two">
                                                                     <a href="#" class="tp-btn-blue">Get Started</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6 col-md-6">
                                                            <div class="tppricing mb-30">
                                                               <div class="tppricing-head">
                                                                  <div class="tppricing-icon mb-30">
                                                                     <i><img loading="lazy" src="{{asset('assets/img/icon/pricing-icon-2.png')}}" alt=""></i>
                                                                  </div>
                                                                  <h3 class="tppricing-title mb-50">Gold Plan</h3>
                                                               </div>
                                                               <div class="tppricing-content">
                                                                  <div class="tppricing-feature mb-45">
                                                                     <ul>
                                                                        <li><i class="fa-light fa-check"></i> 499 Email</li>
                                                                        <li><i class="fa-light fa-check"></i> 2gb Hosting</li>
                                                                        <li><i class="fa-light fa-check"></i> Email & Live chat.</li>
                                                                        <li class="tppricing-inactive"><i class="fa-light fa-check"></i> 1 Domain
                                                                        </li>
                                                                     </ul>
                                                                  </div>
                                                                  <div class="tppricing-price mb-40">
                                                                     <h4 class="tppricing-price-title">$320.99</h4>
                                                                     <span>up to 10 user + 1.99 per user</span>
                                                                  </div>
                                                                  <div class="tppricing-btn">
                                                                     <a href="#" class="tp-btn-blue">Get Started</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="tpprice-shape d-none d-lg-block">
                                                         <div class="tpprice-shape-two">
                                                            <img loading="lazy" src="{{asset('assets/img/shape/triangle.png')}}" alt="triangle">
                                                         </div>
                                                         <div class="tpprice-shape-three">
                                                            <img loading="lazy" src="{{asset('assets/img/shape/smill.png')}}" alt="triangle">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section> -->
      <!-- pricing-area-end -->


      <!-- <section class="choose-area tpchoose-bottom">
                                 <div class="container">
                                    <div class="row align-items-center">
                                       <div class="col-xl-12 col-lg-12">
                                          <div class="tpchoose-wrapper mb-30">
                                             <div class="tpsection__content mb-50">
                                                <div class="tpbanner__sub-title mb-15">
                                                   <span>Why Choose us</span>
                                                   <i>
                                                      <svg width="130" height="42" viewBox="0 0 130 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                         <rect y="0.941895" width="130" height="40.9551" fill="url(#pattern6)" fill-opacity="0.08" />
                                                         <defs>
                                                            <pattern id="pattern6" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                               <use xlink:href="#image0_868_3547" transform="translate(-0.0587762 0.0123052) scale(0.00611916 0.0198269)" />
                                                            </pattern>
                                                            <image id="image0_868_3547" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                                                         </defs>
                                                      </svg>
                                                   </i>
                                                </div>
                                                <h2 class="tpsection__title mb-15">What makes Us <br> Different from Others</h2>
                                                <p>Our priority is delivering genuine results. You’ll experience meaningful growth, visible value, and true business success.
                                                </p>
                                             </div>
                                             <div class="row gx-6">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                   <a href="{{route('about')}}" class="tpchoose mb-30">
                                                      <div class="tpchoose-icon mb-25">
                                                         <span><img loading="lazy" src="{{asset('assets/img/icon/1.png')}}" alt="" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tpchoose-text">
                                                         <span class="tpchoose-title">Performance-Driven Results</span>
                                                         <p>Every strategy we deliver is ROI-focused, built to drive growth and measurable results.</p>
                                                         <div class="tparrow-right">
                                                            <i>
                                                               <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M0.930176 1L5.93018 6L0.930176 11" stroke="currentColor"
                                                                     stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                     stroke-linejoin="round" />
                                                               </svg>
                                                            </i>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                   <a href="{{route('about')}}" class="tpchoose mb-30">
                                                      <div class="tpchoose-icon mb-25">
                                                         <span><img loading="lazy" src="{{asset('assets/img/icon/2.png')}}" alt="" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tpchoose-text">
                                                         <span class="tpchoose-title">Device-Ready Design</span>
                                                         <p>Our responsive designs adapt perfectly, ensuring flawless performance on all devices.</p>
                                                         <div class="tparrow-right">
                                                            <i>
                                                               <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M0.930176 1L5.93018 6L0.930176 11" stroke="currentColor"
                                                                     stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                     stroke-linejoin="round" />
                                                               </svg>
                                                            </i>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                   <a href="{{route('about')}}" class="tpchoose mb-30">
                                                      <div class="tpchoose-icon mb-25">
                                                         <span><img loading="lazy" src="{{asset('assets/img/icon/3.png')}}" alt="" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tpchoose-text">
                                                         <span class="tpchoose-title">Ironclad Data Security</span>
                                                         <p>Your data is protected with enterprise-grade security and 24/7 real-time monitoring.</p>
                                                         <div class="tparrow-right">
                                                            <i>
                                                               <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M0.930176 1L5.93018 6L0.930176 11" stroke="currentColor"
                                                                     stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                     stroke-linejoin="round" />
                                                               </svg>
                                                            </i>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                   <a href="{{route('about')}}" class="tpchoose mb-30">
                                                      <div class="tpchoose-icon mb-25">
                                                         <span><img loading="lazy" src="{{asset('assets/img/icon/4.png')}}" alt="" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tpchoose-text">
                                                         <span class="tpchoose-title">Search-Optimized Visibility</span>
                                                         <p>Boost your visibility and ranking with optimized content and smart SEO strategies.</p>
                                                         <div class="tparrow-right">
                                                            <i>
                                                               <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M0.930176 1L5.93018 6L0.930176 11" stroke="currentColor"
                                                                     stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                     stroke-linejoin="round" />
                                                               </svg>
                                                            </i>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                   <a href="{{route('about')}}" class="tpchoose mb-30">
                                                      <div class="tpchoose-icon mb-25">
                                                         <span><img loading="lazy" src="{{asset('assets/img/icon/5.png')}}" alt="" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tpchoose-text">
                                                         <span class="tpchoose-title">Future-Ready Solutions</span>
                                                         <p>Our solutions scale seamlessly—from agile startups to growing enterprise businesses.</p>
                                                         <div class="tparrow-right">
                                                            <i>
                                                               <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M0.930176 1L5.93018 6L0.930176 11" stroke="currentColor"
                                                                     stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                     stroke-linejoin="round" />
                                                               </svg>
                                                            </i>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                   <a href="{{route('about')}}" class="tpchoose mb-30">
                                                      <div class="tpchoose-icon mb-25">
                                                         <span><img loading="lazy" src="{{asset('assets/img/icon/6.png')}}" alt="" style="width: 15%;"></span>
                                                      </div>
                                                      <div class="tpchoose-text">
                                                         <span class="tpchoose-title">Reliable Long-Term Support</span>
                                                         <p>We’re dedicated to offering continuous support and strategic improvements.</p>
                                                         <div class="tparrow-right">
                                                            <i>
                                                               <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg">
                                                                  <path d="M0.930176 1L5.93018 6L0.930176 11" stroke="currentColor"
                                                                     stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                                     stroke-linejoin="round" />
                                                               </svg>
                                                            </i>
                                                         </div>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section> -->
      <!-- Core Values Section -->
      <!-- Core Values Section -->


      <!-- Industry Expertise Section Start -->
      <section class="industry-expertise py-70">
         <div class="container text-center">
            <span
               style="display: inline-block;font-size: 16px;font-weight: 600; color:#4c5fd5;background:linear-gradient(135deg,rgba(0,74,135,0.08),rgba(0,74,135,0.03));padding: 10px 28px; border-radius: 50px; box-shadow: 0 3px 8px rgba(0,74,135,0.08); margin-bottom: 20px;">
               Industry
            </span>
            <h2 class="section-title">Industry Expertise</h2>
            <p class="section-subtitle">
               Ridgeben’s expertise spans across industries, helping businesses thrive through innovative digital
               solutions.
            </p>

            <div class="row justify-content-center g-4">

               <!-- E-commerce and Retail -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-shopping-cart"></i>
                     <h4>E-commerce and Retail</h4>
                  </div>
               </div>

               <!-- Education and E-learning -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-book-open"></i>
                     <h4>Education and E-learning</h4>
                  </div>
               </div>

               <!-- Finance and Banking -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-piggy-bank"></i>
                     <h4>Finance and Banking</h4>
                  </div>
               </div>

               <!-- Travel and Hospitality -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-suitcase-rolling"></i>
                     <h4>Travel and Hospitality</h4>
                  </div>
               </div>

               <!-- Manufacturing and Logistics -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-cogs"></i>
                     <h4>Manufacturing and Logistics</h4>
                  </div>
               </div>

               <!-- Healthcare and Pharmaceuticals -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-heartbeat"></i>
                     <h4>Healthcare and Pharmaceuticals</h4>
                  </div>
               </div>

               <!-- Real Estate and Construction -->
               <div class="col-lg-3 col-md-4 mb-4 industry-col">
                  <div class="industry-card">
                     <i class="fas fa-building"></i>
                     <h4>Real Estate and Construction</h4>
                  </div>
               </div>
            </div>

            <p class="section-description">
               Despite our international reach, we remain deeply committed to contributing to the local economy. We
               regularly
               collaborate with Bangladeshi entrepreneurs and startups to accelerate their growth through digital
               empowerment.
            </p>
         </div>
      </section>
      <!-- Industry Expertise Section End -->

      <style>
         /* ======= Section Base ======= */
         .industry-expertise {
            background: linear-gradient(180deg, #f7faff 0%, #ffffff 100%);
            padding: 70px 0;
         }

         .section-title {
            font-size: 40px;
            font-weight: 700;
            color: #1e1e2d;
            margin-bottom: 10px;
         }

         .section-subtitle {
            font-size: 18px;
            color: #7f8fa6;
            margin-bottom: 50px;
         }

         .section-description {
            font-size: 18px;
            color: #1e1e2d;
            margin-top: 35px;
            max-width: 850px;
            margin-left: auto;
            margin-right: auto;
         }

         /* ======= Industry Card ======= */
         .industry-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
            padding: 45px 25px;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: pointer;
            position: relative;
            overflow: hidden;
         }

         .industry-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at top right, rgba(0, 74, 135, 0.08), transparent 70%);
            transition: opacity 0.4s ease;
            opacity: 0;
         }

         .industry-card:hover::before {
            opacity: 1;
         }

         .industry-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 74, 135, 0.18);
            border: 1px solid rgba(0, 74, 135, 0.1);
         }

         /* ======= Icon ======= */
         .industry-card i {
            font-size: 45px;
            color: #004A87;
            margin-bottom: 18px;
            transition: all 0.4s ease;
         }

         .industry-card:hover i {
            color: #0074D9;
            transform: scale(1.2) rotate(5deg);
            animation: iconPulse 1.2s infinite;
         }

         @keyframes iconPulse {
            0% {
               transform: scale(1.1);
            }

            50% {
               transform: scale(1.3);
            }

            100% {
               transform: scale(1.1);
            }
         }

         /* ======= Title ======= */
         .industry-card h4 {
            font-size: 18px;
            font-weight: 600;
            color: #004A87;
            margin: 0;
            transition: color 0.3s ease;
         }

         .industry-card:hover h4 {
            color: #0074D9;
         }

         /* ======= Scroll Animation ======= */
         .industry-col {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.7s ease;
         }

         .industry-col.visible {
            opacity: 1;
            transform: translateY(0);
         }

         /* ======= Responsive ======= */
         @media (max-width: 768px) {
            .section-title {
               font-size: 32px;
            }

            .industry-card {
               padding: 35px 15px;
            }

            .industry-card i {
               font-size: 38px;
            }
         }
      </style>

      <script>
         // Smooth reveal on scroll
         const industryCols = document.querySelectorAll('.industry-col');
         const industryObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
               if (entry.isIntersecting) {
                  entry.target.classList.add('visible');
                  industryObserver.unobserve(entry.target);
               }
            });
         }, { threshold: 0.2 });

         industryCols.forEach(col => industryObserver.observe(col));
      </script>

      <!-- Industry Expertise Section End -->







      <!-- ============================= -->
      <!-- WHY CHOOSE US SECTION START -->
      <!-- ============================= -->
      <section class="whychoose-section py-70">
         <div class="container">
            <div class="text-center mb-5">
               <!-- <span class="whychoose-subtitle">Why Choose Us</span> -->
               <span
                  style="display: inline-block;font-size: 16px;font-weight: 600; color:#4c5fd5;background:linear-gradient(135deg,rgba(0,74,135,0.08),rgba(0,74,135,0.03));padding: 10px 28px; border-radius: 50px; box-shadow: 0 3px 8px rgba(0,74,135,0.08); margin-bottom: 20px;">
                  Why Choose Us
               </span>
               <h2 class="whychoose-title mb-15">What Makes Us <br> Different from Others</h2>
               <p class="whychoose-desc">
                  Our priority is delivering genuine results. You’ll experience meaningful growth, visible value,
                  and true business success.
               </p>
            </div>

            <div class="row gx-4 gy-4 justify-content-center">
               <!-- Card 1 -->
               <div class="col-lg-4 col-md-6">
                  <div class="scroll-reveal" style="--i:1">
                     <a href="{{route('about')}}" class="whychoose-card">
                        <div class="whychoose-icon">
                           <img src="{{asset('assets/img/icon/1.png')}}" alt="Performance">
                        </div>
                        <h5 class="whychoose-card-title">Performance-Driven Results</h5>
                        <p class="whychoose-card-desc">
                           Every strategy we deliver is ROI-focused, built to drive growth and measurable results.
                        </p>
                     </a>
                  </div>
               </div>

               <!-- Card 2 -->
               <div class="col-lg-4 col-md-6">
                  <div class="scroll-reveal" style="--i:2">
                     <a href="{{route('about')}}" class="whychoose-card">
                        <div class="whychoose-icon">
                           <img src="{{asset('assets/img/icon/2.png')}}" alt="Device Design">
                        </div>
                        <h5 class="whychoose-card-title">Device-Ready Design</h5>
                        <p class="whychoose-card-desc">
                           Our responsive designs adapt perfectly, ensuring flawless performance on all devices.
                        </p>
                     </a>
                  </div>
               </div>

               <!-- Card 3 -->
               <div class="col-lg-4 col-md-6">
                  <div class="scroll-reveal" style="--i:3">
                     <a href="{{route('about')}}" class="whychoose-card">
                        <div class="whychoose-icon">
                           <img src="{{asset('assets/img/icon/3.png')}}" alt="Security">
                        </div>
                        <h5 class="whychoose-card-title">Ironclad Data Security</h5>
                        <p class="whychoose-card-desc">
                           Your data is protected with enterprise-grade security and 24/7 real-time monitoring.
                        </p>
                     </a>
                  </div>
               </div>

               <!-- Card 4 -->
               <div class="col-lg-4 col-md-6">
                  <div class="scroll-reveal" style="--i:4">
                     <a href="{{route('about')}}" class="whychoose-card">
                        <div class="whychoose-icon">
                           <img src="{{asset('assets/img/icon/4.png')}}" alt="SEO">
                        </div>
                        <h5 class="whychoose-card-title">Search-Optimized Visibility</h5>
                        <p class="whychoose-card-desc">
                           Boost your visibility and ranking with optimized content and smart SEO strategies.
                        </p>
                     </a>
                  </div>
               </div>

               <!-- Card 5 -->
               <div class="col-lg-4 col-md-6">
                  <div class="scroll-reveal" style="--i:5">
                     <a href="{{route('about')}}" class="whychoose-card">
                        <div class="whychoose-icon">
                           <img src="{{asset('assets/img/icon/5.png')}}" alt="Scalable Solutions">
                        </div>
                        <h5 class="whychoose-card-title">Future-Ready Solutions</h5>
                        <p class="whychoose-card-desc">
                           Our solutions scale seamlessly—from agile startups to growing enterprise businesses.
                        </p>
                     </a>
                  </div>
               </div>

               <!-- Card 6 -->
               <div class="col-lg-4 col-md-6">
                  <div class="scroll-reveal" style="--i:6">
                     <a href="{{route('about')}}" class="whychoose-card">
                        <div class="whychoose-icon">
                           <img src="{{asset('assets/img/icon/6.png')}}" alt="Support">
                        </div>
                        <h5 class="whychoose-card-title">Reliable Long-Term Support</h5>
                        <p class="whychoose-card-desc">
                           We’re dedicated to offering continuous support and strategic improvements.
                        </p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ============================= -->
      <!-- WHY CHOOSE US SECTION END -->
      <!-- ============================= -->
      <!-- Why Choose Us CSS Start -->
      <style>
         /* Section Base */
         .whychoose-section {
            padding: 40px 40px;
            background: linear-gradient(180deg, #f7faff 0%, #ffffff 100%);
         }

         /* Subtitle */
         .whychoose-subtitle {
            font-size: 38px;
            font-weight: 700;
            color: #004a87;
            background-color: rgba(0, 74, 135, 0.08);
            padding: 6px 18px;
            border-radius: 8px;
            display: inline-block;
         }

         .whychoose-desc {
            font-size: 18px;
            color: #7f8fa6;
            margin-top: 20px;
            max-width: 750px;
            margin-left: auto;
            margin-right: auto;
         }

         /* Card Styling */
         .whychoose-card {
            display: block;
            text-align: center;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
            padding: 40px 25px;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            text-decoration: none;
         }

         .whychoose-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 74, 135, 0.18);
         }

         /* Icon */
         .whychoose-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top right, rgba(0, 74, 135, 0.05), rgba(0, 74, 135, 0));
            border-radius: 50%;
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            transition: all 0.4s ease;
         }

         .whychoose-icon img {
            height: 60px;
            width: auto;
            transition: transform 0.4s ease;
         }

         .whychoose-card:hover .whychoose-icon img {
            transform: scale(1.15) rotate(4deg);
         }

         /* Text */
         .whychoose-card-title {
            font-size: 22px;
            font-weight: 600;
            color: #004A87;
            margin-bottom: 10px;
            transition: color 0.3s ease;
         }

         .whychoose-card-desc {
            font-size: 18px;
            color: #2a2a2a;
            line-height: 1.6;
         }

         .whychoose-card:hover .whychoose-card-title {
            color: #0074D9;
         }

         /* Scroll Reveal Animation */
         .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
            transition-delay: calc(var(--i, 0) * 0.1s);
         }

         .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
         }

         /* Responsive */
         @media (max-width: 768px) {
            .whychoose-subtitle {
               font-size: 28px;
            }

            .whychoose-card {
               padding: 30px 20px;
            }
         }
      </style>
      <!-- Why Choose Us CSS END -->

      {{--
      <!-- Technologies Area Start -->
      <section class="tech-section py-5" style="background-color: #f5f9ff;">
         <div class="container text-center">
            <h2 class="tech-title mb-4" style="font-size: 40px; font-weight: 700; color: #1e1e2d;">Technologies We Work
               With</h2>
            <!-- <p class="tech-subtitle mb-5" style="font-size: 30px; color: #7f8fa6;">Technologies We Specialize In</p> -->

            <div class="row justify-content-center g-4">

               <!-- Frontend Development  -->
               <div class="col-12">
                  <h4 class="tech-category-title"
                     style="font-size: 24px; font-weight: 600; color: #004A87; margin-top: 10px; margin-bottom: 5px;">
                     Frontend Development</h4>
               </div>
               @foreach (['react', 'angular', 'vuejs', 'bootstrap'] as $tech)
               <div class="col-4 col-sm-3 col-md-2">
                  <div class="tech-card text-center p-4"
                     style="background-color: #fff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                     <i class="fab fa-{{ $tech }} tech-icon-img mb-3" style="font-size: 40px; color: #004A87;"></i>
                     <p class="tech-name small fw-semibold mb-0" style="font-size: 16px;">{{ ucfirst($tech) }}</p>
                  </div>
               </div>
               @endforeach

               <!-- Backend Development  -->
               <div class="col-12 mt-5">
                  <h4 class="tech-category-title"
                     style="font-size: 24px; font-weight: 600; color: #004A87; margin-top: 20px; margin-bottom: 5px;">
                     Backend Development</h4>
               </div>
               @foreach (['node', 'php', 'python', 'java', 'laravel'] as $tech)
               <div class="col-4 col-sm-3 col-md-2">
                  <div class="tech-card text-center p-4"
                     style="background-color: #fff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                     <i class="fab fa-{{ $tech }} tech-icon-img mb-3" style="font-size: 40px; color: #004A87;"></i>
                     <p class="tech-name small fw-semibold mb-0" style="font-size: 16px;">{{ ucfirst($tech) }}</p>
                  </div>
               </div>
               @endforeach



               <!-- Mobile App Development  -->
               <div class="col-12 mt-5">
                  <h4 class="tech-category-title"
                     style="font-size: 24px; font-weight: 600; color: #004A87; margin-top: 20px; margin-bottom: 5px;">
                     Mobile App Development</h4>
               </div>
               @foreach (['react', 'android', 'apple'] as $tech)
               <div class="col-4 col-sm-3 col-md-2">
                  <div class="tech-card text-center p-4"
                     style="background-color: #fff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                     <i class="fab fa-{{ $tech }} tech-icon-img mb-3" style="font-size: 40px; color: #004A87;"></i>
                     <p class="tech-name small fw-semibold mb-0" style="font-size: 16px;">{{ ucfirst($tech) }}</p>
                  </div>
               </div>
               @endforeach


               <!-- E-commerce  -->
               <!-- <div class="col-12 mt-5">
                                          <h4 class="tech-category-title"
                                             style="font-size: 20px; font-weight: 600; color: #4a5fc1; margin-top: 20px; margin-bottom: 5px;">
                                             E-commerce</h4>
                                       </div>
                                       @foreach (['shopify', 'magento'] as $tech)
                                          <div class="col-4 col-sm-3 col-md-2">
                                             <div class="tech-card text-center p-4"
                                                style="background-color: #fff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); transition: all 0.3s;">
                                                <i class="fab fa-{{ $tech }} tech-icon-img mb-3" style="font-size: 40px; color: #4a5fc1;"></i>
                                                <p class="tech-name small fw-semibold mb-0" style="font-size: 14px;">{{ ucfirst($tech) }}</p>
                                             </div>
                                          </div> -->
               @endforeach

            </div>
         </div>
      </section>
      <!-- Technologies Area End -->


      --}}


      <!-- Technologies Area Start -->
      <section class="tech-section py-5" style="background: linear-gradient(180deg, #f7faff 0%, #ffffff 100%);">
         <div class="container text-center">
            <span
               style="display: inline-block;font-size: 16px;font-weight: 600; color:#4c5fd5;background:linear-gradient(135deg,rgba(0,74,135,0.08),rgba(0,74,135,0.03));padding: 10px 28px; border-radius: 50px; box-shadow: 0 3px 8px rgba(0,74,135,0.08); margin-bottom: 20px;">
               Technologies
            </span>
            <h2 class="tech-title mb-4" style="font-size: 40px; font-weight: 700; color: #0b2343;">
               Technologies We Work With
            </h2>

            <div class="row justify-content-center g-4">

               <!-- Frontend Development  -->
               <div class="col-12">
                  <h4 class="tech-category-title mb-3"
                     style="font-size: 24px; font-weight: 600; color: #004A87; margin-top: 10px;">
                     Frontend Development
                  </h4>
               </div>
               @foreach (['react', 'angular', 'vuejs', 'bootstrap'] as $tech)
                  <div class="col-4 col-sm-3 col-md-2 tech-col">
                     <div class="tech-card">
                        <div class="icon-wrapper">
                           <i class="fab fa-{{ $tech }} tech-icon-img"></i>
                        </div>
                        <p class="tech-name">{{ ucfirst($tech) }}</p>
                     </div>
                  </div>
               @endforeach

               <!-- Backend Development  -->
               <div class="col-12 mt-5">
                  <h4 class="tech-category-title mb-3"
                     style="font-size: 24px; font-weight: 600; color: #004A87; margin-top: 20px;">
                     Backend Development
                  </h4>
               </div>
               @foreach (['node', 'php', 'python', 'java', 'laravel'] as $tech)
                  <div class="col-4 col-sm-3 col-md-2 tech-col">
                     <div class="tech-card">
                        <div class="icon-wrapper">
                           <i class="fab fa-{{ $tech }} tech-icon-img"></i>
                        </div>
                        <p class="tech-name">{{ ucfirst($tech) }}</p>
                     </div>
                  </div>
               @endforeach

               <!-- Mobile App Development  -->
               <div class="col-12 mt-5">
                  <h4 class="tech-category-title mb-3"
                     style="font-size: 24px; font-weight: 600; color: #004A87; margin-top: 20px;">
                     Mobile App Development
                  </h4>
               </div>
               @foreach (['react', 'android', 'apple'] as $tech)
                  <div class="col-4 col-sm-3 col-md-2 tech-col">
                     <div class="tech-card">
                        <div class="icon-wrapper">
                           <i class="fab fa-{{ $tech }} tech-icon-img"></i>
                        </div>
                        <p class="tech-name">{{ ucfirst($tech) }}</p>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- Technologies Area End -->

      <style>
         /* ===== Base ===== */
         .tech-section {
            position: relative;
            overflow: hidden;
         }

         .tech-card {
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
            padding: 32px 20px;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: pointer;
            border: 1px solid transparent;
            margin-top: 10px;
         }

         .tech-card:hover {
            transform: translateY(-8px);
            border-color: #004A87;
            box-shadow: 0 12px 28px rgba(0, 74, 135, 0.15);
            background: linear-gradient(180deg, #ffffff 0%, #f0f6ff 100%);
         }

         /* ===== Icon Styling ===== */
         .icon-wrapper {
            width: 72px;
            height: 72px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: linear-gradient(145deg, #e8f1ff, #ffffff);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s ease;
         }

         .tech-card:hover .icon-wrapper {
            background: linear-gradient(145deg, #004A87, #0074D9);
            box-shadow: 0 6px 16px rgba(0, 74, 135, 0.3);
         }

         .tech-icon-img {
            font-size: 38px;
            color: #004A87;
            transition: transform 0.4s ease, color 0.4s ease;
         }

         .tech-card:hover .tech-icon-img {
            color: #ffffff;
            transform: scale(1.15) rotate(5deg);
         }

         /* ===== Text Styling ===== */
         .tech-name {
            font-size: 18px;
            font-weight: 600;
            color: #1e1e2d;
            transition: color 0.3s ease;
         }

         .tech-card:hover .tech-name {
            color: #004A87;
         }

         /* ===== Scroll Animations ===== */
         .tech-col {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
         }

         .tech-col.visible {
            opacity: 1;
            transform: translateY(0);
         }

         /* ===== Responsive ===== */
         @media (max-width: 768px) {
            .tech-icon-img {
               font-size: 34px;
            }

            .icon-wrapper {
               width: 64px;
               height: 64px;
            }
         }
      </style>

      <script>
         // Smooth reveal animation on scroll
         const techCols = document.querySelectorAll('.tech-col');
         const techObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
               if (entry.isIntersecting) {
                  entry.target.classList.add('visible');
                  techObserver.unobserve(entry.target);
               }
            });
         }, { threshold: 0.5 });

         techCols.forEach(col => techObserver.observe(col));
      </script>
      <!-- Technologies Area End -->




      <!-- FAQ Section Start -->
      <section class="faq-section py-5" id="faq">
         <div class="container">
            <div class="text-center mb-5">
               <span
                  style="display: inline-block;font-size: 16px;font-weight: 600; color:#4c5fd5;background:linear-gradient(135deg,rgba(0,74,135,0.08),rgba(0,74,135,0.03));padding: 10px 28px; border-radius: 50px; box-shadow: 0 3px 8px rgba(0,74,135,0.08); margin-bottom: 20px;">
                  FAQ
               </span>
               <h2 class="fw-bold">Frequently Asked Questions (FAQs)</h2>
               <p class="text-muted">Get instant answers about Ridgeben IT Solutions — crafted for your confidence.</p>
            </div>

            <div class="faq-grid">
               <!-- Column Left -->
               <div class="faq-column">
                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">01</span>
                        <h4>What makes Ridgeben IT Solutions Limited unique?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>We combine over 10 years of experience, global exposure, and cutting-edge technology to deliver
                           solutions that drive growth, efficiency, and innovation for businesses of all sizes.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">02</span>
                        <h4>What services do you provide?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>From custom software and mobile apps to e-commerce platforms, ERP, HR & Payroll, POS, and
                           e-learning systems, we provide ready-to-deploy and tailor-made digital solutions designed to
                           transform your business.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">03</span>
                        <h4>Do you offer ready-to-use software products?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>Yes! Our market-ready software solutions like ERP, HR & Payroll, POS, E-learning, and E-commerce
                           platforms are designed for quick deployment, high performance, and scalability.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">04</span>
                        <h4>Can you create custom software for my business?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>Absolutely! We specialize in custom-built software tailored to your unique business needs,
                           ensuring seamless integration, superior usability, and measurable results.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">05</span>
                        <h4>Which industries do you serve?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>We empower businesses across retail, education, healthcare, manufacturing, logistics, and
                           services, delivering solutions that scale with your growth.</p>
                     </div>
                  </div>
               </div>

               <!-- Column Right -->
               <div class="faq-column">
                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">06</span>
                        <h4>How secure are your solutions?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>Security is a top priority. Our solutions feature role-based access control, encrypted data, and
                           real-time monitoring, ensuring your business operations stay safe and compliant.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">07</span>
                        <h4>Do you provide support and maintenance?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>Yes. We offer 24/7 support, updates, and maintenance, keeping your software running smoothly
                           while helping you adapt to changing business needs.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">08</span>
                        <h4>How can I see your products in action?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>You can request a personalized demo by contacting us at <a
                              href="mailto:info@ridgebenit.com">info@ridgebenit.com</a> or <a
                              href="tel:+8801898878819">+880 189 887 8819</a> / 8818.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">09</span>
                        <h4>How do I start a project with Ridgeben IT?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>Simply reach out via our website, email, or phone. Our team will consult with you, design a
                           project plan, and provide a clear timeline and cost estimate, so you can start confidently.</p>
                     </div>
                  </div>

                  <div class="faq-item scroll-reveal">
                     <button class="faq-question">
                        <span class="faq-number">10</span>
                        <h4>Why should I choose Ridgeben IT Solutions?</h4>
                        <span class="faq-toggle">+</span>
                     </button>
                     <div class="faq-answer">
                        <p>Because we deliver powerful, ready-to-run, and future-ready software solutions with proven
                           results, helping businesses increase efficiency, improve customer satisfaction, and accelerate
                           growth.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <style>
         .faq-section {
            background: #f9fafc;
            position: relative;
         }

         .faq-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            max-width: 1100px;
            margin: 0 auto;
         }

         .faq-column {
            display: flex;
            flex-direction: column;
            gap: 16px;
         }

         .faq-item {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
            overflow: hidden;
         }

         .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.7s ease;
         }

         .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
         }

         .faq-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
         }

         .faq-question {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            padding: 18px 24px;
            background: transparent;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
            position: relative;
         }

         .faq-question:focus-visible {
            outline: 2px solid #004aad;
         }

         .faq-number {
            color: #004aad;
            font-weight: 700;
         }

         .faq-question h4 {
            flex: 1;
            font-size: 18px;
            margin: 0;
            text-align: left;
            color: #1a1a1a;
            font-weight: 600;
            transition: color 0.3s ease;
         }

         .faq-item.active .faq-question h4 {
            color: #004aad;
         }

         .faq-toggle {
            font-size: 22px;
            color: #004aad;
            display: inline-block;
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
         }

         .faq-item.active .faq-toggle {
            transform: rotate(45deg);
         }

         .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.45s ease, padding 0.35s ease;
            padding: 0 22px;
            will-change: max-height;
         }

         .faq-item.active .faq-answer {
            padding: 12px 22px 18px;
         }

         .faq-answer p {
            color: #555;
            line-height: 1.6;
            font-size: 16px;
            margin: 0;
         }

         .faq-item.active {
            border-color: #004aad;
            box-shadow: 0 5px 14px rgba(0, 74, 173, 0.1);
         }

         a {
            color: #004aad;
            text-decoration: none;
         }

         @media (max-width: 992px) {
            .faq-grid {
               grid-template-columns: 1fr;
            }
         }
      </style>

      <script>
         // Smooth open/close FAQ answers with full content visibility
         const faqItems = document.querySelectorAll('.faq-item');

         faqItems.forEach(item => {
            const btn = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            btn.addEventListener('click', () => {
               const isActive = item.classList.contains('active');

               // Close all items first
               faqItems.forEach(i => {
                  i.classList.remove('active');
                  const ans = i.querySelector('.faq-answer');
                  ans.style.maxHeight = null;
               });

               // Open the selected one dynamically
               if (!isActive) {
                  item.classList.add('active');

                  // Temporarily reset height to calculate content size
                  answer.style.maxHeight = 'none';
                  const fullHeight = (answer.scrollHeight + 20) + 'px';

                  // Set back to 0 before animating open
                  answer.style.maxHeight = '0px';
                  setTimeout(() => {
                     answer.style.maxHeight = fullHeight;
                  }, 10); // small delay ensures smooth transition

                  // Adjust scroll for mobile screens
                  if (window.innerWidth < 992) {
                     setTimeout(() => {
                        item.scrollIntoView({ behavior: 'smooth', block: 'start' });
                     }, 300);
                  }
               }
            });
         });

      </script>
      <!-- FAQ Section End -->




      <!-- testimonial-area-start -->

      <!-- Modern Testimonial Section -->
      <section class="modern-testimonials py-5">
         <div class="container">
            <div class="text-center mb-5">
               <span class="tagline">Testimonials</span>
               <h2 class="section-title">Clients love us & we love them</h2>
               <p class="section-subtitle">Trusted by over 70+ clients worldwide</p>
            </div>

            <div class="swiper myTestimonialSwiper">
               <div class="swiper-wrapper">

                  <!-- Slide: Rubel -->
                  <div class="swiper-slide">
                     <div class="testimonial-wrapper d-flex align-items-center flex-md-row flex-column gap-4">
                        <div class="testimonial-img-wrapper">
                           <img src="{{ asset('assets/img/banner/pabel.png') }}" alt="Md. Rubel Ahmed"
                              class="testimonial-img">
                        </div>
                        <div class="testimonial-content">
                           <div class="testimonial-quote">“</div>
                           <p class="testimonial-text">
                              Partnering with Ridgeben IT Solutions has greatly improved our Furniture business through a
                              dynamic website. Thanks Ridgeben for their professionalism and adaptability to last-minute
                              changes.
                           </p>
                           <div class="testimonial-meta">
                              <h5 class="testimonial-name">Md. Rubel Ahmed</h5>
                              <p class="testimonial-position">General Manager, Homeland Furniture</p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Slide: Diran -->
                  <div class="swiper-slide">
                     <div class="testimonial-wrapper d-flex align-items-center flex-md-row flex-column gap-4">
                        <div class="testimonial-img-wrapper">
                           <img src="{{ asset('assets/img/team/diran.png') }}" alt="Md. Diran Khan"
                              class="testimonial-img">
                        </div>
                        <div class="testimonial-content">
                           <div class="testimonial-quote">“</div>
                           <p class="testimonial-text">
                              We are highly impressed with the website Ridgeben IT Solutions created for Kinglet BD. It's
                              modern, fast, and reflects our brand perfectly. Their team was efficient, responsive, and
                              truly understood our goals.
                           </p>
                           <div class="testimonial-meta">
                              <h5 class="testimonial-name">Md. Diran Khan</h5>
                              <p class="testimonial-position">CEO of Kinglet Furniture</p>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>

               <div class="swiper-pagination mt-4"></div>
            </div>
         </div>
      </section>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

      <style>
         /* --- Typography and Structure --- */
         .modern-testimonials .tagline {
            display: inline-block;
            font-size: 15px;
            font-weight: 600;
            color: #4c5fd5;
            background: linear-gradient(135deg, rgba(0, 74, 135, 0.08), rgba(0, 74, 135, 0.03));
            padding: 10px 28px;
            border-radius: 50px;
            box-shadow: 0 3px 8px rgba(0, 74, 135, 0.08);
            margin-bottom: 20px;
         }

         .modern-testimonials .section-title {
            font-size: 32px;
            font-weight: 700;
            color: #1e1e2d;
         }

         .modern-testimonials .section-subtitle {
            font-size: 18px;
            color: #6f6f87;
         }

         /* --- Testimonial Wrapper --- */
         .testimonial-wrapper {
            background: #fff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
         }

         .testimonial-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
         }

         /* --- Image --- */
         .testimonial-img-wrapper {
            flex-shrink: 0;
         }

         .testimonial-img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(76, 95, 213, 0.2);
            transition: transform 0.3s ease;
         }

         .testimonial-wrapper:hover .testimonial-img {
            transform: scale(1.05);
         }

         /* --- Content --- */
         .testimonial-content {
            flex: 1;
            position: relative;
         }

         .testimonial-quote {
            font-size: 80px;
            line-height: 0.7;
            color: rgba(76, 95, 213, 0.2);
            font-weight: bold;
            position: absolute;
            top: -20px;
            left: -10px;
         }

         .testimonial-text {
            font-size: 17px;
            color: #333;
            margin: 20px 0 25px;
            line-height: 1.7;
            position: relative;
            z-index: 1;
         }

         /* --- Meta --- */
         .testimonial-meta {
            margin-top: 10px;
         }

         .testimonial-name {
            font-size: 18px;
            font-weight: 600;
            margin: 0;
         }

         .testimonial-position {
            color: #6f6f87;
            font-size: 15px;
         }

         /* --- Swiper --- */
         .swiper-pagination-bullet {
            background: #4c5fd5;
            opacity: 0.4;
         }

         .swiper-pagination-bullet-active {
            opacity: 1;
         }

         @media (max-width: 767px) {
            .testimonial-wrapper {
               text-align: center;
               padding: 30px 20px;
            }

            .testimonial-img {
               margin-bottom: 15px;
            }

            .testimonial-quote {
               position: static;
               font-size: 50px;
            }
         }
      </style>

      <script>
         const swiper = new Swiper('.myTestimonialSwiper', {
            loop: true,
            grabCursor: true,
            pagination: {
               el: '.swiper-pagination',
               clickable: true,
            },
            autoplay: {
               delay: 4500,
               disableOnInteraction: false,
            },
            speed: 800,
         });
      </script>




      {{--
      <section class="textimonial-area pb-120 fix">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tpsection__content text-center mb-60">
                     <h2 class="tpsection__title">Clients love us & we love them</h2>
                     <p>Trusted by over 70+ clients worldwide</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="tptestimonial-wrap p-relative">
               <div class="tptestimonial-wrapper tptestimonial-active">
                  <div class="tptestimonial p-relative d-flex align-items-center">
                     <div class="tptestimonial-thumb mr-40">
                        <img loading="lazy" src="{{asset('assets/img/banner/pabel.png')}}" alt="">
                     </div>
                     <div class="tptestimonial-content">
                        <div class="tptestimonial-shape mb-20">
                           <i><svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                    fill="white" stroke="currentColor" fill-opacity="0.2" />
                              </svg>
                           </i>
                        </div>
                        <p>Partnering with Ridgeben IT Solutions has
                           greatly improved our Furniture business through dynamic website. Thanks Ridgeben for their
                           professionalism and
                           adaptability to last-minute changes.</p>
                        <div class="tptestimonial-avatar-info">
                           <h5 class="tptestimonial-avatar-title">Md. Rubel Ahmed</h5>
                           <span>General Manager, Homeland Furniture</span>
                        </div>
                     </div>
                  </div>
                  <div class="tptestimonial p-relative d-flex align-items-center">
                     <div class="tptestimonial-thumb mr-40">
                        <img loading="lazy" src="{{asset('assets/img/team/diran.png')}}" alt="">
                     </div>
                     <div class="tptestimonial-content">
                        <div class="tptestimonial-shape mb-20">
                           <i><svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                    fill="white" stroke="currentColor" fill-opacity="0.2" />
                              </svg>
                           </i>
                        </div>
                        <p>We are highly impressed with the website Ridgeben IT Solutions created for Kinglet BD. It's
                           modern,
                           fast, and reflects our brand perfectly. Their team was efficient, responsive, and truly
                           understood our goals.</p>
                        <div class="tptestimonial-avatar-info">
                           <h5 class="tptestimonial-avatar-title">Md. Diran Khan</h5>
                           <span>CEO of Kinglet Furniture</span>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="tptestimonial p-relative d-flex align-items-center">
                                             <div class="tptestimonial-thumb mr-40">
                                                <img loading="lazy" src="{{asset('assets/img/team/testimonial-1.png')}}" alt="">
                                             </div>
                                             <div class="tptestimonial-content">
                                                <div class="tptestimonial-shape mb-20">
                                                   <i><svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                                            fill="white" stroke="currentColor" fill-opacity="0.2" />
                                                      </svg>
                                                   </i>
                                                </div>
                                                <p>We help our clients succeed by creating brand identities, digital experiences, material that
                                                   communicate clearly, achieve marketing goals!</p>
                                                <div class="tptestimonial-avatar-info">
                                                   <h5 class="tptestimonial-avatar-title">Leslie Alexander</h5>
                                                   <span>CEO of Advisor Fuel</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tptestimonial p-relative d-flex align-items-center">
                                             <div class="tptestimonial-thumb mr-40">
                                                <img loading="lazy" src="{{asset('assets/img/team/testimonial-2.png')}}" alt="">
                                             </div>
                                             <div class="tptestimonial-content">
                                                <div class="tptestimonial-shape mb-20">
                                                   <i><svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                                            fill="white" stroke="currentColor" fill-opacity="0.2" />
                                                      </svg>
                                                   </i>
                                                </div>
                                                <p>We help our clients succeed by creating brand identities, digital experiences, material that
                                                   communicate clearly, achieve marketing goals!</p>
                                                <div class="tptestimonial-avatar-info">
                                                   <h5 class="tptestimonial-avatar-title">Annette Black</h5>
                                                   <span>CEO of Advisor Fuel</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tptestimonial p-relative d-flex align-items-center">
                                             <div class="tptestimonial-thumb mr-40">
                                                <img loading="lazy" src="{{asset('assets/img/team/testimonial-1.png')}}" alt="">
                                             </div>
                                             <div class="tptestimonial-content">
                                                <div class="tptestimonial-shape mb-20">
                                                   <i><svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                                            fill="white" stroke="currentColor" fill-opacity="0.2" />
                                                      </svg>
                                                   </i>
                                                </div>
                                                <p>We help our clients succeed by creating brand identities, digital experiences, material that
                                                   communicate clearly, achieve marketing goals!</p>
                                                <div class="tptestimonial-avatar-info">
                                                   <h5 class="tptestimonial-avatar-title">Kathryn Murphy</h5>
                                                   <span>CEO of Advisor Fuel</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tptestimonial p-relative d-flex align-items-center">
                                             <div class="tptestimonial-thumb mr-40">
                                                <img loading="lazy" src="{{asset('assets/img/team/testimonial-2.png')}}" alt="">
                                             </div>
                                             <div class="tptestimonial-content">
                                                <div class="tptestimonial-shape mb-20">
                                                   <i><svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path
                                                            d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                                            fill="white" stroke="currentColor" fill-opacity="0.2" />
                                                      </svg>
                                                   </i>
                                                </div>
                                                <p>We help our clients succeed by creating brand identities, digital experiences, material that
                                                   communicate clearly, achieve marketing goals!</p>
                                                <div class="tptestimonial-avatar-info">
                                                   <h5 class="tptestimonial-avatar-title">Guy Hawkins</h5>
                                                   <span>CEO of Advisor Fuel</span>
                                                </div>
                                             </div>
                                          </div> -->
               </div>
               <div class="testimonial-fixed-bg fix"></div>
               <div class="tptestimonial-arrow">
                  <div class="testimonial-arrows p-relative">
                     <button class="prev-testimonial">
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" fill="none" viewBox="0 0 8 14">
                              <path fill-rule="evenodd"
                                 d="M7.707.293a1 1 0 0 1 0 1.414L2.414 7l5.293 5.293a1 1 0 0 1-1.414 1.414l-6-6a1 1 0 0 1 0-1.414l6-6a1 1 0 0 1 1.414 0z"
                                 fill="#9f9fa9">
                              </path>
                           </svg>
                        </span>
                     </button>
                     <button class="next-testimonial">
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" fill="none" viewBox="0 0 8 14">
                              <path fill-rule="evenodd"
                                 d="M.293 13.707a1 1 0 0 1 0-1.414L5.586 7 .293 1.707A1 1 0 1 1 1.707.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414 0z"
                                 fill="#9f9fa9">
                              </path>
                           </svg>
                        </span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      --}}

      <!-- testimonial-area-end -->

      <!-- blog-area-start -->
      <!-- <section class="blog-area pb-75">
                                 <div class="container">
                                    <div class="row align-items-end">
                                       <div class="col-lg-6 col-md-8">
                                          <div class="tpsection__wrapper mb-45">
                                             <div class="tpbanner__sub-title mb-15">
                                                <span>From our blog</span>
                                                <i>
                                                   <svg width="130" height="40" viewBox="0 0 130 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                      <rect width="130" height="40" fill="url(#pattern8)" fill-opacity="0.08" />
                                                      <defs>
                                                         <pattern id="pattern8" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                            <use xlink:href="#image0_965_197" transform="translate(-0.0507936) scale(0.00603175 0.0205405)" />
                                                         </pattern>
                                                         <image id="image0_965_197" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                                                      </defs>
                                                   </svg>
                                                </i>
                                             </div>
                                             <h2 class="tpsection__title">Latest blog & news</h2>
                                          </div>
                                       </div>
                                       <div class="col-lg-6 col-md-4">
                                          <div class="tpblog-all mb-60">
                                             <a href="blog-grid.html">See all our Blog
                                                <i>
                                                   <svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M16.7095 1L21.7095 6L16.7095 11" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M1 6H21" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </i>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-4 col-md-6 col-sm-6">
                                          <div class="tpblog mb-30">
                                             <div class="tpblog-thumb mb-25 fix">
                                                <a href="blog-details.html"><img loading="lazy" src="{{asset('assets/img/blog/blog-1-bg-1.jpg')}}')}}" alt=""></a>
                                             </div>
                                             <div class="tpblog-content">
                                                <div class="tpblog-tag">
                                                   <a href="blog-details.html">SEO Analysis</a>
                                                   <a href="blog-details.html">Marketing</a>
                                                </div>
                                                <h3 class="tpblog-title"><a href="blog-details.html">Simple ways to Optimize your Website For SEO</a></h3>
                                                <div class="tpblog-avatar d-flex align-items-center">
                                                   <div class="tpblog-avatar-thub mr-10">
                                                      <img loading="lazy" src="{{asset('assets/img/blog/comments/blog-avatar-1.png')}}" alt="">
                                                   </div>
                                                   <div class="tpblog-avatar-info">
                                                      <h5 class="tpblog-avatar-title">Nathalie Grossman</h5>
                                                      <span>August 3, 2023</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-6">
                                          <div class="tpblog mb-30">
                                             <div class="tpblog-thumb mb-25 fix">
                                                <a href="blog-details.html"><img loading="lazy" src="{{asset('assets/img/blog/blog-1-bg-2.jpg')}}" alt=""></a>
                                             </div>
                                             <div class="tpblog-content">
                                                <div class="tpblog-tag">
                                                   <a href="blog-details.html">SEO Analysis</a>
                                                   <a href="blog-details.html">Marketing</a>
                                                </div>
                                                <h3 class="tpblog-title"><a href="blog-details.html">The Trend of Marketing With <br> Tiktok, Should or not?</a></h3>
                                                <div class="tpblog-avatar d-flex align-items-center">
                                                   <div class="tpblog-avatar-thub mr-10">
                                                      <img loading="lazy" src="{{asset('assets/img/blog/comments/blog-avatar-2.png')}}" alt="">
                                                   </div>
                                                   <div class="tpblog-avatar-info">
                                                      <h5 class="tpblog-avatar-title">Jason Responsen</h5>
                                                      <span>March 16, 2023</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-4 col-md-6 col-sm-6">
                                          <div class="tpblog mb-30">
                                             <div class="tpblog-thumb mb-25 fix">
                                                <a href="blog-details.html"><img loading="lazy" src="{{asset('assets/img/blog/blog-1-bg-3.jpg')}}" alt=""></a>
                                             </div>
                                             <div class="tpblog-content">
                                                <div class="tpblog-tag">
                                                   <a href="blog-details.html">SEO Analysis</a>
                                                   <a href="blog-details.html">Marketing</a>
                                                </div>
                                                <h3 class="tpblog-title"><a href="blog-details.html">How to Increase Your ROI Through scientific SEM?</a></h3>
                                                <div class="tpblog-avatar d-flex align-items-center">
                                                   <div class="tpblog-avatar-thub mr-10">
                                                      <img loading="lazy" src="{{asset('assets/img/blog/comments/blog-avatar-3.png')}}" alt="">
                                                   </div>
                                                   <div class="tpblog-avatar-info">
                                                      <h5 class="tpblog-avatar-title">Eleanor Fant</h5>
                                                      <span>November 24, 2023</span>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section> -->
      <!-- blog-area-end -->

      <!-- contact-area-start -->

      <!-- <section class="contact-area theme-bg-3 pt-120 pb-120" id="free-consult">
                                 <div class="container">
                                    <div class="row">
                                       <div class="col-lg-5">
                                          <div class="tpcontact-box pr-70 mb-30">
                                             <div class="tpsection__content">
                                                <div class="tpsection-sub-title tpsection-sub-title-white mb-30">
                                                   <span>Contact Us</span>
                                                </div>
                                                <h2 class="tpsection-title tpsection-title-white mb-50">Ready to get started? <br> Let’s chat.</h2>
                                             </div>
                                             <div class="tpcontact-info">
                                                <div class="tpcontact-info-links">
                                                   <a href="mailto:info@ridgebenit.com">
                                                      <i>
                                                         <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                               d="M14.5 16.3H5.5C2.8 16.3 1 14.95 1 11.8V5.5C1 2.35 2.8 1 5.5 1H14.5C17.2 1 19 2.35 19 5.5V11.8C19 14.95 17.2 16.3 14.5 16.3Z"
                                                               stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                               stroke-linejoin="round" />
                                                            <path opacity="0.4"
                                                               d="M14.5 5.94922L11.683 8.19922C10.756 8.93722 9.235 8.93722 8.308 8.19922L5.5 5.94922"
                                                               stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                                               stroke-linejoin="round" />
                                                         </svg>
                                                      </i>
                                                      info@ridgebenit.com
                                                   </a>
                                                   <a href="#">
                                                      <i>
                                                         <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4"
                                                               d="M8.99996 11.6048C10.5986 11.6048 11.8946 10.3088 11.8946 8.7101C11.8946 7.11142 10.5986 5.81543 8.99996 5.81543C7.40127 5.81543 6.10529 7.11142 6.10529 8.7101C6.10529 10.3088 7.40127 11.6048 8.99996 11.6048Z"
                                                               stroke="white" stroke-width="1.5" />
                                                            <path
                                                               d="M1.22522 7.02129C3.05295 -1.01328 14.9564 -1.004 16.7748 7.03057C17.8418 11.7437 14.91 15.7331 12.34 18.201C10.4752 20.0009 7.52485 20.0009 5.65073 18.201C3.09006 15.7331 0.158278 11.7344 1.22522 7.02129Z"
                                                               stroke="white" stroke-width="1.5" />
                                                         </svg>
                                                      </i>
                                                      Shewrapara, Mirpur, Dhaka.
                                                   </a>
                                                   <a href="tell:+880 189 887 8819">
                                                      <i>
                                                         <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                               d="M16.976 14.064C16.976 14.352 16.912 14.648 16.776 14.936C16.64 15.224 16.464 15.496 16.232 15.752C15.84 16.184 15.408 16.496 14.92 16.696C14.44 16.896 13.92 17 13.36 17C12.544 17 11.672 16.808 10.752 16.416C9.832 16.024 8.912 15.496 8 14.832C7.08 14.16 6.208 13.416 5.376 12.592C4.552 11.76 3.808 10.888 3.144 9.976C2.488 9.064 1.96 8.152 1.576 7.248C1.192 6.336 1 5.464 1 4.632C1 4.088 1.096 3.568 1.288 3.088C1.48 2.6 1.784 2.152 2.208 1.752C2.72 1.248 3.28 1 3.872 1C4.096 1 4.32 1.048 4.52 1.144C4.728 1.24 4.912 1.384 5.056 1.592L6.912 4.208C7.056 4.408 7.16 4.592 7.232 4.768C7.304 4.936 7.344 5.104 7.344 5.256C7.344 5.448 7.288 5.64 7.176 5.824C7.072 6.008 6.92 6.2 6.728 6.392L6.12 7.024C6.032 7.112 5.992 7.216 5.992 7.344C5.992 7.408 6 7.464 6.016 7.528C6.04 7.592 6.064 7.64 6.08 7.688C6.224 7.952 6.472 8.296 6.824 8.712C7.184 9.128 7.568 9.552 7.984 9.976C8.416 10.4 8.832 10.792 9.256 11.152C9.672 11.504 10.016 11.744 10.288 11.888C10.328 11.904 10.376 11.928 10.432 11.952C10.496 11.976 10.56 11.984 10.632 11.984C10.768 11.984 10.872 11.936 10.96 11.848L11.568 11.248C11.768 11.048 11.96 10.896 12.144 10.8C12.328 10.688 12.512 10.632 12.712 10.632C12.864 10.632 13.024 10.664 13.2 10.736C13.376 10.808 13.56 10.912 13.76 11.048L16.408 12.928C16.616 13.072 16.76 13.24 16.848 13.44C16.928 13.64 16.976 13.84 16.976 14.064Z"
                                                               stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                                            <path opacity="0.4"
                                                               d="M14.2 6.5998C14.2 6.1198 13.824 5.3838 13.264 4.7838C12.752 4.2318 12.072 3.7998 11.4 3.7998"
                                                               stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                               stroke-linejoin="round" />
                                                            <path opacity="0.4" d="M17 6.6C17 3.504 14.496 1 11.4 1" stroke="white"
                                                               stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                         </svg>
                                                      </i>
                                                      +880 189 887 8819
                                                   </a>
                                                   <a href="tell:+880 189 887 8818">
                                                      <i>
                                                         <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                               d="M16.976 14.064C16.976 14.352 16.912 14.648 16.776 14.936C16.64 15.224 16.464 15.496 16.232 15.752C15.84 16.184 15.408 16.496 14.92 16.696C14.44 16.896 13.92 17 13.36 17C12.544 17 11.672 16.808 10.752 16.416C9.832 16.024 8.912 15.496 8 14.832C7.08 14.16 6.208 13.416 5.376 12.592C4.552 11.76 3.808 10.888 3.144 9.976C2.488 9.064 1.96 8.152 1.576 7.248C1.192 6.336 1 5.464 1 4.632C1 4.088 1.096 3.568 1.288 3.088C1.48 2.6 1.784 2.152 2.208 1.752C2.72 1.248 3.28 1 3.872 1C4.096 1 4.32 1.048 4.52 1.144C4.728 1.24 4.912 1.384 5.056 1.592L6.912 4.208C7.056 4.408 7.16 4.592 7.232 4.768C7.304 4.936 7.344 5.104 7.344 5.256C7.344 5.448 7.288 5.64 7.176 5.824C7.072 6.008 6.92 6.2 6.728 6.392L6.12 7.024C6.032 7.112 5.992 7.216 5.992 7.344C5.992 7.408 6 7.464 6.016 7.528C6.04 7.592 6.064 7.64 6.08 7.688C6.224 7.952 6.472 8.296 6.824 8.712C7.184 9.128 7.568 9.552 7.984 9.976C8.416 10.4 8.832 10.792 9.256 11.152C9.672 11.504 10.016 11.744 10.288 11.888C10.328 11.904 10.376 11.928 10.432 11.952C10.496 11.976 10.56 11.984 10.632 11.984C10.768 11.984 10.872 11.936 10.96 11.848L11.568 11.248C11.768 11.048 11.96 10.896 12.144 10.8C12.328 10.688 12.512 10.632 12.712 10.632C12.864 10.632 13.024 10.664 13.2 10.736C13.376 10.808 13.56 10.912 13.76 11.048L16.408 12.928C16.616 13.072 16.76 13.24 16.848 13.44C16.928 13.64 16.976 13.84 16.976 14.064Z"
                                                               stroke="white" stroke-width="1.5" stroke-miterlimit="10" />
                                                            <path opacity="0.4"
                                                               d="M14.2 6.5998C14.2 6.1198 13.824 5.3838 13.264 4.7838C12.752 4.2318 12.072 3.7998 11.4 3.7998"
                                                               stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                               stroke-linejoin="round" />
                                                            <path opacity="0.4" d="M17 6.6C17 3.504 14.496 1 11.4 1" stroke="white"
                                                               stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                         </svg>
                                                      </i>
                                                      +880 189 887 8818
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-7">
                                          <div class="p-relative">
                                             <div class="tpcontact-form p-relative ml-30">
                                                <h4 class="tpcontact-form-title mb-35">Book a Free Consultant</h4>
                                                <form id="contactForm" action="{{route('email.store')}}" method="POST">
                                                   @csrf

                                                   @if(session('success'))
                                                   <div class="alert alert-success">
                                                      {{session('success')}}
                                                   </div>
                                                   @endif

                                                   <div id="form-response"></div>

                                                   <div class="tpcontact-from-wrapper">
                                                      <div class="row gx-6">
                                                         <div class="col-lg-6">
                                                            <div class="tpcontact-form-input mb-20">
                                                               <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Full Name">
                                                               @error('name')
                                                               <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6">
                                                            <div class="tpcontact-form-input mb-20">
                                                               <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Phone No.">
                                                               @error('phone')
                                                               <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-6">
                                                            <div class="tpcontact-form-input mb-20">
                                                               <input type="date" name="booking_date" id="booking_date" min="{{ date('Y-m-d') }}" class="form-control" required>
                                                               @error('booking_date')
                                                               <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>

                                                         <div class="col-lg-6">
                                                            <div class="tpcontact-form-input mb-20">
                                                               <select name="booking_time" id="booking_time" class="form-control" style="height: 53px; padding: 0 20px;" required>
                                                                  <option value="">Select Time Slot</option>
                                                                  <option value="11:00">11:00 AM</option>
                                                                  <option value="12:00">12:00 PM</option>
                                                                  <option value="01:00">01:00 PM</option>
                                                                  <option value="02:00">02:00 PM</option>
                                                                  <option value="03:00">03:00 PM</option>
                                                                  <option value="04:00">04:00 PM</option>
                                                                  <option value="05:00">05:00 PM</option>
                                                                  <option value="06:00">06:00 PM</option>
                                                               </select>
                                                               @error('booking_time')
                                                               <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>


                                                         <div class="col-lg-12">
                                                            <div class="tpcontact-form-input mb-20">
                                                               <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email Address">
                                                               @error('email')
                                                               <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                                               @enderror
                                                            </div>
                                                         </div>
                                                         <div class="col-lg-12">
                                                            <div class="tpcontact-form-textarea tpcontact-form-input mb-25">
                                                               <textarea id="msg" value="{{old('msg')}}" placeholder="Message" name="msg"></textarea>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="tpcontact-form-submit">
                                                         <button type="submit">Send Message</button>
                                                      </div>
                                                   </div>
                                                </form>
                                             </div>
                                             <div class="tpcontact-shape d-none d-md-block">
                                                <div class="tpcontact-shape-one" data-parallax='{"y": -100, "smoothness": 20}'>
                                                   <img loading="lazy" src="{{asset('assets/img/shape/form-shape-1.png')}}" alt="">
                                                </div>
                                                <div class="tpcontact-shape-two" data-parallax='{"y": -100, "smoothness": 20}'>
                                                   <img loading="lazy" src="{{asset('assets/img/shape/form-shape-2.png')}}" alt="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section> -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
         $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
               e.preventDefault();

               // Clear old messages
               $('#form-response').html('');

               $.ajax({
                  url: "{{ route('email.store') }}",
                  method: "POST",
                  data: $(this).serialize(),
                  headers: {
                     'X-CSRF-TOKEN': $('input[name="_token"]').val()
                  },
                  success: function (res) {
                     $('#form-response').html('<div class="alert alert-success">Thanks for contacting us!</div>');
                     $('#contactForm')[0].reset();
                  },
                  error: function (xhr) {
                     if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorHtml = '<div class="alert alert-danger"><ul>';
                        $.each(errors, function (key, value) {
                           errorHtml += '<li>' + value[0] + '</li>';
                        });
                        errorHtml += '</ul></div>';
                        $('#form-response').html(errorHtml);
                     } else {
                        $('#form-response').html('<div class="alert alert-danger">An error occurred. Please try again.</div>');
                     }
                  }
               });
            });
         });
      </script>

      <script src="https://unpkg.com/slick-carousel@1.8.1/slick/slick.min.js"></script>

      <script>
         $('.slider123').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: false, // disabled arrows
            autoplay: true,
            autoplaySpeed: 1000,
            variableWidth: false,
            responsive: [
               {
                  breakpoint: 992,
                  settings: {
                     slidesToShow: 2
                  }
               },
               {
                  breakpoint: 600,
                  settings: {
                     slidesToShow: 1
                  }
               }
            ]
         });
      </script>


      <!-- for pop up modal of Free Consultation -->

      <!-- Free Consultation Modal -->
      <!-- <div id="consultationModal" class="modal">
                               <div class="modal-content">
                                   <span id="closeModalBtn" class="close">&times;</span>
                                   <h2 class="modal-title">Free Project Consultation</h2>

                                   <form action="#" method="POST">
                                       <input type="text" name="name" placeholder="Your Name" required>
                                       <input type="text" name="phone" placeholder="Phone Number" required>

                                       <div class="form-row">
                                               <input type="email" name="email" placeholder="Email Address" required>
                                               <select name="service" required>
                                                   <option value="">Select Service</option>
                                                   <option value="Software Development">Web Development</option>
                                                   <option value="Web Development">Software Development</option>
                                                   <option value="E-commerce Service">E-commerce Service</option>
                                                   <option value="Cloud Service">Cloud Service</option>
                                                   <option value="Mobile Development">Mobile Development</option>
                                                   <option value="Digital Marketing">Digital Marketing</option>
                                               </select>
                                           </div>

                                       <textarea name="message" placeholder="Tell us briefly about your project" rows="4" required></textarea>

                                       <button type="submit" class="submit-btn">Send Message</button>
                                   </form>
                               </div>
                           </div> -->



      <!--start css and js for floating for free consultation -->
      <!-- <style>
                           .modal {
                               position: fixed;
                               z-index: 9999;
                               left: 0;
                               top: 0;
                               width: 100%;
                               height: 100%;
                               background: rgba(0,0,0,0.5);
                               display: none;
                               justify-content: center;
                               align-items: center;
                           }
                           .modal-content {
                               background: #fff;
                               padding: 30px;
                               border-radius: 10px;
                               width: 90%;
                               max-width: 500px;
                               position: relative;
                               box-shadow: 0 0 30px rgba(0,0,0,0.1);
                               transform: translateY(30px);
                               opacity: 0;
                               animation: slideFadeIn 0.4s ease-out forwards;
                           }
                           .modal-title {
                               font-size: 22px;
                               font-weight: 600;
                               margin-bottom: 20px;
                               text-align: center;
                           }
                           .modal-content input,
                           .modal-content select,
                           .modal-content textarea {
                               width: 100%;
                               padding: 12px;
                               margin-bottom: 15px;
                               border: 1px solid #ccc;
                               border-radius: 5px;
                               font-size: 15px;
                           }
                           .form-row {
                               display: flex;
                               gap: 10px;
                               flex-wrap: wrap;
                           }
                           .modal-content .submit-btn {
                               width: 100%;
                               background: #002C6A;
                               color: white;
                               padding: 12px;
                               border: none;
                               border-radius: 5px;
                               font-size: 16px;
                               font-weight: 500;
                               cursor: pointer;
                           }
                           .modal-content .close {
                               position: absolute;
                               top: 12px;
                               right: 15px;
                               font-size: 24px;
                               color: #888;
                               cursor: pointer;
                           }
                           @keyframes slideFadeIn {
                               from { transform: translateY(30px); opacity: 0; }
                               to   { transform: translateY(0px); opacity: 1; }
                           }
                           @keyframes slideFadeOut {
                               from { transform: translateY(0px); opacity: 1; }
                               to   { transform: translateY(30px); opacity: 0; }
                           }
                           </style>
                           <script>
                               const openBtn = document.getElementById('freeConsultationBtn');
                               const modal = document.getElementById('consultationModal');
                               const closeBtn = document.getElementById('closeModalBtn');
                               const modalContent = modal.querySelector('.modal-content');

                               openBtn.addEventListener('click', function () {
                                   modal.style.display = 'flex';
                                   modalContent.style.animation = 'slideFadeIn 0.4s ease-out forwards';
                               });

                               function closeModalWithAnimation() {
                                   modalContent.style.animation = 'slideFadeOut 0.3s ease-in forwards';
                                   setTimeout(() => {
                                       modal.style.display = 'none';
                                   }, 300);
                               }

                               closeBtn.addEventListener('click', closeModalWithAnimation);

                               window.addEventListener('click', function (e) {
                                   if (e.target === modal) {
                                       closeModalWithAnimation();
                                   }
                               });
                           </script> -->
      <!--start css and js for floating for free consultation -->



      <!-- start css and JS for textimonial area  -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


      <!-- finished css and JS for textimonial area  -->


      <!--start css for Case Area (projects of home page) -->
      <style>
         /* Project Card Layout */
         .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            height: 350px;
            /* Fixed height for all cards */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
         }

         /* Hover Effect for Cards */
         .project-card:hover {
            transform: scale(1.05);
            /* Slight zoom on hover */
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.15);
         }

         /* Project Image Wrapper */
         .project-image-wrapper {
            position: relative;
            height: 100%;
            /* Full height of the card */
            overflow: hidden;
            min-height: 350px;
         }

         /* Screenshot Image */
         .project-img {
            width: 100%;
            height: 200%;
            /* Make image twice the size of the container to allow scrolling */
            object-fit: cover;
            /* Ensure the image covers the area without distortion */
            object-position: top center;
            /* Align the image from the top */
            transition: transform 1s ease-in-out;
            transform: translateY(0);
            /* Initially at the top */
         }

         /* Scroll effect on hover */
         .project-card:hover .project-img {
            transform: translateY(-50%);
            /* Scroll the image up to reveal the full website */
         }

         /* Project Content (Title, Description, Tags) */
         .project-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            z-index: 1;
            /* Ensure text stays on top */
            color: white;
            background-color: rgba(224, 224, 224, 0.75);
            /* Semi-transparent background */
            padding: 15px;
            border-radius: 10px;
            transform: translateY(50%);
            /* Move the content down to avoid overlap with scrolling content */

         }

         .project-title {
            font-size: 22px;
            color: rgba(0, 0, 0, 1);
            font-weight: 1000;
            margin: 0;
         }

         .project-desc {
            font-size: 18px;
            margin-top: 5px;
         }

         .project-tags {
            margin-top: 10px;
         }

         .tag {
            background-color: #4C5FD5;
            color: white;
            padding: 5px 10px;
            margin-right: 10px;
            border-radius: 5px;
            font-size: 16px;
         }

         /* Disable scrolling effect for specific projects (like Dcon) */
         .dcon-project .project-img {
            object-fit: contain;
            /* Ensure it shows the whole image */
            height: auto;
            /* Let the image height adjust to maintain the aspect ratio */
            width: 100%;
            /* Keep the width to fill the card */
            transform: none;
            /* Disable scrolling effect */
         }

         /* Responsive Adjustments */
         @media (max-width: 767px) {
            .project-card {
               height: 250px;
               /* Smaller card height for mobile */
            }

            .project-img {
               height: 300%;
               /* Increase height for mobile so the scroll effect is more visible */
            }
         }
      </style>
      <!-- <style>
                           .homepage-projects .project-card {
                             background: #fff;
                             border-radius: 12px;
                             box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
                             overflow: hidden;
                             transition: all 0.3s ease-in-out;
                             height: 100%;
                           }

                           .homepage-projects .project-card:hover {
                             transform: translateY(-5px);
                             box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
                           }

                           .homepage-projects .project-image img {
                             width: 100%;
                             height: 200px;
                             object-fit: cover;
                             border-bottom: 1px solid #eee;
                           }

                           .homepage-projects .project-content {
                             padding: 20px;
                             text-align: center;
                           }

                           .homepage-projects .project-title a {
                             font-size: 18px;
                             font-weight: 700;
                             color: #1a1a1a;
                             text-decoration: none;
                           }

                           .homepage-projects .project-title a:hover {
                             color: #3c5fd7;
                           }

                           .homepage-projects .project-desc {
                             font-size: 14px;
                             color: #666;
                             margin-top: 8px;
                             margin-bottom: 12px;
                           }

                           .homepage-projects .project-tags {
                             display: flex;
                             justify-content: center;
                             gap: 8px;
                             flex-wrap: wrap;
                           }

                           .homepage-projects .tag {
                             background-color: #eef2ff;
                             color: #3c5fd7;
                             padding: 6px 12px;
                             border-radius: 30px;
                             font-size: 12px;
                             font-weight: 600;
                           }

                           .section-header .section-subtitle {
                             display: block;
                             font-size: 14px;
                             color: #7f8fa6;
                             margin-bottom: 5px;
                             font-weight: 500;
                           }

                           .section-header .section-title {
                             font-size: 28px;
                             font-weight: 700;
                             color: #1e1e2d;
                           }

                           </style> -->
      <!--fnish css for Case Area (projects of home page) -->



      <!-- start css for 12 years of experience(choose-area tpchoose-bottom pt-80) -->
      <style>
         .choose-area {
            margin-top: 30px;
            padding-top: 30px;
            background-color: #f8fafb;
            padding-bottom: 30px;
         }

         .portfolio-inner-2-head {
            font-size: 36px;
            font-weight: 700;
            color: #004a87;
            margin-bottom: 20px;
         }

         .portfolio-inner-2-desc {
            font-size: 18px;
            color: #6c757d;
            margin-top: 15px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
         }

         .choose-area .container {
            max-width: 1200px;
         }

         .text-center {
            text-align: center;
         }

         .mb-50 {
            margin-bottom: 50px;
         }

         @media (max-width: 768px) {
            .portfolio-inner-2-head {
               font-size: 30px;
            }

            .portfolio-inner-2-desc {
               font-size: 16px;
            }
         }
      </style>
      <!-- end css for 12 years of experience(choose-area tpchoose-bottom pt-80) -->

      <!-- start css & js for Brand showcase slide -->

      <!-- <style>
                              /* General Styling for the Brand Showcase Section */
                           .brand-showcase-section {
                             background-color: #f8fafb;
                             padding-top: 30px;
                             padding-bottom: 30px;
                           }

                           .section-title {
                             color: #004a87;
                             font-size: 36px;
                             font-weight: 700;
                           }

                           .section-subtitle {
                             font-size: 18px;
                             color: #6c757d;
                             margin-top: 15px;
                             max-width: 600px;
                             margin-left: auto;
                             margin-right: auto;
                             line-height: 1.6;
                           }

                           /* Specific styles for the custom brand slider */
                           .brand-slider-container {
                             padding-bottom: 40px;
                             display: flex;
                             justify-content: center;
                             align-items: center;
                           }

                           .brand-slider-container .brand-slider-content {
                             display: flex;
                             gap: 40px; /* Space between images */
                             padding: 0;
                             margin: 0;
                             overflow: hidden;
                             position: relative;
                             justify-content: center; /* Centers the items */
                           }

                           .brand-slider-container .brand-slider-item {
                             width: 150px; /* Adjust the size of the logos */
                             transition: transform 0.3s ease;
                             display: flex;
                             justify-content: center;
                             align-items: center;
                           }

                           .brand-slider-container .brand-slider-item img {
                             width: 100%;
                             height: auto;
                             max-width: 150px; /* Ensures the logos don't stretch too much */
                             border-radius: 10px;
                             transition: transform 0.3s ease;
                           }

                           /* Hover effect on the brand slider items */
                           .brand-slider-container .brand-slider-item:hover {
                             transform: scale(1.1);
                           }

                           .brand-slider-container .brand-slider-item img:hover {
                             transform: scale(1.1);
                           }

                           /* Mobile responsiveness */
                           @media (max-width: 768px) {
                             .brand-slider-container .brand-slider-item {
                               width: 120px; /* Adjust the logo size for smaller screens */
                             }
                           }

                           @media (max-width: 576px) {
                             .brand-slider-container .brand-slider-item {
                               width: 100px; /* Adjust the logo size for very small screens */
                             }
                           }

                           </style>
                           <script type="text/javascript">
                             $(document).ready(function(){
                               $('.brand-slider-container .brand-slider-content').slick({
                                 infinite: true,               // Makes the slider loop infinitely
                                 slidesToShow: 5,              // Number of logos to show at once
                                 slidesToScroll: 1,            // Number of slides to scroll at a time
                                 autoplay: true,               // Enable auto-sliding
                                 autoplaySpeed: 1000,          // Time between slides (in milliseconds)
                                 arrows: false,                // Hide navigation arrows (optional)
                                 dots: false,                  // Hide navigation dots (optional)
                                 responsive: [
                                   {
                                     breakpoint: 1024,         // For tablets
                                     settings: {
                                       slidesToShow: 3,        // Show 3 logos at a time
                                       slidesToScroll: 1,
                                     }
                                   },
                                   {
                                     breakpoint: 768,          // For mobile screens
                                     settings: {
                                       slidesToShow: 2,        // Show 2 logos at a time
                                       slidesToScroll: 1,
                                     }
                                   },
                                   {
                                     breakpoint: 576,          // For very small screens
                                     settings: {
                                       slidesToShow: 1,        // Show 1 logo at a time
                                       slidesToScroll: 1,
                                     }
                                   }
                                 ]
                               });
                             });
                           </script> -->

      <!-- end css & js for projects show slide -->


      <!-- css for choose-area-start -->

      <!-- <style>
                              .rb-about-area {
                             background-color: #fff;
                             padding-top: 60px;
                             padding-bottom: 60px;
                           }

                           .rb-about-thumb {
                             position: relative;
                             border-radius: 12px;
                             overflow: hidden;
                           }

                           .rb-about-img-border {
                             border-radius: 12px;
                             width: 100%;
                             height: auto;
                             box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                             z-index: 2;
                             position: relative;
                           }

                           .rb-about-shapes img {
                             position: absolute;
                             z-index: 1;
                           }

                           .rb-about-shapes .shape-one {
                             top: -20px;
                             left: -30px;
                             width: 60px;
                           }

                           .rb-about-shapes .shape-two {
                             bottom: -15px;
                             left: 30%;
                             width: 100px;
                             opacity: 0.8;
                           }

                           .rb-about-shapes .shape-three {
                             top: 50%;
                             right: -25px;
                             transform: translateY(-50%);
                             width: 80px;
                             opacity: 0.6;
                           }

                           .rb-about-content .rb-subtitle span {
                             font-size: 14px;
                             font-weight: 600;
                             color: #6c757d;
                             text-transform: uppercase;
                             letter-spacing: 1px;
                           }

                           .rb-title {
                             font-size: 36px;
                             font-weight: 700;
                             color: #111;
                             line-height: 1.4;
                           }

                           .rb-about-content p {
                             font-size: 16px;
                             color: #555;
                             line-height: 1.8;
                           }

                             </style> -->
      <!-- css for choose-area-end -->


      <!-- funfact-area-start -->
      <style>
         .rb-subtitle span {
            font-size: 18px;
            font-weight: 600;
            color: #bbb;
            text-transform: uppercase;
            letter-spacing: 1px;
         }

         .rb-title {
            font-size: 40px;
            font-weight: 700;
            color: #fff;
         }

         .rb-funfact-card {
            transition: all 0.3s ease;
         }

         .rb-funfact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
         }

         .rb-funfact-label {
            font-size: 20px;
            font-weight: 600;
            color: #001f3f;
            display: block;
         }

         .rb-funfact-count {
            font-size: 32px;
            font-weight: 700;
            color: #001f3f;
         }

         .rb-funfact-count span {
            font-weight: 500;
            color: #007BFF;
         }

         .rb-funfact-tags span img {
            vertical-align: middle;
         }

         .rb-funfact-shape-1 {
            position: absolute;
            top: -30px;
            left: 10%;
            width: 80px;
            opacity: 0.2;
         }

         .rb-funfact-shape-2 {
            position: absolute;
            top: 0;
            right: 10%;
            width: 100px;
            opacity: 0.2;
         }
      </style>
      <!-- funfact-area-end -->



      <!-- CSS & ICONS of services-area-start -->
      <!-- Icon sprite: place once per page -->
      <svg width="0" height="0" style="position:absolute;left:-9999px;visibility:hidden" aria-hidden="true">
         <!-- Software Development & Engineering -->
         <symbol id="icon-software" viewBox="0 0 24 24">
            <path d="M3 5h18v14H3z" fill="none" stroke="currentColor" stroke-width="1.5" />
            <path d="M8 9l-2 3 2 3M16 9l2 3-2 3M11 16h2" fill="none" stroke="currentColor" stroke-width="1.5"
               stroke-linecap="round" stroke-linejoin="round" />
         </symbol>

         <!-- Web Development -->
         <symbol id="icon-web" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.5" />
            <path d="M3 12h18M12 3a15 15 0 010 18M12 3a15 15 0 000 18" fill="none" stroke="currentColor" stroke-width="1.5"
               stroke-linecap="round" />
         </symbol>

         <!-- E-commerce Service -->
         <symbol id="icon-ecommerce" viewBox="0 0 24 24">
            <circle cx="9" cy="20" r="1.5" fill="currentColor" />
            <circle cx="17" cy="20" r="1.5" fill="currentColor" />
            <path d="M3 4h2l2.2 10.5a2 2 0 002 1.5h6.6a2 2 0 002-1.5L20 8H7" fill="none" stroke="currentColor"
               stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </symbol>

         <!-- Digital Marketing -->
         <symbol id="icon-marketing" viewBox="0 0 24 24">
            <path d="M3 11v2l10 3V8L3 11z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
            <path d="M13 9l7-3v12l-7-3M6 13l1.5 5" fill="none" stroke="currentColor" stroke-width="1.5"
               stroke-linecap="round" />
         </symbol>

         <!-- Cloud Service -->
         <symbol id="icon-cloud" viewBox="0 0 24 24">
            <path d="M7 18h9a4 4 0 000-8 6 6 0 00-11.6 1.5A3.5 3.5 0 007 18z" fill="none" stroke="currentColor"
               stroke-width="1.5" stroke-linejoin="round" />
         </symbol>

         <!-- Mobile Application -->
         <symbol id="icon-mobile" viewBox="0 0 24 24">
            <rect x="7" y="3" width="10" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="1.5" />
            <circle cx="12" cy="17.5" r="1" fill="currentColor" />
         </symbol>

         <!-- DevOps & IT Operations -->
         <symbol id="icon-devops" viewBox="0 0 24 24">
            <path d="M3 12h18M12 3a15 15 0 010 18M12 3a15 15 0 000 18" fill="none" stroke="currentColor"
               stroke-width="1.5" />
            <path d="M7 5h10l-5 7z" fill="none" stroke="currentColor" stroke-width="1.5" />
         </symbol>

         <!-- Cybersecurity -->
         <symbol id="icon-cybersecurity" viewBox="0 0 24 24">
            <path d="M12 2l3 7H9l3-7zm0 12v8h-4v-8h4zm0-8v4h-4V6h4z" fill="none" stroke="currentColor"
               stroke-width="1.5" />
         </symbol>

         <!-- Data & Analytics -->
         <symbol id="icon-data-analytics" viewBox="0 0 24 24">
            <path d="M3 7h18M3 11h18M3 15h18M3 19h18" fill="none" stroke="currentColor" stroke-width="1.5" />
            <path d="M5 6v12l3-3l4 3l4-3l3 3V6" fill="none" stroke="currentColor" stroke-width="1.5" />
         </symbol>

         <!-- AI & Automation Icon -->
         <symbol id="icon-ai" viewBox="0 0 24 24">
            <path
               d="M12 2C8.69 2 6 4.69 6 8C6 9.26 6.53 10.42 7.41 11.31L6 13H7.24C7.92 12.07 9.23 11.56 10.56 11.56C12.07 11.56 13.29 12.39 14.27 13.58L12 15.18L14.3 16.76C13.29 17.96 12.07 18.78 10.56 18.78C9.23 18.78 7.92 18.27 7.24 17.34H6L7.41 15.69C6.53 14.8 6 13.64 6 12C6 7.69 8.69 5 12 5C13.8 5 15.5 6.29 16.1 8.1C16.88 7.43 17.84 6.72 18.99 6.72C20.11 6.72 21.07 7.64 21.24 8.79C21.61 8.33 22 7.73 22 7C22 4.69 19.31 2 16 2C14.68 2 13.4 2.58 12.52 3.49C12.26 2.81 12.14 2 12 2Z"
               fill="currentColor" />
         </symbol>

      </svg>


      <style>
         /* ===== Ridgeben | Services (no collisions) ===== */
         .services-section {
            --rb-primary: #4C5FD5;
            /* royal blue */
            --rb-accent: #6D28D9;
            /* deep purple */
            --rb-ink: #0F172A;
            --rb-muted: #475569;
            --rb-bg: #FFFFFF;
            --rb-surface: #F7F9FC;
            padding-top: 80px;
            padding-bottom: 110px;
            background: linear-gradient(180deg, var(--rb-surface) 0%, var(--rb-bg) 100%);
         }

         /* Header */
         .services-header .services-subtitle span {
            display: inline-block;
            font-weight: 600;
            letter-spacing: .02em;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(76, 95, 213, .08);
            color: var(--rb-primary);
         }

         .services-header .services-title {
            font-weight: 800;
            color: var(--rb-ink);
            margin: 6px 0;
            line-height: 1.15;
         }

         .services-header .services-title+.services-title {
            background: linear-gradient(135deg, var(--rb-accent), var(--rb-primary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
         }

         /* Grid */
         .services-grid {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 24px;
            grid-template-columns: repeat(3, 1fr);
            align-items: stretch;
         }

         /* Card: anchor for better focus + equal height */
         .service-item {
            display: block;
            height: 100%;
         }

         .service-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 10px;
            height: 100%;
            padding: 28px 22px 24px;
            border-radius: 18px;
            background: linear-gradient(#fff, #fff) padding-box,
               linear-gradient(135deg, rgba(109, 40, 217, .55), rgba(76, 95, 213, .55)) border-box;
            border: 1px solid transparent;
            box-shadow: 0 6px 18px rgba(15, 23, 42, .06);
            text-decoration: none;
            transition: transform .28s ease, box-shadow .28s ease, background .28s ease;
         }

         .service-box:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(15, 23, 42, .12);
            background: linear-gradient(#fff, #fff) padding-box,
               linear-gradient(135deg, rgba(109, 40, 217, .85), rgba(76, 95, 213, .85)) border-box;
         }

         /* Icon tile */
         .service-icon {
            width: 76px;
            height: 76px;
            border-radius: 20px;
            display: grid;
            place-items: center;
            background: radial-gradient(120% 120% at 0% 0%, rgba(109, 40, 217, .14), rgba(76, 95, 213, .10) 60%, transparent 100%);
            margin-bottom: 8px;
         }

         /* Icon vector */
         .service-svg {
            width: 38px;
            height: 38px;
            color: var(--rb-primary);
         }

         /* Titles and text */
         .service-title {
            font-size: 26px;
            font-weight: 700;
            color: var(--rb-ink);
            margin: 0;
            letter-spacing: .2px;
         }

         .service-content p {
            color: var(--rb-muted);
            font-size: 20px;
            margin: 6px 0 0;
         }

         /* Accessibility focus */
         .service-box:focus {
            outline: none;
         }

         .service-box:focus-visible {
            box-shadow: 0 0 0 3px rgba(76, 95, 213, .35);
         }

         /* Responsive */
         @media (max-width:575px) {
            .services-section {
               padding-top: 60px;
               padding-bottom: 80px;
            }

            .service-box {
               padding: 24px 18px;
            }
         }

         @media (prefers-reduced-motion: reduce) {
            .service-box {
               transition: none;
            }
         }
      </style>

      <!-- CSS of services-area-end -->
      <style>

      </style>


      <script>
         // Universal reveal animation
         const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
               if (entry.isIntersecting) {
                  entry.target.classList.add('visible');
                  revealObserver.unobserve(entry.target);
               }
            });
         }, { threshold: 0.7 });

         // Watch all sections that use 'visible' animation
         document.querySelectorAll('.tpabout__list li, .tech-col, .industry-col,.faq-item.scroll-reveal, .whychoose-card.scroll-reveal, .scroll-reveal')
            .forEach(el => revealObserver.observe(el));

      </script>
   @endsection