<!-- <footer>
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
                                    @foreach($services->sortByDesc('updated_at')->take(3) as $service)
                                    <li><a href="{{ route('page1', $service->slug) }}">{{ $service->title }}</a></li>
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
</footer> -->
<footer class="ridge-footer">
  <div class="ridge-footer-top">
    <div class="container">
      <div class="row gy-5">

        <!-- Column 1: Logo & Description -->
        <div class="col-lg-4 col-md-6">
          <div class="ridge-footer-about">
            <a href="{{ route('home') }}" class="ridge-footer-logo">
              <img src="{{ asset('assets/img/logo/rits.png') }}" alt="Ridgeben IT Solutions" />
            </a>
            <p>
              Our proficient team specializes in creating customized & innovative digital solutions
              to meet the unique needs of your business.
            </p>

            <div class="ridge-social">
              <a href="https://www.facebook.com/ridgebenitsolution"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://x.com/Ridgeben_IT"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://www.linkedin.com/company/ridgebenitsolution"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="https://www.instagram.com/ridgebenit"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="col-lg-2 col-md-6">
          <h5>Information</h5>
          <ul class="ridge-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('show-home.blog') }}">Blog</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
          </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="col-lg-3 col-md-6">
          <h5>Services & Products</h5>
          <ul class="ridge-links">
            @foreach($services->sortByDesc('updated_at')->take(3) as $service)
              <li><a href="{{ route('page1', $service->slug) }}">{{ $service->title }}</a></li>
            @endforeach
          </ul>
        </div>

        <!-- Column 4: Newsletter -->
        <div class="col-lg-3 col-md-6">
          <h5>Subscribe</h5>
          <p>Join our mailing list for updates & insights.</p>
          <form id="ridgeNewsletterForm" class="ridge-newsletter" novalidate>
  <input type="email" id="ridgeNewsletterEmail" placeholder="Enter your email" required />
  <button type="submit" id="ridgeNewsletterButton">Subscribe</button>
</form>
<p id="ridgeNewsletterMsg" class="ridge-thankyou"></p>


        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="ridge-footer-bottom">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
      <p>© 2014–2025 Ridgeben IT Solutions. All rights reserved.</p>
      <div class="ridge-footer-links">
        <a href="{{ url('/privacy') }}">Privacy Policy</a>
        <span>•</span>
        <a href="{{ url('/terms') }}">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>
<style>
    /* === Ridgeben Modern Dark Footer === */
.ridge-footer {
  background: radial-gradient(circle at top left, #0a1128, #020617 80%);
  color: #e2e8f0;
  font-family: "Inter", sans-serif;
  position: relative;
  overflow: hidden;
}

.ridge-footer-top {
  padding: 80px 0 50px;
  position: relative;
  z-index: 2;
}

/* Subtle glowing background particles (optional) */
.ridge-footer::before {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 20% 40%, rgba(0, 179, 255, 0.1), transparent 70%),
              radial-gradient(circle at 80% 70%, rgba(76, 95, 213, 0.08), transparent 70%);
  z-index: 1;
}

/* Logo & Description */
.ridge-footer-logo img {
  width: 180px;
  margin-bottom: 18px;
  filter: brightness(1.1);
}

.ridge-footer-about p {
  color: #cbd5e1;
  line-height: 1.7;
  font-size: 18px;
  margin-bottom: 18px;
}

