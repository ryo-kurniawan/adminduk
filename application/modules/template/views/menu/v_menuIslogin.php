<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'home') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('home'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
        </a>
    </li>
    <?php if ($dataLogin['role'] == 'operator_rs' || $dataLogin['role'] == 'operator_capil') : ?>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'permohonan') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('rs/permohonan'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">local_hospital</i>
            </div>
            <span class="nav-link-text ms-1">RS</span>
        </a>
    </li>
    <?php endif; ?>
    <?php if ($dataLogin['role'] == 'operator_kua' || $dataLogin['role'] == 'operator_capil') : ?>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'kua') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('kua') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">account_balance</i>
            </div>
            <span class="nav-link-text ms-1">KUA</span>
        </a>
    </li>
    <?php endif; ?>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'profile') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('profile') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'settings') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('settings') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">settings</i>
            </div>
            <span class="nav-link-text ms-1">Pengaturan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white pointer" style="cursor: pointer" onclick="return sweetConfirm(event, 'Apakah anda ingin keluar?', '<?= base_url('auth/logout') ?>')">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Keluar</span>
        </a>
    </li>
</ul>