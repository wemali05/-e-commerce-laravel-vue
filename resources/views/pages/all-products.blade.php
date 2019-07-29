@extends('layouts.app')

@section('content')
    <all-products-component :products="{{ json_encode($products) }}" :categories="{{ json_encode($categories) }}"></all-products-component>
@endsection
