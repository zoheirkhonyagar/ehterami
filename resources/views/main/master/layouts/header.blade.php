<!DOCTYPE html>
<html class="wide wow-animation" lang="fa">

<head>

    {{-- <title>خانه</title> --}}
    {!! SEO::generate() !!}
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    @yield('custom-meta')
    @include('main.master.layouts.header-styles')

</head>

<body>
	<!-- Page Loader-->
	@include('main.master.layouts.loading')
