<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <h4><?= $_SESSION['nama_admin']; ?></h4>
            </div>
        </div>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Main Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="waktu.php"><i class="fa fa-clock-o"></i> <span>Pengaturan Gelombang</span></a></li>
            <li><a href="data_siswa.php"><i class="fa fa-edit"></i> <span>Data Pendaftar</span></a></li>
            <li><a href="data_siswa_verified.php"><i class="fa fa-edit"></i> <span>Data Terverifikasi</span></a></li>
            <li><a href="berita.php"><i class="fa fa-edit"></i> <span>Berita</span></a></li>
            <li><a href="../../controller/auth/logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>