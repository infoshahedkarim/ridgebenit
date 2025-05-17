@extends('layouts.frontend')
@section('title')
    Blogs
@endsection
@section('page-title')
    User List
@endsection
@section('body')

    <body>
    @endsection
    @section('content')


      <!-- breadcrumb-area-start -->
      <section class="breadcrumb-area breadcrumb-overlay p-relative pb-115 pt-195 jarallax"
         data-background="assets/img/breadcrumb/1.png">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content breadcrumb__content-2 text-center p-relative z-index-1">
                     <h3 class="breadcrumb__title">Blog List</h3>
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"></span>
                        <span>Blog List</span>
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
      <section class="postbox__area pt-120 pb-95">
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="blog-list-wrap">


                     @foreach ($blogs as $blog )
                         
                     <div class="blog-list-item d-flex mb-30">
                        <div class="blog-list-thumb">
                           <a href="{{route('show-detail.blog', $blog->slug )}}"><img src="{{asset('storage/' . $blog->img)}}" alt=""></a>
                        </div>
                        <div class="blog-list-content">
                           <div class="blog-list-tag">
                              <a href="">{{$blog->category}}</a>
                           </div>
                           <h4 class="blog-list-title">
                              <a href="{{route('show-detail.blog', $blog->slug )}}">{{$blog->title}}</a>
                           </h4>
                           <p>{{$blog->short_decs}}</p>
                           <div class="tpblog-meta-2 mb-35">
                              <span>
                                 <i>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z"
                                          stroke="#565764" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                       <path
                                          d="M10.5967 10.226L8.42672 8.93099C8.04872 8.70699 7.74072 8.16799 7.74072 7.72699V4.85699"
                                          stroke="#565764" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    </svg>
                                 </i>
                                 {{$blog->created_at->format('M d, Y')}}
                              </span>
                              <span>
                                    <i>
                                       <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path
                                             d="M6.99976 7.98487C8.92858 7.98487 10.4922 6.42125 10.4922 4.49243C10.4922 2.56362 8.92858 1 6.99976 1C5.07094 1 3.50732 2.56362 3.50732 4.49243C3.50732 6.42125 5.07094 7.98487 6.99976 7.98487Z"
                                             stroke="#565764" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                          <path
                                             d="M13 14.9697C13 12.2665 10.3108 10.0803 7 10.0803C3.68917 10.0803 1 12.2665 1 14.9697"
                                             stroke="#565764" stroke-width="1.5" stroke-linecap="round"
                                             stroke-linejoin="round" />
                                       </svg>
                                    </i>
                                    {{$blog->author}}
                                 </a>
                              </span>
                           </div>
                           <div class="blog-list-btn">
                              <a href="{{route('show-detail.blog', $blog->slug )}}">Read More</a>
                           </div>
                        </div>
                     </div>

                     @endforeach



                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper ml-30">
                     <div class="sidebar__widget mb-20">
                        <div class="sidebar__widget-content">
                           <div class="sidebar__search">
                              <form action="#">
                                 <div class="sidebar__search-input-2">
                                    <div class="sidebar__search-input-2-box">
                                       <input type="text" placeholder="Type something...">
                                    </div>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-20">
                        <h3 class="sidebar__widget-title">Recent Post</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post rc__post">

                              @foreach ($tops as $top )
                                  
                              
                              <div class="rc__post mb-10 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="{{route('show-detail.blog', $top->slug )}}"><img src="{{asset('storage/' . $top->img)}}"
                                          alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <h3 class="rc__post-title">
                                       <a href="{{route('show-detail.blog', $top->slug )}}">{{$top->title}}</a>
                                    </h3>
                                    <div class="rc__meta">
                                       <span>{{$top->created_at->format('M d, Y')}}</span>
                                    </div>
                                 </div>
                              </div>
                              
                              @endforeach

                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-20">
                        <h3 class="sidebar__widget-title">Social</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__widget-social">
                              <a href="https://www.facebook.com/ridgebenitsolution"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="https://x.com/Ridgeben_IT"><i class="fa-brands fa-twitter"></i></a>
                              <a href="https://www.linkedin.com/company/ridgebenitsolution"><i class="fa-brands fa-linkedin-in"></i></a>
                              <a href="https://www.instagram.com/ridgebenit"><i class="fa-brands fa-instagram"></i></a>
                              <a href="https://wa.me/8801898878819"><i class="fa-brands fa-whatsapp"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget sidebar__newsletter mb-40">
                        <h3 class="sidebar__widget-title">Newsletter</h3>
                        <p>Register Now to Get Latest Updates
                           On Promotions & Coupons.</p>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__widget-input">
                              <input type="email" placeholder="Type your email...">
                              <button class="blog-btn" type="submit">Subscribe</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- postbox area end -->

   @endsection