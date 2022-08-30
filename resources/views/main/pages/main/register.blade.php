@extends('layouts.layout')

@section('title') Register @endsection
@section('description') Register and buy some beautiful clothes. @endsection
@section('keywords') shop, register, buy, clothes @endsection

@section('content')
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Register</h1>
        </div>
    </div>


    <div class="container py-5">
        <div class="row py-5">
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        <div class="form-group p-2 mb-3">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstnameHelp" placeholder="Enter First Name">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp" placeholder="Enter Last Name">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">

        </div>
        <div class="form-group p-2 mb-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <small id="emailHelp" class="form-text text-muted">Please make sure thath your password is made up of 8 characters and thath it has One big Leter, one small, a number and a character.</small>
            <small id="emailHelp" class="form-text text-muted">Example:Lil'Shop1</small>
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
            @if(session()->has('success'))
                <div class="alert alert-success">
                    <h3>{{session('success') }}</h3>
                </div>
            @endif
            @if (session()->has('warning'))
                <div class="alert alert-warning">
                    <h3>{{ session('warning') }}</h3>
                </div>
            @endif
        </div>
    </div>

@endsection
