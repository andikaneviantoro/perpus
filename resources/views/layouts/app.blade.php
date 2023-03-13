<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    @include('partials/css')

    
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        @include('partials/admin-header')
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        @include('partials/admin-header-mobile')
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        @yield('content')

        

    </div>

    @include('partials/script')

</body>

