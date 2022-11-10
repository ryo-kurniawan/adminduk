<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3"><?= $subJudul ?></h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <form class="mx-3" action="" method="post">
            <fieldset class="mb-4">
              <label><b class="text-success">Informasi: </b> Sebelum mengisi bidang di bawah ini perhartikan tata cara pengisian. Semua bidang yang ditandai dengan (<b class="text-danger">*</b>) itu tandanya bidang wajib diisi dan tidak boleh dikosongkan. Perhatikan penulisan nama lengkap pelapor. Dan untuk ukuran <i class="text-warning">maksimal file</i> yang bisa diunggah adalah <b class="text-danger">3 MB</b>. Format file yang bisa diunggah adalah <i class="text-success"><b>PDF, PNG, JPG</b></i></label>
            </fieldset>
            <fieldset>
              <h6 class="mb-0">Jenis Pelaporan Pencatatan Sipil</h6>
              <div class="form-check mb-1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                <label class="custom-control-label" for="customRadio1">Kelahiran</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                <label class="custom-control-label" for="customRadio2">Lahir Mati</label>
              </div>
            </fieldset>


            <!-- Data Pelapor -->
            <fieldset class="mt-3">
              <h6 class="mb-2">Data Pelapor</h6>

              <!-- Input nama pelapor -->
              <label class="my-0">Perhatikan penulisan nama lengkap pelapor. <b class="text-danger">Nama harus sesuai</b> dengan data kependudukan Dukcapil</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">Nama *</label>
                <input type="text" class="form-control" name="nama-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input nik pelapor -->
              <label class="my-0">Perhatikan penulisan nik pelapor. <b class="text-danger">NIK harus sesuai</b> dengan data kependudukan Dukcapil</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">NIK *</label>
                <input type="text" class="form-control" name="nama-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input nomor dokumen perjalanan pelapor -->
              <label class="my-0">Nomor Dokumen Perjalanan diisl dengan Nomor Dokumen Perjalanan (Paspor), Pelapor Orang
                Asing atau WNI Bukan Penduduk</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">Nomor Dokumen Perjalanan *</label>
                <input type="text" class="form-control" name="no-dokumen-perjalanan-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input nomor kartu keluarga pelapor -->
              <label class="my-0">Nomor Kartu Keluarga diisi dengan Nomor Kartu Keluarga Pelapor, bila Pelapor Orang Asing
                dengan Izin Tinggal Terbatas atau Izin Tinggal Kunjungan maka Nomor Kartu Keluarga Tidak diisi</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" name="no-kartu-keluarga-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input kewarganegaraan pelapor -->
              <label class="mb-0 mt-1"><b class="text-danger">Kewarganegaraan</b> diisi dengan Kewarganegaraan Pelapor</label>
              <div class="input-group input-group-static mb-3 ms-1 mt-0">
                <select class="form-control" id="kewarganegaraan-pelapor">
                  <option selected="">Kewarganegaraan</option>
                  <option>Indonesia</option>
                  <option>Malaysia</option>
                  <option>Singapura</option>
                  <option>Cina</option>
                  <option>Maroko</option>
                </select>
              </div>
              <!-- ---------------------------------------------------------- -->
            </fieldset>

            <!-- Data Subjek Akta kesatu -->
            <fieldset class="my-3">
              <h6 class="mb-2">Data Subjek Akta kesatu</h6>

              <!-- Input nama pelapor -->
              <label class="my-0">Perhatikan penulisan nama lengkap pelapor. <b class="text-danger">Nama harus sesuai</b> dengan data kependudukan Dukcapil</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">Nama *</label>
                <input type="text" class="form-control" name="nama-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input nik pelapor -->
              <label class="my-0">Perhatikan penulisan nik pelapor. <b class="text-danger">NIK harus sesuai</b> dengan data kependudukan Dukcapil</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">NIK *</label>
                <input type="text" class="form-control" name="nama-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input nomor dokumen perjalanan pelapor -->
              <label class="my-0">Nomor Dokumen Perjalanan diisl dengan Nomor Dokumen Perjalanan (Paspor), Pelapor Orang
                Asing atau WNI Bukan Penduduk</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">Nomor Dokumen Perjalanan *</label>
                <input type="text" class="form-control" name="no-dokumen-perjalanan-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input nomor kartu keluarga pelapor -->
              <label class="my-0">Nomor Kartu Keluarga diisi dengan Nomor Kartu Keluarga Pelapor, bila Pelapor Orang Asing
                dengan Izin Tinggal Terbatas atau Izin Tinggal Kunjungan maka Nomor Kartu Keluarga Tidak diisi</label>
              <div class="input-group input-group-sm input-group-outline mb-3">
                <label class="form-label">Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" name="no-kartu-keluarga-pelapor" />
              </div>
              <!-- ---------------------------------------------------------- -->

              <!-- Input kewarganegaraan pelapor -->
              <label class="mb-0 mt-1"><b class="text-danger">Kewarganegaraan</b> diisi dengan Kewarganegaraan Pelapor</label>
              <div class="input-group input-group-static mb-3 ms-1 mt-0">
                <select class="form-control" id="kewarganegaraan-pelapor">
                  <option selected="">Kewarganegaraan</option>
                  <option>Indonesia</option>
                  <option>Malaysia</option>
                  <option>Singapura</option>
                  <option>Cina</option>
                  <option>Maroko</option>
                </select>
              </div>
              <!-- ---------------------------------------------------------- -->
            </fieldset>
          </form>

        </div>
      </div>
    </div>
  </div>

</div>

</div>