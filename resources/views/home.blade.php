@extends('layouts.main')

@section('content')

<div id="particles-background"></div>
<div class="welcome">
    <h2 class="hi">Jakub <span class="colored">Lipiński</span></h2>
    <h1 class="title"><strong class="colored">Full-stack</strong> developer</h1>
    <p class="welcome-description">Zajmuję się tworzeniem (oraz projektowaniem) stron i aplikacji internetowych w
        oparciu o HTML, CSS, Javascript oraz Laravel.</p>
    <div class="welcome-buttons">
        <a href="#works" class="see-works">Portfolio</a>
        <a href="#contact" class="see-works">Kontakt</a>
    </div>
</div>

<section id="about">
    <h1 class="section-title">O mnie</h1>
    <h3 class="section-sub-title">Poznajmy się</h3>
    <div class="about-me">
        <div class="about-description">
            <p>Nazwyam się <span class="colored">Jakub Lipiński</span>, jestem 22 letnim Full-stack Developerem. Obecnie
                mieszkam w Polsce i pracuję w agencji <span class="colored">StronyDlaFirm.eu</span>. Pracuję z witrynami
                i aplikacjami internetowymi opartymi o HTML, CSS, Javascript oraz o jeden z frameworków PHP - Laravel.
            </p>
            <p>Oprócz klasycznej pracy Front-End developera, od której rozpoczęła się moja przygoda z web-developmentem,
                rozpocząłem również działania od strony back-endu.
                <span class="colored">Tworzę własne panele administracyjne</span> oraz korzystam z gotowych rozwiązań
                takich jak <span>Voyager</span>. <span class="colored">Obecnie pracuję nad własnym
                    systemem sklepów
                    internetowych</span>, aby jeszcze bardziej poznać Laravela.</p>
            <p>Często przed rozpoczęciem pracy nad swoim projektem, tworzę jego wizualizację w programie <span
                    class="colored">Figma</span> lub <span class="colored">Adobe Xd</span>.</p>
            <p>Posiadam również doświadczenie w pracy z różnymi CMS, głównie <span class="colored">Wordpress</span> oraz
                <span class="colored">Prestashop</span>.</p>
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

<section id="services">
    <h1 class="section-title">Umiejętności</h1>
    <h3 class="section-sub-title">Technologie i narzedzia, z którymi pracuję</h3>


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
</section>

