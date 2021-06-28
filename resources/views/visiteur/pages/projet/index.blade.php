@extends('visiteur.layout.master')
    @section('title')
    <title>A propos du concours</title>
    @endsection

    @section('style')
    @include('visiteur.pages.projet.style')
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    @endsection

    @section('content')
        @include('visiteur.pages.projet.breadcrumb')
        @include('visiteur.pages.projet.list')
    @endsection

    @section('script')
    @include('visiteur.pages.projet.script')
    @endsection


