@extends('layouts.index')

@section('content')
<section class="about">
    <div class="container">
        <h2>@lang('messages.rez'): {{ count($results) }}</h2>
        @foreach ($results as $res)
        <div class="section__title basic-flex">
            <h2>{{  $res->translate(\App::getLocale())->title }}</h2>
          </div>
          <div class="about-content-wrapper basic-flex">
            <div class="">
              {!! $res->translate(\App::getLocale())->body !!}
            </div>
           
          </div>
        @endforeach
      
    </div>
  </section>
@endsection