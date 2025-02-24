<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.title') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    {{--
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <i class="fas fa-cloud"></i>
            @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
            سحاب كود
            @else
            SahabCode
            @endif
        </a>

        <!-- Desktop Language Switcher -->
        {{-- <div class="language-switcher desktop-lang">
            @php
            $currentLocale = LaravelLocalization::getCurrentLocale();
            $alternateLocale = $currentLocale === 'en' ? 'ar' : 'en';
            $alternateProperties = LaravelLocalization::getSupportedLocales()[$alternateLocale];
            @endphp

            <a href="{{ LaravelLocalization::getLocalizedURL($alternateLocale, null, [], true) }}" class="lang-link">
                <i class="fas fa-globe"></i>
                {{ $alternateProperties['native'] }}
            </a>
        </div> --}}

        <div class="nav-links">
            <!-- Mobile Language Switcher (appears at top of menu) -->


            <a href="#" class="nav-link">{{ __('messages.home') }}</a>
            <a href="#services" class="nav-link">{{ __('messages.services') }}</a>
            <a href="#work" class="nav-link">{{ __('messages.work') }}</a>
            <a href="#about" class="nav-link">{{ __('messages.about') }}</a>
            <a href="#contact" class="nav-link">{{ __('messages.contact') }}</a>
            <div class="language-switcher">
                @php
                $currentLocale = LaravelLocalization::getCurrentLocale();
                $alternateLocale = $currentLocale === 'en' ? 'ar' : 'en';
                $alternateProperties = LaravelLocalization::getSupportedLocales()[$alternateLocale];
                @endphp

                <a href="{{ LaravelLocalization::getLocalizedURL($alternateLocale, null, [], true) }}"
                    class="lang-link">
                    <i class="fas fa-globe"></i>
                    {{ $alternateProperties['native'] }}
                </a>
            </div>
        </div>

        <button class="menu-btn">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>