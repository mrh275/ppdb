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
                    <h1 class="m-0 text-dark">Validasi Pendaftar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Validasi Pendaftar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <a href="<?= base_url('pendaftar/tambah-pendaftar') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pendaftar</a>
                            <button class="btn btn-success btn-valid-sm" type="button"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger" type="button"><i class="fas fa-trash"></i> Hapus</button>
                        </div>
                        /.card-header -->
                        <div class="card-body">
                            <table id="validasi-pendaftar" class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th>No Daftar</th>
                                        <th>Nama CPD</th>
                                        <th>NISN</th>
                                        <th>TTL</th>
                                        <th>Asal Sekolah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPDB-010</td>
                                        <td>Muhamad Ramdani Hidayatullah</td>
                                        <td>0098178362</td>
                                        <td>Karawang, 30 Januari 1997</td>
                                        <td>MTsN Jatisari</td>
                                        <td>
                                            <button class="btn btn-warning btn-edit-sm btn-sm"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-success btn-valid-sm btn-sm"><i class="fas fa-check-square"></i></button>
                                            <button class="btn btn-secondary btn-print-sm btn-sm"><i class="fas fa-print"></i></button>
                                        </td>
                                    </tr>

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
        var table = $('#validasi-pendaftar').DataTable({
            "autoWidth": false,
            "responsive": true,
            "columns": [{
                    "width": "55"
                },
                null,
                null,
                null,
                null,
                null,
            ],
        });

        //Fungsi seleksi row table
        $('#validasi-pendaftar tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected')
            }
        });

        //Validation onclick
        $('.btn-success').on('click', function() {
            Swal.fire({
                icon: 'warning',
                title: 'Anda yakin?',
                confirmButtonText: 'Ya',
                showCancelButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                cancelButtonText: 'Kembali',
                text: 'Data Muhamad Ramdani Hidayatullah akan divalidasi.',
                footer: '<strong>Peringatan!</strong> &nbsp; Data yang sudah divalidasi tidak dapat dirubah!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Data Berhasil Divalidasi!',
                    //     confirmButtonText: 'Tutup',
                    //     allowOutsideClick: false,
                    //     allowEscapeKey: false,
                    //     allowEnterKey: false,
                    //     text: 'Data Muhamad Ramdani Hidayatullah berhasil divalidasi.',
                    //     footer: '<strong>Peringatan!</strong> &nbsp; Data yang sudah divalidasi tidak dapat dirubah!',
                    // })
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        showCloseButton: true,
                        background: '#dfffcd',
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: 'Data berhasil divalidasi'
                    })
                }
            })
        });
    });
</script>

<?= $this->endSection() ?>