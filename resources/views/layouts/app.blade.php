<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.title') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/css/styles.css', 'resources/js/app.js'])

</head>

<body>
    <!-- Cloud-Themed Navbar -->
    <nav class="cloud-navbar">
        <div class="navbar-cloud-bg">
            <div class="navbar-cloud"></div>
        </div>

        <div class="navbar-container">
            <a href="#" class="logo">
                <div class="logo-cloud">
                    <i class="fas fa-cloud"></i>
                </div>
                <span class="logo-text">
                    @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
                    سحاب كود
                    @else
                    SahabCode
                    @endif
                </span>
            </a>

            <div class="nav-links">
                <div class="nav-links-cloud">
                    <a href="#" class="nav-link">{{ __('messages.home') }}</a>
                    <a href="#about" class="nav-link">{{ __('messages.about') }}</a>

                    <a href="#services" class="nav-link">{{ __('messages.services') }}</a>
                    <a href="#work" class="nav-link">{{ __('messages.work') }}</a>
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
                            <span>{{ $alternateProperties['native'] }}</span>
                        </a>
                    </div>
                </div>
            </div>

            <button class="menu-btn" aria-label="Toggle menu">
                <i class="fas fa-bars open-icon"></i>
                <i class="fas fa-times close-icon"></i>
            </button>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>