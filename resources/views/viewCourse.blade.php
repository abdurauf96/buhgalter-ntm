@extends('layouts.index')

@section('content')
<section class="about">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>{{  $course->translate(\App::getLocale())->title }}</h2>
      </div>
      <div class="about-content-wrapper basic-flex">
        <div class="">
          {!! $course->translate(\App::getLocale())->body !!}
        </div>
       
      </div>
    </div>
  </section>
@endsection