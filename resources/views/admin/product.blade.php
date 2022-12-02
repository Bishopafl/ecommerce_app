<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        .page_title {
            font-size: 40px;
            text-align: center;
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
                    <div class="alert alert-info p-3">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif
                
                <div>
                    <h1 class="page_title">Add Product</h1>

                    <div class="row justify-content-md-center">
                        <div class="col-lg-6 col-offset-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Product Information</div>
                                    <hr>
                                    <form action="{{ url('/add_product') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Product title</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="title" placeholder="Enter the product title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Product Category</label>
                                            <div class="col-lg-9">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="inputGroupSelect01" name="category">
                                                      <option selected>Choose...</option>
                                                      @foreach ($category as $category_data)
                                                          <option value="{{ $category_data->category_name }}">{{ $category_data->category_name }}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Product description</label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" type="description" name="description" placeholder="Enter the product description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Product Price</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="number" name="price" placeholder="Enter the product price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">
                                                
                                                <span class="badge badge-danger p-2"><i class="fa fa-usd"></i> Discount Price</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="number" name="discount_price" min="0" class="form-control" placeholder="Enter the product discount price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Product Quantity</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="quantity" type="quantity" min="0" placeholder="Enter the product quantity">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Product Image</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="image" type="file">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row float-right">
                                            <div class="col-lg-12">    
                                                <input type="submit" class="btn btn-success" value="Save Changes">
                                                <div type="reset" class="btn btn-warning">Cancel</div>
                                            </div>
                                        </div>
                                    </form>
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