@extends('layouts.layout')

@section('title') Login @endsection
@section('description') Login and shop at our store. Have fun. @endsection
@section('keywords') shop, login, store, email @endsection

@section('content') <div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Login</h1>
    </div>
</div>


<div class="container py-5">
    <div class="row py-5">
        <form action="{{route('login.store')}}" method="POST">
            @csrf
            <div class="form-group p-2 mb-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group p-2 mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('warning'))
            <div class="alert alert-warning">
                <h3>{{ session('warning') }}</h3>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                <h3>{{ session('success') }}</h3>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-success">
                <h3>{{ session('error') }}</h3>
            </div>
        @endif
    </div>
</div>


@endsection
