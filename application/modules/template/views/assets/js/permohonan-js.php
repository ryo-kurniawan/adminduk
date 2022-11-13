<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/plugins/jkanban/jkanban.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="<?= base_url() ?>material-dashboard-2-pro/assets/js/material-dashboard.min.js?v=3.0.6"></script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="<?= base_url('material-dashboard-2-pro/assets/js/plugins/sweetalert.min.js') ?>"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<!-- MyScript -->
<script src="<?= base_url('myScript/initMyScript.js') ?>"></script>
<!-- <script src="<?= base_url() ?>myScript/isLogin/rs/laporan.js"></script> -->
<script src="<?= base_url() ?>myScript/isLogin/rs/laporan1.js"></script>
<script>
    $(document).ready( function () {
        $('#table-kua').DataTable();
    } );
</script>
<?php if($this->session->flashdata('success')): ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: "<?= $this->session->flashdata('success') ?>",
            showConfirmButton: false,
            timer: 2000
        })
    </script>
<?php endif; ?>
<?php if($this->session->flashdata('danger')): ?>
    <script type="text/javascript">
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: "<?= $this->session->flashdata('danger') ?>",
            showConfirmButton: false,
            timer: 2000
        })
    </script>
<?php endif; ?>
<script>
    const sweetConfirm = (e, msg, rdr) => {
        e.preventDefault()
        Swal.fire({
            title: msg,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = rdr
            }
        })
    }
</script>