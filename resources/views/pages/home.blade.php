@extends('layouts.default')

@section('content')
    <section id="home" class="hero-area img-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Professional Business <span>Conference 2025</span> </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.
                        </p>
                        <a href="javascript:void(0)" class="main-btn btn-hover">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img">
                        <img src="assets/img/hero/hero-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="upcoming-section pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h1>Know More Upcoming Conference</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-counter">
                        <div class="map-img">
                            <img src="assets/img/upcoming/map-img.svg" alt="">
                        </div>
                        <i class="lni lni-mic"></i>
                        <h4 id="secondo1" class="countup" cup-end="120" cup-append=" ">120</h4>
                        <span>Great Speakers</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-counter">
                        <div class="map-img">
                            <img src="assets/img/upcoming/map-img.svg" alt="">
                        </div>
                        <i class="lni lni-ticket-alt"></i>
                        <h4 id="secondo2" class="countup" cup-end="320" cup-append="k">320</h4>
                        <span>Total Seats</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-counter">
                        <div class="map-img">
                            <img src="assets/img/upcoming/map-img.svg" alt="">
                        </div>
                        <i class="lni lni-microphone"></i>
                        <h4 id="secondo3" class="countup" cup-end="20" cup-append="+">20</h4>
                        <span>Total Topics</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="countdown-section">
        <div class="countdown-img">
            <img src="assets/img/countdown/countdown-img.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="section-title">
                        <h1>Welcome to the World Largest Conference</h1>
                        <p>welcome to eventdia, start with a greeting to your audience that's appropriate to the situation.
                            Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua
                            enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                            consequat.</p>
                        <div class="countdown">
                            <ul id="countdown-example">
                                <li><span id="days">0</span> Days</li>
                                <li><span id="hours">0</span> Hours</li>
                                <li><span id="minutes">0</span> Minutes</li>
                                <li><span id="seconds">0</span> Seconds</li>
                            </ul>
                        </div>
                        <a href="javascript:void(0)" class="main-btn btn-hover">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="event" class="schedule-section pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h1>Upcoming Conference Schedule</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav schedule-tabs nav-tabs border-0" id="myTab" role="tablist">
                        <li class="schedule-nav-item" role="presentation">
                            <a class="schedule-nav-link active" id="day1-tab" data-bs-toggle="tab" href="#day1" role="tab"
                                aria-controls="day1" aria-selected="true"><span>1st Day</span> 29 December , 2025</a>
                        </li>
                        <li class="schedule-nav-item" role="presentation">
                            <a class="schedule-nav-link" id="day2-tab" data-bs-toggle="tab" href="#day2" role="tab"
                                aria-controls="day2" aria-selected="false"><span>2nd Day</span> 29 December , 2025</a>
                        </li>
                        <li class="schedule-nav-item" role="presentation">
                            <a class="schedule-nav-link" id="day3-tab" data-bs-toggle="tab" href="#day3" role="tab"
                                aria-controls="day3" aria-selected="false"><span>3rd Day</span> 29 December , 2025</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content schedule-tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="day1" role="tabpanel" aria-labelledby="day1-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-1.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Michel Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-2.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>David Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-3.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Adam Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-4.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>John Doe</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-5.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Anne Doe</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-6.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Donal Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="day2" role="tabpanel" aria-labelledby="day2-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-1.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Michel Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-2.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>David Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-3.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Adam Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-4.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>John Doe</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-5.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Anne Doe</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-6.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Donal Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="day3" role="tabpanel" aria-labelledby="day3-tab">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-1.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Michel Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-2.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>David Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-3.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Adam Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-4.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>John Doe</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-5.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Anne Doe</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="schedule-item">
                                <div class="image">
                                    <img src="assets/img/schedule/schedule-6.png" alt="">
                                </div>
                                <div class="content">
                                    <h3>Creating New Business</h3>
                                    <div class="meta">
                                        <h4>Donal Smith</h4>
                                        <span>08:20 Am - 10:30Am</span>
                                    </div>
                                    <p>tempor invidunt ut labore esdryt dolore magna aliquyam erat, sed diam voluptua. At
                                        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section img-bg mt-120 pt-110 pb-200">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-80">
                        <h1>Watch our Conference <br> video</h1>
                    </div>
                    <div class="video-btn-wrapper text-center">
                        <a href="#" class="video-btn glightbox"><i class="lni lni-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h1>Buy Your Ticket Just Now</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-pricing">
                        <h3>Basic</h3>
                        <span class="price">$120.99</span>
                        <ul class="list">
                            <li>Regular Seating</li>
                            <li>Comfortable Seat</li>
                            <li>Coffee Break</li>
                            <li>Photos Allowed</li>
                            <li>One Workshop</li>
                            <li>Certificate</li>
                        </ul>
                        <a href="javascript:void(0)" class="main-btn btn-hover border-btn">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-pricing">
                        <span class="best-offer">Best Offer</span>
                        <h3>Standard</h3>
                        <span class="price">$150.99</span>
                        <ul class="list">
                            <li>Regular Seating</li>
                            <li>Comfortable Seat</li>
                            <li>Coffee Break</li>
                            <li>Photos Allowed</li>
                            <li>One Workshop</li>
                            <li>Certificate</li>
                        </ul>
                        <a href="javascript:void(0)" class="main-btn btn-hover">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-pricing">
                        <h3>Premium</h3>
                        <span class="price">$220.99</span>
                        <ul class="list">
                            <li>Regular Seating</li>
                            <li>Comfortable Seat</li>
                            <li>Coffee Break</li>
                            <li>Photos Allowed</li>
                            <li>One Workshop</li>
                            <li>Certificate</li>
                        </ul>
                        <a href="javascript:void(0)" class="main-btn btn-hover border-btn">Buy Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="speaker-section pt-120 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h1>See Our Best Conference Speakers</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna,</p>
                    </div>
                </div>
            </div>
            <div class="row speaker-row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-speaker">
                        <div class="image">
                            <img src="assets/img/speaker/speaker-1.jpg" alt="">
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-twitter-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-instagram-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Michlelas Sasor</h3>
                            <span>Motive Speaker</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-speaker middle">
                        <div class="image">
                            <img src="assets/img/speaker/speaker-2.jpg" alt="">
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-twitter-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-instagram-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Mack Angle</h3>
                            <span>Adviser</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-speaker">
                        <div class="image">
                            <img src="assets/img/speaker/speaker-3.jpg" alt="">
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-twitter-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-instagram-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h3>John Doe</h3>
                            <span>CEO Abc Company</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-speaker">
                        <div class="image">
                            <img src="assets/img/speaker/speaker-4.jpg" alt="">
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-twitter-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-instagram-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Anne Doe</h3>
                            <span>Businessman</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-speaker middle">
                        <div class="image">
                            <img src="assets/img/speaker/speaker-5.jpg" alt="">
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-twitter-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-instagram-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Ena Shah</h3>
                            <span>Self Employed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-speaker">
                        <div class="image">
                            <img src="assets/img/speaker/speaker-6.jpg" alt="">
                            <div class="socials">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-facebook-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-twitter-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-instagram-filled"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="lni lni-linkedin-original"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h3>David Smith</h3>
                            <span>Professor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section img-bg pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title mb-60 text-center">
                        <h1>Check What’s Our Client Say About Us</h1>
                    </div>
                </div>
            </div>
            <div class="testimonial-active-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9 col-md-10">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <div class="map-bg">
                                    <img src="assets/img/testimonial/map-bg.svg" alt="">
                                </div>
                                <div class="quote">
                                    <i class="lni lni-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata .</p>
                                </div>
                                <div class="info">
                                    <h4>Nelson Mundsh</h4>
                                    <span>Businessman</span>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="map-bg">
                                    <img src="assets/img/testimonial/map-bg.svg" alt="">
                                </div>
                                <div class="quote">
                                    <i class="lni lni-quotation"></i>
                                </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata .</p>
                                </div>
                                <div class="info">
                                    <h4>Nelson Mundsh</h4>
                                    <span>Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="blog-section pt-150 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title mb-60 text-center">
                        <h1>Our Latest Blog Post</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna,</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="single-blog blog-left">
                        <div class="image">
                            <a href="javascript:void(0)">
                                <img src="assets/img/blog/blog-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <span class="author">Posted by: <a href="javascript:void(0)">Jhon Smith</a> </span>
                                <span>Feb 2, 2025</span>
                            </div>
                            <h3>
                                <a href="javascript:void(0)">Lorem ipsum dolor sit aconse tetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor.</a>
                            </h3>
                            <a href="javascript:void(0)">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="single-blog blog-left">
                        <div class="image">
                            <a href="javascript:void(0)">
                                <img src="assets/img/blog/blog-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <span class="author">Posted by: <a href="javascript:void(0)">Jhon Smith</a> </span>
                                <span>Feb 2, 2025</span>
                            </div>
                            <h3>
                                <a href="javascript:void(0)">Lorem ipsum dolor sit aconse tetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor.</a>
                            </h3>
                            <a href="javascript:void(0)">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="single-blog blog-left">
                        <div class="image">
                            <a href="javascript:void(0)">
                                <img src="assets/img/blog/blog-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <span class="author">Posted by: <a href="javascript:void(0)">Jhon Smith</a> </span>
                                <span>Feb 2, 2025</span>
                            </div>
                            <h3>
                                <a href="javascript:void(0)">Lorem ipsum dolor sit aconse tetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor.</a>
                            </h3>
                            <a href="javascript:void(0)">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-title text-center mb-60">
                        <h1>Get In Touch</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <form action="assets/php/contact.php" method="POST" id="contact-form" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" class="form-input" id="name" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" class="form-input" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" class="form-input" id="number" name="number"
                                            placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" class="form-input" id="subject" name="subject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-form">
                                        <textarea name="message" class="form-input" id="message" rows="5"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="submit-btn">
                                        <button class="main-btn btn-hover" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-right">
                        <div class="single-item">
                            <div class="icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="content">
                                <p>09483536457868</p>
                                <p>1308745622643</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="content">
                                <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="94fcf1f8f8fbd4f3f9f5fdf8baf7fbf9">[email&#160;protected]</a></p>
                                <p>www.yourwebsite.com</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="content">
                                <p>Porobi 60/1, Hospital Road, Hasannagar, Sunamganj</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection