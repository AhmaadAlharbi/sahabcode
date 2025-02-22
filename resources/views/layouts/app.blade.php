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
            @if(LaravelLocalization::getCurrentLocaleDirection() == 'rtl')
            سحاب كود
            @else
            SahabCode
            @endif
        </a>
        <div class="nav-links">
            <a href="#" class="nav-link">{{ __('messages.home') }}</a>
            <a href="#services" class="nav-link">{{ __('messages.services') }}</a>
            <a href="#work" class="nav-link">{{ __('messages.work') }}</a>
            <a href="#about" class="nav-link">{{ __('messages.about') }}</a>
            <a href="#contact" class="nav-link">{{ __('messages.contact') }}</a>
        </div>

        <!-- Language Switcher -->
        <!-- Language Switcher -->
        <div class="language-switcher">
            @php
            $currentLocale = LaravelLocalization::getCurrentLocale();
            $alternateLocale = $currentLocale === 'en' ? 'ar' : 'en';
            $alternateProperties = LaravelLocalization::getSupportedLocales()[$alternateLocale];
            @endphp

            <a href="{{ LaravelLocalization::getLocalizedURL($alternateLocale, null, [], true) }}" class="lang-link">
                {{ $alternateProperties['native'] }}
            </a>
        </div>

        <style>
            .language-switcher {
                margin-left: 2rem;
            }

            .lang-link {
                color: rgba(255, 255, 255, 0.8);
                text-decoration: none;
                padding: 0.5rem 1rem;
                border-radius: 6px;
                transition: all 0.3s ease;
                font-weight: 500;
                font-size: 0.9rem;
            }

            .lang-link:hover {
                color: white;
                background: rgba(255, 255, 255, 0.1);
            }

            /* RTL Support */
            [dir="rtl"] .language-switcher {
                margin-left: 0;
                margin-right: 2rem;
            }

            /* Mobile Responsive */
            @media (max-width: 768px) {
                .language-switcher {
                    margin: 1rem 0;
                }

                .lang-link {
                    padding: 0.4rem 0.8rem;
                    font-size: 0.85rem;
                }
            }
        </style>

        <button class="menu-btn">
            <i class="fas fa-bars"></i>
        </button>
    </nav>

    @yield('content')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>