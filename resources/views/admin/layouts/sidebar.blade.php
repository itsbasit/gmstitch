<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #162B45">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <img src="{{ asset('/brandlogo.png') }}" alt="registerlogo" width="60" height="60">

        <span class="brand-text font-weight-light">SM Tailors & Drapers</span>
    </a>

    <!-- Sidebar -->
    {{-- <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/brandlogo.png') }}" alt="registerlogo" width="200" height="200">

            </div>
            <div class="info">
                <a href="#" class="d-block">Muhammad Saim</a>
            </div>
        </div> --}}

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item bg-warning">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>


            <li class="nav-item bg-success text-warning">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-alt"></i>
                    <p>
                        Employee
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item menu-open">
                        <a href="{{ Route('employee.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                EMPLOYEE LIST
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('employeerecord.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                EMPLOYEE RECORD
                            </p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item bg-danger text-warning">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Customer
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                    </p>
                </a>
                <ul class="nav nav-treeview bg-info text-white">

                    <li class="nav-item menu-open bg-warning">
                        <a href="{{ route('customer.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                Customer RECORD
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open bg-warning">
                        <a href="{{ route('invoice.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                Invoice
                            </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item menu-open bg-warning">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                Darzi Delivered
                            </p>
                        </a>
                    </li> --}}

                </ul>
            </li>
            <li class="nav-item bg-info text-dark">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                        STOCK
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                    </p>
                </a>
                <ul class="nav nav-treeview  text-dark">
                    <li class="nav-item menu-open">
                        <a href="{{ route('stockcustomer.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Stock Customer
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="{{ route('stock.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                Stock
                            </p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item bg-secondary text-warning">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                        Ledger
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                    </p>
                </a>
                <ul class="nav nav-treeview  text-dark">
                    <li class="nav-item menu-open">
                        <a href="{{ route('ledger.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Debit & Credit
                            </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item menu-open">
                        <a href="{{ route('stock.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                Stock
                            </p>
                        </a>
                    </li> --}}
                    {{-- Debit what comes in and credit what goes out --}}

                </ul>
            </li>
            <li class="nav-item bg-primary text-dark">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>
                        Order
                        <i class="fas fa-angle-left right"></i>
                        {{-- <span class="badge badge-info right">6</span> --}}
                    </p>
                </a>
                <ul class="nav nav-treeview  text-dark">
                    <li class="nav-item menu-open">
                        <a href="{{ route('order.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>
                                Orders
                            </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item menu-open">
                        <a href="{{ route('order.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>

                            <p>
                                Delivered
                            </p>
                        </a>
                    </li> --}}
                    {{-- Debit what comes in and credit what goes out --}}

                </ul>
            </li>
        </ul>


    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