<section id="works">
    <h1 class="section-title">Portfolio</h1>
    <h3 class="section-sub-title">Moje najważniejsze projekty</h3>
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
                <h3 class="project-name">Just Tag</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">Strona internetowa agencji badającej zachowania użytkownikw offline i
                    online. W tym projekcie zajmowałem się tworzeniem tylko warstwy, którą widzi użytkownik z
                    dostarczonego projektu graficznego. <span class="colored">Repozytorium Github tego projektu
                        udostępniam tylko w celach rekrutacyjnych</span></p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/JustTag" class="project-link">Repozytorium
                        prywatne</a>
                    <a target="_blank" href="https://www.justtag.com/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>

        <!-- Back-end Projects -->
        <div class="project-card" data-filter="back-end" data-image="digitalowa">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Panel Administracyjny strony digitalowa.pl</h3>
                <ul class="used_tech">
                    <li>Laravel</li>
                    <li>Voyager</li>
                    <li>Blade</li>
                    <li>MySQL</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">Prosty panel administracyjny dla strony <a class="colored-link"
                        href="https://digitalowa.pl/" target="_blank">digitalowa.pl</a> pozwalający na zarządzanie
                    treścią: dodawanie usług, edycję
                    tekstów, czy zmianę danych kontaktowych. Panel został stworzony w oparciu o pakiet Voyager. <span
                        class="colored">Zrzuty
                        ekranu z panelu oraz wytłumaczenie działania dostępne w pliku readme repozytorium</span>.</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/crm-app" class="project-link">Repozytorium
                        Github</a>
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/" class="project-link visit">Zobacz
                        online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <!-- Full-stack projects -->
        <div class="project-card filter-visible" data-filter="full-stack" data-image="crm-app">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Crm App</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>SASS (BEM)</li>
                    <li>Javascript</li>
                    <li>Laravel</li>
                    <li>Breeze</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">Aplikacja, w której użytkownik może planować swoje wydarzenia, zapisywać
                    dane logowania do stron internetowych, klientów FTP czy SSH. Aplikacja została również wyposażona w
                    funkcję dodawania notatek, edycji profilu oraz zmiany motywu kolorystycznego.</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/crm-app" class="project-link">Repozytorium
                        Github</a>
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/" class="project-link visit">Zobacz
                        online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <div class="project-card filter-visible changed-order" data-filter="full-stack" data-image="dog-cafe">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Doggo Cafe</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>SASS</li>
                    <li>Javascript</li>
                    <li>Laravel</li>
                    <li>Breeze</li>
                    <li>RecaptchaV3</li>
                    <li>Git</li>
                </ul>
                <p class="project-description">Strona internetowa fikcyjnej kawiarni. Podczas stylowania <span
                        class="colored">zastosowałem
                        metodologię BEM</span>. Witryna jest wyposażona w <span class="colored"> panel administracyjny
                        Voyager</span> do zarządzania
                    treścią
                    (zrzuty ekranu oraz działanie są dostępne w pliku readme repozytorium). Formularz kontaktowy jest
                    zabezpieczony Google Recaptcha V3.</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/dog-cafe" class="project-link">Repozytorium
                        Github</a>
                    <a target="_blank" href="https://dog-cafe.uusgvsrbeu.cfolks.pl/" class="project-link visit">Zobacz
                        online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <!-- CMS projects -->
        <div class="project-card" data-filter="cms" data-image="design">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Design Alive</h3>
                <ul class="used_tech">
                    <li>Wordpress</li>
                    <li>PHP</li>
                    <li>Obsługa</li>
                    <li>Asana</li>
                </ul>
                <p class="project-description">DesignAlive to portal z artykułami ze świata szeroko pojętego designu. W
                    tym projekcie zajmowałem się utrzymywaniem aktualności i bezpieczeństwa strony, konserwacją oraz
                    wprowadzaniem nowych rozwiązań do portalu.</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://www.designalive.pl/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <div class="project-card changed-order" data-filter="cms" data-image="lasery">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Sklep IUVO laser</h3>
                <ul class="used_tech">
                    <li>Prestashop</li>
                    <li>CSS</li>
                </ul>
                <p class="project-description">DesignAlive to portal z artykułami ze świata szeroko pojętego designu. W
                    tym projekcie zajmowałem się utrzymywaniem aktualności i bezpieczeństwa strony, konserwacją oraz
                    wprowadzaniem nowych rozwiązań do portalu.</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://lasery-sklep.pl/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <div class="project-card" data-filter="cms" data-image="idea">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Idea Domu</h3>
                <ul class="used_tech">
                    <li>Wordpress</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>Asana</li>
                </ul>
                <p class="project-description">Portal z artykułami zawierającymi projekty i realizacje domów
                    nowoczesnych, a także wskazówki i ciekawoski odnośnie aranżacji wnętrz. W pracy z tą witryną zajmuję
                    się wdrażaniem nowych rozwiązań, modyfikacją motywów, wtyczek, a także utrzymania bezpieczeństwa i
                    szybkości strony.</p>
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
    <h1 class="section-title">Kontakt</h1>
    <h3 class="section-sub-title">Napisz do mnie</h3>
    <p>Moja skrzynka jest zawsze otwarta, więc niezależnie od tego, czy masz pytanie lub po prostu się przywitać -
        odpiszę tak szybko jak to możliwe!
        <p>
            <form action="" method="POST">
                <div class="half-inputs">
                    <input class="email" name="email" type="email" placeholder="Email (wymagane)" required>
                    <input class="phone" name="phone" type="tel" placeholder="Numer telefonu" required>
                </div>
                <input class="topic" type="text" placeholder="Temat">

                <textarea class="message" name="message" id="" cols="30" rows="10"
                    placeholder="Treść wiadomości (wymagane)" required></textarea>

                <input class="resume send_btn" type="submit" value="Wyślij wiadomość">
            </form>
</section>


@endsection
