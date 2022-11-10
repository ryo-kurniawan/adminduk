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
            <span class="nav-link-text ms-1">Permohonan RS</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white <?= ($isActiveMenu == 'permohonan_kua') ? 'bg-gradient-primary active' : '' ?>" href="<?= base_url('kua/permohonankua'); ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">create</i>
            </div>
            <span class="nav-link-text ms-1">Permohonan KUA</span>
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