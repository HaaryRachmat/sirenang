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
                            <li class="breadcrumb-item">Add Arsip</li>
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
                                <h4>Tambah Arsip</h4>
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
                        <?=
                        form_open_multipart('arsip/insert');
                        helper('text');
                        $no_arsip = date('ymds') . '-' . random_string('alnum', 4);
                        ?>

                        <div class="form-group">
                            <label class="form-label ml-2">No arsip</label>
                            <input type="text" class="form-control <?= ($validation->hasError('no_arsip')) ? 'is-invalid' : ''; ?>" name="no_arsip" value="<?= $no_arsip; ?>" readonly>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('no_arsip'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label ml-2">Kategori</label>
                            <select class="form-control  <?= ($validation->hasError('id_kategori')) ? 'is-invalid' : ''; ?>" name="id_kategori" id="exampleFormControlSelect1" value="<?= old('id_kategori'); ?>">
                                <option>--Pilih Kategori --</option>
                                <?php foreach ($kategori as $key => $value) { ?>
                                    <option value="<?= $value['id_kategori']; ?>"> <?= $value['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('id_dep'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label ml-2">Nama arsip</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_arsip')) ? 'is-invalid' : ''; ?>" name="nama_arsip" placeholder="Masukkan Nama arsip" value="<?= old('nama_arsip'); ?>" autofocus>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('nama_arsip'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label ml-2">Deskripsi</label>
                            <textarea rows="3" class="form-control  <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" name="deskripsi" id="validationTextarea" placeholder="Deskripsi"></textarea>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('deskripsi'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label ml-2">File</label>
                            <input type="file" class="form-control  <?= ($validation->hasError('file_arsip')) ? 'form-file-input' : ''; ?>" name="file_arsip" value="<?= old('file_arsip'); ?>">
                            <label class="text-danger">*File dapat berupa .pdf, .xlsx, .docx, dan Maksimal 2 mb</label>
                            <div class="invalid-feedback ml-2">
                                <?= $validation->getError('file_arsip'); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="<?= base_url('arsip'); ?>" class="btn btn-warning">Kembali</a>
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