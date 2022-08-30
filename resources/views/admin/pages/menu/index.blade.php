@extends('layouts.admin')

@section('title')
    Admin | Lil'Shop | Menu
@endsection

@section('description')
    Online shop - Information about navigation menu links
@endsection

@section('keywords')
    admin panel, navigation manu links
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
               <table class="table">
                   <thead>
                   <tr>
                       <th scope="col">Id</th>
                       <th scope="col">Name</th>
                       <th scope="col">Url</th>
                       <th scope="col">Order</th>
                       <th scope="col">Edit</th>
                       <th scope="col">Delete</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($menus as $m)
                   <tr>
                       <th scope="row">{{$m->id}}</th>
                       <td>{{$m->name}}</td>
                       <td>{{$m->url}}</td>
                       <td>{{$m->order}}</td>
                       <td><a href="{{ route('admin.menu.edit',['id' => $m->id ]) }}" class="btnEditMenuLink" data-id="{{ $m->id }}">Edit</a></td>
                       <td><button href="#" class="btn btn_delete" data-id="{{ $m->id }}">Delete</button></td>
                   </tr>
                   @endforeach
                   </tbody>
               </table>
                <br>
            </div>
            <div>
                <h2>Add New</h2>
                <button href="#" class="btn btn-info btn_create" data-id="{{ $m->id }}">Create New Menu Item</button>
            </div>
        </div>
    </div>

    @endsection
