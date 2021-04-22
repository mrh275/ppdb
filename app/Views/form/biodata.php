<?= form_open('biodata/add', ['class' => 'form-group form-biodata']) ?>
<?= csrf_field(); ?>
<div class="modal-body">
    <div class="row mt-4">
        <div class="col-lg-12">
            <h4 class="biodata-siswa">BIODATA SISWA</h4>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="no_regis">Nomor Pendaftaran</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="no_regis" id="no_regis">
            <div class="invalid-feedback errorNoRegis">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="nama">Nama Lengkap</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="nama" id="nama">
            <div class="invalid-feedback errorNama">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="jk">Jenis Kelamin</label>
        </div>
        <div class="col-lg-9">
            <select name="jk" id="jk" class="form-control">
                <option value="">Pilih :</option>
                <option value="L">Laki - laki</option>
                <option value="P">Perempuan</option>
            </select>
            <div class="invalid-feedback errorJK">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="nisn">NISN</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="nisn" id="nisn">
            <div class="invalid-feedback errorNISN">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="nik">NIK (Nomor Induk Kependudukan)</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="nik" id="nik">
            <div class="invalid-feedback errorNIK">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="kk">Nomor KK (Kartu Keluarga)</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="kk" id="kk">
            <div class="invalid-feedback errorKK">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="anak_ke_berapa">Anak keberapa</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="anak_ke_berapa" id="anak_ke_berapa">
            <div class="invalid-feedback errorAnakKeBerapa">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="tempatlahir">Tempat Lahir</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="tempatlahir" id="tempatlahir">
            <div class="invalid-feedback errorTempatLahir">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="tgl_lahir">Tanggal Lahir</label>
        </div>
        <div class="col-lg-9">
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
            <div class="invalid-feedback errortgl_lahir">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="no_akte">Nomor Akte Kelahiran</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="no_akte" id="akte">
            <div class="invalid-feedback errorAkte">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="agama">Agama</label>
        </div>
        <div class="col-lg-9">
            <select name="agama" id="agama" class="form-control">
                <option value="">Pilih :</option>
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Protestan</option>
                <option value="4">Hindu</option>
                <option value="5">Budha</option>
                <option value="6">Khong Hucu</option>
                <option value="99">Lainnya</option>
            </select>
            <div class="invalid-feedback errorAgama">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="alamat">Alamat Jalan</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="alamat" id="alamat">
            <div class="invalid-feedback errorAlamat">

            </div>
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="dusun">Nama Dusun</label>
        </div>
        <div class="col-lg-3">
            <input type="text" class="form-control" name="dusun" id="dusun">
            <div class="invalid-feedback errorDusun">

            </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
            <label for="rt">RT</label>
        </div>
        <div class="col-lg-2">
            <input type="text" class="form-control" name="rt" id="rt">
            <div class="invalid-feedback errorRT">

            </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
            <label for="rw">RW</label>
        </div>
        <div class="col-lg-2">
            <input type="text" class="form-control" name="rw" id="rw">
            <div class="invalid-feedback errorRW">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="desa">Desa/Kelurahan</label>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="desa" id="desa">
            <div class="invalid-feedback errorDesa">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="kecamatan">Kecamatan</label>
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="kecamatan" id="kecamatan">
            <div class="invalid-feedback errorKecamatan">

            </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
            <label for="pos">Kode POS</label>
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" name="pos" id="pos">
            <div class="invalid-feedback errorPOS">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="tinggal">Tempat Tinggal</label>
        </div>
        <div class="col-lg-9">
            <select name="tinggal" id="tinggal" class="form-control">
                <option value="">Pilih :</option>
                <option value="1">Bersama Orang Tua</option>
                <option value="2">Kos</option>
                <option value="3">Asrama</option>
                <option value="4">Pondok Pesantren</option>
                <option value="99">Lainnya</option>
            </select>
            <div class="invalid-feedback errorTinggal">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-center">
            <label for="transportasi">Mode Transportasi</label>
        </div>
        <div class="col-lg-9">
            <select name="transportasi" id="transportasi" class="form-control">
                <option value="">Pilih :</option>
                <option value="1">Jalan kaki</option>
                <option value="2">Kendaraan Pribadi</option>
                <option value="3">Angkutan Umum/Pete - pete</option>
                <option value="4">Bus Sekolah</option>
                <option value="99">Lainnya</option>
            </select>
            <div class="invalid-feedback errorTransportasi">

            </div>
        </div>
    </div>
</div>
<div class="modal-footer justify-content-end">
    <button type="button" class="btn btn-primary btn-simpan">Simpan</button>
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
                            progressBarNext(1);
                            formOrangtua();
                        }
                    )
                }
            );

        });
    });
</script>
<?= form_close(); ?>