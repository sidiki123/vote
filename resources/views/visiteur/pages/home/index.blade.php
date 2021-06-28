@extends('visiteur.layout.master')
    @section('title')
    <title>Accueil  </title>
    @endsection

    @section('style')
    @include('visiteur.pages.home.style')
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    @endsection

    @section('content')

    @include('visiteur.pages.home.slider')
    @include('visiteur.pages.home.topThree')
    {{-- @include('visiteur.pages.home.project') --}}
    @include('visiteur.pages.home.faq')


    @endsection

    @section('script')
    @include('visiteur.pages.home.script')
    @endsection
