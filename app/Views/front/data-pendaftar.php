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
                                            <input type="hidden" name="no_regis" value="<?= $cpd['no_daftar'] ?>">
                                            <td><?= $cpd['no_daftar'] ?></td>
                                            <td><?= $cpd['nama'] ?></td>
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
</script>

<?= $this->endSection() ?>