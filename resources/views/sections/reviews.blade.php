<section class="feedbacks  {{ \Request::path()!='/'? 'reviews-page' : '' }}">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.otzivi')</h2>
      </div>
      <div class="feedbacks__slider basic-flex">
        @foreach ($reviews as $rev)
        <div class="feedbacks__item">
          <span></span>
          <img class="lozad" data-src="{{ Voyager::image($rev->image) }}" alt="Andrey">
          <h5>{{ $rev->translate(\App::getLocale())->name }}</h5>
          <p>{{ $rev->translate(\App::getLocale())->message }}
          </p>
        </div>
        @endforeach
      </div>
    </div>
  </section>