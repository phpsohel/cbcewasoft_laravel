<style>
    a.nav-link i, p {
        color: #7c5cc4;
    }
    a.nav-link p {
        margin-left: 10px!important;
        font-size: 17px;
        font-weight: 500;
    }
    .text-light {
        color: #333!important;
    }

</style>
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="mt-3 pb-3 mb-3  text-center">
            <div class="image">
                @php
                    $general_setting = App\Models\Generalsetting::first();
                @endphp
                @if (!empty($general_setting))
                    <img style="max-width: 230px;" src="{{ asset('image/'. $general_setting->site_logo ?? '') }}" class="elevation-2" alt="{{ $general_setting->site_title ?? '' }}">

                @else
                    <img style="max-width: 230px ;height: 100px;" src="{{ asset('image/no_image.jpg') }}" class="elevation-2" alt="{{ $general_setting->site_title ?? '' }}">
                @endif
                
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
                <li class="nav-item border-bottom">

                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="fa-solid fa-house"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item border-bottom">

                    <a href="{{route('member.index')}}" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <p>Member</p>
                    </a>
                </li>
                <li class="nav-item border-bottom">

                    <a href="{{route('member.report')}}" class="nav-link">
                        <i class="fa-solid fa-hotel"></i>
                        <p>Member Report</p>
                    </a>
                </li>

                <li class="nav-item border-bottom">

                    <a href="{{route('member.report')}}" class="nav-link">
                        <i class="fa thin fa-gear"></i>
                        <p>Settings <i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item border-bottom fa-carret">

                            <a href="{{ route('user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom fa-carret">

                            <a href="{{ route('role.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role Permission</p>
                            </a>
                        </li>
                        <li class="nav-item border-bottom">

                            <a href="{{ route('setting.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Settings</p>
                            </a>
                        </li>
                    </ul>
                </li> 
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
