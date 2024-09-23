<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Links of CSS files -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/images/internet/logo.png')}}" />
        <!-- CSS
         ============================================ -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/web/css/bootstrap.min.css')}}" />
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{ asset('/web/css/fontawesome.css')}}" />
        <!-- Flaticon -->
        <link rel="stylesheet" href="{{ asset('/web/css/flaticon.css')}}" />
        <!-- Base Icons -->
        <link rel="stylesheet" href="{{ asset('/web/css/pbminfotech-base-icons.css')}}" />
        <!-- Swiper -->
        <link rel="stylesheet" href="{{ asset('/web/css/swiper.min.css')}}" />
        <!-- Magnific -->
        <link rel="stylesheet" href="{{ asset('/web/css/magnific-popup.css')}}" />
        <!-- Shortcode CSS -->
        <link rel="stylesheet" href="{{ asset('/web/css/shortcode.css')}}" />
        <!-- Demo Base CSS -->
        <link rel="stylesheet" href="{{ asset('/web/css/demo-internet.css')}}" />
        <!-- Base CSS -->
        <link rel="stylesheet" href="{{ asset('/web/css/base.css')}}" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('/web/css/style.css')}}" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('/web/css/responsive.css')}}" />

        <title>Ringless Pro</title>

    
    </head>
<body class="">
 <!-- Start Navbar Area -->
 <header class="site-header header-style-6">
    <div class="pbmit-header-overlay">
        <div class="pre-header-wrapper">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="pbmit-pre-header-left">
                        <ul class="pbmit-contact-info">
                            <li>
                                <i class="pbmit-base-icon-phone-volume-solid"></i>
                                <a href="tel:+1 844-614-2007">Phone: <span>+1 844-614-2007</span></a>
                            </li>
                            <li>
                                <i class="pbmit-base-icon-mail-alt"></i>
                                <a href="mailto:sales@ringless.pro">Email: sales@ringless.pro</a>
                            </li>
                        </ul>
                    </div>
                    <div class="pbmit-pre-header-right">
                        <ul class="pbmit-contact-info">
                            <li>
                                <ul class="pbmit-social-links">
                                    <li class="pbmit-social-li pbmit-social-facebook">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-twitter">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-twitter"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-instagram">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-youtube">
                                        <a href="#" target="_blank">
                                            <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <div class="site-branding flex-grow-1">
                                <a href="index.php">
                                    <img class="logo-img" alt="coworking" src="{{ asset('web/images/internet/logo-ringless-pro.png')}}" />
                                    <img class="sticky-logo" alt="coworking" src="{{ asset('web/images/internet/logo-black-ringless.png')}}" />
                                </a>
                            </div>
                            <div class="site-navigation ml-auto">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel"><i
                                                    class="pbmit-base-icon-close-circular-button-symbol"></i></span>
                                            <ul class="navigation clearfix">
                                                <li class="active">
                                                    <a href="/">Home</a>
                                                </li>
                                                <li class="">
                                                    <a href="{{url('about-us')}}">About us</a>
                                                </li>

                                                <li><a href="{{url('solutions')}}">Solutions</a></li>
                                                <li><a href="{{url('faq')}}">FAQs</a></li>

                                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                                <li><a href="{{url('sign-up')}}">Register</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
 <!-- End Navbar Area -->

            @yield('content')

        

<!-- Start Project Start Area -->

<!-- End Project Start Area -->

<!-- Start Footer Area -->
<footer class="pbmit-bg-color-secondary footer footer-style-2 site-footer">
    <div class="footer-wrap pbmit-footer-big-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <h3>
                        Discover firsthand why countless individuals have embraced the
                        effectiveness of ringless voicemail.
                    </h3>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="pbmit-footer-logo">
                        <img class="pbmit-main-logo img-fluid" src="{{ asset('web/images/internet/logo-ringless-pro.png')}}" alt="logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3"></div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget pbmit-two-column-menu">
                        <h3 class="widget-title">Our Company</h3>
                        <div class="textwidget">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                                <li><a href="{{url('faq')}}">FAQ</a></li>
                                <li><a href="{{url('about-us')}}">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">Need Help?</h3>
                        <div class="pbmit-footer-contact">
                            <div class="pbmit-footer-contact-info">
                                <div class="pbmit-content-box">Customer Care</div>
                                <div class="pbmit-contact-box">
                                    <a href="tel:+1 844-614-2007">+1 844-614-2007</a>
                                </div>
                            </div>
                            <div class="pbmit-footer-contact-info">
                                <div class="pbmit-content-box">Need support?</div>
                                <div class="pbmit-contact-box">
                                    <a href="mailto:sales@ringless.pro">sales@ringless.pro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">Keep in touch</h3>
                        <div class="mc4wp-form-fields">
                            <div class="pbmit-footer-newsletter">
                                <input type="email" name="EMAIL" placeholder="Get news &amp; updates" />
                                <button type="submit" value="Sign up">
                                    <i class="pbmit-base-icon-letter"></i>
                                </button>
                            </div>
                            Curious as to how voicemail messages could fit into your
                            marketing strategy? Want to learn more about how to leave a
                            voicemail without calling?
                        </div>
                        <ul class="pbmit-social-links">
                            <li class="pbmit-social-li pbmit-social-facebook">
                                <a href="#" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-twitter">
                                <a href="#" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-twitter"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-instagram">
                                <a href="#" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                </a>
                            </li>
                            <li class="pbmit-social-li pbmit-social-youtube">
                                <a href="#" target="_blank" rel="noopener">
                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pbmit-footer-text-area">
        <div class="container">
            <div class="pbmit-footer-text-inner">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pbmit-footer-copyright-text-area">
                            Copyright  © 2024 <strong>Ringless Pro</strong>. Powered by <a href="https://easify.app" style="color: #007bff;">Easify</a>. All rights reserved.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-footer-menu-area">
                            <div class="menu-copyright-menu-container">
                                <ul class="pbmit-footer-menu">
                                    <li class="menu-item">
                                        <a href="{{url('privacy')}}">Privacy Policy</a>
                                    </li>
                                    <!-- <li class="menu-item">
                                        <a href="#">Contact</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->
