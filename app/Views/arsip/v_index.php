<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10"> <?= $title; ?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('arsip'); ?>">Arsip</a></li>
                            <li class="breadcrumb-item">Arsip</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <!-- <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span> -->
                        <!-- Button -->
                        <nav aria-label="Page navigation example">
                            <div class="pagination justify-content-between">
                                <h4>Tabel Arsip</h4>

                                <!-- Modal Tambah Departemen -->
                                <a href="<?= base_url('arsip/add'); ?>" class="mt-2 btn btn-outline-primary btn-sm">Tambah</a>
                                <!-- End Modal  -->

                            </div>
                            <div class="pagination justify-content-between">
                                <!-- Dropdown -->

                                <!-- <div class="col-md-1">
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- End Dropdown -->


                                <!-- <div class="mt-2 ml-2 ">
                                    <form action="" method="POST">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group">
                                                <button type="submit" name="submit" class="btn btn-outline-primary" type="color"><i data-feather="search"></i> </button>
                                                <input name="keyword" type="text" class="form-control" placeholder="Cari...">
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </nav>
                        <!-- End Button -->
                    </div>

                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <!-- Alert -->
                            <?php
                            if (session()->getFlashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                echo session()->getFlashdata('pesan');
                                echo '<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>';
                                echo '</div>';
                            }
                            ?>
                            <!-- End Alert -->

                            <table class="table table-hover" id="mydatatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Arsip</th>
                                        <th>Nama Arsip</th>
                                        <th>Nama Kategori</th>
                                        <th>Tanggal Upload</th>
                                        <th>Tanggal Update</th>
                                        <th>Nama User</th>
                                        <th>Departemen</th>
                                        <th>file Arsip</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1 + (10 * ($currentPage - 1));

                                    foreach ($arsip as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['no_arsip']; ?></td>
                                            <td><?= $value['nama_arsip']; ?></td>
                                            <td><?= $value['nama_kategori']; ?></td>
                                            <td><?= $value['tgl_upload']; ?></td>
                                            <td><?= $value['tgl_update']; ?></td>
                                            <td><?= $value['nama_user']; ?></td>
                                            <td><?= $value['nama_dep']; ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-outline-warning btn-sm" href="<?= base_url('arsip/viewpdf/' . $value['id_arsip']); ?>"><i data-feather="file"></i>
                                                </a><br>
                                                <?= number_format($value['ukuran_file'], 0, ",", "."); ?> Byte
                                            </td>


                                            <td>
                                                <!-- <a class="btn btn-outline-warning btn-sm" href=""><i data-feather="eye"></i></a> -->

                                                <a href="<?= base_url('arsip/edit/' . $value['id_arsip']); ?>" class="btn btn-outline-success btn-sm"><i data-feather="edit"></i></a>

                                                <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_arsip']; ?>"><i data-feather="trash-2"></i></button>

                                            </td>
                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>

                            <!-- <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav> -->
                            <!-- End Pagination -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Hover-table ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- Modal  Hapus Kategori -->
<?php foreach ($arsip as $key => $value) {  ?>
    <div id="delete<?= $value['id_arsip']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus arsip</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Hapus Konfirmasi  -->
                    Apakah Anda Yakin Ingin Menghapus "<b><?= $value['nama_arsip']; ?></b>" ?
                    <!-- End Hapus Konfirmasi  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('arsip/delete/' . $value['id_arsip']); ?>" type="submit" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal  -->