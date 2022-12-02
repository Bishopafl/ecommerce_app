<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Dashtreme Admin</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="index.html">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ url('view_category') }}">
                <i class="zmdi zmdi-invert-colors"></i> <span>Category</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="zmdi zmdi-format-list-bulleted"></i>
                <span>Products</span>
                <i class="zmdi zmdi-chevron-right"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a href="{{ url('/view_product') }}" class="nav-link">Add Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Show Products</a>
                    </li>
                </ul>
            </div>
        </li>

       

    </ul>

</div>