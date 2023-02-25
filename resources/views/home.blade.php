@extends('layouts.main')

@section('content')

<div id="particles-background"></div>
<div class="welcome">
    <h2 class="hi">Jakub <span class="colored">Lipiński</span></h2>
    <h1 class="title"><strong class="colored">Full-stack</strong> developer</h1>
    <p class="welcome-description">
        {{ __('hero.description') }}
    </p>
    <div class="welcome-buttons">
        <a href="#works" class="see-works">{{ __('menu.portfolio') }}</a>
        <a href="#contact" class="see-works">{{ __('menu.contact') }}</a>
    </div>
</div>

<section id="about">
    <h1 class="section-title">{{ __('about.heading') }}</h1>
    <h3 class="section-sub-title">{{ __('about.subheading') }}</h3>
    <div class="about-me">
        <div class="about-description">
            <p>{{ __('about.paragraph1') }}</p>
            <p>{{ __('about.paragraph2') }}</p>
            <p>{{ __('about.paragraph3') }}</p>
            <p>{{ __('about.paragraph4') }}</p>
        </div>
        <div class="me">
            <div class="me-container">
                <div class="photo-wrapper">
                    <div class="photo-container">
                        <img src="{{ asset('img/portrait.webp') }}" alt="Jakub Lipiński">
                    </div>
                    <div class="square-1"></div>
                    <div class="square-2"></div>
                </div>
                <div class="socials">
                    <a target="_blank" href="https://www.linkedin.com/in/jakub-lipinski/"><i
                            class="fa-brands fa-linkedin"></i></a>
                    <a target="_blank" href="https://github.com/Jakub017"><i class="fa-brands fa-github-square"></i></a>
                </div>
                <a class="resume" href="{{asset('pdf/Jakub_Lipinski_cv.pdf')}}" download>
                    Curriculum vitae
                </a>
            </div>

        </div>
    </div>
</section>

<!-- <section id="services">
    <h1 class="section-title">{{ __('skills.heading') }}</h1>
    <h3 class="section-sub-title">{{ __('skills.subheading') }}</h3>


    <div class="services-wrapper">

        <div class="service">
            <div class="service-icon"><i class="fa-solid fa-desktop"></i></div>
            <h3 class="service-title">Strony internetowe</h3>
            <p class="service-description">Wykonuję duże strony internetowe oraz proste projekty. Zdaję sobie sprawę, że
                każdy projekt jest inny, dlatego podchodzę do niego indywidualnie dobierając najlepsze rozwiązania.
            </p>
        </div>

        <div class="service">
            <div class="service-icon"><i class="fa-solid fa-basket-shopping"></i></div>
            <h3 class="service-title">Sklepy internetowe</h3>
            <p class="service-description">Oferuję profesjonalne sklepy internetowe dostosowane do potrzeb klienta w
                oparciu o system PrestaShop lub WooCommerce. Postaw na nowoczesność swojego biznesu i zwiększ sprzedaż.
            </p>
        </div>
        <div class="service">
            <div class="service-icon"><i class="fa-brands fa-wordpress"></i></div>
            <h3 class="service-title">Strony oparte o wordpress</h3>
            <p class="service-description">Moje strony Wordpress oprócz ciekawego designu posiadają także dodatkowe
                funkcjonalności takie jak dodatkowe wersje językowe, blogi, portfolio i wiele innych!
            </p>
        </div>
        <div class="service">
            <div class="service-icon"><i class="fa-solid fa-paint-roller"></i></div>
            <h3 class="service-title">modernizacje stron www</h3>
            <p class="service-description">Wykonuję drobne oraz kompletne modernizacje stron internetowych. Jeśli twoja
                strona została wykonana kilka lat temu i nie jest już atrakcyjna - nie zwlekaj. Pamiętaj, że wizerunek
                internetowy to podstawa sukcesu.</p>
        </div>
        <div class="service">
            <div class="service-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
            <h3 class="service-title">Responsywne strony internetowe</h3>
            <p class="service-description">Wszystkie wykonywane przeze mnie strony są responsywne, to znaczy że
                dostosowują się do wyświetlaczy urządze mobilnych takich jak smartfony i tablety.</p>
        </div>
        <div class="service">
            <div class="service-icon"><i class="fa-solid fa-pen-ruler"></i></div>
            <h3 class="service-title">Projektowanie stron internetowych</h3>
            <p class="service-description">Zaprojektuję layout strony internetowej w programie Figma lub Adobe XD.
                Otrzymasz widoki twojej strony zarówno na ekrany monitorów oraz smartfonów.
            </p>
        </div>


    </div>
</section> -->


