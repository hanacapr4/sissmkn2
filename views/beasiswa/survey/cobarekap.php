<?php
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$db = new Beasiswa();
?>
            <html>
            <body onload= window.print() style="size: landscape;">

        <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN </h5>
            <br>
            <table border="1" align="center">
            <thead style="text-align:center;background-color:#faba97;">
              <tr style="background-color:#faba97">
                <th rowspan="2">No.</th>
                <th rowspan="2">Jurusan</th> 
                <th colspan="5">Kelas X</th>
                <th colspan="5">Kelas XI</th>
                <th colspan="5">Kelas XII</th>
                <th rowspan="2">Jumlah</th>
              </tr>
              <tr style="background-color:#faba97">
                <th>K1</th>
                <th>K2</th>
                <th>K3</th>
                <th>K4</th>
                <th>K5</th>
                <th>K1</th>
                <th>K2</th>
                <th>K3</th>
                <th>K4</th>
                <th>K5</th>
                <th>K1</th>
                <th>K2</th>
                <th>K3</th>
                <th>K4</th>
                <th>K5</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>PERAWATAN SOSIAL</td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "PERAWATAN SOSIAL";
                        foreach ($db->jumlahrekapisi($psCode) as $data) {
                            echo $data['psCode'];
                        }
                    ?>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>USAHA PERJALANAN WISATA</td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "USAHA PERJALANAN WISATA";
                        foreach ($db->jumlahrekapisi($psCode) as $data) {
                            echo $data['psCode'];
                        }
                    ?>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td>AKOMODASI PERHOTELAN</td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "AKOMODASI PERHOTELAN";
                        foreach ($db->jumlahrekapisi($psCode) as $data) {
                            echo $data['psCode'];
                        }
                    ?>
                </td>
              </tr>
              <tr>
                <td>4.</td>
                <td>KEPERAWATAN</td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "KEPERAWATAN";
                        foreach ($db->jumlahrekapisi($psCode) as $data) {
                            echo $data['psCode'];
                        }
                    ?>
                </td>
              </tr>
              <tr>
                <td>5.</td>
                <td>JASA BOGA</td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "JASA BOGA";
                        foreach ($db->jumlahrekapisi($psCode) as $data) {
                            echo $data['psCode'];
                        }
                    ?>
                </td>
              </tr>
              <tr>
                <td>6.</td>
                <td>TEKNIK KOMPUTER DAN JARINGAN</td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->rekapisi($psCode,$kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        foreach ($db->jumlahrekapisi($psCode) as $data) {
                            echo $data['psCode'];
                        }
                    ?>
                </td>
              </tr>
              <tr>
                <td colspan="2">TOTAL</td>
                <td>
                    <?php 
                        $kategori = "K1";
                        $kelas = "10";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K2";
                        $kelas = "10";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K3";
                        $kelas = "10";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K4";
                        $kelas = "10";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K5";
                        $kelas = "10";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K1";
                        $kelas = "11";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K2";
                        $kelas = "11";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K3";
                        $kelas = "11";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K4";
                        $kelas = "11";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K5";
                        $kelas = "11";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K1";
                        $kelas = "12";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K2";
                        $kelas = "12";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K3";
                        $kelas = "12";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K4";
                        $kelas = "12";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        $kategori = "K5";
                        $kelas = "12";
                        foreach ($db->totalrekapisi($kategori,$kelas) as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
                <td>
                    <?php 
                        foreach ($db->totaljumlahrekap() as $data) {
                            echo $data['kategori'];
                        }
                    ?>
                </td>
              </tr>
            </tbody>
            </table>
            </body>
