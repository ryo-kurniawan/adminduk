<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg p-3 pb-0 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize pb-1">
                            <?= $subJudul ?>
                        </h6>
                        <?php if ($dataLogin['role'] == 'operator_kua') : ?>
                        <a href="<?= base_url('kua/create') ?>" class="btn btn-light">Tambah Data</a>
                        <?php endif; ?>
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
                                    <th>Saksi</th>
                                    <th>Status</th>
                                    <th>
                                        Tanggal <br> Pernikahan
                                    </th>
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
                                        <div class="text-dark"><?= $key['nama_saksi_2'] ?></div>
                                        <small><?= $key['nik_saksi_2'] ?></small>
                                    </td>
                                    <td>
                                        <span class="border
                                            <?php
                                                switch ($key['status']) {
                                                    case 'proses':
                                                        echo 'border-warning text-warning';
                                                        break;

                                                    case 'revisi':
                                                        echo 'border-warning text-warning';
                                                        break;

                                                    case 'tervalidasi':
                                                        echo 'border-info text-info';
                                                        break;

                                                    case 'selesai':
                                                        echo 'border-success text-success';
                                                        break;
                                                    
                                                    default:
                                                        echo 'border-dark text-dark';
                                                        break;
                                                }
                                            ?> 
                                            rounded py-1 px-2 fs-7 text-uppercase"><?= $key['status'] ?>
                                        </span>
                                    </td>
                                    <td><?= $key['tgl_nikah'] ? date_indo($key['tgl_nikah']) : '-' ?></td>
                                    <td class="td-actions text-right">
                                        <?php if ($dataLogin['role'] == 'operator_kua') : ?>
                                        <a href="<?= base_url().'kua/detail/'.$key['id'] ?>" type="button" class="btn btn-info p-2"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-custom-class="custom-tooltip"
                                            data-bs-title="Detail">
                                            <i class="material-icons">info_outline</i>
                                        </a>
                                            <?php if ($key['status'] != 'tervalidasi') : ?>
                                                <?php if ($key['status'] != 'selesai') : ?>
                                                <a href="<?= base_url().'kua/edit/'.$key['id'] ?>" type="button" class="btn btn-success p-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="Edit">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <button type="button" class="btn btn-danger p-2" onclick="return sweetConfirm(event, 'Anda akan menghapus file ini', '<?= base_url().'kua/delete/'.$key['id'] ?>')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="Hapus">
                                                    <i class="material-icons">delete_forever</i>
                                                </button>
                                                <?php endif; ?>
                                            <?php else : ?>
                                            <button type="button" class="btn btn-success p-2" onclick="return sweetConfirm(event, 'Realisasi Data?', '<?= base_url().'kua/realisasi/'.$key['id'] ?>')"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Realisasi">
                                                <i class="material-icons">done_all</i>
                                            </button>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php if ($dataLogin['role'] == 'operator_capil') : ?>
                                            <?php if ($key['status'] == 'proses') : ?>
                                            <a href="<?= base_url().'kua/validasi/'.$key['id'] ?>" type="button" class="btn btn-success p-2"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Validasi">
                                                <i class="material-icons">check</i>
                                                Validasi
                                            </a>
                                            <?php else : ?>
                                            <a href="<?= base_url().'kua/detail/'.$key['id'] ?>" type="button" class="btn btn-info p-2"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-custom-class="custom-tooltip"
                                                data-bs-title="Detail">
                                                <i class="material-icons">info_outline</i>
                                                Detail
                                            </a>
                                            <?php endif; ?>
                                        <?php endif; ?>
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