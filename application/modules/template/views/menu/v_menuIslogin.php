<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'home') ? 'bg-gradient-primary active' : '' ?>" href="<?php echo base_url('home'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'permohonan') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('rs/permohonan'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">create</i>
            </div>
            <span class="nav-link-text ms-1">Permohonan</span>
        </a>
    </li>

    <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">KUA</h6>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'createpermohonan') ? 'bg-gradient-primary active' : '' ?>" href="<?php echo base_url('kua/createpermohonan') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">create</i>
            </div>
            <span class="nav-link-text ms-1">Buat Permohonan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'processpermohonan') ? 'bg-gradient-primary active' : '' ?>" href="<?php echo base_url('kua/processpermohonan') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">swap_horiz</i>
            </div>
            <span class="nav-link-text ms-1">Proses Permohonan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'realizedpermohonan') ? 'bg-gradient-primary active' : '' ?>" href="<?php echo base_url('kua/realizedpermohonan') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">done_all</i>
            </div>
            <span class="nav-link-text ms-1">Permohonan Terealisasi</span>
        </a>
    </li>

    <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white " href="<?php echo base_url(); ?>pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
        </a>
    </li>
</ul>