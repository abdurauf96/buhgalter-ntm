<section class="about-section">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>{{ $about->translate(\App::getLocale())->title }}</h2>
      </div>
      <p class="about-description">{!! $about->translate(\App::getLocale())->body !!}</p>
      
      <div class="about__counters basic-flex">
        <div class="counters__item">
          <h4>{{ $about->employees }}</h4>
          <p>@lang('messages.employes')</p>
        </div>
        <div class="counters__item">
          <h4>{{ $about->specialists }}</h4>
          <p>@lang('messages.spes')</p>
        </div>
        <div class="counters__item">
          <h4>{{ $about->awards }}</h4>
          <p>@lang('messages.nagrad')
            </p>
        </div>
        <div class="counters__item">
          <h4>{{ $about->clients }}</h4>
          <p>@lang('messages.clients')</p>
        </div>
      </div>
    </div>
  </section>