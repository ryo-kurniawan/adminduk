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
                <div class="card-body px-0 pb-2">

                    <form id="laporan-rs-akta" enctype="multipart/form-data" class="mx-2">
                        <fieldset class="mb-4">
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

                        <!-- Data Ayah -->
                        <fieldset id="data_ayah" class="my-3">
                            <h6 class="mb-2">1. Data Ayah</h6>

                            <!-- Input nama ayah -->
                            <label class="my-0">Perhatikan penulisan nama lengkap Ayah. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Ayah *</label>
                                <input type="text" class="form-control" id="nama_ayah" />
                            </div>
                            <div id="mess_nama_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ayah -->
                            <label class="my-0">Perhatikan penulisan nik ayah. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Ayah *</label>
                                <input type="text" class="form-control" id="nik_ayah" />
                            </div>
                            <div id="mess_nik_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- <div class="d-flex justify-content-end mt-4">
                                <button id="btn-cencel" type="button" class="btn btn-danger mx-2">Batal</button>
                                <button id="btn-text-0" type="button" class="btn btn-primary"
                                    onclick="proses(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Lanjut
                                    Proses</button>
                            </div> -->

                        </fieldset>



                        <!-- Data Ibu -->
                        <fieldset id="data_ibu" class="my-4">
                            <h6 class="mb-2">2. Data Ibu</h6>

                            <!-- Input nama ibu -->
                            <label class="my-0">Perhatikan penulisan nama lengkap Ibu. Nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ibu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Ibu *</label>
                                <input type="text" class="form-control" id="nama_ibu" />
                            </div>
                            <div id="mess_nama_ibu" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ibu -->
                            <label class="my-0">Perhatikan penulisan nik pelapor. <b class="text-danger">NIK harus
                                    sesuai</b> dengan data kependudukan Dukcapil</label>
                            <div id="elem_nik_ibu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK Ibu *</label>
                                <input type="text" class="form-control" id="nik_ibu" />
                            </div>
                            <div id="mess_nik_ibu" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- <div class="d-flex justify-content-end mt-4">
                                <button id="btn-cencel-1" type="button" class="btn btn-danger mx-2"
                                    onclick="mundur(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Mundur</button>
                                <button id="btn-text-1" type="button" class="btn btn-primary"
                                    onclick="proses(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Lanjut
                                    Proses</button>
                            </div> -->

                        </fieldset>

                        <!-- Data Anak -->
                        <fieldset id="data_anak" class="my-4">
                            <h6 class="mb-2">3. Data Anak</h6>

                            <!-- Input nama anak -->
                            <label class="my-0">Perhatikan penulisan nama lengkap Anak.</label>
                            <div id="elem_nama_anak" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Anak *</label>
                                <input type="text" class="form-control" id="nama_anak" />
                            </div>
                            <div id="mess_nama_anak" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input tempat lahir -->
                            <label class="my-0"><b class="text-danger">Tempat Lahir harus sesuai</b> dengan tempat
                                dimana anak dilahirkan</label>
                            <div id="elem_tempat_lahir_anak"
                                class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Tempat Lahir *</label>
                                <input type="text" class="form-control" id="tempat_lahir_anak" />
                            </div>
                            <div id="mess_tempat_lahir_anak" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input tanggal lahir -->
                            <label class="my-0"><b class="text-danger">Tanggal Lahir harus sesuai</b> Tanggal kelahiran
                                anak</label>
                            <div id="elem_tgl_lahir_anak" class="input-group input-group-static mt-3 mb-0">
                                <input type="date" class="form-control" id="tgl_lahir_anak">
                            </div>
                            <div id="mess_tgl_lahir_anak" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- <div class="d-flex justify-content-end mt-4">
                                <button id="btn-cencel-2" type="button" class="btn btn-danger mx-2"
                                    onclick="mundur(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Mundur</button>
                                <button id="btn-text-2" type="button" class="btn btn-primary"
                                    onclick="proses(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Lanjut
                                    Proses</button>
                            </div> -->

                        </fieldset>

                        <!-- Upload Berkas -->
                        <fieldset id="data_berkas" class="my-4">
                            <h6 class="mb-2">4. Unggah Berkas</h6>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N1-Surat Pengantar Nikah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ayah"
                                            name="file_ktp_ayah" />
                                    </div>
                                    <div id="mess_file_ktp_ayah" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N2-Surat Permohonan Kehendak Nikah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N3-Surat Persetujuan Mempelai *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">N5-Surat Izin Orangtua</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Akta Cerai</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin Komandan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati)</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin dispensasi dari Pengadilan Agama</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Izin dari kedutaan besar untuk WNA *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Kartu Tanda Penduduk *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Kartu Keluarga *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Akta Kelahiran *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat rekomendasi nikah dari KUA Kecamatan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Pas Foto Latar Biru ukuran 4x3 1 lembar *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">PAS Foto Latar Biru ukuran 2x3 4 lembar *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP Ayah</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">KTP Ibu</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">2 Orang Saksi</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Ijazah Terakhir</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat Pernyataan Status bermaterai</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat dispensasi kecamatan</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Surat keterangan suntik catin</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button id="btn-cencel-3" type="button" class="btn btn-danger mx-2">Batal</button>
                                <button id="btn-text-3" type="button" class="btn btn-primary"
                                    onclick="proses(id = this.id, data1 = 'data_ayah', data2 = 'data_ibu', data3 = 'data_anak', data4 = 'data_berkas')">Kirm
                                    Permohonan</button>
                            </div>

                        </fieldset>




                    </form>

                </div>
            </div>
        </div>
    </div>

</div>