<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg p-3 pb-0 d-flex align-items-center">
                        <a href="<?= base_url('kua') ?>" class="btn btn-light p-2 me-4">
                            <i class="material-icons opacity-10 m-0 p-0">chevron_left</i>
                        </a>
                        <h6 class="text-white text-capitalize pb-1">
                            <?= $subJudul ?>
                        </h6>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <fieldset id="mempelai_pria" class="my-3 p-3">
                        <h6 class="mb-2">1. Mempelai Pria</h6>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">Nama</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nama_pria ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">NIK</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nik_pria ?></div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="mempelai_wanita" class="my-3 p-3">
                        <h6 class="mb-2">2. Mempelai Wanita</h6>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">Nama</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nama_wanita ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">NIK</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nik_wanita ?></div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="penghulu" class="my-3 p-3">
                        <h6 class="mb-2">3. Penghulu</h6>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">Nama</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nama_penghulu ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">NIK</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nik_penghulu ?></div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="saksi_pertama" class="my-3 p-3">
                        <h6 class="mb-2">4. Saksi Pertama</h6>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">Nama</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nama_saksi_1 ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">NIK</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nik_saksi_1 ?></div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset id="saksi_kedua" class="my-3 p-3">
                        <h6 class="mb-2">5. Saksi Kedua</h6>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">Nama</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nama_saksi_2 ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <span class="ms-3">NIK</span>
                            </div>
                            <div class="col-10">
                                <div class="border rounded p-2 mb-3"><?= $data->nik_saksi_2 ?></div>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Upload Berkas -->
                    <fieldset id="data_berkas" class="my-4 p-3">
                        <h6 class="mb-2">6. Berkas</h6>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">N1-Surat Pengantar Nikah *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->n1 ? $data->n1 : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->n1) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->n1 ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->n1 ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">N2-Surat Permohonan Kehendak Nikah *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->n2 ? $data->n2 : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->n2) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->n2 ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->n2 ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">N3-Surat Persetujuan Mempelai *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->n3 ? $data->n3 : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->n3) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->n3 ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->n3 ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">N5-Surat Izin Orangtua</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->n5 ? $data->n5 : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->n5) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->n5 ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->n5 ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat Akta Cerai</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->akta_cerai ? $data->akta_cerai : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->akta_cerai) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->akta_cerai ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->akta_cerai  ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat Izin Komandan</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->izin_komandan ? $data->izin_komandan : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->izin_komandan) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->izin_komandan ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->izin_komandan ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat Akta Kematian</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->akta_kematian ? $data->akta_kematian : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->akta_kematian) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->akta_kematian ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->akta_kematian ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat Izin dispensasi dari Pengadilan Agama</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->izin_dispen_pa ? $data->izin_dispen_pa : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->izin_dispen_pa) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->izin_dispen_pa ? 'btn-info' : 'disabled';  ?>">
                                        <i class="material-icons"><?= $data->izin_dispen_pa ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat Izin dari kedutaan besar untuk WNA *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->izin_kb_wna ? $data->izin_kb_wna : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->izin_kb_wna) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->izin_kb_wna ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->izin_kb_wna ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Kartu Tanda Penduduk *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->ktp ? $data->ktp : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->ktp) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->ktp ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->ktp ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Kartu Keluarga *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->kk ? $data->kk : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->kk) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->kk ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->kk ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Akta Kelahiran *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->akta_kelahiran ? $data->akta_kelahiran : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->akta_kelahiran) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->akta_kelahiran ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->akta_kelahiran ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat rekomendasi nikah dari KUA Kecamatan</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->rekom_nikah_kua_kec ? $data->rekom_nikah_kua_kec : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->rekom_nikah_kua_kec) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->rekom_nikah_kua_kec ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->rekom_nikah_kua_kec ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Pas Foto Latar Biru ukuran 4x3 1 lembar *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->pas_foto_4x3 ? $data->pas_foto_4x3 : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->pas_foto_4x3) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->pas_foto_4x3 ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->pas_foto_4x3 ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">PAS Foto Latar Biru ukuran 2x3 4 lembar *</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->pas_foto_2x3 ? $data->pas_foto_2x3 : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->pas_foto_2x3) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->pas_foto_2x3 ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->pas_foto_2x3 ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">KTP Ayah</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->ktp_ayah ? $data->ktp_ayah : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->ktp_ayah) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->ktp_ayah ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->ktp_ayah ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">KTP Ibu</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->ktp_ibu ? $data->ktp_ibu : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->ktp_ibu) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->ktp_ibu ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->ktp_ibu ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">KTP 2 Orang Saksi</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->ktp_2saksi ? $data->ktp_2saksi : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->ktp_2saksi) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->ktp_2saksi ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->ktp_2saksi ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Ijazah Terakhir</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->ijazah ? $data->ijazah : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->ijazah) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->ijazah ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->ijazah ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat Pernyataan Status bermaterai</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->pernyataan_status ? $data->pernyataan_status : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->pernyataan_status) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->pernyataan_status ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->pernyataan_status ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat dispensasi kecamatan</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->dispen_kec ? $data->dispen_kec : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->dispen_kec) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->dispen_kec ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->dispen_kec ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Surat keterangan suntik catin</label>
                                <div class="d-flex justify-content-between align-items-baseline mb-3">
                                    <span class="flex-fill border rounded p-2"><?= $data->ket_suntik_catin ? $data->ket_suntik_catin : 'Berkas Tidak Ditemukan' ?></span>
                                    <a href="<?= base_url('uploads/kua/'.$data->ket_suntik_catin) ?>" type="button" target="_blank" class="btn px-2 ms-2 rounded <?= $data->ket_suntik_catin ? 'btn-info' : 'disabled' ?>">
                                        <i class="material-icons"><?= $data->ket_suntik_catin ? 'image' : 'image_not_supported' ?></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

</div>