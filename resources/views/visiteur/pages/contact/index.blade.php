@extends('visiteur.layout.master')
    @section('title')
    <title>Nous contacter  </title>
    @endsection

    @section('style')
    @include('visiteur.pages.contact.style')
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    @endsection

    @section('content')
        @include('visiteur.pages.contact.breadcrumb')
        @include('visiteur.pages.contact.area')
    @endsection

    @section('script')
    @include('visiteur.pages.contact.script')
    @endsection









