<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="icon" href="<?= base_url('asset/img') ?>/favicon.png" type="image/png">

    <!-- Style Assets -->
    <link rel="stylesheet" href="<?= base_url('asset/bootstrap/css') ?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/fontawesome/css') ?>/all.css">
    <link rel="stylesheet" href="<?= base_url('asset/node_modules/sweetalert2/dist') ?>/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/css') ?>/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('asset/node_modules/lightgallery.js/dist') ?>/css/lightgallery.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <!-- JS Assets -->
    <script src="<?= base_url('asset/js') ?>/jquery.min.js"></script>
    <script src="<?= base_url('asset/node_modules/@popperjs/core/dist/umd') ?>/popper.min.js"></script>
    <script src="<?= base_url('asset/bootstrap/js') ?>/bootstrap.min.js"></script>
    <script src="<?= base_url('asset/fontawesome/js') ?>/all.js"></script>
    <script src="<?= base_url('asset/node_modules/sweetalert2/dist') ?>/sweetalert2.all.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="<?= base_url('asset/node_modules/lightgallery.js/dist') ?>/js/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

</head>

<body>

    <?= $this->renderSection('content'); ?>

    <footer class="main-footer">
        <div class="container-fluid bg-dark text-white mt-4" style="padding:10px 15px 10px 15px">
            <strong>Copyright &copy; 2021 - <?= date('Y') ?> <a href="https://sman1rawamerta.sch.id" target="_blank">SMA Negeri 1 Rawamerta</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                Made with <i class="fas fa-heart" style="color: red;"></i> by Muhamad Ramdani Hidayatullah
            </div>
        </div>
    </footer>

</body>

</html>