@extends('layouts.layout')

@section('title') Cart @endsection
@section('description') See your cart and edit it or proceed to order @endsection
@section('keywords') shop, buy, get, cart @endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
@section('content')
<div class="container-fluid">
    <div class="row mt-3 d-flex justify-content-center">
        <div class="col-12">
            <h1 class="text-center">Cart</h1>
        </div>
        <div class="col-12">
            @if(isset($products) && count($products) > 0)
            <table class="table">
                <thead>
                    <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Count</th>
                <th scope="col">Total</th>
                <th scope="col">Remove</th>
                </thead>
                <tbody>
                @for($i = 0; $i < count($products); $i++)
                    <tr id="table-row-{{ $products[$i]->id }}">
                        <td>{{ $products[$i]->name }}</td>
                        <td id="price-{{ $i + 1 }}">
                        @foreach($prices as $price)
                            @if($price->product_id == $products[$i]->id)
                            {{$price->price}}
                            @endif

                        @endforeach
                            </td>
                        <td>
                            <input type="number"
                                   class="item-count"
                                   data-row-id="{{ $i + 1 }}"
                                   data-product-id="{{ $products[$i]->id }}"
                                   name=""
                                   value="{{ $products[$i]->getOriginal('pivot_count') }}"
                                   min="1"
                                   max="20">
                        </td>


                            <td id="{{ $i + 1 }}-row-total">
                                @foreach($prices as $price)
                                    @if($price->product_id == $products[$i]->id)
                                {{ $price->price * $products[$i]->getOriginal('pivot_count')}}
                                    @endif
                                @endforeach
                            </td>

                        <td><button type="button" id="delbtn-{{ $products[$i]->id }}" class="btn btn-danger del-row-btn">X</button></td>
                    </tr>
                @endfor
                </tbody>
            </table>
                <div id="cart-button" class="col-1">
                    <a href="{{route('order_get')}}" class="btn btn-success">Submit</a>
                </div>
            @else
                <p class="text-center">Your cart is empty</p>
            @endif
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection
