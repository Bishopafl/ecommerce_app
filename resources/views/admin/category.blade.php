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

        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid purple;
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
                    <div class="alert alert-info p-3">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="center_me">
                    <h1 class="header-font">Add Category</h1>
                </div>
                <div class="row">
                
                    <div class="col-lg-6 col-md-6">
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
                                        <button type="submit" class="btn btn-light px-5"><i class="icon-check"></i> Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                            <h5 class="card-title">Category List</h5>
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_category_data as $category_data)
                                    <tr>    
                                        <th scope="row">{{ $category_data->id }}</th>
                                        <td>{{ $category_data->category_name }}</td>
                                        <td> <a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{ url('delete_category', $category_data->id) }}">Delete</a> </td>
                                    @endforeach
                                    
    
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <!--End wrapper-->
    @include('admin.script')
</body>
</html>