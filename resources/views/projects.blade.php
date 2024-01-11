@extends('layouts.main')

@section('content')

<div class="projects">
    <h1 class="projects__heading">{{ __('projects.heading')}}</h1>
    <div class="projects__wrapper">
        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}" class="projects__icon">StronyDlaFirm.eu
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel cumque totam
                adipisci ea quae cupiditate voluptas dolorum, culpa dignissimos dicta deleniti placeat nulla aperiam
                velit tenetur quia pariatur fuga! Maiores.</p>
            <div class="projects__buttons">
                <a href="https://stronydlafirm.eu/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/laravel.png')}}" class="projects__icon">Dog Cafe
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">HTML</li>
                <li class="projects__tech">CSS</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">Laravel</li>
                <li class="projects__tech">Voyager</li>
            </ul>
            <p class="projects__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel cumque totam
                adipisci ea quae cupiditate voluptas dolorum, culpa dignissimos dicta deleniti placeat nulla aperiam
                velit tenetur quia pariatur fuga! Maiores.</p>
            <div class="projects__buttons">
                <a href="https://dog-cafe.lipinskijakub.pl/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
                <a href="https://github.com/Jakub017/dog-cafe" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/github.png')}}" alt=""></a>
                <span class="projects__tag">Fullstack</span>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/laravel.png')}}" class="projects__icon">Budsystem
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel cumque
                totam
                adipisci ea quae cupiditate voluptas dolorum, culpa dignissimos dicta deleniti placeat nulla aperiam
                velit tenetur quia pariatur fuga! Maiores.</p>
            <div class="projects__buttons">
                <a href="https://budsystem.cieszyn.pl/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
                <span class="projects__tag">Backend</span>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}" class="projects__icon">Biblioteka w
                Dębowcu
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Gutenberg</li>
                <li class="projects__tech">WCAG 2.1</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel cumque
                totam
                adipisci ea quae cupiditate voluptas dolorum, culpa dignissimos dicta deleniti placeat nulla aperiam
                velit tenetur quia pariatur fuga! Maiores.</p>
            <div class="projects__buttons">
                <a href="https://biblioteka.debowiec.com.pl/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}" class="projects__icon">Multienerga.de
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel cumque totam
                adipisci ea quae cupiditate voluptas dolorum, culpa dignissimos dicta deleniti placeat nulla aperiam
                velit tenetur quia pariatur fuga! Maiores.</p>
            <div class="projects__buttons">
                <a href="https://multienerga.de/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>

        <div class="projects__project">
            <h3 class="projects__name"><img src="{{asset('img/wordpress.png')}}" class="projects__icon">Plastic Trader
            </h3>
            <ul class="projects__tech-list">
                <li class="projects__tech">Wordpress</li>
                <li class="projects__tech">Elementor</li>
                <li class="projects__tech">Javascript</li>
                <li class="projects__tech">CSS</li>
            </ul>
            <p class="projects__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel cumque totam
                adipisci ea quae cupiditate voluptas dolorum, culpa dignissimos dicta deleniti placeat nulla aperiam
                velit tenetur quia pariatur fuga! Maiores.</p>
            <div class="projects__buttons">
                <a href="https://plastic-trader.com/" target="_blank" class="projects__button"><img
                        class="projects__button-icon" src="{{asset('img/link.png')}}" alt=""></a>
            </div>
        </div>
    </div>
</div>

@endsection
