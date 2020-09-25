<section class="partners">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.nashi')</h2>
      </div>
      <div class="partners-box basic-flex">
        @foreach ($partners as $p)
        <div class="partners__item">
          <img class="lozad" data-src="{{ Voyager::image($p->image) }}" alt="Parnter-1">
        </div>
        @endforeach  
      </div>
    </div>
  </section>