<!-- <section id="skills">
    <h1 class="section-title">{{ __('skills.heading') }}</h1>
    <h3 class="section-sub-title">{{ __('skills.subheading') }}</h3>
    <div class="skills-background"></div>
    <div class="skills-wrapper">
        <div class="skill-item">
            <div class="skill-icon"></div>
            <h3 class="skill-name">Front-End</h3>
            <p class="skill-description"></p>
            <p class="skill-tools-heading">Narzędzia</p>
            <ul class="skill-list">
                <li class="skill-item">Visual Studio Code</li>
                <li class="skill-item">Visual Studio Code</li>
            </ul>
        </div>
        <div class="skill-item">
            <div class="skill-icon"></div>
            <h3 class="skill-name">Back-End</h3>
            <p class="skill-description"></p>
            <p class="skill-tools-heading">Narzędzia</p>
            <ul class="skill-list">
                <li class="skill-item">Visual Studio Code</li>
                <li class="skill-item">Visual Studio Code</li>
            </ul>
        </div>
        <div class="skill-item">
            <div class="skill-icon"></div>
            <h3 class="skill-name">Dodatkowe</h3>
            <p class="skill-description"></p>
            <p class="skill-tools-heading">Narzędzia</p>
            <ul class="skill-list">
                <li class="skill-item">Visual Studio Code</li>
                <li class="skill-item">Visual Studio Code</li>
            </ul>
        </div>
    </div>
</section> -->

<section id="works">
    <h1 class="section-title">{{ __('portfolio.heading') }}</h1>
    <h3 class="section-sub-title">{{ __('portfolio.subheading') }}</h3>
    <div class="isotope">
        <button data-filter="front-end">Front-End</button>
        <button data-filter="back-end">Back-End</button>
        <button class="active" data-filter="full-stack">Full-stack</button>
        <button data-filter="cms">CMS</button>
    </div>
    <div class="projects">
        <!-- Front-end Projects -->
        <div class="project-card" data-filter="front-end" data-image="justtag">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('justtag.title')}}</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">{{__('justtag.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/JustTag"
                        class="project-link">{{__('private.repo')}}</a>
                    <a target="_blank" href="https://www.justtag.com/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <!-- Back-end Projects -->
        <div class="project-card" data-filter="back-end" data-image="digitalowa">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('digitalowa.title')}}</h3>
                <ul class="used_tech">
                    <li>Laravel</li>
                    <li>Voyager</li>
                    <li>Blade</li>
                    <li>MySQL</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">{{__('digitalowa.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/crm-app"
                        class="project-link">{{__('github.repo')}}</a>
                    <a target="_blank" href="https://digitalowa.pl/" class="project-link visit">Zobacz
                        online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <!-- Full-stack projects -->
        <div class="project-card filter-visible" data-filter="full-stack" data-image="crm-app">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('crm.title')}}</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>SASS (BEM)</li>
                    <li>Javascript</li>
                    <li>Laravel</li>
                    <li>Breeze</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">{{__('crm.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/crm-app"
                        class="project-link">{{__('github.repo')}}</a>
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/" class="project-link visit">Zobacz
                        online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <div class="project-card filter-visible changed-order" data-filter="full-stack" data-image="dog-cafe">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('dog.title')}}</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>SASS</li>
                    <li>Javascript</li>
                    <li>Laravel</li>
                    <li>Breeze</li>
                    <li>RecaptchaV3</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">{{__('dog.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/dog-cafe"
                        class="project-link">{{__('github.repo')}}</a>
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/" class="project-link visit">Zobacz
                        online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <!-- CMS projects -->
        <div class="project-card" data-filter="cms" data-image="design">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('design.title')}}</h3>
                <ul class="used_tech">
                    <li>Wordpress</li>
                    <li>PHP</li>
                    <li>Obsługa</li>
                    <li>Asana</li>
                </ul>
                <p class="project-description">{{__('design.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://www.designalive.pl/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <div class="project-card changed-order" data-filter="cms" data-image="lasery">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('iuvo.title')}}</h3>
                <ul class="used_tech">
                    <li>Prestashop</li>
                    <li>CSS</li>
                </ul>
                <p class="project-description">{{__('iuvo.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://lasery-sklep.pl/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <div class="project-card" data-filter="cms" data-image="idea">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">{{__('idea.title')}}</h3>
                <ul class="used_tech">
                    <li>Wordpress</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>Asana</li>
                </ul>
                <p class="project-description">{{__('idea.description')}}</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://ideadomu.pl/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('get.portfolioPage')}}" class="resume all">Zobacz wszystkie realizacje</a>
</section>

<section id="contact">
    <h1 class="section-title">{{ __('contact.heading') }}</h1>
    <h3 class="section-sub-title">{{ __('contact.subheading') }}</h3>
    <p>{{ __('contact.text') }}
        <p>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            @else(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>

            @endif

            <form action="{{route('contact.store')}}" method="POST">
                @csrf
                <div class="half-inputs">
                    <input class="email" name="email" type="email" placeholder="{{__('form.email')}}"
                        value="{{old('email')}}">
                    <input class="phone" name="phone" type="tel" placeholder="{{__('form.phone')}}"
                        value="{{old('phone')}}">
                </div>
                <input name="subject" type="text" placeholder="{{__('form.subject')}}" value="{{old('topic')}}">
                <textarea class="message" name="message" id="" cols="30" rows="10"
                    placeholder="{{__('form.message')}}">{{old('message')}}</textarea>
                <input class="resume send_btn" type="submit" value="{{__('form.send')}}">
            </form>
</section>


@endsection
