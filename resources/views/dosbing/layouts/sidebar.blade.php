<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
            <i class="lni lni-react"></i>
            </button>
            <div class="sidebar-logo">
                <a href="/dosbing">Bimbingan Online</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="/dosbing" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/daftarMahasiswaBimbingan" class="sidebar-link">
                <i class="lni lni-consulting"></i>
                    <span>Mahasiswa Bimbingan</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/daftarLogbookMahasiswa" class="sidebar-link">
                    <i class="lni lni-notepad"></i>
                    <span>Logbook Mahasiswa</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/daftarMahasiswaSidang" class="sidebar-link">
                <i class="lni lni-graduation"></i>
                    <span>Mahasiswa Sidang</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="/about" class="sidebar-link">
            <i class="lni lni-cog"></i>
                <span>About Us</span>
            </a>
        </div>
        <div class="sidebar-footer">
            <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>
    <div class="main p-3">
        @yield('content')
    </div>
</div>