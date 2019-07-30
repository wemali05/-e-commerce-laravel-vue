@extends('layouts.app')

@section('content')
@include('partials.slug')
    <categories-products-component :category="{{ json_encode($categoryProducts) }}">
        
    </categories-products-component>
@endsection
