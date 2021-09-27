@extends('layout')

@section('title', "Compte en attente d'activation")

@section('body')
    <div class=" h-100 d-flex justify-content-center align-items-center">
        <div class="col-lg-6">
            <div class="card p-5 d-flex flex-column justify-content-center align-items-center">
                <i class="fas fa-mail-bulk fa-9x mb-4"></i>
                <h2 class="mb-3 text-primary">
                    {{ __('verification check-email') }}
                </h2> 
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('verification resent-msg') }}
                    </div>
                @endif

                {{ __('verification check-mail') }}
                {{ __("verification don't receive") }}, <a
                            href="{{ route('verification.send') }}">{{ __('verification resent-mail') }}</a>.
            </div>
        </div>
    </div>
@endsection