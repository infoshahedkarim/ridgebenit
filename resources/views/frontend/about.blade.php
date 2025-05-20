@extends('layouts.frontend')
@section('title')
    Home
@endsection
@section('page-title')
    User List
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

      <!-- breadcrumb-about-area-start -->
      <div class="breadcrumb-about-area scene p-relative breadcrumb-bg">
         <div class="about-inner-shape">
            <div class="about-inner-shape-2 d-none d-md-block">
               <img loading="lazy" class="layer" data-depth="0.5" src="assets/img/shape/about-inner-shape-1.png" alt="">
            </div>
            <div class="about-inner-shape-3 d-none d-md-block">
               <img loading="lazy" class="layer" data-depth="0.5" src="assets/img/shape/about-inner-shape-2.png" alt="">
            </div>
         </div>
         <div class="tpbanner-shape-y scene-y">
            <div class="about-inner-shape-4 d-none d-md-block">
               <img loading="lazy" class="layer" data-depth="0.6" src="assets/img/shape/inner-hand-1.png" alt="">
            </div>
         </div>
         <!-- breadcrumb-area-start -->
         <section class="breadcrumb-area pb-115 pt-195">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">About Us</h3>
                        <div class="breadcrumb__list">
                           <span><a href="index.html">Home</a></span>
                           <span class="dvdr"></span>
                           <span>About Us</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb-area-end -->
         <!-- about-area-start -->
         <section class="about-area pb-75 p-relative">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="about-inner-thumb">
                        <div class="about-inner-shape-1">
                           <img loading="lazy" src="assets/img/banner/girls.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="about-inner-content">
                        <span>Welcome</span>
                        <h4 class="about-inner-title">We offer experiences,
                        more than services.</h4>
                        <p>We are experts in developing professionally customized web solutions and providing digital solutions. We have completed over 100 successful projects in seven countries, 
                           combining global insights with local knowledge. In Ridgeben, We offer high-quality and expert solutions to enhance your online visibility. Moreover, a seamless process to ensure your business stands out.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about-area-end -->
      </div>
      <!-- breadcrumb-about-area-end -->

      <!-- brand-area-start -->
      <section class="brand-area pb-120">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-2 offset-lg-5 col-md-4">
                  <div class="brand-wrapper ">
                     <div class="brand-inner-content">
                        <h4 class="brand-inner-title">Scroll down <br> to explore more</h4>
                        <a href="#our-misson">
                           <i>
                              <svg width="20" height="30" viewBox="0 0 20 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <rect x="0.75" y="0.75" width="18.5" height="28.5" rx="9.25" stroke="white"
                                    stroke-width="1.5" />
                                 <rect x="7.75" y="6.75" width="4.5" height="4.5" rx="2.25" stroke="white"
                                    stroke-width="1.5" />
                              </svg>
                           </i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-8">
                   <div class="slider123 col-xl-12 pb-40">
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/1.jpg')}}" alt="Product 1"></div>
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/3.webp')}}" alt="Product 3"></div>
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/4.png')}}" alt="Product 4"></div>
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/5.png')}}" alt="Product 5"></div>
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/6.png')}}" alt="Product 6"></div>
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/7.png')}}" alt="Product 7"></div>
    <div class="card123"><img loading="lazy" src="{{asset('assets/partners/8.webp')}}" alt="Product 8"></div>
