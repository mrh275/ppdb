<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Style Assets -->
    <!-- <link rel="stylesheet" href="<?= base_url('asset/bootstrap/css') ?>/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('asset/fontawesome/css') ?>/all.css">
    <!-- <link rel="stylesheet" href="<?= base_url('asset/node_modules/sweetalert2/dist') ?>/sweetalert2.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('asset/css') ?>/style.css">

    <!-- JS Assets -->
    <script src="<?= base_url('asset/js') ?>/jquery.min.js"></script>
    <script src="<?= base_url('asset/node_modules/@popperjs/core/dist/umd') ?>/popper.min.js"></script>
    <!-- <script src="<?= base_url('asset/bootstrap/js') ?>/bootstrap.min.js"></script> -->
    <script src="<?= base_url('asset/fontawesome/js') ?>/all.js"></script>
    <!-- <script src="<?= base_url('asset/node_modules/sweetalert2/dist') ?>/sweetalert2.all.min.js"></script> -->

</head>

<body>

    <?= $this->renderSection('content'); ?>

    <script src="<?= base_url('asset/js') ?>/app.js"></script>
</body>

</html>