/* Social Icons */
.ridge-social a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  margin-right: 10px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.08);
  color: #fff;
  transition: all 0.3s ease;
  border: 1px solid rgba(255, 255, 255, 0.1);
}
.ridge-social a:hover {
  background: linear-gradient(135deg, #00b3ff, #4c5fd5);
  transform: translateY(-3px);
  box-shadow: 0 0 12px rgba(0, 179, 255, 0.4);
}

/* Headings */
.ridge-footer h5 {
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 15px;
  position: relative;
}
.ridge-footer h5::after {
  content: "";
  position: absolute;
  bottom: -6px;
  left: 0;
  width: 35px;
  height: 2px;
  background: linear-gradient(90deg, #00b3ff, #4c5fd5);
}

/* Links */
.ridge-links {
  list-style: none;
  padding: 0;
  margin: 0;
}
.ridge-links li {
  margin: 8px 0;
}
.ridge-links a {
  color: #cbd5e1;
  text-decoration: none;
  position: relative;
  transition: color 0.3s ease;
}
.ridge-links a::before {
  content: "›";
  color: #00b3ff;
  position: absolute;
  left: -14px;
  opacity: 0;
  transition: all 0.3s ease;
}
.ridge-links a:hover {
  color: #fff;
  padding-left: 8px;
}
.ridge-links a:hover::before {
  opacity: 1;
  left: -8px;
}

/* Newsletter */
.ridge-newsletter {
  display: flex;
  gap: 8px;
  margin-top: 12px;
}
.ridge-newsletter input {
  flex: 1;
  padding: 12px 14px;
  border: none;
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
  outline: none;
}
.ridge-newsletter input::placeholder {
  color: #94a3b8;
}
.ridge-newsletter button {
  background: linear-gradient(135deg, #00b3ff, #4c5fd5);
  border: none;
  padding: 12px 20px;
  color: #fff;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
}
.ridge-newsletter button:hover {
  transform: translateY(-2px);
  box-shadow: 0 0 12px rgba(0, 179, 255, 0.4);
}

/* Bottom Bar */
.ridge-footer-bottom {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  background: rgba(0, 0, 0, 0.25);
  padding: 18px 0;
  color: #94a3b8;
  font-size: 14px;
}
.ridge-footer-bottom a {
  color: #94a3b8;
  text-decoration: none;
  margin: 0 6px;
  transition: color 0.3s ease;
}
.ridge-footer-bottom a:hover {
  color: #00b3ff;
}

/* Responsive */
@media (max-width: 767px) {
  .ridge-footer-top {
    padding: 60px 0 30px;
    text-align: center;
  }
  .ridge-social a {
    margin: 0 5px;
  }
  .ridge-footer-bottom {
    text-align: center;
  }
}
/* Newsletter thank-you message */
.ridge-thankyou {
  margin-top: 10px;
  font-size: 18px;
  font-weight: 500;
  color: #00e5ff;
  opacity: 0;
  transition: opacity 0.4s ease;
  text-shadow: 0 0 8px rgba(0, 229, 255, 0.3);
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("ridgeNewsletterForm");
  const emailInput = document.getElementById("ridgeNewsletterEmail");
  const button = document.getElementById("ridgeNewsletterButton");
  const message = document.getElementById("ridgeNewsletterMsg");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // prevent reload

    const email = emailInput.value.trim();
    const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

    // Reset first (so we don’t overlap messages)
    message.style.opacity = "1";
    message.style.transition = "none";
    message.textContent = "";
    message.offsetHeight; // trigger reflow

    if (!isValid) {
      // ❌ Invalid email feedback
      message.textContent = "⚠️ Please enter a valid email address.";
      message.style.color = "#f87171"; // soft red
      message.style.opacity = "1";
      message.style.transition = "opacity 0.4s ease";

      setTimeout(() => {
        message.style.opacity = "0";
      }, 3000); // fade out after 3 seconds
      return;
    }

    // ✅ Valid email feedback
    message.textContent = "🎉 Thank you for subscribing!";
    message.style.color = "#00e5ff";
    message.style.opacity = "1";
    message.style.transition = "opacity 0.4s ease";

    // Animate button
    button.disabled = true;
    button.textContent = "Subscribed ✓";
    button.style.background = "linear-gradient(135deg, #00e5ff, #00ffbf)";
    button.style.boxShadow = "0 0 12px rgba(0, 255, 191, 0.5)";
    emailInput.value = "";

    // Reset after 4 seconds
    setTimeout(() => {
      button.disabled = false;
      button.textContent = "Subscribe";
      button.style.background = "linear-gradient(135deg, #00b3ff, #4c5fd5)";
      button.style.boxShadow = "none";
      message.style.opacity = "0";
    }, 4000);
  });
});
</script>
