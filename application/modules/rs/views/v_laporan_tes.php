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
                                dikosongkan. Perhatikan penulisan data, data haurs sesuai dengan data Dukcapil. Dan
                                untuk ukuran
                                <i class="text-warning">maksimal file</i> yang bisa diunggah adalah <b
                                    class="text-danger">2 MB</b>.
                                Format file yang bisa diunggah adalah <i class="text-success"><b>PDF, PNG, JPG</b></i>
                            </label>

                            <input type="hidden" value="Data-01" id="validFor">
                        </fieldset>

                        <!-- Data  -->
                        <fieldset class="my-3">
                            <h6 class="mb-2">1. Data Pelapor</h6>

                            <!-- Input nama ayah -->
                            <label class="my-0">Perhatikan penulisan nama, nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="nama_pelapor" />
                            </div>
                            <div id="mess_nama_pelapor" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ayah -->
                            <label class="my-0">Perhatikan penulisan NIK . NIK harus sesuai dengan data
                                kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK *</label>
                                <input type="text" class="form-control" id="nik_" />
                            </div>
                            <div id="mess_nik_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->
                        </fieldset>

                        <!-- Data Saki I -->
                        <fieldset class="my-3">
                            <h6 class="mb-2">2. Data Saksi I</h6>

                            <!-- Input nama ayah -->
                            <label class="my-0">Perhatikan penulisan nama, nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="nama_saksi_1" />
                            </div>
                            <div id="mess_nama_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ayah -->
                            <label class="my-0">Perhatikan penulisan NIK . NIK harus sesuai dengan data
                                kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK *</label>
                                <input type="text" class="form-control" id="nik_saksi_1" />
                            </div>
                            <div id="mess_nik_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->
                        </fieldset>

                        <!-- Data Saki II -->
                        <fieldset class="my-3">
                            <h6 class="mb-2">3. Data Saksi II</h6>

                            <!-- Input nama ayah -->
                            <label class="my-0">Perhatikan penulisan nama, nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="nama_saksi_2" />
                            </div>
                            <div id="mess_nama_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ayah -->
                            <label class="my-0">Perhatikan penulisan NIK . NIK harus sesuai dengan data
                                kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK *</label>
                                <input type="text" class="form-control" id="nik_saksi_2" />
                            </div>
                            <div id="mess_nik_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->
                        </fieldset>

                        <!-- Data Ayah -->
                        <fieldset class="my-3">
                            <h6 class="mb-2">4. Data Ayah</h6>

                            <!-- Input nama ayah -->
                            <label class="my-0">Perhatikan penulisan nama, nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="nama_ayah" />
                            </div>
                            <div id="mess_nama_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ayah -->
                            <label class="my-0">Perhatikan penulisan nik ayah. NIK harus sesuai dengan data kependudukan
                                Dukcapil</label>
                            <div id="elem_nik_ayah" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK *</label>
                                <input type="text" class="form-control" id="nik_ayah" />
                            </div>
                            <div id="mess_nik_ayah" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                        </fieldset>



                        <!-- Data Ibu -->
                        <fieldset id="data_ibu" class="my-4">
                            <h6 class="mb-2">5. Data Ibu</h6>

                            <!-- Input nama ibu -->
                            <label class="my-0">Perhatikan penulisan nama, nama harus sesuai dengan data
                                kependudukan Dukcapil</label>
                            <div id="elem_nama_ibu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="nama_ibu" />
                            </div>
                            <div id="mess_nama_ibu" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input nik ibu -->
                            <label class="my-0">Perhatikan penulisan nik . <b class="text-danger">NIK harus
                                    sesuai</b> dengan data kependudukan Dukcapil</label>
                            <div id="elem_nik_ibu" class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">NIK *</label>
                                <input type="text" class="form-control" id="nik_ibu" />
                            </div>
                            <div id="mess_nik_ibu" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                        </fieldset>

                        <!-- Data Anak -->
                        <fieldset id="data_anak" class="my-4">
                            <h6 class="mb-2">6. Data Anak</h6>

                            <!-- Input nama anak -->
                            <label class="my-0">Perhatikan penulisan nama anak. Nama harus berdasarkan Pemendagri No. 73
                                Tahun 2022</label>
                            <div class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Nama Lengkap *</label>
                                <input type="text" class="form-control" id="nama_anak" />
                            </div>
                            <div id="mess_nama_anak" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input Jenis kelamin -->
                            <label class="my-0">Perhatikan dalam pemilihan jenis kelamin</label>
                            <div id="elem_tempat_lahir_anak"
                                class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Jenis Kelamin *</label>
                                <input type="text" class="form-control" id="jenis_kelamin_anak" />
                            </div>
                            <div id="mess_jenis_kelamin_anak" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input tempat dilahirirkan -->
                            <label class="my-0">Tempat dimana anak dilahirkan!</label>
                            <div id="elem_tempat_lahir_anak"
                                class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Tempat Dilahirkan *</label>
                                <input type="text" class="form-control" id="tempat_dilahirkan" />
                            </div>
                            <div id="mess_tempat_dilahirkan" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input tempat lahir -->
                            <label class="my-0">Tempat Lahir harus sesuai dengan tempat
                                dimana anak dilahirkan</label>
                            <div class="input-group input-group-sm input-group-outline mb-0">
                                <label class="form-label">Tempat Kelahiran *</label>
                                <input type="text" class="form-control" id="tempat_kelahiran" />
                            </div>
                            <div id="mess_tempat_kelahiran" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input tanggal lahir -->
                            <label class="my-0">Tanggal Lahir harus sesuai dengan tanggal kelahiran
                                anak</label>
                            <div id="elem_tgl_lahir_anak" class="input-group input-group-sm input-group-outline mb-0">
                                <input type="date" class="form-control" id="tgl_lahir_anak">
                            </div>
                            <div id="mess_tgl_lahir_anak" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                            <!-- Input tempat lahir -->
                            <label class="my-0">Diisi dengan waktu kelahiran anak</label>
                            <div class="input-group input-group-static my-3">
                                <label>Time</label>
                                <input type="time" class="form-control">
                            </div>
                            <div id="mess_waktu_kelahiran" class="mb-3"></div>
                            <!-- ---------------------------------------------------------- -->

                        </fieldset>

                        <!-- Upload Berkas -->
                        <fieldset id="data_berkas" class="my-4">
                            <h6 class="mb-2">4. Unggah Berkas</h6>


                            <div class="row">
                                <!-- No. Kartu Keluarga -->
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">No. Kartu Keluarga *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <input type="text" class="form-control" id="no_kk"
                                            placeholder="No. Kartu Keluarga ..." />
                                    </div>
                                    <div id="mess_no_kk" class="mb-3"></div>
                                </div>
                                <!-- ------------------------------------- -->

                                <!-- Upload KK -->
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Upload Berkas KK *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <!-- <button class="btn btn-primary input-group-text" id="basic-addon1"
                                            style="padding: 0.9vh;">Unggah
                                            File</button> -->
                                        <input type="file" class="form-control" id="file_kk" name="file_kk" />
                                    </div>
                                    <div id="mess_file_kk" class="mb-3"></div>
                                </div>
                                <!-- --------------------------- -->
                            </div>


                            <div class="row">

                                <!-- Upload KTP Ayah -->
                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Upload Berkas KTP Ayah *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <!-- <button class="btn btn-primary input-group-text" id="basic-addon1"
                                            style="padding: 0.9vh;">Unggah
                                            File</button> -->
                                        <input type="file" class="form-control" id="file_ktp_ayah"
                                            name="file_ktp_ayah" />
                                    </div>
                                    <div id="mess_file_ktp_ayah" class="mb-3"></div>
                                </div>
                                <!-- ---------------------------------------- -->

                                <div class="col-sm-12 col-md-6">
                                    <label class="form-label">Upload Berkas KTP Ibu *</label>
                                    <div class="input-group input-group-sm input-group-outline mb-3">
                                        <!-- <button class="btn btn-primary input-group-text" id="basic-addon1"
                                            style="padding: 0.9vh;">Unggah
                                            File</button> -->
                                        <input type="file" class="form-control" id="file_ktp_ibu" name="file_ktp_ibu" />
                                    </div>
                                    <div id="mess_file_ktp_ibu" class="mb-3"></div>
                                </div>
                                <!-- ---------------------------------------- -->

                            </div>
                            <!-- ---------------------------------------------------------- -->


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
            </