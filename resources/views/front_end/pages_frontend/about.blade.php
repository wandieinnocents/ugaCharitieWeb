@extends('front_end.layouts.layout_master_frontend')

@section('title')

@stop

@section('content')

    <!-- ABOUT US CONTENT START -->


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    {{-- WHY SHOULD BE TRUSTED --}}

    <section class="donor-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Why we should be trusted ?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="donor-item">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>Committed Team</h3>
                        <p>We have a commited team ready to serve the community.</p>
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

    {{-- END OF WHY SHOULD BE TRUSTED --}}

    {{-- MISSION VISION AND CORE VALUES --}}
    <section class="mission-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="">
                        <img src="assets/frontendassets/assets/img/mission2.png" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mission-tab">
                        <span>
                            <i class="flaticon-target"></i>
                            Our Mission
                        </span>
                        <h2>Concern about Our Mission</h2>
                        <div class="tab mission-list-tab">
                            <ul class="tabs">
                                <li>
                                    <a href="#">
                                        Our Mission
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Our Vision
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Our Goal
                                    </a>
                                </li>
                            </ul>
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <p>Magna hpsum rolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ex ea </p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, soluta,
                                        aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem cumque
                                        excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?</p>
                                    <a class="default-btn" href="#">
                                        Our Mission
                                        <span></span>
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                                <div class="tabs_item">
                                    <p>Magna hpsum rolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ex ea </p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, soluta,
                                        aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem cumque
                                        excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?</p>
                                    <a class="default-btn" href="#">
                                        Our Mission
                                        <span></span>
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                                <div class="tabs_item">
                                    <p>Magna hpsum rolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ex ea </p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, soluta,
                                        aspernatur dolorum sequi quisquam ullam in pariatur nihil dolorem cumque
                                        excepturi totam. Qui excepturi quasi cumque placeat fuga. Ea, eius?</p>
                                    <a class="default-btn" href="#">
                                        Our Mission
                                        <span></span>
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END OF MISSION VISION AND CORE VALUES --}}

    {{-- OUR STORY SECTION --}}
    <section class="about-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-item">
                        <span>
                            <i class="flaticon-care-about-plants"></i>
                            Get to Know
                        </span>
                        <h3>OUR STORY</h3>

                        <p>When heavy rains and flooding hit and destroyed our home in 2016. It was a terrible tragedy to
                            me, my family and neighbours. This made life very unstable and difficult to leave with in.
                            One night, we were sleeping and i heard someone screaming and shouting out for help at around
                            2am. When i got out, i found this single mother crying loud and asking for help because her 2
                            months aged daughter had passed away while she was asleep only for her to notice the child was
                            actually in trouble when it was too late, the floods had taken over the whole room. i. We tried
                            everything possible to save the 2 months aged baby amidst the darkness and large sums of dirty
                            water around us but it was too late because the floods had claimed her life.
                            We shouted for help in pain and tears but no one came to our rescue that night.
                            Later on in the morning, with everyone awake and shocked of the sad news about the baby’s death,
                            we had to find a way to put the 2 months aged baby’s soul to rest in peace.
                            After the deep and sad burial that morning, we rushed back home and found the house holds still
                            flooded so i begged my friend to help me shelter my family for a couple of days as the water and
                            property in our house gets to dry up. My friend wasnt really doing well at the time but he felt
                            sympathetic for me and accepted to shelter my family.

                            After that incidence, life was rather terrible and unbearable. So i decided to seek for help
                            from different corners of the country. I reached out to small companies but there wasnt really
                            much of hope from them.
                        </p>
                        <div class="about-btn">
                            <a href="#" class="default-btn">
                                Talk to Us
                                <i class="flaticon-right"></i>
                                <span></span>
                            </a>
                            <a class="optional-btn" href="/about">
                                Donate
                                <i class="flaticon-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image about-one-img">
                        <img src="assets/frontendassets/assets/img/about/ugacharitie3.jpg" class="shadow" alt="image">
                        <img src="assets/frontendassets/assets/img/about/ugone2.jpg" class="shadow" alt="image">



                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- END OF OUR STORY SECTION --}}


    {{-- TESTIMONIALS --}}
    {{-- <section class="testimonials-section pb-100">
        <div class="container">
            <div class="section-title">
                <span>
                    <i class="flaticon-testimonial"></i>
                    Testimonials
                </span>
                <h2>Don’t Believe Us? See review</h2>
            </div>
            <div class="feedback-slider owl-carousel owl-theme">
                <div class="feedback-item">
                    <div class="content">
                        <h3>It’s just amazed us to be with you”</h3>
                        <p>Every works inton sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            et dolore magna aliqua. Ut enim ad will not be does.</p>
                        <div class="info">
                            <img src="assets/frontendassets/assets/img/client/1.jpg" alt="image">
                            <h4>Morgan Ando</h4>
                            <span>Ustino Charity Canada</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="content">
                        <h3>Precious Journey with you”</h3>
                        <p>Every works inton sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            et dolore magna aliqua. Ut enim ad will not be does.</p>
                        <div class="info">
                            <img src="assets/frontendassets/assets/img/client/2.jpg" alt="image">
                            <h4>Juhan Luis</h4>
                            <span>Charity Bingo UK</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="content">
                        <h3>It’s just amazed us to be with you”</h3>
                        <p>Every works inton sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            et dolore magna aliqua. Ut enim ad will not be does.</p>
                        <div class="info">
                            <img src="assets/frontendassets/assets/img/client/1.jpg" alt="image">
                            <h4>Morgan Ando</h4>
                            <span>Ustino Charity Canada</span>
                        </div>
                    </div>
                </div>
                <div class="feedback-item">
                    <div class="content">
                        <h3>Precious Journey with you”</h3>
                        <p>Every works inton sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            et dolore magna aliqua. Ut enim ad will not be does.</p>
                        <div class="info">
                            <img src="assets/frontendassets/assets/img/client/2.jpg" alt="image">
                            <h4>Juhan Luis</h4>
                            <span>Charity Bingo UK</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- END OF TESTIMONIALS --}}



    <!-- ABOUT US CONTENT END -->
@stop
