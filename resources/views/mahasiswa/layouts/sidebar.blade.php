<<<<<<< HEAD
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
            <a href="/profile" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </div>
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
=======
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
                <a href="{{ route('mahasiswa-dashboard') }}" class="sidebar-link">
                    <i class="lni lni-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('mahasiswa-pengajuan') }}" class="sidebar-link">
                    <i class="lni lni-pencil-alt"></i>
                    <span>Pengajuan TA</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('mahasiswa-logbook') }}" class="sidebar-link">
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
>>>>>>> 7de543ad91a5038f77b61b1e56aeb36000aab283
