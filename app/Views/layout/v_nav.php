<!-- [ navigation menu ] start -->
<nav class="pc-sidebar ">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="<?= base_url('home'); ?>" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <!-- <img src="<?= base_url(); ?>/template/assets/images/logo.svg" alt="" class="logo logo-lg"> -->
                <p class="text-white fs-3 pl-4 pt-2">SIRENANG</p>
                <img src="<?= base_url(); ?>/template/assets/images/logo-sm.svg" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Home</label>
                </li>
                <li class="pc-item">
                    <a href="<?= base_url('home'); ?>" class="pc-link "><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext">Beranda</span></a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Menu</label>
                    <!-- <span>Kategori File</span> -->
                </li>

                <li class="pc-item">
                    <a href="<?= base_url('arsip'); ?>" class="pc-link "><span class="pc-micon"><i data-feather="inbox"></i></span><span class="pc-mtext">Arsip</span></a>
                </li>

                <?php if (session()->level == 1) : ?>

                    <li class="pc-item">
                        <a href="<?= base_url('kategori'); ?>" class="pc-link "><span class="pc-micon"><i data-feather="file-text"></i></span><span class="pc-mtext">Kategori</span></a>
                    </li>

                    <li class="pc-item">
                        <a href="<?= base_url('dep'); ?>" class="pc-link "><span class="pc-micon"><i data-feather="file-minus"></i></span><span class="pc-mtext">Departemen</span></a>
                    </li>

                    <li class="pc-item">
                        <a href="<?= base_url('user'); ?>" class="pc-link "><span class="pc-micon"><i data-feather="user"></i></span><span class="pc-mtext">User</span></a>
                    </li>

                <?php endif; ?>

                <!-- <li class="pc-item pc-caption">
                    <label>File Dokumen</label>
                </li> -->
                <!-- <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="file"></i></span><span class="pc-mtext">Dokumen</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="form_elements.html">Form Basic</a></li>
                        <li class="pc-item"><a class="pc-link" href="form2_input_group.html">Input Groups</a></li>
                        <li class="pc-item"><a class="pc-link" href="form2_checkbox.html">Checkbox</a></li>
                        <li class="pc-item"><a class="pc-link" href="form2_radio.html">Radio</a></li>
                    </ul>
                </li> -->

                <!-- Menu  -->
                <!-- <li class="pc-item pc-caption">
                    <label>table</label>
                </li>
                <li class="pc-item">
                    <a href="tbl_bootstrap.html" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">table_rows</i></span><span class="pc-mtext">Bootstrap table</span></a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Chart & Maps</label>
                    <span>Tones of readymade charts</span>
                </li>
                <li class="pc-item">
                    <a href="chart-apex.html" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">bubble_chart</i></span><span class="pc-mtext">Chart</span></a>
                </li>
                <li class="pc-item">
                    <a href="map-google.html" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">my_location</i></span><span class="pc-mtext">Maps</span></a>
                </li>
                <li class="pc-item pc-caption">
                    <label>Pages</label>
                    <span>Redymade Pages</span>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">https</i></span><span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="auth-signup.html" target="_blank">Sign up</a></li>
                        <li class="pc-item"><a class="pc-link" href="auth-signin.html" target="_blank">Sign in</a></li>
                    </ul>
                </li>
                <li class="pc-item pc-caption">
                    <label>Other</label>
                    <span>Extra more things</span>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="material-icons-two-tone">list_alt</i></span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Menu Level 2.1</a></li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Menu level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Menu level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="pc-item pc-hasmenu">
                            <a href="#!" class="pc-link">Menu level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                            <ul class="pc-submenu">
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
                                <li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
                                <li class="pc-item pc-hasmenu">
                                    <a href="#!" class="pc-link">Menu level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                                    <ul class="pc-submenu">
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.1</a></li>
                                        <li class="pc-item"><a class="pc-link" href="#!">Menu level 4.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="pc-item"><a href="sample-page.html" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">storefront</i></span><span class="pc-mtext">Sample page</span></a></li> -->
                <!-- End Menu  -->


            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->