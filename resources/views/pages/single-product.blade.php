@extends('layouts.app')

@section('content')
    <single-product-component :product="{{ json_encode($product) }}"></single-product-component>
@endsection

