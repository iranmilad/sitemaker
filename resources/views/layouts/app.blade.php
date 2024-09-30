<!DOCTYPE html>
<html lang="fa">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ $setting->settings['favicon'] }}" />
    @vite('resources/css/global-style.css')
    <style>
        :root {
            --font-family: {{ $style->settings['font'] ?? 'IranYekan' }}, "Aldhabi"; /* فونت پیشفرض */
            --primary: {{ $style->settings['primary'] ?? '#2f415d' }}; /* رنگ اصلی */
            --btn-hover: {{ $style->settings['btn-hover'] ?? '#e96f84' }}; /* رنگ هاور */
            --btn-font-color: {{ $style->settings['btn-font-color'] ?? '#fff' }}; /* رنگ متن دکمه */
            --header-bg: {{ $style->settings['header-bg'] ?? '#f8f8fa' }}; /* رنگ پس‌زمینه هدر */
            --bg-background: {{ $style->settings['bg-background'] }}; /* رنگ پس‌زمینه */
            --header-color: {{ $style->settings['header-color'] ?? '#000' }}; /* رنگ عناوین */
            --footer-bg: {{ $style->settings['footer-bg'] ?? '#020202' }}; /* رنگ فوتر */
        }


    </style>
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">


    @vite('resources/fonts/'.$style->settings['font'].'/font.css')




    @yield('css')
</head>

<body class="@yield('body')">

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!--Top Header-->
        {{-- @include('partials.topHeader') --}}
        <!--End Top Header-->

        <!--Header  1 | 4 | 5 | 6 | 8 -->


        @include('partials.header.header'.$theme->settings['header'])
        <!--End Header-->

        <!--Mobile Menu-->
        @include('partials.mobileMenu')
        <!--End Mobile Menu-->

        @yield('content')

        <!--Footer  1 | 2 | 3 | 4 | 6 | 7 | 8 -->
        @include('partials.footer.footer'.$theme->settings['footer'])
        <!--End Footer-->

        <!--Scoll Top-->
        <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
        <!--End Scoll Top-->

        @yield('miniCartDrawer')

        @yield('quickShopModal')

        @yield('productAddtocartModal')

        @yield('productQuickviewModal')

        <!-- Including Jquery/Javascript -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ Vite::asset('resources/js/main.js') }}"></script>
        <script src="{{ Vite::asset('resources/js/app.js') }}"></script>
        @livewireScripts
        @yield('js')


    </div>
    <!--End Page Wrapper-->

</body>
</html>
