
    @foreach($items as $item)
   
    <a href="{{ $item->url }}" >{{ $item->getTranslatedAttribute('title', \App::getLocale()) }}</a>
    
    @endforeach
