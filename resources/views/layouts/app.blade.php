<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name',"Laravel") }} - {{ $header }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">--}}

</head>
<body>

<x-navigation-layout></x-navigation-layout>

<!-- Page Heading -->

<h1>
    {{ $header }}
</h1>

<!-- Page Content -->
<main>
    {{ $slot }}
</main>

@env('local')
    <script src="http://localhost:35729/livereload.js"></script>
@endenv

<script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

</body>
</html>
