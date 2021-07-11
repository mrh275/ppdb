<form action="<?= base_url('Pendaftar/upload') ?>" class="form-group form-upload" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>

    <!-- BERKAS AKADEMIS -->
    <div class="row mt-4">
        <dic class="col-lg-12">
            <h4 class="data-periodik">BERKAS AKADEMIS</h4>
        </dic>
    </div>

    <div class="row mt-3">
        <div class="col-md-12 edit-data">

        </div>
    </div>
    <input type="hidden" name="no_regis" value="<?= $noRegis ?>">
    <div class="row mt-3 ijazah-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="fileIjazah">Upload Scan Ijazah SMP/MTs</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="fileIjazah" id="fileIjazah" onchange="previewIjazah()">
            <div class="invalid-feedback errorUploadIjazah">
            </div>
            <label class="custom-file-label label-ijazah" for="fileIjazah">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-ijazah">
        </div>
    </div>
    <hr>
    <div class="row mt-3 skhun-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="fileSKHUN">Upload Scan SKHUN SMP/MTs</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="fileSKHUN" id="fileSKHUN" onchange="previewSkhun()">
            <div class="invalid-feedback errorUploadSKHUN">
            </div>
            <label class="custom-file-label label-skhun" for="fileSKHUN">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-skhun">
        </div>
    </div>
    <hr>
    <div class="row mt-3 kk-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="fileKK">Upload Scan Kartu Keluarga (KK)</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="fileKK" id="fileKK" onchange="previewKk()">
            <div class="invalid-feedback errorUploadKK">
            </div>
            <label class="custom-file-label label-kk" for="fileKK">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-kk">
        </div>
    </div>
    <hr>
    <div class="row mt-3 akte-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="fileAkte">Upload Scan Akta Kelahiran</label>
        </div>
        <div class="col-lg-6 custom-file">
            <input type="file" class="custom-file-input" name="fileAkte" id="fileAkte" onchange="previewAkte()">
            <div class="invalid-feedback errorUploadAkte">
            </div>
            <label class="custom-file-label label-akte" for="fileAkte">Choose file</label>
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
            <input type="text" name="kip" id="kip" class="form-control">
            <div class="invalid-feedback errorKIP">
            </div>
        </div>
    </div>
    <div class="row mt-3 kip-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="fileKIP">Upload Scan Kartu Indonesia Pintar (KIP)</label>
        </div>
        <div class="col-lg-6 ml-3 custom-file">
            <input type="file" class="custom-file-input" name="fileKIP" id="fileKIP" onchange="previewKip()">
            <div class="invalid-feedback errorUploadKIP">
            </div>
            <label class="custom-file-label label-kip" for="fileKIP">Choose file</label>
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
            <input type="text" name="kis" id="kis" class="form-control">
            <div class="invalid-feedback errorKIS">
            </div>
        </div>
    </div>
    <div class="row mt-3 kis-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="fileKIS">Upload Scan Kartu Indonesia Sehat (KIS)</label>
        </div>
        <div class="col-lg-6 ml-3 custom-file">
            <input type="file" class="custom-file-input" name="fileKIS" id="fileKIS" onchange="previewKis()">
            <div class="invalid-feedback errorUploadKIS">
            </div>
            <label class="custom-file-label label-kis" for="fileKIS">Choose file</label>
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
            <input type="text" name="pkh" id="pkh" class="form-control">
            <div class="invalid-feedback errorPKH">
            </div>
        </div>
    </div>
    <div class="row mt-3 kks-input">
        <div class="col-lg-3 d-flex align-items-top">
            <label for="filePKH">Upload Scan Kartu PKH/KKS/KPS/SKTM</label>
        </div>
        <div class="col-lg-6 ml-3 custom-file">
            <input type="file" class="custom-file-input" name="filePKH" id="filePKH" onchange="previewPkh()">
            <div class="invalid-feedback errorUploadPKH">
            </div>
            <label class="custom-file-label label-pkh" for="filePKH">Choose file</label>
        </div>
        <div class="col-lg-2">
            <img src="<?= base_url('/asset/img') ?>/default.jpg" alt="" class="img-thumbnail img-pkh">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="berkas-header">
                        LAMPIRAN DAFTAR ULANG
                    </h4>
                </div>
                <div class="card-body galeri">
                    <div class="row">
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox ijazah">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox skhun">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox kk">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox akte">
                                <img src="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox kip">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox kis">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-md-3 berkas">
                            <a href="" data-fancybox="gallery1" class="fancybox kks">
                                <img src="">
                            </a>
                        </div>
                        <div class="col-md-3 berkas">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-lg-11 d-flex justify-content-end">
            <button class="btn btn-primary btn-simpan" type="submit" name="submit">Submit</button>
        </div>
    </div>

