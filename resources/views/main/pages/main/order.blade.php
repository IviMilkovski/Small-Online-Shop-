@extends('layouts.layout')

    @section('title') Order @endsection
@section('description') Order your clothes @endsection
@section('keywords') shop, buy, get, order @endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Order now</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-start">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Count</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < count($products); $i++)
                    <tr>
                        <th scope="row">{{ $i + 1 }}</th>
                        <td>{{ $products[$i]->name }}</td>
                        <td id="price-{{ $i + 1 }}">
                            @foreach($prices as $price)
                                @if($price->product_id == $products[$i]->id)
                                    {{$price->price}}
                                @endif

                            @endforeach
                        </td>
                        <td>{{ $products[$i]->getOriginal('pivot_count')}}</td>
                        <td id="{{ $i + 1 }}-row-total">
                            @foreach($prices as $price)
                                @if($price->product_id == $products[$i]->id)
                                    {{ $price->price * $products[$i]->getOriginal('pivot_count')}}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endfor
                <tr>
                    <td></td>
                    <th>Sum total:</th>
                    <td></td>
                    <td></td>
                    <td>
                        {{ $sum }}
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-12 mt-5">
            <form action="{{route('order_post')}}" method="POST">
                @csrf
                <div class="form-group mt-3">
                    <label for="street">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Enter country name">
                </div>
                @error('country')
                <div class="text-danger">
                    {{$message}}
                </div>

                @enderror
                <div class="form-group mt-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Enter city">
                </div>
                @error('city')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group mt-3">
                    <label for="postal_code">Postal code</label>
                    <input type="number" min="0" name="postal_code" class="form-control" placeholder="Enter postal code">
                </div>
                @error('postal_code')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group mt-3">
                    <label for="phone_number">Phone number</label>
                    <input type="number" min="0" name="phone_number" class="form-control" placeholder="Enter phone number">
                </div>
                @error('phone_number')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror

                <button type="submit" class="btn btn-primary mt-5">Submit</button>

            </form>
        </div>
    </div>
@endsection
