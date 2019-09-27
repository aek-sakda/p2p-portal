<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('template.header')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include('template.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('template.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @include('template.body')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        @include('template.footer')

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('template.js')

</body>

</html>

