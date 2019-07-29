@extends('layouts.app')

@section('content')
    <categories-products-component :categories="{{ json_encode($categories) }}"></categories-products-component>
@endsection
