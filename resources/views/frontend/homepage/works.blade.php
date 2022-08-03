<section id="works">
    <h1 class="section-title">Portfolio</h1>
    <h3 class="section-sub-title">Moje najważniejsze projekty</h3>
    <div class="projects">
      <div class="project-card">
        <div class="project-photo">
          <img src="{{ asset('img/justtag.png') }}" alt="">
        </div>
        <div class="project-content">
          <h3 class="project-name">Browar Louve</h3>
          <ul class="used_tech">
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Laravel</li>
            <li>SCSS</li>
            <li>BEM</li>
          </ul>
          <p class="project-description">Strona browaru domowego Louve. Strona posiada wiele podstron poświęconych warkom. Wyposażona została w panel administratora, w którym klient może zmieniać, dodawać i ususwać wszysrtkie treści znajdujące się na stronie.</p>
            <div class="project-buttons">
              <a target="_blank" href="https://github.com/Jakub017/BrowarLouve" class="project-link">Zobacz na Githubie</a>
              <a target="_blank" href="https://jakub017.github.io/BrowarLouve/" class="project-link visit">Zobacz online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          
        </div>
      </div>

      <div class="project-card">
        <div class="project-photo">
          <img src="{{ asset('img/design_alive.png') }}" alt="">
        </div>
        <div class="project-content">
          <h3 class="project-name">Design Alive</h3>
          <ul class="used_tech">
            <li>Wordpress</li>
            <li>PHP</li>
            <li>Obsługa</li>
          </ul>
          <p class="project-description">DesignAlive to portal z artykułami ze świata szeroko pojętego designu. W tym projekcie zajmowałem się utrzymywaniem aktualności i bezpieczeństwa strony, konserwacją oraz wprowadzaniem nowych rozwiązań do portalu.</p>
            <div class="project-buttons">
              <a target="_blank" href="https://www.designalive.pl/" class="project-link visit">Zobacz online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          
        </div>
      </div>
     
      <div class="project-card">
        <div class="project-photo">
          <img src="{{ asset('img/weather_app.webp') }}" alt="">
        </div>
        <div class="project-content">
          <h3 class="project-name">Weather App</h3>
          <ul class="used_tech">
            <li>React</li>
            <li>Css</li>
            <li>API</li>
          </ul>
          <p class="project-description">My first API application, data is taken from Open weather Map. The application
            displays the temperature and some additional details about the weather in the selected city. Built with
            create-react-app.</p>
            <div class="project-buttons">
              <a target="_blank" href="https://github.com/Jakub017/Weather-app" class="project-link">Zobacz na Githubie</a>
              <a href="_blank" href="#" class="project-link visit">Zobacz online <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          
        </div>
      </div>
     
    </div>
    <a href="{{ url('/projekty') }}" class="resume all">Zobacz wszystkie realizacje</a>
  </section>