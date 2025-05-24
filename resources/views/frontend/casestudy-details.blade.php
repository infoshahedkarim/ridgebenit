@extends('layouts.frontend')
@section('title')
    Casestudy Details
@endsection
@section('page-title')
    User List
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
      <!-- breadcrumb-area-start -->
      <div class="breadcrumb-services-area services-details-bg scene breadcrumb-bg p-relative">
         <div class="about-inner-shape">
            <div class="about-inner-shape-2 d-none d-md-block">
               <img class="layer" data-depth="0.5" src="assets/img/shape/about-inner-shape-1.png" alt="">
            </div>
            <div class="about-inner-shape-3 d-none d-md-block">
               <img class="layer" data-depth="0.5" src="assets/img/shape/about-inner-shape-2.png" alt="">
            </div>
         </div>
         <div class="tpbanner-shape-y scene-y">
            <div class="about-inner-shape-4 d-none d-lg-block">
               <img class="layer" data-depth="0.6" src="assets/img/shape/inner-hand-1.png" alt="">
            </div>
         </div>
      </div>
      <!-- breadcrumb-services-area-end -->

      <!-- portfolio-details-area-start -->
      <section class="portfolio-area-start pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="portfolio-details mb-95">
                     <div class="portfolio-details-top text-center">
                        <h4 class="portfolio-details-title mb-50">{{$project->name}}</h4>
                     </div>
                     <div class="portfolio-details-thumb">
                        <img src="{{asset('storage/' . $project->img)}}" alt="{{$project->name}}">
                     </div>
                     <div class="portfolio-details-content pt-65 pl-100 pr-100">
                        <div class="portfolio-details-challenge mb-50">
                           <p>{!! $project->des !!}</p>
                        </div>
                       
                     </div>
                 
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- portfolio-details-area-end -->
   @endsection