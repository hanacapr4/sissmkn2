<ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo $siteurl; ?>/views/dashboard/guru/index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-user"></i>Profil</a>
                    </li>
                   

                    <h3 class="menu-title">Menu</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>PSB & Daftar Ulang</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-file"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/pendataan/index.php">Pendataan</a></li>
                            <li><i class="menu-icon fa ti-files"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/index.php">Pendaftaran</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/seleksi/index.php">Seleksi</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/kesiswaan/daftarulang/index_tambah.php">Daftar Diterima</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Pengelolaan Siswa</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/biodata/index.php">Data Seluruh Siswa</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/pindahan/index.php">Siswa Pindahan</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/siswakeluar/index.php">Siswa Keluar/DO</a></li>
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/siswa/alumni/index.php">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-bookmark-alt"></i>Manage</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-reload"></i><a href="<?php echo $siteurl; ?>/views/manage/kuota/index.php">Kuota Jurusan</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa ti-user"></i>E-Learning</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa ti-user"></i><a href="<?php echo $siteurl; ?>/views/e-learning/guru/data-elearning-guru.php">Data E-Learning</a></li>
                            <li><i class="menu-icon fa ti-receipt"></i><a href="<?php echo $siteurl; ?>/views/ujian-online/guru/data-ujian-guru.php">Data Ujian Online</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $siteurl;?>/views/nilai/index.php"><i class="menu-icon fa ti-id-badge"></i>Transkrip Nilai</a>
                    </li>
                <li>
                        <a href="<?php echo $siteurl;?>/views/guru/dasbordjadwalguru.php"><i class="menu-icon fa ti-id-badge"></i>Jadwal</a>
                    </li>
                </ul>