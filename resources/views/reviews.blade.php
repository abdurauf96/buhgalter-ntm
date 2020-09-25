@extends('layouts.index')

@section('content')
@include('sections.reviews')
<section class="reviews-form">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.napishite')</h2>
      </div>
      <div class="form__wrapper">
        <form method="POST" action="/review" class="feedback-form">
          {{ csrf_field() }}
          <div class="inputs-wrapper basic-flex">
            <div class="user-info">
              <label for="name">@lang('messages.name2')</label>
              <input type="text" id="name" name="name" required> 
              <label for="phone" >@lang('messages.tel')</label>
              <input type="text" id="phone" name="phone"> 
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" > 
            </div>
            <div class="textarea-wrapper">
              <label for="feedback">@lang('messages.otziv'):</label>
              <textarea id="feedback" name="message" required></textarea>
            </div>
          </div>
          <button type="submit" class="feedback-send-btn btn">@lang('messages.send_otziv')</button>
        </form>
      </div>
    </div>
  </section>
  @endsection