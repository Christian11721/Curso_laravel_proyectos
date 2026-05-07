@foreach (Config::get('languages') as $lang =>$languages)
@if($lang != App::getLocale())
<a href="{{ route('lang', $lang) }}">{{ $languages }}</a>
    @endif
@endforeach
