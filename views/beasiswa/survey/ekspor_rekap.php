<?php
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$db = new Beasiswa();

            $content = '<page>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP SISWA PENERIMA BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['byperiode'].'</h5>
            <br>
            <table border="1" align="center">
            <thead style="text-align:center">
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
                <td>';
                   
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "PERAWATAN SOSIAL";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->jumlahrekapisi($psCode,$byperiode) as $data) {
                            $content .= ''.$data['psCode'].'';
                        }
                    
                $content .='
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>USAHA PERJALANAN WISATA</td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "USAHA PERJALANAN WISATA";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->jumlahrekapisi($psCode,$byperiode) as $data) {
                            $content .= ''.$data['psCode'].'';
                        }
                    
                $content .='
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td>AKOMODASI PERHOTELAN</td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "AKOMODASI PERHOTELAN";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->jumlahrekapisi($psCode,$byperiode) as $data) {
                            $content .= ''.$data['psCode'].'';
                        }
                    
                $content .='
                </td>
              </tr>
              <tr>
                <td>4.</td>
                <td>KEPERAWATAN</td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "KEPERAWATAN";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->jumlahrekapisi($psCode,$byperiode) as $data) {
                            $content .= ''.$data['psCode'].'';
                        }
                    
                $content .='
                </td>
              </tr>
              <tr>
                <td>5.</td>
                <td>JASA BOGA</td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "JASA BOGA";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->jumlahrekapisi($psCode,$byperiode) as $data) {
                            $content .= ''.$data['psCode'].'';
                        }
                    
                $content .='
                </td>
              </tr>
              <tr>
                <td>6.</td>
                <td>TEKNIK KOMPUTER DAN JARINGAN</td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->rekapisi($psCode,$kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $psCode = "TEKNIK KOMPUTER DAN JARINGAN";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->jumlahrekapisi($psCode,$byperiode) as $data) {
                            $content .= ''.$data['psCode'].'';
                        }
                    
                $content .='
                </td>
              </tr>
              <tr>
                <td colspan="2">TOTAL</td>
                <td>';
                     
                        $kategori = "K1";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K2";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K3";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K4";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K5";
                        $kelas = "10";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K1";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K2";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K3";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K4";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K5";
                        $kelas = "11";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K1";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K2";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K3";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K4";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $kategori = "K5";
                        $kelas = "12";
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totalrekapisi($kategori,$kelas,$byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                    
                
                    $content .='
                </td>
                <td>';
                     
                        $byperiode = $_GET['byperiode'];
                        foreach ($db->totaljumlahrekap($byperiode) as $data) {
                            $content .= ''.$data['kategori'].'';
                        }
                
                $content .='    
                </td>
              </tr>';
        
        
            $content .='</tbody>
            </table>
            </body>
            </page>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        ob_end_clean();
        $html2pdf->Output('Hasil Beasiswa.pdf', 'I');
?>