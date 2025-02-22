<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.title') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    @endif
</head>

<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <i class="fas fa-cloud"></i>
            SahabCode
        </a>
        <div class="nav-links">
            <a href="#" class="nav-link">{{ __('messages.home') }}</a>
            <a href="#services" class="nav-link">{{ __('messages.services') }}</a>
            <a href="#work" class="nav-link">{{ __('messages.work') }}</a>
            <a href="#about" class="nav-link">{{ __('messages.about') }}</a>
            <a href="#contact" class="nav-link">{{ __('messages.contact') }}</a>
        </div>

        <!-- Language Switcher -->
        <div class="language-switcher">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                class="{{ LaravelLocalization::getCurrentLocale() == $localeCode ? 'active' : '' }}">
                {{ $properties['native'] }}
            </a>
            @endforeach
        </div>

        <button class="menu-btn">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>