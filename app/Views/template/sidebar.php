<?= $this->extend('template/admin') ?>

<?= $this->section('sidebar') ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
        <img src="<?= base_url('asset') ?>/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-regular">PPDB SMANESTA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('asset/admin') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="d-block">Administrator</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <?php if ($slug == 'dashboard') : ?>
                        <a href="<?= base_url('admin') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php else : ?>
                        <a href="<?= base_url('admin') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php endif; ?>
                    <?php foreach ($listMenu as $mainMenu) : ?>
                        <?php if ($slug == $mainMenu['slug_menu']) : ?>
                <li class="nav-item menu-open <?= $mainMenu['class_menu'] . ' ' . $mainMenu['has_submenu'] ?>">
                    <?php if ($mainMenu['has_submenu'] == '') : ?>
                        <a href="<?= base_url($mainMenu['url_menu']) ?>" class="nav-link active">
                        <?php else : ?>
                            <a href="javascript:void(0)" class="nav-link active">
                            <?php endif; ?>

                            <i class="nav-icon <?= $mainMenu['menu_icon'] ?>"></i>
                            <p>
                                <?= $mainMenu['menu'] ?>
                                <i class="<?= $mainMenu['drop_icon'] ?>"></i>
                            </p>
                        <?php else : ?>
                <li class="nav-item <?= $mainMenu['class_menu'] . ' ' . $mainMenu['has_submenu'] ?>">
                    <?php if ($mainMenu['has_submenu'] == '') : ?>
                        <a href="<?= base_url($mainMenu['url_menu']) ?>" class="nav-link">
                        <?php else : ?>
                            <a href="javascript:void(0)" class="nav-link">
                            <?php endif; ?>
                            <i class="nav-icon <?= $mainMenu['menu_icon'] ?>"></i>
                            <p>
                                <?= $mainMenu['menu'] ?>
                                <i class="<?= $mainMenu['drop_icon'] ?>"></i>
                            </p>
                        <?php endif; ?>
                            </a>
                            <?php if ($mainMenu['has_submenu'] == 'has-treeview') : ?>
                                <ul class="nav nav-treeview">
                                    <?php
                                    $menuId = $mainMenu['id'];
                                    $this->submenu = new \App\Models\MenuModel();
                                    $submenu = $this->submenu->getSubMenu($menuId);
                                    ?>
                                    <?php foreach ($submenu as $sm) : ?>
                                        <li class="nav-item">
                                            <?php if ($submenuSlug == $sm['slug_submenu']) : ?>
                                                <a href="<?= base_url($sm['url_menu']) ?>" class="nav-link active">
                                                <?php else : ?>
                                                    <a href="<?= base_url($sm['url_submenu']) ?>" class="nav-link">
                                                    <?php endif; ?>
                                                    <i class="<?= $sm['submenu_icon'] ?>"></i>
                                                    <p><?= $sm['submenu_name'] ?></p>
                                                    </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                </li>
            <?php endforeach; ?>
            <!-- </li>
                <li class="nav-item has-treeview menu-open active">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pendaftar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pendaftar/tambah-pendaftar') ?>" class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Tambah Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pendaftar/data-pendaftar') ?>" class="nav-link active">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Data Pendaftar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pendaftar/validasi-pendaftar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Validasi Pendaftar
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pengaturan') ?>" class="nav-link">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>Pengaturan Umum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengaturan/user') ?>" class="nav-link">
                                <i class="fas fa-user-cog nav-icon"></i>
                                <p>Pengaturan User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pengaturan/user-level') ?>" class="nav-link">
                                <i class="fas fa-user-shield nav-icon"></i>
                                <p>User Level</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
            <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    $('')
</script>
<?= $this->endSection() ?>