
        @extends('zfood.layouts.app')

        @section('title','feature');
        @section('main')

<div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Features</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-header">
                            <p>Why Choose Us</p>
                            <h2>Our Key Features</h2>
                        </div>
                        <div class="feature-text">
                            <div class="feature-img">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="{{asset('zfood/img/feature-1.jpg')}}" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('zfood/img/feature-2.jpg')}}" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('zfood/img/feature-3.jpg')}}" alt="Image">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('zfood/img/feature-4.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <p>
                                Bite into any of our burgers and taste the difference. Our commitment to creating the best possible food for our discerning guests affects the price, and the higher cost is a direct reflection of that promise.

​
                            </p>
                            <a class="btn custom-btn" href="">Book A Table</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-cooking"></i>
                                    <h3>World’s best Chef</h3>
                                    <p>
                                        Our burgers, fries and shakes are made with the finest,
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-vegetable"></i>
                                    <h3>Natural ingredients</h3>
                                    <p>
                                        freshest ingredients available.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-medal"></i>
                                    <h3>Best quality products</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-meat"></i>
                                    <h3>Fresh vegetables & Meet</h3>
                                    <p>
                                        Sourcing fresh, quality produce, meat, dairy and buns from local partners are the ingredients to making the perfect burger
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-courier"></i>
                                    <h3>Fastest door delivery</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item">
                                    <i class="flaticon-fruits-and-vegetables"></i>
                                    <h3>Ground beef & Low fat</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


       @endsection
