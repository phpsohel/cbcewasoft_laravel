<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="mt-3 pb-3 mb-3  text-center">
            <div class="image">
                <img src="{{ asset('image/logocewa.png') }}" class="elevation-2" alt="User Image">

            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ Auth()->user()->name ?? ''}}</a> --}}
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="fa-solid fa-house"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('member.index')}}" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <p>Member</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('member.report')}}" class="nav-link">
                        <i class="fa-solid fa-hotel"></i>


                        <p>Member Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    {{-- <a href="{{ route('admin.container.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Container</p>
                    </a> --}}
                </li>
            </ul>
            </li>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-ship"></i>
                    <p>Shipping Information<i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.add-domain') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add Shipping</p>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.all-domain') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Shipping</p>
                </a>
            </li>
            </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-truck-fast"></i>
                    <p> Freight
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.add-customer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Freight</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.all-customer') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Freight</p>
                        </a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-hourglass-end"></i>
                        <p>
                            Expire List

                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.all-expire') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Search Expire List </p>
            </a>
            </li>
            </ul>
            </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
