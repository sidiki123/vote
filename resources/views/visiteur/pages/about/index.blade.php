@extends('visiteur.layout.master')
    @section('title')
    <title>A propos du concours</title>
    @endsection

    @section('style')
    @include('visiteur.pages.about.style')
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    @endsection

    @section('content')
        @include('visiteur.pages.about.breadcrumb')
        @include('visiteur.pages.about.history')
        @include('visiteur.pages.about.stats')
    @endsection

    @section('script')
    @include('visiteur.pages.about.script')
    @endsection




