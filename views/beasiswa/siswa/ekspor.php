<?php
$siteurl = 'http://localhost:8080/sissmkn2';
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Database.php");
require ($_SERVER['DOCUMENT_ROOT']."/sissmkn2/config/Beasiswa.php");
$db = new Pengajuan();

if (!empty($_GET['azmulai']) AND !empty($_GET['azhingga']) AND !empty($_GET['azperiode'])) {
            $content = '<html>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['azperiode'].' </h5>
            <br>
            <table border="1" style="width:500px">
            <thead style="text-align:center">
              <tr style="background-color:#faba97">
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Nama Wali</th>
                <th>Alamat</th>
                <th>Pekerjaan Wali</th>
                <th>Penghasilan Wali</th>
                <th>Nomor HP Wali</th>
                <th>Pengajuan SPP</th>
                <th>Pengajuan SBPP</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($db->tampilajuaz($_GET['azmulai'],$_GET['azhingga'],$_GET['azperiode']) as $data) {
            $content .= '
            <tr>
                        <td>'.$data['nis'].'</td>
                        <td>'.$data['namaSiswa'].'</td>
                        <td>'.$data['psCode'].'</td>
                        <td>'.$data['kelas'].'</td>
                        <td>'.$data['namaWali'].'</td>
                        <td>'.$data['alamatWali'].'</td>
                        <td>'.$data['pekerjaanWali'].'</td>
                        <td>'.$data['penghasilanWali'].'</td>
                        <td>'.$data['noHPWali'].'</td>
                        <td>'.$data['pengajuanSpp'].'</td>
                        <td>'.$data['pengajuanSbpp'].'</td>
            </tr>';
        }
        
            $content .='</tbody>
            </table>
            </body>
            </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Pengajuan Beasiswa.pdf');
    
}elseif (!empty($_GET['zamulai']) AND !empty($_GET['zahingga']) AND !empty($_GET['zaperiode'])) {
            $content = '<html>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['zaperiode'].' </h5>
            <br>
            <table border="1">
            <thead style="text-align:center">
              <tr style="background-color:#faba97">
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Nama Wali</th>
                <th>Alamat</th>
                <th>Pekerjaan Wali</th>
                <th>Penghasilan Wali</th>
                <th>Nomor HP Wali</th>
                <th>Pengajuan SPP</th>
                <th>Pengajuan SBPP</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($db->tampilajuza($_GET['zamulai'],$_GET['zahingga'],$_GET['zaperiode']) as $data) {
            $content .= '
            <tr>
                        <td>'.$data['nis'].'</td>
                        <td>'.$data['namaSiswa'].'</td>
                        <td>'.$data['psCode'].'</td>
                        <td>'.$data['kelas'].'</td>
                        <td>'.$data['namaWali'].'</td>
                        <td>'.$data['alamatWali'].'</td>
                        <td>'.$data['pekerjaanWali'].'</td>
                        <td>'.$data['penghasilanWali'].'</td>
                        <td>'.$data['noHPWali'].'</td>
                        <td>'.$data['pengajuanSpp'].'</td>
                        <td>'.$data['pengajuanSbpp'].'</td>
            </tr>';
        }
        
            $content .='</tbody>
            </table>
            </body>
            </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Pengajuan Beasiswa.pdf');
    
}elseif (!empty($_GET['byperiode'])) {
            $content = '<html>
            <body>';

        $content .= '
            <h5 style="text-align:center"> REKAP PENGAJUAN BANTUAN KERINGANAN PRA SEJAHTERA/KARSA<br>SMK NEGERI 2 MALANG<br>TAHUN AJARAN '.$_GET['byperiode'].' </h5>
            <br>
            <table border="1">
            <thead style="text-align:center">
              <tr style="background-color:#faba97">
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Kelas</th>
                <th>Nama Wali</th>
                <th>Alamat</th>
                <th>Pekerjaan Wali</th>
                <th>Penghasilan Wali</th>
                <th>Nomor HP Wali</th>
                <th>Pengajuan SPP</th>
                <th>Pengajuan SBPP</th>
              </tr>
            </thead>
            <tbody>';

        foreach ($db->tampilajuperiode($_GET['byperiode']) as $data) {
            $content .= '
            <tr>
                        <td>'.$data['nis'].'</td>
                        <td>'.$data['namaSiswa'].'</td>
                        <td>'.$data['psCode'].'</td>
                        <td>'.$data['kelas'].'</td>
                        <td>'.$data['namaWali'].'</td>
                        <td>'.$data['alamatWali'].'</td>
                        <td>'.$data['pekerjaanWali'].'</td>
                        <td>'.$data['penghasilanWali'].'</td>
                        <td>'.$data['noHPWali'].'</td>
                        <td>'.$data['pengajuanSpp'].'</td>
                        <td>'.$data['pengajuanSbpp'].'</td>
            </tr>';
        }
        
            $content .='</tbody>
            </table>
            </body>
            </html>';

        require_once('../../../html2pdf/html2pdf.class.php');
        $html2pdf = new HTML2PDF('L','A4','en');
        $html2pdf->WriteHTML($content);
        $html2pdf->Output('Pengajuan Beasiswa.pdf');
    
}
        
?>