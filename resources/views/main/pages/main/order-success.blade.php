@extends('layouts.layout')

@section('title') Cart @endsection
@section('description') See your cart and edit it or proceed to order @endsection
@section('keywords') shop, buy, get, cart @endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <h1>Order made!</h1>
    <h2>Thank you for ordering from us.</h2>
@endsection
