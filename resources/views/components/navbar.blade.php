<meta name="csrf-token" content="{{ csrf_token() }}">
@php
    $lang = App::getLocale();
@endphp
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
            <li class="nav-item mx-3 {{ Request::is($lang.'/public/auth/register*') ? 'link-Active' : '' }}">
                <a class="nav-link {{ Request::is($lang.'/public/auth/register*')  ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="{{route('public.auth.register',$lang)}}">
                    <i class="fas fa-user-plus fa-2x mb-lg-1 me-3 me-lg-0"></i>
                    {{__('navbar register')}}
                </a>
            </li>
            <li class="nav-item mx-3 {{ Request::is($lang.'/login*') ? 'link-Active' : '' }}">
                <a class="nav-link {{ Request::is($lang.'/login*') ? 'active' : '' }} d-lg-flex flex-lg-column justify-content-center align-items-center" href="#">
                    <i class="fas fa-sign-in-alt fa-2x mb-lg-1 me-3 me-lg-0"></i>
                    {{__('navbar login')}}
                </a>
            </li>
            <li class="nav-item dropdown mx-3">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="mb-0 text-center d-none d-lg-block"><i class="fas fa-flag fa-2x"></i></p>
                    <i class="fas fa-flag fa-2x d-lg-none me-3 me-lg-0"></i>
                    {{__('navbar langue')}} : {{$lang == 'en'? 'en': 'fr'}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{route(Route::currentRouteName(), 'en')}}">
                            <img src="{{asset('assets/img/flagEn.png')}}" alt="{{__('navbar england')}}"> {{__('navbar england')}}
                        </a>
                    </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                        <a class="dropdown-item" href="{{route(Route::currentRouteName(), 'fr')}}">
                            <img src="{{asset('assets/img/flagFr.png')}}" alt="{{__('navbar french')}}"> {{__('navbar french')}}
                        </a>
                    </li>
                </ul>
              </li>
        </ul>
        </div>
    </div>
</nav>



  