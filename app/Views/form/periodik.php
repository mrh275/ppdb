<?= form_open('biodata/add', ['class' => 'form-group form-periodik']) ?>
<?= csrf_field(); ?>
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-periodik">DATA PERIODIK</h4>
    </dic>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="asal_sekolah">Nama Sekolah Asal (SMP/MTs)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="asal_sekolah">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nopes_un">Nomor Peserta UN SMP/MTs</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="nopes_un">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="no_ijazah">Nomor Seri Ijazah SMP/MTs</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="no_ijazah">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="no_skhun">Nomor Seri SKHUN SMP/MTs</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="no_skhun">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tinggi_badan">Tinggi Badan (cm)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="tinggi_badan">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="berat_badan">Berat Badan (kg)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="berat_badan">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="hobi">Hobi</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="hobi">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="cita_cita">Cita - cita</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="cita_cita">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="jarak_rumah">Jarak Tempat Tinggal ke sekolah (m)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="jarak_rumah">
        <div class="invalid-feedback">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="waktu_tempuh">Waktu tempuh ke sekolah (menit)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" name="waktu_tempuh">
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
                            progressBarNext(3);
                            formUpload();
                        }
                    )
                }
            );

        });
    });
</script>

<?= form_close() ?>