@extends('templates.web.site')

@section('content-view')

<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{ asset('assets/web/images/featured-item-01.png')}}" alt=""></i>
                            </div>
                            <h5 class="features-title">Modern Strategy</h5>
                            <p>Customize anything in this template to fit your website needs</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{ asset('assets/web/images/featured-item-01.png')}}" alt=""></i>
                            </div>
                            <h5 class="features-title">Best Relationship</h5>
                            <p>Contact us immediately if you have a question in mind</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{ asset('assets/web/images/featured-item-01.png')}}" alt=""></i>
                            </div>
                            <h5 class="features-title">Ultimate Marketing</h5>
                            <p>You just need to tell your friends about our free templates</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
