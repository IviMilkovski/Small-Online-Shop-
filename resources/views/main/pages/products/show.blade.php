@extends('layouts.layout')

@section('title') Shop @endsection
@section('description') Shop and find the perfect clothes for you. @endsection
@section('keywords') shop, buy, get, clothes @endsection

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{asset('assets/img/'. $product->image)}}" alt="{{$product->name}}" id="product-detail">
                    </div>
                    <div class="row">
                    </div>
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{$product->name}}</h1>
                            @foreach($product->price as $p)
                                <p class="h3 py-2">${{$p->price}}</p>
                            @endforeach
                            <h6>Description:</h6>
                            <p>{{$product->description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Color :</h6>
                                </li>
                                @foreach($colors as $color)
                                    @if(in_array($color->id, $product->colors()->pluck('color_id')->toArray()))
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$color->name}}</strong></p>
                                </li>
                                    @endif
                                @endforeach
                            </ul>


                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            @foreach($sizes as $size)
                                                @if(in_array($size->id, $product->sizes()->pluck('size_id')->toArray()))
                                                <li class="list-inline-item"><span class="btn btn-success btn-size">{{$size->name}}</span></li>
                                                @else
                                                    <li>{{$size->name}} Not Availlable</li>
                                            @endif
                                                    @endforeach
                                        </ul>
                                    </div>

                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="button" id="add-cart-btn" class="btn btn-success btn-lg" name="submit" data-product-id="{{$product->id}}"

                                                value="addtocard">Add To Cart</button>
                                        <br>
                                        <div class="container"><h4 class="successcart"></h4></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/js/product.js') }}"></script>
@endsection
