<?= form_open('pendaftar/addPeriodik', ['class' => 'form-group form-periodik']) ?>
<?= csrf_field(); ?>
<div class="row mt-4">
    <dic class="col-lg-12">
        <h4 class="data-periodik">DATA PERIODIK</h4>
    </dic>
</div>
<div class="row mt-3">
    <input type="hidden" name="no_regis" value="<?= $noRegis ?>">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="asal_sekolah">Nama Sekolah Asal (SMP/MTs)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="asalSekolah" name="asal_sekolah">
        <div class="invalid-feedback errorAsalSekolah">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="nopes_un">Nomor Peserta UN SMP/MTs</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="nopesUN" name="nopes_un">
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="no_ijazah">Nomor Seri Ijazah SMP/MTs</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="noIjazah" name="no_ijazah">
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="no_skhun">Nomor Seri SKHUN SMP/MTs</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="noSkhun" name="no_skhun">
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="tinggi_badan">Tinggi Badan (cm)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="tinggiBadan" name="tinggi_badan">
        <div class="invalid-feedback errorTinggiBadan">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="berat_badan">Berat Badan (kg)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="beratBadan" name="berat_badan">
        <div class="invalid-feedback errorBeratBadan">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="hobi">Hobi</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="hobi" name="hobi">
        <div class="invalid-feedback errorHobi">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="cita_cita">Cita - cita</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="citaCita" name="cita_cita">
        <div class="invalid-feedback errorCitaCita">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="jarak_rumah">Jarak Tempat Tinggal ke sekolah (m)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="jarakRumah" name="jarak_rumah">
        <div class="invalid-feedback errorJarakRumah">
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-3 d-flex align-items-center">
        <label for="waktu_tempuh">Waktu tempuh ke sekolah (menit)</label>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="waktuTempuh" name="waktu_tempuh">
        <div class="invalid-feedback errorWaktuTempuh">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-end">
        <button class="btn btn-primary btn-simpan" type="submit">Submit</button>
    </div>
</div>

<?= form_close() ?>

<script>
    $(document).ready(function() {
        $('form.form-periodik').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.error) {

                        if (response.error.asalSekolah) {
                            $('input#asalSekolah').addClass('is-invalid');
                            $('.errorAsalSekolah').html(response.error.asalSekolah);
                        } else {
                            $('input#asalSekolah').removeClass('is-invalid');
                            $('.errorAsalSekolah').html('');
                        }

                        if (response.error.tinggiBadan) {
                            $('input#tinggiBadan').addClass('is-invalid');
                            $('.errorTinggiBadan').html(response.error.tinggiBadan);
                        } else {
                            $('input#tinggiBadan').removeClass('is-invalid');
                            $('.errorTinggiBadan').html('');
                        }

                        if (response.error.beratBadan) {
                            $('input#beratBadan').addClass('is-invalid');
                            $('.errorBeratBadan').html(response.error.beratBadan);
                        } else {
                            $('input#beratBadan').removeClass('is-invalid');
                            $('.errorBeratBadan').html('');
                        }

                        if (response.error.hobi) {
                            $('input#hobi').addClass('is-invalid');
                            $('.errorHobi').html(response.error.hobi);
                        } else {
                            $('input#hobi').removeClass('is-invalid');
                            $('.errorHobi').html('');
                        }

                        if (response.error.citaCita) {
                            $('input#citaCita').addClass('is-invalid');
                            $('.errorCitaCita').html(response.error.citaCita);
                        } else {
                            $('input#citaCita').removeClass('is-invalid');
                            $('.errorCitaCita').html('');
                        }

                        if (response.error.jarakRumah) {
                            $('input#jarakRumah').addClass('is-invalid');
                            $('.errorJarakRumah').html(response.error.jarakRumah);
                        } else {
                            $('input#jarakRumah').removeClass('is-invalid');
                            $('.errorJarakRumah').html('');
                        }

                        if (response.error.waktuTempuh) {
                            $('input#waktuTempuh').addClass('is-invalid');
                            $('.errorWaktuTempuh').html(response.error.waktuTempuh);
                        } else {
                            $('input#waktuTempuh').removeClass('is-invalid');
                            $('.errorWaktuTempuh').html('');
                        }

                    } else {
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
                                        formUpload();
                                    }
                                )
                            }
                        );
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });

        });
    });
</script>