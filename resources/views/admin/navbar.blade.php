{{-- <x-app-layout>

</x-app-layout> --}}
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                        <div class="search-header">
                            Riwayat Pencarian
                        </div>
                    </div>
                </div>
            </form>
            <x-app-layout>

            </x-app-layout>

            {{-- <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                        <img alt="image" src="admin/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="features-profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="features-activities.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul> --}}
        </nav>

        {{-- Sidebar --}}
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">Imigran Gelap</a>
                </div>


                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i
                                class="fas fa-fire"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ url('/users') }}">Users</a></li>
                            <li><a class="nav-link" href="{{ url('/foodmenu') }}">Menu Makanan</a></li>
                            <li><a class="nav-link" href="{{ url('/viewchef') }}">Chefs</a></li>
                            <li><a class="nav-link" href="{{ url('/viewreservation') }}">Reservations</a></li>
                            <li><a class="nav-link" href="{{ url('/orders') }}">Order</a></li>
                        </ul>
                    </li>
        </div>
        </aside>

    </div>
    {{-- End Sidebar --}}
    <!-- Main Content -->



</div>
</div>
