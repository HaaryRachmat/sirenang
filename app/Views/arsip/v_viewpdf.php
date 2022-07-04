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
                            <li class="breadcrumb-item">View Arsip</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <tr>
                        <th width="90px">No Arsip</th>
                        <th width="30px">:</th>
                        <td><?= $arsip['no_arsip']; ?></td>

                        <th width="90px">Tanggal Upload</th>
                        <th width="30px">:</th>
                        <td><?= $arsip['tgl_upload']; ?></td>
                    </tr>
                    <tr>
                        <th>Nama Arsip</th>
                        <th>:</th>
                        <td><?= $arsip['nama_arsip']; ?></td>

                        <th>Tanggal Update</th>
                        <th>:</th>
                        <td><?= $arsip['tgl_update']; ?></td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <th>:</th>
                        <td><?= $arsip['deskripsi']; ?></td>

                        <th>Ukuran File</th>
                        <th>:</th>
                        <td><?= $arsip['ukuran_file']; ?> Byte</td>
                    </tr>
                    <tr>
                        <th>Departemen</th>
                        <th>:</th>
                        <td><?= $arsip['nama_dep']; ?></td>

                        <th>Nama User</th>
                        <th>:</th>
                        <td><?= $arsip['nama_user']; ?></td>
                    </tr>
                    <tr>
                        <th>File</th>
                        <th>:</th>
                        <td>
                            <a href="<?= base_url(); ?>/arsip/download/<?= $arsip['id_arsip']; ?>" class="btn btn-sm btn-outline-warning"><i class="mr-2" data-feather="download"></i>Download</a>

                            <!-- <a href="" class="btn btn-sm btn-outline-warning"><i class="mr-2" data-feather="download"></i>Download</a> -->

                        </td>



                    </tr>
                </table>
            </div>


            <div class="col-sm-12">
                <iframe src="<?= base_url('file_arsip/' . $arsip['file_arsip']); ?>" style="border:2px solid black;" height="1000" width="100%"></iframe>

            </div>
        </div>

    </div>
</div>