<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>

<body class="bg-theme bg-theme1">
    <!-- Start wrapper-->
    <div id="wrapper">
        <!--Start sidebar-wrapper-->
        @include('admin.sidebar')
        <!--End sidebar-wrapper-->
        <!--Start topbar header-->
        @include('admin.header')
        <!--End topbar header-->
        <div class="clearfix"></div>
        @include('admin.body')
    </div>
    <!--End wrapper-->
    @include('admin.script')
</body>
</html>