<aside class="left-sidebar">
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard') }}" class="text-nowrap logo-img ms-0 ms-md-1">
            <img src="{{ asset('assets-admin/images/logos/dark-logo.svg') }}" width="180" alt="Logo">
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar Scroll -->
    <div class="scroll-sidebar" data-simplebar>
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="mb-0">
                <!-- Home -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('dashboard') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-primary rounded-1">
                            <i class="ti ti-layout-dashboard fs-7"></i>
                        </span>
                        <span class="hide-menu ps-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                    <span class="hide-menu">DATA</span>
                </li>
                <li class="sidebar-item {{ request()->is('user.*') ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('user.list') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-primary rounded-1">
                            <i class="ti ti-article fs-7"></i>
                        </span>
                        <span class="hide-menu ps-1">User</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('siswa*') ? 'active' : '' }}">
                    <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('siswa.list') }}"
                        aria-expanded="false">
                        <span class="aside-icon p-2 bg-light-primary rounded-1">
                            <i class="ti ti-article fs-7"></i>
                        </span>
                        <span class="hide-menu ps-1">Siswa</span>
                    </a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </nav>
    </div>
</aside>
