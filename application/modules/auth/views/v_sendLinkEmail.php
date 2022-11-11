<div class="card z-index-0 fadeIn3 fadeInBottom">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Lupa Password</h4>
        </div>
    </div>
    <div class="card-body">
        <form id="sendLinkEmail" role="form" class="text-start">

            <label class="my-0">Masukkan email yang terdaftar pada aplikasi Adminduk Dukcapil Gorut. Jika proses berhasil silahkan cek link yang dikirimkan di email tersebut.</label>
            <div id="elem_email" class="input-group input-group-outline mt-3">
                <label class="form-label">Email *</label>
                <input id="email" type="text" name="email" class="form-control" autocomplete="off" onfocus="focusInput(this.id)" onblur="blurInput(this.id)" />
            </div>
            <div id="err_message_email" class="mb-3"></div>
            <div id="succ_message_email" class="my-3"></div>

            <div class="text-center">
                <button id="btnSendLink" type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Kirim Link Reset Password</button>
            </div>
            <p class="mt-4 text-sm text-center">
                Sudah mempunyai akun?
                <a href="<?= base_url('auth') ?>" class="text-primary text-gradient font-weight-bold">Login</a>
            </p>
        </form>
    </div>
</div>