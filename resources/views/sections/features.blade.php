<section class="reasons">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.pochemu')</h2>
      </div>
      <div class="reasons-box basic-flex">
        @foreach ($features as $f)
        <div class="reasons__item">
          <div class="reasons__item-top">
            <img class="lozad" data-src="{{ Voyager::image($f->icon) }}" alt="Reasons">
          </div>
          <div class="reasons__item-bottom">
            <h4 class="reasons__title">{{ $f->translate(\App::getLocale())->title }}</h4>
            <p class="reasons__description">{{ $f->translate(\App::getLocale())->description }}</p>
          </div>
        </div> 
        @endforeach
        
      </div>
    </div>
  </section>