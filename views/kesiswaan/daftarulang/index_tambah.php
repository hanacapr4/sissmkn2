<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Kesiswaan.php");
$db = new Kesiswaan();
?>

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/header.php"); ?>



        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Daftar Siswa Diterima</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Daftar Siswa Diterima</a></li>
                            <li class="active">List Siswa Diterima</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-footer">
                        
                         <a href="proses.php?aksi=send"><button title="Send" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Send Email
                          </button> </a>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Daftar Ulang
                        </div>
                        <div class="tab">
                          <button class="tablinks" onclick="openCity(event, 'Report1')" id="defaultOpen">PERAWATAN SOSIAL</button>
                          <button class="tablinks" onclick="openCity(event, 'Report2')" id="defaultOpen">USAHA PERJALANAN WISATA</button>
                          <button class="tablinks" onclick="openCity(event, 'Report3')">AKOMODASI PERHOTELAN</button>
                          <button class="tablinks" onclick="openCity(event, 'Report4')">KEPERAWATAN</button>
                          <button class="tablinks" onclick="openCity(event, 'Report5')">JASA BOGA</button>
                          <button class="tablinks" onclick="openCity(event, 'Report6')">TEKNIK KOMPUTER DAN JARINGAN</button>
                          <button class="tablinks" onclick="openCity(event, 'Report7')">SAMSUNG TECH INSTITUTE</button>
                        </div>
                        <div id="Report1" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('ps') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['sis_dtrm_bdng_khlian']; ?></td>
                                    <td>
                                    <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

                        <div id="Report2" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('upw') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['jurusan']; ?></td>
                                    <td>
                                    <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

                        <div id="Report3" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('ap') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['jurusan']; ?></td>
                                    <td>
                                   <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

                        <div id="Report4" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('kpr') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['jurusan']; ?></td>
                                    <td>
                                   <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

                        <div id="Report5" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('jb') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['jurusan']; ?></td>
                                    <td>
                                    <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

                        <div id="Report6" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('tkj') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['sis_dtrm_bdng_khlian']; ?></td>
                                    <td>
                                    <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

                        <div id="Report7" class="tabcontent">
                        <div class="card-body">
                          <table id="" class="table table-striped table-bordered display">
                                <thead>
                                  <tr>
                                    <th>Nilai</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($db->tampildu('sti') as $item){
                                        // print_r($db->tampildu());
                                        // die();
                                ?>
                                <tr>
                                    <td><?php echo $item['status']; ?></td>
                                    <td><?php echo $item['nisn']; ?></td>
                                    <td><?php echo $item['nama']; ?></td>
                                    <td><?php echo $item['jk']; ?></td>
                                    <td><?php echo $item['jurusan']; ?></td>
                                    <td>
                                   <?php
                                        if ($item['privilage'] == 2){ 
                                    ?>
                                        <button class="btn btn-success btn-sm" disabled>Sudah Daftar</button></a>
                                         <?php
                                    }
                                        else{ ?>
                                            <a style = "margin-right:3px;" href="tambah_daftarulang.php?nisn=<?= $item['nisn'];?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Daftar</button></a>
                                        <?php } ?>
                                    </td>
                                </tr>

                                    <?php } ?>
                              </tbody>
                            </table>


                        </div>
                        </div>

 
                        <!-- <div class="card-footer">
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                        </div> -->
                    </div>
                </div>

                </div>

            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- Right Panel -->

<?php require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/part/footer.php"); ?>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();

$(document).ready(function() {
    $('table.display').DataTable();
} );

</script>

<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border-bottom: 2px solid #ccc;
    color: #726E6D;

}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    width: 14%;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
    color: white;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: white;
    color: #625D5D;
}

/* Style the tab content */
.tabcontent {
    animation: fadeEffect 1s;
    display: none;
    padding: 6px 12px;
    border: 0px solid #ccc;
    border-top: none;
}
@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>