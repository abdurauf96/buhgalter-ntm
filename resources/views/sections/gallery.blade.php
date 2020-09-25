<section class="gallery">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.gallery')</h2>
      </div>
      <p class="greeting-text">@lang('messages.gallery_desc')</p>
      <div class="gallery__slider basic-flex">
        @foreach ($images as $i)
        <a data-fancybox="gallery" href="{{ Voyager::image($i->image) }}" class="gallery__item">
          <img class="lozad" data-src="{{ Voyager::image($i->image) }}" alt="Gallery01">
        </a>
        @endforeach
      </div>
    </div>
  </section>