<div class="nav-background"></div>
<nav class="nav">
    <div class="nav__wrapper">
        <a class="nav__logo-wrapper" href="{{route('home', ['locale' => app()->getLocale()])}}"><img class="nav__logo"
                src="{{ asset('img/logo.webp') }}" alt="Jakub Lipiński logo">
        </a>
        <div class="nav__menu">
            <button class="nav__option nav__option--about">{{ __('menu.about') }}</button>
            <button class="nav__option nav__option--skills">{{ __('menu.skills') }}</button>
            <button class="nav__option nav__option--panel">{{ __('menu.panel') }}</button>
            <button class="nav__option nav__option--works">{{ __('menu.portfolio') }}</button>
            <button class="nav__option nav__option--contact">{{ __('menu.contact') }}</button>
        </div>
        <div class="nav__buttons">
            <a target="_blank" href="{{asset('pdf/jakub_lipinski_cv.pdf')}}" class="nav__cv">Curriculum
                vitae</a>
            <div class="nav__language-wrapper">
                <div class="nav__language-current">
                    @if(app()->getLocale() == 'pl')
                    <img class="nav__flag" src="{{asset('img/pl.png')}}">
                    <span class="nav__language">PL</span>
                    @else
                    <img class="nav__flag" src="{{asset('img/uk.png')}}">
                    <span class="nav__language">EN</span>
                    @endif
                    <i class="fa-solid fa-caret-down nav__arrow"></i>
                </div>
                <div class="nav__language-dropdown">
                    @if(app()->getLocale() == 'pl')
                    <a href="{{route('home', ['locale' => 'en'])}}" class="nav__language-link">EN<img class="nav__flag"
                            src="{{asset('img/uk.png')}}"></a>
                    @else
                    <a href="{{route('home', ['locale' => 'pl'])}}" class="nav__language-link">PL<img class="nav__flag"
                            src="{{asset('img/pl.png')}}"></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>


<nav class="nav-mobile">
    <div class="nav-mobile__wrapper">
        <a class="nav-mobile__logo-wrapper" href="{{route('home', ['locale' => app()->getLocale()])}}"><img
                class="nav-mobile__logo" src="{{ asset('img/logo.webp') }}" alt="Jakub Lipiński logo">
        </a>
        <div class="nav-mobile__buttons">
            <a target="_blank" href="{{asset('pdf/jakub_lipinski_cv.pdf')}}" download class="nav-mobile__cv">Curriculum
                vitae</a>
            <div class="nav-mobile__hamburger">
                <div class="nav-mobile__hamburger-item"></div>
                <div class="nav-mobile__hamburger-item"></div>
                <div class="nav-mobile__hamburger-item"></div>
            </div>
        </div>
        <div class="nav-mobile__menu">
            <img src="{{asset('img/close-menu.png')}}" alt="Zamknięcie menu" class="nav-mobile__close">
            <button class="nav-mobile__option nav-mobile__option--about">{{ __('menu.about') }}</button>
            <button class="nav-mobile__option nav-mobile__option--skills">{{ __('menu.skills') }}</button>
            <button class="nav-mobile__option nav-mobile__option--panel">{{ __('menu.panel') }}</button>
            <button class="nav-mobile__option nav-mobile__option--works">{{ __('menu.portfolio') }}</button>
            <button class="nav-mobile__option nav-mobile__option--contact">{{ __('menu.contact') }}</button>
            <a target="_blank" href="{{asset('pdf/jakub_lipinski_cv.pdf')}}" download class="nav-mobile__cv">Curriculum
                vitae</a>
        </div>
    </div>
</nav>
