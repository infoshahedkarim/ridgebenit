@extends('layouts.frontend')
@section('title')
Pricing
@endsection
@section('page-title')
User List
@endsection
@section('body')

<body>
   @endsection
   @section('content')


   <!-- faq-area-start -->
   <section class="faq-area banner-area banner-three p-relative theme-bg-4 landing-1">
      <div class="container">
         <div class="banner-three-shape">
            <img src="assets/img/shape/banne-three.png" alt="">
         </div>
         <div class="row">
            <div class="col-lg-6 col-xl-6">
               <div class="tp-faq-wrapper mb-80">
                  <div class="tpsection-wrapper mb-25">
                     <h2 class="tpsection-title-two mb-40" style="color:white">Our<br> Exclusive
                        <span>
                           Services
                           <svg width="306" height="31" viewBox="0 0 306 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2.89242 18.9903C2.89242 18.9903 192.778 -5.15589 299.226 12.3064" stroke="#FFCE5A" stroke-width="5" stroke-linecap="round"></path>
                              <path d="M3.2201 14.9796C3.2201 14.9796 196.633 -0.186388 302.688 21.9968" stroke="#FFCE5A" stroke-width="5" stroke-linecap="round"></path>
                           </svg>
                        </span>
                     </h2>
                     <p style="color:rgb(71, 170, 252)">Can’t find what you are looking for?</p>
                     <b style="color: white">We can connect with us.</b>
                  </div>
                  <div class="tp-faq-img p-relative">
                     <span>
                        <a href="https://wa.me/8801898878819"><svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.4" d="M30.6303 26.693L31.3322 32.3807C31.5122 33.8746 29.9103 34.9186 28.6323 34.1446L21.0906 29.6628C20.2627 29.6628 19.4527 29.6088 18.6607 29.5008C19.9927 27.9349 20.7847 25.9549 20.7847 23.813C20.7847 18.7012 16.3568 14.5615 10.885 14.5615C8.79713 14.5615 6.87121 15.1554 5.26928 16.1994C5.21528 15.7494 5.19727 15.2994 5.19727 14.8314C5.19727 6.64172 12.307 0 21.0906 0C29.8743 0 36.984 6.64172 36.984 14.8314C36.984 19.6912 34.4821 23.9931 30.6303 26.693Z" fill="white" />
                              <path d="M20.7855 23.8126C20.7855 25.9545 19.9936 27.9345 18.6616 29.5004C16.8797 31.6603 14.0538 33.0462 10.8859 33.0462L6.18812 35.8361C5.39615 36.3221 4.38819 35.6561 4.49618 34.7382L4.94616 31.1924C2.53426 29.5184 0.986328 26.8365 0.986328 23.8126C0.986328 20.6447 2.67827 17.8549 5.27017 16.1989C6.8721 15.155 8.79802 14.561 10.8859 14.561C16.3577 14.561 20.7855 18.7008 20.7855 23.8126Z" fill="white" />
                           </svg></a>
                     </span>
                     <div class="tp-faq-shape">
                        <img src="assets/img/shape/faq-shape-2.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-xl-6">
               <div class="tp-accordion">
                  <div class="accordion mb-35" id="accordionExample">
                     <div class="accordion-item" style="padding-right: 5%">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <h5 class="pricing-comparison-tag-title landing-page"><span></span>Account</h5>
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="padding-left: 5%;">
                           <div class="accordion-body">
                              <p>Choosing the best SEO Agency means research, research and more research. Checking through reviews, team credentials, and getting proposals and audits.
                              <p>
                              <div class="d-flex justify-content-center flex-wrap gap-3 text-center mt-40" style="margin-bottom: 5%;">

                                 <div class="tppricing-btn-two" style="text-align: center;">
                                    <a href="{{route('contact')}}" class="tp-btn-blue" style="display: inline-block; text-align: center;">Contact Us</a>
                                 </div>

                                 <div class="tppricing-btn" style="text-align: center;">
                                    <a href="javascript:void(0);" class="tp-btn-blue" id="show-appointment">Book an Appointment</a>
                                 </div>

                              </div>
                           </div>
                        </div>

                     </div>
                     <div class="accordion-item" style="padding-right: 5%">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <h5 class="pricing-comparison-tag-title pricing-comparison-tag-title-2 landing-page"><span></span>Website audit</h5>
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="padding-left: 5%">
                           <div class="accordion-body">
                              Choosing the best SEO Agency means research, research and more research. Checking through reviews, team credentials, and getting proposals and audits.
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item" style="padding-right: 5%">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                              <h5 class="pricing-comparison-tag-title pricing-comparison-tag-title-3 landing-page"><span></span>Rank tracker</h5>
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="padding-left: 5%">
                           <div class="accordion-body">
                              Choosing the best SEO Agency means research, research and more research. Checking through reviews, team credentials, and getting proposals and audits.
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="contact-area theme-bg-3 pt-120 pb-120" id="appointment-section"
      style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: rgba(0,0,0,0.8); z-index: 9999; overflow-y: auto;">
      <div style="max-width: 600px; margin: 50px auto; background: white; padding: 20px; border-radius: 10px; position: relative;">
         <button id="close-appointment" style="position: absolute; top: 10px; right: 10px; background: red; color: white; border: none; border-radius: 50%; width: 30px; height: 30px; font-size: 16px; cursor: pointer;">&times;</button>

         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="p-relative">
                     <div class="tpcontact-form p-relative ml-30">
                        <h4 class="tpcontact-form-title mb-35">Send a message</h4>
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
      </div>
   </section>


   <script>
      document.getElementById("show-appointment").addEventListener("click", function() {
         document.getElementById("appointment-section").style.display = "block";
      });

      document.getElementById("close-appointment").addEventListener("click", function() {
         document.getElementById("appointment-section").style.display = "none";
      });
      document.getElementById("show-appointment").addEventListener("click", function() {
         document.getElementById("appointment-section").style.display = "block";
      });

      document.getElementById("close-appointment").addEventListener("click", function() {
         document.getElementById("appointment-section").style.display = "none";
      });

      
      window.addEventListener("click", function(e) {
         const modal = document.getElementById("appointment-section");
         const content = modal.querySelector("div");
         if (e.target === modal) {
            modal.style.display = "none";
         }
      });
      
      document.getElementById('show-appointment').addEventListener('click', function() {
         document.getElementById('appointment-section').style.display = 'block';
      });

      
      document.getElementById('close-appointment').addEventListener('click', function() {
         document.getElementById('appointment-section').style.display = 'none';
      });

      
      document.addEventListener('click', function(e) {
         var popup = document.getElementById('appointment-section');
         var button = document.getElementById('show-appointment');
         if (
            popup.style.display === 'block' &&
            !popup.contains(e.target) &&
            e.target !== button
         ) {
            popup.style.display = 'none';
         }
      });
   </script>

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



   @endsection