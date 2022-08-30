@extends('layouts.layout')

@section('title') Shop @endsection
@section('description') Shop and find the perfect clothes for you. @endsection
@section('keywords') shop, buy, get, clothes @endsection

@section('content')

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Filter</h1>
                <form method="GET">

                    <div class="pb-4">
                        <div class="d-flex">

                            <select class="form-control" id="sort" name="sort">
                                <option>Sort...</option>
                                <option value="asc" @if(request()->sort && request()->sort == 'asc') selected @endif >Name A to Z</option>
                                <option value="desc" @if(request()->sort && request()->sort == 'desc') selected @endif >Name Z to A</option>
                                {{--                                <option value="asc" @if(request()->sort && request()->sort == 'asc') selected @endif>Price: Low to High</option>--}}
                                {{--                                <option  value="desc" @if(request()->sort && request()->sort == 'desc') selected @endif>Price: High to Low</option>--}}
                            </select>

                        </div>
                    </div>


                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sizes
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>

                        <ul class="collapse show list-unstyled pl-3">
                            @foreach($sizes as $size)
                                <li>
                                    <input class="form-check-input" name="sizes[]" type="checkbox" value="{{$size->id}}" id="flexCheckDefaultSize"
                                    @if(request()->sizes && in_array($size->id, request()->sizes)) checked @endif/>
                                    <label class="form-check-label" for="flexCheckDefaultSize">
                                        {{$size->name}}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Colors
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            @foreach($colors as $color)
                                <li>
                                <input class="form-check-input" name="colors[]" type="checkbox" value="{{$color->id}}" id="flexCheckDefaultColor"
                                @if(request()->colors && in_array($color->id, request()->colors)) checked @endif/>
                                <label class="form-check-label" for="flexCheckDefaultColor">
                                    {{$color->name}}
                                </label>
                        </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Product Category
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            @foreach($categories as $category)
                                <li>
                                    <input class="form-check-input" name="categories[]" type="checkbox" value="{{$category->id}}" id="flexCheckDefaultCategory"
                                           @if(request()->categories && in_array($category->id, request()->categories)) checked @endif/>
                                    <label class="form-check-label" for="flexCheckDefaultCategory">
                                        {{$category->name}}
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                    <button class="btn btn-secondary w-100">Submit</button>
                </form>
            </div>

            <div class="col-lg-9">
                <div class="row">

                </div>
                <div class="row" id="products">
                    @forelse($products as $product)
                        @include('main.partials.product')
                    @empty
                        <h2>No products.</h2>
                    @endforelse
                </div>
                <div class="d-flex justify-content-center">
{{--                    <ul class="pagination pagination-lg justify-content-end">--}}
{{--                        @foreach( $products->links() as $link)--}}
{{--                        <li class="page-item">--}}

{{--                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">{{$link}}</a>--}}

{{--                        </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
                    {{$products->withQueryString()->links('pagination::bootstrap-4')}}
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->


@endsection
