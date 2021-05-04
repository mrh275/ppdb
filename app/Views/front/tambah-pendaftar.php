<?= $this->extend('template/admin') ?>
<?= $this->extend('template/sidebar') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Pendaftar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Pendaftar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- Progress Bar -->
            <div class="row">
                <div class="col-12">
                    <div class="progressbar">
                        <div class="step">
                            <p>Data Diri</p>
                            <div class="bullet biodata">
                                <span><i class="fas fa-user-edit"></i></span>
                            </div>
                            <div class="check fas fa-check">

                            </div>
                        </div>
                        <div class="step">
                            <p>Data Orang Tua</p>
                            <div class="bullet ortu">
                                <span><i class="fas fa-user-friends"></i></span>
                            </div>
                            <div class="check fas fa-check">

                            </div>
                        </div>
                        <div class="step">
                            <p>Data Periodik</p>
                            <div class="bullet periodik">
                                <span><i class="fas fa-address-book"></i></span>
                            </div>
                            <div class="check fas fa-check">

                            </div>
                        </div>
                        <div class="step">
                            <p>Lampiran</p>
                            <div class="bullet lampiran">
                                <span><i class="fas fa-upload"></i></span>
                            </div>
                            <div class="check fas fa-check">

                            </div>
                        </div>
                    </div>

                    <!-- <div class="button justify-content-center align-content-center">
                        <button class="btn btn-primary previous">Previous</button>
                        <button class="btn btn-primary next">Next</button>
                    </div> -->
                </div>
            </div>

            <!-- Form -->
            <div class="form-ppdb">

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->

<script>
    //Load form biodata view
    function formBiodata() {
        $.ajax({
            url: "<?= base_url('pendaftar/formbiodata'); ?>",
            dataType: "json",
            success: function(response) {
                $('.form-ppdb').html(response.data);
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
                $('.form-ppdb .form-biodata').addClass('left');
                $('.form-ppdb').html("");
                $('.form-ppdb').html(response.data);
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
                $('.form-ppdb .form-data-orangtua').addClass('left');
                $('.form-ppdb').html("");
                $('.form-ppdb').html(response.data);
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
                $('.form-ppdb .form-periodik').addClass('left');
                $('.form-ppdb').html("");
                $('.form-ppdb').html(response.data);
                setTimeout(function() {
                    $('.form-upload').addClass('open');
                }, 300);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    //Load preview cetak pendaftar
    function previewCetak() {
        $.ajax({
            url: "<?= base_url('pendaftar/previewcetak'); ?>",
            dataType: "json",
            success: function(response) {
                $('.form-ppdb .form-upload').addClass('left');
                $('.form-ppdb').html("");
                $('.form-ppdb').html(response.data);
                setTimeout(function() {
                    $('.previewCetak').addClass('open');
                }, 300);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    //Step bar animation
    function progressBarNext(page) {
        const progressText = document.querySelectorAll(".step p");
        const progressCheck = document.querySelectorAll(".step .check");
        const bullet = document.querySelectorAll(".step .bullet");
        let max = 4;
        let current = page;

        bullet[current - 1].classList.add('active');
        progressCheck[current - 1].classList.add('active')
        progressText[current - 1].classList.add('active')
        current += 1;



    }

    $(document).ready(function() {

        formBiodata();


    });
</script>

<?= $this->endSection() ?>