<?= form_open('biodata/add', ['class' => 'form-group form-data-orangtua']) ?>
<?= csrf_field(); ?>
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-ayah">DATA AYAH KANDUNG</h4>
    </dic>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama_ayah">Nama Lengkap Ayah</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nama_ayah">
        <div class="invalid-feedback">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik_ayah">NIK Ayah</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nik_ayah">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tahun_lahir_ayah">Tahun Lahir Ayah</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="tahun_lahir_ayah">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pendidikan_ayah">Pendidikan Terakhir Ayah</label>
    </div>
    <div class="col-lg-9">
        <select name="pendidikan_ayah" id="pendidikan_ayah" class="form-control">
            <option value="">Pilih :</option>
            <option value="1">Tidak bersekolah</option>
            <option value="2">SD Sederajat</option>
            <option value="3">SMP Sederajat</option>
            <option value="4">SMA Sederajat</option>
            <option value="5">Diploma 1 (D1)</option>
            <option value="6">Diploma 2 (D2)</option>
            <option value="7">Diploma 3 (D3)</option>
            <option value="8">Sarjana (S1)</option>
            <option value="9">Magister (S2)</option>
            <option value="10">Doktor (S3)</option>
        </select>
        <div class="invalid-feedback">

        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
    </div>
    <div class="col-lg-9">
        <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
            <option value="">Pilih :</option>
            <option value="1"></option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="penghasilan_ayah">Penghasilan Bulanan Ayah</label>
    </div>
    <div class="col-lg-9">
        <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>

<!-- Form Ibu -->
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-ayah">DATA IBU KANDUNG</h4>
    </dic>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama_ibu">Nama Lengkap Ibu</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nama_ibu">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik_ibu">NIK Ibu</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nik_ibu">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tahun_lahir_ibu">Tahun Lahir Ibu</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="tahun_lahir_ibu">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pendidikan_ibu">Pendidikan Terakhir Ibu</label>
    </div>
    <div class="col-lg-9">
        <select name="pendidikan_ibu" id="pendidikan_ibu" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
    </div>
    <div class="col-lg-9">
        <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="penghasilan_ibu">Penghasilan Bulanan Ibu</label>
    </div>
    <div class="col-lg-9">
        <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>

<!-- Form Wali -->
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-ayah">DATA WALI</h4>
    </dic>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nama_wali">Nama Lengkap Wali</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nama_wali">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nik_wali">NIK Wali</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nik_wali">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tahun_lahir_wali">Tahun Lahir Wali</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="tahun_lahir_wali">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pendidikan_wali">Pendidikan Terakhir Wali</label>
    </div>
    <div class="col-lg-9">
        <select name="pendidikan_wali" id="pendidikan_wali" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="pekerjaan_wali">Pekerjaan Wali</label>
    </div>
    <div class="col-lg-9">
        <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="penghasilan_wali">Penghasilan Bulanan Wali</label>
    </div>
    <div class="col-lg-9">
        <select name="penghasilan_wali" id="penghasilan_wali" class="form-control">
            <option value="">Pilih :</option>
        </select>
        <div class="invalid-feedback">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-end">
        <button class="btn btn-primary btn-simpan" type="button" name="submit">Submit</button>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.btn-simpan').click(function() {
            Swal.fire({
                title: 'Sedang menyimpan data',
                timer: 1000,
                allowEscapeKey: false,
                allowOutsideClick: false,
                onOpen: function() {
                    Swal.showLoading()
                }
            }).then(
                (dismiss) => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Yeay!',
                        text: 'Data berhasil disimpan',
                        timer: 1000,
                        showConfirmButton: false
                    }).then(
                        (dismiss) => {
                            progressBarNext(2);
                            formPeriodik();
                        }
                    )
                }
            );

        });
    });
</script>

<?= form_close() ?>