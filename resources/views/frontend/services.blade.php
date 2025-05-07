@extends('layouts.frontend')
@section('title')
    Services
@endsection
@section('page-title')
    User List
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

      <!-- breadcrumb-area-start -->  
      <section class="breadcrumb-area breadcrumb-overlay pb-115 pt-195 p-relative jarallax" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content breadcrumb__content-2 text-center p-relative z-index-1">
                     <h3 class="breadcrumb__title">Services</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"></span>
                        <span>SEO Services</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="inner-shape-dots">
            <img src="assets/img/shape/inner-dots-shape.png" alt="">
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- about-area-start -->
      <section class="about-area about-inner-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="about-inner-wrap">
                     <div class="about-inner-content-2 d-flex align-items-center mb-45">
                        <span>What</span>
                        <h4 class="about-inner-title-2">Expect great <br> things from your SEO agency.!</h4>
                     </div>
                     <p class="pl-30">Iterative approaches to corporate strategy foster collaborative thinking to further <br> the overall  value. Leverage agile frameworks to provide a robust high level over <br> views. In an ideal world this text wouldn’t exist.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about-area-end -->

      <!-- services-area-start -->
   <section class="services-area pb-110">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tpsection__content text-center mb-70">
                  <div class="tpbanner__sub-title mb-15">
                     <span>Our Services</span>
                     <i>
                        <svg width="126" height="37" viewBox="0 0 126 37" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <rect width="126" height="37" fill="url(#pattern4)" fill-opacity="0.08" />
                           <defs>
                              <pattern id="pattern4" patternContentUnits="objectBoundingBox" width="1" height="1">
                                 <use xlink:href="#image0_859_2751" transform="translate(-0.0507936) scale(0.00603175 0.0205405)" />
                              </pattern>
                              <image id="image0_859_2751" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
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

                        <li>
                           <div class="tpservices-wrapper">
                              <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('softwaredev')}}">Software Development</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item2">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/2.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('websitedev')}}">Website Development</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item3">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/3.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('dm')}}">Digital Marketing</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item4">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/4.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('cloudsol')}}">Cloud Solutions</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item5">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/5.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('pa')}}">Productivity App</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item6">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/6.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('email')}}">Email and Collaboration</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item3">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/7.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('cs')}}">Security Solutions</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper tpservices-item2">
                           <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/8.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('webhost')}}">Web Hosting</a></h4>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="tpservices-wrapper">
                              <div class="tpservices-img mb-35">
                                 <img src="{{asset('assets/icon/9.png')}}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('manageservices')}}">Manage Services</a></h4>
                              </div>
                           </div>
                        </li>

                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- services-area-end -->


 <!-- pricing-area-start -->
 <section class="pricing-area tp-price-parent pricing-shape-relative p-relative pt-40 pb-90">
   <div class="tpprice-shape-one d-none d-xl-block">
      <img src="assets/img/shape/hand-shape.png" alt="triangle">
   </div>
   <div class="container">
      <div class="tppricing-wrapper">
         <div class="tppricing-shape">
            <div class="tppricing-shape-one d-none d-md-block">
               <img src="assets/img/shape/pricing-1-shape-1.png" alt="">
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
                              <rect y="-0.000488281" width="114" height="37" fill="url(#pattern0)" fill-opacity="0.08"/>
                              <defs>
                              <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                              <use xlink:href="#image0_936_1479" transform="translate(-0.0507936) scale(0.00603175 0.0205405)"/>
                              </pattern>
                              <image id="image0_936_1479" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg=="/>
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
                        <img src="assets/img/shape/save.png" alt="triangle">
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
                                       <i><img src="assets/img/icon/pricing-icon-1.png" alt=""></i>
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
                                       <a href="#" class="tp-btn-blue">Get Started</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="tppricing mb-30">
                                 <div class="tppricing-head">
                                    <div class="tppricing-icon mb-30">
                                       <i><img src="assets/img/icon/pricing-icon-2.png" alt=""></i>
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
                              <img src="assets/img/shape/triangle.png" alt="triangle">
                           </div>
                           <div class="tpprice-shape-three">
                              <img src="assets/img/shape/smill.png" alt="triangle">
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
                                       <i><img src="assets/img/icon/pricing-icon-1.png" alt=""></i>
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
                                       <i><img src="assets/img/icon/pricing-icon-2.png" alt=""></i>
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
                              <img src="assets/img/shape/triangle.png" alt="triangle">
                           </div>
                           <div class="tpprice-shape-three">
                              <img src="assets/img/shape/smill.png" alt="triangle">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- pricing-area-end -->


      <!-- project-seo-area-start -->
      <section class="project-area project-inner-height pb-120 pt-140">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <div class="seo-5-thumb p-relative mb-40">
                     <div class="seo-5-main-bg">
                        <img src="assets/img/bg/seo-5-bg-1.png" alt="">
                     </div>
                     <div class="seo-5-shape d-none d-md-block">
                        <div class="seo-5-shape-one">
                           <img src="assets/img/shape/seo-5-shape-1.png" alt="">
                        </div>
                        <div class="seo-5-shape-two">
                           <img src="assets/img/shape/seo-5-shape-2.png" alt="">
                        </div>
                        <div class="seo-5-shape-three">
                           <img src="assets/img/shape/seo-5-shape-3.png" alt="">
                        </div>
                        <div class="seo-5-shape-four">
                           <img src="assets/img/shape/seo-5-shape-4.png" alt="">
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
                                 <p>You are in the hands of professional developers, designers, and SEO experts who work together to deliver results.
                                 </p>
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
                                 <p>We create lasting impressions through thoughtful design. Our goal is to focus on what matters most and make the design appealing to clients.</p>
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
                                 <p>We strongly protect your data with proper security measures and monitoring, keeping it safe and private while you focus on your business. </p>
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
                                 <p>Grow your business with a great website, app, and improved search rankings. We help you to enhance visitors, engagement, and sales.
                                 </p>
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
                                 <p>Our team is always here to provide professional support, assisting you with updates at every step of the process.</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="seo-5-btn">
                        <a href="{{route('about')}}" class="light-blue-btn">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- project-seo-area-end -->

      <!-- testimonial-area-start -->
      {{-- <section class="testimonial-area p-relative mt-120 pb-90 ">
         <div class="container">
            <div class="testimonial-5-bg">
               <div class="testimonial-5-bg-shape d-none d-md-block">
                  <img src="assets/img/shape/testimonial-5-bg-1.png" alt="">
               </div>
               <div class="testimonial-5-bg-shape-two wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                  <img src="assets/img/shape/testimonial-5-bg-2.png" alt="">
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="testimonial-5-head text-center mb-60">
                     <h4 class="testimnial-5-title">Our partners know best</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="testimonial-5 p-relative" data-background="assets/img/shape/testimonial-5shape-1.png">
                     <div class="row">
                        <div class="col-lg-5 col-md-5 order-2 order-md-1">
                           <div class="testimonial-5-shape">
                              <div class="testimonial-5-shape-one">
                                 <img src="assets/img/shape/testimonial-5-shape-2.png" alt="">
                              </div>
                              <div class="testimonial-5-shape-two d-none d-md-block">
                                 <img src="assets/img/shape/testimonial-5-shape-3.png" alt="">
                              </div>
                              <div class="testimonial-5-shape-three d-none d-md-block">
                                 <img src="assets/img/shape/testimonial-5-shape-4.png" alt="">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-7 col-md-7 order-1 order-md-2">
                           <div class="testimonial-5-content testi-5-active">
                              <div class="testimonial-5-content-wrap">
                                 <div class="tptestimonial-star mb-15">
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 </div>
                                 <p>
                                    "SEOMY really simplified our sales process. <br>
                                    It's so easy for us to find talent, track our reps'
                                    time and progress, and pay them all from <br>
                                    one platform."
                                 </p>
                                 <div class="author-info-5">
                                    <h5 class="author-title-5">John Smith</h5>
                                    <span>CEO of Advisor Fuel</span>
                                 </div>
                              </div>
                              <div class="testimonial-5-content-wrap">
                                 <div class="tptestimonial-star mb-15">
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 </div>
                                 <p>
                                    "SEOMY is really simplified our sales process. <br>
                                    It's so easy for us to find talent, track our location'
                                    time and progress, and pay them all from one templae."
                                 </p>
                                 <div class="author-info-5">
                                    <h5 class="author-title-5">John Smith</h5>
                                    <span>CEO of Advisor Fuel</span>
                                 </div>
                              </div>
                              <div class="testimonial-5-content-wrap">
                                 <div class="tptestimonial-star mb-15">
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 </div>
                                 <p>
                                    "SEOMY really simplified our sales process. <br>
                                    It's so easy for us to find talent, track our reps'
                                    time and progress, and pay them all from <br>
                                    one platform."
                                 </p>
                                 <div class="author-info-5">
                                    <h5 class="author-title-5">John Smith</h5>
                                    <span>CEO of Advisor Fuel</span>
                                 </div>
                              </div>
                              <div class="testimonial-5-content-wrap">
                                 <div class="tptestimonial-star mb-15">
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                    <i class="fa-sharp fa-solid fa-star-sharp"></i>
                                 </div>
                                 <p>
                                    "SEOMY really awesome our sales process. <br>
                                    It's so easy for us to find talent, track our reps'
                                    time and progress, and pay them all from <br>
                                    one platform."
                                 </p>
                                 <div class="author-info-5">
                                    <h5 class="author-title-5">John Smith</h5>
                                    <span>CEO of Advisor Fuel</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> --}}
      <!-- testimonial-area-end -->


      <!-- cta-area-start -->
      <section class="cta-area pt-15">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="cta-content mt-40">
                     <h4 class="cta-title">Grow your business today</h4>
                     <p>Enim cras in eget urna. Ut proin integer tempor, bibendum  <br> quam ullamcorper faucibus</p>
                     <div class="cta-btn">
                        <a class="tp-btn" href="contact.html">Get in Touch</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 align-self-end">
                  <div class="cta-thumb p-relative">
                     <div class="cta-main-bg d-flex justify-content-end">
                        <img src="assets/img/banner/cta-inner-bg-1.png" alt="">
                     </div>
                     <div class="cta-shape">
                        <div class="cta-shape-1 d-none d-lg-block">
                           <img src="assets/img/shape/cta-shape-1.png" alt="">
                        </div>
                        <div class="cta-shape-2">
                           <img src="assets/img/shape/cta-shape-2.png" alt="">
                        </div>
                        <div class="cta-shape-3">
                           <img src="assets/img/shape/cta-shape-3.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- cta-area-end -->
@endsection