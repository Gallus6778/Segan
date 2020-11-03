@extends('layouts.root')

{{-- STYLE --}}
@section('style')
    {{-- <link rel="stylesheet" href="{{ asset('css/menu.css') }}"> --}}
@endsection


{{-- CONTENT OF PAGE --}}
@section('content')

{{-- CAROUSSEL --}}

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div style="height: 600px" class="carousel-item active">
            <img src="{{ asset('images/font-page.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/font-page.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/font-page.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- <!-- HOME --> --}}


{{-- <!-- NEWS --> --}}
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Latest News</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src="images/news-image1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>March 08, 2018</span>
                        <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                        <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jeremie Carlson</h5>
                                <p>CEO / Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="images/news-image2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>February 20, 2018</span>
                        <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                        <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jason Stewart</h5>
                                <p>General Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="images/news-image3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>January 27, 2018</span>
                        <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                        <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Andrio Abero</h5>
                                <p>Online Advertising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- GOOGLE MAP -->
<section id="google-map">
    <!-- How to change your own map point
        1. Go to Google Maps
        2. Click on your location point
        3. Click "Share" and choose "Embed map" tab
        4. Copy only URL and paste it within the src="" field below
-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%"
        height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

@endsection
