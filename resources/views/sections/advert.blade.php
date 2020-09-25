<section class="ads-block" style="background-image:url({{ Voyager::image($ad->image) }})">   
    <h3 class="ads__title">
      {{ $ad->translate(\App::getLocale())->title }}
    </h3>
    <p class="ads__description"> {!! $ad->translate(\App::getLocale())->body !!} </p>
  </section>