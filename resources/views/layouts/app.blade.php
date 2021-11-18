@extends('layout')

@section('title', $title ?? '')
@php
    $lang = App::getLocale();
@endphp
@section('body')

    @if (!Request::is('admin*'))
        <x-navbar></x-navbar>
        <x-flash-bag></x-flash-bag>
        @if(Request::is('/') || Request::is('public/auth/login*') || Request::is('public/auth/register*')  )
            <x-flash-bag></x-flash-bag>
            {{$slot}}
        @else
            <div class="container mt-5">
                <x-flash-bag></x-flash-bag>
                {{$slot}}
            </div>
        @endif

        <x-footer></x-footer>
    @else
        <x-sidebar-admin></x-sidebar-admin>
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <x-header-admin></x-header-admin>
            <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                    {{$slot}}
                </div>
            </div>
        </div>
    @endif  
    
@endsection

@if (isset($javascripts))
    @push('javascripts')
        {{ $javascripts }}
    @endpush
@endif