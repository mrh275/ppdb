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
                    <h1 class="m-0 text-dark">Data Pendaftar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pendaftar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('pendaftar/tambah-pendaftar') ?>" class="btn btn-primary tombol-tambah"><i class="fas fa-plus"></i> Tambah Pendaftar</a>
                            <button class="btn btn-success tombol-edit" type="button"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger tombol-hapus" type="button"><i class="fas fa-trash"></i> Hapus</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="datapendaftar" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No Daftar</th>
                                        <th>Nama CPD</th>
                                        <th>NISN</th>
                                        <th>NIK</th>
                                        <th>TTL</th>
                                        <th>Asal Sekolah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pendaftar as $cpd) : ?>
                                        <tr>
                                            <input type="hidden" id="no_regis" name="no_regis" value="<?= $cpd['no_regis'] ?>">
                                            <td><?= $cpd['no_regis'] ?></td>
                                            <td id="namaPendaftar"><?= $cpd['nama'] ?></td>
                                            <td><?= $cpd['nisn'] ?></td>
                                            <td><?= $cpd['nik'] ?></td>
                                            <td><?= $cpd['tempat_lahir'] . ', ' . $cpd['tanggal_lahir'] ?></td>
                                            <td><?= $cpd['asal_sekolah'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->

<script>
    $(document).ready(function() {
        var table = $('#datapendaftar').DataTable({
            "autoWidth": false,
            "responsive": true,
        });

        //Fungsi seleksi row table
        $('#datapendaftar tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected')
            }
        });


    });

    //Fitur tombol edit
    $(document.querySelector(".tombol-edit")).on('click', function() {
        if (document.querySelector("#datapendaftar tbody tr.selected") != null) {
            alert("Sukses");
        } else {
            Swal.fire({
                title: 'Oops!',
                icon: 'warning',
                timer: 2000,
                showCloseButton: true,
                showConfirmButton: true,
                text: 'Silahkan pilih data terlebih dahulu.',
                confirmButtonText: 'Tutup'
            });
        }
    });
    //Fitur tombol hapus
    $(document.querySelector(".tombol-hapus")).on('click', function(e) {
        if (document.querySelector("#datapendaftar tbody tr.selected") != null) {
            let baris = document.querySelector("#datapendaftar tbody tr.selected");
            let no_regis = baris.querySelector("input#no_regis").value;
            let namaPendaftar = baris.querySelector("#namaPendaftar").innerHTML;
            e.preventDefault();
            Swal.fire({
                title: 'Anda yakin?',
                icon: 'warning',
                showCloseButton: true,
                showConfirmButton: true,
                showCancelButton: true,
                text: 'Anda akan menghapus data ' + namaPendaftar + '?',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tutup',
                confirmButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'post',
                        url: '<?= base_url('pendaftar/hapusPendaftar'); ?>',
                        data: {
                            no_regis: no_regis
                        },
                        dataType: 'json',
                        success: function(response) {
                            Swal.fire({
                                title: 'Berhasil',
                                icon: 'success',
                                text: response.sukses,
                                confirmButtonText: 'Tutup',
                                timer: 2000,
                            });
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                        }
                    });
                }
            });
        } else {
            Swal.fire({
                title: 'Oops!',
                icon: 'warning',
                timer: 2000,
                showCloseButton: true,
                showConfirmButton: true,
                text: 'Silahkan pilih data terlebih dahulu.',
                confirmButtonText: 'Tutup'
            });
        }
    });
</script>

<?= $this->endSection() ?>