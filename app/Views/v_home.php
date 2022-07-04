<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Beranda</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                            <li class="breadcrumb-item">Beranda</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <!-- Section 1 -->
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card prod-p-card background-pattern">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5">File Arsip</h6>
                                        <h3 class="m-b-0"><?= $tot_arsip; ?></h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="material-icons-two-tone text-primary">card_giftcard</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card prod-p-card bg-primary background-pattern-white">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Kategori</h6>
                                        <h3 class="m-b-0 text-white"><?= $tot_kategori; ?></h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="material-icons-two-tone text-white">local_mall</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section 1 -->

            <!-- Section 2 -->
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card prod-p-card background-pattern">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5">Departemen</h6>
                                        <h3 class="m-b-0"><?= $tot_dep; ?></h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="material-icons-two-tone text-primary">card_giftcard</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card prod-p-card bg-primary background-pattern-white">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">User</h6>
                                        <h3 class="m-b-0 text-white"><?= $tot_user; ?></h3>
                                    </div>
                                    <div class="col-auto">
                                        <i class="material-icons-two-tone text-white">local_mall</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section 2 -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>