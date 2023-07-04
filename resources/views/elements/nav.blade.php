<div class="nav-background"></div>
<nav class="nav">
    <div class="nav__wrapper">
        <a class="nav__logo-wrapper" href="{{route('home')}}"><img class="nav__logo" src="{{ asset('img/logo.webp') }}"
                alt="Jakub Lipiński logo">
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
            <!-- <form action="{{ route('set.locale') }}" method="POST" class="nav__form">
                @csrf
                <label class="nav__label" for="pl">
                    <img class="nav__flag" src="{{asset('img/pl.png')}}" alt="Option 1">
                    <input type="radio" class="nav__radio" name="locale" value="pl"
                        onclick="document.querySelector('.nav__form').submit()">
                </label>
                <label class="nav__label" for="en">
                    <img class="nav__flag" src="{{asset('img/en.png')}}" alt="Option 2">
                    <input type="radio" class="nav__radio" name="locale" value="en"
                        onclick="document.querySelector('.nav__form').submit()">
                </label>
            </form> -->
        </div>
    </div>
</nav>
<nav class="nav-mobile">
    <div class="nav-mobile__wrapper">
        <a class="nav-mobile__logo-wrapper" href="{{route('home')}}"><img class="nav-mobile__logo"
                src="{{ asset('img/logo.webp') }}" alt="Jakub Lipiński logo">
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
