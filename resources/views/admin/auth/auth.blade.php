<x-admin title="login">
    <div class="main-wrapper d-flex flex-column justify-content-center align-items-center">
        
        <div class="col-lg-4 rounded bg-white p-5">
                <x-flash-bag></x-flash-bag>
                <h1 class="mb-3 fw-bold" style="color: #5491F5">{{__('login title')}}</h1>
                {{ html()->form('POST', URL::full())->open() }}
                    <x-form-group label="{{__('login email')}}" class="mb-3" style="color: #5491F5">
                        <input class="form-control" type="email" placeholder="{{__('login pemmail')}}" name="email" />
                    </x-form-group>

                    <x-form-group label="{{__('login mdp')}}" class="mb-3" style="color: #5491F5">
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

                <div class="row justify-content-end">
                    <div class="col text-end">
                        <small>
                            <a href="{{route('public.auth.register')}}" style="color: #5491F5">{{__('login password-forget')}}</a>
                        </small>
                    </div>
                </div>
        </div>    
    </div>
</x-admin>