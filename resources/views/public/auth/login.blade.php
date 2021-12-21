<x-espace-public title="Connexion à la platforme">
    
    <div class=" wrapper d-flex justify-content-center align-items-center">
        <div class="col-lg-6">
            <x-flash-bag></x-flash-bag>
            <div class="card">
                <div class="row">
                    <div class="col-lg-6 img-bg"></div>
                    <div class="col-lg-6 p-5">
                        <h1 class="mb-5 fw-bold text-primary">{{__('login title')}}</h1>
                        {{ html()->form('POST', URL::full())->open() }}
                            <x-form-group label="{{__('login email')}}" class="mb-3 text-primary">
                                <input class="form-control" type="email" placeholder="{{__('login pemmail')}}" name="email" />
                            </x-form-group>

                            <x-form-group label="{{__('login mdp')}}" class="mb-3 text-primary">
                                <input class="form-control" type="password" placeholder="{{__('login pmdp')}}" name="password" />
                            </x-form-group>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="remember_token" id="remember">
                                <label class="form-check-label" for="remember">{{__('login remember')}}</label>
                            </div>

                            <x-errors />

                            <div class="d-grid gap-2 mb-3 mt-5">
                                <button class="btn btn-primary" type="submit">{{__('login submit')}}</button>
                            </div>
                        {{ html()->form()->close() }}

                        <div class="row justify-content-between">
                            <div class="col">
                                <small>
                                    {{__('login no-account')}}
                                    <a href="{{route('public.auth.register')}}">{{__('login register')}}</a>
                                </small>
                            </div>
                            <div class="col text-end">
                                <small>
                                    <a href="{{route('public.auth.register')}}">{{__('login password-forget')}}</a>
                                </small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-espace-public>