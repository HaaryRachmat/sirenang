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
                            <li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">User</a></li>
                            <li class="breadcrumb-item">Add User</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Hover-table ] start -->
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <!-- <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span> -->
                        <!-- Button -->
                        <nav aria-label="Page navigation example">
                            <div class="pagination justify-content-between">
                                <h4>Tambah User</h4>
                            </div>
                        </nav>



                        <!-- gak jalan -->
                        <!-- <?php
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php foreach ($errors as $key => $value) { ?>
                                    <li><?= esc($value); ?></li>
                                <?php } ?>
                            </div>
                        <?php } ?> -->


                    </div>

                    <div class="modal-body">
                        <?= form_open_multipart('user/insert'); ?>

                        <div class="form-group">
                            <label class="form-label ml-2">Nama User</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_user')) ? 'is-invalid' : ''; ?>" name="nama_user" placeholder="Masukkan Nama user" value="<?= old('nama_user'); ?>" autofocus>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('nama_user'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">NIP</label>
                            <input type="text" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Masukkan Alamat E-mail">
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">Password</label>
                            <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Masukkan Password" value="<?= old('password'); ?>">
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">Level</label>
                            <select class="form-select  <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" name="level" id="validationServer04" value="<?= old('level'); ?>">
                                <option>--Pilih Level--</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            <div id="validationServer04Feedback" class="invalid-feedback ml-2">
                                <?= $validation->getError('level'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label ml-2">Departemen</label>
                            <select class="form-control  <?= ($validation->hasError('id_dep')) ? 'is-invalid' : ''; ?>" name="id_dep" id="exampleFormControlSelect1" value="<?= old('id_dep'); ?>">
                                <option>--Pilih Department --</option>
                                <?php foreach ($dep as $key => $value) { ?>
                                    <option value="<?= $value['id_dep']; ?>"> <?= $value['nama_dep']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('id_dep'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label ml-2">Foto Profil</label>
                            <input type="file" class="form-control  <?= ($validation->hasError('foto')) ? 'form-file-input' : ''; ?>" name="foto" value="<?= old('foto'); ?>">
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('foto'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="<?= base_url('user'); ?>" class="btn btn-warning">Kembali</a>
                        </div>
                        <?= form_close(); ?>
                    </div>


                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>