@extends('layouts.app')

@section('content')
<user-board-component :user="{{ json_encode($user) }}"></user-board-component>
@endsection


