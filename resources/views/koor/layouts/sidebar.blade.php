<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-list"></i>
            </button>
            <div class="sidebar-logo">
                <a href="/koordinator">Bimbingan Online</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="{{route('koor-dashboard')}}" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('koor-data-mahasiswa')}}" class="sidebar-link">
                    <i class="lni lni-network"></i>
                    <span>Data Mahasiswa</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('koor-data-dospem')}}" class="sidebar-link">
                    <i class="lni lni-briefcase"></i>
                    <span>Data Dosen Pembimbing</span>
                </a>
            </li>
            <!--<li class="sidebar-item">
                <a href="/data-sidang" class="sidebar-link">
                    <i class="lni lni-agenda"></i>
                    <span>Periode Jadwal Sidang</span>
                </a>
            </li>-->
        </ul>
        <div class="sidebar-footer">
            <a href="/tentang" class="sidebar-link">
                <i class="lni lni-code-alt"></i>
                <span>Tentang</span>
            </a>
        </div>
        <div class="sidebar-footer">
            <a href="{{route('logout')}}" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <div class="main p-3">
        @yield('content')
    </div>
</div>
