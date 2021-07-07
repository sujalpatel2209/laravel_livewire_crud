@extends('app')

@section('css')
    @livewireStyles
@stop

@section('header')
    @livewire('header')
@stop

@section('sidebar')
    @livewire('sidebar')
@stop

@section('main-content')
    @livewire('main-content')
@stop

@section('script')
    @livewireScripts
@stop
