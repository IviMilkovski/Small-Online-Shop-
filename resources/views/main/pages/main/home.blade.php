@extends('layouts.layout')

@section('title') Home @endsection
@section('description') A little self made shop for your closet essentials. @endsection
@section('keywords') shop, buy, home, clothes @endsection

@section('content')


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @foreach($sliderImages as $simg)
            <div class="carousel-item @if($loop->index == 0) active @endif">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="{{asset('./assets/img/'.$simg->image)}}" alt="{{$simg->alt}}">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-info">{{$simg->header}}</h1>
                                <h3 class="h2">{{$simg->subheader}}</h3>
                                <p>
                                    {{$simg->text}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Clothes</h1>
                <p>
                    Search for all types of clothes that you need.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($products as $p)
                @if($p->featured == 1)
            <div class="col-12 col-md-4 p-5 mt-3">
                <img src="{{asset('./assets/img/'.$p->image)}}" alt="{{$p->name}}" class="rounded-circle img-fluid border">

                <p class="text-center"><a href="{{route('products.index')}}" class="btn btn-success">Go Shop</a></p>
            </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- End Categories of The Month -->




@endsection
