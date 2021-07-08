<?= $this->extend('template/daftar-ulang') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row header-hasil-seleksi mt-3">
        <div class="col-md-12 d-flex text-center justify-content-center">
            <img src="<?= base_url('asset/img') ?>/logo-big.png" alt="Logo SMAN 1 Rawamerta" class="brand-daftar-ulang" style="width: 70px;">
        </div>
    </div>
    <div class="row header-hasil-seleksi mt-3">
        <div class="col-md-12 text-center">
            <h4 class="daftar-ulang-ppdb">
                PENERIMAAN PESERTA DIDIK BARU<br>
                SMA NEGERI 1 RAWAMERTA<br>
                TAHUN PELAJARAN 2021/2022
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h4 class="hasil-seleksi">
                HASIL SELEKSI<br>
                TAHAP 2<br>
            </h4>
        </div>
    </div>
    <form action="" class="form-group form-hasil-seleksi" method="post">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <label for="inputSeleksi">Masukan Nomor Pendaftaran</label>
                <input type="text" name="inputSeleksi" id="inputSeleksi" class="form-control mb-3">
                <button class="btn btn-primary" type="submit">Cek Hasil Seleksi</button>
            </div>
            <div class="col-md-3"></div>
        </div>
    </form>

    <div class="row mt-3">
        <div class="col-md-12">
            <h4 class="data-peserta font-weight-bold">DATA PESERTA PPDB TAHAP 2</h4>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <table id="daftarPeserta" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nomor Pendaftaran</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>TTL</th>
                        <th>Asal Sekolah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasilSeleksi as $hasil) : ?>
                        <tr>
                            <td style="vertical-align: middle; text-align:center""><?= $hasil['no_regis'] ?></td>
                            <td style=" vertical-align: middle;"><?= $hasil['nama'] ?></td>
                            <td style="vertical-align: middle; text-align:center"><?= $hasil['nisn'] ?></td>
                            <td style="vertical-align: middle;"><?= $hasil['tempat_lahir'] . ', ' . date("d-m-Y", strtotime($hasil['tanggal_lahir'])) ?></td>
                            <td style="vertical-align: middle; text-align:center"><?= $hasil['asal_sekolah'] ?></td>
                            <td style="vertical-align: middle; text-align:center"><?= $hasil['status'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#daftarPeserta').DataTable({
            scrollX: 300,
            scroller: true,

        });
    });

    let inputSeleksi = $('.form-hasil-seleksi');
    let tombol = $('button.btn-primary');
    inputSeleksi.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: '<?= base_url('hasilseleksi/cekhasilseleksi') ?>',
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    Swal.fire({
                        title: response.error,
                        icon: 'warning',
                        html: '<span>Silahkan hubungi panitia</span><br><span>Link WA Panitia : <a href="https://wa.me/6285155288214" target="_blank">Klik disini</a></span>'
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
    });
</script>

<?= $this->endSection() ?>