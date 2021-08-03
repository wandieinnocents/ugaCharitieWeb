@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop

@section('content')


    <!-- START OF CONTENT -->


    <!-- slider -->
    @include('front_end.includes_frontend.slider')
    <!-- end of slider -->


    {{-- WHAT WE DO --}}
    <section class="solve-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>
                    <i class="flaticon-to-do-list"></i>
                    What We Do
                </span>
                <h2>A mission to solve a problem</h2>
                <p>We are #UgaCharitie African foundation with legimate interests in supporting the needy in  Africa</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/frontendassets/assets/img/solve/mother.png"  width="20%" alt="image">
                        </div>
                        <h3>Supporting Mothers</h3>
                        
                        <p>We support mothers who have been abandoned by their hustands due to poverty crisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/frontendassets/assets/img/solve/graduated.png" width="20%" alt="image">
                        </div>
                        <h3>Educational Support </h3>
                        
                        <p>we provide Educational support to disadvantaged children in our communities.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/frontendassets/assets/img/solve/dish.png" width="20%" alt="image">
                        </div>
                        <h3>Food Supplies</h3>
                        <p>We provide food to the needy , who cannot afford go get even a single meal a day.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/frontendassets/assets/img/solve/money.png" width="20%" alt="image">
                        </div>
                        <h3>Financial Support</h3>
                        <p>We provide finacial assistance to individuals with high levels of poverty in Africa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END OF WHAT WE DO --}}


    {{-- ABOUT SECTION --}}
    <section class="about-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-item">
                        <span>
                            <i class="flaticon-care-about-plants"></i>
                            Get to Know
                        </span>
                        <h3>WHO WE ARE</h3>
                        
                        <p>We are #UgaCharitie African foundation with legimate interests in supporting the needy families
                            with basic needs, mothers from which their husbands abandoned them due to poverty, supporting
                            orphans with educational support, and finacial assistance to individuals with high levels of
                            poverty in Africa-Uganda since 2016 upto date. We are based in Kampala Disctrict and have lived
                            to support and enhance the lives of the needy families who have suffered a tradegy of severe
                            natural disasters and increasing levels of poverty in Africa-Uganda. </p>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                Donate Now
                                <i class="flaticon-right"></i>
                                <span></span>
                            </a>
                            <a class="optional-btn" href="/about">
                                More about us
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image about-one-img">
                        <img src="assets/frontendassets/assets/img/about/ugacharitie.jpg" class="shadow" alt="image">
                        <img src="assets/frontendassets/assets/img/about/ugone.jpg" class="shadow" alt="image">



                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END OF ABOUT SECTON --}}





    {{-- WHY SHOULD BE TRUSTED  --}}

    <section class="donor-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Why we should be trusted ?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="donor-item">
                        <div class="icon">
                            <i class="flaticon-support" ></i>
                        </div>
                        <h3  >Committed Team</h3>
                        <p >We have a commited team ready to serve the community.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="donor-item">
                        <div class="icon">
                            <i class="flaticon-confirmation"></i>
                        </div>
                        <h3> Reliable</h3>
                        <p>We can be trusted to deliver more than expected.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="donor-item">
                        <div class="icon">
                            <i class="flaticon-enjoy"></i>
                        </div>
                        <h3>Already Operational</h3>
                        <p>We already started on operations in communities. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>

    {{-- END OF WHY SHOULD BE TRUSTED  --}}


    {{-- COUNTER SECTION --}}

    <section class="fun-facts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Beneficiaries</p>
                        <h3>
                            <span class="sign-icon dolor"></span>
                            <span class="odometer" data-count="500">00</span>
                            <span class="sign-icon">M</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Happy Donators</p>
                        <h3>
                            <span class="odometer" data-count="10">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Volunteer</p>
                        <h3>
                            <span class="odometer" data-count="30   ">00</span>
                            <span class="sign-icon">+</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Donated Poor</p>
                        <h3>
                            <span class="odometer" data-count="20">00</span>
                            <span class="sign-icon">K</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- END OF COUNTER SECTION --}}




    {{-- <section class="donate-section ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Want you know How Can Help?</h2>
                <p>Toiken ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntlabore et
                    dolore magna aliqua. Ut enim ad minim.</p>
                <a href="#" class="donate-btn">
                    Donate Now
                    <i class="flaticon-right"></i>
                </a>
            </div>
        </div>
        <div class="default-shape">
            <img src="assets/frontendassets/assets/img/donate/1.png" alt="image">
            <img src="assets/frontendassets/assets/img/donate/2.png" alt="image">
        </div>
    </section> --}}


    <br>

    <!-- END OF CONTENT -->


@stop
