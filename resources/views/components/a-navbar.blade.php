<header>
    <div id="header-sticky" class="tptransparent__header header-1">
        <div class="tp-header-top">
            <div class="container">
                <div class="tp-mega-menu-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-6">
                            <div class="tplogo__area">
                                <a href="{{route('home')}}" class="logo">
                                    <img src="{{asset('assets/img/logo/rits.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-8 col-xl-7 col-lg-7 d-none d-xl-block">
                            <div class="tpmenu__area main-mega-menu text-center">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li>
                                            <a href="{{route('home')}}">Home</a>
                                        </li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li class="header-services has-dropdown has-mega-menu">
                                            <a href="">Services</a>
                                            <div class="tp-mega-menu tp-submenu submenu">
                                                <div class="row">                                                     
                                                    <div class="col-xl-6">
                                                        <div class="tp-menu-banner">
                                                            <h5 class="tp-menu-banner-title">Services Overview</h5>
                                                             @foreach ($services as $service)
                                                            <ul>
                                                                <li>
                                                                    <a href="{{route('page1', $service->slug)}}">
                                                                        <span> <img src="{{ asset('storage/' . $service->icon) }}" alt="" style="width: 15%;"> </span>
                                                                        {{$service->title}}
                                                                    </a>
                                                                </li>
                                                                <!-- <li>
                                                                    <a href="{{route('websitedev')}}">
                                                                        <span> <img src="{{asset('assets/icon/2.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Website Development
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('dm')}}">
                                                                        <span> <img src="{{asset('assets/icon/3.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Digital Marketing
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('cloudsol')}}">
                                                                        <span> <img src="{{asset('assets/icon/4.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Cloud Solution
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('pa')}}">
                                                                        <span> <img src="{{asset('assets/icon/5.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Productivity App
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('email')}}">
                                                                        <span> <img src="{{asset('assets/icon/6.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Email & Collaboration Tools
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('cs')}}">
                                                                        <span> <img src="{{asset('assets/icon/7.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Security Solutions
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('webhost')}}">
                                                                        <span> <img src="{{asset('assets/icon/8.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Web Hosting
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('manageservices')}}">
                                                                        <span> <img src="{{asset('assets/icon/9.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Manage Services
                                                                    </a>
                                                                </li> -->

                                                            </ul>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="col-xl-6">
                                                        <div class="tp-menu-banner-wrap">
                                                            <div class="tp-menu-banner-content">
                                                                <span>Ai Driven Digital Solutions</span>
                                                                <h5 class="tp-menu-banner-title-2">The #1 Digital <br> Solution Provider <br> in the Bangladesh.</h5>
                                                                <div class="tp-menu-banner-btn">
                                                                    <a href="{{route('about')}}">
                                                                        Learn more
                                                                        <span>
                                                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M1 1.5L8 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M8 1.5V8.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tp-menu-banner-thumb">
                                                                <img src="{{asset('assets/img/header-icon/header-banner/header-banner-1.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li class="header-services has-dropdown has-mega-menu">
                                            <a href="">Product</a>
                                            <div class="tp-mega-menu tp-submenu submenu">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="tp-menu-banner">
                                                            <h5 class="tp-menu-banner-title">Product Overview</h5>
                                                            @foreach ($products as $product)
                                                            <ul>
                                                                <li>
                                                                    <a href="{{route('page5', $product->slug )}}">
                                                                        <span> <img src="{{ asset('storage/' . $product->icon) }}" alt="" style="width: 15%;"> </span>
                                                                        {{$product->title}}
                                                                    </a>
                                                                </li>
                                                                {{-- <li>
                                                                    <a href="{{route('ams')}}">
                                                                        <span> <img src="{{asset('assets/icon/11.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Account Software
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="{{route('ecom')}}">
                                                                        <span> <img src="{{asset('assets/icon/13.png')}}" alt="" style="width: 15%;"> </span>
                                                                        E-commerce Solution
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('crm')}}">
                                                                        <span> <img src="{{asset('assets/icon/12.png')}}" alt="" style="width: 15%;"> </span>
                                                                        Client Relationship Management
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{route('eler')}}">
                                                                        <span> <img src="{{asset('assets/icon/14.png')}}" alt="" style="width: 15%;"> </span>
                                                                        E-learning Management
                                                                    </a>
                                                                </li> --}}

                                                            </ul>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="tp-menu-banner-wrap">
                                                            <div class="tp-menu-banner-content">
                                                                <span>Ai Driven Digital Solutions</span>
                                                                <h5 class="tp-menu-banner-title-2">The #1 Digital <br> Solution Provider <br> in the Bangladesh.</h5>
                                                                <div class="tp-menu-banner-btn">
                                                                    <a href="{{route('about')}}">
                                                                        Learn more
                                                                        <span>
                                                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M1 1.5L8 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path d="M8 1.5V8.5H1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="tp-menu-banner-thumb">
                                                                <img src="{{asset('assets/img/header-icon/header-banner/header-banner-1.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li><a href="{{route('show-home.blog')}}">Blog</a></li>
                                        <li>
                                            <a href="{{route('case.study')}}">Case Studies</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-6 col-6">
                            <div class="tpheader__right d-flex align-items-center justify-content-end">
                                <div class="tpheader__btn ml-25 d-none d-sm-block">
                                    <!-- <a href="{{route('contact')}}" class="tp-header-btn">Free Consultation</a> -->
                                     <a href="javascript:void(0);" id="freeConsultationBtn" class="tp-header-btn" style="font-size: 14px; width: 180px">Free Consultation</a>

                                </div>
                                <div class="offcanvas-btn d-xl-none ml-20">
                                    <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

