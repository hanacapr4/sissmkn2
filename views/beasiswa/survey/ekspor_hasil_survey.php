<?php
$siteurl = 'http://localhost:8080/SISSMKN2';
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/SISSMKN2/config/Beasiswa.php");
$db = new Beasiswa();

if (!empty($_GET['azmulai']) AND !empty($_GET['azhingga']) AND !empty($_GET['azperiode'])) {
            $content = '<html>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['azperiode'].'</h5>
            <br>
            <table border="1">
            <thead style="text-align:center">
              <tr style="background-color:#faba97">
                <th rowspan="2">NIS</th>
                <th rowspan="2">Nama Siswa</th>
                <th rowspan="2">Kelas</th>
                <th rowspan="2">Tahun Ajaran</th>
                <th rowspan="2">Nama Wali</th>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">Nilai Survey</th>
                <th rowspan="2">Nilai Layak</th>
                <th rowspan="2">Kategori</th>
                <th colspan="2">Pengajuan</th>
                <th colspan="2">Disetujui</th>
              </tr>
              <tr style="background-color:#faba97">
                <th>SPP</th>
                <th>SBPP</th>
                <th>SPP</th>
                <th>SBPP</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($db->tampilbeaaz($_GET['azmulai'],$_GET['azhingga'],$_GET['azperiode']) as $data) {
            $content .= '
            <tr>
                <td>'.$data['nis'].'</td>
                <td>'.$data['namaSiswa'].'</td>
                <td>'.$data['kelas'].'</td>
                <td>'.$data['thnAjaran'].'</td>
                <td>'.$data['namaWali'].'</td>
                <td>'.$data['alamatWali'].'</td>
                <td>'.$data['survey'].'</td>
                <td>'.$data['totalKelayakan'].'</td>
                <td>'.$data['kategori'].'</td>
                <td>'.$data['pengajuanSpp'].'</td>
                <td>'.$data['pengajuanSbpp'].'</td>
                <td>'.
                $data['pengajuanSpp'].'</td>
                <td>'.
                $data['pengajuanSbpp'].'</td>
            </tr>';
        }
        
            $content .='</tbody>
            </table>
            </body>
            </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Hasil Beasiswa.pdf');
    
}else if (!empty($_GET['zamulai']) AND !empty($_GET['zahingga']) AND !empty($_GET['zaperiode'])) {
            $content = '<html>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['zaperiode'].'</h5>
            <br>
            <table border="1">
            <thead style="text-align:center">
              <tr style="background-color:#faba97">
                <th rowspan="2">NIS</th>
                <th rowspan="2">Nama Siswa</th>
                <th rowspan="2">Kelas</th>
                <th rowspan="2">Tahun Ajaran</th>
                <th rowspan="2">Nama Wali</th>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">Nilai Survey</th>
                <th rowspan="2">Nilai Layak</th>
                <th rowspan="2">Kategori</th>
                <th colspan="2">Pengajuan</th>
                <th colspan="2">Disetujui</th>
              </tr>
              <tr style="background-color:#faba97">
                <th>SPP</th>
                <th>SBPP</th>
                <th>SPP</th>
                <th>SBPP</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($db->tampilbeaza($_GET['zamulai'],$_GET['zahingga'],$_GET['zaperiode']) as $data) {
            $content .= '
            <tr>
                <td>'.$data['nis'].'</td>
                <td>'.$data['namaSiswa'].'</td>
                <td>'.$data['kelas'].'</td>
                <td>'.$data['thnAjaran'].'</td>
                <td>'.$data['namaWali'].'</td>
                <td>'.$data['alamatWali'].'</td>
                <td>'.$data['survey'].'</td>
                <td>'.$data['totalKelayakan'].'</td>
                <td>'.$data['kategori'].'</td>
                <td>'.$data['pengajuanSpp'].'</td>
                <td>'.$data['pengajuanSbpp'].'</td>
                <td>'.
                $data['pengajuanSpp'].'</td>
                <td>'.
                $data['pengajuanSbpp'].'</td>
            </tr>';
        }
        
            $content .='</tbody>
            </table>
            </body>
            </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Hasil Beasiswa.pdf');
    
}elseif (!empty($_GET['byperiode'])) {
            $content = '<html>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['byperiode'].'</h5>
            <br>
            <table border="1">
            <thead style="text-align:center">
              <tr style="background-color:#faba97">
                <th rowspan="2">NIS</th>
                <th rowspan="2">Nama Siswa</th>
                <th rowspan="2">Kelas</th>
                <th rowspan="2">Tahun Ajaran</th>
                <th rowspan="2">Nama Wali</th>
                <th rowspan="2">Alamat</th>
                <th rowspan="2">Nilai Survey</th>
                <th rowspan="2">Nilai Layak</th>
                <th rowspan="2">Kategori</th>
                <th colspan="2">Pengajuan</th>
                <th colspan="2">Disetujui</th>
              </tr>
              <tr style="background-color:#faba97">
                <th>SPP</th>
                <th>SBPP</th>
                <th>SPP</th>
                <th>SBPP</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($db->tampilbeaperiode($_GET['byperiode']) as $data) {
            $content .= '
            <tr>
                <td>'.$data['nis'].'</td>
                <td>'.$data['namaSiswa'].'</td>
                <td>'.$data['kelas'].'</td>
                <td>'.$data['thnAjaran'].'</td>
                <td>'.$data['namaWali'].'</td>
                <td>'.$data['alamatWali'].'</td>
                <td>'.$data['survey'].'</td>
                <td>'.$data['totalKelayakan'].'</td>
                <td>'.$data['kategori'].'</td>
                <td>'.$data['pengajuanSpp'].'</td>
                <td>'.$data['pengajuanSbpp'].'</td>
                <td>'.
                $data['pengajuanSpp'].'</td>
                <td>'.
                $data['pengajuanSbpp'].'</td>
            </tr>';
        }
        
            $content .='</tbody>
            </table>
            </body>
            </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Hasil Beasiswa.pdf');
    
}
        
?>