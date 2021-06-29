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
    <div class="subscribe-area container" style="background-color: green">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
                <div class="subscribe-content">
                    <h2 style="color: white">Vous pouvez renverser la tendance en votant au maximum pour votre candidat</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                    <button class="default-btn">
                        Voter pour un candidat
                    </button>
            </div>
        </div>
    </div>
    {{-- @include('visiteur.pages.home.project') --}}
    @include('visiteur.pages.home.faq')


    @endsection

    @section('script')
    @include('visiteur.pages.home.script')
    @endsection
