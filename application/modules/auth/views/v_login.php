<div class="card z-index-0 fadeIn3 fadeInBottom">
  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
      <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>
    </div>
  </div>
  <div class="card-body">

    <form id="login" role="form" class="text-start">

      <div id="elem_email" class="input-group input-group-outline mt-3">
        <label class="form-label">Email/Username*</label>
        <input id="email" type="text" name="username" class="form-control" />
      </div>
      <div id="err_message_email"></div>

      <div id="elem_pass" class="input-group input-group-outline mt-3">
        <label class="form-label">Password</label>
        <input id="password" type="password" name="password" class="form-control" />
      </div>
      <div id="err_message_password" class="mb-3"></div>

      <div class="text-center">
        <button id="btnLogin" type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
      </div>

      <p class="mt-4 mb-0 text-sm text-center">
        Lupa password?
        <a href="<?= base_url('auth/lupaPassword') ?>" class="text-primary text-gradient font-weight-bold">Reset</a>
      </p>
      <p class="mt-0 text-sm text-center">
        Belum mempunyai akun?
        <a href="https://api.whatsapp.com/send?phone=6282219837340" class="text-primary text-gradient font-weight-bold">Hubungi Admin</a>
      </p>
    </form>


  </div>
</div>