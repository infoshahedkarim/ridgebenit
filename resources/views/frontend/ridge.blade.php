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

   <!-- banner-area-start -->
   <section class="banner__area tpbanner-space scene tpbanner-shape-wrapper fix"
      data-background="{{asset('assets/img/banner/banner-1.png')}}">
      <div class="tpbanner-shape-wrappers">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="tpbanner__content text-center">
                     <h1 class="tpbanner__title mb-25 pb-10">Empowering Business with Digital Solutions!</h1>
                     <p>We specialize in custom digital solutions that delegate your business, <br> ensuring development and success in the digital landscape.</p>
                     <div class="tpbanner__search">
                        <div class="d-flex justify-content-center flex-wrap gap-sm-3 gap-2 mt-40">

                           <div class="tppricing-btn-two" style="text-align: center;">
                              <a href="{{route('about')}}" class="tp-btn-blue" style="display: inline-block; text-align: center;">Know More About Us</a>
                           </div>

                           <div class="tppricing-btn" style="text-align: center;">
                              <a href="#free-consult" class="tp-btn-blue" style="display: inline-block; text-align: center;">Book a Free Consultant</a>
                           </div>

                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <div class="tpbanner-shape  d-none d-lg-block">
            <div class="tpbanner-shape-one">
               <img class="layer" data-depth="0.3" src="{{asset('assets/img/shape/banner-plus.png')}}" alt="">
            </div>
            <div class="tpbanner-shape-three">
               <img class="layer" data-depth="0.4" src="{{asset('assets/img/shape/banner-dots.png')}}" alt="">
            </div>
            <div class="tpbanner-shape-four">
               <img src="{{asset('assets/img/shape/banner-archer.png')}}" alt="">
            </div>
            <div class="tpbanner-shape-five">
               <img class="layer" data-depth="0.2" src="{{asset('assets/img/shape/hero01.png')}}" alt="">
            </div>
            <div class="tpbanner-shape-six">
               <img class="layer" data-depth="0.3" src="{{asset('assets/img/shape/reactor.png')}}" alt="">
            </div>
         </div>
      </div>
      <div class="tpbanner-shape-wrappers tpbanner-shape-y scene-y">
         <div class="tpbanner-shape  d-none d-lg-block">
            <div class="tpbanner-shape-two">
               <img class="layer" data-depth="0.6" src="{{asset('assets/img/shape/hand.png')}}" alt="">
            </div>
         </div>
      </div>
   </section>
   <!-- banner-area-end -->


   <!-- choose-area-start -->
   <section class="choose-area tpchoose-bottom pt-80">
      <div class="container">
         <div class="portfolio-inner-2 text-center mb-50">
            <h2 class="portfolio-inner-2-head" style="color: #004a87">11+ Years Experiences</h2>
         </div>
      </div>
   </section>

   <div class="slider123 col-xl-12 pb-40">
    <div class="card123"><img src="{{asset('assets/partners/1.jpg')}}" alt="Product 1"></div>
    <div class="card123"><img src="{{asset('assets/partners/2.webp')}}" alt="Product 2"></div>
    <div class="card123"><img src="{{asset('assets/partners/3.webp')}}" alt="Product 3"></div>
    <div class="card123"><img src="{{asset('assets/partners/4.png')}}" alt="Product 4"></div>
    <div class="card123"><img src="{{asset('assets/partners/5.png')}}" alt="Product 5"></div>
    <div class="card123"><img src="{{asset('assets/partners/6.png')}}" alt="Product 6"></div>
    <div class="card123"><img src="{{asset('assets/partners/7.png')}}" alt="Product 7"></div>
    <div class="card123"><img src="{{asset('assets/partners/8.webp')}}" alt="Product 8"></div>
    <div class="card123"><img src="{{asset('assets/partners/9.webp')}}" alt="Product 9"></div>
