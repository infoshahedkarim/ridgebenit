<footer>
    <div class="footer-area pt-100" style="background-color:rgb(244, 251, 255);">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-1 mb-40">
                            <div class="footer-widget-logo mb-20">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/img/logo/rits.png')}}" alt="Logo" style="width: 55%">
                                </a>
                            </div>
                            <div class="footer-widget-content">
                                <p class="footer-widget-text mb-20">Our proficient team specializes in creating customized &
                                    innovative digital solutions to meet the unique needs of your business.</p>
                                <div class="footer-widget-social">
                                    <span>Follow Us On</span>
                                    <a href="https://www.facebook.com/ridgebenitsolution"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="https://x.com/Ridgeben_IT"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/company/ridgebenitsolution"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/ridgebenit"><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-2 mb-40">
                            <h4 class="footer-widget-title mb-15">Information</h4>
                            <div class="footer-widget-link">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('services')}}">Services</a></li>
                                    <li><a href="{{route('pricing')}}">Plan & Pricing</a></li>
                                    <li><a href="{{route('show-home.blog')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-3 mb-40">
                            <h4 class="footer-widget-title mb-15">Services & Products</h4>
                            <div class="footer-widget-link">
                                <ul>
                                    @foreach($services as $service)
                                    <li><a href="{{route('page1', $service->slug)}}">{{$service->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-col-4 mb-40">
                            <h4 class="footer-widget-title mb-20">Subcribe.</h4>
                            <div class="footer-widget-newsletter">
                                <p>Our conversation is just getting started</p>
                                <form action="#">
                                    <div class="footer-widget-newsletter-input mb-15">
                                        <input type="email" placeholder="Enter Mail">
                                        <span>
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13 14.6H5C2.6 14.6 1 13.4 1 10.6V5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6Z"
                                                    stroke="#565764" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13 5.39844L10.496 7.39844C9.672 8.05444 8.32 8.05444 7.496 7.39844L5 5.39844"
                                                    stroke="#565764" stroke-width="1.5" stroke-miterlimit="10"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <button class="footer-widget-newsletter-btn">subscribe.</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-widget-copyright text-center">
                            <span>© 2014-2025 Copyrights by Ridgeben IT Solutions. All Rights Reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>