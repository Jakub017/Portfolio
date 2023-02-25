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

<section id="skills">
    <div class="skills-background"></div>
    <div class="skills-section-wrapper">
        <h1 class="section-title">{{ __('skills.heading') }}</h1>
        <h3 class="section-sub-title">{{ __('skills.subheading') }}</h3>
        <div class="skills-wrapper">
            <div class="skill-item">
                <img src="{{asset('img/frontend.png')}}" alt="" class="skill-icon">
                <h3 class="skill-name">Front-End</h3>
                <p class="skill-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque expedita
                    libero dolorum maxime quae, voluptatibus, eum officiis est, maiores omnis voluptas beatae nostrum
                    officia dolorem. Hic, ut. Totam, consequuntur officiis.</p>
                <p class="skill-tools-heading">{{ __('skills.tools') }}</p>
                <ul class="skill-list">
                    <li class="skill-list-item">HTML</li>
                    <li class="skill-list-item">CSS</li>
                    <li class="skill-list-item">CSS</li>
                    <li class="skill-list-item">SASS</li>
                    <li class="skill-list-item">Bootstrap</li>
                    <li class="skill-list-item">Javascript</li>
                    <li class="skill-list-item">Visual Studio Code</li>
                </ul>
            </div>
            <div class="skill-item">
                <img src="{{asset('img/backend.png')}}" alt="" class="skill-icon">
                <h3 class="skill-name">Back-End</h3>
                <p class="skill-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque expedita
                    libero dolorum maxime quae, voluptatibus, eum officiis est, maiores omnis voluptas beatae nostrum
                    officia dolorem. Hic, ut. Totam, consequuntur officiis.</p>
                <p class="skill-tools-heading">{{ __('skills.tools') }}</p>
                <ul class="skill-list">
                    <li class="skill-list-item">PHP</li>
                    <li class="skill-list-item">Laravel</li>
                    <li class="skill-list-item">Voyager</li>
                    <li class="skill-list-item">Breeze</li>
                    <li class="skill-list-item">SQL</li>
                    <li class="skill-list-item">Composer</li>
                </ul>
            </div>
            <div class="skill-item">
                <img src="{{asset('img/other.png')}}" alt="" class="skill-icon other-icon">
                <h3 class="skill-name">{{ __('skills.additional') }}</h3>
                <p class="skill-description">Oprócz pisania kodu, projektuję aplikacje i strony w programach graficznych
                    oraz posiadam doświadczenie w zarządzaniu hostingiem czy domenami.</p>
                <p class="skill-tools-heading">{{ __('skills.additional-tools') }}</p>
                <ul class="skill-list">
                    <li class="skill-list-item">Git</li>
                    <li class="skill-list-item">Figma</li>
                    <li class="skill-list-item">Adobe Xd</li>
                    <li class="skill-list-item">DirectAdmin</li>
                    <li class="skill-list-item">Wordpress</li>
                    <li class="skill-list-item">Prestashop</li>
                </ul>
            </div>
        </div>
    </div>
</section>

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
                    <a target="_blank" href="https://www.justtag.com/" class="project-link visit">{{__('see.online')}}
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
                    <a target="_blank" href="https://digitalowa.pl/" class="project-link visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/"
                        class="project-link visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/"
                        class="project-link visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
                    <a target="_blank" href="https://www.designalive.pl/"
                        class="project-link visit">{{__('see.online')}} <i
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
                    <a target="_blank" href="https://lasery-sklep.pl/" class="project-link visit">{{__('see.online')}}
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
                    <a target="_blank" href="https://ideadomu.pl/" class="project-link visit">{{__('see.online')}} <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <a href="{{route('get.portfolioPage')}}" class="resume all">{{__('see.projects')}}</a> -->
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
