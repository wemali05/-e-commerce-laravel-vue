@extends('layouts.app')

@section('content')

    <categories-products-component :category="{{ json_encode($categoryProducts) }}"></categories-products-component>
@include('partials.slug')
    <categories-products-component :category="{{ json_encode($categoryProducts) }}">

    </categories-products-component>
@endsection
