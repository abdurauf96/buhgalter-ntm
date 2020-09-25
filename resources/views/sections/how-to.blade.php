<section class="how-to">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.kak')</h2>
      </div>
      <div class="steps-box basic-flex">
        @foreach ($process as $p)
            
        <div class="steps__item">
          <div class="steps__img">
            <img class="lozad" data-src="{{ Voyager::image($p->icon) }}" alt="Phone">
          </div>
          <h4 class="steps__title">{{ $p->translate(\App::getLocale())->title }}</h4>
          <p class="steps__description">{{ $p->translate(\App::getLocale())->desc }}</p>
        </div>
        @if(!$loop->last)
        <span class="transition-block"></span>
        @endif
        @endforeach
      </div>
    </div>
  </section>