<style>
/* Transparent header with background */
.tptransparent__header {
    background: rgba(255, 255, 255, 0.6); /* White with 60% opacity */
    position: sticky;  /* Keeps it fixed at the top when scrolling */
    top: 0;  /* Ensure it stays at the top */
    width: 100%;
    z-index: 10;  /* Keeps the header above other content */
    backdrop-filter: blur(6px); /* Optional frosted glass effect */
}

/* Ensure the text in the header is visible */
.tptransparent__header a {
    color: #ffffffff;  /* Dark color for the menu items to contrast with the background */
}


</style>


<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets/img/logo/rits.png')}}" alt="logo" style="width: 30%; margin-top: 5%;">
                    </a>
                </div>
            </div>
            <div class="tp-main-menu-mobile mb-35"></div>
            <div class="offcanvas__btn">
                <a href="{{route('contact')}}" class="tp-btn w-100">Contact Us</a>
            </div>
            <div class="offcanvas__contact mb-40">
                <p class="offcanvas__contact-mail"><a href="tel:+880 189 887 8819">+880 189 887 8819</a> | <a href="tel:+880 189 887 8818">+880 189 887 8818</a></p>
                
                <p class="offcanvas__contact-mail"><a href="mailto:info@ridgebenit.com">info@ridgebenit.com</a> | <a href="mailto:hr@ridgebenit.com">hr@ridgebenit.com</a></p>
                
            </div>
            <div class="offcanvas__social">
            <a href="https://www.facebook.com/ridgebenitsolution"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://x.com/Ridgeben_IT"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/company/ridgebenitsolution"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/ridgebenit"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>


<!-- Free Consultation Modal -->
<div id="consultationModal" class="modal">
    <div class="modal-content">
        <span id="closeModalBtn" class="close">&times;</span>
        <h2 class="modal-title">Free Project Consultation</h2>

         @csrf

                        @if(session('success'))
                        <div class="alert alert-success">
                           {{session('success')}}
                        </div>
                        @endif

        <form id="contactForm" action="{{route('email.store')}}" method="POST">
            <input name="name" id="name" value="{{old('name')}}" placeholder="Full Name" required>
            @error('name')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror
            <input type="text" name="phone" id="phone" value="{{old('phone')}}" placeholder="Phone No." required>
            @error('phone')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror

            <div class="form-row">
                    <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email Address" required>
                                    @error('email')
                                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                    @enderror 
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

            <textarea name="msg" value="{{old('msg')}}" placeholder="Tell us briefly about your project" rows="4" required></textarea>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</div>
<!--start css and js for floating for free consultation -->
<style>
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
</script>
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

<!-- ekhane sub menu er css jeta static -->
<style>
            /* Submenu list reset */
        .tp-menu-banner .tp-menu-services{margin:0; padding:0; list-style:none;}
        .tp-menu-banner .tp-menu-services li + li{margin-top:6px;}

        /* Row look with icon + label */
        .tp-menu-banner .tp-menu-services a{
        display:flex; align-items:center; gap:10px;
        padding:8px 10px; border-radius:8px; text-decoration:none;
        color:inherit; /* inherit theme link color */
        }

        /* Subtle hover that matches a royal theme */
        .tp-menu-banner .tp-menu-services a:hover{
        background: rgba(76,95,213,.08);
        }

        /* Icon sizes; inherits color via currentColor */
        .tp-menu-banner .menu-icon{width:26px; height:26px; display:inline-grid; place-items:center;}
        .tp-menu-banner .menu-svg{width:22px; height:22px; color: currentColor;}

        /* Label */
        .tp-menu-banner .menu-label{line-height:1.2; font-weight:600;}
 

  .tp-menu-banner .menu-svg {
  color: #2f0672ff; /* example: royal purple */
}




</style>