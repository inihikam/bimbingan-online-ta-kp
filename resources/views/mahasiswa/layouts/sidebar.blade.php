<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <i class="lni lni-list"></i>
            </button>
            <div class="sidebar-logo">
                <a href="/mahasiswa">Bimbingan Online</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="/mahasiswa" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/pengajuanTA" class="sidebar-link">
                    <i class="lni lni-pencil-alt"></i>
                    <span>Pengajuan TA</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/logbookTA" class="sidebar-link">
                    <i class="lni lni-notepad"></i>
                    <span>Logbook Bimbingan TA</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="/sidangTA" class="sidebar-link">
                    <i class="lni lni-calendar"></i>
                    <span>Pengajuan Sidang</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="/tentang" class="sidebar-link">
                <i class="lni lni-code-alt"></i>
                <span>Tentang</span>
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