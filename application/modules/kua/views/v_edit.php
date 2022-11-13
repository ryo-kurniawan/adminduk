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
                <div class="card-body px-2 pb-2">
                    <form action="<?= base_url('kua/do_edit') ?>" method="post" enctype="multipart/form-data" class="mx-2">
                        <fieldset class="mb-4 p-3">
                            <label>
                                <b class="text-success">Informasi: </b>
                                Sebelum mengisi bidang di bawah ini
                                perhartikan tata cara pengisian. Semua bidang yang ditandai dengan
                                (<b class="text-danger">*</b>) itu tandanya bidang wajib diisi dan tidak boleh
                                dikosongkan. Perhatikan penulisan data, data harus sesuai dengan data Dukcapil. Dan
                                untuk ukuran
                                <i class="text-warning">maksimal file</i> yang bisa diunggah adalah <b class="text-danger">2 MB</b>.
                                Format file yang bisa diunggah adalah <i class="text-success"><b>PDF, PNG, JPG</b></i>
                            </label>

                            <input type="hidden" value="Data-01" id="validFor">
                        </fieldset>

                        <fieldset id="mempelai_pria" class="my-3 p-3">
                            <h6 class="mb-2">1. Mempelai Pria</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap mempelai Pria. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_mempelai_pria" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Mempelai Pria *</label>
                                <input type="text" class="form-control" id="nama_mempelai_pria" name="nama_pria"  value="<?= $data->nama_pria ?>"/>
                            </div>
                            <label class="my-0">Perhatikan penulisan nik mempelai pria. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_mempelai_pria" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Mempelai Pria *</label>
                                <input type="text" class="form-control" id="nik_mempelai_pria" name="nik_pria" value="<?= $data->nik_pria ?>"/>
                            </div>
                        </fieldset>

                        <fieldset id="mempelai_wanita" class="my-3 p-3">
                            <h6 class="mb-2">2. Mempelai Wanita</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap mempelai Wanita. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_mempelai_wanita" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Mempelai Wanita *</label>
                                <input type="text" class="form-control" id="nama_mempelai_wanita" name="nama_wanita"  value="<?= $data->nama_wanita ?>"/>
                            </div>
                            <label class="my-0">Perhatikan penulisan nik mempelai Wanita. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_mempelai_wanita" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Mempelai Wanita *</label>
                                <input type="text" class="form-control" id="nik_mempelai_wanita" name="nik_wanita" value="<?= $data->nik_wanita ?>"/>
                            </div>
                        </fieldset>

                        <fieldset id="penghulu" class="my-3 p-3">
                            <h6 class="mb-2">3. Penghulu</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap Penghulu. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_penghulu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Penghulu *</label>
                                <input type="text" class="form-control" id="nama_penghulu" name="nama_penghulu"  value="<?= $data->nama_penghulu ?>"/>
                            </div>
                            <label class="my-0">Perhatikan penulisan nik Penghulu. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_penghulu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Penghulu *</label>
                                <input type="text" class="form-control" id="nik_penghulu" name="nik_penghulu" value="<?= $data->nik_penghulu ?>"/>
                            </div>
                        </fieldset>

                        <fieldset id="saksi_pertama" class="my-3 p-3">
                            <h6 class="mb-2">4. Saksi Pertama</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap Saksi Pertama. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_saksi_pertama" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Saksi Pertama *</label>
                                <input type="text" class="form-control" id="nama_saksi_pertama" name="nama_saksi_1"  value="<?= $data->nama_saksi_1 ?>"/>
                            </div>
                            <label class="my-0">Perhatikan penulisan nik Saksi Pertama. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_saksi_pertama" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Saksi Pertama *</label>
                                <input type="text" class="form-control" id="nik_saksi_pertama" name="nik_saksi_1" value="<?= $data->nik_saksi_1 ?>"/>
                            </div>
                        </fieldset>

                        <fieldset id="saksi_kedua" class="my-3 p-3">
                            <h6 class="mb-2">5. Saksi Kedua</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap Saksi Kedua. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_saksi_kedua" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Saksi Kedua *</label>
                                <input type="text" class="form-control" id="nama_saksi_kedua" name="nama_saksi_2"  value="<?= $data->nama_saksi_2 ?>"/>
                            </div>
                            <label class="my-0">Perhatikan penulisan nik Saksi Kedua. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_saksi_kedua" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Saksi Kedua *</label>
                                <input type="text" class="form-control" id="nik_saksi_kedua" name="nik_saksi_2" value="<?= $data->nik_saksi_2 ?>"/>
                            </div>
                        </fieldset>

                        <!-- Upload Berkas -->
                        <fieldset id="data_berkas" class="my-4 p-3">
                            <h6 class="mb-2">6. Unggah Berkas</h6>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N1-Surat Pengantar Nikah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n1"/>
                                        <a href="<?= base_url('uploads/kua/'.$data->n1) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->n1 ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->n1 ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N2-Surat Permohonan Kehendak Nikah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n2" />
                                        <a href="<?= base_url('uploads/kua/'.$data->n2) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->n2 ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->n2 ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N3-Surat Persetujuan Mempelai *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n3" />
                                        <a href="<?= base_url('uploads/kua/'.$data->n3) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->n3 ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->n3 ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N5-Surat Izin Orangtua</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n5" />
                                        <a href="<?= base_url('uploads/kua/'.$data->n5) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->n5 ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->n5 ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Akta Cerai</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="akta_cerai" />
                                        <a href="<?= base_url('uploads/kua/'.$data->akta_cerai) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->akta_cerai ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->akta_cerai  ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin Komandan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="izin_komandan" />
                                        <a href="<?= base_url('uploads/kua/'.$data->izin_komandan) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->izin_komandan ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->izin_komandan ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Akta Kematian</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="akta_kematian" />
                                        <a href="<?= base_url('uploads/kua/'.$data->akta_kematian) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->akta_kematian ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->akta_kematian ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin dispensasi dari Pengadilan Agama</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="izin_dispen_pa" />
                                        <a href="<?= base_url('uploads/kua/'.$data->izin_dispen_pa) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->izin_dispen_pa ? 'btn-info' : 'disabled';  ?>">
                                            <i class="material-icons"><?= $data->izin_dispen_pa ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin dari kedutaan besar untuk WNA *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="izin_kb_wna" />
                                        <a href="<?= base_url('uploads/kua/'.$data->izin_kb_wna) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->izin_kb_wna ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->izin_kb_wna ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Kartu Tanda Penduduk *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp" />
                                        <a href="<?= base_url('uploads/kua/'.$data->ktp) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->ktp ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->ktp ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Kartu Keluarga *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="kk" />
                                        <a href="<?= base_url('uploads/kua/'.$data->kk) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->kk ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->kk ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Akta Kelahiran *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="akta_kelahiran" />
                                        <a href="<?= base_url('uploads/kua/'.$data->akta_kelahiran) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->akta_kelahiran ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->akta_kelahiran ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat rekomendasi nikah dari KUA Kecamatan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="rekom_nikah_kua_kec" />
                                        <a href="<?= base_url('uploads/kua/'.$data->rekom_nikah_kua_kec) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->rekom_nikah_kua_kec ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->rekom_nikah_kua_kec ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Pas Foto Latar Biru ukuran 4x3 1 lembar *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="pas_foto_4x3" />
                                        <a href="<?= base_url('uploads/kua/'.$data->pas_foto_4x3) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->pas_foto_4x3 ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->pas_foto_4x3 ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">PAS Foto Latar Biru ukuran 2x3 4 lembar *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="pas_foto_2x3" />
                                        <a href="<?= base_url('uploads/kua/'.$data->pas_foto_2x3) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->pas_foto_2x3 ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->pas_foto_2x3 ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP Ayah</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp_ayah" />
                                        <a href="<?= base_url('uploads/kua/'.$data->ktp_ayah) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->ktp_ayah ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->ktp_ayah ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP Ibu</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp_ibu" />
                                        <a href="<?= base_url('uploads/kua/'.$data->ktp_ibu) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->ktp_ibu ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->ktp_ibu ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP 2 Orang Saksi</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp_2saksi" />
                                        <a href="<?= base_url('uploads/kua/'.$data->ktp_2saksi) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->ktp_2saksi ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->ktp_2saksi ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Ijazah Terakhir</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ijazah" />
                                        <a href="<?= base_url('uploads/kua/'.$data->ijazah) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->ijazah ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->ijazah ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Pernyataan Status bermaterai</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="pernyataan_status" />
                                        <a href="<?= base_url('uploads/kua/'.$data->pernyataan_status) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->pernyataan_status ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->pernyataan_status ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat dispensasi kecamatan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="dispen_kec" />
                                        <a href="<?= base_url('uploads/kua/'.$data->dispen_kec) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->dispen_kec ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->dispen_kec ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat keterangan suntik catin</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ket_suntik_catin" />
                                        <a href="<?= base_url('uploads/kua/'.$data->ket_suntik_catin) ?>" type="button" target="_blank" class="btn p-2 ms-2 rounded <?= $data->ket_suntik_catin ? 'btn-info' : 'disabled' ?>">
                                            <i class="material-icons"><?= $data->ket_suntik_catin ? 'image' : 'image_not_supported' ?></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <input type="hidden" name="id" value="<?= $data->id ?>">
                                <button id="btn-cencel-3" type="button" class="btn btn-danger mx-2">Batal</button>
                                <button id="btn-text-3" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>

                        </fieldset>




                    </form>

                </div>
            </div>
        </div>
    </div>

</div>