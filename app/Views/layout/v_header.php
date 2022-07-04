<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header">
        <div class="pcm-logo">
            <img src="<?= base_url(); ?>/template/assets/images/logo.svg" alt="" class="logo logo-lg">
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <a href="#!" class="pc-head-link" id="headerdrp-collapse">
                <i data-feather="align-right"></i>
            </a>
            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->


    <!-- [ Header ] start -->
    <header class="pc-header ">
        <div class="header-wrapper">
            <!-- Level Menu -->
            <!-- <div class="mr-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link active dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            Level
                        </a>
                        <div class="dropdown-menu pc-h-dropdown">
                            <a href="#!" class="dropdown-item">
                                <i class="material-icons-two-tone">account_circle</i>
                                <span>My Account</span>
                            </a>
                            <div class="pc-level-menu">
                                <a href="#!" class="dropdown-item">
                                    <i class="material-icons-two-tone">list_alt</i>
                                    <span class="float-right"><i data-feather="chevron-right" class="mr-0"></i></span>
                                    <span>Level2.1</span>
                                </a>
                                <div class="dropdown-menu pc-h-dropdown">
                                    <a href="#!" class="dropdown-item">
                                        <i class="fas fa-circle"></i>
                                        <span>My Account</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="fas fa-circle"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="fas fa-circle"></i>
                                        <span>Support</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="fas fa-circle"></i>
                                        <span>Lock Screen</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="fas fa-circle"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="material-icons-two-tone">settings</i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="material-icons-two-tone">support</i>
                                <span>Support</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="material-icons-two-tone">https</i>
                                <span>Lock Screen</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="material-icons-two-tone">chrome_reader_mode</i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div> -->
            <!-- End Level Menu -->

            <div class="ml-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item">
                        <!-- Search -->
                        <!-- <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="material-icons-two-tone">search</i>
                        </a> -->
                        <!-- End Search -->

                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i data-feather="search"></i>
                                    <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Jika ingin menambahkan tanggal -->
                    <!-- <li class="dropdown pc-h-item">
                        <p><?= date("H:i:s")  ?></p>
                        <div type="button" class="btn  btn-primary"><?= date('h-M-Y') ?></div>
                    </li> -->
                    <!-- end tanggal -->

                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= base_url('foto/' . session()->get('foto')); ?>" alt="user-image" class="user-avtar">
                            <span>
                                <span class="user-name"><?= session()->get('nama_user'); ?></span>

                                <span class="user-desc"><?php if (session()->get('level') == 1) {
                                                            echo 'Admin';
                                                        } else {
                                                            echo 'User';
                                                        } ?></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
                            <div class=" dropdown-header">
                                <h5 class="text-overflow m-0"><span class="badge bg-light-primary"><a href="" target="_blank">Admin</a></span></h5>
                            </div>

                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
                                <i class="material-icons-two-tone">chrome_reader_mode</i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>
    <!-- [ Header ] end -->