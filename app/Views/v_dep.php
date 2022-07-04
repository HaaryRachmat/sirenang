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
                            <li class="breadcrumb-item"><a href="<?= base_url('dep'); ?>">Departemen</a></li>
                            <li class="breadcrumb-item">Departemen</li>
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
                                <h4>Tabel Departemen</h4>

                                <!-- Modal Tambah Departemen -->
                                <button type="button" class="mt-2 btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#add">Tambah</button>
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
                                        <th>Departemen</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1 + (6 * ($currentPage - 1));
                                    foreach ($dep as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['nama_dep']; ?></td>
                                            <td>
                                                <!-- <a class="btn btn-outline-warning btn-sm" href=""><i data-feather="eye"></i></a> -->

                                                <button class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_dep']; ?>"><i data-feather="edit"></i></button>

                                                <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value['id_dep']; ?>"><i data-feather="trash-2"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>

                            <!-- Pagination -->
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

<!-- Modal  Tambah departemen -->
<?= form_open('dep/add') ?>
<div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Departemen</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                <div class="row">
                    <div class="col-md-12">
                        <form>
                            <div class="form-group">
                                <label class="form-label">Departemen</label>
                                <input type="text" class="form-control" name="nama_dep" placeholder="Masukkan Departemen">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Form  -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?= form_close() ?>
<!-- End Modal  -->

<!-- Modal  Edit Departemen -->
<?php foreach ($dep as $key => $value) {  ?>
    <?= form_open('dep/edit/' . $value['id_dep']) ?>
    <div id="edit<?= $value['id_dep']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Departemen</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form  -->
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Departemen</label>
                                    <input value="<?= $value['nama_dep']; ?>" type="text" class="form-control" name="nama_dep" placeholder="Masukkan Departemen">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <?= form_close() ?>
<?php } ?>
<!-- End Modal  -->

<!-- Modal  Hapus Departemen -->
<?php foreach ($dep as $key => $value) {  ?>
    <div id="delete<?= $value['id_dep']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Departemen</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Hapus Konfirmasi  -->
                    Apakah Anda Yakin Ingin Menghapus "<?= $value['nama_dep']; ?>" ?
                    <!-- End Hapus Konfirmasi  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-secondary" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('dep/delete/' . $value['id_dep']); ?>" type="submit" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal  -->