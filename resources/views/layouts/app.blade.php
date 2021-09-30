@extends('layout')

@section('title', $title ?? '')
@php
    $lang = App::getLocale();
@endphp
@section('body')
    <x-navbar></x-navbar>
    <x-flash-bag></x-flash-bag>
    @if(Request::is($lang) || Request::is($lang.'/public/auth/login*') || Request::is($lang.'/public/auth/register*')  )
        <x-flash-bag></x-flash-bag>
        {{$slot}}
    @else
        <div class="container mt-5">
            <x-flash-bag></x-flash-bag>
            {{$slot}}
        </div>
    @endif
@endsection

@if (isset($javascripts))
    @push('javascripts')
        {{ $javascripts }}
    @endpush
@endif