</div>
               </div>
            </div>
         </div>
      </section>
      <!-- brand-area-end -->


      <!-- counter-area-start -->
      <div class="counter-area pb-120">
         <div class="container">
            <div class="counter-border">
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <div class="inner-counter">
                        <div class="inner-counter-shape">
                           <img loading="lazy" src="assets/img/shape/counter-shape-1.png" alt="">
                        </div>
                        <div class="inner-counter-count d-flex align-items-center ml-45">
                           <div class="inner-counter-list">
                              <span data-purecounter-duration="1" data-purecounter-end="11"
                                 class="purecounter">11</span>
                              <i class="fa-regular fa-plus"></i>
                           </div>
                           <div class="inner-counter-info">
                              <span>Years <br>
                                 Of Experience</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="inner-counter ml-70">
                        <div class="inner-counter-shape inner-counter-shape-2">
                           <img loading="lazy" src="assets/img/shape/counter-shape-2.png" alt="">
                        </div>
                        <div class="inner-counter-count d-flex align-items-center">
                           <div class="inner-counter-list">
                              <span data-purecounter-duration="1" data-purecounter-end="150" class="purecounter"></span>
                              <i class="fa-regular fa-plus"></i>
                           </div>
                           <div class="inner-counter-info">
                              <span>Project <br> Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <div class="inner-counter d-flex justify-content-end">
                        <div class="inner-counter-shape inner-counter-shape-3">
                           <img loading="lazy" src="assets/img/shape/counter-shape-3.png" alt="">
                        </div>
                        <div class="inner-counter-count d-flex align-items-center">
                           <div class="inner-counter-list">
                              <span data-purecounter-duration="1" data-purecounter-end="70"
                                 class="purecounter">75</span>
                              <i class="fa-regular fa-percent"></i>
                           </div>
                           <div class="inner-counter-info">
                              <span>Repeated Clients</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- counter-area-end -->

    
          <!-- project-seo-area-start -->
      <section class="project-area project-inner-height">
         <div class="container">
            <div class="row">
               <div class="row align-items-center">
                  <div class="col-lg-7">
                  <div class="seo-5-thumb p-relative mb-40">
                     <div class="seo-5-main-bg">
                        <img loading="lazy" src="assets/img/bg/seo-5-bg-1.png" alt="">
                     </div>
                     <div class="seo-5-shape d-none d-md-block">
                        <div class="seo-5-shape-one">
                           <img loading="lazy" src="assets/img/shape/seo-5-shape-1.png" alt="">
                        </div>
                        <div class="seo-5-shape-two">
                           <img loading="lazy" src="assets/img/shape/seo-5-shape-2.png" alt="">
                        </div>
                        <div class="seo-5-shape-three">
                           <img loading="lazy" src="assets/img/shape/seo-5-shape-3.png" alt="">
                        </div>
                        <div class="seo-5-shape-four">
                           <img loading="lazy" src="assets/img/shape/seo-5-shape-4.png" alt="">
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="col-lg-5">
                  <div class="seo-5 mt-30 mb-40">
                     <div class="section-3 mb-40">
                        <span class="section-3-sub-title">Why we are the BEST?</span>
                        <div class="section-3-title">We have– years  of experience</div>
                     </div>
                     <ul class="seo-5-list mb-50">
                        <li>
                           <div class="seo-5-list-item d-flex">
                              <div class="seo-5-list-icon">
                                 <i class="fa-sharp fa-solid fa-circle-check"></i>
                              </div>
                              <div class="seo-5-list-text">
                                 <h4 class="title">Experienced Team</h4>
                                 <span>You are in the hands of professional developers, designers, and SEO experts who work together to deliver results.
                                 </span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="seo-5-list-item d-flex">
                              <div class="seo-5-list-icon">
                                 <i class="fa-sharp fa-solid fa-circle-check"></i>
                              </div>
                              <div class="seo-5-list-text">
                                 <h4 class="title">Creative Design</h4>
                                 <span>We create lasting impressions through thoughtful design. Our goal is 
                                    to focus on what matters most and make the design appealing to clients.</span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="seo-5-list-item d-flex">
                              <div class="seo-5-list-icon">
                                 <i class="fa-sharp fa-solid fa-circle-check"></i>
                              </div>
                              <div class="seo-5-list-text">
                                 <h4 class="title">Data Protection</h4>
                                 <span>We strongly protect your data with proper security measures and
                                     monitoring, keeping it safe and private while you focus on your business. </span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="seo-5-list-item d-flex">
                              <div class="seo-5-list-icon">
                                 <i class="fa-sharp fa-solid fa-circle-check"></i>
                              </div>
                              <div class="seo-5-list-text">
                                 <h4 class="title">Business Growth</h4>
                                 <span>Grow your business with a great website, app, and improved search 
                                    rankings. We help you to enhance visitors, engagement, and sales.
                                 </span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="seo-5-list-item d-flex">
                              <div class="seo-5-list-icon">
                                 <i class="fa-sharp fa-solid fa-circle-check"></i>
                              </div>
                              <div class="seo-5-list-text">
                                 <h4 class="title">Ongoing Support</h4>
                                 <span>Our team is always here to provide professional support, assisting you with updates at every step of the process.</span>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="seo-5-btn">
                        <a href="{{route('contact')}}" class="tp-btn-blue">Contact Us</a>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- project-seo-area-end -->



      <!-- mission-area-start -->
      <div class="mission-area pb-60 pt-60" id="our-misson">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mission-content ">
                     <h4 class="about-inner-title">Our Mission</h4>
                     <p style="color: #fff;">Empower businesses through our expertise.
                     Our mission at Ridgeben IT is to empower businesses through our expertise. Our solutions are based on unique research. 
                     We understand the importance of having a strong online presence in today's digital world, and we are committed to helping our clients achieve this goal.</p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="mission-shape p-relative d-none d-lg-block">
                     <div class="mission-shape-1">
                        <img loading="lazy" src="assets/img/shape/smill.png" alt="triangle">
                     </div>
                  </div>
               </div>
            </div>
            <div class="mission-two">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mission-content">
                        <h4 class="about-inner-title">Our Vision</h4>
                        <p style="color: #000;">Taking our services to the top—because the world deserves the best!
                        We offer solutions according to your specific needs. Our vision is to turn our client's visions into reality with hard work and dedication. 
                        Our expertise lies in having a specialized team dedicated to your project.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mission-area-end -->

   

  

        <!-- process-area-start -->
      <section class="process__area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="tpsection__wrapper text-center mb-70">
                     <div class="tpbanner__sub-title mb-15">
                        <span>Ridgeben IT</span>
                        <i>
                           <svg width="124" height="38" viewBox="0 0 124 38" fill="none"
                              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <rect width="124" height="38" fill="url(#pattern0)" fill-opacity="0.08" />
                              <defs>
                                 <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_933_1323"
                                       transform="translate(-0.0596774) scale(0.00612903 0.02)" />
                                 </pattern>
                                 <image id="image0_933_1323" width="180" height="50"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
                              </defs>
                           </svg>
                        </i>
                     </div>
                     <h2 class="tpsection__title">The Uniqueness that make us different</h2>
                  </div>
               </div>
            </div>
            <div class="tpprocess__border-bottom p-relative pb-45">
               <div class="tpprocess-shape-four d-none d-md-block">
                  <img loading="lazy" src="assets/img/shape/process-rocket.png" alt="">
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="tpprocess__item p-relative mb-40">
                        <div class="tpprocess__wrapper">
                           <span class="tpprocess__count mb-25">1</span>
                           <h4 class="tpprocess__title">
                           Delivering excellence worldwide with customized solutions</h4>
                        </div>
                        <div class="tpprocess-shape-one d-none d-md-block">
                           <svg width="112" height="15" viewBox="0 0 112 15" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path class="line-dash-path" d="M1 8.56464C18.4695 1.84561 64.9267 -6.52437 111 13.7479"
                                 stroke="#A6A8B0" stroke-dasharray="4 5" />
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="tpprocess__item p-relative ml-30 mb-40">
                        <div class="tpprocess__wrapper tpprocess__two">
                           <span class="tpprocess__count mb-25">2</span>
                           <h4 class="tpprocess__title">
                           Expert teams ensuring innovative, reliable results.</h4>
                        </div>
                        <div class="tpprocess-shape-two d-none d-lg-block">
                           <svg width="112" height="15" viewBox="0 0 112 15" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path class="line-dash-path" d="M1 6.43536C18.4695 13.1544 64.9267 21.5244 111 1.25212"
                                 stroke="#A6A8B0" stroke-dasharray="4 5" />
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="tpprocess__item p-relative ml-55 mb-40">
                        <div class="tpprocess__wrapper tpprocess__three">
                           <span class="tpprocess__count mb-25">3</span>
                           <h4 class="tpprocess__title">
                           Inclusive culture fostering creativity and collaboration.</h4>
                        </div>
                        <div class="tpprocess-shape-three d-none d-md-block">
                           <svg width="112" height="15" viewBox="0 0 112 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path class="line-dash-path" d="M1 8.56464C18.4695 1.84561 64.9267 -6.52437 111 13.7479" stroke="#A6A8B0" stroke-dasharray="4 5"/>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="tpprocess__item d-flex justify-content-end mb-40">
                        <div class="tpprocess__wrapper tpprocess__four">
                           <span class="tpprocess__count mb-25">4</span>
                           <h4 class="tpprocess__title">
                           Continuous monitoring for quality and improvement.</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- process-area-end -->

      <!-- team-area-start -->
      <section class="team-area pb-50 pt-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-3 text-center mb-35">
                     <div class="section-3-title mb-10">Meet our team of <br> expert</div>
                     <p>We're a 100% remote team spread all across the world!</p>
                  </div>
                  <!-- <div class="team-inner-all  text-center mb-70">
                     <a href="team.html" class="tp-btn">Join Our Team</a>
                  </div> -->
               </div>
            </div>
            <div class="row gx-9 pb-30">
   <div class="col-lg-3 col-md-6">
      <div class="team-5-item text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/maruf.png" alt="" class="mx-auto" style="width: 180px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Md. Maruf Mamun</a></h4>
            <p>Managing Director</p>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-2 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/faisal.png" alt="" class="mx-auto" style="width: 180px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Md Faisal Rahman</a></h4>
            <p>Product Specialist</p>
         </div>
      </div>
   </div>
   
   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-4 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/kerl.png" alt="" class="mx-auto" style="width: 180px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Kerl Milar</a></h4>
            <p>Senior Consultant</p>
         </div>
      </div>
   </div>

   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-3 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/junayed.png" alt="" class="mx-auto" style="width: 160px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Junayed Ahmed</a></h4>
            <p>Executive, Business Development</p>
         </div>
      </div>
   </div>
   
   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-3 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/zahid.png" alt="" class="mx-auto" style="width: 160px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Zahid Khan</a></h4>
            <p>Senior Devops Engineer</p>
         </div>
      </div>
   </div>


   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-2 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/amena.png" alt="" class="mx-auto" style="width: 160px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Amena Kariam</a></h4>
            <p>Head of PR & Communication</p>
         </div>
      </div>
   </div>


   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-1 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/kamrul.png" alt="" class="mx-auto" style="width: 160px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Kamrul Hasan</a></h4>
            <p>Software Engineer</p>
         </div>
      </div>
   </div>
   
   
   <div class="col-lg-3 col-md-6">
      <div class="team-5-item team-5-item-4 text-center mb-40 mx-auto" style="max-width: 220px;">
         <div class="team-5-thumb mb-25">
            <img loading="lazy" src="assets/img/team/animesh.png" alt="" class="mx-auto" style="width: 160px; height: auto;">
            <div class="team-5-social">
               <span class="icon"></span>
               <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
         </div>
         <div class="team-5-content">
            <h4 class="team-5-title"><a href="">Dipta Biswas</a></h4>
            <p>UI & UX Designer</p>
         </div>
      </div>
   </div>


</div>

         </div>
      </section>
      <!-- team-area-end -->


       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
@endsection