</form>

<script>
    // const fileUpload = new FileReader();


    //Ijazah preview
    function previewIjazah() {
        const ijazah = document.querySelector('#fileIjazah');
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
        const skhun = document.querySelector('#fileSKHUN');
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
        const kk = document.querySelector('#fileKK');
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
        const akte = document.querySelector('#fileAkte');
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
        const kip = document.querySelector('#fileKIP');
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
        const kis = document.querySelector('#fileKIS');
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
        const pkh = document.querySelector('#filePKH');
        const pkhLabel = document.querySelector('.label-pkh');
        const imgpkh = document.querySelector('.img-pkh');

        pkhLabel.textContent = pkh.files[0].name;
        const filepkh = new FileReader();
        filepkh.readAsDataURL(pkh.files[0]);
        filepkh.onload = function(e) {
            imgpkh.src = e.target.result;
        }
    }

    function dataUpload() {
        $.ajax({
            url: "<?= base_url('DaftarUlang/getDataUpload'); ?>",
            dataType: "json",
            success: function(response) {
                if (response.upload) {

                    let elemenTombol = document.querySelector('div.edit-data');

                    //Tombol Update Data
                    let tombolUpdate = document.createElement('a');
                    tombolUpdate.setAttribute('class', 'btn btn-primary update-data');
                    tombolUpdate.setAttribute('type', 'button');
                    // tombolUpdate.setAttribute('onclick', 'updateData()');
                    tombolUpdate.setAttribute('href', '<?= base_url("asset/img/akte"); ?>/' + response.upload.file_akte);
                    let iconTombolUpdate = document.createElement('i');
                    iconTombolUpdate.setAttribute('class', 'fas fa-save');
                    let textUpdate = document.createTextNode(' Update Data');
                    tombolUpdate.appendChild(iconTombolUpdate);
                    tombolUpdate.appendChild(textUpdate)

                    //Tombol Edit Data
                    let tombolEdit = document.createElement('button');
                    tombolEdit.setAttribute('class', 'btn btn-success edit-data')
                    tombolEdit.setAttribute('type', 'button');
                    tombolEdit.setAttribute('onclick', 'editData()');
                    let iconTombolEdit = document.createElement('i')
                    iconTombolEdit.setAttribute('class', 'fas fa-edit');
                    let textEdit = document.createTextNode(' Edit Data');
                    tombolEdit.appendChild(iconTombolEdit);
                    tombolEdit.appendChild(textEdit);

                    elemenTombol.append(tombolUpdate, tombolEdit);

                    document.querySelector('button.btn-simpan').remove();

                    $('input').attr('readonly', true);
                    $('select').attr('readonly', true);

                    document.querySelector('div.ijazah-input').setAttribute('style', 'display:none;')
                    document.querySelector('div.skhun-input').setAttribute('style', 'display:none;')
                    document.querySelector('div.kk-input').setAttribute('style', 'display:none;')
                    document.querySelector('div.akte-input').setAttribute('style', 'display:none;')
                    document.querySelector('div.kip-input').setAttribute('style', 'display:none;')
                    document.querySelector('div.kis-input').setAttribute('style', 'display:none;')
                    document.querySelector('div.kks-input').setAttribute('style', 'display:none;')

                    document.querySelector('input#kip').setAttribute('value', '')
                    $('input#kip').val(response.upload.kip)

                    document.querySelector('input#kis').setAttribute('value', '')
                    $('input#kis').val(response.upload.kis)

                    document.querySelector('input#pkh').setAttribute('value', '')
                    $('input#pkh').val(response.upload.kks)

                    let galeri = document.querySelector('.galeri');
                    galeri.querySelector('.ijazah').setAttribute('href', '<?= base_url("asset/img/ijazah"); ?>/' + response.upload.file_ijazah)
                    galeri.querySelector('.ijazah img').setAttribute('src', '<?= base_url("asset/img/ijazah"); ?>/' + response.upload.file_ijazah)
                    galeri.querySelector('.skhun').setAttribute('href', '<?= base_url("asset/img/skhun"); ?>/' + response.upload.file_skhun)
                    galeri.querySelector('.skhun img').setAttribute('src', '<?= base_url("asset/img/skhun"); ?>/' + response.upload.file_skhun)
                    galeri.querySelector('.kk').setAttribute('href', '<?= base_url("asset/img/kk"); ?>/' + response.upload.file_kk)
                    galeri.querySelector('.kk img').setAttribute('src', '<?= base_url("asset/img/kk"); ?>/' + response.upload.file_kk)
                    galeri.querySelector('.akte').setAttribute('href', '<?= base_url("asset/img/akte"); ?>/' + response.upload.file_akte)
                    galeri.querySelector('.akte img').setAttribute('src', '<?= base_url("asset/img/akte"); ?>/' + response.upload.file_akte)
                    galeri.querySelector('.kip').setAttribute('href', '<?= base_url("asset/img/kip"); ?>/' + response.upload.file_kip)
                    galeri.querySelector('.kip img').setAttribute('src', '<?= base_url("asset/img/kip"); ?>/' + response.upload.file_kip)
                    galeri.querySelector('.kis').setAttribute('href', '<?= base_url("asset/img/kis"); ?>/' + response.upload.file_kis)
                    galeri.querySelector('.kis img').setAttribute('src', '<?= base_url("asset/img/kis"); ?>/' + response.upload.file_kis)
                    galeri.querySelector('.kks').setAttribute('href', '<?= base_url("asset/img/pkh"); ?>/' + response.upload.file_kks)
                    galeri.querySelector('.kks img').setAttribute('src', '<?= base_url("asset/img/pkh"); ?>/' + response.upload.file_kks)

                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    $(document).ready(function() {

        dataUpload();

        $('.form-upload').submit(function(e) {
            e.preventDefault();

            let form = $(this)[0];

            let data = new FormData(form);

            $.ajax({
                type: "post",
                url: $(this).attr("action"),
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                success: function(response) {
                    if (response.error) {

                        if (response.error.fileIjazah) {
                            $('input#fileIjazah').addClass('is-invalid');
                            $('.errorUploadIjazah').html(response.error.fileIjazah);
                        } else {
                            $('input#fileIjazah').removeClass('is-invalid');
                            $('.errorUploadIjazah').html('');
                        }

                        if (response.error.fileSKHUN) {
                            $('input#fileSKHUN').addClass('is-invalid');
                            $('.errorUploadSKHUN').html(response.error.fileSKHUN);
                        } else {
                            $('input#fileSKHUN').removeClass('is-invalid');
                            $('.errorUploadSKHUN').html('');
                        }

                        if (response.error.fileKK) {
                            $('input#fileKK').addClass('is-invalid');
                            $('.errorUploadKK').html(response.error.fileKK);
                        } else {
                            $('input#fileKK').removeClass('is-invalid');
                            $('.errorUploadKK').html('');
                        }

                        if (response.error.fileAkte) {
                            $('input#fileAkte').addClass('is-invalid');
                            $('.errorUploadAkte').html(response.error.fileAkte);
                        } else {
                            $('input#fileAkte').removeClass('is-invalid');
                            $('.errorUploadAkte').html('');
                        }

                        if (response.error.kip) {
                            $('input#kip').addClass('is-invalid');
                            $('.errorKIP').html(response.error.kip);
                        } else {
                            $('input#kip').removeClass('is-invalid');
                            $('.errorKIP').html('');
                        }

                        if (response.error.fileKIP) {
                            $('input#fileKIP').addClass('is-invalid');
                            $('.errorUploadKIP').html(response.error.fileKIP);
                        } else {
                            $('input#fileKIP').removeClass('is-invalid');
                            $('.errorUploadKIP').html('');
                        }

                        if (response.error.kis) {
                            $('input#kis').addClass('is-invalid');
                            $('.errorKIS').html(response.error.kis);
                        } else {
                            $('input#kis').removeClass('is-invalid');
                            $('.errorKIS').html('');
                        }

                        if (response.error.fileKIS) {
                            $('input#fileKIS').addClass('is-invalid');
                            $('.errorUploadKIS').html(response.error.fileKIS);
                        } else {
                            $('input#fileKIS').removeClass('is-invalid');
                            $('.errorUploadKIS').html('');
                        }

                        if (response.error.pkh) {
                            $('input#pkh').addClass('is-invalid');
                            $('.errorPKH').html(response.error.pkh);
                        } else {
                            $('input#pkh').removeClass('is-invalid');
                            $('.errorPKH').html('');
                        }

                        if (response.error.filePKH) {
                            $('input#filePKH').addClass('is-invalid');
                            $('.errorUploadPKH').html(response.error.filePKH);
                        } else {
                            $('input#filePKH').removeClass('is-invalid');
                            $('.errorUploadPKH').html('');
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
                                        window.location.href = "<?= base_url('daftar-ulang/selesai'); ?>"
                                    }
                                );
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