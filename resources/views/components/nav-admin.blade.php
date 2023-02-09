<nav class="navbar sticky-sm-top" style="background-color: rgb(176,236,212)">
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
                    <a href="/cart/{{ auth()->user()->id }}" class="mx-5 fs-5 text-dark" style="text-decoration:none">{{ __('app.Cart') }}</a>
                    <a href="/profile/{{ auth()->user()->id }}" class="mx-5 fs-5 text-dark" style="text-decoration:none">{{ __('app.Profile') }}</a>
                    <a href="/admin/manage" class="mx-5 fs-5 text-dark" style="text-decoration:none">{{ __('app.Account Maintanance') }}</a>
            </div>
        </span>
    </div>  
</nav>