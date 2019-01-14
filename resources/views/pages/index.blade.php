@extends('layouts.app')

@section('title')
    Home
@endsection


@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('/storage/slider_images/ales-nesetril-734016-unsplash.jpg')}}" class="d-block w-100 h-50" alt="ScrapeX">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ScrapeX</h5>
                    <p>A perfect web scrape tool designed just for your needs!</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{url('/storage/slider_images/anas-alshanti-169265-unsplash.jpg')}}" class="d-block w-100 h-25 alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>See Plans</h5>
                    <p>You can make the most of our paid memberships!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('/storage/slider_images/fabian-irsara-92113-unsplash.jpg')}}" class="d-block w-100 h-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Which websites?</h5>
                    <p>Amazon, Aliexpres ...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection