
<ul class="navbar__menu basic-flex">
    @foreach($items as $item)
    <li class="menu__item">
        <a href="{{ $item->url }}" class="menu__link {{  '/'.\Request::path()==$item->url ? 'menu__link--active' : ''  }} ">  {{ $item->getTranslatedAttribute('title', \App::getLocale()) }}</a>
    </li>
    @endforeach
</ul>