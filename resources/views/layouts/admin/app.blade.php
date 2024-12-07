<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets-admin/images/logos/favicon.png') }}" />
    @include('layouts.admin.css')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Main Content -->
        <div class="body-wrapper">
            <div class="container-fluid">
                <!-- Header -->
                @include('layouts.admin.header')

                <!-- Content -->
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')

    <!-- JavaScript -->
    @include('layouts.admin.js')
</body>

</html>
