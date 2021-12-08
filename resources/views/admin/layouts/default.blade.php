<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body>
    <div class="main-wrapper">
        @include('admin.includes.header')
        @include('admin.includes.sidebar')
            <div class="page-wrapper">
                @yield('content')
            </div>
        @include('admin.includes.footer')
    </div>
    <script src="{{asset('admin_assets/assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('admin_assets/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('admin_assets/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('admin_assets/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/apexchart/dsh-apaxcharts.js')}}"></script>

    <script src="{{asset('admin_assets/assets/plugins/simple-calendar/jquery.simple-calendar.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/calander.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/js/script.js')}}"></script>
</body>
</html>