@extends('layouts.main')

@section('content')

<section class="hero" id="particles-background">
    <div class="hero__wrapper">
        <h1 class="hero__name">Jakub Lipiński</h1>
        <h2 class="hero__title"><span class="hero__colored">Full-Stack</span> Developer</h2>
        <p class="hero__description">
            {!! __('hero.description') !!}
        </p>
        <div class="hero__buttons">
            <button class="hero__button hero__button--works">{{ __('menu.portfolio') }}</button>
            <button class="hero__button hero__button--contact">{{ __('menu.contact') }}</button>
        </div>
    </div>
</section>

<section class="section about">
    <h2 class="section__title about__title">{{__('about.heading')}}</h2>
    <h3 class="section__subtitle about__subtitle">{{__('about.subheading')}}</h3>
    <div class="about__wrapper">
        <div class="about__text">
            <p class="about__description">{!! __('about.paragraph1') !!}</p>
            <p class="about__description">{!! __('about.paragraph2') !!}</p>
            <p class="about__description">{!! __('about.paragraph3') !!}</p>
            <p class="about__description">{!! __('about.paragraph4') !!}</p>
        </div>
        <div class="about__info">
            <div class="about__image-wrapper">
                <div class="about__image-container">
                    <img src="{{asset('img/portrait.webp')}}" alt="Zdjęcie Jakub Lipiński" class="about__image">
                </div>
                <div class="about__square-1"></div>
                <div class="about__square-2"></div>
            </div>
            <div class="about__links">
                <a href="https://github.com/Jakub017" target="_blank" class="about__link">
                    <i class="fa-brands fa-github-square"></i>
                </a>
                <a href="https://www.linkedin.com/in/jakub-lipinski/" target="_blank" class="about__link">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <a target="_blank" href="{{asset('pdf/jakub_lipinski_cv.pdf')}}" class="about__cv">Curriculum vitae</a>
        </div>
    </div>


</section>

<section class="section skills">
    <div class="skills__wrapper">
        <div class="skills__text-wrapper">
            <h2 class="section__title skills__title">{{__('skills.heading')}}</h2>
            <h3 class="section__subtitle skills__subtitle">{{__('skills.subheading')}}</h3>
            <p class="skills__description">{{__('skills.description')}}</p>
        </div>
        <div class="skills__cards-wrapper">
            <div class="swiper mySwiper skills__swiper">
                <div class="swiper-wrapper skills__swiper-wrapper">
                    <div class="swiper-slide skills__swiper-slide">
                        <div class="skills__heading">
                            <h2 class="skills__name">Front-End</h2>
                            <img src="{{asset('img/frontend.png')}}" class="skills__icon">
                        </div>
                        <div class="skills__lists">
                            <ul class="skills__list">
                                <li class="skills__item">HTML</li>
                                <li class="skills__item">CSS</li>
                                <li class="skills__item">SCSS</li>
                                <li class="skills__item">BEM</li>
                            </ul>
                            <ul class="skills__list">
                                <li class="skills__item">Tailwind CSS</li>
                                <li class="skills__item">Bootstrap</li>
                                <li class="skills__item">Javascript</li>
                                <li class="skills__item">React</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide skills__swiper-slide">
                        <div class="skills__heading">
                            <h2 class="skills__name">Back-End</h2>
                            <img src="{{asset('img/backend.png')}}" class="skills__icon">
                        </div>
                        <div class="skills__lists">
                            <ul class="skills__list">
                                <li class="skills__item">Laravel</li>
                                <li class="skills__item">Laravel Scout</li>
                                <li class="skills__item">Laravel Livewire</li>
                                <li class="skills__item">Laravel Socialite</li>
                            </ul>
                            <ul class="skills__list">
                                <li class="skills__item">Laravel Breeze</li>
                                <li class="skills__item">PHP</li>
                                <li class="skills__item">Voyager</li>
                                <li class="skills__item">MySQL</li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide skills__swiper-slide">
                        <div class="skills__heading">
                            <h2 class="skills__name">{{ __('skills.other') }}</h2>
                            <img src="{{asset('img/other.png')}}" class="skills__icon">
                        </div>
                        <div class="skills__lists">
                            <ul class="skills__list">
                                <li class="skills__item">Git</li>
                                <li class="skills__item">Figma</li>
                                <li class="skills__item">DirectAdmin</li>
                                <li class="skills__item">Warp</li>
                            </ul>
                            <ul class="skills__list">
                                <li class="skills__item">Wordpress</li>
                                <li class="skills__item">Prestashop</li>
                                <li class="skills__item">VS Code</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section panel">
    <div class="panel__wrapper">
        <div class="panel__text">
            <h2 class="section__title panel__title">{{ __('panel.heading') }}</h2>
            <h3 class="section__subtitle panel__subtitle">{{ __('panel.subheading') }}</h3>
            <div class="panel__text-wrapper">
                <div class="panel__text-container">
                    <p class="panel__description">{!! __('panel.description1') !!}</p>
                    <p class="panel__description">{!! __('panel.description2') !!}</p>
                </div>
                <div class="panel__text-container">
                    <p class="panel__description">{!! __('panel.description3') !!}</p>
                    <p class="panel__description">{!! __('panel.description4') !!}</p>
                    <p class="panel__description">{!! __('panel.description5') !!}</p>
                </div>
            </div>
        </div>
        <div class="panel__screens-wrapper">
            <div class="swiper mySwiper panel__swiper">
                <div class="swiper-wrapper panel__swiper-wrapper">
                    <div class="swiper-slide panel__swiper-slide">
                        <img class="panel__swiper-image" src="{{asset('img/admin_screens/dashboard.webp')}}"
                            alt="Pulpit w panelu administracyjnym Site Wizard" />
                    </div>
                    <div class="swiper-slide panel__swiper-slide">
                        <img class="panel__swiper-image" src="{{asset('img/admin_screens/index_view.webp')}}"
                            alt="Lista rekordów w panelu administracyjnym Site Wizard" />
                    </div>
                    <div class="swiper-slide panel__swiper-slide">
                        <img class="panel__swiper-image" src="{{asset('img/admin_screens/support.webp')}}"
                            alt="Formularz kontaktowy w panelu administracyjnym Site Wizard" />
                    </div>
                    <div class="swiper-slide panel__swiper-slide">
                        <img class="panel__swiper-image" src="{{asset('img/admin_screens/add_view.webp')}}"
                            alt="Dodawanie rekordu w panelu administracyjnym Site Wizard" />
                    </div>
                </div>
            </div>
        </div>
        <div class="panel__buttons">
            <a target="_blank" href="https://github.com/Jakub017/site-wizard"
                class="panel__button panel__button--empty">{{ __('github.repo') }}</a>
        </div>
    </div>
