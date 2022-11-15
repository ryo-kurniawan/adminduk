<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">
                            <?= $subJudul ?>
                        </h6>
                    </div>
                </div>
                <div class="card-body px-2 pb-2">
                    <form action="<?= base_url('kua/create/submit') ?>" method="post" enctype="multipart/form-data" class="mx-2">
                        <fieldset class="mb-4 p-3">
                            <label>
                                <b class="text-success">Informasi: </b>
                                Sebelum mengisi bidang di bawah ini
                                perhartikan tata cara pengisian. Semua bidang yang ditandai dengan
                                (<b class="text-danger">*</b>) itu tandanya bidang wajib diisi dan tidak boleh
                                dikosongkan. Perhatikan penulisan data, data harus sesuai dengan data Dukcapil. Dan
                                untuk ukuran
                                <i class="text-warning">maksimal file</i> yang bisa diunggah adalah <b
                                    class="text-danger">2 MB</b>.
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
                                <input type="text" class="form-control" id="nama_mempelai_pria" name="nama_pria" />
                            </div>
                            <!-- <div id="mess_nama_ayah" class="mb-3"></div> -->
                            <label class="my-0">Perhatikan penulisan nik mempelai pria. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_mempelai_pria" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Mempelai Pria *</label>
                                <input type="text" class="form-control" id="nik_mempelai_pria" name="nik_pria"/>
                            </div>
                            <!-- <div id="mess_nik_ayah" class="mb-3"></div> -->
                            <!-- <div class="d-flex justify-content-end mt-4">
                                <button id="btn-text-0" type="button" class="btn btn-primary" onclick="proses(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Simpan</button>
                            </div> -->
                        </fieldset>

                        <fieldset id="mempelai_wanita" class="my-3 p-3">
                            <h6 class="mb-2">2. Mempelai Wanita</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap mempelai Wanita. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_mempelai_wanita" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Mempelai Wanita *</label>
                                <input type="text" class="form-control" id="nama_mempelai_wanita" name="nama_wanita" />
                            </div>
                            <label class="my-0">Perhatikan penulisan nik mempelai Wanita. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_mempelai_wanita" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Mempelai Wanita *</label>
                                <input type="text" class="form-control" id="nik_mempelai_wanita" name="nik_wanita"/>
                            </div>
                        </fieldset>

                        <fieldset id="penghulu" class="my-3 p-3">
                            <h6 class="mb-2">3. Penghulu</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap Penghulu. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_penghulu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Penghulu *</label>
                                <input type="text" class="form-control" id="nama_penghulu" name="nama_penghulu" />
                            </div>
                            <label class="my-0">Perhatikan penulisan nik Penghulu. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_penghulu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Penghulu *</label>
                                <input type="text" class="form-control" id="nik_penghulu" name="nik_penghulu"/>
                            </div>
                        </fieldset>

                        <fieldset id="saksi_pertama" class="my-3 p-3">
                            <h6 class="mb-2">4. Saksi Pertama</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap Saksi Pertama. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_saksi_pertama" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Saksi Pertama *</label>
                                <input type="text" class="form-control" id="nama_saksi_pertama" name="nama_saksi_1" />
                            </div>
                            <label class="my-0">Perhatikan penulisan nik Saksi Pertama. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_saksi_pertama" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Saksi Pertama *</label>
                                <input type="text" class="form-control" id="nik_saksi_pertama" name="nik_saksi_1"/>
                            </div>
                        </fieldset>

                        <fieldset id="saksi_kedua" class="my-3 p-3">
                            <h6 class="mb-2">5. Saksi Kedua</h6>
                            <label class="my-0">Perhatikan penulisan nama lengkap Saksi Kedua. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_saksi_kedua" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Saksi Kedua *</label>
                                <input type="text" class="form-control" id="nama_saksi_kedua" name="nama_saksi_2" />
                            </div>
                            <label class="my-0">Perhatikan penulisan nik Saksi Kedua. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_saksi_kedua" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Saksi Kedua *</label>
                                <input type="text" class="form-control" id="nik_saksi_kedua" name="nik_saksi_2"/>
                            </div>
                        </fieldset>

                        <fieldset id="tgl_nikah" class="my-3 p-3">
                            <h6 class="mb-2">6. Tanggal Pernikahan *</h6>
                            <label class="my-0">Isi sesuai dengan tanggal pernikahan yang direncanakan</label>
                            <div id="elem_tgl_nikah" class="input-group input-group-sm input-group-outline mb-0">
                                <input type="date" class="form-control" id="tgl_nikah" name="tgl_nikah" />
                            </div>
                        </fieldset>

                        <!-- Upload Berkas -->
                        <fieldset id="data_berkas" class="my-4 p-3">
                            <h6 class="mb-2">7. Unggah Berkas</h6>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N1-Surat Pengantar Nikah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n1" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N2-Surat Permohonan Kehendak Nikah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n2" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N3-Surat Persetujuan Mempelai *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n3" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N5-Surat Izin Orangtua</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="n5" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Akta Cerai</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="akta_cerai" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin Komandan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="izin_komandan" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Akta Kematian</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="akta_kematian" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin dispensasi dari Pengadilan Agama</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="izin_dispen_pa" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin dari kedutaan besar untuk WNA *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="izin_kb_wna" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Kartu Tanda Penduduk *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Kartu Keluarga *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="kk" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Akta Kelahiran *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="akta_kelahiran" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat rekomendasi nikah dari KUA Kecamatan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="rekom_nikah_kua_kec" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Pas Foto Latar Biru ukuran 4x3 1 lembar *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="pas_foto_4x3" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">PAS Foto Latar Biru ukuran 2x3 4 lembar *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="pas_foto_2x3" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP Ayah</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp_ayah" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP Ibu</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp_ibu" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP 2 Orang Saksi</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ktp_2saksi" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Ijazah Terakhir</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ijazah" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Pernyataan Status bermaterai</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="pernyataan_status" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat dispensasi kecamatan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="dispen_kec" />
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat keterangan suntik catin</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" name="ket_suntik_catin" />
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button id="btn-cencel-3" type="button" class="btn btn-danger">Batal</button>
                                <button id="btn-text-3" type="submit" name="save" class="btn btn-warning mx-2">Simpan</button>
                                <button id="btn-text-3" type="submit" name="create" class="btn btn-primary">Kirim Permohonan</button>
                            </div>

                        </fieldset>




                    </form>

                </div>
            </div>
        </div>
    </div>

</div>