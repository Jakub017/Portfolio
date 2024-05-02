@extends('layouts.app')

@section('content')

<div class="projects">
    <h1 class="projects__heading">{{ __('projects.heading')}}</h1>
    <div class="projects__wrapper">
        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}"
                    class="projects__icon">{{ __('projects.name1') }}</h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">{!! __('projects.description1') !!}</p>
            <div class="projects__buttons">
                <a href="https://stronydlafirm.eu/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/laravel.png')}}"
                    class="projects__icon">{{ __('projects.name2') }}</h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">HTML</li>
                <li class="projects__tech">CSS</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">Laravel</li>
                <li class="projects__tech">Voyager</li>
            </ul>
            <p class="projects__description">{!! __('projects.description2') !!}</p>
            <div class="projects__buttons">
                <a href="https://soiz.pl/" target="_blank" class="projects__button"><img class="projects__button-icon"
                        src="{{asset('img/link.png')}}" alt=""></a>
                <span class="projects__tag">Fullstack</span>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/laravel.png')}}"
                    class="projects__icon">{{ __('projects.name3') }}</h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">{!! __('projects.description3') !!}</p>
            <div class="projects__buttons">
                <a href="https://budsystem.cieszyn.pl/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
                <span class="projects__tag">Backend</span>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}"
                    class="projects__icon">{{ __('projects.name4') }}
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Gutenberg</li>
                <li class="projects__tech">WCAG 2.1</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">{!! __('projects.description4') !!}</p>
            <div class="projects__buttons">
                <a href="https://biblioteka.debowiec.com.pl/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}"
                    class="projects__icon">{{ __('projects.name5') }}</h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">{!! __('projects.description5') !!}</p>
            <div class="projects__buttons">
                <a href="https://multienerga.de/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}"
                    class="projects__icon">{{ __('projects.name6') }}</h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">{!! __('projects.description6') !!}</p>
            <div class="projects__buttons">
                <a href="https://plastic-trader.com/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>

@endsection
