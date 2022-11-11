<div class="card z-index-0 fadeIn3 fadeInBottom">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Reset Password</h4>
        </div>
    </div>
    <div class="card-body">
        <!-- <form id="resetPassword" role="form" class="text-start" action="<?php echo base_url('auth/proses_resetPassoword?hash=' . $hash); ?>" method="post"> -->
        <form id="resetPassword" role="form" class="text-start">
            <label class="my-0">Ganti password anda dengan password baru. Mohon link ini jangan dibagikan ke orang lain. Link mempunyai batas kadaluarsa.</label>

            <input id="hash" type="hidden" value="<?= $hash ?>" class="form-control" />
            <div class="my-3">
                <div id="elem_pass" class="input-group input-group-outline mb-0">
                    <label class="form-label">Password Baru *</label>
                    <input id="password" type="password" name="password_baru" class="form-control" onfocus="focusInput(this.id)" onblur="blurInput(this.id)">
                </div>
                <div id="err_message_pass" class="mb-3"></div>
            </div>

            <div class="mb-3">
                <div id="elem_ulangi_password" class="input-group input-group-outline mb-0">
                    <label class="form-label">Ulangi Password *</label>
                    <input id="ulangi_password" type="password" name="ulangi_password" class="form-control" onfocus="focusInput(this.id)" onblur="blurInput(this.id)">
                </div>
                <div id="err_message_ulang_pass" class="mb-3"></div>
            </div>

            <div class="text-center">
                <button id="btnResetPassword" type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Reset Password</button>
            </div>
            <p class="mt-4 mb-0 text-sm text-center">
                Link telah kadaluarsa?
                <a href="<?= base_url('auth/lupaPassword') ?>" class="text-primary text-gradient font-weight-bold">Kirim Ulang Link Reset</a>
            </p>
            <p class="mt-0 text-sm text-center">
                Sudah mempunyai akun?
                <a href="<?= base_url('auth') ?>" class="text-primary text-gradient font-weight-bold">Login</a>
            </p>
        </form>
    </div>
</div>