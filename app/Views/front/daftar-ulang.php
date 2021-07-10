<?= $this->extend('template/daftar-ulang') ?>

<?= $this->section('content') ?>

<div class="container daftar-ulang">
    <div class="row mt-5">
        <div class="col-md-12 text-center d-flex justify-content-center">
            <img src="<?= base_url('asset/img') ?>/logo-big.png" alt="" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mt-3">
            <h4 class="daftar-ulang">
                PORTAL
            </h4>
            <h4 class="daftar-ulang">
                DAFTAR ULANG TAHAP 2
            </h4>
            <h4 class="daftar-ulang">
                PENERIMAAN PESERTA DIDIK BARU
            </h4>
            <h4 class="daftar-ulang">
                TAHUN PELAJARAN 2021/2022
            </h4>
        </div>
    </div>

    <form action="" class="form-group form-daftar-ulang" method="post">
        <div class="row mt-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <label for="input-daftar-ulang">Masukan Nomor Pendaftaran</label><br>
                <input type="text" name="noRegis" id="input-daftar-ulang" class="form-control"><br>
                <button class="btn btn-primary" type="submit">Cek Data Peserta</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>

</div>

<script>
    $(document).ready(function() {
        $('.form-daftar-ulang').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: '<?= base_url('DaftarUlang/cekDataSeleksi') ?>',
                data: $(this).serialize(),
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        Swal.fire({
                            title: response.error,
                            icon: 'warning',
                            text: response.error
                        })
                    } else {
                        Swal.fire({
                            title: 'Sedang memeriksa data',
                            timer: 1000,
                            allowEscapeKey: false,
                            allowOutsideClick: false,
                            didOpen: function() {
                                Swal.showLoading()
                            }
                        }).then(
                            (dismiss) => {
                                Swal.fire({
                                    icon: 'success',
                                    title: response.sukses,
                                    html: '<table style="text-align : left"><tr><td><label for="noRegis">Nomor Pendaftaran &nbsp;</td><td>&nbsp;: ' + response.data.no_regis + '</td></tr><tr><td><label for="nama">Nama Lengkap </td><td>&nbsp;: ' + response.data.nama + '</td></tr></table>',
                                    width: 700,
                                    showConfirmButton: true,
                                    confirmButtonText: 'Daftar Ulang',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    showCancelButton: true,
                                    cancelButtonText: 'Nanti dulu deh'
                                }).then(
                                    (result) => {
                                        if (result.isConfirmed) {
                                            window.location.href = "<?= base_url('daftar-ulang/form-daftar-ulang'); ?>"
                                        }
                                    }
                                )
                            }
                        )
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        })
    })
</script>

<?= $this->endSection() ?>