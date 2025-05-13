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
                                        <li><a href="{{route('blog')}}">Blog</a></li>
                                        <!-- <li>
                                            <a href="{{route('casestudy')}}">Case Studies</a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-lg-6 col-6">
                            <div class="tpheader__right d-flex align-items-center justify-content-end">
                                <div class="tpheader__btn ml-25 d-none d-sm-block">
                                    <a href="{{route('contact')}}" class="tp-header-btn">Contact Us</a>
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