<form action="<?= base_url('/dataupload/add') ?>" class="form-group form-upload" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <!-- BERKAS AKADEMIS -->
    <div class="row mt-4">
        <dic class="col-lg-12">
            <h4 class="data-periodik">BERKAS AKADEMIS</h4>
        </dic>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_ijazah">Upload Scan Ijazah SMP/MTs</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="file_ijazah" id="ijazah" onchange="previewIjazah()">
            <div class="invalid-feedback">
            </div>
            <label class="custom-file-label label-ijazah" for="ijazah">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-ijazah">
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_skhun">Upload Scan SKHUN SMP/MTs</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="file_skhun" id="skhun" onchange="previewSkhun()">
            <div class="invalid-feedback">
            </div>
            <label class="custom-file-label label-skhun" for="skhun">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-skhun">
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_kk">Upload Scan Kartu Keluarga (KK)</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="file_kk" id="kk" onchange="previewKk()">
            <div class="invalid-feedback">
            </div>
            <label class="custom-file-label label-kk" for="kk">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kk">
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_akte">Upload Scan Akta Kelahiran</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="file_akte" id="akte" onchange="previewAkte()">
            <label class="custom-file-label label-akte" for="akte">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-akte">
        </div>
    </div>

    <!-- PROGRAM KESEJAHTERAAN -->
    <div class="row mt-4">
        <dic class="col-lg-12">
            <h4 class="data-periodik">PROGRAM KESEJAHTERAAN</h4>
        </dic>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="kip">Nomor Kartu Indonesia Pintar (KIP)</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="kip" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_kip">Upload Scan Kartu Indonesia Pintar (KIP)</label>
        </div>
        <div class="col-lg-6 ml-3 custom-file">
            <input type="file" class="custom-file-input" name="file_kip" id="kip" onchange="previewKip()">
            <div class="invalid-feedback">
            </div>
            <label class="custom-file-label label-kip" for="kip">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kip">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="kis">Nomor Kartu Indonesia Sehat (KIS)</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="kis" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_kis">Upload Scan Kartu Indonesia Sehat (KIS)</label>
        </div>
        <div class="col-lg-6 ml-3 custom-file">
            <input type="file" class="custom-file-input" name="file_kis" id="kis" onchange="previewKis()">
            <div class="invalid-feedback">
            </div>
            <label class="custom-file-label label-kis" for="kis">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kis">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="pkh">Nomor Kartu PKH/KKS/KPS/SKTM</label>
        </div>
        <div class="col-lg-8">
            <input type="text" name="pkh" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="file_pkh">Upload Scan Kartu PKH/KKS/KPS/SKTM</label>
        </div>
        <div class="col-lg-6 ml-3 custom-file">
            <input type="file" class="custom-file-input" name="file_pkh" id="pkh" onchange="previewPkh()">
            <div class="invalid-feedback">
            </div>
            <label class="custom-file-label label-pkh" for="pkh">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-pkh">
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-lg-11 d-flex justify-content-end">
            <button class="btn btn-primary btn-simpan" type="button" name="submit">Submit</button>
        </div>
    </div>

</form>

<script>
    // const fileUpload = new FileReader();


    //Ijazah preview
    function previewIjazah() {
        const ijazah = document.querySelector('#ijazah');
        const ijazahLabel = document.querySelector('.label-ijazah');
        const imgIjazah = document.querySelector('.img-ijazah');

        ijazahLabel.textContent = ijazah.files[0].name;
        const fileIjazah = new FileReader();
        fileIjazah.readAsDataURL(ijazah.files[0]);
        fileIjazah.onload = function(e) {
            imgIjazah.src = e.target.result;
        }
    }

    //SKHUN Preview
    function previewSkhun() {
        const skhun = document.querySelector('#skhun');
        const skhunLabel = document.querySelector('.label-skhun');
        const imgskhun = document.querySelector('.img-skhun');

        skhunLabel.textContent = skhun.files[0].name;
        const fileskhun = new FileReader();
        fileskhun.readAsDataURL(skhun.files[0]);
        fileskhun.onload = function(e) {
            imgskhun.src = e.target.result;
        }
    }

    //KK Preview
    function previewKk() {
        const kk = document.querySelector('#kk');
        const kkLabel = document.querySelector('.label-kk');
        const imgkk = document.querySelector('.img-kk');

        kkLabel.textContent = kk.files[0].name;
        const filekk = new FileReader();
        filekk.readAsDataURL(kk.files[0]);
        filekk.onload = function(e) {
            imgkk.src = e.target.result;
        }
    }

    //Akte Preview
    function previewAkte() {
        const akte = document.querySelector('#akte');
        const akteLabel = document.querySelector('.label-akte');
        const imgakte = document.querySelector('.img-akte');

        akteLabel.textContent = akte.files[0].name;
        const fileakte = new FileReader();
        fileakte.readAsDataURL(akte.files[0]);
        fileakte.onload = function(e) {
            imgakte.src = e.target.result;
        }
    }

    //KIP Preview
    function previewKip() {
        const kip = document.querySelector('#kip');
        const kipLabel = document.querySelector('.label-kip');
        const imgkip = document.querySelector('.img-kip');

        kipLabel.textContent = kip.files[0].name;
        const filekip = new FileReader();
        filekip.readAsDataURL(kip.files[0]);
        filekip.onload = function(e) {
            imgkip.src = e.target.result;
        }
    }

    //KIS Preview
    function previewKis() {
        const kis = document.querySelector('#kis');
        const kisLabel = document.querySelector('.label-kis');
        const imgkis = document.querySelector('.img-kis');

        kisLabel.textContent = kis.files[0].name;
        const filekis = new FileReader();
        filekis.readAsDataURL(kis.files[0]);
        filekis.onload = function(e) {
            imgkis.src = e.target.result;
        }
    }

    //PKH Preview
    function previewPkh() {
        const pkh = document.querySelector('#pkh');
        const pkhLabel = document.querySelector('.label-pkh');
        const imgpkh = document.querySelector('.img-pkh');

        pkhLabel.textContent = pkh.files[0].name;
        const filepkh = new FileReader();
        filepkh.readAsDataURL(pkh.files[0]);
        filepkh.onload = function(e) {
            imgpkh.src = e.target.result;
        }
    }

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
                            progressBarNext(4);
                            previewCetak();
                        }
                    )
                }
            );

        });
    });
</script>