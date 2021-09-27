<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link" target="_blank">
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Sikaaru</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.welcome') }}" id="adminpanel" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- menu for about us -->
            <li class="nav-item">
                <a href="#" id="aboutus" class="nav-link">
                <i class="fa fa-info nav-icon"></i>
                <p>Menus</p>
                </a>
            </li> 

            <!-- other menus -->

            <!-- Menu for user -->
            <li class="nav-item">
                <a href="" class="nav-link" id="adminProfile">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        User
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview pl-4" style="display: none;">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-address-book nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                    @if(Auth::user()->type==0)
                        <a href="#" class="nav-link">
                            <i class="fas fa-cogs nav-icon"></i>
                            <p>Admin Config</p>
                        </a>
                    @endif                        
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link" id="logout">
                            <i class="fa fa-power-off nav-icon"></i>
                            <p>Sign Out</p>
                        </a>
                    </li>
                </ul>
            </li> 
            <!-- Insert new city -->
            <li class="nav-item">
                <a href='../../sikaruApanel/city-add' id="insert_city" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Insert City</p>
                </a>
            </li> 
            <!-- View cities -->
            <li class="nav-item">
                <a href='../../sikaruApanel/city-view' id="view_city" class="nav-link">
                <i class="fa fa-eye nav-icon"></i>
                <p>View City</p>
                </a>
            </li>  
            <!-- Insert new company -->
            <li class="nav-item">
                <a href='../../sikaruApanel/company-details' id="company-details" class="nav-link">
                <i class="fa fa-plus nav-icon"></i>
                <p>Insert Company</p>
                </a>
            </li> 
            <!-- View companies -->
            <li class="nav-item">
                <a href='../../sikaruApanel/company_view' id="company_view" class="nav-link">
                <i class="fa fa-eye nav-icon"></i>
                <p>View Company</p>
                </a>
            </li>        
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@php
    $module = Request::segment(1);
@endphp

<script>
    $('#{{$module}}').addClass('active');    
</script>