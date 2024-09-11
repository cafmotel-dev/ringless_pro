@extends('web')
@section('title', 'Best VOIP Phone Services  | Cloud Phone System |Cloud PBX Providers| USA, CANADA')
@section('content')
<style>
.accordion-style-3 .accordion-item.active .accordion-body {
    /* background-color: var(--pbmit-white-color); */
    background-color: transparent;
}
.pbmit-pre-header-right{
    margin-top:17px;
}
</style>


    <!-- page wrapper -->
    <div class="page-wrapper">
        <!-- Header Main Area -->
        <!-- Header Main Area End Here -->

        <!-- Page Content -->
        <div class="page-content pbmit-bg-color-light">
            <!-- Welcome -->
            <section class="banner-section-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="pbmit-text-style-6">
                                <h6 class="pbmit-subtitle">
                                    <span class="text-style">Welcome</span> TO Ringless
                                    Voicemail drops
                                </h6>
                                <h2 class="pbmit-title">
                                    Save Time. Send Ringless Voicemails. Stay Personal.
                                </h2>
                                <p>
                                    RingLess serves as the go-to productivity tool for busy and
                                    efficient professionals, making a significant impact on
                                    their daily routines.
                                </p>
                                <div>
                                    <a href="{{url('sign-up')}}" class="pbmit-btn">Get Started</a>
                                    <!-- <span class="button-text">Discover Hub</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="internet-lottie">
                                <!-- <div id="internet-banner" class="lottie-anim"></div> -->
                                <img src="{{ asset('web/images/internet/banner2.png')}}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Welcome End -->

            <!-- About Start -->
            <section class="about-section-home6">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                <img src="{{ asset('web/images/internet/prerecord1.jpeg')}}" class="img-fluid"
                                                    alt="Prerecord Your Message" />
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Prerecord Your Message
                                        </h2>
                                        <div class="pbmit-heading-desc">
                                            Access the line, record your message via phone, or
                                            upload an audio message.
                                        </div>
                                        <!-- <div class="pbmit-ihbox-btn">
                        <a href="#"><span>Read More</span></a>
                      </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                <img src="{{ asset('web/images/internet/recepient1.png')}}" class="img-fluid"
                                                    alt="Choose Your Recipients" />

                                                <br />
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Choose Your Recipients
                                        </h2>
                                        <div class="pbmit-heading-desc">
                                            Import contact lists and select recipients for your
                                            message distribution.
                                        </div>
                                        <!-- <div class="pbmit-ihbox-btn">
                        <a href="#"><span>Read More</span></a>
                      </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="pbmit-ihbox-style-8">
                                <div class="pbmit-ihbox-box">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                <img src="{{ asset('web/images/internet/voicemail-schedule.png')}}" class="img-fluid"
                                                    alt="Easy to use" />
                                            </div>
                                        </div>
                                        <h2 class="pbmit-element-title">
                                            Schedule Your Voicemails
                                        </h2>
                                        <div class="pbmit-heading-desc">
                                            Set your caller ID and send your voicemail messages
                                            immediately, in batches, or scheduled out.
                                        </div>
                                        <!-- <div class="pbmit-ihbox-btn">
                        <a href="#"><span>Read More</span></a>
                      </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About End -->
            <!-- Progressbar Start -->
            <section class="section-lg pbmit-bg-color-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="pbmit-heading-subheading-style-2 text-start">
                                <!-- <h4 class="pbmit-subtitle">92% Open Rate</h4> -->
                                <h2 class="pbmit-title">92% Open Rate</h2>
                            </div>
                            <p class="text-about1">
                                Ringless Voicemail has the highest open rates, lowest
                                cost-per-acquisition (CPA), and best reach in the U.S.
                                marketing industry.
                            </p>
                            <a href="contact-us.html" class="pbmit-btn mt-3">Contact us</a>
                        </div>
                        <div class="col-xl-6 col-md-12 progressbar-section-home">
                            <div class="progressbar">
                                <span class="progress-label">Voicemail Listen</span>
                                <div class="progress progress-lg progress-percent-bg">
                                    <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                        data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                        role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 92%">
                                        <span class="progress-percent">92%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progressbar">
                                <span class="progress-label">Text Message Read</span>
                                <div class="progress progress-lg progress-percent-bg">
                                    <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                        data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                        role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 81%">
                                        <span class="progress-percent">81%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progressbar">
                                <span class="progress-label">Live Call Answer</span>
                                <div class="progress progress-lg progress-percent-bg">
                                    <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                        data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                        role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 56%">
                                        <span class="progress-percent">56%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progressbar">
                                <span class="progress-label">Email Marketing</span>
                                <div class="progress progress-lg progress-percent-bg">
                                    <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                        data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                        role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 32%">
                                        <span class="progress-percent">32%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progressbar">
                                <span class="progress-label">Direct Mail</span>
                                <div class="progress progress-lg progress-percent-bg">
                                    <div class="progress-bar aos aos-init aos-animate" data-aos="slide-right"
                                        data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                                        role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 24%">
                                        <span class="progress-percent">24%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Progressbar End -->
            <!-- Agency Start -->
            <section>
                <div class="container">
                    <div class="row align-items-center align-content-center">
                        <div class="col-xl-6 col-md-12">
                            <div>
                                <div id="internet-anim-01" class="lottie-anim">
                                    <img src="{{ asset('web/images/internet/callBack.png')}}" alt="" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12 agency-right-section-home6">
                            <div class="pbmit-heading-subheading-style-6">
                                <!-- <h4 class="pbmit-subtitle">MARKETING AGENCY</h4> -->
                                <h2 class="pbmit-title">Activate Callback Analytics</h2>
                            </div>
                            <div class="mb-4">
                                For the first time, access callback reporting and analysis by
                                acquiring and utilizing a Callback Number. By designating your
                                Callback Number as the caller ID in your upcoming ringless
                                voicemail campaign, you can measure the effectiveness of your
                                outreach. <br /><br />
                                These Callback Numbers can be redirected to the phone number
                                of your preference, ensuring you never miss a call. Download
                                our white paper by clicking here.
                            </div>
                            <!-- <div class="pbmit-ihbox-style-9">
                  <div class="pbmit-ihbox-box d-flex align-items-center">
                    <div class="pbmit-ihbox-icon">
                      <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                          <i
                            class="pbmit-xido-icon pbmit-xido-icon-cloud-computing"
                          ></i>
                        </div>
                      </div>
                    </div>
                    <div class="pbmit-ihbox-contents">
                      <h2 class="pbmit-element-title">
                        Discover, Explore the Product
                      </h2>
                      <div class="pbmit-heading-desc">
                        An effective campaign demands a great deal of time and
                        planning run a marketing.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbmit-ihbox-style-9">
                  <div class="pbmit-ihbox-box d-flex align-items-center">
                    <div class="pbmit-ihbox-icon">
                      <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                          <i
                            class="pbmit-xido-icon pbmit-xido-icon-satellite"
                          ></i>
                        </div>
                      </div>
                    </div>
                    <div class="pbmit-ihbox-contents">
                      <h2 class="pbmit-element-title">
                        Marketing Strategy & Campaigns
                      </h2>
                      <div class="pbmit-heading-desc">
                        An effective campaign demands a great deal of time and
                        planning run a marketing.
                      </div>
                    </div>
                  </div>
                </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Agency End -->

            <!-- Counter Start -->
            <section class="counter-section-home6">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="pbminfotech-ele-fid-style-9">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <h4 class="pbmit-fid-inner d-flex">
                                            <span class="pbmit-fid"></span>
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="323"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">323</span>
                                            <span class="pbmit-fid"><span>K+</span></span>
                                        </h4>
                                        <div class="pbmit-fid-title">SMS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="pbminfotech-ele-fid-style-9">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <h4 class="pbmit-fid-inner d-flex">
                                            <span class="pbmit-fid"></span>
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="105"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">105</span>
                                            <span class="pbmit-fid"><span>m</span></span>
                                        </h4>
                                        <div class="pbmit-fid-title">Call</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="pbminfotech-ele-fid-style-9">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <h4 class="pbmit-fid-inner d-flex">
                                            <span class="pbmit-fid"></span>
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="50"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">50</span>
                                            <span class="pbmit-fid"><span>K+</span></span>
                                        </h4>
                                        <div class="pbmit-fid-title">Voicemail</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="pbminfotech-ele-fid-style-9">
                                <div class="pbmit-fld-contents">
                                    <div class="pbmit-fld-wrap">
                                        <h4 class="pbmit-fid-inner d-flex">
                                            <span class="pbmit-fid"></span>
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="250"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">250</span>
                                            <span class="pbmit-fid"><span>m</span></span>
                                        </h4>
                                        <div class="pbmit-fid-title">Daily Notifications</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter End -->

            <!-- Service Start -->
            <section class="section-lg pbmit-bg-color-secondary service-section-home6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="pbmit-heading-subheading text-white">
                                <h4 class="pbmit-subtitle">Features</h4>
                                <h2 class="pbmit-title">
                                    Features & Analytics to Help you Succeed
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div
                                class="service6-arrow swiper-btn-white swiper-btn-circle swiper-btn-custom d-flex flex-row-reverse">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slider" data-arrows-class="service6-arrow" data-autoplay="false"
                        data-dots="false" data-arrows="true" data-columns="4" data-margin="30" data-effect="slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Slide1 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-laptop"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">HIPAA compliant</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    HIPAA compliant voicemail/mass communication
                                                    solution to reach thousands instantly in a safe and
                                                    secure manner
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide2 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-wifi-router"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Upload Contact</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Effortlessly upload and manage personalized contact
                                                    lists within the dedicated account interface,
                                                    offering seamless control and convenience.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide3 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-cable"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Pre-record Messages</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Craft personalized pre-recorded messages and upload
                                                    an extensive collection as per your requirements.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide4 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-wifi"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Filter Lists</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Establish connections with both mobile phones and
                                                    landlines, or fine-tune your lists to align with
                                                    your specific objectives.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide5 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-shield-1"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Customize Caller ID</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Tailor and customize your Caller ID to exhibit a
                                                    distinctive voice message, emanating from the phone
                                                    number of your preference.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide6 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-fountain-pen"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Track Campaigns</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Track campaign success instantly with delivery
                                                    reports on your dashboard and unlock callback
                                                    reporting via a designated number.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide7 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-local-area-network"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Automate Campaigns</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Integrate seamlessly with Zapier, Make, and
                                                    Integrately to automate campaigns through external
                                                    triggers.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide8 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-video-call"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">Voicemail Personalization</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    Voicemail Personalization utilizes AI and your voice
                                                    to integrate the recipient's first name into the
                                                    message.
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <!-- Slide9 -->
                                <article class="pbmit-service-style-3">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-service-icon-wrapper">
                                            <i class="pbmit-xido-icon pbmit-xido-icon-incognito"></i>
                                        </div>
                                        <div class="pbminfotech-box-content">
                                            <h3 class="pbmit-service-title">
                                                <a href="#">API access</a>
                                            </h3>
                                            <div class="pbmit-service-content">
                                                <p>
                                                    API accesss for developers, free with each RingLess
                                                    account
                                                </p>
                                            </div>
                                        </div>
                                        <!-- <div class="pbmit-service-btn">
                        <a class="btn-arrow" href="services-details-two.html">
                          Read More</a
                        >
                      </div> -->
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service End -->

            <!-- Portfolio Start -->
            <section class="section-lg">
                <div class="container">
                    <div class="video-section-home6">
                        <a href="https://www.youtube.com/watch?v=otN60BSuZrg"
                            class="coworing-video-btn pbmin-lightbox-video">
                            <i class="fa fa-play" style="font-size: 24px; color: var(--pbmit-blackish-color); line-height: 80px; vertical-align: middle;"></i>                        </a>
                    </div>
                </div>
            </section>
            <!-- Portfolio End -->

            <!-- Pricing Start -->


            <section>
                <div class="container">
                    <div class="row align-items-center align-content-center">
                        <div class="col-xl-4 col-md-12">
                            <div class="pbmit-heading-subheading-style-4">
                                <h4 class="pbmit-subtitle"> OUR PRICING </h4>
                                <h2 class="pbmit-title">Check Our Valuable Price</h2>
                            </div>
                            <div>Ringless voicemail delivers results! If your initial voicemail marketing campaign falls
                                short, we offer a money-back guarantee. Check Terms & Conditions.</div>
                            <div class="pbmit-ihbox-style-12">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="pbmit-xido-icon pbmit-xido-icon-ppc"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title"> No credit card required </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-style-12 pbmit-infobox-12-one">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="pbmit-xido-icon pbmit-xido-icon-customer-behavior"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title"> Get 30 day free trial </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-style-12 pbmit-infobox-12-two">
                                <div class="pbmit-ihbox-box d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="pbmit-xido-icon pbmit-xido-icon-pencil"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Cancel anytime</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-12">
                            <div class="pbminfotech-ele-ptable-style-2">
                                <div class="pbmit-heading-subheading pbmit-heading-subheading-style-1 left-align"></div>
                                <div class="pbmit-ptable-cols row multi-columns-row">
                                    <div class="pbmit-ptable-col col-md-6">
                                        <div class="pbmit-pricing-table-box">
                                            <div class="pbmit-head-wrap">
                                                <div class="pbminfotech-ptable-price-w">
                                                    <h3 class="pbminfotech-ptable-heading">Sliver Pack</h3>



                                                    <div class="pbminfotech-sep"></div>
                                                    <div>200 deliveries for $10</div>
                                                    <div>1000 deliveries for $40</div>
                                                    <div>2,000 deliveries for $60</div>
                                                    <div>10,000 deliveries for $225</div>
                                                    <div>20,000 deliveries for $400</div>
                                                    <!-- <div class="pbminfotech-sep"></div>
                                                    <div class="pbminfotech-ptable-symbol">$</div>
                                                    <div class="pbminfotech-ptable-price">78.00</div>
                                                    <div class="pbminfotech-ptable-frequency">Per/Month</div> -->
                                                </div>
                                            </div>
                                            <div class="pbmit-ptable-inner">
                                                <div class="pbmit-ptable-lines-w">
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Send Unlimited Campaigns
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Create Unlimited Call Lists
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Record Unlimited Audio Recordings
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Zapier Integration with CRMs
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        API Access
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Phone and Email Support
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Our Guarantee
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="pbminfotech-ptable-btn">
                                                <div class="pbmit-ptable-btn">
                                                    <a href="{{url('sign-up')}}"><span>Get Started</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbmit-pricing-table-featured-col pbmit-ptable-col col-md-6">
                                        <div class="pbmit-pricing-table-box">
                                            <div class="pbmit-ptablebox-featured-w"></div>
                                            <div class="pbmit-head-wrap">
                                                <div class="pbminfotech-ptable-price-w">
                                                    <h3 class="pbminfotech-ptable-heading">Gold Pack</h3>
                                                    <div class="pbminfotech-sep"></div>
                                                    <div>200 deliveries for $8/mo</div>
                                                    <div>600 deliveries for $25/mo</div>
                                                    <div>4,000 deliveries for $100/mo</div>
                                                    <div>8,000 deliveries for $250/mo</div>
                                                    <div>26,000 deliveries for $500/mo</div>
                                                    <!-- <div class="pbminfotech-ptable-symbol">$</div>
                                                    <div class="pbminfotech-ptable-price">174.00</div>
                                                    <div class="pbminfotech-ptable-frequency">Per/Month</div> -->
                                                </div>
                                            </div>
                                            <div class="pbmit-ptable-inner">
                                                <div class="pbmit-ptable-lines-w">
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i> Send Unlimited Campaigns
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i> Create Unlimited Call
                                                        Lists
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>

                                                        Record Unlimited Audio Recordings
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Zapier Integration with CRMs
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        API Access
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Phone and Email Support
                                                    </div>
                                                    <div class="pbmit-ptable-line">
                                                        <i class="fa fa-check"></i>
                                                        Our Guarantee
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pbminfotech-ptable-btn">
                                                <div class="pbmit-ptable-btn"><a href="{{url('sign-up')}}"><span>Get Started</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Pricing End -->

            <!-- faq Start -->
            <!-- <section class="section-lg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="strategy-lottie-home6">
                                <div id="internet-anim-02" class="lottie-anim">
                                    <img src="images/internet/guarantee.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12 strategy-section-home6">
                            <div class="pbmit-heading-subheading-style-6">
                                <h4 class="pbmit-subtitle">OUR STRATEGY</h4>
                                <h2 class="pbmit-title">Our Guarantee</h2>
                            </div>

                            <div>
                                Ringless voicemail delivers results! If your initial voicemail
                                marketing campaign falls short, we offer a money-back
                                guarantee. Check Terms & Conditions.
                            </div>

                            <a href="#" class="pbmit-btn mt-4">Know More</a>
                        </div>
                    </div>
                </div>
            </section> -->

            <section class="section-lg">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-xl-8 col-md-12">
                            <div class="pbmit-heading-subheading-style-9">
                                <h2 class="pbmit-title">GENERAL QUESTIONS</em> </h2>
                            </div>
                            <div class="accordion accordion-style-3" id="accordionExample2">
                                <div class="accordion-item active">
                                    <h2 class="accordion-header" id="headingOne1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                            aria-expanded="false" aria-controls="collapseOne1">
                                            What is a Ringless Voicemail and How Does It Work?
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Ringless voicemail drops (RVMs), also known as voicemail
                                            drops, are tools employed to deliver personalized
                                            voicemail messages directly to the recipient's voicemail
                                            box. Ringless Pro holds the patent for our ringless
                                            voicemail technology. Utilizing our platform, we
                                            seamlessly take your prerecorded message and insert it
                                            into the recipient's voicemail box. We take pride in the
                                            technology we've developed and the advantageous outcomes
                                            it offers. To learn more about our patented ringless
                                            voicemail technology, please read further.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                            aria-expanded="false" aria-controls="collapseTwo1">
                                            Does Ringless Voicemail Work on Landlines?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Ringless voicemail or voicemail drops function with U.S.
                                            and Canadian mobile numbers and certain landline phones.
                                            For compatibility with landlines, a voicemail messaging
                                            system/voicemail-box must be included, provided by their
                                            phone service provider.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                            aria-expanded="false" aria-controls="collapseThree1">
                                            What Do you Need to Know about Ringless Voicemail?
                                        </button>
                                    </h2>
                                    <div id="collapseThree1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Ringless voicemail stands out as a highly efficient
                                            marketing method, enabling outreach to numerous phone
                                            numbers without the need for manual dialing. With our
                                            user-friendly interface, you can swiftly create and
                                            deploy a voicemail drop within minutes of setting up
                                            your account.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour1"
                                            aria-expanded="false" aria-controls="collapseFour1">
                                            What Laws Surround Ringless Voicemail?
                                        </button>
                                    </h2>
                                    <div id="collapseFour1" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour1" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            Ringless voicemail technology is legally permissible,
                                            but, like any telecommunication service, it is subject
                                            to regulation. The regulations governing phone calls and
                                            text messaging also extend to ringless voicemail. The
                                            Telephone Consumer Protection Act (TCPA), established in
                                            1991 under the guidance of the FCC, safeguards consumer
                                            privacy by placing restrictions on telemarketing
                                            communications. In 2003, the Federal Trade Commission
                                            (FTC) created the National Do Not Call Registry,
                                            introducing regulations that prohibit commercial
                                            telemarketers from making unwanted, unsolicited sales
                                            calls. For more details on the TCPA and FCC Guidelines,
                                            you can visit
                                            <a href="https://www.donotcall.gov/" target="_blank">www.donotcall.gov.</a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="lottie-anim">
                                <img src="{{ asset('web/images/internet/voice-faq.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq End -->

            <!-- Testimonial Start -->
            <section class="section-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-12">
                            <div class="pbmit-heading-subheading-style-3">
                                <h4 class="pbmit-subtitle">OUR TESTIMONIALS</h4>
                                <h2 class="pbmit-title pe-4">What clients says about us</h2>
                            </div>

                            <!-- <a href="" class="pbmit-btn pbmit-btn-outline"
                  >Explore More</a
                > -->
                        </div>
                        <div class="col-xl-8 col-md-12 testimonial-right-section-home3">
                            <div class="swiper-slider" data-arrows-class="home3-team-arrow" data-autoplay="false"
                                data-dots="true" data-arrows="true" data-columns="2" data-margin="30"
                                data-effect="slide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Slide1 -->
                                        <article class="pbmit-testimonial-style-5">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-box-content">
                                                    <div class="pbminfotech-box-desc">
                                                        <blockquote class="pbminfotech-testimonial-text">
                                                            <p>
                                                                My Call Pro is able to provide our business
                                                                partners and their clients a unique messaging
                                                                feature not available with any other contact
                                                                center software provider using (patent
                                                                pending) text-to-speech ringless voicemail
                                                                drops with No Dial™.
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="pbminfotech-author-wrapper">
                                                        <div class="pbminfotech-box-star-ratings">
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                        </div>
                                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                                            <h3 class="pbminfotech-box-title">
                                                                Amelia Daniel
                                                            </h3>
                                                            <div class="pbminfotech-testimonial-detail">
                                                                Market Analyst
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide2 -->
                                        <article class="pbmit-testimonial-style-5">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-box-content">
                                                    <div class="pbminfotech-box-desc">
                                                        <blockquote class="pbminfotech-testimonial-text">
                                                            <p>
                                                                My Call Pro is able to provide our business
                                                                partners and their clients a unique messaging
                                                                feature not available with any other contact
                                                                center software provider using (patent
                                                                pending) text-to-speech ringless voicemail
                                                                drops with No Dial™.
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="pbminfotech-author-wrapper">
                                                        <div class="pbminfotech-box-star-ratings">
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                        </div>
                                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                                            <h3 class="pbminfotech-box-title">
                                                                Jordan Billy
                                                            </h3>
                                                            <div class="pbminfotech-testimonial-detail">
                                                                Business Analysis
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide3 -->
                                        <article class="pbmit-testimonial-style-5">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-box-content">
                                                    <div class="pbminfotech-box-desc">
                                                        <blockquote class="pbminfotech-testimonial-text">
                                                            <p>
                                                                We are so grateful for everything that we have
                                                                learned from you. You have our immense thanks
                                                                for all of the support you’ve given us.
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="pbminfotech-author-wrapper">
                                                        <div class="pbminfotech-box-star-ratings">
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                        </div>
                                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                                            <h3 class="pbminfotech-box-title">
                                                                Ariella Olive
                                                            </h3>
                                                            <div class="pbminfotech-testimonial-detail">
                                                                Manager
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide4 -->
                                        <article class="pbmit-testimonial-style-5">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-box-content">
                                                    <div class="pbminfotech-box-desc">
                                                        <blockquote class="pbminfotech-testimonial-text">
                                                            <p>
                                                                We are so grateful for everything that we have
                                                                learned from you. You have our immense thanks
                                                                for all of the support you’ve given us.
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="pbminfotech-author-wrapper">
                                                        <div class="pbminfotech-box-star-ratings">
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                        </div>
                                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                                            <h3 class="pbminfotech-box-title">
                                                                Andrew Paul
                                                            </h3>
                                                            <div class="pbminfotech-testimonial-detail">
                                                                CEO of Xiod
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Slide5 -->
                                        <article class="pbmit-testimonial-style-5">
                                            <div class="pbminfotech-post-item">
                                                <div class="pbminfotech-box-content">
                                                    <div class="pbminfotech-box-desc">
                                                        <blockquote class="pbminfotech-testimonial-text">
                                                            <p>
                                                                We are so grateful for everything that we have
                                                                learned from you. You have our immense thanks
                                                                for all of the support you’ve given us.
                                                            </p>
                                                        </blockquote>
                                                    </div>
                                                    <div class="pbminfotech-author-wrapper">
                                                        <div class="pbminfotech-box-star-ratings">
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                            <i class="pbmit-base-icon-star pbmit-active"></i>
                                                        </div>
                                                        <div class="pbminfotech-box-author d-flex align-items-center">
                                                            <h3 class="pbminfotech-box-title">
                                                                Emelia Ari
                                                            </h3>
                                                            <div class="pbminfotech-testimonial-detail">
                                                                Co Founder
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial End -->
            <!-- Blog Start -->
            <!-- <section class="section-lg">
          <div class="container">
            <div class="row g-0">
              <div class="col-xl-5 col-md-12 p-0">
                <div class="pbmit-heading-subheading-style-6">
                  <h4 class="pbmit-subtitle">LATEST NEWS</h4>
                  <h2 class="pbmit-title">
                    What's new?<br />
                    My Blog And News.
                  </h2>
                </div>
                <a
                  href="blog-grid-view.html"
                  class="pbmit-btn pbmit-btn-hover-secondary"
                  >View All</a
                >
              </div>
              <div class="col-xl-7 col-md-12 p-0">
                <article class="pbmit-blog-style-5 col-md-12">
                  <div class="post-item">
                    <div class="pbminfotech-box-content">
                      <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper">
                          <span class="pbmit-post-date pbmit-meta-line"
                            >May 17</span
                          >
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                          <a href="#" rel="category tag">Broadband</a>
                        </span>
                      </div>
                      <div class="pbmit-content-wrapper">
                        <h3 class="pbmit-post-title">
                          <a href="blog-single-details-two.html"
                            >Easy ways to implement wellbeing programs</a
                          >
                        </h3>
                      </div>
                      <div class="pbmit-read-more-link">
                        <a href="blog-single-details-two.html"
                          ><span class="pbmit-arrow"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="pbmit-blog-style-5 col-md-12">
                  <div class="post-item">
                    <div class="pbminfotech-box-content">
                      <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper">
                          <span class="pbmit-post-date pbmit-meta-line"
                            >Apr 25</span
                          >
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                          <a href="#" rel="category tag">Internet</a>
                        </span>
                      </div>
                      <div class="pbmit-content-wrapper">
                        <h3 class="pbmit-post-title">
                          <a href="blog-single-details-two.html"
                            >Things Can Help Any coworking Flourish Again</a
                          >
                        </h3>
                      </div>
                      <div class="pbmit-read-more-link">
                        <a href="blog-single-details-two.html"
                          ><span class="pbmit-arrow"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="pbmit-blog-style-5 col-md-12">
                  <div class="post-item">
                    <div class="pbminfotech-box-content">
                      <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper">
                          <span class="pbmit-post-date pbmit-meta-line"
                            >Apr 08</span
                          >
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                          <a href="#" rel="category tag">Mobile</a>
                        </span>
                      </div>
                      <div class="pbmit-content-wrapper">
                        <h3 class="pbmit-post-title">
                          <a href="blog-single-details-two.html"
                            >Five Ways Elevate Your Employees Workplace</a
                          >
                        </h3>
                      </div>
                      <div class="pbmit-read-more-link">
                        <a href="blog-single-details-two.html"
                          ><span class="pbmit-arrow"></span>
                        </a>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </section> -->
            <!-- Blog End -->
        </div>
        <!-- Page Content End -->

        <!-- footer -->

@endsection

</html>
