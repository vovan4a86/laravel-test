<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("/css/app.css") }}">

    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Статейник</span>
        </a>

        <navmenu-component></navmenu-component>
{{--        <ul class="nav nav-pills">--}}
{{--            <li class="nav-item">--}}
{{--                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : null }}" aria-current="page">На главную</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="/articles" class="nav-link {{ request()->is('articles') ? 'active' : null }}">Каталог статей</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </header>
</div>

