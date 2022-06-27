<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <li class="app-sidebar__heading">Dashboard</li>

                <li>
                    <a href="/" class="{{ request()->is('/') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-home"></i>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{ route('obat') }}" class="{{ request()->is('obat') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-note2"></i>
                        Obat
                    </a>
                </li>

                <li>
                    <a href="{{ route('pasien') }}" class="{{ request()->is('pasien') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Pasien
                    </a>
                </li>

                <li>
                    <a href="{{ route('poli') }}" class="{{ request()->is('poli') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Poli
                    </a>
                </li>

                <li>
                    <a href="{{ route('dokter') }}" class="{{ request()->is('dokter') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Dokter
                    </a>
                </li>

                <li>
                    <a href="{{ route('diagnosa') }}" class="{{ request()->is('diagnosa') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Diagnosa
                    </a>
                </li>

                <li>
                    <a href="{{ route('kunjungan') }}"
                        class="{{ request()->is('kunjungan') ? ' mm-active' : '' }}">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Kunjungan
                    </a>
                </li>


                <li>
                    <a href="#" aria-expanded="">

                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        Laporan
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>

                    <ul>

                        <li>
                            <a href="?page=laporan_stok_brg"
                                <?= @$_GET['page'] == 'laporan_stok_brg' ? 'class="mm-active"' : '' ?>>
                                <i class="metismenu-icon"></i>Stok Barang
                            </a>
                        </li>

                        <li>
                            <a href="?page=laporan_brg_masuk"
                                <?= @$_GET['page'] == 'laporan_brg_masuk' ? 'class="mm-active"' : '' ?>>
                                <i class="metismenu-icon"></i>Barang Masuk
                            </a>
                        </li>

                    </ul>
                </li>


                <li>
                    <a href="?page=users"
                        <?= @$_GET['page'] == 'users' || @$_GET['page'] == 'account' ? 'class="mm-active"' : '' ?>>
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
