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
                            <li class="breadcrumb-item">Edit User</li>
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
                                <h4>Edit User</h4>
                            </div>
                        </nav>

                    </div>

                    <div class="modal-body">
                        <?= form_open_multipart('user/update/' . $user['id_user']); ?>

                        <div class="form-group">
                            <label class="form-label ml-2">Nama User</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_user')) ? 'is-invalid' : ''; ?>" name="nama_user" placeholder="Masukkan Nama user" value="<?= $user['nama_user']; ?>">
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('nama_user'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">E-mail</label>
                            <input type="text" class="form-control  <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Masukkan Alamat E-mail" value="<?= $user['email']; ?>" readonly>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">Password</label>
                            <input type="password" class="form-control  <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Masukkan Password" value="<?= $user['password']; ?>">
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">Level</label>
                            <select class="form-select  <?= ($validation->hasError('level')) ? 'is-invalid' : ''; ?>" name="level" id="validationServer04" value="<?= old('level'); ?>">
                                <option value="<?= $user['level']; ?>">
                                    <?php if ($user['level'] == 1) {
                                        echo 'Admin';
                                    } else {
                                        echo 'User';
                                    } ?>
                                </option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                            <div id="validationServer04Feedback" class="invalid-feedback ml-2">
                                <?= $validation->getError('level'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">Departemen</label>
                            <select class="form-control  <?= ($validation->hasError('id_dep')) ? 'is-invalid' : ''; ?>" name="id_dep" id="exampleFormControlSelect1">
                                <option value="<?= $user['id_dep']; ?>"><?= $user['nama_dep']; ?></option>
                                <?php foreach ($dep as $key => $value) { ?>
                                    <option value="<?= $value['id_dep']; ?>"> <?= $value['nama_dep']; ?></option>
                                <?php } ?>

                            </select>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('id_dep'); ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4 mb-4">
                                <img class="ml-4" src="<?= base_url('foto/' . $user['foto']); ?>" width="80px" alt="Foto Profil">
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="form-label ml-2">Ganti Foto Profil</label>
                                    <input type="file" class="form-control  <?= ($validation->hasError('foto')) ? 'form-file-input' : ''; ?>" name="foto" value="<?= old('foto'); ?>">
                                    <div class="invalid-feedback ml-2">
                                        <?= $validation->getError('foto'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
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