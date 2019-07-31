@extends('layouts.app')

@section('content')
<confirm-component :user="{{ json_encode($user) }}" ></confirm-component>
@endsection















