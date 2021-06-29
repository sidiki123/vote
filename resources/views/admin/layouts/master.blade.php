<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gest'Couture</title>

    @include('admin.layouts.styles')
    <style>
        .popover {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1060;
      display: block;
      max-width: 276px;
      font-family: "Nunito", sans-serif;
      font-style: normal;
      font-weight: 400;
      line-height: 1.6;
      text-align: left;
      text-align: start;
      text-decoration: none;
      text-shadow: none;
      text-transform: none;
      letter-spacing: normal;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: 0.7875rem;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.3rem;
    }

    .popover .arrow {
      position: absolute;
      display: block;
      width: 1rem;
      height: 0.5rem;
      margin: 0 0.3rem;
    }

    .popover .arrow::before,
    .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid;
    }

    .bs-popover-top,
    .bs-popover-auto[x-placement^=top] {
      margin-bottom: 0.5rem;
    }

    .bs-popover-top > .arrow,
    .bs-popover-auto[x-placement^=top] > .arrow {
      bottom: calc(-0.5rem - 1px);
    }

    .bs-popover-top > .arrow::before,
    .bs-popover-auto[x-placement^=top] > .arrow::before {
      bottom: 0;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-top > .arrow::after,
    .bs-popover-auto[x-placement^=top] > .arrow::after {
      bottom: 1px;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: #fff;
    }

    .bs-popover-right,
    .bs-popover-auto[x-placement^=right] {
      margin-left: 0.5rem;
    }

    .bs-popover-right > .arrow,
    .bs-popover-auto[x-placement^=right] > .arrow {
      left: calc(-0.5rem - 1px);
      width: 0.5rem;
      height: 1rem;
      margin: 0.3rem 0;
    }

    .bs-popover-right > .arrow::before,
    .bs-popover-auto[x-placement^=right] > .arrow::before {
      left: 0;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-right > .arrow::after,
    .bs-popover-auto[x-placement^=right] > .arrow::after {
      left: 1px;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: #fff;
    }

    .bs-popover-bottom,
    .bs-popover-auto[x-placement^=bottom] {
      margin-top: 0.5rem;
    }

    .bs-popover-bottom > .arrow,
    .bs-popover-auto[x-placement^=bottom] > .arrow {
      top: calc(-0.5rem - 1px);
    }

    .bs-popover-bottom > .arrow::before,
    .bs-popover-auto[x-placement^=bottom] > .arrow::before {
      top: 0;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-bottom > .arrow::after,
    .bs-popover-auto[x-placement^=bottom] > .arrow::after {
      top: 1px;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: #fff;
    }

    .bs-popover-bottom .popover-header::before,
    .bs-popover-auto[x-placement^=bottom] .popover-header::before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: 1rem;
      margin-left: -0.5rem;
      content: "";
      border-bottom: 1px solid #f7f7f7;
    }

    .bs-popover-left,
    .bs-popover-auto[x-placement^=left] {
      margin-right: 0.5rem;
    }

    .bs-popover-left > .arrow,
    .bs-popover-auto[x-placement^=left] > .arrow {
      right: calc(-0.5rem - 1px);
      width: 0.5rem;
      height: 1rem;
      margin: 0.3rem 0;
    }

    .bs-popover-left > .arrow::before,
    .bs-popover-auto[x-placement^=left] > .arrow::before {
      right: 0;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: rgba(0, 0, 0, 0.25);
    }

    .bs-popover-left > .arrow::after,
    .bs-popover-auto[x-placement^=left] > .arrow::after {
      right: 1px;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: #fff;
    }

    .popover-header {
      padding: 0.5rem 0.75rem;
      margin-bottom: 0;
      font-size: 0.9rem;
      background-color: #f7f7f7;
      border-bottom: 1px solid #ebebeb;
      border-top-left-radius: calc(0.3rem - 1px);
      border-top-right-radius: calc(0.3rem - 1px);
    }

    .popover-header:empty {
      display: none;
    }

    .popover-body {
      padding: 0.5rem 0.75rem;
      color: #212529;
    }

    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('admin.layouts.topbar')

                @yield('content')

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('admin.layouts.scrollTo')

    @include('admin.layouts.logoutModal')

    @include('admin.layouts.scripts')
<script>
    $(function() {
  //----- OPEN
  $('[pd-popup-open]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('pd-popup-open');
      $('[pd-popup="' + targeted_popup_class + '"]').fadeIn(100);

      e.preventDefault();
  });

  //----- CLOSE
  $('[pd-popup-close]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('pd-popup-close');
      $('[pd-popup="' + targeted_popup_class + '"]').fadeOut(200);

      e.preventDefault();
  });
});
  </script>

</body>

</html>


