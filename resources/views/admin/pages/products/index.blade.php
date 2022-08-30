@extends('layouts.admin')

@section('title')
    Admin | Lil'Shop | Product
@endsection

@section('description')
    Online shop - Information about products
@endsection

@section('keywords')
    admin panel, product, category
@endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Products</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
{{--                        <th scope="col">Color</th>--}}
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $p)
                        <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->name}}</td>
                            <td><img src="{{asset('assets/img/'. $p->image)}}" height="50px"></td>
                            <td>{{$p->description}}</td>
                            @foreach($p->prices as $pr)
                            <td>{{$pr->price}}</td>
                            @endforeach
                            <td><a href="{{ route('product_edit_get',['id' => $p->id]) }}" class="btnEditMenuLink" name="edit{{$p->id}}" data-id="{{ $p->id }}">Edit</a></td>
                            <td><button href="#" class="btn btn_delete" data-id="{{ $p->id }}">Delete</button></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
            </div>
            <div>
                <h2>Add New</h2>
                <a href="{{route('product_create_get')}}" class="btn btn-info btn_create" >Create New Product</a>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('assets/js/main.js')}}"></script>
@endsection
