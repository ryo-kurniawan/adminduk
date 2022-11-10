<form role="form" class="text-start" action="<?php echo base_url('auth/aksi_login'); ?>" method="post">
  <div class="input-group input-group-outline my-3">
    <label class="form-label">Email/Username*</label>
    <input type="username" name="username" class="form-control">

  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">

  </div>

  <div class="text-center">
    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
  </div>
  <p class="mt-4 text-sm text-center">
    Belum mempunyai akun?
    <a href="https://api.whatsapp.com/send?phone=6282219837340" class="text-primary text-gradient font-weight-bold">Hubungi Admin</a>
  </p>
</form>