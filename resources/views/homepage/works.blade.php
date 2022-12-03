<section id="works">
    <h1 class="section-title">Portfolio</h1>
    <h3 class="section-sub-title">Moje najważniejsze projekty</h3>
    <div class="isotope">
        <button class="active" data-filter="html">AUTORSKI KOD</button>
        <button data-filter="wordpress">WORDPRESS</button>
        <!-- <button data-filter="prestashop">PRESTASHOP</button> -->
    </div>
    <div class="projects">
        <div class="project-card filter-visible" data-filter="html" data-image="justtag">
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

        <div class="project-card filter-visible changed-order" data-filter="html" data-image="invest">
            <div class="project-photo"></div>
            <div class="project-content">
                <h3 class="project-name">Invest tracker</h3>
                <ul class="used_tech">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Breeze</li>
                </ul>
                <p class="project-description">Strona internetowa prezentująca projekt oraz aplikacja pozwalająca na
                    śledzenie naszych inwestycji, poprzez dodawanie ich w prostym i przejrzystym panelu. Wszystkie kursy
                    są pobierane poprzez API.</p>
                <div class="project-buttons">
                    <a target="_blank" href="https://github.com/Jakub017/Invest-tracker"
                        class="project-link">Repozytorium
                        Github</a>
                    <a target="_blank" href="https://uusgvsrbeu.cfolks.pl/" class="project-link visit">Zobacz online <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>

            </div>
        </div>

        <div class="project-card" data-filter="wordpress" data-image="design">
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

        <div class="project-card changed-order" data-filter="wordpress" data-image="idea">
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
    <a href="{{ url('/projekty') }}" class="resume all">Zobacz wszystkie realizacje</a>
</section>
