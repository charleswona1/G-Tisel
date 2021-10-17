<meta name="csrf-token" content="{{ csrf_token() }}">
@php
    $lang = App::getLocale();
    \Debugbar::info(Auth::user());
@endphp

@if (!Auth::check())
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white">
        <div class="container-lg">
            <a class="navbar-brand" href="#">G-Tisel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3 {{ Request::is($lang)  ? 'link-Active' : '' }} ">
                    <a class="nav-link {{ Request::is($lang)  ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('index',$lang)}}">
                        <i class="icon fa fa-home fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar home')}}
                    </a>
                </li>
                <li class="nav-item mx-3 {{ Request::is($lang.'/sites*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/sites*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('sites',$lang)}}">
                        <i class="fas fa-bolt fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar site')}}
                    </a>
                </li>
                <li class="nav-item mx-3 {{ Request::is($lang.'/documentation*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/documentation*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('sites',$lang)}}">
                        <i class="fas fa-book fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar condition')}}
                    </a>
                </li>
                <li class="nav-item mx-3 {{ Request::is($lang.'/public/auth/register*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/public/auth/register*')  ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('public.auth.register',$lang)}}">
                        <i class="fas fa-user-plus fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar register')}}
                    </a>
                </li>
                <li class="nav-item mx-3 {{ Request::is($lang.'/public/auth/login*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/public/auth/login*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('public.auth.login',$lang)}}">
                        <i class="fas fa-sign-in-alt fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar login')}}
                    </a>
                </li>
                @php
                    \Debugbar::info("route");
                    \Debugbar::info(Route::currentRouteName())
                @endphp
                {{-- <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="mb-0 text-center d-none d-lg-block"><i class="fas fa-flag fa-2x"></i></p>
                        <i class="fas fa-flag fa-2x d-lg-none me-3 me-lg-0"></i>
                        {{__('navbar langue')}} : {{$lang == 'en'? 'en': 'fr'}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item lang-en" href="{{route(Route::currentRouteName(), 'en')}}">
                                <img src="{{asset('assets/img/flagEn.png')}}" alt="{{__('navbar england')}}"> {{__('navbar england')}}
                            </a>
                        </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                            <a class="dropdown-item lang-fr" href="{{route(Route::currentRouteName(), 'fr')}}">
                                <img src="{{asset('assets/img/flagFr.png')}}" alt="{{__('navbar french')}}"> {{__('navbar french')}}
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
            </div>
        </div>
    </nav>
@endif

@if (Auth::check())
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white">
        <div class="container-lg">
            <a class="navbar-brand" href="#">G-Tisel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item mx-3 {{ Request::is($lang.'/public*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/public*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('public.site',$lang)}}">
                        <i class="fas fa-bolt fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar site')}}
                    </a>
                </li>
                <li class="nav-item mx-3 {{ Request::is($lang.'/public/sites*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/public/sites*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('public.my-sites',$lang)}}">
                        <i class="far fa-stream fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar my-site')}}
                    </a>
                </li>
                <li class="nav-item mx-3 {{ Request::is($lang.'/public/documents*') ? 'link-Active' : '' }}">
                    <a class="nav-link {{ Request::is($lang.'/public/documents*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('sites',$lang)}}">
                        <i class="fas fa-book fa-2x mb-lg-1 me-3 me-lg-0"></i>
                        {{__('navbar condition')}}
                    </a>
                </li>
                <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="mb-0 text-center d-none d-lg-block"><i class="far fa-user-circle fa-2x"></i></p>
                        <i class="far fa-user-circle fa-2x d-lg-none me-3 me-lg-0"></i>
                        {{Auth::user()->user_name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="{{ Request::is($lang.'/public/account*') ? 'fw-bold' : '' }}">
                            <a class="dropdown-item lang-en" href="{{route('public.account.index',$lang)}}">
                                <i class="far fa-user-circle me-2"></i> {{__('navbar profile')}} 
                            </a>
                        </li>
                    <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item lang-en" href="{{route('public.auth.logout', $lang)}}">
                                <i class="far fa-sign-out-alt me-2"></i> {{__('navbar logout')}} 
                            </a>
                        </li>
                    </ul>
                </li>
               
                {{-- <li class="nav-item dropdown mx-3">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="mb-0 text-center d-none d-lg-block"><i class="fas fa-flag fa-2x"></i></p>
                        <i class="fas fa-flag fa-2x d-lg-none me-3 me-lg-0"></i>
                        {{__('navbar langue')}} : {{$lang == 'en'? 'en': 'fr'}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item lang-en" href="{{route(Route::currentRouteName(), 'en')}}">
                                <img src="{{asset('assets/img/flagEn.png')}}" alt="{{__('navbar england')}}"> {{__('navbar england')}}
                            </a>
                        </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                            <a class="dropdown-item lang-fr" href="{{route(Route::currentRouteName(), 'fr')}}">
                                <img src="{{asset('assets/img/flagFr.png')}}" alt="{{__('navbar french')}}"> {{__('navbar french')}}
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
            </div>
        </div>
    </nav>
@endif


  