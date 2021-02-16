<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        {{--    Custom Theme CSS     --}}
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}">
        <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">

        <!-- vector map CSS -->
        <link href="{{asset('assets/vendors/vectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

        <!-- Data Table CSS -->
        <link href="{{asset('assets/vendors/datatables.net-dt/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Toggles CSS -->
        <link href="{{asset('assets/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

        <!-- Toastr CSS -->
        <link href="{{asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{asset('assets/dist/css/style.css?v=1')}}" rel="stylesheet" type="text/css">


        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        {{--    Custom Theme CSS     --}}
        <!-- jQuery -->
        <script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>

        <!-- Toastr JS -->
        <script src="{{asset('assets/vendors/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

        <!-- Slimscroll JavaScript -->
        <script src="{{asset('assets/dist/js/jquery.slimscroll.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('assets/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <!-- FeatherIcons JavaScript -->
        <script src="{{asset('assets/dist/js/feather.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('assets/vendors/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('assets/vendors/morris.js/morris.min.js')}}"></script>

        <!-- EChartJS JavaScript -->
        <script src="{{asset('assets/vendors/echarts/dist/echarts-en.min.js')}}"></script>

        <!-- Counter Animation JavaScript -->
        <script src="{{asset('assets/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <!-- Sparkline JavaScript -->
        <script src="{{asset('assets/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

        <!-- Vector Maps JavaScript -->
        <script src="{{asset('assets/vendors/vectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
        <script src="{{asset('assets/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('assets/dist/js/vectormap-data.js')}}"></script>

        <!-- Owl JavaScript -->
        <script src="{{asset('assets/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

        <!-- Init JavaScript -->
{{--        <script src="{{asset('assets/dist/js/init.js')}}"></script>--}}
{{--        <script src="{{asset('assets/dist/js/dashboard-data.js')}}"></script>--}}


    </head>
    <body class="font-sans antialiased">
    @inertia
    </body>
</html>
