<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        .center_me {
            text-align: center;
            padding-top: 40px; 
        }

        .header-font {
            font-size: 40px;
            padding-bottom: 40px;   
        }
    </style>
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
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="center_me">
                    <h1 class="header-font">Add Category</h1>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">What is the Category information?</div>
                        <hr>
                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="input-1">Category Name</label>
                                <input type="text" name="category" class="form-control" id="input-1" placeholder="Write category name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--End wrapper-->
    @include('admin.script')
</body>
</html>