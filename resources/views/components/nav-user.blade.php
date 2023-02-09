<nav class="navbar sticky-sm-top" style="background-color: rgb(176,236,212)">
        {{-- <div class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Config::get('languages') [App::getLocale()] }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language )
                    @if($lang != App::getLocale())
                        <a class="dropdown-item" href="{{ route('lang.switch',$lang) }}">{{ $language }}</a>
                    @endif
                @endforeach
            </div>
        </div> --}}
        
        @auth
        <div class="container-fluid "> 
            <span class="mx-auto">
                <h1 class="navbar-brand mx-auto" style="font-size:5em">{{ __('app.Amazing E-Grocery') }}</h1>
            </span>
            <form action="/logout" method="POST">
                @csrf
                <x-localization></x-localization>
                <button class="btn btn-outline-dark" type="submit">{{ __('app.logout') }}</button>
            </form>
        </div>
        <div class="container-fluid p-3" style="background-color: rgb(246, 187, 114)">
            <span class="mx-auto">
                <div class="d-flex" >
                    <a href="/home" class="mx-5 fs-5 text-dark"style="text-decoration:none">{{ __('app.home') }}</a>
                    <a href="/cart/{{ auth()->user()->id }}" class="mx-5 fs-5 text-dark" style="text-decoration:none">{{ __('app.cart') }}</a>
                    <a href="/profile/{{ auth()->user()->id }}" class="mx-5 fs-5 text-dark" style="text-decoration:none">{{ __('app.profile') }}</a>
                </div>
            </span>
        </div>  
        @else 
        <span class="mx-auto">
            <h1 class="navbar-brand mx-auto" style="font-size:5em">{{ __('app.Amazing E-Grocery') }}</h1>
        </span>
        <div class="flex-end">
            <x-localization></x-localization>
                <div class="container-fluid"> 
                <a href="/view_login" class="btn btn-outline-black" style="backgroud-color:yellow">{{__('app.login')}} </a>
                <a href="/register" class="btn btn-outline-black" style="backgroud-color:yellow"> {{__('app.register') }} </a>
            </div>
        </div>
        @endauth
    </nav>