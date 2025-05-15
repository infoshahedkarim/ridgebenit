@extends('layouts.frontend')
@section('title')
{{ $service->title }}
@endsection
@section('page-title')
User List
@endsection
@section('body')

<body>
   @endsection
   @section('content')

   <!-- breadcrumb-area-start -->
   <div class="breadcrumb-services-area services-details-bg scene breadcrumb-bg p-relative markiting-area markiting-wrap">
      <div class="markiting-shape services-inner-banner-shape-wrap">
         <img src="assets/img/services/social-media/services-social-media-bg.png" alt="">
         <div class="services-inner-banner-shape">
            <img class="services-inner-banner-shape-1" src="{{asset('assets/img/cta/cta-inner-shape-1.png')}}" alt="">
            <img class="services-inner-banner-shape-2" src="{{asset('assets/img/cta/cta-inner-shape-2.png')}}" alt="">
            <img class="services-inner-banner-shape-3" src="{{asset('assets/img/cta/cta-inner-shape-3.png')}}" alt="">
            <img class="services-inner-banner-shape-4" src="{{asset('assets/img/cta/cta-inner-shape-4.png')}}" alt="">
            <img class="services-inner-banner-shape-5" src="{{asset('assets/img/cta/cta-inner-shape-5.png')}}" alt="">
            <img class="services-inner-banner-shape-6" src="{{asset('assets/img/cta/cta-inner-shape-6.png')}}" alt="">
         </div>
      </div>
   </div>
   <!-- breadcrumb-services-area-end -->

   <!-- service-details-area-start -->
   <section class="services-details-area services-details mb-90" style="margin-top: -7%;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="services-details">
                  <div class="services-details-section ml-95">
                     <span style="color:rgba(169, 215, 255, 0.8);">Our Services</span>
                     <h4 class="services-details-title" style="color: #004a87;">{{ $service->title }}</h4>
                  </div>
                  <div class="services-details-thumb mb-50">
                     <img src="{{ asset('storage/' . $service->banner) }}" alt="">
                  </div>
                  <div class="services-details-wrap">
                     <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                           <div class="services-details-content">
                              <div class="services-details-content-box">
                                 {!! $service->des !!}
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


   <!-- <section class="quality-services-area quality-services-bg pb-125 pt-95 mb-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="optimize-subtitle mb-60">
                     <span>Value Proposition</span>
                     <h5 class="section-title-4 fs-54">High-quality <br> Link building services</h5>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-lg-3">
                  <div class="quality-services-nav">
                     <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                           aria-orientation="vertical">
                           <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                              aria-selected="true">
                              <span>
                                 <i>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path opacity="0.4"
                                          d="M22.5898 15.6093C22.5219 18.5796 22.2382 20.3145 21.0528 21.4999C19.4944 23.0583 16.9861 23.0583 11.9697 23.0583C6.95319 23.0583 4.44496 23.0583 2.88654 21.4999C1.32812 19.9415 1.32812 17.4333 1.32812 12.4168C1.32812 7.40033 1.32812 4.89209 2.88654 3.33368C4.07194 2.14828 5.80688 1.86455 8.7772 1.79663"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                       <path
                                          d="M7.63008 15.3456L9.22924 13.9261M9.22924 13.9261L11.3585 16.3248L14.157 13.8407L12.0278 11.442M9.22924 13.9261L12.0278 11.442M15.3141 8.52492C15.6753 8.93747 16.1147 9.27447 16.6067 9.51654C17.0988 9.7586 17.6339 9.90094 18.1812 9.93535C18.7285 9.96977 19.2772 9.89558 19.7957 9.71707C20.3142 9.53856 20.7923 9.25924 21.2024 8.8952C21.6125 8.53116 21.9466 8.08959 22.1853 7.59592C22.4241 7.10225 22.5628 6.56622 22.5936 6.0187C22.6243 5.47119 22.5465 4.92299 22.3645 4.40569C22.1825 3.88839 21.9 3.4122 21.5332 3.00453C20.7954 2.20186 19.7718 1.72109 18.683 1.66577C17.5941 1.61045 16.5271 1.98501 15.7117 2.70877C14.8964 3.43252 14.3979 4.44758 14.3237 5.5353C14.2494 6.62302 14.6054 7.69639 15.3149 8.52421L15.3141 8.52492ZM15.3141 8.52492L12.0278 11.442"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                 </i>
                                 One-way <br> Link building
                              </span>
                           </button>
                           <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                              aria-selected="false">
                              <span>
                                 <i>
                                    <svg width="22" height="28" viewBox="0 0 22 28" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path opacity="0.4"
                                          d="M16.9089 11.4114C16.9089 11.4114 16.6959 12.7134 12.2951 17.9214C8.16397 22.8299 14.1407 26.5666 14.8505 26.9963C14.8931 27.0223 14.9356 27.0223 14.9924 26.9963C15.9578 26.4494 26.7043 20.1087 16.9089 11.4114Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                       <path
                                          d="M13.4966 8.53391C13.4966 5.53932 12.219 2.80513 10.9413 1.24274C10.5154 0.852138 9.80559 0.982337 9.66363 1.50314C9.09578 3.45613 7.39222 7.62252 3.27529 12.5701C-1.97734 18.8197 2.84942 25.5901 7.81813 26.8921C10.5154 27.5431 7.10833 25.5901 6.68244 21.5539C6.25655 16.4761 13.4966 12.7003 13.4966 8.53391Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </i>
                                 Find powerful <br> backlinks
                              </span>
                           </button>
                           <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-messages" type="button" role="tab"
                              aria-controls="v-pills-messages" aria-selected="false">
                              <span>
                                 <i>
                                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M21.6134 11.2617V7.14623C21.6134 5.67042 20.4856 4.03862 19.1057 3.52268L13.1185 1.27897C12.1226 0.907012 10.4908 0.907012 9.49494 1.27897L3.50769 3.53468C2.12786 4.05062 1 5.68241 1 7.14623V16.0611C1 17.4769 1.93588 19.3367 3.07574 20.1886L8.23509 24.0401C9.07499 24.688 10.1909 25 11.3067 25"
                                          fill="white" fill-opacity="0.2" />
                                       <path
                                          d="M21.6134 11.2617V7.14623C21.6134 5.67042 20.4856 4.03862 19.1057 3.52268L13.1185 1.27897C12.1226 0.907012 10.4908 0.907012 9.49494 1.27897L3.50769 3.53468C2.12786 4.05062 1 5.68241 1 7.14623V16.0611C1 17.4769 1.93588 19.3367 3.07574 20.1886L8.23509 24.0401C9.07499 24.688 10.1909 25 11.3067 25"
                                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                       <path
                                          d="M10.9974 12.9999C11.7338 12.9999 12.3307 12.403 12.3307 11.6666C12.3307 10.9302 11.7338 10.3333 10.9974 10.3333C10.261 10.3333 9.66406 10.9302 9.66406 11.6666C9.66406 12.403 10.261 12.9999 10.9974 12.9999Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M10.9961 13V15" stroke="currentColor" stroke-width="1.5"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path opacity="0.4"
                                          d="M17.4334 23.2C19.8818 23.2 21.8667 21.2151 21.8667 18.7666C21.8667 16.3181 19.8818 14.3333 17.4334 14.3333C14.9849 14.3333 13 16.3181 13 18.7666C13 21.2151 14.9849 23.2 17.4334 23.2Z"
                                          stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M22.3357 23.6665L21.4023 22.7332" stroke="currentColor"
                                          stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </i>
                                 Resource <br> link building
                              </span>
                           </button>
                           <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                              data-bs-target="#v-pills-settings" type="button" role="tab"
                              aria-controls="v-pills-settings" aria-selected="false">
                              <span>
                                 <i>
                                    <svg width="23" height="25" viewBox="0 0 23 25" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11.3398 2.19995V2.21152" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M11.3398 7.40747V7.41904" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M11.3398 12.0371V12.0487" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path opacity="0.4" d="M11.3398 16.6663V16.6778" stroke="currentColor"
                                          stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M11.3398 20.7168V20.7284" stroke="currentColor"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M11.3398 24.1882V24.1998" stroke="currentColor"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M1.5 7.40747V7.41904" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M21.1719 7.40747V7.41904" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path opacity="0.4" d="M21.1719 12.0371V12.0487" stroke="currentColor"
                                          stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M1.5 12.0371V12.0487" stroke="currentColor"
                                          stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M21.1719 15.5085V15.5201" stroke="currentColor"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M21.1719 18.9807V18.9923" stroke="currentColor"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path opacity="0.4" d="M1.5 15.5085V15.5201" stroke="currentColor"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M1.5 18.9807V18.9923" stroke="currentColor"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M6.47656 9.72241V9.73398" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M6.42188 4.86157V4.87315" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M16.1953 9.72241V9.73398" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path d="M16.2539 4.86157V4.87315" stroke="currentColor" stroke-width="3"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path opacity="0.4" d="M6.47656 14.3516V14.3631" stroke="currentColor"
                                          stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M6.47656 17.8232V17.8348" stroke="currentColor"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M6.47656 21.2952V21.3067" stroke="currentColor"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                       <path opacity="0.4" d="M16.1953 14.3516V14.3631" stroke="currentColor"
                                          stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M16.1953 17.8232V17.8348" stroke="currentColor"
                                          stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path opacity="0.4" d="M16.1953 21.2952V21.3067" stroke="currentColor"
                                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </i>
                                 Citation <br> link building
                              </span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="services-quality-tab">
                     <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                           aria-labelledby="v-pills-home-tab" tabindex="0">
                           <div class="services-quality-wrapper">
                              <div class="services-quality-thumb">
                                 <img src="assets/img/bg/services-tab/value-tab-1.svg" alt="">
                              </div>
                              <div class="services-quality-content">
                                 <h4 class="services-quality-title">Find powerful backlinks</h4>
                                 <p>Broken links are links that point to a website <br> or page that no longer exists.
                                 </p>
                                 <ul>
                                    <li>Link Building </li>
                                    <li>Social Networking</li>
                                    <li>Content Marketing</li>
                                    <li>Brand mentions</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                           aria-labelledby="v-pills-profile-tab" tabindex="0">
                           <div class="services-quality-wrapper">
                              <div class="services-quality-thumb">
                                 <img src="assets/img/bg/services-tab/value-tab-2.svg" alt="">
                              </div>
                              <div class="services-quality-content">
                                 <h4 class="services-quality-title">Find powerful backlinks</h4>
                                 <p>Broken links are links that point to a website <br> or page that no longer exists.
                                 </p>
                                 <ul>
                                    <li>Link Building </li>
                                    <li>Social Networking</li>
                                    <li>Content Marketing</li>
                                    <li>Brand mentions</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                           aria-labelledby="v-pills-messages-tab" tabindex="0">
                           <div class="services-quality-wrapper">
                              <div class="services-quality-thumb">
                                 <img src="assets/img/bg/services-tab/value-tab-3.svg" alt="">
                              </div>
                              <div class="services-quality-content">
                                 <h4 class="services-quality-title">Find powerful backlinks</h4>
                                 <p>Broken links are links that point to a website <br> or page that no longer exists.
                                 </p>
                                 <ul>
                                    <li>Link Building </li>
                                    <li>Social Networking</li>
                                    <li>Content Marketing</li>
                                    <li>Brand mentions</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                           aria-labelledby="v-pills-settings-tab" tabindex="0">
                           <div class="services-quality-wrapper">
                              <div class="services-quality-thumb">
                                 <img src="assets/img/bg/services-tab/value-tab-4.svg" alt="">
                              </div>
                              <div class="services-quality-content">
                                 <h4 class="services-quality-title">Find powerful backlinks</h4>
                                 <p>Broken links are links that point to a website <br> or page that no longer exists.
                                 </p>
                                 <ul>
                                    <li>Link Building </li>
                                    <li>Social Networking</li>
                                    <li>Content Marketing</li>
                                    <li>Brand mentions</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->


   <!-- feature-area-start -->

   <section class="feature-area p-relative pb-95">
      <div class="feature-bg-shape"></div>
      <div class="container">
         <div class="row">

            <div class="section-3 text-center mb-70">
               <p>{{$service->title}} Services</p>
               <div class="section-3-title mb-15">{{$ft->title ?? ''}}</div>
            </div>
         </div>
         
         <div class="col-lg-4 col-md-6">
            @foreach($features as $feature)
            <div class="feature-5-item mb-55">
               <div class="feature-5-icon p-relative mb-40">
                  <img src="{{asset('storage/' . $feature->icon)}}" alt="" style="width:20%">
                  <div class="feature-5-icon-shape">
                     <img src="{{asset('assets/img/shape/feature-5-shape-1.png')}}" alt="">
                  </div>
                  <span></span>
               </div>
               <div class="feature-5-content">
                  <h4 class="feature-5-content-title mb-50">{{$feature->subtitle}}</h4>
                  <p style="margin-top:-5%">{!! $feature->des !!}</p>
               </div>
            </div>
            @endforeach
         </div>
         

         <!-- <div class="col-lg-4 col-md-6">
                  <div class="feature-5-item feature-5-item-2 mb-55">
                     <div class="feature-5-icon p-relative mb-40">
                        <img src="{{asset('assets/img/shape/feature-5-icon-2.png')}}" alt="">
                        <div class="feature-5-icon-shape">
                           <img src="{{asset('assets/img/shape/feature-5-shape-2.png')}}" alt="">
                        </div>
                        <span></span>
                     </div>
                     <div class="feature-5-content">
                        <h4 class="feature-5-content-title mb-50">Backlink checking & Monitoring</h4>
                        <p style="margin-top:-5%">Shahed Boss</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6">
                  <div class="feature-5-item mb-55">
                     <div class="feature-5-icon p-relative mb-40">
                        <img src="{{asset('assets/img/shape/feature-5-icon-1.png')}}" alt="">
                        <div class="feature-5-icon-shape">
                           <img src="{{asset('assets/img/shape/feature-5-shape-1.png')}}" alt="">
                        </div>
                        <span></span>
                     </div>
                     <div class="feature-5-content">
                        <h4 class="feature-5-content-title mb-50">Backlink checking & Monitoring</h4>
                        <p style="margin-top:-5%">Shahed Boss</p>
                     </div>
                  </div>
               </div> -->


      </div>
      </div>
   </section>
   <!-- feature-area-end -->



   <!-- optimize-area-start -->
   <section class="optimize-area optimize-wrapper pb-140">
      <div class="container">
         <div class="row align-items-center"> <!-- Center both col-lg-6 vertically -->
            <div class="col-lg-6">
               <div class="optimize-wrapperp" style="padding-top: 0;"> <!-- removed pt-35 -->
                  <div class="section-wrapper mb-40">
                     <span>Our Expertise</span>
                     <h5 class="section-title-4 section-title-4-2">{{$et->title ?? ''}}</h5>
                  </div>
                  <div class="expertise-wrapper">
                     <div class="expertise-list">
                     @foreach($expertises as $expertise)
                        <div class="expertise-item" style="background: linear-gradient(135deg, #f0faff, #e0f7ff); padding: 15px; border-radius: 10px; display: flex; align-items: center; gap: 15px; margin-bottom: 3%;">
                           <img src="{{asset('storage/' . $expertise->icon)}}" alt="" style="width:10%">
                           <div class="content">
                              <h4>{{$expertise->subtitle}}</h4>
                              <p>{!! $expertise->des !!}</p>
                           </div>
                        </div>
                     @endforeach

                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="optimize-thumb text-end p-relative" style="padding-top: 0;"> <!-- removed pt-35 -->
                  <div class="optimize-thumb-img">
                     <img src="{{asset('assets/img/bg/optimize-bg.png')}}" alt="">
                  </div>
                  <div class="optimize-shape">
                     <img src="{{asset('assets/img/bg/optimize-bg-2.png')}}" alt="" class="optimize-shape-1">
                     <img src="{{asset('assets/img/shape/optimize-shape-2.png')}}" alt="" class="optimize-shape-2 d-none d-md-block" data-parallax='{"y": 50, "smoothness": 20}'>
                     <img src="{{asset('assets/img/shape/optimize-shape-1.png')}}" alt="" class="optimize-shape-3 d-none d-md-block" data-parallax='{"y": 50, "smoothness": 20}'>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- optimize-area-end -->


   <section class="expertise-section">



   </section>

   <section class="case-area pb-60 fix">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-8">
               <div class="tpsection__wrapper mb-45">
                  <div class="tpbanner__sub-title mb-15">
                     <span>Have a look at</span>
                     <i>
                        <svg width="150" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                           <rect width="150" height="40" fill="url(#pattern3)" fill-opacity="0.1" />
                           <defs>
                              <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                                 <use xlink:href="#image0_859_3410" transform="translate(-0.0584971) scale(0.00611611 0.0203396)" />
                              </pattern>
                              <image id="image0_859_3410" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg==" />
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
      <div class="container">
         <div class="row grid">
            <div class="col-lg-4 col-md-6 grid-item port-details3  port-details5">
               <div class="portfolio-inner-item-2 mb-40">
                  <div class="portfolio-inner-thumb-2">
                     <img src="{{asset('assets/img/website/ajwah.jpeg')}}" alt="" style="width: 150%">
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
                     <img src="{{asset('assets/img/website/crown.jpeg')}}" alt="">
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
                     <img src="{{asset('assets/img/website/fiber.png')}}" alt="">
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
                     <img src="{{asset('assets/img/website/homeland.jpeg')}}" alt="">
                  </div>
                  <div class="portfolio-inner-content-2">
                     <div class="portfolio-inner-title-2"><a href="https://homelandfurniturebd.com/">Homeland Furniture</a></div>
                     <p>Fully Dynamic Ecommerces Website</p>
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
                     <img src="{{asset('assets/img/website/magpie.jpeg')}}" alt="">
                  </div>
                  <div class="portfolio-inner-content-2">
                     <div class="portfolio-inner-title-2"><a href="https://magpieholdingsltd.com/">Magpie Holdings Ltd.</a></div>
                     <p>Fully Dynamic Ecommerces Website</p>
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
                     <img src="{{asset('assets/img/website/CTC.png')}}" alt="">
                  </div>
                  <div class="portfolio-inner-content-2">
                     <div class="portfolio-inner-title-2"><a href="https://ctcenergysolution.com/">CTC Energy Sol.</a></div>
                     <p>Fully Dynamic Ecommerces Website</p>
                     <div class="portfolio-inner-tag-2">
                        <a href="#">Website Design</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <div class="d-flex justify-content-center flex-wrap gap-sm-3 gap-2 mt-40">

                  <div class="tppricing-btn" style="text-align: center;">
                     <a href="{{route('about')}}" class="tp-btn-blue" style="display: inline-block; text-align: center;">Know More Abour Us</a>
                  </div>

            </div>
   </section>


   <!-- services-area-start -->
   <section class="services-area tp-large-box services-bg-two p-relative fix" style="margin-top: -3%;">
      <div class="services-shape d-none d-xl-block">
         <div class="services-shape-one">
            <img src="assets/img/shape/services-2shape-1.png" alt="">
         </div>
         <div class="services-shape-two">
            <img src="assets/img/shape/services-2shape-2.png" alt="">
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="tpsection-wrapper text-center mb-60">
                     <h2 class="tpsection-title-two">
                        <p>Customized Solutions</p>
                        <span class="big-shape2">
                           Choose Us
                           <svg width="246" height="24" viewBox="0 0 246 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.74431 14.6419C2.74431 14.6419 154.652 -4.65014 239.811 9.30024"
                                 stroke="#FFCE5A" stroke-width="5" stroke-linecap="round" />
                              <path d="M3.00783 11.4374C3.00783 11.4374 157.737 -0.672988 242.581 17.053"
                                 stroke="#FFCE5A" stroke-width="5" stroke-linecap="round" />
                           </svg>
                        </span>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="services-two mb-30">
                  <div class="services-two-bg"></div>
                  <div class="services-two-icon">
                     <img src="{{asset('assets/img/icon/services-icon-1.png')}}" alt="">
                  </div>
                  <div class="services-two-content">
                     <h4 class="services-two-title">The Easiest Way to Improve Your Site Speed</h4>
                     <span>SEO Strategy</span>
                  </div>
               </div>
            </div>

            <div class="col-lg-12">
               <div class="services-two mb-30">
                  <div class="services-two-bg"></div>
                  <div class="services-two-icon">
                     <img src="{{asset('assets/img/icon/services-icon-2.png')}}" alt="">
                  </div>
                  <div class="services-two-content">

                     <h4 class="services-two-title">Complete Site Speed Optimization Service</h4>
                     <span>SEO Optimization</span>
                  </div>
               </div>
            </div>

            <div class="col-lg-12">
               <div class="services-two mb-30">
                  <div class="services-two-bg"></div>
                  <div class="services-two-icon">
                     <img src="{{asset('assets/img/icon/services-icon-3.png')}}" alt="">
                  </div>
                  <div class="services-two-content">

                     <h4 class="services-two-title">Instantly Analyze Your SEO Issues</h4>
                     <span>SEO Analysis</span>
                  </div>
               </div>
            </div>

            <div class="col-lg-12">
               <div class="services-two mb-30">
                  <div class="services-two-bg"></div>
                  <div class="services-two-icon">
                     <img src="{{asset('assets/img/icon/services-icon-4.png')}}" alt="">
                  </div>
                  <div class="services-two-content">

                     <h4 class="services-two-title">Enhanced Mobile & Desktop UX</h4>
                     <span>Web & Mobile</span>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!-- services-area-end -->



   <!-- pricing-area-start -->
   <!-- <section class="pricing-area tp-price-parent tppricing-box-active pb-170 fix">

         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-wrapper text-center mb-40">
                     <span>Pricing Plans</span>
                     <h5 class="section-title-4 section-title-4-2">Packages for everyone</h5>
                  </div>
               </div>
            </div>
            <div class="tpprice-4-switch-box  p-relative">
               <div class="tpprice-4-switch p-relative">
                  <div class="tpprice-switch-wrapper tpprice-4-position tppricing-switch-2">
                     <div class="toggle">
                        <input type="checkbox" id="switcher-price" class="tp-check">
                        <b class="switch"></b>
                     </div>
                     <div class="label-text">
                        <label class="toggler toggler-price-active" id="filt-monthly-price">Billed Yearly</label>
                        <label class="toggler" id="filt-yearly-price">Billed Monthy</label>
                     </div>
                  </div>
               </div>
               <div class="tppricing-shape-4">
                  <div class="tppricing-shape-1">
                     <img src="assets/img/shape/pricing-4-shape-3.png" alt="">
                  </div>
                  <div class="tppricing-shape-3">
                     <svg width="86" height="59" viewBox="0 0 86 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 39.5506C8 21.0506 23.7 -11.5494 30.5 6.05057C39 28.0506 33 68.5508 63 48.0508C71.5 44.0508 78 41.5508 85 58.0508" stroke="currentColor" stroke-linejoin="round" stroke-dasharray="4 4"/>
                     </svg>
                  </div>
                  <div class="tppricing-shape-2">
                     <img src="assets/img/shape/pricing-4-shape-2.png" alt="">
                  </div>
               </div>
            </div>
            <div class="price-scroll">
               <div class="price-scroll-width">
                  <div class="row gx-0">
                     <div class="col-12">
                        <div id="monthly-price" class="wrapper-full">
                           




                           <div class="tppriceing-top">
                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-head text-center">
                                             <span><h4 class="title">Essential</h4></span>
                                             
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-head active text-center p-relative">
                                             <div class="big-price-shape"></div>
                                             <div class="sm-price-shape"></div>
                                             <span><h4 class="title">Pro</h4></span>
                                             
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-head text-center"> 
                                             <span><h4 class="title">Business</h4></span>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           





                           <div class="pricing-box-4">
                            


                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">keyword Research</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-right text-center">
                                             <p>100</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>200</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-left text-center">
                                             <p>250</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                            
                              




                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">On-page and SERP analysis</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>10</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>20</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>30</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              



                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">Tools for Agencies</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>Limited</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>Limited</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>Limited</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             





                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">Сontent Marketing</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>15 articles</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>30 articles</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>20 articles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              



                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">Additional Features</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>5</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>10</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>15</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
                              



                              <div class="row gx-0">
                                 <div class="price-custom-col-1"></div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-right tppricing-4-btn">
                                             <p>
                                                <a href="#">Join this Plan</a>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active tppricing-4-btn">
                                             <p>
                                                <a href="#">Join this Plan</a>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-right tppricing-4-btn">
                                             <p>
                                                <a href="#">Join this Plan</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
                              
                           </div>
                           
                           
                        </div>
                        <div id="hourly-price" class="wrapper-full price-is-hide">
                           
                        
                           <div class="tppriceing-top">
                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-head text-center">
                                             <span><h4 class="title">Essential</h4></span>
                                             
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-head active text-center p-relative">
                                             <div class="big-price-shape"></div>
                                             <div class="sm-price-shape"></div>
                                             <span><h4 class="title">Pro</h4></span>
                                             
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-head text-center"> 
                                             <span><h4 class="title">Business</h4></span>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          
                           



                           <div class="pricing-box-4">
                             
                           


                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">keyword Research</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-right text-center">
                                             <p>50</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>150</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-left text-center">
                                             <p>200</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              



                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">On-page and SERP analysis</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>08</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>16</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>28</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                            
                              




                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">Tools for Agencies</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>Limited</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>Unlimited</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>Limited</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              




                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">Сontent Marketing</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>15 articles</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>45 articles</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>18 articles</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              




                              <div class="row gx-0">
                                 <div class="price-custom-col-1">
                                    <div class="tppricing-4-title">
                                       <h4 class="title">Additional Features</h4>
                                    </div>
                                 </div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>4</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active text-center">
                                             <p>12</p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price text-center">
                                             <p>20</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              




                              <div class="row gx-0">
                                 <div class="price-custom-col-1"></div>
                                 <div class="price-custom-col-2">
                                    <div class="row gx-0">
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-right tppricing-4-btn">
                                             <p>
                                                <a href="#">Join this Plan</a>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price active tppricing-4-btn">
                                             <p>
                                                <a href="#">Join this Plan</a>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="tppricing-4-price tppricing-right tppricing-4-btn">
                                             <p>
                                                <a href="#">Join this Plan</a>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
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



  
      <div class="social-area social-inner-wrapper pb-85">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="portfolio-inner-2 text-center mb-50">
                  <h4 class="portfolio-inner-2-head">Follow us for more...</h4>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tpsocial tpsocial-facebook mb-30">
                  <div class="tpsocial-bg"></div>
                  <div class="tpsocial-text d-flex align-items-center justify-content-between">
                     <a href="https://www.facebook.com/ridgebenitsolution">
                        <i class="fa-brands fa-facebook"></i>
                        Follow us on Facebook for Business Updates
                     </a>
                     <span>
                        <a href="#">
                           <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 6H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M6 1L11 6L6 11" stroke="currentColor" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tpsocial tpsocial-insta mb-30">
                  <div class="tpsocial-bg"></div>
                  <div class="tpsocial-text d-flex align-items-center justify-content-between">
                     <a href="https://www.instagram.com/ridgebenit">
                        <i class="fa-brands fa-instagram"></i>
                        Follow us on Instagram for Business Inspiration
                     </a>
                     <span>
                        <a href="#">
                           <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 6H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M6 1L11 6L6 11" stroke="currentColor" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tpsocial tpsocial-facebook mb-30">
                  <div class="tpsocial-bg"></div>
                  <div class="tpsocial-text d-flex align-items-center justify-content-between">
                     <a href="https://www.linkedin.com/company/ridgebenitsolution">
                        <i class="fa-brands fa-linkedin"></i> Get our Newsletter for Business Tips & News
                     </a>
                     <span>
                        <a href="#">
                           <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 6H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M6 1L11 6L6 11" stroke="currentColor" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="tpsocial tpsocial-twitt mb-30">
                  <div class="tpsocial-bg"></div>
                  <div class="tpsocial-text d-flex align-items-center justify-content-between">
                     <a href="https://x.com/Ridgeben_IT">
                        <i class="fa-brands fa-twitter"></i> Follow us on Twitter for Business Updates
                     </a>
                     <span>
                        <a href="#">
                           <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M1 6H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M6 1L11 6L6 11" stroke="currentColor" stroke-width="1.5"
                                 stroke-linecap="round" stroke-linejoin="round" />
                           </svg>
                        </a>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   @endsection