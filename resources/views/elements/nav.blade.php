<nav>
    <div class="logo">
        <a href="{{route('get.home')}}"><img src="{{ asset('img/logo.webp') }}" alt="Jakub Lipiński logo"></a>
    </div>
    <div class="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="menu-list">
        <div class="close-menu"><img src="{{ asset('img/close_menu.png') }}" alt=""></div>
        <div class="mobile-logo"><img src="{{ asset('img/logo.webp') }}" alt="Jakub Lipiński logo"></div>
        <a class="menu-option" href="#about">{{ __('menu.about') }}</a>
        <a class="menu-option" href="#services">{{ __('menu.skills') }}</a>
        <a class="menu-option" href="#works">{{ __('menu.portfolio') }}</a>
        <a class="menu-option" href="#contact">{{ __('menu.contact') }}</a>
        @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)

        @elseif($locale_name === 'English')
        <a class="menu-option" href="/{{ $available_locale }}">
            <img class="language-icon" src="{{ asset('img/en.png') }}" alt="">
        </a>

        @elseif($locale_name === 'Polish')
        <a class="menu-option" href="/{{ $available_locale }}">
            <img class="language-icon" src="{{ asset('img/pl.png') }}" alt="">
        </a>
        @endif
        @endforeach
    </div>
</nav>
