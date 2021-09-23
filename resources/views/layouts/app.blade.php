@extends('layout')

@section('title', $title ?? '')

@section('body')
    <x-navbar></x-navbar>
@endsection

@if (isset($javascripts))
    @push('javascripts')
        {{ $javascripts }}
    @endpush
@endif