</section>

<section class="section works">
    <h1 class="section__title works__title">{{ __('portfolio.heading') }}</h1>
    <h3 class="section__subtitle works__title">{{ __('portfolio.subheading') }}</h3>
    <div class="works__isotope">
        <button class="works__isotope-button" data-filter="front-end">Front-End</button>
        <button class="works__isotope-button" data-filter="back-end">Back-End</button>
        <button class="works__isotope-button works__isotope-button--active" data-filter="full-stack">Full-stack</button>
        <button class="works__isotope-button" data-filter="cms">CMS</button>
    </div>
    <div class="works__wrapper">
        <div class="works__card" data-filter="front-end">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/justtag.webp')}}"
                    alt="Praca Front-end Justtag"></div>
            <div class="works__content">
                <h3 class="works__name">{{__('justtag.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">HTML</li>
                    <li class="works__item">CSS</li>
                    <li class="works__item">JavaScript</li>
                    <li class="works__item">Git</li>
                </ul>
                <p class="works__description">{!! __('justtag.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://www.justtag.com/"
                        class="works__link works__link--visit">{{__('see.online')}}
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card" data-filter="back-end">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/plastic-trader.webp')}}"
                    alt="Praca Back-end Digitalowa"></div>
            <div class="works__content">
                <h3 class="works__name">{{__('plastic.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">Laravel</li>
                    <li class="works__item">Site Wizard</li>
                    <li class="works__item">Breeze</li>
                    <li class="works__item">MySQL</li>
                    <li class="works__item">Git</li>
                </ul>
                <p class="works__description">{!! __('plastic.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="http://plastic-trader.strondlafirm.hekko24.pl/en"
                        class="works__link works__link--visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card works__card--changed-order" data-filter="back-end">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/digitalowa.webp')}}"
                    alt="Praca Back-end Digitalowa"></div>
            <div class="works__content">
                <h3 class="works__name">{{__('digitalowa.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">Laravel</li>
                    <li class="works__item">Voyager</li>
                    <li class="works__item">Blade</li>
                    <li class="works__item">MySQL</li>
                    <li class="works__item">Git</li>
                </ul>
                <p class="works__description">{!! __('digitalowa.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://digitalowa.pl/"
                        class="works__link works__link--visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card works__card--visible" data-filter="full-stack">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/olza.webp')}}"
                    alt="Praca Full-Stack Olza.pl">
            </div>
            <div class="works__content">
                <h3 class="works__name">{{__('olza.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">HTML</li>
                    <li class="works__item">SCSS (BEM)</li>
                    <li class="works__item">Javascript</li>
                    <li class="works__item">Laravel</li>
                    <li class="works__item">Livewire</li>
                    <li class="works__item">Breeze</li>
                    <li class="works__item">Git</li>
                </ul>
                <p class="works__description">{!! __('olza.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://olza.pl/pl/"
                        class="works__link works__link--visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card works__card--visible works__card--changed-order" data-filter="full-stack">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/movie-app.webp')}}"
                    alt="Praca Full-Stack Doggo Cafe"></div>
            <div class="works__content">
                <h3 class="works__name">{{ __('movie.title') }}</h3>
                <ul class="works__tech">
                    <li class="works__item">HTML</li>
                    <li class="works__item">SCSS (BEM)</li>
                    <li class="works__item">Javascript</li>
                    <li class="works__item">Laravel</li>
                    <li class="works__item">API</li>
                    <li class="works__item">Livewire</li>
                    <li class="works__item">Git</li>
                    <li class="works__item">TMBD</li>
                </ul>
                <p class="works__description">{!! __('movie.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://github.com/Jakub017/Movie-app"
                        class="works__link">{{__('github.repo')}}</a>
                    <a target="_blank" href="https:movie-app.lipinskijakub.pl"
                        class="works__link works__link--visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card works__card--visible" data-filter="full-stack">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/dog-cafe.webp')}}"
                    alt="Praca Full-Stack Dog Cafe">
            </div>
            <div class="works__content">
                <h3 class="works__name">{{__('dog.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">HTML</li>
                    <li class="works__item">SCSS (BEM)</li>
                    <li class="works__item">Javascript</li>
                    <li class="works__item">Laravel</li>
                    <li class="works__item">Voyager</li>
                    <li class="works__item">Git</li>
                </ul>
                <p class="works__description">{!! __('dog.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://github.com/Jakub017/dog-cafe"
                        class="works__link">{{__('github.repo')}}</a>
                    <a target="_blank" href="https://dog-cafe.lipinskijakub.pl/"
                        class="works__link works__link--visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card" data-filter="cms">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/design-alive.webp')}}"
                    alt="Strona Wordpress DesignAlive.pl"></div>
            <div class="works__content">
                <h3 class="works__name">{{__('design.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">Wordpress</li>
                    <li class="works__item">PHP</li>
                    <li class="works__item">Obsługa</li>
                    <li class="works__item">Asana</li>
                </ul>
                <p class="works__description">{!! __('design.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://www.designalive.pl/"
                        class="works__link works__link--visit">{{__('see.online')}}
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card works__card--changed-order" data-filter="cms">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/lasery-sklep.webp')}}"
                    alt="Sklep internetowy Prestashop lasery-sklep.pl"></div>
            <div class="works__content">
                <h3 class="works__name">{{__('iuvo.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">Prestashop</li>
                    <li class="works__item">CSS</li>
                </ul>
                <p class="works__description">{!! __('iuvo.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://lasery-sklep.pl/"
                        class="works__link works__link--visit">{{__('see.online')}}
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <div class="works__card" data-filter="cms">
            <div class="works__image-wrapper"><img class="works__image" src="{{asset('img/works/idea-domu.webp')}}"
                    alt="Strona internetowa IdeaDomu.pl"></div>
            <div class="works__content">
                <h3 class="works__name">{{__('idea.title')}}</h3>
                <ul class="works__tech">
                    <li class="works__item">Wordpress</li>
                    <li class="works__item">PHP</li>
                    <li class="works__item">JavaScript</li>
                    <li class="works__item">Asana</li>
                </ul>
                <p class="works__description">{!! __('idea.description') !!}</p>
                <div class="works__buttons">
                    <a target="_blank" href="https://ideadomu.pl/"
                        class="works__link works__link--visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="contact" class="section contact">
    <h1 class="section__title contact__title">{{__('contact.heading')}}</h1>
    <h3 class="section__subtitle contact__subtitle">{{__('contact.subheading')}}</h3>
    <p class="contact__description">{{__('contact.description')}}</p>
    @if (session('success'))
    <div class="contact__success">
        {{ session('success') }}
    </div>
    @endif
    <form method="POST" action="{{route('contact.send')}}#contact" class="contact__form">
        @csrf
        <div class="contact__two-inputs">
            <div class="contact__input-group">
                <input type="text" name="email" class="contact__input" placeholder="{{__('form.email')}}">
            </div>
            <div class="contact__input-group">
                <input type="text" name="phone" class="contact__input" placeholder="{{__('form.phone')}}">
            </div>
        </div>
        <div class="contact__input-group">
            <input type="text" name="topic" class="contact__input" placeholder="{{__('form.subject')}}">
        </div>
        <div class="contact__input-group">
            <textarea name="message" class="contact__input" cols="30" rows="10"
                placeholder="{{__('form.message')}}"></textarea>
        </div>
        <button type="submit" class="contact__submit">{{__('form.send')}}</button>
    </form>
</section>

@endsection
