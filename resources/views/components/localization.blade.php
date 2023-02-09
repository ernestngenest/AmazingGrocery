<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ Config::get('languages') [App::getLocale()] }}
    </button>
    <ul class="dropdown-menu">
        @foreach (Config::get('languages') as $lang => $language )
            @if($lang != App::getLocale())
                <a class="dropdown-item" href="{{ route('lang.switch',$lang) }}">{{ $language }}</a>
            @endif
        @endforeach
    </ul>
</div>