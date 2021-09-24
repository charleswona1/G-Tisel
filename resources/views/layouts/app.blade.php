@extends('layout')

@section('title', $title ?? '')
@php
    $lang = App::getLocale();
@endphp
@section('body')
    <x-navbar></x-navbar>
    @if(Request::is($lang))
        {{$slot}}
    @else
        <div class="container mt-5">
            {{$slot}}
        </div>
    @endif
@endsection

@if (isset($javascripts))
    @push('javascripts')
        {{ $javascripts }}
    @endpush
@endif