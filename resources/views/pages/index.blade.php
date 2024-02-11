@extends('layouts.layout')

@section('content')
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="banner_taital">Best <br> Design <br>of Furnitur</h1>
                                <p class="banner_text">It is a long established fact that a reader will bedistracted by the
                                    readable content of </p>
                                <div class="btn_main">
                                    <div class="contact_bt"><a href="#">Contact US</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1"><img src="/assets/images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="banner_taital">Best <br> Design <br>of Furnitur</h1>
                                <p class="banner_text">It is a long established fact that a reader will bedistracted by the
                                    readable content of </p>
                                <div class="btn_main">
                                    <div class="contact_bt"><a href="#">Contact US</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1"><img src="/assets/images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="banner_taital">Best <br> Design <br>of Furnitur</h1>
                                <p class="banner_text">It is a long established fact that a reader will bedistracted by the
                                    readable content of </p>
                                <div class="btn_main">
                                    <div class="contact_bt"><a href="#">Contact US</a></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image_1"><img src="/assets/images/img-1.png"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i style="font-style: initial;">01</i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i style="font-style: initial;">02</i>
            </a>
        </div>
    </div>
    <!-- banner section end -->
    
    <!-- about section start -->
        @include('sections.about')
    <!-- about section end -->

    <!--  design section start -->
        @include('sections.design')
    <!--  design section end -->

    <!--  newsletter section start -->
        @include('sections.shop')
    <!--  newsletter section end -->

    <!-- contact section start -->
        @include('sections.contact')
    <!-- contact section end -->
@endsection