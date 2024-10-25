@extends('dashboard.base')
@Section('title', 'Dashboard')


@section('sidebar')
    @include('dashboard.sidebar')
@endsection


@section('content')
    @include('items.user')
@endsection
