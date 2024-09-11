@extends('web')
@section('title', 'Best VOIP Phone Services  | Cloud Phone System |Cloud PBX Providers| USA, CANADA')
@section('content')

    <!-- page wrapper -->
    <div class="page-wrapper">
        <!-- Header Main Area -->
  
        <!-- Header Main Area End Here -->

        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h1 class="pbmit-tbar-title">About Us</h1>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
                                <span><a title="" href="#" class="home"><span>Home</span></a></span>
                                <span class="sep"><i class="pbmit-base-icon-angle-double-right"></i></span>
                                <span><span class="post-root post post-post current-item">About Us</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->
        <!-- Page Content -->
        <div class="page-content">
            <!-- About Us Start -->
            <section class="section-lg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="about-us-section-bg">
                                <div class="about-us-section-wrap">
                                    Become more productive with our services.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="about-us-section-home">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-subtitle-white">WHY CHOOSE US</h4>
                                    <h2 class="pbmit-title">About us</h2>
                                </div>
                                <div>
                                    Ringless Pro is crafted to enhance client connections
                                    efficiently. We believe in leveraging technology and
                                    strategic messaging to elevate sales, service, and
                                    relationships effortlessly.
                                    <br /><br />
                                    Our solutions are automated, enabling seamless message
                                    delivery to extensive contact lists with a simple click.
                                    Whether you're nurturing a new list with ringless voicemail,
                                    maintaining client communication through SMS drip marketing,
                                    handling incoming calls with IVR, or integrating visually
                                    appealing direct mail into your marketing strategy, Ringless Pro
                                    provides comprehensive assistance.
                                </div>
                                <div class="pbmit-list-style-1">
                                    <ul class="icon-list-items">
                                        <li class="icon-list-item">
                                            <span class="icon-list-text">Ringless Voicemail</span>
                                        </li>
                                        <li class="icon-list-item">
                                            <span class="icon-list-text">IVR Systems</span>
                                        </li>
                                        <li class="icon-list-item">
                                            <span class="icon-list-text">Direct Mail</span>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{url('contact-us')}}" class="pbmit-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us End -->
            <!-- Team Start -->
            <section class="section-lg pbmit-bg-color-light">
                <div class="container">
                    <div class="pbmit-heading-subheading text-center">
                        <h4 class="pbmit-subtitle-white">How to use</h4>
                        <h2 class="pbmit-title">Ringless Pro Is Simple To Use</h2>
                        <p>
                            Ringless Pro Is Simple To Use Call directly to a voicemail system
                            and send thousands of ringless voicemail drop messages directly
                            to your contacts in just minutes. Reach mobile phones and
                            landline phones in the United States and Canada with voicemail
                            messaging.
                        </p>
                    </div>
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
            <!-- Team End -->
            <!-- Progressbar Start -->
            <section class="section-lg">
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
                            <a href="{{url('contact-us')}}" class="pbmit-btn mt-3">Contact us</a>
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
        </div>
        <!-- Page Content End -->

@endsection