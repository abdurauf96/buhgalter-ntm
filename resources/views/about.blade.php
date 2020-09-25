@extends('layouts.index')

@section('content')
<section class="about">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>{{  $about->translate(\App::getLocale())->title }}</h2>
      </div>
      <div class="about-content-wrapper basic-flex">
        <div class="about-content">
          {!! $about->translate(\App::getLocale())->body !!}
        </div>
        <div class="about-image-wrapper">
          <img src="{{ Voyager::image($about->image) }}" alt="Person">
        </div>
      </div>
    </div>
  </section>
@endsection