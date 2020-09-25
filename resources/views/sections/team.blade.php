<section class="our-team">
    <div class="container">
     <div class="section__title basic-flex">
       <h2>@lang('messages.nasha')</h2>
     </div>
     <p class="greeting-text">@lang('messages.dobro')</p>
     <div class="gallery__slider basic-flex">
       @foreach ($workers as $w)
       <div class="team__member">
        <img class="lozad" data-src="{{ Voyager::image($w->image) }}" alt="Andrey">
        <h4>{{ $w->translate(\App::getLocale())->name }}</h4>
        <p>{{ $w->translate(\App::getLocale())->position }}</p>
      </div>  
       @endforeach
     </div>
    </div>
   </section>