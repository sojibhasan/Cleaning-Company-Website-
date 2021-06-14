@extends('layouts.frontend.app')

@section('FrontendContent')
    
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Pricing <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Pricing</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading mb-3">Price &amp; Plans</span>
                <h2>Choose Your Perfect Plans</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa flaticon-sprayer"></span></div>
                        <h4 class="heading-2">Starter</h4>
                        <span class="price"><sup>$</sup> <span class="number">49</span></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                            <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                        </ul>

                        <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7 active">
                    <div class="text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa flaticon-vacuum-cleaner"></span></div>
                        <h4 class="heading-2">Standard</h4>
                        <span class="price"><sup>$</sup> <span class="number">79</span></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                            <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                        </ul>

                        <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa flaticon-tap"></span></div>
                        <h4 class="heading-2">Premium</h4>
                        <span class="price"><sup>$</sup> <span class="number">109</span></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                            <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                        </ul>

                        <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span
                                class="fa flaticon-cleaning"></span></div>
                        <h4 class="heading-2">Platinum</h4>
                        <span class="price"><sup>$</sup> <span class="number">159</span></span>

                        <ul class="pricing-text mb-5">
                            <li><span class="fa fa-check mr-2"></span>Bedrooms cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Vacuuming</li>
                            <li><span class="fa fa-check mr-2"></span>Bathroom cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Mirrow cleaning</li>
                            <li><span class="fa fa-check mr-2"></span>Livingroom cleaning</li>
                        </ul>

                        <a href="#" class="btn btn-primary px-4 py-3">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection