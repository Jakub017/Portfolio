<footer class="footer">
    <p class="footer__text">{{ __('footer.text') }}</p>
    <div class="footer__links">
        <a class="footer__link" target="_blank" href="https://www.linkedin.com/in/jakub-lipinski/"><i
                class="fa-brands fa-linkedin"></i></a>
        <a class="footer__link" target="_blank" href="https://github.com/Jakub017"><i
                class="fa-brands fa-github-square"></i></a>
    </div>
    <form action="{{ route('set.locale') }}" method="POST" class="footer__form">
        @csrf
        <label class="footer__label" for="pl">
            <img class="footer__flag" src="{{asset('img/pl.png')}}" alt="Option 1">
            <input type="radio" class="footer__radio" name="locale" value="pl"
                onclick="document.querySelector('.footer__form').submit()">
        </label>
        <label class="footer__label" for="en">
            <img class="footer__flag" src="{{asset('img/en.png')}}" alt="Option 2">
            <input type="radio" class="footer__radio" name="locale" value="en"
                onclick="document.querySelector('.footer__form').submit()">
        </label>
    </form>
</footer>
