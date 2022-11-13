<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg p-3 pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize pb-1">
                            <?= $subJudul ?>
                        </h6>
                        <a href="<?= base_url('kua/create') ?>" class="btn btn-light">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-3">
                        <table id="table-kua" class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Mempelai Pria</th>
                                    <th>Mempelai Wanita</th>
                                    <th>Penghulu</th>
                                    <th>Saksi 1</th>
                                    <th>Saksi 2</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach ($dataKua as $key) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td>
                                        <div class="text-dark"><?= $key['nama_pria'] ?></div>
                                        <small><?= $key['nik_pria'] ?></small>
                                    </td>
                                    <td>
                                        <div class="text-dark"><?= $key['nama_wanita'] ?></div>
                                        <small><?= $key['nik_wanita'] ?></small>
                                    </td>
                                    <td>
                                        <div class="text-dark"><?= $key['nama_penghulu'] ?></div>
                                        <small><?= $key['nik_penghulu'] ?></small>
                                    </td>
                                    <td>
                                        <div class="text-dark"><?= $key['nama_saksi_1'] ?></div>
                                        <small><?= $key['nik_saksi_1'] ?></small>
                                    </td>
                                    <td>
                                        <div class="text-dark"><?= $key['nama_saksi_2'] ?></div>
                                        <small><?= $key['nik_saksi_2'] ?></small>
                                    </td>
                                    <td>
                                        <span class="border border-warning rounded py-1 px-2 fs-7 text-warning text-uppercase"><?= $key['status'] ?></span>
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url().'kua/detail/'.$key['id'] ?>" type="button" rel="tooltip" class="btn btn-info p-2">
                                            <i class="material-icons">info_outline</i>
                                        </a>
                                        <a href="<?= base_url().'kua/edit/'.$key['id'] ?>" type="button" rel="tooltip" class="btn btn-success p-2">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <button type="button" rel="tooltip" class="btn btn-danger p-2" onclick="return sweetConfirm(event, 'Anda akan menghapus file ini', '<?= base_url().'kua/delete/'.$key['id'] ?>')">
                                            <i class="material-icons">delete_forever</i>
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>