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
        @if(!Request::is('sites*') || !Request::is('public/auth/login*') || !Request::is('public/auth/register*')  )
            <div class="position-fixed" style="bottom:50px; right: 50px;">
                <a class="btn-sm btn btn-outline-primary rounded-pill " href="{{route('sites')}}">
                <i class="fas fa-pencil-alt"></i> <small>Faire une demande</small>
                </a>
            </div>
        @endif
       
        <x-footer></x-footer>
    @else
        @if (Request::is('admin/auth*'))
            {{$slot}}
        @else
            <x-sidebar-admin></x-sidebar-admin>
            <div class="wrapper d-flex flex-column min-vh-100 bg-light">
                <x-header-admin></x-header-admin>
                <div class="body flex-grow-1 px-3">
                    {{$slot}}
                </div>
            </div>
        @endif
    @endif  
    
@endsection

@if (isset($javascripts))
    @push('javascripts')
        {{ $javascripts }}
    @endpush
@endif