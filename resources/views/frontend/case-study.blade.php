@extends('layouts.frontend')
@section('title')
    Blog Details 
@endsection
@section('page-title')
    User List
@endsection
@section('body')

    <body>
    @endsection
    @section('content')

   <main>

     <!-- breadcrumb-area-start -->
      <section class="breadcrumb-area breadcrumb-overlay p-relative pb-115 pt-195 jarallax"
         data-background="assets/img/breadcrumb/1.png" style="background-repeat: no-repeat; background-size: cover;">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content breadcrumb__content-2 text-center p-relative z-index-1">
                     <h3 class="breadcrumb__title">Case Studies</h3>
                     <div class="breadcrumb__list">
                        <span><a href="{{route('home')}}">Home</a></span>
                        <span class="dvdr"></span>
                        <span>Case Study</span>
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

      <!-- postbox area start -->
      <section class="postbox__area pt-120 pb-90">
         <div class="container container-lagre-box">
            <div class="row blog-masonry-active">

               @foreach ($projects as $project)
               <div class="col-xl-3 col-lg-4 col-md-6 blog-masonry-item-active">
                  <div class="tpblog-item-2 mb-30">
                     <div class="tpblog-thumb-2">
                        <a href="{{route('case.study.details', $project->slug )}}"><img src="{{asset('storage/' . $project->img)}}" alt=""></a>
                     </div>
                     <div class="tpblog-wrap">
                        <div class="tpblog-content-2">
                           <span><a href="">{{$project->service_1}}</a></span>
                           <span><a href="">{{$project->service_2}}</a></span>
                           <h4 class="tpblog-title-2"><a href="{{route('case.study.details', $project->slug )}}">{{$project->name}}</a></h4>
                        </div>
                        <div class="tpblog-meta-2">
                           <p>{{$project->short_des}}</p>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach


            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="basic-pagination text-center pt-30">
                     <nav>
                        <ul>
                           <li>
                              <a href="blog.html">
                                 <i>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path d="M11 6H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M6 11L1 6L6 1" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </i>
                              </a>
                           </li>
                           <li>
                              <span class="current">
                                 Next page
                                 <i>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path d="M1 6H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path d="M6 11L11 6L6 1" stroke="currentColor" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                 </i>
                              </span>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- postbox area end -->

   </main>

   @endsection