</div>
<!-- page wrapper End -->

<!-- JS
         ============================================ -->
<!-- jQuery JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('/web/js/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{ asset('/web/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('/web/js/bootstrap.min.js')}}"></script>
<!-- jquery Waypoints JS -->
<script src="{{ asset('/web/js/jquery.waypoints.min.js')}}"></script>
<!-- jquery Appear JS -->
<script src="{{ asset('/web/js/jquery.appear.js')}}"></script>
<!-- Numinate JS -->
<script src="{{ asset('/web/js/numinate.min.js')}}"></script>
<!-- Swiper JS -->
<script src="{{ asset('/web/js/swiper.min.js')}}"></script>
<!-- Magnific JS -->
<script src="{{ asset('/web/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Circle Progress JS -->
<script src="{{ asset('/web/js/circle-progress.js')}}"></script>
<!-- Scripts JS -->
<script src="{{ asset('/web/js/scripts.js')}}"></script>
<!-- Lottie Player -->
<script src="{{ asset('/web/js/lottie.min.js')}}"></script>
<!-- Lottie Animation -->
<script src="{{ asset('/web/js/lottie-animation.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#newsletter-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        var emailInput = $('#email').val().trim(); // Get the trimmed value of the email input
        var emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; // Regular expression to validate email format

        // Check if email input is empty or not in valid email format
        if (emailInput === '') {
            $('#validator-newsletter').html('<div class="alert alert-danger">Please enter your email.</div>');
            setTimeout(function() {
                $('#validator-newsletter').empty(); // Clear the message after 3 seconds
            }, 3000);
        } else if (!emailRegex.test(emailInput)) {
            $('#validator-newsletter').html('<div class="alert alert-danger">Please enter a valid email.</div>');
            setTimeout(function() {
                $('#validator-newsletter').empty(); // Clear the message after 3 seconds
            }, 3000);
        } else {
            // Email input is valid, proceed with form submission
            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                url: 'request-demo', // Make sure this URL is correct
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle the success response here
                    $('#validator-newsletter').html('<div class="alert alert-success">Demo Request Sent successfully.</div>');
                    // Optionally, you can reset the form after successful submission
                    $('#newsletter-form')[0].reset();
                    setTimeout(function() {
                $('#validator-newsletter').empty(); // Clear the message after 3 seconds
            }, 3000);
                },
                error: function(xhr, status, error) {
                    // Handle the error response here
                    $('#validator-newsletter').html('<div class="alert alert-danger">An error occurred. Please try again later.</div>');
                    setTimeout(function() {
                $('#validator-newsletter').empty(); // Clear the message after 3 seconds
            }, 3000);
                }
            });
        }
    });
});

</script>
<script>
$(document).ready(function() {
    // Get the current page URL
    var currentUrl = window.location.href;

    // Check if the current URL matches any of the menu item URLs
    $('.navbar-nav a').each(function() {
        var menuItemUrl = $(this).attr('href');

        // Exclude specific URLs from being considered for active class
        if (menuItemUrl !== '{{ env('SIGN_IN') }}') {
            if (currentUrl.includes(menuItemUrl)) {
                $(this).addClass('active'); // Add active class to the menu item

                // Remove active class from other menu items
                $('.navbar-nav a').not(this).removeClass('active');

                // Optional: Add active class to parent menu items if needed
                $(this).parents('.nav-item').children('.nav-link').addClass('active');
            }
        }
    });
});


    </script>
</body>

</html>

           



  
    @yield('pageJavascript')
</body>

</html>

       
