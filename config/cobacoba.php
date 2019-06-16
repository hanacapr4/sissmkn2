<table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO.</th>                               
                                    <th>GURU</th> 
                                    <th>HARI</th>
                                    <th>TANGGAL</th>
                                    <th>KELAS</th>
                                    <th>JAM MULAI</th>
                                    <th>KEGIATAN</th>         
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <div id="show-product">
                                    <?php
                                    include "Database.php";
                                    
                                    if (isset($keyword)) {
                                        $param = '%'.mysqli_real_escpae_string(dbconnect(),$keyword).'%';
                                        $sql = mysqli_query('SELECT nama, hari, tgl, kelas, jam-mulai, kegiatan from t_jurnal WHERE nama="'.$param.'"');
                                    }else {
                                        $sql = mysqli_query('SELECT nama, hari, tgl, kelas, jam-mulai, kegiatan from t_jurnal');
                                    }

                                    $no = 1;
                                    while ($data = mysqli_fetch_array($sql)) {
                                    ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['hari']; ?></td>
                                    <td><?php echo $data['tgl']; ?></td>
                                    <td><?php echo $data['kelas']; ?></td>
                                    <td><?php echo $data['jam_mulai']; ?></td>
                                    <td><?php echo $data['kegiatan']; ?></td>
                                    
                                    <td width="220px">
                                        <a style = "margin-right:3px;" href="detailjurnal.php?id_jurnal=<?= $item['id_jurnal'];?>"<button type="" class="btn btn-success btn-sm"><i class="fa fa-info"></i> Detail</button></a>
                                        <a style = "margin-right:3px;" href="editjurnal.php?id_jurnal=<?= $item['id_jurnal']; ?>"<button type="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></a>
                                        <a href="prosesjurnal.php?id_jurnal=<?= $item['id_jurnal'];?>&aksi=delete"<button type="" class="btn btn-danger btn-sm"><i class="fa fa-trash "></i> Delete</button></a>
                                      </td>
                                    </td>
                                </tr>
                                    <?php } ?>
                                </div>
                              </tbody>
                            </table>