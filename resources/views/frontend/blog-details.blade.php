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

      <!-- blog-details-area-start -->
      <section class="blog-details-area blog-details-2-bg pb-50 pt-170">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="blog-details-content text-center">
                     <div class="blog-details-tag">
                        <span><a>{{$blog->category}}</a></span>
                     </div>
                     <h4 class="blog-details-banner-title">{{$blog->title}}</h4>
                     <div class="blog-details-meta">
                        <span class="blog-details-meta-author">
                           <a href="#">
                              {{$blog->author}}
                           </a>
                        </span>
                        <span>
                           <i>
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path
                                    d="M10.5967 10.226L8.42672 8.93099C8.04872 8.70699 7.74072 8.16799 7.74072 7.72699V4.85699"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                              </svg>
                           </i>
                           {{$blog->created_at->format('M d, Y')}}
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- blog-details-area-end -->

      <!-- postbox-area-start -->
      <section class="postbox-area pb-120">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="blog-details-2-thumb text-center mb-50">
                     <img src="{{asset('storage/' . $blog->img)}}" alt="">
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="postbox-main">
                     <div class="postbox-single-text mb-40">
                        <p>{!! $blog->des !!}</p>
                     </div>
                     <div class="tagcloud">
                        <a href="#">{{$blog->category}}</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- postbox-area-end -->

  @endsection