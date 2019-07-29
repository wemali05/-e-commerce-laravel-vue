@extends('layouts.app')

@section('content')
<checkout-product-component :product="{{ json_encode($product) }}"></checkout-product-component>
@endsection
