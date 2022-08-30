@extends('layouts.admin')

@section('title')
    Admin | Lil'Shop | Users
@endsection

@section('description')
    Online shop - Information about users and their activity
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
                <h1>Users</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id User</th>
                        <th scope="col">User First Name</th>
                        <th scope="col">User Last Namw</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joined at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td scope="col">{{$user->id}}</td>
                            <td scope="col">{{$user->firstname}}</td>
                            <td scope="col">{{$user->lastname}}</td>
                            <td scope="col">{{$user->role->role_name}}</td>
                            <td scope="col">{{$user->email}}</td>
                            <td scope="col">{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Users Activity</h1>
                <div>
                    <form method="GET">
                        <select class="form-control" id="sort" name="sort">
                            <option>Sort by date</option>
                            <option value="asc" @if(request()->sort && request()->sort == 'asc') selected @endif >Ascedint date</option>
                            <option value="desc" @if(request()->sort && request()->sort == 'desc') selected @endif >Descending Date</option>
                        </select>
                        <button class="btn-info">Sort</button>
                    </form>
                </div>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">User name</th>
                        <th scope="col">User email</th>
                        <th scope="col">Ip addrees</th>
                        <th scope="col">Date</th>
                        <th scope="col">Activity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($activities as $a)
                        <tr>
                            <td scope="col">{{$a->user->firstname}}</td>
                            <td scope="col">{{$a->user->email}}</td>
                            <td scope="col">{{$a->ip_address}}</td>
                            <td scope="col">{{$a->date}}</td>
                            <td scope="col">{{$a->activity}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
