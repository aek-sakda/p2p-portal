<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('template_portal.header')

</head>

<body class="bg-gray-100">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('template_portal.navbar')

        <!-- Begin Page Content -->
        <div class="container">

            @include('template_portal.body')

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    @include('template_portal.footer')

</div>
<!-- End of Content Wrapper -->

@include('template_portal.js')

</body>

</html>
