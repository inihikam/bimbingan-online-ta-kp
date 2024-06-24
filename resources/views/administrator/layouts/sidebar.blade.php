<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-react"></i>
            </button>
            <div class="sidebar-logo">
                <a href="{{ route('admin-dashboard') }}">Bimbingan Online</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="{{ route('admin-dashboard') }}" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('periode-ajaran') }}" class="sidebar-link">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>Periode Ajaran</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('log-dosbim') }}" class="sidebar-link">
                    <i class="lni lni-users"></i>
                    <span>Log Dosen Pembimbing</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('log-mahasiswa') }}" class="sidebar-link">
                    <i class="lni lni-users"></i>
                    <span>Log Mahasiswa</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="{{ route('admin-about') }}" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>About Us</span>
            </a>
        </div>
        <div class="sidebar-footer">
            <a href="{{ route('logout') }}" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <div class="main p-3">
        @yield('content')
    </div>
</div>
