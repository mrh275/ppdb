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

    <form action="<?= base_url('daftarulang/cekdataseleksi') ?>" class="form-group" method="post">
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

</script>

<?= $this->endSection() ?>