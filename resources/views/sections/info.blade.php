<section class="why-you-should-choose  {{ \Request::path()=='informations'? 'courses-page': '' }} ">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.pochemu')</h2>
      </div>
      <img class="lozad" data-alt="">
      <div class="why-box">
        @foreach ($infos as $info)
        <div class="why__item" style="background-image:url({{ Voyager::image($info->image) }})">
          <h3>{{ $info->translate(\App::getLocale())->title }}</h3>
          <p>{{ $info->translate(\App::getLocale())->title }}</p>
          <span>0{{ $loop->iteration }}</span>
        </div> 
        @endforeach
      </div>
    </div>
  </section>