<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta property="og:title" content="Fergana Audit Progress">
  <meta property="og:type" content="Educational and business">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fergana Audit Progress</title>
  <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <div class="regform order-call-modal">
    <div class="container">
      <button class="btn regform-cancel order-call-cancel-btn">x</button>
      <h3 class="regform__title">@lang('messages.zakazat')</h3>
      <p class="regform__description">@lang('messages.svyazat')</p>
      <form method="POST" action="/callback" class="reg-form">
        {{ csrf_field() }}
        <label><input name="name" type="text" placeholder="Ваше имя:" required></label>
        <label><input name="phone" type="text" placeholder="Номер телефона:" required></label>
        <button type="submit" class="btn reg-form-submit-btn"> @lang('messages.send') </button>
      </form>
    </div>
  </div>
  <div class="regform reg-for-course-modal">
    <div class="container">
      <button class="btn regform-cancel reg-for-course-cancel-btn">x</button>
      <h3 class="regform__title">@lang('messages.ostavte')</h3>
      <p class="regform__description">@lang('messages.otvetit')</p>
      <form method="POST" class="reg-form" action="/callback">
        {{ csrf_field() }}
        <label><input type="text" name="name" placeholder="@lang('messages.name'):" required></label>
        <label><input type="text" name="phone" placeholder="@lang('messages.phone'):" required></label>
        <button type="submit" class="btn reg-form-submit-btn">@lang('messages.poluchit')</button>
      </form>
    </div>
  </div>
  <div class="layer"></div>
  <header class="main-header">
    <div class="container">
      <div class="header__top basic-flex">
        <a href="/" class="logo">
          <img class="lozad logo__img" data-src="/img/logo.png" alt="Logo">
        </a>
        <div class="contacts-box">
          <h4>audit.progress@mail.ru </h4>
          <a href="mailto:audit.progress@mail.ru">@lang('messages.napisat')</a>
        </div>
        <div class="contacts-box">
          <h4>+998 (99) 851-80-13</h4>
          <button class="btn order-call-btn" href="tel:+998998518013">@lang('messages.zvonok')</button class="btn order-call-btn">
        </div>
        <a href="#" class="enter-to-webinar">@lang('messages.voyti')</a>
        <div class="languages">
          @if (\App::getLocale()=='ru')
          <a href="#" type="button" class="btn language__option language__option--active">РУ</a>
            <div class="languages__list">
              <a href="/lang/o`z" type="button" class="btn language__option language__option--uz" data-status="disabled">O'Z</a>
            </div>
          @else
          <a href="#" type="button" class="btn language__option language__option--active">O`Z</a>
            <div class="languages__list">
              <a href="/lang/ru" type="button" class="btn language__option " data-status="disabled">РУ</a>
            </div>
          @endif
          
        </div> 
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <button type="button" class="btn btn-menu"><span class="hamburger"></span></button>
        <nav class="navbar">
          {{ menu('main', 'layouts.menu') }}
          <div class="responsive-box-inside-navbar">
            <div class="contacts-box">
              <h4>audit.progress@mail.ru</h4>
              <a href="mailto:audit.progress@mail.ru">@lang('messages.napisat')</a>
            </div>
            <div class="contacts-box">
              <h4>+998 (99) 851-80-13</h4>
              <a class="btn order-call-btn">@lang('messages.zvonok')</a>
            </div>
            <a href="#" class="enter-to-webinar">@lang('messages.voyti') </a>
          </div>
        </nav>
        <div class="header__slider">
          @foreach ($sliders as $slid)
          <div class="slider__wrapper">
            <div class="slide">
              <h1 class="slide__title">{{ $slid->translate(\App::getLocale())->title }}</h1>
              <p class="slide__description">{{ $slid->translate(\App::getLocale())->desc }}</p>
            </div>
            <button type="button" class="btn reg-for-course-btn">{{ $slid->translate(\App::getLocale())->button }}</button>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </header>
  <main>
    
    @yield('content')

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14451.664125144485!2d71.78024722619084!3d40.406898183209016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65de632b6ed763bf!2sFerghana%20Audit%20Progress!5e0!3m2!1suz!2s!4v1590567518754!5m2!1suz!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>

  </main>

<footer class="main-footer">
  <div class="footer__top">
    <div class="container">
      <div class="footer__top-wrapper basic-flex">
        <div class="about-company">
          <h4>@lang('messages.about')</h4>
          <p>@lang('messages.about_comp')</p>
        </div>
        <div class="contact-details">
          <h4>@lang('messages.call')</h4>
          <a href="mailto:audit.progress@mail.ru">audit.progress@mail.ru</a>
          <a href="tel:+998998518013">+998 (99) 851-80-13</a>
        </div>
        <div class="site-navigation">
          <h4>@lang('messages.navigat')</h4>
          <div class="navigation-links basic-flex">
            {{ menu('footer_menu', 'layouts.footer_menu') }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="footer__bottom-wrapper basic-flex">
        <form method="GET" class="search-form" action="/search">
          {{ csrf_field() }}
          <input class="search-input" name="q" type="text" placeholder="Поиск">
          <button class="search-btn btn" type="submit"></button>
        </form>
        <p class="copyright">Разработка сайта - студия <span>webmasters</span> 2020 год</p>
        <ul class="social-links basic-flex">
          <li><a href="#"><img class="lozad" data-src="/img/telegram.png" alt="Telegram"></a></li>
          <li><a href="#"><img class="lozad" data-src="/img/instagram.png" alt="Instagram"></a></li>
          <li><a href="#"><img class="lozad" data-src="/img/facebook.png" alt="Facebook"></a></li>
          <li><a href="#"><img class="lozad" data-src="/img/twitter.png" alt="Twitter"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script defer src="/js/jquery-3.5.1.min.js"></script>
<script defer src="/js/lozad.min.js"></script>
<script defer src="/js/jquery.fancybox.min.js"></script>
<script defer src="/js/slick.min.js"></script>
<script defer src="/js/main.js"></script>

</body>
</html>