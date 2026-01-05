<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Followers on Door - Get Free Instagram, YouTube & Telegram Growth')</title>
    <meta name="description" content="@yield('meta_description', 'Boost your social media with Followers on Door. Get real followers, subscribers, and members for Instagram, YouTube, and Telegram — fast, safe, and affordable.')">
    <meta name="keywords" content="free Instagram followers, free youtube subscriber, followers kaise badhaye, subscriber kaise badhaye, buy followers, buy YouTube subscribers, get Telegram members, grow social media, boost Instagram, Telegram promotion, free social growth, get real followers, get real subscriber">
    <meta name="author" content="Followers on Door">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Get Free Instagram Followers & YouTube Subscribers | Followers on Door')">
    <meta property="og:description" content="@yield('og_description', 'Get real followers and subscribers on Instagram, YouTube, Telegram. Free and paid plans — fast delivery.')">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Followers on Door | Grow Instagram, YouTube & Telegram Fast')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Boost your account with real followers, subs, and members. Free and instant delivery available.')">
    <meta property="twitter:image" content="{{ asset('images/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">

    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
</head>
    <body>
        <div id="iconRain"></div>
   
        <div class="container">
            @include('header')
            @yield('content')
            @include('footer')
        </div>
        <script src="{{ asset('cursor.js') }}"></script>
    </body>
</html>
