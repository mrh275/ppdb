<?= $this->extend('template/daftar-ulang') ?>

<?= $this->section('content') ?>

<nav class="navbar daftar-ulang-page navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
    <a class="navbar-brand" href="#">
        <img src="<?= base_url('asset/img') ?>/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo SMAN 1 Rawamerta">
        &nbsp;PPDB SMA NEGERI 1 RAWAMERTA
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link menuBiodata" href="#">Biodata</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link menuDataOrangTua" href="#">Data Orang Tua</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menuDataPeriodik" href="#">Data Periodik</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menuDataUpload" href="#">Lampiran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menuLogout" href="#">Logout</a>
        </li>
    </ul>
</nav>

<div class="container">
    <div class="row header-daftar-ulang mt-3" style="display: none;">
        <div class="col-md-12 d-flex text-center justify-content-center">
            <img src="<?= base_url('asset/img') ?>/logo-big.png" alt="Logo SMAN 1 Rawamerta" class="brand-daftar-ulang">
        </div>
    </div>
    <div class="row header-daftar-ulang mt-3" style="display: none;">
        <div class="col-md-12 text-center">
            <h4 class="daftar-ulang-ppdb">
                PENERIMAAN PESERTA DIDIK BARU<br>
                TAHAP 2<br>
                SMA NEGERI 1 RAWAMERTA<br>
                TAHUN PELAJARAN 2021/2022
            </h4>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h4 class="daftar-ulang">
                FORMULIR DAFTAR ULANG
            </h4>
        </div>
    </div>

    <div class="formulir-daftar-ulang">

    </div>
</div>

<script>
    let widthScreen = screen.width;
    let navbar = document.querySelector('nav');
    let menu = document.querySelector('ul.navbar-nav');
    if (widthScreen < 576) {
        navbar.classList.toggle("fixed-bottom");
        navbar.classList.remove("justify-content-between");
        navbar.classList.toggle("justify-content-center");
        // navbar.classList.toggle("align-middle");
        menu.querySelector('a.menuBiodata').innerHTML = "";
        menu.querySelector('a.menuBiodata').innerHTML = '<i class="fas fa-user"></i>';
        menu.querySelector('a.menuDataOrangTua').innerHTML = "";
        menu.querySelector('a.menuDataOrangTua').innerHTML = '<i class="fas fa-users"></i>';
        menu.querySelector('a.menuDataPeriodik').innerHTML = "";
        menu.querySelector('a.menuDataPeriodik').innerHTML = '<i class="fas fa-address-book"></i>';
        menu.querySelector('a.menuDataUpload').innerHTML = "";
        menu.querySelector('a.menuDataUpload').innerHTML = '<i class="fas fa-upload"></i>';
        menu.querySelector('a.menuLogout').innerHTML = "";
        menu.querySelector('a.menuLogout').innerHTML = '<i class="fas fa-sign-out-alt"></i>';

    } else {
        navbar.classList.remove("fixed-bottom");
        navbar.classList.remove("justify-content-center");
    }

    //Load form biodata view
    function formBiodata() {
        $.ajax({
            url: "<?= base_url('pendaftar/formbiodata'); ?>",
            dataType: "json",
            success: function(response) {
                $('.formulir-daftar-ulang').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    };

    //Load form orang tua view
    function formOrangtua() {
        $.ajax({
            url: "<?= base_url('pendaftar/formorangtua'); ?>",
            dataType: "json",
            success: function(response) {
                $('.formulir-daftar-ulang .form-biodata').addClass('left');
                $('.formulir-daftar-ulang').html("");
                $('.formulir-daftar-ulang').html(response.data);
                setTimeout(function() {
                    $('.form-data-orangtua').addClass('open');
                }, 300);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    //Load form periodik view
    function formPeriodik() {
        $.ajax({
            url: "<?= base_url('pendaftar/formperiodik'); ?>",
            dataType: "json",
            success: function(response) {
                $('.formulir-daftar-ulang .form-data-orangtua').addClass('left');
                $('.formulir-daftar-ulang').html("");
                $('.formulir-daftar-ulang').html(response.data);
                setTimeout(function() {
                    $('.form-periodik').addClass('open');
                }, 300);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    //Load form upload view
    function formUpload() {
        $.ajax({
            url: "<?= base_url('pendaftar/formupload'); ?>",
            dataType: "json",
            success: function(response) {
                $('.formulir-daftar-ulang .form-periodik').addClass('left');
                $('.formulir-daftar-ulang').html("");
                $('.formulir-daftar-ulang').html(response.data);
                setTimeout(function() {
                    $('.form-upload').addClass('open');
                }, 300);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    $(document).ready(function() {
        formBiodata();

        $('ul.navbar-nav a.menuBiodata').on('click', function() {
            Swal.fire({
                title: 'Sedang memuat data',
                timer: 1000,
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: function() {
                    Swal.showLoading()
                }
            }).then(
                (dismiss) => {
                    formBiodata();
                }
            );
        });
        $('ul.navbar-nav a.menuDataOrangTua').on('click', function() {
            Swal.fire({
                title: 'Sedang memuat data',
                timer: 1000,
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: function() {
                    Swal.showLoading()
                }
            }).then(
                (dismiss) => {
                    formOrangtua();
                }
            );
        });
        $('ul.navbar-nav a.menuDataPeriodik').on('click', function() {
            Swal.fire({
                title: 'Sedang memuat data',
                timer: 1000,
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: function() {
                    Swal.showLoading()
                }
            }).then(
                (dismiss) => {
                    formPeriodik();
                }
            );
        });
        $('ul.navbar-nav a.menuDataUpload').on('click', function() {
            Swal.fire({
                title: 'Sedang memuat data',
                timer: 1000,
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: function() {
                    Swal.showLoading()
                }
            }).then(
                (dismiss) => {
                    formUpload();
                }
            );
        });
    })
</script>

<?= $this->endSection() ?>