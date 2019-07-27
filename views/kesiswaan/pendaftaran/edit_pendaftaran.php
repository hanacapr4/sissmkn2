<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Kesiswaan.php");
$kesiswaan = new Kesiswaan();
?>



<?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/header.php"); ?>

<style>

#regForm {
  background-color: #ffffff;
  font-family: inherit;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: inherit;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Siswa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Siswa</a></li>
                            <li class="active">Form Edit Pendaftaran Siswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="card-header">
                            <strong class="card-title"><font size="3"><font color='BLACK'>NB : </strong></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>1. Pengisian data menggunakan huruf KAPITAL atau BESAR SEMUA.</strong></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>2. Jika data sudah diisi lengkap, kemudian klik tombol simpan pada akhir form dan silahkan klik tombol <font color='BLACK'>CETAK PDF <font color='red'>di bawah ini untuk mulai mencetak data pendaftaran dan pernyataan anda.</strong></font></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>3. Ukuran kertas yang digunakan adalah <font color='BLACK'>Folio (F4).</strong></font></font></font>
                        </div>
                        <div class="card-header">
                            <strong class="card-title"><font size="1"><font color='red'>4. Sebelum menekan tombol <font color='BLACK'>CETAK PDF<font color='red'>, pastikan data sudah terisi semua dan benar dan pastikan sudah diperbarui sebelumnya dengan menekan tombol <font color='BLACK'>Simpan <font color='red'>yang berada pada akhir form ini.</strong></font></font></font></font></font>
                        </div>
                      </strong>
                    </FORM>
                  </FONT>
                </font>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                                  <form action="<?php echo $siteurl; ?>/views/kesiswaan/pendaftaran/proses.php?aksi=edit" method="post" class="form-horizontal" id="regForm" enctype="multipart/form-data">
                                      <div class="card-body">
                                      <div class="tab"> 
                                  <?php
                                    foreach ($kesiswaan->getdetailpendaftaran($_GET['user_id']) as $item) {
                                      
                                  ?>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">ID</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="user_id" value="<?= $item['user_id']; ?>" class="form-control" readonly></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">NISN <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="no_induk" value="<?= $item['no_induk']; ?>"class="form-control"readonly>
                                              </div>
                                          </div>
                                      </div>
                                     
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input class=" form-control-label">E-Mail <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_email"  value="<?= $item['sis_email']; ?>"class="form-control">
                                              </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap Siswa <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama"  value="<?= $item['nama']; ?>"class="form-control">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                            <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Panggilan <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" name="sis_nma_pnggln" value="<?= $item['sis_nma_pnggln']; ?>"class="form-control">
                                              </div> </div>
                                              
                                          <div class="col-6">
                                            <div class="col col-md-4"><label class=" form-control-label">Jenis Kelamin <font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col">
                                               <?php 
                                            if ($item['kelamin'] == 'L'){ echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input" checked>Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input">Perempuan
                                                </div>';
                                              }
                                            elseif ($item['kelamin'] == 'P') { echo '
                                                <div class="form-check">
                                                    <input type="radio" id="radio1" name="kelamin" value="L" class="form-check-input">Laki - laki
                                                </div>

                                                <div class="form-check">
                                                    <input type="radio" id="radio2" name="kelamin" value="P" class="form-check-input" checked>Perempuan
                                                </div>';
                                              }
                                              ?>
                                              </div>
                                          </div>
                                      </label>
                                    </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="tmp_lahir" value="<?= $item['tmp_lahir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir <font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="tgl_lahir" value="<?= $item['tgl_lahir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="agama" id="agama" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['agama']; ?>">
                                                                    <?php
                                                                    if (($item['agama']) == "ALIRAN KEPERCAYAAN") {
                                                                      echo "ALIRAN KEPERCAYAAN";
                                                                     }elseif (($item['agama']) == "KONGUCHU") {
                                                                      echo "KONGUCHU";
                                                                     }elseif (($item['agama']) == "HINDU") {
                                                                      echo "HINDU";
                                                                     }elseif (($item['agama']) == "BUDHA") {
                                                                      echo "BUDHA";
                                                                    }elseif (($item['agama']) == "KATOLIK") {
                                                                      echo "KATOLIK";
                                                                    }elseif (($item['agama']) == "KRISTEN") {
                                                                      echo "KRISTEN";
                                                                    }elseif (($item['agama']) == "ISLAM") {
                                                                      echo "ISLAM";
                                                                    }elseif (($item['agama']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="ISLAM">ISLAM</option>
                                                                  <option value="KRISTEN">KRISTEN</option>
                                                                  <option value="KATOLIK">KATOLIK</option>
                                                                  <option value="BUDHA">BUDHA</option>
                                                                  <option value="HINDU">HINDU</option>
                                                                  <option value="KONGUCHU">KONGUCHU</option>
                                                                  <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_kwarganegraan" value="<?= $item['sis_kwarganegraan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak Keberapa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_anak_ke" id="sis_anak_ke" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['sis_anak_ke']; ?>">
                                                                    <?php
                                                                    if (($item['sis_anak_ke']) == "25") {
                                                                      echo "25";
                                                                      }elseif (($item['sis_anak_ke']) == "24") {
                                                                      echo "24";
                                                                      }elseif (($item['sis_anak_ke']) == "23") {
                                                                      echo "23";
                                                                      }elseif (($item['sis_anak_ke']) == "22") {
                                                                      echo "22";
                                                                      }elseif (($item['sis_anak_ke']) == "21") {
                                                                      echo "21";
                                                                      }elseif (($item['sis_anak_ke']) == "20") {
                                                                      echo "20";
                                                                      }elseif (($item['sis_anak_ke']) == "19") {
                                                                      echo "19";
                                                                      }elseif (($item['sis_anak_ke']) == "18") {
                                                                      echo "18";
                                                                      }elseif (($item['sis_anak_ke']) == "17") {
                                                                      echo "17";
                                                                      }elseif (($item['sis_anak_ke']) == "16") {
                                                                      echo "16";

                                                                      }elseif (($item['sis_anak_ke']) == "15") {
                                                                      echo "15";
                                                                      }elseif (($item['sis_anak_ke']) == "14") {
                                                                      echo "14";
                                                                      }elseif (($item['sis_anak_ke']) == "13") {
                                                                      echo "13";
                                                                      }elseif (($item['sis_anak_ke']) == "12") {
                                                                      echo "12";
                                                                      }elseif (($item['sis_anak_ke']) == "11") {
                                                                      echo "11";
                                                                      }elseif (($item['sis_anak_ke']) == "10") {
                                                                      echo "10";
                                                                      }elseif (($item['sis_anak_ke']) == "9") {
                                                                      echo "9";
                                                                      }elseif (($item['sis_anak_ke']) == "8") {
                                                                      echo "8";
                                                                      }elseif (($item['sis_anak_ke']) == "7") {
                                                                      echo "7";
                                                                      }elseif (($item['sis_anak_ke']) == "6") {
                                                                      echo "6";
                                                                      }elseif (($item['sis_anak_ke']) == "5") {
                                                                      echo "5";
                                                                      }elseif (($item['sis_anak_ke']) == "4") {
                                                                      echo "4";
                                                                      }elseif (($item['sis_anak_ke']) == "3") {
                                                                      echo "3";
                                                                      }elseif (($item['sis_anak_ke']) == "2") {
                                                                      echo "2";
                                                                      }elseif (($item['sis_anak_ke']) == "1") {
                                                                      echo "1";
                                                                      }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                    <option value="6">7</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                               <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Kandung<font color='red'></font></label></div>
                                              <div class="col-12 col-md-9 ">
                                              <select name="sis_jml_sdr_kndung" id="sis_jml_sdr_kndung" class="form-control-sm form-control">
                                    <option value="<?php echo $item['sis_jml_sdr_kndung']; ?>">
                                                                    <?php
                                                                    if (($item['sis_jml_sdr_kndung']) == "25") {
                                                                      echo "25";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "24") {
                                                                      echo "24";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "23") {
                                                                      echo "23";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "22") {
                                                                      echo "22";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "21") {
                                                                      echo "21";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "20") {
                                                                      echo "20";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "19") {
                                                                      echo "19";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "18") {
                                                                      echo "18";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "17") {
                                                                      echo "17";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "16") {
                                                                      echo "16";

                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "15") {
                                                                      echo "15";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "14") {
                                                                      echo "14";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "13") {
                                                                      echo "13";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "12") {
                                                                      echo "12";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "11") {
                                                                      echo "11";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "10") {
                                                                      echo "10";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "9") {
                                                                      echo "9";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "8") {
                                                                      echo "8";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "7") {
                                                                      echo "7";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "6") {
                                                                      echo "6";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "5") {
                                                                      echo "5";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "4") {
                                                                      echo "4";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "3") {
                                                                      echo "3";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "2") {
                                                                      echo "2";
                                                                      }elseif (($item['sis_jml_sdr_kndung']) == "1") {
                                                                      echo "1";
                                                                      }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                    <option value="6">7</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                        </select>
                                                      </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jumlah Saudara Tiri<font color='red'></font></label></div>                              
                                            <div class="col-12 col-md-9 ">
                                              <select name="sis_jml_sdr_tiri" id="sis_jml_sdr_tiri" class="form-control-sm form-control">
                                    <option value="<?php echo $item['sis_jml_sdr_tiri']; ?>">
                                                                    <?php
                                                                    if (($item['sis_jml_sdr_tiri']) == "25") {
                                                                      echo "25";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "24") {
                                                                      echo "24";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "23") {
                                                                      echo "23";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "22") {
                                                                      echo "22";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "21") {
                                                                      echo "21";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "20") {
                                                                      echo "20";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "19") {
                                                                      echo "19";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "18") {
                                                                      echo "18";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "17") {
                                                                      echo "17";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "16") {
                                                                      echo "16";

                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "15") {
                                                                      echo "15";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "14") {
                                                                      echo "14";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "13") {
                                                                      echo "13";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "12") {
                                                                      echo "12";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "11") {
                                                                      echo "11";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "10") {
                                                                      echo "10";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "9") {
                                                                      echo "9";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "8") {
                                                                      echo "8";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "7") {
                                                                      echo "7";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "6") {
                                                                      echo "6";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "5") {
                                                                      echo "5";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "4") {
                                                                      echo "4";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "3") {
                                                                      echo "3";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "2") {
                                                                      echo "2";
                                                                      }elseif (($item['sis_jml_sdr_tiri']) == "1") {
                                                                      echo "1";
                                                                      }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                    <option value="6">7</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Saudara Angkat<font color='red'></font></label></div>
                                              <div class="col-12 col-md-9 ">
                                              <select name="sis_jml_sdr_angkat" id="sis_jml_sdr_angkat" class="form-control-sm form-control">
                                                <option value="<?php echo $item['sis_jml_sdr_angkat']; ?>">
                                                                    <?php
                                                                    if (($item['sis_jml_sdr_angkat']) == "25") {
                                                                      echo "25";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "24") {
                                                                      echo "24";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "23") {
                                                                      echo "23";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "22") {
                                                                      echo "22";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "21") {
                                                                      echo "21";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "20") {
                                                                      echo "20";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "19") {
                                                                      echo "19";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "18") {
                                                                      echo "18";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "17") {
                                                                      echo "17";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "16") {
                                                                      echo "16";

                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "15") {
                                                                      echo "15";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "14") {
                                                                      echo "14";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "13") {
                                                                      echo "13";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "12") {
                                                                      echo "12";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "11") {
                                                                      echo "11";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "10") {
                                                                      echo "10";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "9") {
                                                                      echo "9";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "8") {
                                                                      echo "8";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "7") {
                                                                      echo "7";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "6") {
                                                                      echo "6";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "5") {
                                                                      echo "5";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "4") {
                                                                      echo "4";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "3") {
                                                                      echo "3";
                                                                      }elseif (($item['sis_jml_sdr_angkat']) == "2") {
                                                                      echo "2";
                                                                    }elseif (($item['sis_jml_sdr_angkat']) == "1") {
                                                                      echo "1";
                                                                      }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                    <option value="6">7</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                        </select>
                                                      </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Anak yatim/piatu/yatim piatu<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                 <select name="sis_status" id="sis_status" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['sis_status']; ?>">
                                                                    <?php
                                                                    if (($item['sis_status']) == "YATIM PIATU") {
                                                                      echo "YATIM PIATU";
                                                                    }elseif (($item['sis_status']) == "YATIM") {
                                                                      echo "YATIM";
                                                                    }elseif (($item['sis_status']) == "YATIM") {
                                                                      echo "YATIM";
                                                                    }elseif (($item['sis_status']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="-">-</option>
                                                                  <option value="YATIM">YATIM</option>
                                                                  <option value="PIATU">YATIM</option>
                                                                  <option value="YATIM PIATU">YATIM PIATU</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Bahasa sehari - hari di rumah<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_bhs_shari_hri" value="<?= $item['sis_bhs_shari_hri']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 1px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alat transportasi ke sekolah<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alat_transport" 
                                              value="<?= $item['alat_transport']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col-12 col-md-9"><input type="hidden" id="text-input" value="<?= $kesiswaan->generateRandomString(); ?>" name="pass" class="form-control"></div>
                                          </div>
                                      </div>
                                    
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Kartu Perlindungan Sosial (KPS)<font color='red'></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kps" value="<?= $item['sis_kps']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kartu Indonesia Pintar (KIP)<font color='red'></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_kip" value="<?= $item['sis_kip']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Kartu Keluarga (kk)<font color='red'></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_nokk" value="<?= $item['sis_nokk']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Induk Kependudukan (NIK)<font color='red'></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="sis_nik" value="<?= $item['sis_nik']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">B. KETERANGAN TEMPAT TINGGAL</strong></font></font>
                        </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat Di Malang<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="alamat_tinggal" value="<?= $item['alamat_tinggal']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                           
                                          </div>

                                      </div>

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_kec_tngl" value="<?= $item['alamat_kec_tngl']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten / Kodya<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_kab_tngl" value="<?= $item['alamat_kab_tngl']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Jarak tempat tinggal ke sekolah<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_jrak_ke_skul" id="sis_jrak_ke_skul" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['sis_jrak_ke_skul']; ?>">
                                                                    <?php
                                                                    if (($item['sis_jrak_ke_skul']) == "LEBIH DARI 10KM") {
                                                                      echo "LEBIH DARI 10KM";
                                                                    }elseif (($item['sis_jrak_ke_skul']) == "5-10KM") {
                                                                      echo "5-10KM";
                                                                    }elseif (($item['sis_jrak_ke_skul']) == "3-5KM") {
                                                                      echo "3-5KM";
                                                                      }elseif (($item['sis_jrak_ke_skul']) == "1-3KM") {
                                                                      echo "1-3KM";
                                                                    }elseif (($item['sis_jrak_ke_skul']) == "0-1KM") {
                                                                      echo "0-1KM";
                                                                    }elseif (($item['sis_jrak_ke_skul']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="-">-</option>
                                                                  <option value="0-1KM">0-1KM</option>
                                                                  <option value="1-3KM">1-3KM</option>
                                                                  <option value="3-5KM">3-5KM</option>
                                                                  <option value="5-10KM">5-10KM</option>
                                                                  <option value="LEBIH DARI 10KM">LEBIH DARI 10KM</option>
                                                        </select>
                                                      </div>
                                          </div>
                                         
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggal dengan<font color='red'>*</font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_tggal_dgn" id="sis_tggal_dgn" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['sis_tggal_dgn']; ?>">
                                                                    <?php
                                                                    if (($item['sis_tggal_dgn']) == "WALI") {
                                                                      echo "WALI";
                                                                    }elseif (($item['sis_tggal_dgn']) == "KOST") {
                                                                      echo "KOST";
                                                                    }elseif (($item['sis_tggal_dgn']) == "DI ASRAMA") {
                                                                      echo "DI ASRAMA";
                                                                      }elseif (($item['sis_tggal_dgn']) == "SAUDARA") {
                                                                      echo "SAUDARA";
                                                                    }elseif (($item['sis_tggal_dgn']) == "ORANG TUA") {
                                                                      echo "ORANG TUA";
                                                                    }elseif (($item['sis_tggal_dgn']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="-">-</option>
                                                                  <option value="ORANG TUA">ORANG TUA</option>
                                                                  <option value="SAUDARA">SAUDARA</option>
                                                                  <option value="DI ASRAMA">DI ASRAMA</option>
                                                                  <option value="KOST">KOST</option>
                                                                  <option value="WALI">WALI</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor telepon/ HP<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp" value="<?= $item['telp']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kondisi Rumah<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9 ">
                                                <select name="rumah_kondisi" id="rumah_kondisi" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['rumah_kondisi']; ?>">
                                                                    <?php
                                                                    if (($item['rumah_kondisi']) == "WALI") {
                                                                      echo "WALI";
                                                                    }elseif (($item['rumah_kondisi']) == "KOST") {
                                                                      echo "KOST";
                                                                    }elseif (($item['rumah_kondisi']) == "DI ASRAMA") {
                                                                      echo "DI ASRAMA";
                                                                      }elseif (($item['rumah_kondisi']) == "MILIK NENEK") {
                                                                      echo "MILIK NENEK";
                                                                    }elseif (($item['rumah_kondisi']) == "MILIK ORANG TUA") {
                                                                      echo "MILIK ORANG TUA";
                                                                    }elseif (($item['rumah_kondisi']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="-">-</option>
                                                                  <option value="MILIK ORANG TUA">MILIK ORANG TUA</option>
                                                                  <option value="MILIK NENEK">MILIK NENEK</option>
                                                                  <option value="DI ASRAMA">DI ASRAMA</option>
                                                                  <option value="KOST">KOST</option>
                                                                  <option value="WALI">WALI</option>
                                                        </select>
                                                      </div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kondisi Fisik Rumah<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="rumah_fisik" id="rumah_fisik" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['rumah_fisik']; ?>">
                                                                    <?php
                                                                    if (($item['rumah_fisik']) == "TIDAK PERMANEN/DINDING BAMBU") {
                                                                      echo "TIDAK PERMANEN/DINDING BAMBU";
                                                                    }elseif (($item['rumah_fisik']) == "SEMI PERMANEN/KLENENGAN") {
                                                                      echo "SEMI PERMANEN/KLENENGAN";
                                                                    }elseif (($item['rumah_fisik']) == "PERMANEN/GEDUNG") {
                                                                      echo "PERMANEN/GEDUNG";
                                                                    }elseif (($item['rumah_fisik']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="-">-</option>
                                                                  <option value="PERMANEN/GEDUNG">PERMANEN/GEDUNG</option>
                                                                  <option value="SEMI PERMANEN/KLENENGAN">SEMI PERMANEN/KLENENGAN</option>
                                                                  <option value="TIDAK PERMANEN/DINDING BAMBU">TIDAK PERMANEN/DINDING BAMBU</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat Asal<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat" value="<?= $item['alamat']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">RT<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9 ">
                                  <select name="alamat_rt" id="alamat_rt" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['alamat_rt']; ?>">
                                                                    <?php
                                                                    if (($item['alamat_rt']) == "100") {
                                                                      echo "100";

                                                                      }elseif (($item['alamat_rt']) == "99") {
                                                                      echo "99";
                                                                      }elseif (($item['alamat_rt']) == "98") {
                                                                      echo "98";
                                                                      }elseif (($item['alamat_rt']) == "97") {
                                                                      echo "97";
                                                                      }elseif (($item['alamat_rt']) == "96") {
                                                                      echo "96";
                                                                      }elseif (($item['alamat_rt']) == "95") {
                                                                      echo "95";
                                                                      }elseif (($item['alamat_rt']) == "94") {
                                                                      echo "94";
                                                                      }elseif (($item['alamat_rt']) == "92") {
                                                                      echo "92";
                                                                      }elseif (($item['alamat_rt']) == "91") {
                                                                      echo "91";
                                                                      }elseif (($item['alamat_rt']) == "90") {
                                                                      echo "90";


                                                                      }elseif (($item['alamat_rt']) == "89") {
                                                                      echo "89";
                                                                      }elseif (($item['alamat_rt']) == "88") {
                                                                      echo "88";
                                                                      }elseif (($item['alamat_rt']) == "87") {
                                                                      echo "87";
                                                                      }elseif (($item['alamat_rt']) == "86") {
                                                                      echo "86";
                                                                      }elseif (($item['alamat_rt']) == "85") {
                                                                      echo "85";
                                                                      }elseif (($item['alamat_rt']) == "84") {
                                                                      echo "84";
                                                                      }elseif (($item['alamat_rt']) == "83") {
                                                                      echo "83";
                                                                      }elseif (($item['alamat_rt']) == "82") {
                                                                      echo "82";
                                                                      }elseif (($item['alamat_rt']) == "81") {
                                                                      echo "81";
                                                                      }elseif (($item['alamat_rt']) == "80") {
                                                                      echo "80";
                                                                      }elseif (($item['alamat_rt']) == "79") {
                                                                      echo "79";
                                                                      }elseif (($item['alamat_rt']) == "78") {
                                                                      echo "78";
                                                                      }elseif (($item['alamat_rt']) == "77") {
                                                                      echo "77";
                                                                      }elseif (($item['alamat_rt']) == "76") {
                                                                      echo "76";

                                                                      }elseif (($item['alamat_rt']) == "75") {
                                                                      echo "75";
                                                                      }elseif (($item['alamat_rt']) == "74") {
                                                                      echo "74";
                                                                      }elseif (($item['alamat_rt']) == "73") {
                                                                      echo "73";
                                                                      }elseif (($item['alamat_rt']) == "72") {
                                                                      echo "72";
                                                                      }elseif (($item['alamat_rt']) == "71") {
                                                                      echo "71";
                                                                      }elseif (($item['alamat_rt']) == "70") {
                                                                      echo "70";
                                                                      }elseif (($item['alamat_rt']) == "69") {
                                                                      echo "69";
                                                                      }elseif (($item['alamat_rt']) == "68") {
                                                                      echo "68";
                                                                      }elseif (($item['alamat_rt']) == "67") {
                                                                      echo "67";
                                                                      }elseif (($item['alamat_rt']) == "66") {
                                                                      echo "66";
                                                                      }elseif (($item['alamat_rt']) == "65") {
                                                                      echo "65";
                                                                      }elseif (($item['alamat_rt']) == "64") {
                                                                      echo "64";
                                                                      }elseif (($item['alamat_rt']) == "63") {
                                                                      echo "63";
                                                                      }elseif (($item['alamat_rt']) == "62") {
                                                                      echo "62";
                                                                      }elseif (($item['alamat_rt']) == "61") {
                                                                      echo "61";



                                                                      }elseif (($item['alamat_rt']) == "60") {
                                                                      echo "60";
                                                                      }elseif (($item['alamat_rt']) == "59") {
                                                                      echo "59";
                                                                      }elseif (($item['alamat_rt']) == "58") {
                                                                      echo "58";
                                                                      }elseif (($item['alamat_rt']) == "57") {
                                                                      echo "57";
                                                                      }elseif (($item['alamat_rt']) == "56") {
                                                                      echo "56";
                                                                      }elseif (($item['alamat_rt']) == "55") {
                                                                      echo "55";
                                                                      }elseif (($item['alamat_rt']) == "54") {
                                                                      echo "54";
                                                                      }elseif (($item['alamat_rt']) == "53") {
                                                                      echo "53";
                                                                      }elseif (($item['alamat_rt']) == "52") {
                                                                      echo "52";
                                                                      }elseif (($item['alamat_rt']) == "51") {
                                                                      echo "51";
                                                                      }elseif (($item['alamat_rt']) == "50") {
                                                                      echo "50";
                                                                      }elseif (($item['alamat_rt']) == "49") {
                                                                      echo "49";
                                                                      }elseif (($item['alamat_rt']) == "48") {
                                                                      echo "48";
                                                                      }elseif (($item['alamat_rt']) == "47") {
                                                                      echo "47";
                                                                      }elseif (($item['alamat_rt']) == "46") {
                                                                      echo "46";

                                                                      }elseif (($item['alamat_rt']) == "45") {
                                                                      echo "45";
                                                                      }elseif (($item['alamat_rt']) == "44") {
                                                                      echo "44";
                                                                      }elseif (($item['alamat_rt']) == "43") {
                                                                      echo "43";
                                                                      }elseif (($item['alamat_rt']) == "42") {
                                                                      echo "42";
                                                                      }elseif (($item['alamat_rt']) == "41") {
                                                                      echo "41";
                                                                      }elseif (($item['alamat_rt']) == "40") {
                                                                      echo "40";
                                                                      }elseif (($item['alamat_rt']) == "39") {
                                                                      echo "39";
                                                                      }elseif (($item['alamat_rt']) == "38") {
                                                                      echo "38";
                                                                      }elseif (($item['alamat_rt']) == "37") {
                                                                      echo "37";
                                                                      }elseif (($item['alamat_rt']) == "36") {
                                                                      echo "36";
                                                                      }elseif (($item['alamat_rt']) == "35") {
                                                                      echo "35";
                                                                      }elseif (($item['alamat_rt']) == "34") {
                                                                      echo "34";
                                                                      }elseif (($item['alamat_rt']) == "32") {
                                                                      echo "32";
                                                                      }elseif (($item['alamat_rt']) == "31") {
                                                                      echo "31";
                                                                      }elseif (($item['alamat_rt']) == "30") {
                                                                      echo "30";


                                                                      }elseif (($item['alamat_rt']) == "29") {
                                                                      echo "29";
                                                                      }elseif (($item['alamat_rt']) == "28") {
                                                                      echo "28";
                                                                      }elseif (($item['alamat_rt']) == "27") {
                                                                      echo "27";
                                                                      }elseif (($item['alamat_rt']) == "26") {
                                                                      echo "26";
                                                                      }elseif (($item['alamat_rt']) == "25") {
                                                                      echo "25";
                                                                      }elseif (($item['alamat_rt']) == "24") {
                                                                      echo "24";
                                                                      }elseif (($item['alamat_rt']) == "23") {
                                                                      echo "23";
                                                                      }elseif (($item['alamat_rt']) == "22") {
                                                                      echo "22";
                                                                      }elseif (($item['alamat_rt']) == "21") {
                                                                      echo "21";
                                                                      }elseif (($item['alamat_rt']) == "20") {
                                                                      echo "20";
                                                                      }elseif (($item['alamat_rt']) == "19") {
                                                                      echo "19";
                                                                      }elseif (($item['alamat_rt']) == "18") {
                                                                      echo "18";
                                                                      }elseif (($item['alamat_rt']) == "17") {
                                                                      echo "17";
                                                                      }elseif (($item['alamat_rt']) == "16") {
                                                                      echo "16";

                                                                      }elseif (($item['alamat_rt']) == "15") {
                                                                      echo "15";
                                                                      }elseif (($item['alamat_rt']) == "14") {
                                                                      echo "14";
                                                                      }elseif (($item['alamat_rt']) == "13") {
                                                                      echo "13";
                                                                      }elseif (($item['alamat_rt']) == "12") {
                                                                      echo "12";
                                                                      }elseif (($item['alamat_rt']) == "11") {
                                                                      echo "11";
                                                                      }elseif (($item['alamat_rt']) == "10") {
                                                                      echo "10";
                                                                      }elseif (($item['alamat_rt']) == "9") {
                                                                      echo "9";
                                                                      }elseif (($item['alamat_rt']) == "8") {
                                                                      echo "8";
                                                                      }elseif (($item['alamat_rt']) == "7") {
                                                                      echo "7";
                                                                      }elseif (($item['alamat_rt']) == "6") {
                                                                      echo "6";
                                                                      }elseif (($item['alamat_rt']) == "5") {
                                                                      echo "5";
                                                                      }elseif (($item['alamat_rt']) == "4") {
                                                                      echo "4";
                                                                      }elseif (($item['alamat_rt']) == "3") {
                                                                      echo "3";
                                                                      }elseif (($item['alamat_rt']) == "2") {
                                                                      echo "2";
                                                                      }elseif (($item['alamat_rt']) == "1") {
                                                                      echo "1";
                                                                      }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="37">36</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">RW<font color='red'><font size="5">*</font></label></div></font>
                                              <div class="col-12 col-md-9 ">
                                                                                            <select name="alamat_rw" id="alamat_rw" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['alamat_rw']; ?>">
                                                                    <?php
                                                                    if (($item['alamat_rw']) == "100") {
                                                                      echo "100";

                                                                      }elseif (($item['alamat_rw']) == "99") {
                                                                      echo "99";
                                                                      }elseif (($item['alamat_rw']) == "98") {
                                                                      echo "98";
                                                                      }elseif (($item['alamat_rw']) == "97") {
                                                                      echo "97";
                                                                      }elseif (($item['alamat_rw']) == "96") {
                                                                      echo "96";
                                                                      }elseif (($item['alamat_rw']) == "95") {
                                                                      echo "95";
                                                                      }elseif (($item['alamat_rw']) == "94") {
                                                                      echo "94";
                                                                      }elseif (($item['alamat_rw']) == "92") {
                                                                      echo "92";
                                                                      }elseif (($item['alamat_rw']) == "91") {
                                                                      echo "91";
                                                                      }elseif (($item['alamat_rw']) == "90") {
                                                                      echo "90";


                                                                      }elseif (($item['alamat_rw']) == "89") {
                                                                      echo "89";
                                                                      }elseif (($item['alamat_rw']) == "88") {
                                                                      echo "88";
                                                                      }elseif (($item['alamat_rw']) == "87") {
                                                                      echo "87";
                                                                      }elseif (($item['alamat_rw']) == "86") {
                                                                      echo "86";
                                                                      }elseif (($item['alamat_rw']) == "85") {
                                                                      echo "85";
                                                                      }elseif (($item['alamat_rw']) == "84") {
                                                                      echo "84";
                                                                      }elseif (($item['alamat_rw']) == "83") {
                                                                      echo "83";
                                                                      }elseif (($item['alamat_rw']) == "82") {
                                                                      echo "82";
                                                                      }elseif (($item['alamat_rw']) == "81") {
                                                                      echo "81";
                                                                      }elseif (($item['alamat_rw']) == "80") {
                                                                      echo "80";
                                                                      }elseif (($item['alamat_rw']) == "79") {
                                                                      echo "79";
                                                                      }elseif (($item['alamat_rw']) == "78") {
                                                                      echo "78";
                                                                      }elseif (($item['alamat_rw']) == "77") {
                                                                      echo "77";
                                                                      }elseif (($item['alamat_rw']) == "76") {
                                                                      echo "76";

                                                                      }elseif (($item['alamat_rw']) == "75") {
                                                                      echo "75";
                                                                      }elseif (($item['alamat_rw']) == "74") {
                                                                      echo "74";
                                                                      }elseif (($item['alamat_rw']) == "73") {
                                                                      echo "73";
                                                                      }elseif (($item['alamat_rw']) == "72") {
                                                                      echo "72";
                                                                      }elseif (($item['alamat_rw']) == "71") {
                                                                      echo "71";
                                                                      }elseif (($item['alamat_rw']) == "70") {
                                                                      echo "70";
                                                                      }elseif (($item['alamat_rw']) == "69") {
                                                                      echo "69";
                                                                      }elseif (($item['alamat_rw']) == "68") {
                                                                      echo "68";
                                                                      }elseif (($item['alamat_rw']) == "67") {
                                                                      echo "67";
                                                                      }elseif (($item['alamat_rw']) == "66") {
                                                                      echo "66";
                                                                      }elseif (($item['alamat_rw']) == "65") {
                                                                      echo "65";
                                                                      }elseif (($item['alamat_rw']) == "64") {
                                                                      echo "64";
                                                                      }elseif (($item['alamat_rw']) == "63") {
                                                                      echo "63";
                                                                      }elseif (($item['alamat_rw']) == "62") {
                                                                      echo "62";
                                                                      }elseif (($item['alamat_rw']) == "61") {
                                                                      echo "61";



                                                                      }elseif (($item['alamat_rw']) == "60") {
                                                                      echo "60";
                                                                      }elseif (($item['alamat_rw']) == "59") {
                                                                      echo "59";
                                                                      }elseif (($item['alamat_rw']) == "58") {
                                                                      echo "58";
                                                                      }elseif (($item['alamat_rw']) == "57") {
                                                                      echo "57";
                                                                      }elseif (($item['alamat_rw']) == "56") {
                                                                      echo "56";
                                                                      }elseif (($item['alamat_rw']) == "55") {
                                                                      echo "55";
                                                                      }elseif (($item['alamat_rw']) == "54") {
                                                                      echo "54";
                                                                      }elseif (($item['alamat_rw']) == "53") {
                                                                      echo "53";
                                                                      }elseif (($item['alamat_rw']) == "52") {
                                                                      echo "52";
                                                                      }elseif (($item['alamat_rw']) == "51") {
                                                                      echo "51";
                                                                      }elseif (($item['alamat_rw']) == "50") {
                                                                      echo "50";
                                                                      }elseif (($item['alamat_rw']) == "49") {
                                                                      echo "49";
                                                                      }elseif (($item['alamat_rw']) == "48") {
                                                                      echo "48";
                                                                      }elseif (($item['alamat_rw']) == "47") {
                                                                      echo "47";
                                                                      }elseif (($item['alamat_rw']) == "46") {
                                                                      echo "46";

                                                                      }elseif (($item['alamat_rw']) == "45") {
                                                                      echo "45";
                                                                      }elseif (($item['alamat_rw']) == "44") {
                                                                      echo "44";
                                                                      }elseif (($item['alamat_rw']) == "43") {
                                                                      echo "43";
                                                                      }elseif (($item['alamat_rw']) == "42") {
                                                                      echo "42";
                                                                      }elseif (($item['alamat_rw']) == "41") {
                                                                      echo "41";
                                                                      }elseif (($item['alamat_rw']) == "40") {
                                                                      echo "40";
                                                                      }elseif (($item['alamat_rw']) == "39") {
                                                                      echo "39";
                                                                      }elseif (($item['alamat_rw']) == "38") {
                                                                      echo "38";
                                                                      }elseif (($item['alamat_rw']) == "37") {
                                                                      echo "37";
                                                                      }elseif (($item['alamat_rw']) == "36") {
                                                                      echo "36";
                                                                      }elseif (($item['alamat_rw']) == "35") {
                                                                      echo "35";
                                                                      }elseif (($item['alamat_rw']) == "34") {
                                                                      echo "34";
                                                                      }elseif (($item['alamat_rw']) == "32") {
                                                                      echo "32";
                                                                      }elseif (($item['alamat_rw']) == "31") {
                                                                      echo "31";
                                                                      }elseif (($item['alamat_rw']) == "30") {
                                                                      echo "30";


                                                                      }elseif (($item['alamat_rw']) == "29") {
                                                                      echo "29";
                                                                      }elseif (($item['alamat_rw']) == "28") {
                                                                      echo "28";
                                                                      }elseif (($item['alamat_rw']) == "27") {
                                                                      echo "27";
                                                                      }elseif (($item['alamat_rw']) == "26") {
                                                                      echo "26";
                                                                      }elseif (($item['alamat_rw']) == "25") {
                                                                      echo "25";
                                                                      }elseif (($item['alamat_rw']) == "24") {
                                                                      echo "24";
                                                                      }elseif (($item['alamat_rw']) == "23") {
                                                                      echo "23";
                                                                      }elseif (($item['alamat_rw']) == "22") {
                                                                      echo "22";
                                                                      }elseif (($item['alamat_rw']) == "21") {
                                                                      echo "21";
                                                                      }elseif (($item['alamat_rw']) == "20") {
                                                                      echo "20";
                                                                      }elseif (($item['alamat_rw']) == "19") {
                                                                      echo "19";
                                                                      }elseif (($item['alamat_rw']) == "18") {
                                                                      echo "18";
                                                                      }elseif (($item['alamat_rw']) == "17") {
                                                                      echo "17";
                                                                      }elseif (($item['alamat_rw']) == "16") {
                                                                      echo "16";

                                                                      }elseif (($item['alamat_rw']) == "15") {
                                                                      echo "15";
                                                                      }elseif (($item['alamat_rw']) == "14") {
                                                                      echo "14";
                                                                      }elseif (($item['alamat_rw']) == "13") {
                                                                      echo "13";
                                                                      }elseif (($item['alamat_rw']) == "12") {
                                                                      echo "12";
                                                                      }elseif (($item['alamat_rw']) == "11") {
                                                                      echo "11";
                                                                      }elseif (($item['alamat_rw']) == "10") {
                                                                      echo "10";
                                                                      }elseif (($item['alamat_rw']) == "9") {
                                                                      echo "9";
                                                                      }elseif (($item['alamat_rw']) == "8") {
                                                                      echo "8";
                                                                      }elseif (($item['alamat_rw']) == "7") {
                                                                      echo "7";
                                                                      }elseif (($item['alamat_rw']) == "6") {
                                                                      echo "6";
                                                                      }elseif (($item['alamat_rw']) == "5") {
                                                                      echo "5";
                                                                      }elseif (($item['alamat_rw']) == "4") {
                                                                      echo "4";
                                                                      }elseif (($item['alamat_rw']) == "3") {
                                                                      echo "3";
                                                                      }elseif (($item['alamat_rw']) == "2") {
                                                                      echo "2";
                                                                      }elseif (($item['alamat_rw']) == "1") {
                                                                      echo "1";
                                                                      }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                    <option value=""></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="37">36</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">41</option>
                                                                    <option value="42">42</option>
                                                                    <option value="43">43</option>
                                                                    <option value="44">44</option>
                                                                    <option value="45">45</option>
                                                                    <option value="46">46</option>
                                                                    <option value="47">47</option>
                                                                    <option value="48">48</option>
                                                                    <option value="49">49</option>
                                                                    <option value="50">50</option>
                                                                    <option value="51">51</option>
                                                                    <option value="52">52</option>
                                                                    <option value="53">53</option>
                                                                    <option value="54">54</option>
                                                                    <option value="55">55</option>
                                                                    <option value="56">56</option>
                                                                    <option value="57">57</option>
                                                                    <option value="58">58</option>
                                                                    <option value="59">59</option>
                                                                    <option value="60">60</option>
                                                                    <option value="61">61</option>
                                                                    <option value="62">62</option>
                                                                    <option value="63">63</option>
                                                                    <option value="64">64</option>
                                                                    <option value="65">65</option>
                                                                    <option value="66">66</option>
                                                                    <option value="67">67</option>
                                                                    <option value="68">68</option>
                                                                    <option value="69">69</option>
                                                                    <option value="70">70</option>
                                                                    <option value="71">71</option>
                                                                    <option value="72">72</option>
                                                                    <option value="73">73</option>
                                                                    <option value="74">74</option>
                                                                    <option value="75">75</option>
                                                                    <option value="76">76</option>
                                                                    <option value="77">77</option>
                                                                    <option value="78">78</option>
                                                                    <option value="79">79</option>
                                                                    <option value="80">80</option>
                                                                    <option value="81">81</option>
                                                                    <option value="82">82</option>
                                                                    <option value="83">83</option>
                                                                    <option value="84">84</option>
                                                                    <option value="85">85</option>
                                                                    <option value="86">86</option>
                                                                    <option value="87">87</option>
                                                                    <option value="88">88</option>
                                                                    <option value="89">89</option>
                                                                    <option value="90">90</option>
                                                                    <option value="91">91</option>
                                                                    <option value="92">92</option>
                                                                    <option value="93">93</option>
                                                                    <option value="94">94</option>
                                                                    <option value="95">95</option>
                                                                    <option value="96">96</option>
                                                                    <option value="97">97</option>
                                                                    <option value="98">98</option>
                                                                    <option value="99">99</option>
                                                                    <option value="100">100</option>
                                                        </select>
                                                      </div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Desa / Kelurahan<font color='red'><font size="5">*</font></label></div></font>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_lurah" value="<?= $item['alamat_lurah']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kecamatan<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_camat" value="<?= $item['alamat_camat']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top: 14px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kabupaten / Kodya<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="alamat_kodya" value="<?= $item['alamat_kodya']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Provinsi<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="alamat_prop"value="<?= $item['alamat_prop']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">C. KETERANGAN PENDIDIKAN SEBELUMNYA</strong></font></font>
                        </div> 
                                     <strong class="card-title"><font size="1"><font color='red'>Pendidikan Sebelumnya</strong></font></font></br>
                                       <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tamatan dari<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_tmt_dri" value="<?= $item['sis_tmt_dri']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Ijazah / STTB<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sttb" value="<?= $item['sttb']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Ijazah / STTB<font color='red'></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="sttb_tgl" value="<?= $item['sttb_tgl']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">No SKHUN / NEM<font color='red'></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="nem" value="<?= $item['nem']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal SKHUN / NEM<font color='red'></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="date" id="text-input" name="nem_tgl" value="<?= $item['nem_tgl']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Lama belajar<font color='red'><font size="5">*</font></font> </label></div>
                                              <div class="col-12 col-md-9 ">
                                                <select name="sis_lma_blajar" id="sis_lma_blajar" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['sis_lma_blajar']; ?>">
                                                                    <?php
                                                                    if (($item['sis_lma_blajar']) == "2 TAHUN") {
                                                                      echo "2 TAHUN";
                                                                    }elseif (($item['sis_lma_blajar']) == "3 TAHUN") {
                                                                      echo "3 TAHUN";
                                                                    }elseif (($item['sis_lma_blajar']) == "4 TAHUN") {
                                                                      echo "4 TAHUN";
                                                                    }elseif (($item['sis_lma_blajar']) == "5 TAHUN") {
                                                                      echo "5 TAHUN";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="2 TAHUN">2 TAHUN</option>
                                                                  <option value="3 TAHUN">3 TAHUN</option>
                                                                  <option value="4 TAHUN">4 TAHUN</option>
                                                                  <option value="5 TAHUN">5 TAHUN</option>
                                                        </select>
                                                      </div>

                                          </div>
                                      </div>        

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Peserta UN SMP / MTs<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_no_psrta_unas" value="<?= $item['sis_no_psrta_unas']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            
                                          </div>

                                      </div>
                                      <strong class="card-title"><font size="1"><font color='red'>Diterima di sekolah ini</strong></font></font></br>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tingkat<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_dtrm_kelas" value="<?= $item['sis_dtrm_kelas']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bidang Keahlian<font color='red'><font size="5">*</font></font> </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="sis_dtrm_bdng_khlian" value="<?= $item['sis_dtrm_bdng_khlian']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                     
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kompetensi Keahlian<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_dtrm_komp_khlian" value="<?= $item['sis_dtrm_komp_khlian']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tanggal<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="date" name="sis_dtrm_tgl" value="<?= $item['sis_dtrm_tgl']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size=5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">D. KETERANGAN TENTANG AYAH KANDUNG</strong></font></font>
                        </div>  

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ayah" value="<?= $item['ayah']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Ayah<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ayah_ktp" value="<?= $item['ayah_ktp']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_tmpt_lhir" value="<?= $item['ayh_tmpt_lhir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="ayh_tgl_lhir" value="<?= $item['ayh_tgl_lhir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ayh_agama" id="ayh_agama" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ayh_agama']; ?>">
                                                                    <?php
                                                                    if (($item['ayh_agama']) == "ALIRAN KEPERCAYAAN") {
                                                                      echo "ALIRAN KEPERCAYAAN";
                                                                     }elseif (($item['ayh_agama']) == "KONGUCHU") {
                                                                      echo "KONGUCHU";
                                                                     }elseif (($item['ayh_agama']) == "HINDU") {
                                                                      echo "HINDU";
                                                                     }elseif (($item['ayh_agama']) == "BUDHA") {
                                                                      echo "BUDHA";
                                                                    }elseif (($item['ayh_agama']) == "KATOLIK") {
                                                                      echo "KATOLIK";
                                                                    }elseif (($item['ayh_agama']) == "KRISTEN") {
                                                                      echo "KRISTEN";
                                                                    }elseif (($item['ayh_agama']) == "ISLAM") {
                                                                      echo "ISLAM";
                                                                    }elseif (($item['ayh_agama']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="ISLAM">ISLAM</option>
                                                                  <option value="KRISTEN">KRISTEN</option>
                                                                  <option value="KATOLIK">KATOLIK</option>
                                                                  <option value="BUDHA">BUDHA</option>
                                                                  <option value="HINDU">HINDU</option>
                                                                  <option value="KONGUCHU">KONGUCHU</option>
                                                                  <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_kwarganegraan" value="<?= $item['ayh_kwarganegraan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                 <select name="ayh_pndidikan" id="ayh_pndidikan" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ayh_pndidikan']; ?>">
                                                                    <?php
                                                                    if (($item['ayh_pndidikan']) == "STRATA 3 (DOKTOR)") {
                                                                      echo "STRATA 3 (DOKTOR)";
                                                                    }elseif (($item['ayh_pndidikan']) == "STRATA 2 (MAGISTER)") {
                                                                      echo "STRATA 2 (MAGISTER)";
                                                                    }elseif (($item['ayh_pndidikan']) == "STRATA 1 (SARJANA)") {
                                                                      echo "STRATA 1 (SARJANA)";
                                                                    }elseif (($item['ayh_pndidikan']) == "SLTP/MTS/PAKET B") {
                                                                      echo "SLTP/MTS/PAKET B";
                                                                    }elseif (($item['ayh_pndidikan']) == "DIPLOMA 4") {
                                                                      echo "DIPLOMA 4";
                                                                    }elseif (($item['ayh_pndidikan']) == "DIPLOMA 3") {
                                                                      echo "DIPLOMA 3";
                                                                    }elseif (($item['ayh_pndidikan']) == "DIPLOMA 2") {
                                                                      echo "DIPLOMA 2";
                                                                    }elseif (($item['ayh_pndidikan']) == "DIPLOMA 1") {
                                                                      echo "DIPLOMA 1";
                                                                    }elseif (($item['ayh_pndidikan']) == "SLTA/MA/PAKET C") {
                                                                      echo "SLTA/MA/PAKET C";
                                                                    }elseif (($item['ayh_pndidikan']) == "SLTA") {
                                                                      echo "SLTA";
                                                                    }elseif (($item['ayh_pndidikan']) == "SLTP/MTS/PAKET B") {
                                                                      echo "SLTP/MTS/PAKET B";
                                                                    }elseif (($item['ayh_pndidikan']) == "SLTP") {
                                                                      echo "SLTP";
                                                                    }elseif (($item['ayh_pndidikan']) == "SD/MI/PAKET A") {
                                                                      echo "SD/MI/PAKET A";
                                                                    }elseif (($item['ayh_pndidikan']) == "SD") {
                                                                      echo "SD";
                                                                    }elseif (($item['ayh_pndidikan']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="SD">SD</option>
                                                                  <option value="SD/MI/PAKET A">SD/MI/PAKET A</option>
                                                                  <option value="SLTP">SLTP</option>
                                                                  <option value="SLTP/MTS/PAKET B">SLTP/MTS/PAKET B</option>
                                                                  <option value="SLTA">SLTA</option>
                                                                  <option value="SLTA/MA/PAKET C">SLTA/MA/PAKET C</option>
                                                                  <option value="DIPLOMA 1">DIPLOMA 1</option>
                                                                  <option value="DIPLOMA 2">DIPLOMA 2</option>
                                                                  <option value="DIPLOMA 3">DIPLOMA 3</option>
                                                                  <option value="DIPLOMA 4">DIPLOMA 4</option>
                                                                  <option value="STRATA 1 (SARJANA)">STRATA 1 (SARJANA)</option>
                                                                  <option value="STRATA 2 (MAGISTER)">STRATA 2 (MAGISTER)</option>
                                                                  <option value="STRATA 3 (DOKTOR)">STRATA 3 (DOKTOR)</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_pkrjaan" value="<?= $item['ayh_pkrjaan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ayh_pnghasilan_bln" id="ayh_pnghasilan_bln" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ayh_pnghasilan_bln']; ?>">
                                                                    <?php
                                                                    if (($item['ayh_pnghasilan_bln']) == "LEBIH DARI RP 5.000.000") {
                                                                      echo "LEBIH DARI RP 5.000.000";
                                                                    }elseif (($item['ayh_pnghasilan_bln']) == "RP 3.000.000 - RP 5.000.000") {
                                                                      echo "RP 3.000.000 - RP 5.000.000";
                                                                    }elseif (($item['ayh_pnghasilan_bln']) == "RP 1.000.000 - RP 3.000.000") {
                                                                      echo "RP 1.000.000 - RP 3.000.000";
                                                                    }elseif (($item['ayh_pnghasilan_bln']) == "RP 500.000 - RP 1.000.000") {
                                                                      echo "RP 500.000 - RP 1.000.000";
                                                                    }elseif (($item['ayh_pnghasilan_bln']) == "KURANG DARI RP 500.000") {
                                                                      echo "KURANG DARI RP 500.000";
                                                                    }elseif (($item['ayh_pnghasilan_bln']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="KURANG DARI RP 500.000">KURANG DARI RP 500.000</option>
                                                                  <option value="RP 500.000 - RP 1.000.000">RP 500.000 - RP 1.000.000</option>
                                                                  <option value="RP 1.000.000 - RP 3.000.000">RP 1.000.000 - RP 3.000.000</option>
                                                                  <option value="RP 3.000.000 - RP 5.000.000">RP 3.000.000 - RP 5.000.000</option>
                                                                  <option value="LEBIH DARI RP 5.000.000">LEBIH DARI RP 5.000.000</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_almat" value="<?= $item['ayh_almat']; ?>" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_tlp" value="<?= $item['ayh_tlp']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih hidup/ meninggal dunia tahun<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ayh_status" value="<?= $item['ayh_status']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>

                                       <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">E. KETERANGAN TENTANG IBU KANDUNG</strong></font></font>
                        </div>  

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ibu" value="<?= $item['ibu']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Ibu<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="ibu_ktp" value="<?= $item['ibu_ktp']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_tmpt_lhir" value="<?= $item['ibu_tmpt_lhir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="ibu_tgl_lhir" value="<?= $item['ibu_tgl_lhir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ibu_agama" id="ibu_agama" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ibu_agama']; ?>">
                                                                    <?php
                                                                    if (($item['ibu_agama']) == "ALIRAN KEPERCAYAAN") {
                                                                      echo "ALIRAN KEPERCAYAAN";
                                                                     }elseif (($item['ibu_agama']) == "KONGUCHU") {
                                                                      echo "KONGUCHU";
                                                                     }elseif (($item['ibu_agama']) == "HINDU") {
                                                                      echo "HINDU";
                                                                     }elseif (($item['ibu_agama']) == "BUDHA") {
                                                                      echo "BUDHA";
                                                                    }elseif (($item['ibu_agama']) == "KATOLIK") {
                                                                      echo "KATOLIK";
                                                                    }elseif (($item['ibu_agama']) == "KRISTEN") {
                                                                      echo "KRISTEN";
                                                                    }elseif (($item['ibu_agama']) == "ISLAM") {
                                                                      echo "ISLAM";
                                                                    }elseif (($item['ibu_agama']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="ISLAM">ISLAM</option>
                                                                  <option value="KRISTEN">KRISTEN</option>
                                                                  <option value="KATOLIK">KATOLIK</option>
                                                                  <option value="BUDHA">BUDHA</option>
                                                                  <option value="HINDU">HINDU</option>
                                                                  <option value="KONGUCHU">KONGUCHU</option>
                                                                  <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_kwarganegraan" value="<?= $item['ibu_kwarganegraan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                 <select name="ibu_pndidikan" id="ibu_pndidikan" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ibu_pndidikan']; ?>">
                                                                    <?php
                                                                    if (($item['ibu_pndidikan']) == "STRATA 3 (DOKTOR)") {
                                                                      echo "STRATA 3 (DOKTOR)";
                                                                    }elseif (($item['ibu_pndidikan']) == "STRATA 2 (MAGISTER)") {
                                                                      echo "STRATA 2 (MAGISTER)";
                                                                    }elseif (($item['ibu_pndidikan']) == "STRATA 1 (SARJANA)") {
                                                                      echo "STRATA 1 (SARJANA)";
                                                                    }elseif (($item['ibu_pndidikan']) == "SLTP/MTS/PAKET B") {
                                                                      echo "SLTP/MTS/PAKET B";
                                                                    }elseif (($item['ibu_pndidikan']) == "DIPLOMA 4") {
                                                                      echo "DIPLOMA 4";
                                                                    }elseif (($item['ibu_pndidikan']) == "DIPLOMA 3") {
                                                                      echo "DIPLOMA 3";
                                                                    }elseif (($item['ibu_pndidikan']) == "DIPLOMA 2") {
                                                                      echo "DIPLOMA 2";
                                                                    }elseif (($item['ibu_pndidikan']) == "DIPLOMA 1") {
                                                                      echo "DIPLOMA 1";
                                                                    }elseif (($item['ibu_pndidikan']) == "SLTA/MA/PAKET C") {
                                                                      echo "SLTA/MA/PAKET C";
                                                                    }elseif (($item['ibu_pndidikan']) == "SLTA") {
                                                                      echo "SLTA";
                                                                    }elseif (($item['ibu_pndidikan']) == "SLTP/MTS/PAKET B") {
                                                                      echo "SLTP/MTS/PAKET B";
                                                                    }elseif (($item['ibu_pndidikan']) == "SLTP") {
                                                                      echo "SLTP";
                                                                    }elseif (($item['ibu_pndidikan']) == "SD/MI/PAKET A") {
                                                                      echo "SD/MI/PAKET A";
                                                                    }elseif (($item['ibu_pndidikan']) == "SD") {
                                                                      echo "SD";
                                                                    }elseif (($item['ibu_pndidikan']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="SD">SD</option>
                                                                  <option value="SD/MI/PAKET A">SD/MI/PAKET A</option>
                                                                  <option value="SLTP">SLTP</option>
                                                                  <option value="SLTP/MTS/PAKET B">SLTP/MTS/PAKET B</option>
                                                                  <option value="SLTA">SLTA</option>
                                                                  <option value="SLTA/MA/PAKET C">SLTA/MA/PAKET C</option>
                                                                  <option value="DIPLOMA 1">DIPLOMA 1</option>
                                                                  <option value="DIPLOMA 2">DIPLOMA 2</option>
                                                                  <option value="DIPLOMA 3">DIPLOMA 3</option>
                                                                  <option value="DIPLOMA 4">DIPLOMA 4</option>
                                                                  <option value="STRATA 1 (SARJANA)">STRATA 1 (SARJANA)</option>
                                                                  <option value="STRATA 2 (MAGISTER)">STRATA 2 (MAGISTER)</option>
                                                                  <option value="STRATA 3 (DOKTOR)">STRATA 3 (DOKTOR)</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_pkrjaan" value="<?= $item['ibu_pkrjaan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="ibu_pnghasilan_bln" id="ibu_pnghasilan_bln" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['ibu_pnghasilan_bln']; ?>">
                                                                    <?php
                                                                    if (($item['ibu_pnghasilan_bln']) == "LEBIH DARI RP 5.000.000") {
                                                                      echo "LEBIH DARI RP 5.000.000";
                                                                    }elseif (($item['ibu_pnghasilan_bln']) == "RP 3.000.000 - RP 5.000.000") {
                                                                      echo "RP 3.000.000 - RP 5.000.000";
                                                                    }elseif (($item['ibu_pnghasilan_bln']) == "RP 1.000.000 - RP 3.000.000") {
                                                                      echo "RP 1.000.000 - RP 3.000.000";
                                                                    }elseif (($item['ibu_pnghasilan_bln']) == "RP 500.000 - RP 1.000.000") {
                                                                      echo "RP 500.000 - RP 1.000.000";
                                                                    }elseif (($item['ibu_pnghasilan_bln']) == "KURANG DARI RP 500.000") {
                                                                      echo "KURANG DARI RP 500.000";
                                                                    }elseif (($item['ibu_pnghasilan_bln']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="KURANG DARI RP 500.000">KURANG DARI RP 500.000</option>
                                                                  <option value="RP 500.000 - RP 1.000.000">RP 500.000 - RP 1.000.000</option>
                                                                  <option value="RP 1.000.000 - RP 3.000.000">RP 1.000.000 - RP 3.000.000</option>
                                                                  <option value="RP 3.000.000 - RP 5.000.000">RP 3.000.000 - RP 5.000.000</option>
                                                                  <option value="LEBIH DARI RP 5.000.000">LEBIH DARI RP 5.000.000</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_almat" value="<?= $item['ibu_almat']; ?>" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_tlp" value="<?= $item['ibu_tlp']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Masih hidup/ meninggal dunia tahun<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="ibu_status" value="<?= $item['ibu_status']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>
                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">F. KETERANGAN TENTANG WALI</strong></font></font>

                        </div>  
                            <strong class="card-title"><font size="1"><font color='red'>Wali adalah yang membiayai anda sekolah bisa ayah, ibu atau orang lain.</strong></font></font></br>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Nama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="wali" value="<?= $item['wali']; ?>" value="<?= $item['wali']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No KTP Wali<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="wali_ktp" value="<?= $item['wali_ktp']; ?>" class="form-control"></div>
                                          </div>

                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Lahir<font color='red'><font size="5">*</font></font>  </label></div>
                                              <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_tmpt_lhir" value="<?= $item['wali_tmpt_lhir']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Lahir<font color='red'><font size="5">*</font></font></label></div>
                                              <div class="col-12 col-md-9"><input type="date" id="text-input" name="wali_tgl_lhir" value="<?= $item['wali_tgl_lhir']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Agama<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                 <select name="wali_agama" id="wali_agama" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['wali_agama']; ?>">
                                                                    <?php
                                                                    if (($item['wali_agama']) == "ALIRAN KEPERCAYAAN") {
                                                                      echo "ALIRAN KEPERCAYAAN";
                                                                     }elseif (($item['wali_agama']) == "KONGUCHU") {
                                                                      echo "KONGUCHU";
                                                                     }elseif (($item['wali_agama']) == "HINDU") {
                                                                      echo "HINDU";
                                                                     }elseif (($item['wali_agama']) == "BUDHA") {
                                                                      echo "BUDHA";
                                                                    }elseif (($item['wali_agama']) == "KATOLIK") {
                                                                      echo "KATOLIK";
                                                                    }elseif (($item['wali_agama']) == "KRISTEN") {
                                                                      echo "KRISTEN";
                                                                    }elseif (($item['wali_agama']) == "ISLAM") {
                                                                      echo "ISLAM";
                                                                    }elseif (($item['wali_agama']) == "") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="ISLAM">ISLAM</option>
                                                                  <option value="KRISTEN">KRISTEN</option>
                                                                  <option value="KATOLIK">KATOLIK</option>
                                                                  <option value="BUDHA">BUDHA</option>
                                                                  <option value="HINDU">HINDU</option>
                                                                  <option value="KONGUCHU">KONGUCHU</option>
                                                                  <option value="ALIRAN KEPERCAYAAN">ALIRAN KEPERCAYAAN</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kewarganegaraan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_kwarganegraan" value="<?= $item['wali_kwarganegraan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pendidikan<font color='red'><font size="5">*</font></font></label></div>                                            
                                            <div class="col-12 col-md-9 ">
                                  <select name="wali_pndidikan" id="wali_pndidikan" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['wali_pndidikan']; ?>">
                                                                    <?php
                                                                    if (($item['wali_pndidikan']) == "STRATA 3 (DOKTOR)") {
                                                                      echo "STRATA 3 (DOKTOR)";
                                                                    }elseif (($item['wali_pndidikan']) == "STRATA 2 (MAGISTER)") {
                                                                      echo "STRATA 2 (MAGISTER)";
                                                                    }elseif (($item['wali_pndidikan']) == "STRATA 1 (SARJANA)") {
                                                                      echo "STRATA 1 (SARJANA)";
                                                                    }elseif (($item['wali_pndidikan']) == "SLTP/MTS/PAKET B") {
                                                                      echo "SLTP/MTS/PAKET B";
                                                                    }elseif (($item['wali_pndidikan']) == "DIPLOMA 4") {
                                                                      echo "DIPLOMA 4";
                                                                    }elseif (($item['wali_pndidikan']) == "DIPLOMA 3") {
                                                                      echo "DIPLOMA 3";
                                                                    }elseif (($item['wali_pndidikan']) == "DIPLOMA 2") {
                                                                      echo "DIPLOMA 2";
                                                                    }elseif (($item['wali_pndidikan']) == "DIPLOMA 1") {
                                                                      echo "DIPLOMA 1";
                                                                    }elseif (($item['wali_pndidikan']) == "SLTA/MA/PAKET C") {
                                                                      echo "SLTA/MA/PAKET C";
                                                                    }elseif (($item['wali_pndidikan']) == "SLTA") {
                                                                      echo "SLTA";
                                                                    }elseif (($item['wali_pndidikan']) == "SLTP/MTS/PAKET B") {
                                                                      echo "SLTP/MTS/PAKET B";
                                                                    }elseif (($item['wali_pndidikan']) == "SLTP") {
                                                                      echo "SLTP";
                                                                    }elseif (($item['wali_pndidikan']) == "SD/MI/PAKET A") {
                                                                      echo "SD/MI/PAKET A";
                                                                    }elseif (($item['wali_pndidikan']) == "SD") {
                                                                      echo "SD";
                                                                    }elseif (($item['wali_pndidikan']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="SD">SD</option>
                                                                  <option value="SD/MI/PAKET A">SD/MI/PAKET A</option>
                                                                  <option value="SLTP">SLTP</option>
                                                                  <option value="SLTP/MTS/PAKET B">SLTP/MTS/PAKET B</option>
                                                                  <option value="SLTA">SLTA</option>
                                                                  <option value="SLTA/MA/PAKET C">SLTA/MA/PAKET C</option>
                                                                  <option value="DIPLOMA 1">DIPLOMA 1</option>
                                                                  <option value="DIPLOMA 2">DIPLOMA 2</option>
                                                                  <option value="DIPLOMA 3">DIPLOMA 3</option>
                                                                  <option value="DIPLOMA 4">DIPLOMA 4</option>
                                                                  <option value="STRATA 1 (SARJANA)">STRATA 1 (SARJANA)</option>
                                                                  <option value="STRATA 2 (MAGISTER)">STRATA 2 (MAGISTER)</option>
                                                                  <option value="STRATA 3 (DOKTOR)">STRATA 3 (DOKTOR)</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Pekerjaan<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_pkrjaan" value="<?= $item['wali_pkrjaan']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Penghasilan / Pengeluaran Perbulan<font color='red'><font size="5">*</font></font></label></div>
                                            
                                            <div class="col-12 col-md-9 ">
                                  <select name="wali_pnghasilan_bln" id="wali_pnghasilan_bln" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['wali_pnghasilan_bln']; ?>">
                                                                    <?php
                                                                    if (($item['wali_pnghasilan_bln']) == "LEBIH DARI RP 5.000.000") {
                                                                      echo "LEBIH DARI RP 5.000.000";
                                                                    }elseif (($item['wali_pnghasilan_bln']) == "RP 3.000.000 - RP 5.000.000") {
                                                                      echo "RP 3.000.000 - RP 5.000.000";
                                                                    }elseif (($item['wali_pnghasilan_bln']) == "RP 1.000.000 - RP 3.000.000") {
                                                                      echo "RP 1.000.000 - RP 3.000.000";
                                                                    }elseif (($item['wali_pnghasilan_bln']) == "RP 500.000 - RP 1.000.000") {
                                                                      echo "RP 500.000 - RP 1.000.000";
                                                                    }elseif (($item['wali_pnghasilan_bln']) == "KURANG DARI RP 500.000") {
                                                                      echo "KURANG DARI RP 500.000";
                                                                    }elseif (($item['wali_pnghasilan_bln']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="KURANG DARI RP 500.000">KURANG DARI RP 500.000</option>
                                                                  <option value="RP 500.000 - RP 1.000.000">RP 500.000 - RP 1.000.000</option>
                                                                  <option value="RP 1.000.000 - RP 3.000.000">RP 1.000.000 - RP 3.000.000</option>
                                                                  <option value="RP 3.000.000 - RP 5.000.000">RP 3.000.000 - RP 5.000.000</option>
                                                                  <option value="LEBIH DARI RP 5.000.000">LEBIH DARI RP 5.000.000</option>
                                                        </select>
                                                      </div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Alamat rumah<font color='red'><font size="5">*</font></font> </label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_almat" value="<?= $item['wali_almat']; ?>" class="form-control"></div>
                                          </div>
                                      </div><div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No. Telp./ HP<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="wali_tlp" value="<?= $item['wali_tlp']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hubungan Wali dengan Siswa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="hub_wali_siswa" id="hub_wali_siswa" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['hub_wali_siswa']; ?>">
                                                                    <?php
                                                                    if (($item['hub_wali_siswa']) == "ANAK TIRI") {
                                                                      echo "ANAK TIRI";
                                                                    }elseif (($item['hub_wali_siswa']) == "ANAK ANGKAT") {
                                                                      echo "ANAK ANGKAT";
                                                                    }elseif (($item['hub_wali_siswa']) == "TETANGGA") {
                                                                      echo "TETANGGA";
                                                                    }elseif (($item['hub_wali_siswa']) == "SAUDARA") {
                                                                      echo "SAUDARA";
                                                                    }elseif (($item['hub_wali_siswa']) == "ANAK KANDUNG") {
                                                                      echo "ANAK KANDUNG";
                                                                    }elseif (($item['hub_wali_siswa']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="ANAK KANDUNG">ANAK KANDUNG</option>
                                                                  <option value="SAUDARA">SAUDARA</option>
                                                                  <option value="TETANGGA">TETANGGA</option>
                                                                  <option value="ANAK ANGKAT">ANAK ANGKAT</option>
                                                                  <option value="ANAK TIRI">ANAK TIRI</option>
                                                        </select>
                                                      </div>
                                          </div>
                                      </div>
                                      </div>

                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">G. KETERANGAN KESEHATAN</strong></font></font>
                        </div>   

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Golongan Darah Siswa<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9 ">
                                  <select name="sis_gol_darah" id="sis_gol_darah" class="form-control-sm form-control">
                                                                  <option value="<?php echo $item['sis_gol_darah']; ?>">
                                                                    <?php
                                                                    if (($item['sis_gol_darah']) == "AB") {
                                                                      echo "AB";
                                                                    }elseif (($item['sis_gol_darah']) == "B") {
                                                                      echo "B";
                                                                    }elseif (($item['sis_gol_darah']) == "A") {
                                                                      echo "A";
                                                                    }elseif (($item['sis_gol_darah']) == "O") {
                                                                      echo "O";
                                                                    }elseif (($item['sis_gol_darah']) == "-") {
                                                                      echo "-";
                                                                    }else {
                                                                      echo "";
                                                                    }?>
                                                                  </option>
                                                                  <option value=""> </option>
                                                                  <option value="">-</option>
                                                                  <option value="O">O</option>
                                                                  <option value="A">A</option>
                                                                  <option value="B">B</option>
                                                                  <option value="AB">AB</option>
                                                        </select>
                                                      </div>

                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Riwayat Penyakit<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_penyakit" value="<?= $item['sis_penyakit']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kelainan Jasmani<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_kel_jasmani" value="<?= $item['sis_kel_jasmani']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Tinggi dan berat badan <font color='red' font size="2">(Saat diterima di sekolah ini) </font></font><font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_tinggi_berat" value="<?= $item['sis_tinggi_berat']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      </div>
                                      
                                
                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">H. KEGEMARAN SISWA</strong></font></font>
                        </div>    

                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kesenian<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_ksenian" value="<?= $item['sis_ksenian']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Olahraga<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_olahrga" value="<?= $item['sis_olahrga']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Kemasyarakatan <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_kmasyaraktn" value="<?= $item['sis_kmasyaraktn']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Organisasi <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_organisasi" value="<?= $item['sis_organisasi']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Hobby<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_hobby" value="<?= $item['sis_hobby']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Prestasi<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="prestasi" value="<?= $item['prestasi']; ?>" class="form-control"></div>
                                          </div>
                                      </div>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Lain-lain /Cita-Cita <font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" name="sis_lain2" value="<?= $item['sis_lain2']; ?>" class="form-control"></div>
                                          </div>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">No Formulir<font color='red'><font size="5">*</font></font></label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="no_daftar" value="<?= $item['no_daftar']; ?>" class="form-control" readonly></div>
                                          </div>
                                      </div>
                                    </div>
                                      
                                    
                                      <div class="tab"> 
                            <strong class="card-title"><font size="5"><font color='red'>* = Wajib Diisi</strong></font></font></br>
                                      <div class="card-header">
                            <strong class="card-title"><font size="3">I. FILE LAMPIRAN</strong></font></font>
                        </div>     
                        <strong class="card-title"><font size="1"><font color='BLACK'>Penting : <font color='red'>Disarankan file yang diupload / yang dilampirkan ukurannya tidak lebih dari 2 MB dan bagi koneksi internetnya lambat, disarankan menguload file lampiran 1 persatu simpan sampai semua lampiran terupload.</strong></font></font></br></font>
                                      <div class="row" style = "margin-top:13px;">
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Foto Pendaftar<font color='red'><font size="5">*</font><font size="1" ='red'>(File foto yang diupload adalah foto PUTIH HITAM BERDASI dengan background warna polos (merah, biru, putih, dll)</font> </label></div>
                                            <center><div><td><?="<img src='ffoto/".$item['foto_daftar']."'style='width:200px; height:140px;'>"?></td></div></center>
                                           
                                          </div></font>
                                          <div class="col-6">
                                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Scan Kartu NISN</label></div>
                                            <div><td><?="<img src='fnisn/".$item['sis_nisn']."'style='width:200px; height:140px;'>"?></td></div>
                                            
                                          </div>
                                      </div>
                                      
                                      </div>

                                      <div class="tab"> 
                           
                                      <div class="card-header">
                            <strong class="card-title"><font size="3"></strong></font></font>
                        </div>    

                                      </div>
                                          </div>
                                          </div>
                                      </div>
                            </div>
                            </div>
                            </div>
                      <?php } ?>
                      
                                      </form>

                    <div class="card-footer">
                      <div style="overflow:auto;">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                      </div>
                      <div style="text-align:center;margin-top:20px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                      </div>
                      </div>

                    
                                      </form>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>


    <?php require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/part/footer.php"); ?>  

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>