<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$db = new Beasiswa();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Beasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beasiswa</a></li>
                            <li class="active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> 

                                                            
                                                                    <?php
                                                                    foreach($db->showgetDetailpengajuan($_SESSION['nis']) as $item) {
                                                                        // echo "status : ".$item['status']."<br>";
                                                                        // echo "nisbea : ".$item['nisbea']."<br>";
                                                                        if (!empty($item['nisbea']) AND $item['status'] == "proses") {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/5.png">
                                                                                            <center>
                                                                                                <h5><label for="disabled-input" class=" form-control-label" style="color:#605F61">Pengajuan beasiswa anda sedang dalam proses seleksi.</label></h5>
                                                                                                <a href="siswa_detail_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Lihat Hasil Pengajuan" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>&nbsp; Lihat Hasil Pengajuan</button></a>
                                                                                                <a href="ekspor_bukti_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Cetak Bukti Pengajuan" class="btn btn-success btn-sm"><i class="fa fa-file-o"></i>&nbsp; Cetak Bukti Pengajuan</button></a>
                                                                                            </center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }elseif (!empty($item['nisbea']) AND $item['status'] == "diterima") {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/1.png">
                                                                                            <center>
                                                                                                <h5><label for="disabled-input" class=" form-control-label" style="color:#605F61"><b>Selamat!</b> Anda berhak mendapatkan beasiswa,<br>silahkan klik tombol di bawah ini untuk cetak kartu beasiswa.</label></h5>
                                                                                                <a href="ekspor_kartu.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Cetak Kartu Beasiswa" class="btn btn-danger btn-sm"><i class="fa ti-pencil"></i>&nbsp; Cetak!</button></a>
                                                                                                <a href="siswa_detail_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Lihat Hasil Pengajuan" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>&nbsp; Lihat Hasil Pengajuan</button></a>
                                                                                                <a href="ekspor_bukti_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Cetak Bukti Pengajuan" class="btn btn-success btn-sm"><i class="fa fa-file-o"></i>&nbsp; Cetak Bukti Pengajuan</button></a>
                                                                                            </center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }elseif (!empty($item['nisbea']) AND $item['status'] == "ditolak") {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/3.png">
                                                                                            <center>
                                                                                                <h5><label for="disabled-input" class=" form-control-label" style="color:#605F61">Maaf Anda belum berkesempatan mendapatkan beasiswa pada periode ini.</label></h5>
                                                                                                <a href="siswa_detail_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Lihat Hasil Pengajuan" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>&nbsp; Lihat Hasil Pengajuan</button></a>
                                                                                                <a href="ekspor_bukti_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Cetak Bukti Pengajuan" class="btn btn-success btn-sm"><i class="fa fa-file-o"></i>&nbsp; Cetak Bukti Pengajuan</button></a>
                                                                                            </center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }elseif (!empty($item['nisaju']) AND empty($item['nisbea'])) {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/6.png">
                                                                                            <center>
                                                                                                <h5><label for="disabled-input" class=" form-control-label" style="color:#605F61">Pengajuan beasiswa anda akan segera diproses.</label></h5>
                                                                                                <a href="siswa_detail_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Lihat Hasil Pengajuan" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>&nbsp; Lihat Hasil Pengajuan</button></a>
                                                                                                <a href="ekspor_bukti_pengajuan.php"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Cetak Bukti Pengajuan" class="btn btn-success btn-sm"><i class="fa fa-file-o"></i>&nbsp; Cetak Bukti Pengajuan</button></a>
                                                                                            </center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }elseif (empty($item['nisaju']) AND (date('n') > $item['mulai'] AND date('n') < $item['hingga'])) {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/7.png">
                                                                                            <center>
                                                                                                <h5><label for="disabled-input" class=" form-control-label" style="color:#605F61">Silahkan ajukan beasiswa dengan klik button dibawah ini.</label></h5>
                                                                                                <a href="'.$siteurl.'/views/beasiswa/siswa/pengajuan_siswa.php?nis='.$item['nis'].'"><button style="margin-bottom:3%;margin-top:2%;" type="button" title="Ajukan Beasiswa" class="btn btn-info btn-sm"><i class="fa ti-pencil"></i>&nbsp; Ajukan Beasiswa</button></a>
                                                                                            </center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }elseif (empty($item['nisaju']) AND date('n') < $item['mulai']) {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/2.png">
                                                                                            <center><h5><label for="disabled-input" class=" form-control-label" style="color:#605F61">Maaf, periode pengajuan beasiswa belum dibuka.</label></h5></center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }elseif (empty($item['nisaju']) AND date('n') > $item['hingga']) {
                                                                            echo    '<div class="col-xl-12 col-lg-6">
                                                                                        <section class="card">
                                                                                            <img class="align-self-center rounded-circle mr-3" style="width:100%;" alt="" src="'.$siteurl.'/images/dasborsiswabeasiswa/4.png">
                                                                                            <center><h5><label for="disabled-input" class=" form-control-label" style="color:#605F61">Maaf, periode pengajuan beasiswa sudah ditutup.</label></h5></center>
                                                                                        </section>  
                                                                                    </div>
                                                                            ';
                                                                        }
                                                                    }
                                                                    ?>

                                        
<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>
