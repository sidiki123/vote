<!doctype html>
<html class="no-js" lang="fr">

    <head>
        @include('visiteur.partials.meta')
        @yield('title')

        @yield('style')
    </head>

<body data-spy="scroll" data-offset="120">
    {{-- <div class="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> --}}
    @include('sweetalert::alert')

        @include('visiteur.partials.header')
        @yield('content')
        @include('visiteur.partials.footer')
        <div class="go-top">
            <i class="fa fa-chevron-up"></i>
            <i class="fa fa-chevron-up"></i>
        </div>
        @yield('script')
	</body>
</html>
