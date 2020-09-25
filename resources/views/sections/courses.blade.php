<section class="courses">
    <div class="container">
      <div class="section__title basic-flex">
        <h2>@lang('messages.viber')</h2>
      </div>
      <div class="courses__box basic-flex">
        @foreach ($otherCategories as $other)
        <div href="#" class="courses__item">
          <img class="lozad" data-src="{{ Voyager::image($other->image) }}" alt="course-1">
          <div class="courses__bottom basic-flex">
            <span class="big-order-number">0{{ $loop->iteration }}</span>
            <h3>{{ $other->translate(\App::getLocale())->title }}</h3>
            <ul class="courses__list">
              @foreach ($other->courses as $course)
              
              <li>
                <span></span><a href="/course/{{ $course->id }}">{{ $course->translate(\App::getLocale())->title }}</a>
              </li>
              
              @endforeach
            </ul>
            <div class="course__price basic-flex">
              <span class="price-text">@lang('messages.price'):</span>
              <span class="price-amount">@lang('messages.ot') <span class="price-amount-number">{{ $other->price }}</span> сум</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="section__title basic-flex transition-between-course-boxes">
        <h2>@lang('messages.mejd')</h2>
      </div>

      <div class="courses__box courses__box--2 basic-flex">
        @foreach ($foreignCategories as $foreign)    
        <div  class="courses__item">
          <img class="lozad" data-src="{{ Voyager::image($foreign->image) }}" alt="course-3">
          <div class="courses__bottom basic-flex">
            <span class="big-order-number">0{{ $loop->iteration + 3 }}</span>
            <h3>{{$foreign->translate(\App::getLocale())->title }} </h3>
            <ul class="courses__list">
              @foreach ($foreign->courses as $course)
              <li>
 
                <span></span><a href="/course/{{ $course->id }}">{{ $course->translate(\App::getLocale())->title }}</a>
                
              </li>
              @endforeach
            </ul>
            <div class="course__price basic-flex">
              <span class="price-text">@lang('messages.price'):</span>
              <span class="price-amount">@lang('messages.ot') <span class="price-amount-number">{{ $foreign->price }}</span>сум </span>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>