</div>


   <!-- <section class="about-area p-relative pb-40">
         <div class="fix">
            <div class="container-fluid">
               <div class="row align-items-center">
                  <div class="col-lg-12">
                     <div class="about-inner-slide tpabout-inner-active" style="display: flex; gap: 5px;">
                        <div class="about-inner-item">
                           <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%;"> 
                        </div>
                        <div class="about-inner-item">
                           <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                        </div>
                        <div class="about-inner-item">
                           <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                        </div>
                        <div class="about-inner-item">
                           <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                        </div>
                        <div class="about-inner-item">
                           <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                        </div>
                        <div class="about-inner-item">
                           <img src="{{asset('assets/icon/1.png')}}" alt="" style="width:25%">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->


  <!-- choose-area-start -->


      <section class="choose-area tpchoose-bottom pb-40">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-5">
                  <div class="tpchoose-thumb mt-30 p-relative mb-50">
                     <img class="tpchoose-border-anim" src="assets/img/banner/front.png" alt="">
                     <div class="tpchoose-shape">
                        <div class="tpchoose-shape-one d-none d-md-block">
                           <img src="assets/img/shape/choose-shape-1.png" alt="">
                        </div>
                        <div class="tpchoose-shape-two">
                           <img src="assets/img/shape/choose-shape-2.png" alt="">
                        </div>
                        <div class="tpchoose-shape-three">
                           <img src="assets/img/shape/choose-shape-3.png" alt="">
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
                              <svg width="130" height="42" viewBox="0 0 130 42" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <rect y="0.941895" width="130" height="40.9551" fill="url(#pattern6)" fill-opacity="0.08"/>
                                 <defs>
                                 <pattern id="pattern6" patternContentUnits="objectBoundingBox" width="1" height="1">
                                 <use xlink:href="#image0_868_3547" transform="translate(-0.0587762 0.0123052) scale(0.00611916 0.0198269)"/>
                                 </pattern>
                                 <image id="image0_868_3547" width="180" height="50" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAAyCAYAAAD1JPH3AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDcuMS1jMDAwIDc5LmVkYTJiM2ZhYywgMjAyMS8xMS8xNy0xNzoyMzoxOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RUMyMzkwQTczMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RUMyMzkwQTYzMTM3MTFFRDg3NUZBOUZCRDk1MThFMTMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjEgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MjFBQkIwMjIzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MjFBQkIwMjMzMTA2MTFFREEzRkNBQzVFOTRFRTVERTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5lgZ3iAAAB2ElEQVR42uzd7U3CUBiA0Wr4DxvQDWQE4gS6gSO6ibhB2aBMoCG5ja83pVRaSSnnJE2/MII+t7386sPz21dxQ1ZpKdNSpPUynItL/nNd6rSc2t6n/Sot+TYTsJhgrJsU6TqLt7zS779EE3ad1vuwvwuDg5kF3QQao92E47fq3ICrQ/RN8LsQPBMPOob7lEV8j5o7z6Yj+Cbwzyx+U5orB32MdCvcwcFv0/ZLx5SmubrHAVCZ0lwW9CrEu07rcsC8k/GmNPk8vg7hx2P13K/4fYP+6LhdcjvR5wMgrmP0h5bXxdecmjadu1N0ffFuOxc/zzKcP65fhwQt5nkOgGJu08NH/1cEDYIGQYOgETQIGgQNggZBI2gQNAgaBA2CRtAgaBA0CBoEjaBB0CBoEDQIGkGDoEHQIGgQNIIGQYOgQdAgaAQNE7aY+Ptre7JSn6ct9VWe2UfQvx4XFuPbZ+fz1/5HsGPEHh831mw359bhWH6OCQf9Xvw8v67OQmyLcg6GfJ4Yd769Dvviv+yuXQ0N+tXf8aKpUtUz/rJlvWw5Pmf5RfIQ7vJV0fO55wvtTSL+3R+mQasTd4BlyzRpdeWBEKeL+aC+yt1d0PczDSpH/PJbjfi+RvUtwADssXzgKiX3gwAAAABJRU5ErkJggg=="/>
                                 </defs>
                              </svg>
                           </i>
                        </div>
                        <h2 class="tpsection__title mb-15">We offer experiences,<br> more than services.</h2>
                        <p>
                           We are experts in developing professionally customized web solutions and providing digital solutions. 
                           We have completed over 100 successful projects in seven countries, combining global insights with local knowledge. 
                           In Ridgeben, We offer high-quality and expert solutions to enhance your online visibility. Moreover, a seamless process to ensure your business stands out.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- choose-area-end -->


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
                        @foreach($services as $service)
                        <li>
                           <div class="tpservices-wrapper tpservices-item3">
                              <div class="tpservices-img mb-35">
                                 <img src="{{ asset('storage/' . $service->icon) }}" alt="" style="width:35%">
                              </div>
                              <div class="tpservices-content">
                                 <h4 class="tpservices-title"><a href="{{route('page1', $service->slug)}}">{{$service->title}}</a></h4>
                              </div>
                           </div>
                        </li>

                        <!-- <li>
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


   <!-- funfact-area-start -->
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
                                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1"
                                       height="1">
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
                  <div class="tpfunfact-shape-one"><img src="{{asset('assets/img/shape/funfact-2.png')}}" alt=""></div>
                  <div class="tpfunfact-shape-two"><img src="{{asset('assets/img/shape/funfact-3.png')}}" alt=""></div>
               </div>
            </div>
            <div class="tpfunfact-box">
               <div class="row justify-content-center">
                  <div class="col-lg-5">
                     <div class="tpfunfact-wrapper text-center mb-50">
                        <span class="tpfunfact-title">Duration</span>
                        <h5 class="tpfunfact-count mb-15">Fastest<span> Delivery</span></h5>
                        <div class="tpfunfact-tag">
                           <span><i><img src="{{asset('assets/img/shape/funfact-icon-1.png')}}" alt=""></i>7Days Challenges</span>
                           <span><i><img src="{{asset('assets/img/shape/funfact-icon-2.png')}}" alt=""></i>10+ Frameworks</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="tpfunfact-wrapper text-center mb-50">
                        <span class="tpfunfact-title">Success Volume</span>
                        <h5 class="tpfunfact-count mb-15">150+<span> Projects</span></h5>
                        <div class="tpfunfact-tag">
                           <span><i><img src="{{asset('assets/img/shape/funfact-icon-3.png')}}" alt=""></i>13+ Countries Served</span>
                           <span><i><img src="{{asset('assets/img/shape/funfact-icon-4.png')}}" alt=""></i>36TB Data</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- funfact-area-end -->


   <!-- case-area-start -->
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
                     <img src="{{asset('assets/img/website/jibonjoyi.jpeg')}}" alt="">
                  </div>
                  <div class="portfolio-inner-content-2">
                     <div class="portfolio-inner-title-2"><a href="https://jj.c3bit.com/">Jibonjoyi</a></div>
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
                     <img src="{{asset('assets/img/website/it.jpeg')}}" alt="">
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
                     <img src="{{asset('assets/img/website/kinglet.jpeg')}}" alt="">
                  </div>
                  <div class="portfolio-inner-content-2">
                     <div class="portfolio-inner-title-2"><a href="https://kingletbd.com/">Kinglet Furniture</a></div>
                     <p>Fully Dynamic Ecommerces Website</p>
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
   <!-- case-area-end -->


   <!-- pricing-area-start -->
   <!-- <section class="pricing-area tp-price-parent pricing-shape-relative p-relative pt-40 pb-90">
      <div class="tpprice-shape-one d-none d-xl-block">
         <img src="{{asset('assets/img/shape/hand-shape.png')}}" alt="triangle">
      </div>
      <div class="container">
         <div class="tppricing-wrapper">
            <div class="tppricing-shape">
               <div class="tppricing-shape-one d-none d-md-block">
                  <img src="{{asset('assets/img/shape/pricing-1-shape-1.png')}}" alt="">
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
                           <img src="{{asset('assets/img/shape/save.png')}}" alt="triangle">
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
                                          <i><img src="{{asset('assets/img/icon/pricing-icon-1.png')}}" alt=""></i>
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
                                          <i><img src="{{asset('assets/img/icon/pricing-icon-2.png')}}" alt=""></i>
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
                                 <img src="{{asset('assets/img/shape/triangle.png')}}" alt="triangle">
                              </div>
                              <div class="tpprice-shape-three">
                                 <img src="{{asset('assets/img/shape/smill.png')}}" alt="triangle">
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
                                          <i><img src="{{asset('assets/img/icon/pricing-icon-1.png')}}" alt=""></i>
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
                                          <i><img src="{{asset('assets/img/icon/pricing-icon-2.png')}}" alt=""></i>
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
                                 <img src="{{asset('assets/img/shape/triangle.png')}}" alt="triangle">
                              </div>
                              <div class="tpprice-shape-three">
                                 <img src="{{asset('assets/img/shape/smill.png')}}" alt="triangle">
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


    <section class="choose-area tpchoose-bottom">
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
                              <span><img src="{{asset('assets/img/icon/1.png')}}" alt="" style="width: 15%;"></span>
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
                              <span><img src="{{asset('assets/img/icon/2.png')}}" alt="" style="width: 15%;"></span>
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
                              <span><img src="{{asset('assets/img/icon/3.png')}}" alt="" style="width: 15%;"></span>
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
                              <span><img src="{{asset('assets/img/icon/4.png')}}" alt="" style="width: 15%;"></span>
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
                              <span><img src="{{asset('assets/img/icon/5.png')}}" alt="" style="width: 15%;"></span>
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
                              <span><img src="{{asset('assets/img/icon/6.png')}}" alt="" style="width: 15%;"></span>
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
   </section>


   <!-- testimonial-area-start -->
   <section class="textimonial-area pb-120 fix">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tpsection__content text-center mb-60">
                  <h2 class="tpsection__title">Client love us & we love them</h2>
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
                     <img src="{{asset('assets/img/banner/pabel.png')}}" alt="">
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
                        greatly improved our Furniture business through dynamic website. Thanks Ridgeben for their professionalism and
                        adaptability to last-minute changes.</p>
                     <div class="tptestimonial-avatar-info">
                        <h5 class="tptestimonial-avatar-title">Md. Pabel Ahmed</h5>
                        <span>Manager, Homeland Furniture</span>
                     </div>
                  </div>
               </div>
              <div class="tptestimonial p-relative d-flex align-items-center">
                  <div class="tptestimonial-thumb mr-40">
                     <img src="{{asset('assets/img/team/diran.png')}}" alt="">
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
                     <p>We are highly impressed with the website Ridgeben IT Solutions created for Kinglet BD. It's modern, 
                        fast, and reflects our brand perfectly. Their team was efficient, responsive, and truly understood our goals.</p>
                     <div class="tptestimonial-avatar-info">
                        <h5 class="tptestimonial-avatar-title">Md. Diran Khan</h5>
                        <span>CEO of Kinglet Furniture</span>
                     </div>
                  </div>
               </div>
                <!-- <div class="tptestimonial p-relative d-flex align-items-center">
                  <div class="tptestimonial-thumb mr-40">
                     <img src="{{asset('assets/img/team/testimonial-1.png')}}" alt="">
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
                     <img src="{{asset('assets/img/team/testimonial-2.png')}}" alt="">
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
                     <img src="{{asset('assets/img/team/testimonial-1.png')}}" alt="">
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
                     <img src="{{asset('assets/img/team/testimonial-2.png')}}" alt="">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" fill="none"
                           viewBox="0 0 8 14">
                           <path fill-rule="evenodd"
                              d="M7.707.293a1 1 0 0 1 0 1.414L2.414 7l5.293 5.293a1 1 0 0 1-1.414 1.414l-6-6a1 1 0 0 1 0-1.414l6-6a1 1 0 0 1 1.414 0z"
                              fill="#9f9fa9">
                           </path>
                        </svg>
                     </span>
                  </button>
                  <button class="next-testimonial">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="14" fill="none"
                           viewBox="0 0 8 14">
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
                     <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-1-bg-1.jpg')}}')}}" alt=""></a>
                  </div>
                  <div class="tpblog-content">
                     <div class="tpblog-tag">
                        <a href="blog-details.html">SEO Analysis</a>
                        <a href="blog-details.html">Marketing</a>
                     </div>
                     <h3 class="tpblog-title"><a href="blog-details.html">Simple ways to Optimize your Website For SEO</a></h3>
                     <div class="tpblog-avatar d-flex align-items-center">
                        <div class="tpblog-avatar-thub mr-10">
                           <img src="{{asset('assets/img/blog/comments/blog-avatar-1.png')}}" alt="">
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
                     <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-1-bg-2.jpg')}}" alt=""></a>
                  </div>
                  <div class="tpblog-content">
                     <div class="tpblog-tag">
                        <a href="blog-details.html">SEO Analysis</a>
                        <a href="blog-details.html">Marketing</a>
                     </div>
                     <h3 class="tpblog-title"><a href="blog-details.html">The Trend of Marketing With <br> Tiktok, Should or not?</a></h3>
                     <div class="tpblog-avatar d-flex align-items-center">
                        <div class="tpblog-avatar-thub mr-10">
                           <img src="{{asset('assets/img/blog/comments/blog-avatar-2.png')}}" alt="">
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
                     <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-1-bg-3.jpg')}}" alt=""></a>
                  </div>
                  <div class="tpblog-content">
                     <div class="tpblog-tag">
                        <a href="blog-details.html">SEO Analysis</a>
                        <a href="blog-details.html">Marketing</a>
                     </div>
                     <h3 class="tpblog-title"><a href="blog-details.html">How to Increase Your ROI Through scientific SEM?</a></h3>
                     <div class="tpblog-avatar d-flex align-items-center">
                        <div class="tpblog-avatar-thub mr-10">
                           <img src="{{asset('assets/img/blog/comments/blog-avatar-3.png')}}" alt="">
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
   <section class="contact-area theme-bg-3 pt-120 pb-120" id="free-consult">
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
                        <img src="{{asset('assets/img/shape/form-shape-1.png')}}" alt="">
                     </div>
                     <div class="tpcontact-shape-two" data-parallax='{"y": -100, "smoothness": 20}'>
                        <img src="{{asset('assets/img/shape/form-shape-2.png')}}" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#contactForm').on('submit', function(e) {
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
               success: function(res) {
                  $('#form-response').html('<div class="alert alert-success">Thanks for contacting us!</div>');
                  $('#contactForm')[0].reset();
               },
               error: function(xhr) {
                  if (xhr.status === 422) {
                     let errors = xhr.responseJSON.errors;
                     let errorHtml = '<div class="alert alert-danger"><ul>';
                     $.each(errors, function(key, value) {
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


   @endsection