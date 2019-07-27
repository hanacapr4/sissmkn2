<?php require($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/alumni.php"); ?>
<?php
$object = new alumni();
?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Alumni</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Data Alumni</a></li>
                            <li class="active">List Data Alumni</li>
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
                          <button title="export data berupa excel" type="submit" class="btn btn-success btn-sm">
                            <i class="fa ti-upload"></i> export
                          </button>
                          <button title="import data dari excel" type="reset" class="btn btn-warning btn-sm">
                            <i class="fa ti-download"></i> import
                          </button>
                          <a href="tambah_alumni.php"><button title="Tambahkan surat masuk" type="submit" class="btn btn-primary btn-sm"><i class="fa ti-import"></i> Tambah Data Perusahaan
                          </button> </a>
                          <!-- <a href="surat_keluar.html"><button title="Tambahkan surat keluar" type="reset" class="btn btn-danger btn-sm"><i class="fa ti-export"></i> Tambah Surat Keluar
                          </button></a> -->
                        </div>
                        <div class="card-header">
                            <strong class="card-title">List </strong>Data Perusahaan
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NIS.</th>
                                    <th>Nama</th>
                                    <th>Tahun Kelulusan</th>
                                    <th>Kelanjutan</th>
                                    <th>Nama Instansi</th>
                                    <th>Penghasilan</th>
                                    <th>Tangal Mulai</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php $i = 1; ?>
                                <?php foreach($object->tampildata() as $data) {
                                ?>
                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?= $data['id_pers']; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['alamat']; ?></td>
                                <td><?= $data['departement']; ?></td>
                                <td><?= $data['no_hp']; ?></td>
                                
                                <td>
                                      <a href="detail_perusahaan.php?id_pers=<?=$data['id_pers']; ?>"><button title="Detail" type="button" class="btn btn-primary btn-sm"><i class="fa ti-eye"></i> Detail</button></a>
                                      <a href="edit_perusahaan.php?id_pers=<?=$data['id_pers']; ?>"><button title="Ubah" type="button" class="btn btn-success btn-sm"><i class="fa ti-pencil-alt"></i> Edit</button></a>
                                  <a href="proses_perusahaan.php?id_pers=<?=$data['id_pers']; ?> &aksi=hapus"><button title="Hapus" type="button" class="btn btn-danger btn-sm"><i class="fa ti-eraser"></i> Delete</button></a>
                                      </td>
                                </tr>
                                <?php } ?>
                               
                                

                              </tbody>
                            </table>
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


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php require($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  