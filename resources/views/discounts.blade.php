@extends('layouts.index')

@section('content')
<section class="discounts">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.skidki')</h2>
      </div>
      @foreach ($discounts as $d)
      <div class="discount__wrapper basic-flex">
        <div class="discount__image">
          <img src="{{ Voyager::image($d->image) }}" alt="Girl">
        </div>
        <div class="discount__content">
          {{-- <h3>Акция и тп.</h3> --}}
          <span class="gold-text">{{ $d->translate(\App::getLocale())->title }}</span>
          <p>{{ $d->translate(\App::getLocale())->desc }}</p>
          <a href="/discount/{{ $d->id }}" class="discount__link">Узнать больше</a>
        </div>
      </div>
      @endforeach
    </div>
</section>
@endsection